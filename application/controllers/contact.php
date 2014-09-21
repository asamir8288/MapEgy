<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of contact
 *
 * @author Ahmed
 */
class Contact extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->data['page_title'] = 'Contact Us';
        $this->data['map_banner'] = TRUE;

        if ($this->input->post('submit')) {
            $newsletter = 'No';
            if ($this->input->post('newsletter')) {
                $newsletter = 'Yes';
            }

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

            redirect('contact');
        }

        $this->template->write_view('content', 'frontend/contact_us', $this->data);
        $this->template->render();
    }

}

?>
