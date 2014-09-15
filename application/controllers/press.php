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
        $this->data['page_title'] = 'Press';
        $this->data['inside_banner'] = static_url() . 'layout/images/inside-banner.png';

        /*
         * Here we are going to return the static 3 sections in press page and the dynamic section
         * statics are: media_contact, company_profile and management_biographies
         * dynamic is press clipping
         */
        $this->data['press'] = array(
            'media_contact' => StaticPagesTable::getOne('media_contact'),
            'company_profile' => StaticPagesTable::getOne('company_profile'),
            'management_biographies' => StaticPagesTable::getOne('management_biographies')
        );
        $this->data['press_clippings'] = PressClippingTable::getAllActivePressClippings(TRUE);
        
        $this->data['contact_person'] = ConsultingExpertTable::getOne(2);

        $this->template->write_view('content', 'frontend/press_view', $this->data);
        $this->template->render();
    }
}

?>
