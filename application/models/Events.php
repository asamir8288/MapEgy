<?php

/**
 * Events
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Events extends BaseEvents {

    public function addEvent(array $data) {
        $errors = $this->__validateEvent($data);
        if ($errors['error_flag']) {
            return $errors;
        } else {
            $set_in_homepage = false;
            if (isset($data['set_in_homepage'])) {
                $set_in_homepage = true;
            }

            $e = new Events();
            $e->title = $data['title'];
            $e->date = date('ymdHis', strtotime($data['date']));
            $e->summary = $data['summary'];
            $e->description = $data['description'];
            $e->image = $errors['image'];
            $e->set_in_homepage = $set_in_homepage;
            $e->created_at = date('ymdHis');
            $e->save();

            return $errors;
        }
    }

    public function updateEvent(array $data) {
        $errors = $this->__validateEvent($data);
        if ($errors['error_flag']) {
            return $errors;
        } else {
            $set_in_homepage = false;
            if (isset($data['set_in_homepage'])) {
                $set_in_homepage = true;
            }

            Doctrine_Query::create()
                    ->update('Events e')
                    ->set('e.title', '?', $data['title'])
                    ->set('e.date', '?', date('ymdHis', strtotime($data['date'])))
                    ->set('e.summary', '?', $data['summary'])
                    ->set('e.description', '?', $data['description'])
                    ->set('e.image', '?', $errors['image'])
                    ->set('e.set_in_homepage', '?', $set_in_homepage)
                    ->set('e.updated_at', '?', date('ymdHis'))
                    ->where('e.id =?', $data['id'])
                    ->execute();

            return $errors;
        }
    }

    public function deleteEvent($event_id) {
        Doctrine_Query::create()
                ->update('Events e')
                ->set('e.deleted', '?', TRUE)
                ->where('e.id =?', $event_id)
                ->execute();
    }

    private function __validateEvent($event_data) {
        $errors = array();
        $error_flag = false;

        if (!required($event_data['title'])) {
            $errors['title'] = 'Please write in event title';
            $error_flag = true;
        }
        if (!required($event_data['date'])) {
            $errors['date'] = 'Please write in event date';
            $error_flag = true;
        }
        if (!required($event_data['summary'])) {
            $errors['summary'] = 'Please write in event summary';
            $error_flag = true;
        }
        if (isset($event_data['set_in_homepage']) && !required($event_data['set_in_homepage'])) {
            $errors['set_in_homepage'] = 'Please write in caption header';
            $error_flag = true;
        }

        if (isset($event_data['id'])) {
            if (isset($_FILES['userfile']) && !empty($_FILES['userfile']['name'])) {
                $upload_data = upload_file('events', array('jpg|png|jpeg|gif'), '2028');
                if ($upload_data['error_flag']) {
                    $errors['image'] = $upload_data['errors'];
                    $error_flag = true;
                } else {
                    $errors['image'] = $upload_data['upload_data']['file_name'];
                }
            } else if ($event_data['image']) {
                $errors['image'] = $event_data['image'];
            }
        } else {
            $upload_data = upload_file('events', array('jpg|png|jpeg|gif'), '2028');
            if ($upload_data['error_flag']) {
                $errors['image'] = $upload_data['errors'];
                $error_flag = true;
            } else {
                $errors['image'] = $upload_data['upload_data']['file_name'];
            }
        }

        
        $errors['error_flag'] = $error_flag;

        return $errors;
    }

    public function events_sorting(array $data) {
        for ($i = 0; $i < count($data['order_flag']); $i++) {
            Doctrine_Query::create()
                    ->update('Events e')
                    ->set('e.order_flag', '?', $i)
                    ->where('e.id =?', $data['order_flag'][$i])
                    ->execute();
        }
    }

}
