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
        $this->data['page_title'] = 'About Us';
        $this->data['inside_banner'] = static_url() . 'layout/images/inside-banner.png';
        
        $this->data['experts'] = ExpertsTable::getAllActiveExperts();
        
        $this->template->add_js('layout/js/jquery.carouFredSel-6.2.1.js');
        $this->template->add_css('layout/css/home_scroll_plugin.css');
        $this->template->write('_scripts', "<script type='text/javascript' language='javascript'>
            $(function() {
                $('#foo1').carouFredSel({
                    auto: true,
                    prev: '#prev2',
                    next: '#next2',
                    scroll: 4,
                });
                $('#foo2').carouFredSel({
                    auto: true,
                    prev: '#prev2',
                    next: '#next2',
                    scroll: 4,
                });
                $('#foo3').carouFredSel({
                    auto: true,
                    prev: '#prev3',
                    next: '#next3',
                    scroll: 1,
                });
            });
        </script>");
        
        $this->template->write_view('content', 'frontend/about_us_view', $this->data);
        $this->template->render();
    }

}

?>
