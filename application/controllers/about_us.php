<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of about_us
 *
 * @author Ahmed
 */
class About_us extends CI_Controller {
    var $data = array();

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->data['page_title'] = 'About Us';
        $this->data['inside_banner'] = static_url() . 'layout/images/inside-banner.png';
        
        $this->data['experts'] = ExpertsTable::getAllActiveExperts();
        
        $this->template->write_view('content', 'frontend/about_us_view', $this->data);
        $this->template->render();
    }

}

?>
