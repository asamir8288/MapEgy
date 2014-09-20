<?php

/**
 * NewsTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class NewsTable extends Doctrine_Table {

    /**
     * Returns an instance of this class.
     *
     * @return object NewsTable
     */
    public static function getInstance() {
        return Doctrine_Core::getTable('News');
    }

    public static function getOne($news_id) {
        return Doctrine_Query::create()
                        ->select('n.*')
                        ->from('News n')
                        ->where('n.id =?', $news_id)
                        ->setHydrationMode(Doctrine::HYDRATE_ARRAY)
                        ->fetchOne();
    }

    public static function getActiveNews($limit = FALSE, $excepted_id = '') {
        $q = Doctrine_Query::create()
                ->select('n.*')
                ->from('News n')
                ->where('n.deleted =?', FALSE);
        if ($excepted_id) {
            $q = $q->andWhere('n.id !=?', intval($excepted_id));
        }
        if ($limit) {
            $q = $q->limit($limit);
        }
        $q = $q->setHydrationMode(Doctrine::HYDRATE_ARRAY)
                ->orderBy('n.order_flag DESC')
                ->execute();

        return $q;
    }

    public static function getNewsCount() {
        return Doctrine_Query::create()
                        ->select('count(n.id) as count')
                        ->from('News n')
                        ->where('n.deleted =?', FALSE)
                        ->setHydrationMode(Doctrine::HYDRATE_SINGLE_SCALAR)
                        ->fetchOne();
    }

}
