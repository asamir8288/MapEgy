<?php

/**
 * QuotesTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class QuotesTable extends Doctrine_Table {

    /**
     * Returns an instance of this class.
     *
     * @return object QuotesTable
     */
    public static function getInstance() {
        return Doctrine_Core::getTable('Quotes');
    }

    public static function getOne($quote_id) {
        return Doctrine_Query::create()
                        ->select('q.*')
                        ->from('Quotes q')
                        ->where('q.id =?', $quote_id)
                        ->setHydrationMode(Doctrine::HYDRATE_ARRAY)
                        ->fetchOne();
    }

    public static function getActiveQuotes($is_active = false, $limit = FALSE, $set_at_homepage = false, $lang_id =1) {
        $q = Doctrine_Query::create()
                ->select('q.*')
                ->from('Quotes q')
                ->where('q.deleted =?', FALSE)
                ->andWhere('q.lang_id =?', $lang_id);
        if ($is_active) {
            $q = $q->andWhere('q.is_active=?', TRUE);
        }
        if ($set_at_homepage) {
            $q = $q->andWhere('q.set_at_homepage=?', TRUE);
        }
        if ($limit) {
            $q = $q->limit($limit);
        }
        $q = $q->setHydrationMode(Doctrine::HYDRATE_ARRAY)
                ->orderBy('q.order_flag ASC')
                ->execute();

        return $q;
    }

    public static function getNewsCount() {
        return Doctrine_Query::create()
                        ->select('count(q.id) as count')
                        ->from('Quotes q')
                        ->where('q.deleted =?', FALSE)
                        ->setHydrationMode(Doctrine::HYDRATE_SINGLE_SCALAR)
                        ->fetchOne();
    }

}
