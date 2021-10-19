<?php

class Rent_Car_Companies extends Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->view->render('rent_car_companies/index');
    }

    function view($id) {

        $this->view->id = $id;
        $this->view->render('rent_car_companies/view');
    }
    
    function packages($id) {

        $this->view->id = $id;
        $this->view->render('rent_car_companies/packages');
    }
    
    function booking($id) {

        $this->view->id = $id;
        $this->view->render('rent_car_companies/booking');
    }

}
