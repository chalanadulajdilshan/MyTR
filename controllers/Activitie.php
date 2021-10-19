<?php

class Activitie extends Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->view->render('activitie/index');
    }

    function view($id) {

        $this->view->id = $id;
        $this->view->render('activitie/view');
    }

}
