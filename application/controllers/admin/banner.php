<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of banner
 *
 * @author Asamir
 */
class Banner extends My_Controller {

    function __construct() {
        parent::__construct();
    }

    public function home_banners() {
        if ($this->input->post('submit')) {
            $_POST['displaying_place'] = 1;

            $b = new Banners();
            $b->addBanner($_POST);

            redirect('admin/banner/home_banners');
        }

        $this->data['navigator'] = 'Home > Home Banners';
        $this->data['page_title'] = 'Add New Banner';
        $this->data['post_url'] = 'admin/banner/home_banners';
        $this->data['submit_btn'] = lang('banner_add_banner');
        $this->data['submit_url'] = 'admin/banner/apply_sorting';
        $this->data['banner_page'] = 'home';
        
        $this->template->add_js('layout/js/admin/jquery-sortable.js');
        $this->template->add_js('layout/js/admin/sorting_items.js');

        $this->data['activeBanners'] = BannersTable::getActiveBanners(1, FALSE, 'ASC');
        $this->template->write_view('content', 'backend/banners/home_banners', $this->data);
        $this->template->render();
    }
    
    public function apply_sorting() {
        $b = new Banners();
        $b->banner_sorting($_POST);
        
        redirect('admin/banner/home_banners');
    }
    
    public function product_banners() {
        if ($this->input->post('submit')) {
            $_POST['displaying_place'] = 2;

            $b = new Banners();
            $b->addBanner($_POST);

            redirect('admin/banner/product_banners');
        }

        $this->data['navigator'] = 'Home > Product Banners';
        $this->data['page_title'] = 'Add New Banner';
        $this->data['post_url'] = 'admin/banner/product_banners';
        $this->data['submit_btn'] = lang('banner_add_banner');
        $this->data['banner_page'] = 'product';
        
        $this->data['submit_url'] = 'admin/banner/sorting_product';
        $this->template->add_js('layout/js/admin/jquery-sortable.js');
        $this->template->add_js('layout/js/admin/sorting_items.js');

        $this->data['activeBanners'] = BannersTable::getActiveBanners(2, FALSE, 'ASC');
        $this->template->write_view('content', 'backend/banners/home_banners', $this->data);
        $this->template->render();
    }
    
    public function sorting_product() {
        $b = new Banners();
        $b->banner_sorting($_POST);
        
        redirect('admin/banner/product_banners');
    }

    public function change_status($banner_id, $page = 'home') {
        $b = new Banners();
        $b->activateDeactivateBanner($banner_id);
        
        $this->session->set_flashdata('message', array('type' => 'success',
            'body' => 'The banner status has been updated successfully.')
        );

        if($page == 'home'){
            redirect('admin/banner/home_banners');
        }else{
            redirect('admin/banner/product_banners');
        }
    }

    public function delete_banner($banner_id, $page = 'home_banners') {
        $b = new Banners();
        $b->deleteBanner($banner_id);

        $this->session->set_flashdata('message', array('type' => 'success',
            'body' => 'The banner has been deleted successfully.')
        );
        
        if($page == 'product'){
            $page = 'product_banners';
        }

        redirect('admin/banner/'. $page);
    }

}
