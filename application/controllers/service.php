<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Service
 *
 * @author Ahmed
 */
class Service extends CI_Controller{
    function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->data['menu'] = array(0,1,0,0,0,0);
        $this->data['page_title'] = 'Services';
        $this->data['inside_banner'] = static_url() . 'layout/images/inside-banner.png';

        $this->data['consulting'] = ConsultingExpertTable::getOne();

        $this->template->write_view('content', 'frontend/consulting', $this->data);
        $this->template->render();
    }
}

?>
