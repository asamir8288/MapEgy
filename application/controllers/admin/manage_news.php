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
        $this->data['activeNews'] = NewsTable::getActiveNews();
        $this->template->write_view('content', 'backend/news/list_news', $this->data);
        $this->template->render();
    }

    public function add_edit_news($news_id = '') {
        $this->data['page_title'] = 'Add News';

        /*
         * Required Javascript for TinyMCE component
         */
        $this->template->add_js('layout/js/jquery-1.9.1.min.js');
        $this->template->add_js('layout/js/admin/tiny_mce.js');
        $this->template->add_js('layout/js/admin/render-tiny-mce.js');

        /*
         * Set the Post URL in Add and Edit Modes
         */
        $this->data['post_url'] = 'admin/manage_news/add_edit_news';
        if ($news_id) {
            $this->data['post_url'] = 'admin/manage_news/add_edit_news/' . $news_id;
            $this->data['data'] = NewsTable::getOne($news_id);
        }

        if ($this->input->post('submit')) {

            $n = new News();

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
                redirect('admin/manage_news/add_edit_news');
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
