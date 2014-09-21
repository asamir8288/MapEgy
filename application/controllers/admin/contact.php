<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of contact
 *
 * @author Asamir
 */
class Contact extends MY_Controller {
    function __construct() {
        parent::__construct();
    }
    
    public function index($id = '') {
        if($this->input->post('submit')){
            $c = new ContactList();
            if($id){
                $_POST['id'] = $id;
                $c->updateOption($_POST);
            }else{                
               $c->addOption($_POST); 
            }
                        
            redirect('admin/contact');
        }
        
        $this->data['submit_btn'] = lang('option_add');
        $this->data['post_url'] = 'admin/contact/index';
        
        if($id) {
            $this->data['data'] = ContactListTable::getOne($id);
            $this->data['submit_btn'] = lang('option_add');
            $this->data['post_url'] = 'admin/contact/index/' . $id;
        }

        $this->data['page_title'] = lang('page_title');
        $this->data['navigator'] = 'Home > Careers';
        $this->data['sort_url'] = 'admin/contact/sorting_options';
        
        $this->template->add_js('layout/js/admin/jquery-sortable.js');
        $this->template->add_js('layout/js/admin/sorting_items.js');
        
        $this->data['options'] = ContactListTable::getAllOptions();
        
        $this->template->write_view('content', 'backend/contact/contact', $this->data);
        $this->template->render();
    }
    
    public function sorting_options() {
        $o = new ContactList(); 
        $o->options_sorting($_POST);
        
        redirect('admin/contact');
    }
    
    public function delete_option($option_id) {
        $c = new ContactList();
        $c->deleteOption($option_id);
        
        redirect('admin/contact');
    }
}
