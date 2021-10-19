<?php

include '../../../class/include.php';
//filter hotels
if ($_POST['action'] == 'GET_FILTER_HOTELS_BOOKINGS') {

    $date_range = '';

//Catch the data

    if (isset($_POST["date_range"])) {
        $date_range = $_POST["date_range"];
    }
    if (isset($_POST["search_key"])) {
        $search_key = $_POST["search_key"];
    }
    if (isset($_POST["customer"])) {
        $customer = $_POST["customer"];
    }


    $HOTEL_BOOKING = new HotelBooking(NULL);
    $result = $HOTEL_BOOKING->getBookingFilterByCustomer($date_range,$search_key,$customer);
    echo $result;
}
if ($_POST['action'] == 'GET_FILTER_HOTELS_BOOKINGS_BY_ACCOMMODATION_ID') {

    $date_range = '';
    $acc_id = '';

//Catch the data

    if (isset($_POST["date_range"])) {
        $date_range = $_POST["date_range"];
    }
    if (isset($_POST["search_key"])) {
        $search_key = $_POST["search_key"];
    }
    if (isset($_POST["acc_id"])) {
        $acc_id = $_POST["acc_id"];
    }


    $HOTEL_BOOKING = new HotelBooking(NULL);
    $result = $HOTEL_BOOKING->getBookingByAccId($date_range,$search_key,$acc_id);
    echo $result;
}