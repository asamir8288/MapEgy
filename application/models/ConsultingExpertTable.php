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
    
    public static function getOne($id= 1) { // ID #1 for consulting and #2 for contact person in press page
        return Doctrine_Query::create()
                ->select('e.*')
                ->from('ConsultingExpert e')
                ->where('id=?', $id)
                ->limit(1)
                ->orderBy('e.created_at DESC')
                ->setHydrationMode(Doctrine::HYDRATE_ARRAY)
                ->fetchOne();
    }
}