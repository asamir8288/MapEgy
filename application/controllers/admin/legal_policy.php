<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of legal_policy
 *
 * @author Asamir
 */
class Legal_policy extends My_Controller{
    function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $page_id = 'legal_policy';

        if ($this->input->post('submit')) {
            $_POST['page_id'] = $page_id;

            $p = new StaticPages();
            $p->updatepress($_POST);

            redirect('admin/legal_policy');
        }

        /*
         * Required Javascript for TinyMCE component
         */
        $this->template->add_js('layout/js/jquery-1.9.1.min.js');

        $this->data['data'] = StaticPagesTable::getOne($page_id);

        $this->data['navigator'] = 'Home > ' . lang('legal_policy_update');
        $this->data['page_title'] = lang('legal_policy_update');
        $this->data['post_url'] = 'admin/legal_policy/index';
        $this->data['submit_btn'] = lang('legal_policy_update');

        $this->template->write_view('content', 'backend/legal_policy', $this->data);
        $this->template->render();
    }
}
