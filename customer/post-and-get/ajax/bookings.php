<?php

include '../../../class/include.php';

 
if (isset($_POST['update'])) {

    $HOTEL_BOOKING = new HotelBooking($_POST['id']); 
    $HOTEL_BOOKING->status = $_POST['status'];


    $res = $HOTEL_BOOKING->updateStatus();
    $result = ["status" => 'success', "id" => $res->id];
    echo json_encode($result);
    exit();
}
?>
 
