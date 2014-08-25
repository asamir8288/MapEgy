<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of home
 *
 * @author Ahmed
 */
class Home extends CI_Controller {

    //put your code here
    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->template->set_template('home_template');
        $this->data['activeBanners'] = BannersTable::getActiveBanners(1, TRUE);
        
        $this->template->write_view('content', 'frontend/homepage/index', $this->data);
        $this->template->render();
    }       

}

?>
