<?php

/**
 * ProductFeature
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class ProductFeature extends BaseProductFeature
{
     public function addFeature(array $data) {
        $errors = $this->__validateFeature($data);
        if ($errors['error_flag']) {
            return $errors;
        } else {

            $f = new ProductFeature();
            $f->description = $data['description'];
            $f->image = $errors['feature_image'];
            $f->created_at = date('ymdHis');
            $f->save();

            return $errors;
        }
    }

    public function updateFeature(array $data) {
        $errors = $this->__validateFeature($data);
        if ($errors['error_flag']) {
            return $errors;
        } else {
           
            Doctrine_Query::create()
                    ->update('ProductFeature f')
                    ->set('f.description', '?', $data['description'])
                    ->set('f.image', '?', $errors['feature_image'])
                    ->set('f.updated_at', '?', date('ymdHis'))
                    ->where('f.id =?', $data['id'])
                    ->execute();

            return $errors;
        }
    }

    public function deleteFeature($event_id) {
        Doctrine_Query::create()
                ->update('ProductFeature f')
                ->set('f.deleted', '?', TRUE)
                ->where('f.id =?', $event_id)
                ->execute();
    }

    private function __validateFeature($feature_data) {
        $errors = array();
        $error_flag = false;
        
        if (!required($feature_data['description'])) {
            $errors['description'] = 'Please write in feature brief';
            $error_flag = true;
        }
        if (!$error_flag) {
            $upload_data = upload_file('products', array('jpg|png|jpeg|gif'), '2028');
            if ($upload_data['error_flag']) {
                $errors['image'] = $upload_data['errors'];
                $error_flag = true;
            } else {
                $errors['feature_image'] = $upload_data['upload_data']['file_name'];
            }
        }
        $errors['error_flag'] = $error_flag;

        return $errors;
    }
}