<?php

include '../../../class/include.php';

//create 
if (isset($_POST['create'])) {

    $RENT_CAR = new RentCar(NULL);
    $RENT_CAR_PHOTO = new RentCarPhoto(NULL);
    $RENT_CAR_FEATURE = new RentCarFeature(NULL);

    $RENT_CAR->customer_id = $_POST['customer_id'];
    $RENT_CAR->company_id = $_POST['company_id'];
    $RENT_CAR->type = $_POST['type'];
    $RENT_CAR->title = ucwords($_POST['title']);

    if (isset($_POST['contact_number_2'])) {
        $RENT_CAR->contact_number_2 = $_POST['contact_number_2'];
    }

    $RENT_CAR->reg_number = $_POST['reg_number'];
    $RENT_CAR->reg_year = $_POST['reg_year'];
    $RENT_CAR->fuel_type = $_POST['fuel_type'];
    $RENT_CAR->contact_name = $_POST['contact_name'];
    $RENT_CAR->contact_number = $_POST['contact_number'];
    $RENT_CAR->driving_license_front = $_POST['licen_front_image_name'];
    $RENT_CAR->driving_license_back = $_POST['licen_back_image_name'];
    $RENT_CAR->main_image = $_POST['image_name'];
    $RENT_CAR->budget = $_POST['budget'];
    $RENT_CAR->air_condition = $_POST['air_condition'];
    $RENT_CAR->transmission = $_POST['transmission'];
    $RENT_CAR->num_passengers = $_POST['num_passengers'];
    $RENT_CAR->num_doors = $_POST['num_doors'];
    $RENT_CAR->num_baggaes = $_POST['num_baggaes'];
    $RENT_CAR->city = $_POST['city']; 
    $RENT_CAR->airport_transfer = $_POST['airport_transfer'];
    $RENT_CAR->wedding_cars = $_POST['wedding_cars'];
   

    $RENT_CAR->description = $_POST['description'];
    $RENT_CAR->email = $_POST['email'];
    $RENT_CAR->status = $_POST['status'];

    $res = $RENT_CAR->create();
    if ($res->id) {

        if (isset($_POST['add-images'])) {

            foreach ($_POST['add-images'] as $rent_car_photo) {

                $RENT_CAR_PHOTO->rent_car = $res->id;
                $RENT_CAR_PHOTO->image_name = $rent_car_photo;
                $RENT_CAR_PHOTO->create();
            }
        }

        if (isset($_POST['features'])) {

            foreach ($_POST['features'] as $features) {

                $RENT_CAR_FEATURE->rent_a_car = $res->id;
                $RENT_CAR_FEATURE->feature = $features;
                $RENT_CAR_FEATURE->create();
            }
        }
    }

    $result = ["status" => 'success', "id" => $res->id];
    echo json_encode($result);
    exit();
}

//update 
if (isset($_POST['update'])) {

    $RENT_CAR = new RentCar($_POST['id']);
    $RENT_CAR_FEATURE = new RentCarFeature(NULL);

    $RENT_CAR->type = $_POST['type'];
    $RENT_CAR->title = ucwords($_POST['title']);

    if (isset($_POST['contact_number_2'])) {
        $RENT_CAR->contact_number_2 = $_POST['contact_number_2'];
    }

    $RENT_CAR->reg_number = $_POST['reg_number'];
    $RENT_CAR->reg_year = $_POST['reg_year'];
    $RENT_CAR->fuel_type = $_POST['fuel_type'];
    $RENT_CAR->contact_name = $_POST['contact_name'];
    $RENT_CAR->contact_number = $_POST['contact_number'];
    $RENT_CAR->contact_name = $_POST['contact_name'];

    $RENT_CAR->budget = $_POST['budget'];
    $RENT_CAR->air_condition = $_POST['air_condition'];
    $RENT_CAR->transmission = $_POST['transmission'];
    $RENT_CAR->num_passengers = $_POST['num_passengers'];
    $RENT_CAR->num_doors = $_POST['num_doors'];
    $RENT_CAR->num_baggaes = $_POST['num_baggaes'];
    $RENT_CAR->city = $_POST['city']; 
    $RENT_CAR->airport_transfer = $_POST['airport_transfer'];
    $RENT_CAR->wedding_cars = $_POST['wedding_cars'];
    
    $RENT_CAR->description = $_POST['description'];
    $RENT_CAR->email = $_POST['email'];
    $RENT_CAR->status = $_POST['status'];
    

    if ($_POST['image_name'] == "") {
        $RENT_CAR->main_image = $_POST['old-image_name'];
    } else {
        $RENT_CAR->main_image = $_POST['image_name'];
    }


    if ($_POST['licen_front_image_name'] == "") {
        $RENT_CAR->driving_license_front = $_POST['old-image_name_license_front'];
    } else {
        $RENT_CAR->driving_license_front = $_POST['licen_front_image_name'];
    }

    if ($_POST['licen_back_image_name'] == "") {
        $RENT_CAR->driving_license_back = $_POST['old-image_name_license_back'];
    } else {
        $RENT_CAR->driving_license_back = $_POST['licen_back_image_name'];
    }
 

    $res = $RENT_CAR->update();
    $result = ["status" => 'success', "id" => $res->id];
    echo json_encode($result);
    exit();
}

if (isset($_POST['update-img'])) {

    $RENT_CAR_PHOTO = new RentCarPhoto(NULL);

    foreach ($_POST['add-images'] as $rent_car_photo) {

        $RENT_CAR_PHOTO->rent_car = $_POST['id'];
        $RENT_CAR_PHOTO->image_name = $rent_car_photo;
        $RENT_CAR_PHOTO->create();
    }

    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}
?>
 
