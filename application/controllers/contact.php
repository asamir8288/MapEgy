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
        
        $lang_code = $this->session->userdata('lang_code');

        if ($lang_code == 'en-us') {
            $this->data['lang_id'] = 1;
        } else {
            $this->data['lang_id'] = 2;
        }
    }

    public function index() {
        $this->data['menu'] = array(0,0,0,0,0,0,1);
        $this->data['page_title'] = 'Contact Us';
        $this->data['map_banner'] = TRUE;

        $this->data['options'] = ContactListTable::getAllOptions($this->data['lang_id']);

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
            
            send_email('wagner@mapegy.com', 'Website Request From ' . $this->input->post('email'), $body);  
            send_email('office@mapegy.com', 'Website Request From ' . $this->input->post('email'), $body);  
            
            $this->confirmation_email($this->input->post('email'), $this->input->post('surname'), $this->input->post('title'));

            $this->session->set_flashdata('message', array('type' => 'success',
                'body' => 'Thank you for contacting us. We will get back to you as soon as possible.')
            );

            redirect('contact');
        }

        $this->template->write_view('content', 'frontend/contact_us', $this->data);
        $this->template->render();
    }
    
    private function confirmation_email($email, $name, $title) {
        $body = '<p>Dear ' . $title . ' ' . $name . ',<p>';
        $body .= '<p>Thank you for your request and your interest in mapegy. Please note that this is an automated email. One of our representatives will contact you as soon as possible.<p>';
        
        send_email($email, 'Thank you', $body); 
    }

}

?>
