<?php

class Destinations extends Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {

        $this->view->render('destinations/index');
    }

    function view($id) {

        $this->view->id = $id;
        $this->view->render('destinations/view');
    }
   

}
