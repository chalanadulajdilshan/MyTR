<?php

class termCondition extends Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->view->render('header');
        $this->view->render('other-page-nav');
        $this->view->render('termCondition/index');
        $this->view->render('footer');
    }

}
