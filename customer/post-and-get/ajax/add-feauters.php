<?php

include '../../../class/include.php';


//create facility 
if (isset($_POST['create-feature'])) {

    $RENT_CAR_FEATURE = new RentCarFeature(NULL);
    $RENT_CAR_FEATURE->feature = $_POST['feature'];
    $RENT_CAR_FEATURE->rent_a_car = $_POST['id'];
    $RENT_CAR_FEATURE->create();

    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}

if ($_POST['option'] == 'delete') {


    $RENT_CAR_FEATURE = new RentCarFeature(NULL);

    $result = $RENT_CAR_FEATURE->deleteCarFeature($_POST['id'], $_POST['car_id']);
   

    if ($result) {

        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}

