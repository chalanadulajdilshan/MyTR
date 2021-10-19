<?php

include '../../../class/include.php';
 
     
//update vehicle company active / deactive
if (isset($_POST['active_company'])) {
   
    $RESTAURANT = new Restaurant($_POST['id']);

     $active = 0;
    if (isset($_POST['is_active'])) {
        $active = $_POST['is_active'];
    }
    
    $RESTAURANT->is_publish = $active;

    $res = $RESTAURANT->updateCompanyActive();
    $result = ["status" => 'success', "id" => $res->id];
    echo json_encode($result);
    exit();
}
 