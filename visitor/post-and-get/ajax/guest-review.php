<?php

include '../../../class/include.php';


//create guest review accommodation
if (isset($_POST['create'])) {

    $GUEST_REVIEWS = new GuestReview(NULL);
    $HOTEL_BOOKING = new HotelBooking(NULL);
    $acc_id = $HOTEL_BOOKING->getIdByBookingId($_POST['booking_id']);

    $GUEST_REVIEWS->visitor = $_POST['visitor'];
    $GUEST_REVIEWS->booking_id = $_POST['booking_id'];
    $GUEST_REVIEWS->starts = $_POST['star_rating'];
    $GUEST_REVIEWS->title = $_POST['title'];
    $GUEST_REVIEWS->review = $_POST['review'];
    $GUEST_REVIEWS->type = 1;
    $GUEST_REVIEWS->acc_id = $acc_id;

    $res = $GUEST_REVIEWS->create();

    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}

//update guest review Accommodation
if (isset($_POST['update'])) {

    $GUEST_REVIEWS = new GuestReview($_POST['id']);

    $GUEST_REVIEWS->booking_id = $_POST['booking_id'];
    $GUEST_REVIEWS->starts = $_POST['star_rating'];
    $GUEST_REVIEWS->title = $_POST['title'];
    $GUEST_REVIEWS->review = $_POST['review'];

    $res = $GUEST_REVIEWS->update();

    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}

//create guest review tour company
if (isset($_POST['create'])) {

    $GUEST_REVIEWS = new GuestReview(NULL);
    $HOTEL_BOOKING = new HotelBooking(NULL);
    $acc_id = $HOTEL_BOOKING->getIdByBookingId($_POST['booking_id']);

    $GUEST_REVIEWS->visitor = $_POST['visitor'];
    $GUEST_REVIEWS->booking_id = $_POST['booking_id'];
    $GUEST_REVIEWS->starts = $_POST['star_rating'];
    $GUEST_REVIEWS->title = $_POST['title'];
    $GUEST_REVIEWS->review = $_POST['review'];
    $GUEST_REVIEWS->type = 2;
    $GUEST_REVIEWS->acc_id = $acc_id;

    $res = $GUEST_REVIEWS->create();

    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}

//update guest review accommodation
if (isset($_POST['update'])) {

    $GUEST_REVIEWS = new GuestReview($_POST['id']);

    $GUEST_REVIEWS->starts = $_POST['star_rating'];
    $GUEST_REVIEWS->title = $_POST['title'];
    $GUEST_REVIEWS->review = $_POST['review'];

    $res = $GUEST_REVIEWS->update();

    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}

?>
 
