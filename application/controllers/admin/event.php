<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of event
 *
 * @author Ahmed
 */
class Event extends My_Controller {
    function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->data['navigator'] = 'Home > Events';
        $this->data['page_title'] = 'List All Events';
        
        $this->data['submit_url'] = 'admin/event/sorting_events';
        $this->template->add_js('layout/js/admin/jquery-sortable.js');
        $this->template->add_js('layout/js/admin/sorting_items.js');
        
        $this->data['activeEvents'] = EventsTable::getActiveEvents(FALSE, $this->data['lang_id']);
        $this->template->write_view('content', 'backend/events/list_events', $this->data);
        $this->template->render();
    }
    
    public function sorting_events() {
        $e = new Events(); 
        $e->events_sorting($_POST);
        
        redirect('admin/event');
    }

    public function add_edit_event($event_id = '') {
        /*
         * Required Javascript for TinyMCE component
         */
        $this->template->add_js('layout/js/jquery-1.9.1.min.js');
        
        $this->template->add_css('layout/css/jquery-ui.css');
        $this->template->add_js('layout/js/admin/jquery-ui.js');

        /*
         * Set the Post URL in Add and Edit Modes
         */
        $this->data['post_url'] = 'admin/event/add_edit_event';
        if ($event_id) {
            $this->data['navigator'] = 'Home > ' . lang('event_update');
            $this->data['page_title'] = lang('event_update');
            $this->data['submit_btn'] = lang('event_update');
            $this->data['post_url'] = 'admin/event/add_edit_event/' . $event_id;
            $this->data['data'] = EventsTable::getOne($event_id);
        }else{
            $this->data['navigator'] = 'Home > ' . lang('event_add');
            $this->data['page_title'] = lang('event_add');
            $this->data['submit_btn'] = lang('event_add');
        }

        if ($this->input->post('submit')) {

            $e = new Events();
            $_POST['lang_id'] = $this->data['lang_id'];

            if ($event_id) {
                $_POST['id'] = $event_id;
                $errors = $e->updateEvent($_POST);
            } else {
                $errors = $e->addEvent($_POST);
            }
            

            if ($errors['error_flag']) {
                $this->data['errors'] = $errors;
                $this->data['data'] = $_POST;
                $this->template->write_view('content', 'backend/events/add_edit_event', $this->data);
                $this->template->render();
            } else {

                $this->session->set_flashdata('message', array('type' => 'success',
                    'body' => ($event_id) ? 'Your event has been updated successfully.' : 'Your event has been added successfully.')
                );
                redirect('admin/event');
            }
        } else {
            $this->template->write_view('content', 'backend/events/add_edit_event', $this->data);
            $this->template->render();
        }
    }

    public function delete_event($event_id) {
        $e = new Events();
        $e->deleteEvent($event_id);

        redirect('admin/event');
    }
}

?>
