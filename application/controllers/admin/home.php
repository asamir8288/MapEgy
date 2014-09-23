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
class Home extends My_Controller {

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

        $this->data['banner_page'] = 'clients';

        $this->data['submit_url'] = 'admin/home/sorting_clients';
        $this->template->add_js('layout/js/admin/jquery-sortable.js');

        $this->data['clients'] = BannersTable::getActiveBanners(3, FALSE, 'ASC');

        $this->template->write_view('content', 'backend/sliding/sliding', $this->data);
        $this->template->render();
    }

    public function sorting_clients() {
        $b = new Banners();
        $b->banner_sorting($_POST);

        redirect('admin/home/clients');
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

        $this->data['banner_page'] = 'partners';

        $this->data['submit_url'] = 'admin/home/sorting_partners';
        $this->template->add_js('layout/js/admin/jquery-sortable.js');

        $this->data['clients'] = BannersTable::getActiveBanners(4, FALSE, 'ASC');

        $this->template->write_view('content', 'backend/sliding/sliding', $this->data);
        $this->template->render();
    }

    public function sorting_partners() {
        $b = new Banners();
        $b->banner_sorting($_POST);

        redirect('admin/home/partners');
    }

    public function delete_logo($logo_id) {
        $b = new Banners();
        $b->deleteBanner($logo_id);

        $this->session->set_flashdata('message', array('type' => 'success',
            'body' => 'The Logo has been deleted successfully.')
        );

        redirect('admin/home/clients');
    }

    public function quotes() {
        $this->data['navigator'] = 'Home > quotes';
        $this->data['page_title'] = 'List All quotes';

        $this->data['submit_url'] = 'admin/home/sorting_quotes';
        $this->template->add_js('layout/js/admin/jquery-sortable.js');
        $this->template->add_js('layout/js/admin/sorting_items.js');

        $this->data['banner_page'] = 'quotes';

        $this->data['activeQuotes'] = QuotesTable::getActiveQuotes();
        $this->template->write_view('content', 'backend/quotes/list_quotes', $this->data);
        $this->template->render();
    }

    public function sorting_quotes() {
        $q = new Quotes();
        $q->quotes_sorting($_POST);

        redirect('admin/home/quotes');
    }

    public function add_edit_quote($quote_id = '') {
        /*
         * Required Javascript for TinyMCE component
         */
        $this->template->add_js('layout/js/jquery-1.9.1.min.js');

        /*
         * Set the Post URL in Add and Edit Modes
         */
        $this->data['post_url'] = 'admin/home/add_edit_quote';
        if ($quote_id) {
            $this->data['navigator'] = 'Home > ' . lang('quote_update');
            $this->data['page_title'] = lang('quote_update');
            $this->data['submit_btn'] = lang('quote_update');
            $this->data['post_url'] = 'admin/home/add_edit_quote/' . $quote_id;
            $this->data['data'] = QuotesTable::getOne($quote_id);
        } else {
            $this->data['navigator'] = 'Home > ' . lang('quote_add');
            $this->data['page_title'] = lang('quote_add');
            $this->data['submit_btn'] = lang('quote_add');
        }

        if ($this->input->post('submit')) {

            $b = new Quotes();

            if ($quote_id) {
                $_POST['id'] = $quote_id;
                $errors = $b->updateQuote($_POST);
            } else {
                $errors = $b->addQuote($_POST);
            }


            if ($errors['error_flag']) {
                $this->data['errors'] = $errors;
                $this->data['data'] = $_POST;
                $this->template->write_view('content', 'backend/quotes/add_edit_quote', $this->data);
                $this->template->render();
            } else {

                $this->session->set_flashdata('message', array('type' => 'success',
                    'body' => ($news_id) ? 'Your Quote has been updated successfully.' : 'Your Quote has been added successfully.')
                );
                redirect('admin/home/quotes');
            }
        } else {
            $this->template->write_view('content', 'backend/quotes/add_edit_quote', $this->data);
            $this->template->render();
        }
    }

    public function change_status($banner_id, $page = 'clients') {
        $b = new Banners();
        $b->activateDeactivateBanner($banner_id);

        $this->session->set_flashdata('message', array('type' => 'success',
            'body' => 'The status has been updated successfully.')
        );

        if ($page == 'clients') {
            redirect('admin/home/clients');
        } else {
            redirect('admin/home/partners');
        }
    }

    public function convert_status($banner_id, $page = 'clients') {
        $b = new Banners();
        $b->setUnsetAtHomepage($banner_id);

        $this->session->set_flashdata('message', array('type' => 'success',
            'body' => 'The status has been updated successfully.')
        );

        if ($page == 'clients') {
            redirect('admin/home/clients');
        } else {
            redirect('admin/home/partners');
        }
    }

    public function change_quote_status($quote_id) {
        $q = new Quotes();
        $q->activateDeactivateQuote($quote_id);

        $this->session->set_flashdata('message', array('type' => 'success',
            'body' => 'The status has been updated successfully.')
        );

        redirect('admin/home/quotes');
    }

}
