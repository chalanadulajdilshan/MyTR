<?php

include '../../class/include.php';

//filter hotels
if ($_POST['action'] == 'GET_FILTER_CARS') {

    $vehicle_type = '';
    $air_condition = '';
    $feature = '';
    $district = '';
    $setlimit = '';
    $pagelimit = '';

//Catch the data

    if (isset($_POST["vehicle_type"])) {
        $vehicle_type = $_POST["vehicle_type"];
    }

    if (isset($_POST["air_condition"])) {
        $air_condition = $_POST["air_condition"];
    }
    if (isset($_POST["feature"])) {
        $feature = $_POST["feature"];
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


    $RENT_CAR = new RentCar(NULL);
    $result = $RENT_CAR->getAllByFilter($vehicle_type, $air_condition,$feature, $district, $pagelimit, $setlimit);
    echo $result;
}

//Pagination Show
if ($_POST['action'] == 'SHOWPAGINATION') {



    $vehicle_type = '';
    $air_condition = '';
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

