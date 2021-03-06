<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of about_us
 *
 * @author Ahmed
 */
class About_us extends CI_Controller {
    var $data = array();

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $lang_code = $this->session->userdata('lang_code');

        if ($lang_code == 'en-us') {
            $this->data['lang_id'] = 1;
        } else {
            $this->data['lang_id'] = 2;
        }
        
        $this->data['menu'] = array(0,0,1,0,0,0,0);
        $this->data['page_title'] = 'About Us';
        $this->data['inside_banner'] = static_url() . 'layout/images/banner3.jpg';
        
        $this->data['experts'] = ExpertsTable::getAllActiveExperts(TRUE, $this->data['lang_id']);
        
        $this->data['activeClients'] = BannersTable::getActiveBanners(3, TRUE, 'ASC', FALSE, $this->data['lang_id']);
        $this->data['activePartners'] = BannersTable::getActiveBanners(4, TRUE, 'ASC', FALSE, $this->data['lang_id']);
        $this->data['activeQuotes'] = QuotesTable::getActiveQuotes(TRUE, FALSE, FALSE, $this->data['lang_id']);
        
        $this->template->add_js('layout/js/jquery.carouFredSel-6.2.1.js');
        $this->template->add_css('layout/css/home_scroll_plugin.css');
        $this->template->write('_scripts', "<script type='text/javascript' language='javascript'>
            $(function() {
                $('#foo1').carouFredSel({
                    auto: true,
                    prev: '#prev1',
                    next: '#next1',
                    scroll: {duration : 500},
                });
                $('#foo2').carouFredSel({
                    auto: true,
                    prev: '#prev2',
                    next: '#next2',
                    scroll: {duration : 600},
                });
                $('#foo3').carouFredSel({
                    auto: true,
                    prev: '#prev3',
                    next: '#next3',
                    scroll: {duration : 800},
                });
            });
        </script>");
        
        $this->template->write_view('content', 'frontend/about_us_view', $this->data);
        $this->template->render();
    }

}

?>
