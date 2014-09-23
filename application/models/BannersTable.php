<?php

/**
 * BannersTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class BannersTable extends Doctrine_Table {

    /**
     * Returns an instance of this class.
     *
     * @return object BannersTable
     */
    public static function getInstance() {
        return Doctrine_Core::getTable('Banners');
    }

    public static function getOne($banner_id) {
        return Doctrine_Query::create()
                        ->select('b.*')
                        ->from('Banners b')
                        ->where('b.id =?', $banner_id)
                        ->setHydrationMode(Doctrine::HYDRATE_ARRAY)
                        ->fetchOne();
    }

    public static function getActiveBanners($banner_place = 1 , $is_active = TRUE, $order = 'DESC', $set_at_homepage = false) {
        $q = Doctrine_Query::create()
                ->select('b.*')
                ->from('Banners b')
                ->where('b.displaying_place=?', $banner_place);
        if ($is_active) {
            $q = $q->andWhere('b.is_active=?', $is_active);
        }
        if ($set_at_homepage) {
            $q = $q->andWhere('b.set_at_homepage=?', $set_at_homepage);
        }
        $q = $q->setHydrationMode(Doctrine::HYDRATE_ARRAY)
                ->orderBy('b.order_flag '. $order)
                ->execute();

        return $q;
    }

}
