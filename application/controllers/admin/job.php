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
        
        $this->data['jobs'] = CareersTable::getAllActiveJobs(FALSE);
        
        $this->template->write_view('content', 'backend/careers/list_jobs', $this->data);
        $this->template->render();
    }

    public function add_edit_job($job_id = '') {
        /*
         * Required Javascript for TinyMCE component
         */
        $this->template->add_js('layout/js/jquery-1.9.1.min.js');
        $this->template->add_js('layout/js/admin/tiny_mce.js');
        $this->template->add_js('layout/js/admin/render-tiny-mce.js');

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

            if ($job_id) {
                $_POST['id'] = $job_id;
                $errors = $j->updateJob($_POST);
            } else {
                $errors = $j->addJob($_POST);
            }

            if ($errors['error_flag']) {
                $this->data['errors'] = $errors;
                $this->data['data'] = $_POST;
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

    public function delete_job() {
        
    }
    
    public function change_job_status($job_id) {
        $c = new Careers();
        $c->activateDeactivateJob($job_id);
        
        redirect('admin/job');
    }

}

?>
