<?php

include '../../../class/include.php';
 

//create Feature
if (isset($_POST['create-rent-car-feature'])) {

    $FEATURE = new Features(NULL);

    $FEATURE->title = $_POST['title'];
    $FEATURE->create();

    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}

//Update Feature
if (isset($_POST['update-rent-car-feature'])) {

    $FEATURE = new Features($_POST['id']);

    $FEATURE->title = $_POST['title'];
    $FEATURE->update();


    $result = ["id" => $_POST['id']];
    echo json_encode($result);
    exit();
}

//Create vehicle  Type
if (isset($_POST['create-vehicle-type'])) {

    $VEHICLE_TYPE = new VehicleType(NULL);

    $VEHICLE_TYPE->title = $_POST['title'];

    $VEHICLE_TYPE->create();

    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}

//update vehicle Type
if (isset($_POST['update-vehicle-type'])) {


    $VEHICLE_TYPE = new VehicleType($_POST['id']);

    $VEHICLE_TYPE->title = $_POST['title'];
    $VEHICLE_TYPE->update();


    $result = ["id" => $_POST['id']];
    echo json_encode($result);
    exit();
}

//Create vehicle brands
if (isset($_POST['create-vehicle-brand'])) {

    $VEHICLE_BRANDS = new VehicleBrand(NULL);

    $VEHICLE_BRANDS->title = $_POST['title'];

    $VEHICLE_BRANDS->create();

    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}

//Update vehicle brand
if (isset($_POST['update-vehicle-brand'])) {


    $VEHICLE_BRANDS = new VehicleBrand($_POST['id']);

    $VEHICLE_BRANDS->title = $_POST['title'];
    $VEHICLE_BRANDS->update();


    $result = ["id" => $_POST['id']];
    echo json_encode($result);
    exit();
}
 
//update vehicle company active / deactive
if (isset($_POST['active_company'])) {
   
    $RENT_CAR_COMPANY = new RentCarCompany($_POST['id']);

    $RENT_CAR_COMPANY->description = $_POST['description'];
    $active = 0;
    if (isset($_POST['is_active'])) {
        $active = $_POST['is_active'];
    }
    $RENT_CAR_COMPANY->is_publish = $active;

    $res = $RENT_CAR_COMPANY->updateCompanyActive();
    $result = ["status" => 'success', "id" => $res->id];
    echo json_encode($result);
    exit();
}
 