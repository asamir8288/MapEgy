<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of contact
 *
 * @author Ahmed
 */
class Contact extends CI_Controller {
    function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->data['page_title'] = 'Contact Us';
        $this->data['inside_banner'] = static_url() . 'layout/images/contact-us-banner.png';

        $this->template->write_view('content', 'frontend/contact_us', $this->data);
        $this->template->render();
    }
}

?>
