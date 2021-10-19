<?php

include '../../../class/include.php';


//update tour company packages
if (isset($_POST['update_active'])) {

    $TOUR_COMPANY = new TourCompany($_POST['id']);


    $TOUR_COMPANY->description = $_POST['description'];

    $active = 0;
    if (isset($_POST['is_active'])) {
        $active = $_POST['is_active'];
    }
    $TOUR_COMPANY->is_publish = $active;
    $res = $TOUR_COMPANY->updateActive();
    $result = ["status" => 'success', "id" => $res->id];
    echo json_encode($result);
    exit();
}
?>
 
