<?php

include '../../../class/include.php';

//create tour company
if (isset($_POST['create'])) {

    $TOUR_COMPANY = new TourCompany(NULL);
    $CITY = new City($_POST['city']);

    $TOUR_COMPANY->customer_id = $_POST['customer_id'];
    $TOUR_COMPANY->title = ucwords($_POST['title']);
    $TOUR_COMPANY->address_1 = $_POST['address_1'];
    $TOUR_COMPANY->address_2 = $_POST['address_2'];
    $TOUR_COMPANY->city = $_POST['city'];
    $TOUR_COMPANY->district = $CITY->district;
    $TOUR_COMPANY->zip_code = $_POST['zip_code'];
    $TOUR_COMPANY->contact_name = $_POST['contact_name'];
    $TOUR_COMPANY->email = $_POST['contact_email'];
    $TOUR_COMPANY->contact_number_1 = $_POST['contact_number_1'];
    $TOUR_COMPANY->contact_number_2 = $_POST['contact_number_2'];
    $TOUR_COMPANY->image_name = $_POST['image_name'];
    $TOUR_COMPANY->description = $_POST['description'];
    $TOUR_COMPANY->agree = $_POST['agree'];


    $res = $TOUR_COMPANY->create();

    //add tour company tour packages
    $TOUR_COMPANY_SELECTED_TOUR_TYPE = new TourCompanySelectedTourTypes(NULL);
    foreach ($_POST['tour_type'] as $tour_type) {
        $TOUR_COMPANY_SELECTED_TOUR_TYPE->tour_type = $tour_type;
        $TOUR_COMPANY_SELECTED_TOUR_TYPE->tour_company = $res->id;
        $TOUR_COMPANY_SELECTED_TOUR_TYPE->create();
    }

    $result = ["status" => 'success', "id" => $res->id];
    echo json_encode($result);
    exit();
}

//update tour company packages
if (isset($_POST['update'])) {

    $TOUR_COMPANY = new TourCompany($_POST['id']);
    $CITY = new City($_POST['city']);

    if ($_POST['image_name'] == "") {
        $TOUR_COMPANY->image_name = $_POST['old-image_name'];
    } else {
        $TOUR_COMPANY->image_name = $_POST['image_name'];
    }

    $TOUR_COMPANY->title = ucwords($_POST['title']);
    $TOUR_COMPANY->address_1 = $_POST['address_1'];
    $TOUR_COMPANY->address_2 = $_POST['address_2'];
    $TOUR_COMPANY->district = $CITY->district;
    $TOUR_COMPANY->city = $_POST['city'];
    $TOUR_COMPANY->zip_code = $_POST['zip_code'];
    $TOUR_COMPANY->contact_name = $_POST['contact_name'];
    $TOUR_COMPANY->email = $_POST['contact_email'];
    $TOUR_COMPANY->contact_number_1 = $_POST['contact_number_1'];
    $TOUR_COMPANY->contact_number_2 = $_POST['contact_number_2'];
    $TOUR_COMPANY->description = $_POST['description'];
    $TOUR_COMPANY->agree = $_POST['agree'];


    //add tour company new tour packages
    $TOUR_COMPANY_SELECTED_TOUR_TYPE = new TourCompanySelectedTourTypes(NULL);
    $TOUR_TYPE = new TourType(NULL);

    foreach ($_POST['tour_type'] as $tour_type) {


        $TOUR_COMPANY_SELECTED_TOUR_TYPE->tour_type = $tour_type;
        $TOUR_COMPANY_SELECTED_TOUR_TYPE->tour_company = $_POST['id'];
        $TOUR_COMPANY_SELECTED_TOUR_TYPE->create();
    }

    $res = $TOUR_COMPANY->update();
    $result = ["status" => 'success', "id" => $res->id];
    echo json_encode($result);
    exit();
}
?>
 
