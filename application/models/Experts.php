<?php

/**
 * Experts
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Experts extends BaseExperts
{
    public function addExpert(array $data) {
        $errors = $this->__validateExpert($data);
        if ($errors['error_flag']) {
            return $errors;
        } else {
            $hide= false;
            if (isset($data['hide'])) {
                $hide = true;
            }
            
            $e = new Experts();
            $e->name = $data['name'];            
            $e->title = $data['title'];            
            $e->photo = $errors['photo'];            
            $e->germany_social = $data['germany_social'];            
            $e->linkedin = $data['linkedin'];            
            $e->facebook = $data['facebook'];            
            $e->twitter = $data['twitter'];            
            $e->hide = $hide;            
            $e->created_at = date('ymdHis');            
            $e->save();

            return $errors;
        }
    }
    
    public function updateExpert(array $data) {
        $errors = $this->__validateExpert($data);
        if ($errors['error_flag']) {
            return $errors;
        } else {
            $hide= false;
            if (isset($data['hide'])) {
                $hide = true;
            }

            Doctrine_Query::create()
                    ->update('Experts e')
                    ->set('e.name', '?', $data['name'])
                    ->set('e.title', '?', $data['title'])
                    ->set('e.photo', '?', $errors['photo'])
                    ->set('e.germany_social', '?', $data['germany_social'])
                    ->set('e.linkedin', '?', $data['linkedin'])
                    ->set('e.twitter', '?', $data['twitter'])
                    ->set('e.facebook', '?', $data['facebook'])
                    ->set('e.hide', '?', $hide)
                    ->set('e.updated_at', '?', date('ymdHis'))
                    ->where('e.id =?', $data['id'])
                    ->execute();

            return $errors;
        }
    }
    
    public function deleteExpert($expert_id) {
        Doctrine_Query::create()
                ->update('Experts e')
                ->set('e.deleted', '?', TRUE)
                ->where('e.id =?', $expert_id)
                ->execute();
    }
    
    private function __validateExpert(array $expert_data) {
        $errors = array();
        $error_flag = false;
        if (!required($expert_data['title'])) {
            $errors['title'] = 'Please write in expert title';
            $error_flag = true;
        }
        if (!required($expert_data['name'])) {
            $errors['name'] = 'Please write in expert name';
            $error_flag = true;
        }
//        if (!required($expert_data['linkedin'])) {
//            $errors['linkedin'] = 'Please write in linkedin URL';
//            $error_flag = true;
//        }
//        if (!required($expert_data['facebook'])) {
//            $errors['facebook'] = 'Please write in facebook URL';
//            $error_flag = true;
//        }
//        if (!required($expert_data['twitter'])) {
//            $errors['twitter'] = 'Please write in twitter URL';
//            $error_flag = true;
//        }
//        if (!required($expert_data['germany_social'])) {
//            $errors['germany_social'] = 'Please write in germany_social URL';
//            $error_flag = true;
//        }

        if (!$error_flag && (isset($_FILES['userfile']) && !empty($_FILES['userfile']['name']))) {
            $upload_data = upload_file('experts', array('jpg|png|jpeg|gif'), '2028');
            if ($upload_data['error_flag']) {
                $errors['photo'] = $upload_data['errors'];
                $error_flag = true;
            } else {
                $errors['photo'] = $upload_data['upload_data']['file_name'];
            }
        }else{
            $errors['photo'] = $expert_data['same_image'];
        }
        $errors['error_flag'] = $error_flag;

        return $errors;
    }
    
    public function experts_sorting(array $data) {
        for ($i = 0; $i < count($data['order_flag']); $i++) {
            Doctrine_Query::create()
                    ->update('Experts e')
                    ->set('e.order_flag', '?', $i)
                    ->where('e.id =?', $data['order_flag'][$i])
                    ->execute();
        }
    }
}