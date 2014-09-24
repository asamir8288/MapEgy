<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of consulting
 *
 * @author Ahmed
 */
class consulting extends My_Controller{
    function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->data['navigator'] = lang('consulting_page_navigator');
        $this->data['page_title'] = lang('consulting_page_title');
        
        $this->data['post_url'] = 'admin/consulting';
        
        if($this->input->post('submit')){
            $e = new ConsultingExpert();
            $e->updateConsultingExpert($_POST);
            
//            var_dump($_POST);exit;
            
            redirect('admin/consulting');
        }
        
        $this->data['data'] = ConsultingExpertTable::getOne();
        
        $this->template->write_view('content', 'backend/consulting/add_edit_expert', $this->data);
        $this->template->render();
    }
}

?>
