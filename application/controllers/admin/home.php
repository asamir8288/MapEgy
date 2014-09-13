<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of home
 *
 * @author Asamir
 */
class Home extends My_Controller{
    function __construct() {
        parent::__construct();
    }
    
    public function clients() {       
        if ($this->input->post('submit')) {
            $_POST['displaying_place'] = 3;

            $b = new Banners();
            $b->addBanner($_POST);

            redirect('admin/home/clients');
        }
        
        $this->data['navigator'] = 'Home > Clients';
        $this->data['page_title'] = 'List All Clients';
        $this->data['post_url'] = 'admin/home/clients';
        $this->data['clients'] = BannersTable::getActiveBanners(3, FALSE, 'ASC');
        
        $this->template->write_view('content', 'backend/sliding/sliding', $this->data);
        $this->template->render();
    }
    
    public function partners() {       
        if ($this->input->post('submit')) {
            $_POST['displaying_place'] = 4;

            $b = new Banners();
            $b->addBanner($_POST);

            redirect('admin/home/partners');
        }
        
        $this->data['navigator'] = 'Home > Partners';
        $this->data['page_title'] = 'List All Partners';
        $this->data['post_url'] = 'admin/home/partners';
        $this->data['clients'] = BannersTable::getActiveBanners(4, FALSE, 'ASC');
        
        $this->template->write_view('content', 'backend/sliding/sliding', $this->data);
        $this->template->render();
    }
    
     public function delete_logo($logo_id) {
        $b = new Banners();
        $b->deleteBanner($logo_id);

        $this->session->set_flashdata('message', array('type' => 'success',
            'body' => 'The Logo has been deleted successfully.')
        );

        redirect('admin/home/clients');
    }
}
