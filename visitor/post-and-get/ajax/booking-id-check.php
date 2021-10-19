<?php

include '../../../class/include.php';


if (isset($_POST['validate_booking_id'])) {

    $HOTEL_BOOKING = new HotelBooking(NULL);
    $res = $HOTEL_BOOKING->validateBookingId($_POST['booking_id']);
    

    $result = ["status" => $res];
    echo json_encode($result);
    exit();
}

 
?>
 
