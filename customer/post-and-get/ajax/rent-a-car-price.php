<?php

include '../../../class/include.php';

//create 
if (isset($_POST['create'])) {

    $RENT_CAR_PRICE = new RentCarPrice(NULL);


    $RENT_CAR_PRICE->rent_car = $_POST['id'];
    $RENT_CAR_PRICE->type = $_POST['type'];
    $RENT_CAR_PRICE->currency_type = $_POST['currency_type'];
    $RENT_CAR_PRICE->driver = $_POST['driver'];
    $RENT_CAR_PRICE->price = $_POST['price'];
    $RENT_CAR_PRICE->extra_price = $_POST['extra_price'];

    $res = $RENT_CAR_PRICE->create();


    $result = ["status" => 'success', "id" => $_POST['id']];
    echo json_encode($result);
    exit();
}

//update 
if (isset($_POST['update'])) {

    $RENT_CAR_PRICE = new RentCarPrice($_POST['id']);


    $RENT_CAR_PRICE->type = $_POST['type'];
    $RENT_CAR_PRICE->currency_type = $_POST['currency_type'];
    $RENT_CAR_PRICE->driver = $_POST['driver'];
    $RENT_CAR_PRICE->price = $_POST['price'];
    $RENT_CAR_PRICE->extra_price = $_POST['extra_price'];

    $res = $RENT_CAR_PRICE->update();


    $result = ["status" => 'success', "id" => $_POST['id']];
    echo json_encode($result);
    exit();
}

 
?>
 
