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

    var $data = array();

    function __construct() {
        parent::__construct();
        $lang_code = $this->session->userdata('lang_code');

        if ($lang_code == 'en-us') {
            $this->data['lang_id'] = 1;
        } else {
            $this->data['lang_id'] = 2;
        }
    }

    public function index() {
        $this->data['menu'] = array(0, 0, 0, 0, 0, 1, 0);
        $this->data['page_title'] = 'News';
        $this->data['inside_banner'] = static_url() . 'layout/images/news.jpg';

        $this->data['active_news'] = NewsTable::getActiveNews(6, '', FALSE, $this->data['lang_id']);
        $this->data['news_count'] = NewsTable::getNewsCount($this->data['lang_id']);

        $this->data['active_events'] = EventsTable::getActiveEvents(5, $this->data['lang_id']);
        $this->data['events_count'] = EventsTable::getEventsCount($this->data['lang_id']);

        $this->template->write_view('content', 'frontend/list_news', $this->data);
        $this->template->render();
    }

    public function blogs() {
        $this->data['menu'] = array(0, 0, 0, 0, 0, 1, 0);
        $this->data['page_title'] = 'Blogs';

        $this->data['active_news'] = NewsTable::getActiveNews(FALSE, '', FALSE, $this->data['lang_id']);

        $this->template->write_view('content', 'frontend/list_blogs', $this->data);
        $this->template->render();
    }

    public function blog_details($alias_url) {
        $this->data['menu'] = array(0, 0, 0, 0, 0, 1, 0);
        $this->data['page_title'] = 'Blogs';

        $blog_id = NewsTable::getBlogIdByBlogAlias($alias_url);

        $this->data['active_news'] = NewsTable::getActiveNews(5, $blog_id, FALSE,  $this->data['lang_id']);
        $this->data['blog_details'] = NewsTable::getOne($blog_id);

        $this->template->write('_scripts', '<meta property="og:type" content="Blog Details" />
            <meta property="og:title" content="' . $this->data['blog_details']['title'] . '" />
            <meta property="og:description" content="' . substr(strip_tags($this->data['blog_details']['description']), 0, 100) . '..." />
            <meta property="og:image" content="' . static_url() . 'files/news/' . $this->data['blog_details']['image'] . '" />
            <meta property="og:image:type" content="image/png" />
            <meta property="og:url" content="' . base_url() . 'news/blog/details/' . $this->data['blog_details']['id'] . '" />
            <meta property="og:site_name" content="mapegy" />
            <meta property="og:medium" content="mult" />');

        $this->template->write_view('content', 'frontend/blog_details', $this->data);
        $this->template->render();
    }

    public function list_all_events() {
        $this->data['menu'] = array(0, 0, 0, 0, 0, 1, 0);
        $this->data['page_title'] = 'All Events';

        $this->data['active_events'] = EventsTable::getActiveEvents(FALSE,  $this->data['lang_id']);

        $this->template->write_view('content', 'frontend/all_events', $this->data);
        $this->template->render();
    }

}

?>
