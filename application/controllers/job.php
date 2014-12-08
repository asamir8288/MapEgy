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
class Job extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $lang_code = $this->session->userdata('lang_code');

        if ($lang_code == 'en-us') {
            $this->data['lang_id'] = 1;
        } else {
            $this->data['lang_id'] = 2;
        }
        
        $this->data['menu'] = array(0,0,0,0,1,0,0);
        $this->data['page_title'] = 'Careers';
        $this->data['inside_banner'] = static_url() . 'layout/images/career.jpg';

        $this->data['jobs'] = CareersTable::getAllActiveJobs(TRUE, $this->data['lang_id']);

        $this->template->write_view('content', 'frontend/list_all_jobs', $this->data);
        $this->template->render();
    }

    public function download_file($job_id) {
        $this->load->helper('download');
        
        $job = CareersTable::getOne($job_id);

        $data = file_get_contents('files/job_pdfs/' . $job['pdf']);
        $path_info = pathinfo($job['pdf']);
//        $name = $job['title'] . '.' . $path_info['extension'];

        force_download($job['pdf'], $data);
    }

}

?>
