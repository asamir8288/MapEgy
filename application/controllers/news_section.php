<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of news_section
 *
 * @author Ahmed
 */
class News_section extends CI_Controller {
    function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->data['page_title'] = 'News';
        $this->data['inside_banner'] = static_url() . 'layout/images/inside-banner.png';

        $this->data['active_news'] = NewsTable::getActiveNews(4);
        $this->data['news_count'] = NewsTable::getNewsCount();

        $this->template->write_view('content', 'frontend/list_news', $this->data);
        $this->template->render();
    }
}

?>
