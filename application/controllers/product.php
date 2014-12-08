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
        $lang_code = $this->session->userdata('lang_code');

        if ($lang_code == 'en-us') {
            $this->data['lang_id'] = 1;
        } else {
            $this->data['lang_id'] = 2;
        }
        
        $this->data['activeBanners'] = BannersTable::getActiveBanners(2, TRUE, 'DESC', FALSE, $this->data['lang_id']);
        $this->data['activeFeatures'] = ProductFeatureTable::getActiveFeature(FALSE, $this->data['lang_id']);
        $this->template->write_view('content', 'frontend/_product_features', $this->data);
        $this->template->render();
    }

}

?>
