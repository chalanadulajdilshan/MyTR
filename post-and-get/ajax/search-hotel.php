<?php

include '../../class/include.php';

//filter hotels
if ($_POST['action'] == 'SEARCH_HOTELS') {

    $city = '';
    $check_in = '';
    $check_out = '';
    $rooms = '';
    $adults = '';
    $city_id = '';

    $setlimit = '';
    $pagelimit = '';

//Catch the data

    if (isset($_POST["city"])) {
        $city = $_POST["city"];
        $CITY = new City(NULL);

        $city_id = $CITY->getCityIdByName($city);
    }

    if (isset($_POST["check_in"])) {
        $check_in = $_POST["check_in"];
    }

    if (isset($_POST["check_out"])) {
        $check_out = $_POST["check_out"];
    }
    if (isset($_POST["rooms"])) {
        $rooms = $_POST["rooms"];
    }
    if (isset($_POST["adults"])) {
        $adults = $_POST["adults"];
    }

    if (isset($_POST["setlimit"])) {
        $setlimit = $_POST["setlimit"];
    }

    if (isset($_POST["pagelimit"])) {
        $pagelimit = $_POST["pagelimit"];
    }


    $ACCOMMODATION = new Accommodation(NULL);
    $result = $ACCOMMODATION->searchAccommodation(intval($city_id), $rooms, $adults, $pagelimit, $setlimit);


    echo $result;
}

//Pagination Show
if ($_POST['action'] == 'SHOWPAGINATION') {

    $city = '';
    $check_in = '';
    $check_out = '';
    $rooms = '';
    $adults = '';
    $city_id = '';

    ///////
    $setlimit = '';
    $page = '';

//Catch the data

    if (isset($_POST["city"])) {
        $city = $_POST["city"];
        $CITY = new City(NULL);

        $city_id = $CITY->getCityIdByName($city);
    }

    if (isset($_POST["check_in"])) {
        $check_in = $_POST["check_in"];
    }

    if (isset($_POST["check_out"])) {
        $check_out = $_POST["check_out"];
    }
    if (isset($_POST["rooms"])) {
        $rooms = $_POST["rooms"];
    }
    if (isset($_POST["adults"])) {
        $adults = $_POST["adults"];
    }

    if (isset($_POST["setlimit"])) {
        $setlimit = $_POST["setlimit"];
    }

    if (isset($_POST["page"])) {
        $page = $_POST["page"];
    }

    $ACCOMMODATION = new Accommodation(NULL);
    $result = $ACCOMMODATION->showPaginationSearch(intval($city_id), $rooms, $adults, $setlimit, $page);

    echo $result;
}

//count acc
if ($_POST['action'] == 'COUNT_ACC') {

    $city = '';
    if (isset($_POST["city"])) {
        $city = $_POST["city"];
        $CITY = new City(NULL);

        $city_id = $CITY->getCityIdByName($city);
    }

    $ACCOMMODATION = new Accommodation(NULL);


    $count_res = $ACCOMMODATION->getCountAccommodationsByCity(intval($city_id));
    echo $count_res;
}