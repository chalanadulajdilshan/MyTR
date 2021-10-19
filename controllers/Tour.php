<?php

class Tour extends Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->view->render('tour/index');
    }

    function view($id) {

        $this->view->id = $id;
        $this->view->render('tour/view');
    }

    function packages($package) {

        $this->view->package = $package;
        $this->view->render('tour/packages');
    }

    function plan($id) {
        $this->view->id = $id;
        $this->view->render('tour/plan-your-tour');
    }
    
    function booking($id) {
        $this->view->id = $id;
        $this->view->render('tour/booking');
    }

}
