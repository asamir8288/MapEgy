<?php

/**
 * PressClipping
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class PressClipping extends BasePressClipping {

    public function addPressClipping(array $data) {
        $errors = $this->__validatePressClipping($data);
        if ($errors['error_flag']) {
            return $errors;
        } else {
            $is_active = false;
            if (isset($data['is_active'])) {
                $is_active = true;
            }

            $c = new PressClipping();
            $c->date = $data['date'];
            $c->title = $data['title'];
            $c->description = $data['description'];
            $c->logo = $errors['clipping_logo'];
            $c->is_active = $is_active;
            $c->link_url = $data['link_url'];
            $c->created_at = date('ymdHis');
            $c->save();

            return $errors;
        }
    }

    public function updatePressClipping(array $data) {
        $errors = $this->__validatePressClipping($data);
        if ($errors['error_flag']) {
            return $errors;
        } else {
            $is_active = false;
            if (isset($data['is_active'])) {
                $is_active = true;
            }

            Doctrine_Query::create()
                    ->update('PressClipping c')
                    ->set('c.title', '?', $data['title'])
                    ->set('c.date', '?', $data['date'])
                    ->set('c.description', '?', $data['description'])
                    ->set('c.link_url', '?', $data['link_url'])
                    ->set('c.logo', '?', $errors['clipping_logo'])
                    ->set('c.is_active', '?', $is_active)
                    ->set('c.updated_at', '?', date('ymdHis'))
                    ->where('c.id =?', $data['id'])
                    ->execute();

            return $errors;
        }
    }

    public function deletePressClipping($clipping_id) {
        Doctrine_Query::create()
                ->update('PressClipping c')
                ->set('c.deleted', '?', TRUE)
                ->where('c.id =?', $clipping_id)
                ->execute();
    }

    private function __validatePressClipping($clipping_data) {
        $errors = array();
        $error_flag = false;

        if (!required($clipping_data['title'])) {
            $errors['title'] = 'Please write in clipping title';
            $error_flag = true;
        }
        if (!required($clipping_data['date'])) {
            $errors['date'] = 'Please write in clipping date';
            $error_flag = true;
        }
        if (!required($clipping_data['description'])) {
            $errors['description'] = 'Please write in clipping brief';
            $error_flag = true;
        }
        if (isset($clipping_data['is_active']) && !required($clipping_data['is_active'])) {
            $errors['is_active'] = 'Please write in caption header';
            $error_flag = true;
        }

        if (isset($clipping_data['id'])) {
            if (isset($_FILES['userfile']) && !empty($_FILES['userfile']['name'])) {
                $upload_data = upload_file('press_clipping_logos', array('jpg|png|jpeg|gif'), '2028');
                if ($upload_data['error_flag']) {
                    $errors['image'] = $upload_data['errors'];
                    $error_flag = true;
                } else {
                    $errors['clipping_logo'] = $upload_data['upload_data']['file_name'];
                }
            } else if ($clipping_data['same_image']) {
                $errors['clipping_logo'] = $clipping_data['same_image'];
            }
        } else {
            $upload_data = upload_file('press_clipping_logos', array('jpg|png|jpeg|gif'), '2028');
            if ($upload_data['error_flag']) {
                $errors['image'] = $upload_data['errors'];
                $error_flag = true;
            } else {
                $errors['clipping_logo'] = $upload_data['upload_data']['file_name'];
            }
        }


        $errors['error_flag'] = $error_flag;

        return $errors;
    }

    public function clipping_sorting(array $data) {
        for ($i = 0; $i < count($data['order_flag']); $i++) {
            Doctrine_Query::create()
                    ->update('PressClipping c')
                    ->set('c.order_flag', '?', $i)
                    ->where('c.id =?', $data['order_flag'][$i])
                    ->execute();
        }
    }

}
