<?php

/**
 * EventsTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class EventsTable extends Doctrine_Table {

    /**
     * Returns an instance of this class.
     *
     * @return object EventsTable
     */
    public static function getInstance() {
        return Doctrine_Core::getTable('Events');
    }

    public static function getOne($event_id) {
        return Doctrine_Query::create()
                        ->select('e.*')
                        ->from('Events e')
                        ->where('e.id =?', $event_id)
                        ->setHydrationMode(Doctrine::HYDRATE_ARRAY)
                        ->fetchOne();
    }

    public static function getActiveEvents($limit = FALSE, $lang_id = 1) {
        $q = Doctrine_Query::create()
                ->select('e.*')
                ->from('Events e')
                ->where('e.deleted =?', FALSE)
                ->andWhere('e.lang_id =?', $lang_id)
                ->andWhere('e.date >= "' . date('Y-m-d 00:00:00') . '"');
        if ($limit) {
            $q = $q->limit($limit);
        }
        $q = $q->setHydrationMode(Doctrine::HYDRATE_ARRAY)
                ->orderBy('e.date ASC')
                ->execute();

        return $q;
    }

    public static function getEventsCount($lang_id = 1) {
        return Doctrine_Query::create()
                        ->select('count(e.id) as count')
                        ->from('Events e')
                        ->where('e.deleted =?', FALSE)
                        ->andWhere('e.lang_id =?', $lang_id)
                        ->andWhere('e.date >= "' . date('Y-m-d 00:00:00') . '"')
                        ->setHydrationMode(Doctrine::HYDRATE_SINGLE_SCALAR)
                        ->fetchOne();
    }

    public static function makeEventsDeleted() {
        Doctrine_Query::create()
                ->update('Events e')
                ->set('e.deleted', '?', TRUE)
                ->set('e.updated_at', '?', date('ymdHis'))
                ->where('e.date <?', date('ymdHis'))
                ->execute();
    }

}
