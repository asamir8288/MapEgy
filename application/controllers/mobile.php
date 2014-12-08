<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of mobile
 *
 * @author asamir
 */
class Mobile extends CI_Controller {

    var $data = array();

    function __construct() {
        parent::__construct();

        $this->template->set_template('mobile');
        
        $lang_code = $this->session->userdata('lang_code');

        if ($lang_code == 'en-us') {
            $this->data['lang_id'] = 1;
        } else {
            $this->data['lang_id'] = 2;
        }
    }

    public function index() {
        $this->data['activeNews'] = NewsTable::getActiveNews(2, '', TRUE, $this->data['lang_id']);
        $this->data['active_events'] = EventsTable::getActiveEvents(3, $this->data['lang_id']);
        $this->data['activeClients'] = BannersTable::getActiveBanners(3, TRUE, 'ASC', TRUE, $this->data['lang_id']);
        $this->data['activeQuotes'] = QuotesTable::getActiveQuotes(TRUE, FALSE, TRUE, $this->data['lang_id']);

        $this->template->add_css('layout/css/home_scroll_plugin.css');
        $this->template->add_js('layout/js/jquery-1.9.1.min.js');
        $this->template->add_js('layout/js/jquery.carouFredSel-6.2.1.js');
        $this->template->write_view('content', 'mobile/homepage', $this->data);
        $this->template->render();
    }

    public function services() {
        $this->data['page_title'] = lang('services');
        $this->template->write_view('content', 'mobile/services', $this->data);
        $this->template->render();
    }

    public function career() {
        $this->data['page_title'] = lang('career');
        $this->data['jobs'] = CareersTable::getAllActiveJobs(TRUE, $this->data['lang_id']);

        $this->template->write_view('content', 'mobile/careers', $this->data);
        $this->template->render();
    }

    public function contact() {
        if ($this->input->post('submit')) {
            $newsletter = 'No';
            if ($this->input->post('newsletter')) {
                $newsletter = 'Yes';
            }

            $c = new Contacts();
            $c->addContact($_POST);

            $body = '<p><strong>I am:</strong> ' . $this->input->post('iam') . '</p>';
            $body .= '<p><strong>Title:</strong> ' . $this->input->post('title') . '</p>';
            $body .= '<p><strong>Surname:</strong> ' . $this->input->post('surname') . '</p>';
            $body .= '<p><strong>Given Name:</strong> ' . $this->input->post('given_name') . '</p>';
            $body .= '<p><strong>Email:</strong> ' . $this->input->post('email') . '</p>';
            $body .= '<p><strong>Phone:</strong> ' . $this->input->post('phone') . '</p>';
            $body .= '<p><strong>Company:</strong> ' . $this->input->post('company') . '</p>';
            $body .= '<p><strong>Function:</strong> ' . $this->input->post('function') . '</p>';
            $body .= '<p><strong>Message:</strong> ' . $this->input->post('message') . '</p>';
            $body .= '<p><strong>I want to sign up for mapegy\'s newsletter!:</strong> ' . $newsletter . '</p>';
            send_email('wagner@mapegy.com', 'Test', $body);

            $this->session->set_flashdata('message', array('type' => 'success',
                'body' => 'Thank you for contacting us. We will get back to you as soon as possible.')
            );

            redirect('mobile/contact');
        }

        $this->data['page_title'] = lang('contact');
        $this->data['jobs'] = CareersTable::getAllActiveJobs(TRUE, $this->data['lang_id']);
        $this->data['options'] = ContactListTable::getAllOptions();

        $this->template->add_css('layout/css/form.css');
        $this->template->write_view('content', 'mobile/contact', $this->data);
        $this->template->render();
    }

    public function products() {
        $this->data['page_title'] = lang('product');
        $this->data['activeFeatures'] = ProductFeatureTable::getActiveFeature(FALSE, $this->data['lang_id']);

        $this->template->write_view('content', 'mobile/list_products', $this->data);
        $this->template->render();
    }

    public function press() {
        $this->data['page_title'] = lang('press');
        $this->data['press'] = array(
            'media_contact' => StaticPagesTable::getOne('media_contact', $this->data['lang_id']),
            'company_profile' => StaticPagesTable::getOne('company_profile', $this->data['lang_id']),
            'management_biographies' => StaticPagesTable::getOne('management_biographies', $this->data['lang_id'])
        );
        $this->data['press_clippings'] = PressClippingTable::getAllActivePressClippings(TRUE, $this->data['lang_id']);

        $this->template->write_view('content', 'mobile/press', $this->data);
        $this->template->render();
    }

    public function news() {
        $this->data['page_title'] = lang('news');
        $this->data['active_news'] = NewsTable::getActiveNews(5, '', FALSE, $this->data['lang_id']);
        $this->data['active_events'] = EventsTable::getActiveEvents(FALSE, $this->data['lang_id']);

        $this->template->write_view('content', 'mobile/news', $this->data);
        $this->template->render();
    }
    
    public function news_details($news_alias) {
        $this->data['page_title'] = lang('news');
        $blog_id = NewsTable::getBlogIdByBlogAlias($news_alias);
        
        $this->data['news'] = NewsTable::getOne($blog_id);

        $this->template->write_view('content', 'mobile/news_details', $this->data);
        $this->template->render();
    }
    
    public function events() {
        $this->data['page_title'] = 'Events';
        $this->data['active_events'] = EventsTable::getActiveEvents(FALSE, $this->data['lang_id']);
        
        $this->template->write_view('content', 'mobile/list_events', $this->data);
        $this->template->render();
    }

    public function about() {
        $this->data['page_title'] = lang('about');

        $this->data['experts'] = ExpertsTable::getAllActiveExperts(TRUE, $this->data['lang_id']);

        $this->data['activeClients'] = BannersTable::getActiveBanners(3, TRUE, 'ASC', FALSE, $this->data['lang_id']);
        $this->data['activePartners'] = BannersTable::getActiveBanners(4, TRUE, 'ASC', FALSE, $this->data['lang_id']);
        $this->data['activeQuotes'] = QuotesTable::getActiveQuotes(TRUE, FALSE, FALSE, $this->data['lang_id']);

        $this->template->add_css('layout/css/home_scroll_plugin.css');
        $this->template->add_js('layout/js/jquery-1.9.1.min.js');
        $this->template->add_js('layout/js/jquery.carouFredSel-6.2.1.js');
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

        $this->template->write_view('content', 'mobile/about_us', $this->data);
        $this->template->render();
    }
    
    public function privacy_policy(){
        $this->data['page_title'] = 'Privacy';
        
        $this->data['legal_policy'] = StaticPagesTable::getOne('legal_policy', $this->data['lang_id']);
        
        $this->template->write_view('content', 'mobile/privacy_policy', $this->data);
        $this->template->render();
    }
    
    public function switch_lang() {
        $lang_code = $_GET['lang'];

        if ($lang_code == 'en-us') {
            $this->session->set_userdata('lang_code',  'en-us');
        } else {
            $this->session->set_userdata('lang_code',  'de-ch');
        }
        
        redirect($_SERVER['HTTP_REFERER']);
    }

}
