<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of press
 *
 * @author Ahmed
 */
class Press extends My_Controller {

    var $data = array();

    function __construct() {
        parent::__construct();        
    }

    public function index() {
        $this->data['navigator'] = 'Home > Press';

        $this->template->write_view('content', 'backend/presses/list_presses_links', $this->data);
        $this->template->render();
    }

    public function media_contact() {
        $page_id = 'media_contact';

        if ($this->input->post('submit')) {
            $_POST['page_id'] = $page_id;
            $_POST['lang_id'] = $this->data['lang_id'];

            $p = new StaticPages();
            $p->updatepress($_POST);

            redirect('admin/press/media_contact');
        }

        /*
         * Required Javascript for TinyMCE component
         */
        $this->template->add_js('layout/js/jquery-1.9.1.min.js');

        $this->data['data'] = StaticPagesTable::getOne($page_id, $this->data['lang_id']);

        $this->data['navigator'] = 'Home > ' . lang('media_update');
        $this->data['page_title'] = lang('media_update');
        $this->data['post_url'] = 'admin/press/media_contact';
        $this->data['submit_btn'] = lang('media_update');

        $this->template->write_view('content', 'backend/presses/_media_contact', $this->data);
        $this->template->render();
    }

    public function company_profile() {
        $page_id = 'company_profile';

        if ($this->input->post('submit')) {
            $_POST['page_id'] = $page_id;
            $_POST['lang_id'] = $this->data['lang_id'];

            $p = new StaticPages();
            $p->updatepress($_POST);

            redirect('admin/press/company_profile');
        }
        /*
         * Required Javascript for TinyMCE component
         */
        $this->template->add_js('layout/js/jquery-1.9.1.min.js');

        $this->data['navigator'] = 'Home > ' . lang('company_profile_update');
        $this->data['page_title'] = lang('company_profile_update');
        $this->data['post_url'] = 'admin/press/company_profile';
        $this->data['submit_btn'] = lang('company_profile_update');

        $this->data['data'] = StaticPagesTable::getOne($page_id, $this->data['lang_id']);

        $this->template->write_view('content', 'backend/presses/_company_profile', $this->data);
        $this->template->render();
    }

    public function management_biographies() {
        $page_id = 'management_biographies';

        if ($this->input->post('submit')) {
            $_POST['page_id'] = $page_id;
            $_POST['lang_id'] = $this->data['lang_id'];

            $p = new StaticPages();
            $p->updatepress($_POST);

            redirect('admin/press/management_biographies');
        }
        /*
         * Required Javascript for TinyMCE component
         */
        $this->template->add_js('layout/js/jquery-1.9.1.min.js');

        $this->data['navigator'] = 'Home > ' . lang('management_biographies_update');
        $this->data['page_title'] = lang('management_biographies_update');
        $this->data['post_url'] = 'admin/press/management_biographies';
        $this->data['submit_btn'] = lang('management_biographies_update');

        $this->data['data'] = StaticPagesTable::getOne($page_id, $this->data['lang_id']);

        $this->template->write_view('content', 'backend/presses/_management_biographies', $this->data);
        $this->template->render();
    }

    public function list_clipping() {
        $this->data['navigator'] = 'Home > Press Clipping';
        $this->data['page_title'] = 'List Press Clipping';

        $this->data['submit_url'] = 'admin/press/sorting_press_clipping';
        $this->template->add_js('layout/js/admin/jquery-sortable.js');
        $this->template->add_js('layout/js/admin/sorting_items.js');

        $this->data['activeClipping'] = PressClippingTable::getAllActivePressClippings(FALSE, $this->data['lang_id']);
        $this->template->write_view('content', 'backend/presses/list_clipping', $this->data);
        $this->template->render();
    }

    public function sorting_press_clipping() {
        $c = new PressClipping();
        $c->clipping_sorting($_POST);

        redirect('admin/press/list_clipping');
    }

    public function add_edit_clipping($clipping_id = '') {
        /*
         * Required Javascript for TinyMCE component
         */
        $this->template->add_js('layout/js/jquery-1.9.1.min.js');

        $this->template->add_css('layout/css/jquery-ui.css');
        $this->template->add_js('layout/js/admin/jquery-ui.js');

        /*
         * Set the Post URL in Add and Edit Modes
         */
        $this->data['post_url'] = 'admin/press/add_edit_clipping';
        if ($clipping_id) {
            $this->data['navigator'] = 'Home > ' . lang('clipping_update');
            $this->data['page_title'] = lang('clipping_update');
            $this->data['submit_btn'] = lang('clipping_update');
            $this->data['post_url'] = 'admin/press/add_edit_clipping/' . $clipping_id;
            $this->data['data'] = PressClippingTable::getOne($clipping_id);
        } else {
            $this->data['navigator'] = 'Home > ' . lang('clipping_add');
            $this->data['page_title'] = lang('clipping_add');
            $this->data['submit_btn'] = lang('clipping_add');
        }

        if ($this->input->post('submit')) {

            $c = new PressClipping();
            $_POST['lang_id'] = $this->data['lang_id'];

            if ($clipping_id) {
                $_POST['id'] = $clipping_id;
                $errors = $c->updatePressClipping($_POST);
            } else {
                $errors = $c->addPressClipping($_POST);
            }


            if ($errors['error_flag']) {
                $this->data['errors'] = $errors;
                $this->data['data'] = $_POST;
                $this->template->write_view('content', 'backend/presses/add_edit_press_clipping', $this->data);
                $this->template->render();
            } else {

                $this->session->set_flashdata('message', array('type' => 'success',
                    'body' => ($clipping_id) ? 'Your press clipping has been updated successfully.' : 'Your press clipping has been added successfully.')
                );
                redirect('admin/press/list_clipping');
            }
        } else {
            $this->template->write_view('content', 'backend/presses/add_edit_press_clipping', $this->data);
            $this->template->render();
        }
    }

    public function delete_press_clipping($id) {
        $p = new PressClipping();

        $p->deletePressClipping($id);

        redirect('admin/press/list_clipping');
    }

    public function contact_person() {
        $this->data['navigator'] = lang('contact_person_page_navigator');
        $this->data['page_title'] = lang('contact_person_page_title');

        $this->data['post_url'] = 'admin/press/contact_person';
        
        if($this->data['lang_id'] == 1){
            $id = 2;
        }else{
            $id = 4;
        }

        if ($this->input->post('submit')) {
            $e = new ConsultingExpert();
            $e->updateConsultingExpert($_POST, $id);

            redirect('admin/press/contact_person');
        }

        $this->data['data'] = ConsultingExpertTable::getOne($id);

        $this->template->write_view('content', 'backend/presses/add_edit_contact_person', $this->data);
        $this->template->render();
    }

}

?>
