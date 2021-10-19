<?php

include '../../../class/include.php';
 
if ($_POST['option'] == 'update_facility') { 

    $ACCOMMODATION_FACILITY = new AccommodationFacility(NULL);
   
    $ACCOMMODATION_FACILITY->facility_id = $_POST['facility'];
    $ACCOMMODATION_FACILITY->acc_id = $_POST['id'];
    $ACCOMMODATION_FACILITY->create();

    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}

if ($_POST['option'] == 'delete') {


    $ACCOMMODATION_FACILITY = new AccommodationFacility(NULL);

    $result = $ACCOMMODATION_FACILITY->delete($_POST['id'], $_POST['acc_id']);


    if ($result) {

        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}

