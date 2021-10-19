<?php

include '../../../class/include.php';


if (isset($_POST['create'])) {

    $ACCOMMODATION = new Accommodation(NULL);
    $ACCOMMODATION_FACILITY = new AccommodationFacility(NULL);

    $ACCOMMODATION->customer_id = $_POST['customer_id'];
    $ACCOMMODATION->type = $_POST['type'];
    $ACCOMMODATION->title = ucwords($_POST['title']);

    if (isset($_POST['booking_com'])) {
        $ACCOMMODATION->booking_com = $_POST['booking_com'];
    }
    if (isset($_POST['tripadvisor'])) {
        $ACCOMMODATION->tripadvisor = $_POST['tripadvisor'];
    }
    if (isset($_POST['agoda'])) {
        $ACCOMMODATION->agoda = $_POST['agoda'];
    }
    if (isset($_POST['expedia'])) {
        $ACCOMMODATION->expedia = $_POST['expedia'];
    }
    if (isset($_POST['payment_card'])) {
        $ACCOMMODATION->payment_card = implode(",", $_POST['payment_card']);
    }


    $ACCOMMODATION->star_rating = $_POST['star_rating'];
    $ACCOMMODATION->address_1 = ucwords($_POST['address_1']);
    $ACCOMMODATION->address_2 = ucwords($_POST['address_2']);
    $ACCOMMODATION->city = $_POST['city'];
    $ACCOMMODATION->zip_code = $_POST['zip_code'];
    $ACCOMMODATION->contact_name = $_POST['contact_name'];
    $ACCOMMODATION->mobile_number_1 = $_POST['mobile_number_1'];
    $ACCOMMODATION->mobile_number_2 = $_POST['mobile_number_2'];
    $ACCOMMODATION->parking = $_POST['parking'];
    $ACCOMMODATION->breakfast = $_POST['breakfast'];

    $ACCOMMODATION->check_in = implode(",", $_POST['check_in']);
    $ACCOMMODATION->check_out = implode(",", $_POST['check_out']);
    $ACCOMMODATION->children = $_POST['children'];
    $ACCOMMODATION->pets = $_POST['pets'];
    $ACCOMMODATION->description = $_POST['description'];
    $ACCOMMODATION->guest_payment = $_POST['guest_payment'];
    $ACCOMMODATION->invoice_name = $_POST['invoice_name'];
    $ACCOMMODATION->image_name = $_POST['image_name'];
    $ACCOMMODATION->email = $_POST['contact_email'];

    $res = $ACCOMMODATION->create();


    $result = ["status" => 'success', "id" => $res->id];
    foreach ($_POST['facility'] as $facilitty) {


        $ACCOMMODATION_FACILITY->facility_id = $facilitty;
        $ACCOMMODATION_FACILITY->acc_id = $res->id;
        $ACCOMMODATION_FACILITY->create();
    }


    echo json_encode($result);
    exit();
}
if (isset($_POST['update'])) {

    $ACCOMMODATION = new Accommodation($_POST['id']);
    $ACCOMMODATION_FACILITY = new AccommodationFacility(NULL);

    $ACCOMMODATION->type = $_POST['type'];
    $ACCOMMODATION->title = $_POST['title'];

    if (isset($_POST['booking_com'])) {
        $ACCOMMODATION->booking_com = $_POST['booking_com'];
    }
    if (isset($_POST['tripadvisor'])) {
        $ACCOMMODATION->tripadvisor = $_POST['tripadvisor'];
    }
    if (isset($_POST['agoda'])) {
        $ACCOMMODATION->agoda = $_POST['agoda'];
    }
    if (isset($_POST['expedia'])) {
        $ACCOMMODATION->expedia = $_POST['expedia'];
    }
    if (isset($_POST['payment_card'])) {
        $ACCOMMODATION->payment_card = implode(",", $_POST['payment_card']);
    }

    if (isset($_POST['facility'])) {
        foreach ($_POST['facility'] as $facilitty) {
            $ACCOMMODATION_FACILITY->facility_id = $facilitty;
            $ACCOMMODATION_FACILITY->acc_id = $_POST['id'];
            $ACCOMMODATION_FACILITY->create();
        }
    }


    if ($_POST['image_name'] == "") {
        $ACCOMMODATION->image_name = $_POST['old-image_name'];
    } else {
        $ACCOMMODATION->image_name = $_POST['image_name'];
    }

    if ($_POST['guest_payment'] == 1) {
        if (isset($_POST['payment_card'])) {
            $ACCOMMODATION->payment_card = implode(",", $_POST['payment_card']);
        }
    } else {

        $ACCOMMODATION->payment_card = 0;
    }
    $ACCOMMODATION->guest_payment = $_POST['guest_payment'];
    $ACCOMMODATION->star_rating = $_POST['star_rating'];
    $ACCOMMODATION->address_1 = ucwords($_POST['address_1']);
    $ACCOMMODATION->address_2 = ucwords($_POST['address_2']);
    $ACCOMMODATION->city = $_POST['city'];
    $ACCOMMODATION->zip_code = $_POST['zip_code'];
    $ACCOMMODATION->contact_name = $_POST['contact_name'];
    $ACCOMMODATION->mobile_number_1 = $_POST['mobile_number_1'];
    $ACCOMMODATION->mobile_number_2 = $_POST['mobile_number_2'];
    $ACCOMMODATION->email = $_POST['contact_email'];
    $ACCOMMODATION->parking = $_POST['parking'];
    $ACCOMMODATION->breakfast = $_POST['breakfast'];
    $ACCOMMODATION->check_in = implode(",", $_POST['check_in']);
    $ACCOMMODATION->check_out = implode(",", $_POST['check_out']);
    $ACCOMMODATION->children = $_POST['children'];
    $ACCOMMODATION->pets = $_POST['pets'];
    $ACCOMMODATION->description = $_POST['description'];
    $ACCOMMODATION->invoice_name = $_POST['invoice_name'];


    $res = $ACCOMMODATION->update();
    $result = ["status" => 'success', "id" => $res->id];
    echo json_encode($result);
    exit();
}
?>
 
