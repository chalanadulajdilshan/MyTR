<?php

include '../../class/include.php';

//filter hotels
if ($_POST['action'] == 'GET_FILTER_HOTELS') {

    $accommodation_type = '';
    $start_rate = '';
    $facility = '';
    $setlimit = '';
    $pagelimit = '';

//Catch the data

    if (isset($_POST["accommodation_type"])) {
        $accommodation_type = $_POST["accommodation_type"];
    }

    if (isset($_POST["start_rate"])) {
        $start_rate = $_POST["start_rate"];
    }

    if (isset($_POST["facility"])) {
        $facility = $_POST["facility"];
    }

    if (isset($_POST["setlimit"])) {
        $setlimit = $_POST["setlimit"];
    }

    if (isset($_POST["pagelimit"])) {
        $pagelimit = $_POST["pagelimit"];
    }


    $ACCOMMODATION = new Accommodation(NULL);
    $result = $ACCOMMODATION->getAllByFilter($accommodation_type, $start_rate, $facility, $pagelimit, $setlimit);
    
    echo $result;
}

//Pagination Show
if ($_POST['action'] == 'SHOWPAGINATION') {

    $accommodation_type = '';
    $start_rate = '';
    $facility = '';
    $setlimit = '';
    $page = '';

//Catch the data

    if (isset($_POST["accommodation_type"])) {
        $accommodation_type = $_POST["accommodation_type"];
    }

    if (isset($_POST["start_rate"])) {
        $start_rate = $_POST["start_rate"];
    }

    if (isset($_POST["facility"])) {
        $facility = $_POST["facility"];
    }


    if (isset($_POST["setlimit"])) {
        $setlimit = $_POST["setlimit"];
    }

    if (isset($_POST["page"])) {
        $page = $_POST["page"];
    }

    $ACCOMMODATION = new Accommodation(NULL);
    $result = $ACCOMMODATION->showPagination($accommodation_type, $start_rate, $facility, $setlimit, $page);

    echo $result;
}

