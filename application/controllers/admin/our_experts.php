<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of our_experts
 *
 * @author Ahmed
 */
class Our_experts extends My_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->data['navigator'] = 'Home > Experts';
        $this->data['page_title'] = 'List All Experts';
        
        $this->data['submit_url'] = 'admin/our_experts/sorting_experts';
        $this->template->add_js('layout/js/admin/jquery-sortable.js');
        $this->template->add_js('layout/js/admin/sorting_items.js');
        
        $this->data['experts'] = ExpertsTable::getAllActiveExperts(FALSE, $this->data['lang_id']);
        $this->template->write_view('content', 'backend/experts/list_experts', $this->data);
        $this->template->render();
    }
    
    public function sorting_experts() {
        $e = new Experts();
        $e->experts_sorting($_POST);
        
        redirect('admin/our_experts');
    }

    public function add_edit_expert($expert_id = '') {    
        
        /*
         * Declare the variables when updating and adding Experts
         */
        if ($expert_id) {
            $this->data['navigator'] = 'Home > Update Experts';
            $this->data['page_title'] = 'Update Expert';
            $this->data['post_url'] = 'admin/our_experts/add_edit_expert/' . $expert_id;
            $this->data['submit_btn'] = lang('expert_update');
            $this->data['data'] = ExpertsTable::getOne($expert_id);
        } else {
            $this->data['navigator'] = 'Home > Add Experts';
            $this->data['page_title'] = 'Add Expert';
            $this->data['post_url'] = 'admin/our_experts/add_edit_expert';
            $this->data['submit_btn'] = lang('expert_add');
        }

        if ($this->input->post('submit')) {
            $e = new Experts();
            
            $_POST['lang_id'] = $this->data['lang_id'];

            if ($expert_id) {
                $_POST['id'] = $expert_id;
                $errors = $e->updateExpert($_POST);
            } else {
                $errors = $e->addExpert($_POST);
            }

            if ($errors['error_flag']) {
                $this->data['errors'] = $errors;
                $this->data['data'] = $_POST;
                $this->template->write_view('content', 'backend/experts/add_edit_expert', $this->data);
                $this->template->render();
            } else {

                $this->session->set_flashdata('message', array('type' => 'success',
                    'body' => ($expert_id) ? lang('expert_added_msg') : lang('expert_updated_msg'))
                );
                redirect('admin/our_experts');
            }
        } else {

            $this->template->write_view('content', 'backend/experts/add_edit_expert', $this->data);
            $this->template->render();
        }
    }

    public function delete_expert($expert_id) {
        $e = new Experts();
        $e->deleteExpert($expert_id);
        
        $this->session->set_flashdata('message', array('type' => 'success',
                    'body' => lang('expert_delete_msg'))
                );
        
        redirect('admin/our_experts');
    }

    public function hide_expert() {
        
    }

}

?>
