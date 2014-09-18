<?php

/**
 * Careers
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Careers extends BaseCareers {

    public function addJob(array $data) {
        $errors = $this->__validateJob($data);
        if ($errors['error_flag']) {
            return $errors;
        } else {
            $activate = FALSE;
            if (isset($data['active_flag'])) {
                $activate = TRUE;
            }

            $j = new Careers();
            $j->title = $data['title'];
            $j->description = $data['description'];
            $j->pdf = $errors['pdf'];
            $j->active_flag = $activate;
            $j->created_at = date('ymdHis');
            $j->save();

            return $errors;
        }
    }

    public function updateJob(array $data) {
        $errors = $this->__validateJob($data);
        if ($errors['error_flag']) {
            return $errors;
        } else {
            $activate = FALSE;
            if (isset($data['active_flag'])) {
                $activate = TRUE;
            }

            Doctrine_Query::create()
                    ->update('Careers c')
                    ->set('c.title', '?', $data['title'])
                    ->set('c.pdf', '?', $errors['pdf'])
                    ->set('c.description', '?', $data['description'])
                    ->set('c.active_flag', '?', $activate)
                    ->set('c.updated_at', '?', date('ymdHis'))
                    ->where('c.id =?', $data['id'])
                    ->execute();

            return $errors;
        }
    }

    public function activateDeactivateJob($job_id) {
        $currentJobStatus = $this->getCurrentJobStatus($job_id);
        $new_status = TRUE;
        if ($currentJobStatus)
            $new_status = FALSE;

        Doctrine_Query::create()
                ->update('Careers c')
                ->set('c.active_flag', '?', $new_status)
                ->where('c.id =?', $job_id)
                ->execute();
    }

    private function getCurrentJobStatus($job_id) {
        return Doctrine_Query::create()
                        ->select('c.active_flag')
                        ->from('Careers c')
                        ->where('c.id =?', $job_id)
                        ->setHydrationMode(Doctrine::HYDRATE_SINGLE_SCALAR)
                        ->fetchOne();
    }

    private function __validateJob(array $job_data) {
        $errors = array();
        $error_flag = false;
        if (!required($job_data['title'])) {
            $errors['title'] = 'Please write in job title';
            $error_flag = true;
        }
        if (!required($job_data['description'])) {
            $errors['description'] = 'Please write in description';
            $error_flag = true;
        }

        if (!$error_flag && (isset($_FILES['userfile']) && !empty($_FILES['userfile']['name']))) {
            $upload_data = upload_file('job_pdfs', array('doc', 'docx', 'pdf', 'odt', 'txt', 'rtf'), '5120');
            if ($upload_data['error_flag']) {
                $errors['pdf'] = $upload_data['errors'];
                $error_flag = true;
            } else {
                $errors['pdf'] = $upload_data['upload_data']['file_name'];
            }
        } else {
            $errors['pdf'] = '';
        }
        $errors['error_flag'] = $error_flag;

        return $errors;
    }
    
    public function jobs_sorting(array $data) {
        for ($i = 0; $i < count($data['order_flag']); $i++) {
            Doctrine_Query::create()
                    ->update('Careers c')
                    ->set('c.order_flag', '?', $i)
                    ->where('c.id =?', $data['order_flag'][$i])
                    ->execute();
        }
    }

}