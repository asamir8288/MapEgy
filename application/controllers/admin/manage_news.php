<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of manage_news
 *
 * @author Ahmed
 */
class Manage_news extends My_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->data['navigator'] = 'Home > Blogs';
        $this->data['page_title'] = 'List All Blogs';
        
        $this->data['submit_url'] = 'admin/manage_news/sorting_news';
        $this->template->add_js('layout/js/admin/jquery-sortable.js');
        $this->template->add_js('layout/js/admin/sorting_items.js');
        
        $this->data['activeNews'] = NewsTable::getActiveNews(FALSE, '', false, $this->data['lang_id']);
        $this->template->write_view('content', 'backend/news/list_news', $this->data);
        $this->template->render();
    }
    
    public function sorting_news() {
        $n = new News(); 
        $n->news_sorting($_POST);
        
        redirect('admin/manage_news');
    }
    
    public function set_in_homepage($news_id, $status) {
        NewsTable::setInHomepageOrNot($news_id, $status);
        redirect('admin/manage_news');
    }

    public function add_edit_news($news_id = '') {
        /*
         * Required Javascript for TinyMCE component
         */
        $this->template->add_js('layout/js/jquery-1.9.1.min.js');
        
        $this->template->add_css('layout/css/jquery-ui.css');
        $this->template->add_js('layout/js/admin/jquery-ui.js');

        /*
         * Set the Post URL in Add and Edit Modes
         */
        $this->data['post_url'] = 'admin/manage_news/add_edit_news';
        if ($news_id) {
            $this->data['navigator'] = 'Home > ' . lang('news_update');
            $this->data['page_title'] = lang('news_update');
            $this->data['submit_btn'] = lang('news_update');
            $this->data['post_url'] = 'admin/manage_news/add_edit_news/' . $news_id;
            $this->data['data'] = NewsTable::getOne($news_id);
        }else{
            $this->data['navigator'] = 'Home > ' . lang('news_add');
            $this->data['page_title'] = lang('news_add');
            $this->data['submit_btn'] = lang('news_add');
        }

        if ($this->input->post('submit')) {

            $n = new News();
            $_POST['lang_id'] = $this->data['lang_id'];

            if ($news_id) {
                $_POST['id'] = $news_id;
                $errors = $n->updateNews($_POST);
            } else {
                $errors = $n->addNews($_POST);
            }
            

            if ($errors['error_flag']) {
                $this->data['errors'] = $errors;
                $this->data['data'] = $_POST;
                $this->template->write_view('content', 'backend/news/add_edit_news', $this->data);
                $this->template->render();
            } else {

                $this->session->set_flashdata('message', array('type' => 'success',
                    'body' => ($news_id) ? 'Your news has been updated successfully.' : 'Your news has been added successfully.')
                );
                redirect('admin/manage_news');
            }
        } else {
            $this->template->write_view('content', 'backend/news/add_edit_news', $this->data);
            $this->template->render();
        }
    }

    public function delete_news($news_id) {
        $n = new News();
        $n->deleteNews($news_id);

        redirect('admin/manage_news');
    }

}

?>
