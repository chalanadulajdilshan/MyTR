<?php

include '../../class/include.php';

//filter hotels
if ($_POST['action'] == 'GET_FILTER_CARS') {

    $vehicle_type = '';
    $start_rate = '';
    $district = '';
    $setlimit = '';
    $pagelimit = '';

//Catch the data

    if (isset($_POST["vehicle_type"])) {
        $vehicle_type = $_POST["vehicle_type"];
    }

    if (isset($_POST["start_rate"])) {
        $start_rate = $_POST["start_rate"];
    }

    if (isset($_POST["district"])) {
        $district = $_POST["district"];
    }

    if (isset($_POST["setlimit"])) {
        $setlimit = $_POST["setlimit"];
    }

    if (isset($_POST["pagelimit"])) {
        $pagelimit = $_POST["pagelimit"];
    }


    $RENT_CAR = new RentCarCompany(NULL);
    $result = $RENT_CAR->getAllByFilter($vehicle_type, $start_rate, $district, $pagelimit, $setlimit);
    echo $result;
}

//Pagination Show
if ($_POST['action'] == 'SHOWPAGINATION') {



    $vehicle_type = '';
    $start_rate = '';
    $district = '';

    //pagination data
    $setlimit = '';
    $page = '';



//Catch the data 
    if (isset($_POST["setlimit"])) {
        $setlimit = $_POST["setlimit"];
    }

    if (isset($_POST["page"])) {
        $page = $_POST["page"];
    }

    $RENT_CAR = new RentCarCompany(NULL);
    $result = $RENT_CAR->showPagination($setlimit, $page);

    echo $result;
}

