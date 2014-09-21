<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cron
 *
 * @author Asamir
 */
class Cron extends CI_Controller {
    function __construct() {
        parent::__construct();
    }
    
    public function make_events_deleted() {
        EventsTable::makeEventsDeleted();
        
        echo 'Done';
    }
}
