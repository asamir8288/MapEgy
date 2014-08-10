<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of product
 *
 * @author Ahmed
 */
class Product extends CI_Controller {
    var $data = array();
    function __construct() {
        parent::__construct();
        
        $this->template->set_template('product_template');
    }
    
    public function index() {
        $this->data['activeFeatures'] = ProductFeatureTable::getActiveFeature();
        $this->template->write_view('content', 'frontend/_product_features', $this->data);
        $this->template->render();
    }
}

?>
