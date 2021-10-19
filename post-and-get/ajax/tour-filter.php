<?php

include '../../class/include.php';


//Filter Tours
if ($_POST['action'] == 'GET_FILTER_TOURS') {

    $tour_type = '';
    $start_rate = '';
    $district = '';
    $setlimit = '';
    $pagelimit = '';

//Catch the data 
    if (isset($_POST["tour_type"])) {
        $tour_type = $_POST["tour_type"];
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


    $TOUR_COMPANY = new TourCompany(NULL);
    $result = $TOUR_COMPANY->getAllByFilter($tour_type, $start_rate,$district, $pagelimit, $setlimit);
    echo $result;
}



//Pagination Show
if ($_POST['action'] == 'SHOWPAGINATION') {


//Catch the data

    $tour_type = '';
    $start_rate = '';
    $setlimit = '';
    $page = '';

//Catch the data 
    if (isset($_POST["tour_type"])) {
        $tour_type = $_POST["tour_type"];
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

    $result = $TOUR_COMPANY->showPagination($tour_type, $start_rate, $setlimit, $page);

    echo $result;
}
