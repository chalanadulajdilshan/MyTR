<?php

include '../../../class/include.php';
dd($_POST['create']);
//create restaurant
if (isset($_POST['create'])) {

    $RESTAURANT = new Restaurant(NULL);

    $RESTAURANT->customer_id = $_POST['customer_id'];
    $RESTAURANT->title = ucwords($_POST['title']);
    $RESTAURANT->address_1 = $_POST['address_1'];
    $RESTAURANT->address_2 = $_POST['address_2'];
    $RESTAURANT->city = $_POST['city'];
    $RESTAURANT->zip_code = $_POST['zip_code'];

    $RESTAURANT->contact_name = $_POST['contact_name'];
    $RESTAURANT->email = $_POST['email'];
    $RESTAURANT->contact_number = $_POST['contact_number'];
    $RESTAURANT->contact_number_2 = $_POST['contact_number_2'];

    $RESTAURANT->main_image = $_POST['image_name'];
    $RESTAURANT->serve_types = implode(",", $_POST['serve']);
    $RESTAURANT->open_time = $_POST['open_time'];
    $RESTAURANT->close_time = $_POST['close_time'];
    $RESTAURANT->close_days = implode(",", $_POST['closing_dates']);
    $RESTAURANT->description = $_POST['description'];


    $res = $RESTAURANT->create();

    $result = ["status" => 'success', "id" => $res];
    echo json_encode($result);
    exit();
}

//update restaurant
if (isset($_POST['update'])) {

    $RESTAURANT = new Restaurant($_POST['id']);



    if ($_POST['image_name'] == "") {
        $RESTAURANT->image_name = $_POST['old-image_name'];
    } else {
        $RESTAURANT->image_name = $_POST['image_name'];
    }

    $RESTAURANT->title = ucwords($_POST['title']);
    $RESTAURANT->address_1 = $_POST['address_1'];
    $RESTAURANT->address_2 = $_POST['address_2'];
    $RESTAURANT->city = $_POST['city'];
    $RESTAURANT->zip_code = $_POST['zip_code'];

    $RESTAURANT->contact_name = $_POST['contact_name'];
    $RESTAURANT->email = $_POST['email'];
    $RESTAURANT->contact_number = $_POST['contact_number'];
    $RESTAURANT->contact_number_2 = $_POST['contact_number_2'];

    $RESTAURANT->main_image = $_POST['image_name'];
    $RESTAURANT->serve_types = implode(",", $_POST['serve']);
    $RESTAURANT->open_time = $_POST['open_time'];
    $RESTAURANT->close_time = $_POST['close_time'];
    $RESTAURANT->close_days = implode(",", $_POST['closing_dates']);
    $RESTAURANT->description = $_POST['description'];



    $res = $RESTAURANT->update();
    $result = ["status" => 'success', "id" => $res->id];
    echo json_encode($result);
    exit();
}
?>
 
