<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of urls_seo
 *
 * @author asamir
 */
class Urls_seo extends My_Controller {
    static $prefix = array(
        'contact' => URL_PREFIX_EN_CONTACT,
        'about' => URL_PREFIX_EN_ABOUT,     
        'press' => URL_PREFIX_EN_PRESS,     
        'service' => URL_PREFIX_EN_SERVICES,     
        'product' => URL_PREFIX_EN_PRODUCT,     
        'news' => URL_PREFIX_EN_NEWS,     
        'imprint' => URL_PREFIX_EN_IMPRINT,     
        'career' => URL_PREFIX_EN_CAREER,   
        'events' => URL_PREFIX_EN_EVENTS,   
        'home' => URL_PREFIX_EN_HOME,   
    );
    
    function __construct() {
        parent::__construct();
    }
    
    public function index() {
        if($this->input->post('submit')){
            $guide_id = $_POST['guide_id'];
            save_url(self::$prefix[$guide_id], $this->data['lang_id']);
            
            redirect('admin/urls_seo?guide='. $_POST['guide_id']);
        }
        
        $this->data['guide'] = $_GET['guide'];
        $this->data['data'] = UrlsTable::getOne($this->data['guide'], $this->data['lang_id']);
        
        if(!is_array($this->data['data']))
            $this->data['data'] = array();
        
        $this->template->write_view('content', 'backend/page_url_seo', $this->data);
        $this->template->render();
    }
}
