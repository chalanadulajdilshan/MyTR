<?php

include '../../class/include.php';


//Filter Tours
if ($_POST['action'] == 'GET_FILTER_RESTAURANTS') {

    $serve_type = '';
    $start_rate = '';
    $district = '';
    $setlimit = '';
    $pagelimit = '';

//Catch the data 
    if (isset($_POST["serve_type"])) {
        $serve_type = $_POST["serve_type"];
    }

    if (isset($_POST["district"])) {
        $district = $_POST["district"];
    }

    if (isset($_POST["start_rate"])) {
        $start_rate = $_POST["start_rate"];
    }


    if (isset($_POST["setlimit"])) {
        $setlimit = $_POST["setlimit"];
    }

    if (isset($_POST["pagelimit"])) {
        $pagelimit = $_POST["pagelimit"];
    }

    $RESTAURANT = new Restaurant(NULL);
    $result = $RESTAURANT->getAllByFilter($serve_type, $start_rate, $district, $pagelimit, $setlimit);
    echo $result;
}



//Pagination Show
if ($_POST['action'] == 'SHOWPAGINATION') {


//Catch the data

    $serve_type = '';
    $start_rate = '';
    $setlimit = '';
    $page = '';

//Catch the data 
    if (isset($_POST["serve_type"])) {
        $serve_type = $_POST["serve_type"];
    }

    if (isset($_POST["start_rate"])) {
        $start_rate = $_POST["start_rate"];
    }


    if (isset($_POST["setlimit"])) {
        $setlimit = $_POST["setlimit"];
    }

    if (isset($_POST["page"])) {
        $page = $_POST["page"];
    }

    $TOUR_COMPANY = new TourCompany(NULL);

    $result = $TOUR_COMPANY->showPagination($serve_type, $start_rate, $setlimit, $page);

    echo $result;
}
