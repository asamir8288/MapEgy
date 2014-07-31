<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dashboard
 *
 * @author Ahmed
 */
class Dashboard extends My_Controller{
    function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->data['page_title'] = 'Welcome To Dashboard';
        
        $this->template->write_view('content', 'backend/dashboard', $this->data);
        $this->template->render();
    }
}

?>
