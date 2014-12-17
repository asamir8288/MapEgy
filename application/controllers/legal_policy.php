<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Legal_policy
 *
 * @author Ahmed
 */
class Legal_policy extends CI_Controller {
    var $data = array();

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->data['page_title'] = lang('page_title');
        $this->data['inside_banner'] = static_url() . 'layout/images/inside-banner.png';
        
        $lang_code = $this->session->userdata('lang_code');
        if ($lang_code == 'en-us') {
            $this->data['lang_id'] = 1;
        } else {
            $this->data['lang_id'] = 2;
        }
        
        $this->data['legal_policy'] = StaticPagesTable::getOne('legal_policy', $this->data['lang_id']);
        
        $this->template->add_js('layout/js/jquery.carouFredSel-6.2.1.js');
        $this->template->add_css('layout/css/home_scroll_plugin.css');

        $this->template->write_view('content', 'frontend/legal_policy', $this->data);
        $this->template->render();
    }

}

?>
