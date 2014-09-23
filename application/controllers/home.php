<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of home
 *
 * @author Ahmed
 */
class Home extends CI_Controller {

    //put your code here
    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->template->set_template('home_template');
        
        $this->data['activeNews'] = NewsTable::getActiveNews(5, '', TRUE);
        $this->data['newsCount'] = NewsTable::getNewsCount();
        $this->data['active_events'] = EventsTable::getActiveEvents(3);
        $this->data['activeBanners'] = BannersTable::getActiveBanners(1, TRUE, 'ASC');
        $this->data['activeClients'] = BannersTable::getActiveBanners(3, TRUE, 'ASC', TRUE);
        $this->data['activeQuotes'] = QuotesTable::getActiveQuotes(TRUE, FALSE, TRUE);                
        
        $this->template->write_view('content', 'frontend/homepage/index', $this->data);
        $this->template->render();
    }       

}

?>
