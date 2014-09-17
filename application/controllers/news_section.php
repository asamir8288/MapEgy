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

        $this->data['active_news'] = NewsTable::getActiveNews(6);
        $this->data['news_count'] = NewsTable::getNewsCount();

        $this->data['active_events'] = EventsTable::getActiveEvents(5);
        $this->data['events_count'] = EventsTable::getEventsCount();

        $this->template->write_view('content', 'frontend/list_news', $this->data);
        $this->template->render();
    }

    public function blogs() {
        $this->data['page_title'] = 'Blogs';

        $this->data['active_news'] = NewsTable::getActiveNews();

        $this->template->write_view('content', 'frontend/list_blogs', $this->data);
        $this->template->render();
    }

    public function blog_details($blog_id) {
        $this->data['page_title'] = 'Blogs';

        $this->data['active_news'] = NewsTable::getActiveNews(6);
        $this->data['blog_details'] = NewsTable::getOne($blog_id);

        $this->template->write('_scripts', '<meta property="og:type" content="Blog Details" />
            <meta property="og:title" content="'.$this->data['blog_details']['title'].'" />
            <meta property="og:description" content="'.substr($this->data['blog_details']['description'], 0, 100).'..." />
            <meta property="og:image" content="'.static_url() . 'files/news/' . $this->data['blog_details']['image'] .'" />
            <meta property="og:image:type" content="image/png" />
            <meta property="og:url" content="'. base_url() . 'news/blog/details/'. $this->data['blog_details']['id'] .'" />
            <meta property="og:site_name" content="mapegy" />
            <meta property="og:medium" content="mult" />');

        $this->template->write_view('content', 'frontend/blog_details', $this->data);
        $this->template->render();
    }

}

?>
