<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of job
 *
 * @author Ahmed
 */
class job extends My_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->data['page_title'] = lang('job_manager_page_title');
        $this->data['navigator'] = 'Home > Careers';
        
        $this->data['submit_url'] = 'admin/job/sorting_jobs';
        $this->template->add_js('layout/js/admin/jquery-sortable.js');
        $this->template->add_js('layout/js/admin/sorting_items.js');
        
        $this->data['jobs'] = CareersTable::getAllActiveJobs(FALSE, $this->data['lang_id']);
        
        $this->template->write_view('content', 'backend/careers/list_jobs', $this->data);
        $this->template->render();
    }
    
    public function sorting_jobs() {
        $c = new Careers(); 
        $c->jobs_sorting($_POST);
        
        redirect('admin/job');
    }

    public function add_edit_job($job_id = '') {
        /*
         * Required Javascript for TinyMCE component
         */
        $this->template->add_js('layout/js/jquery-1.9.1.min.js');

        /*
         * Declare the variables when updating and adding Experts
         */
        if ($job_id) {
            $this->data['navigator'] = 'Home > ' . lang('job_update');
            $this->data['page_title'] = lang('job_update_page_title');
            $this->data['post_url'] = 'admin/job/add_edit_job/' . $job_id;
            $this->data['submit_btn'] = lang('job_update');
            $this->data['data'] = CareersTable::getOne($job_id);
        } else {
            $this->data['navigator'] = 'Home > ' . lang('job_add');
            $this->data['page_title'] = lang('job_add_page_title');
            $this->data['post_url'] = 'admin/job/add_edit_job';
            $this->data['submit_btn'] = lang('job_add');
        }
        
        if ($this->input->post('submit')) {
             
            $j = new Careers();
            $_POST['lang_id'] = $this->data['lang_id'];

            if ($job_id) {
                $_POST['id'] = $job_id;
                $errors = $j->updateJob($_POST);
            } else {
                $errors = $j->addJob($_POST);
            }

            if ($errors['error_flag']) {
                $this->data['errors'] = $errors;
                $this->data['data'] = $_POST;
//                var_dump($this->data['data']);exit;
                $this->template->write_view('content', 'backend/careers/add_edit_job', $this->data);
                $this->template->render();
            } else {

                $this->session->set_flashdata('message', array('type' => 'success',
                    'body' => ($job_id) ? lang('job_added_msg') : lang('job_updated_msg'))
                );
                redirect('admin/job');
            }
        } else {

            $this->template->write_view('content', 'backend/careers/add_edit_job', $this->data);
            $this->template->render();
        }
    }

    public function delete_job($job_id) {
        if($job_id){
            $j = new Careers();
            $j->deleteJob($job_id);
            
            redirect('admin/job');
        }
    }
    
    public function change_job_status($job_id) {
        $c = new Careers();
        $c->activateDeactivateJob($job_id);
        
        redirect('admin/job');
    }

}

?>
