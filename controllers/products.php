<?php

class products extends Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->view->render('header');
        $this->view->render('other-page-nav');
        $this->view->render('product/index');
        $this->view->render('footer');
    }

    function productView($id) {

        $this->view->product_id = $id;

        $this->view->render('header');
        $this->view->render('other-page-nav');
        $this->view->render('productView/index');
        $this->view->render('footer');
    }

}
