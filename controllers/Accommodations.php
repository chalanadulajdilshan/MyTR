<?php

class Accommodations extends Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->view->render('accommodations/index');
    }

    function view($id) {

        $this->view->id = $id;
        $this->view->render('accommodations/view');
    }
    
    function booking($booking_id) {

        $this->view->booking_id = $booking_id;
        $this->view->render('accommodations/booking');
    }
    

}
