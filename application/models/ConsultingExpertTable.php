<?php

/**
 * ConsultingExpertTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class ConsultingExpertTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object ConsultingExpertTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('ConsultingExpert');
    }
    
    public static function getOne() {
        return Doctrine_Query::create()
                ->select('e.*')
                ->from('ConsultingExpert e')
                ->limit(1)
                ->orderBy('e.created_at DESC')
                ->setHydrationMode(Doctrine::HYDRATE_ARRAY)
                ->fetchOne();
    }
}