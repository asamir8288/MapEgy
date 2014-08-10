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
class Product extends My_Controller {
    function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->data['navigator'] = 'Home > Product Features';
        $this->data['page_title'] = 'List All Features';
        
        $this->data['activeFeatures'] = ProductFeatureTable::getActiveFeature();
        $this->template->write_view('content', 'backend/products/list_features', $this->data);
        $this->template->render();
    }

    public function add_edit_feature($feature_id = '') {
        /*
         * Required Javascript for TinyMCE component
         */
        $this->template->add_js('layout/js/jquery-1.9.1.min.js');
        $this->template->add_js('layout/js/admin/tiny_mce.js');
        $this->template->add_js('layout/js/admin/render-tiny-mce.js');

        /*
         * Set the Post URL in Add and Edit Modes
         */
        $this->data['post_url'] = 'admin/product/add_edit_feature';
        if ($feature_id) {
            $this->data['navigator'] = 'Home > ' . lang('feature_update');
            $this->data['page_title'] = lang('feature_update');
            $this->data['submit_btn'] = lang('feature_update');
            $this->data['post_url'] = 'admin/product/add_edit_feature/' . $feature_id;
            $this->data['data'] = ProductFeatureTable::getOne($feature_id);
        }else{
            $this->data['navigator'] = 'Home > ' . lang('feature_add');
            $this->data['page_title'] = lang('feature_add');
            $this->data['submit_btn'] = lang('feature_add');
        }

        if ($this->input->post('submit')) {

            $f = new ProductFeature();

            if ($feature_id) {
                $_POST['id'] = $feature_id;
                $errors = $f->updateFeature($_POST);
            } else {
                $errors = $f->addFeature($_POST);
            }
            

            if ($errors['error_flag']) {
                $this->data['errors'] = $errors;
                $this->data['data'] = $_POST;
                $this->template->write_view('content', 'backend/products/add_edit_feature', $this->data);
                $this->template->render();
            } else {

                $this->session->set_flashdata('message', array('type' => 'success',
                    'body' => ($feature_id) ? 'Your product feature has been updated successfully.' : 'Your product feature has been added successfully.')
                );
                redirect('admin/product');
            }
        } else {
            $this->template->write_view('content', 'backend/products/add_edit_feature', $this->data);
            $this->template->render();
        }
    }

    public function delete_feature($feature_id) {
        $f = new ProductFeature();
        $f->deleteFeature($feature_id);

        redirect('admin/product');
    }
}

?>
