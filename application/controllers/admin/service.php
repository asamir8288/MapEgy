<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Service
 *
 * @author Ahmed
 */
class Service extends My_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->data['navigator'] = lang('service_page_navigator');
        $this->data['page_title'] = lang('service_page_title');

        $this->data['post_url'] = 'admin/service';

        if ($this->data['lang_id'] == 1) {
            $id = 1;
        } else {
            $id = 3;
        }

        if ($this->input->post('submit')) {
            $e = new ConsultingExpert();
            $e->updateConsultingExpert($_POST, $id);

            redirect('admin/service');
        }

        $this->data['data'] = ConsultingExpertTable::getOne($id);

        $this->template->write_view('content', 'backend/consulting/add_edit_expert', $this->data);
        $this->template->render();
    }

}

?>
