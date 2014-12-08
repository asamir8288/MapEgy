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
class Press extends CI_Controller {
    function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $lang_code = $this->session->userdata('lang_code');

        if ($lang_code == 'en-us') {
            $this->data['lang_id'] = 1;
            $id= 2;
        } else {
            $this->data['lang_id'] = 2;
            $id= 4;
        }
        
        $this->data['menu'] = array(0,0,0,1,0,0,0);
        $this->data['page_title'] = 'Press';
        $this->data['inside_banner'] = static_url() . 'layout/images/press.jpg';

        /*
         * Here we are going to return the static 3 sections in press page and the dynamic section
         * statics are: media_contact, company_profile and management_biographies
         * dynamic is press clipping
         */
        $this->data['press'] = array(
            'media_contact' => StaticPagesTable::getOne('media_contact', $this->data['lang_id']),
            'company_profile' => StaticPagesTable::getOne('company_profile', $this->data['lang_id']),
            'management_biographies' => StaticPagesTable::getOne('management_biographies', $this->data['lang_id'])
        );
        $this->data['press_clippings'] = PressClippingTable::getAllActivePressClippings(TRUE, $this->data['lang_id']);
        
        $this->data['contact_person'] = ConsultingExpertTable::getOne($id);

        $this->template->write_view('content', 'frontend/press_view', $this->data);
        $this->template->render();
    }
}

?>
