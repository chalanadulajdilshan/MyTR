<?php

include '../../../class/include.php'; 

if (isset($_POST['update'])) {


    $CUSTOMER = new Customer($_POST['id']);

    if (isset($_POST['is_active'])) {
        $active = $_POST['is_active'];
    } else {
        $active = 0;
    }

    $CUSTOMER->is_active = $active;

    $CUSTOMER->updateActive();

    if ($CUSTOMER) {
        $result = [
            "status" => 'success'
        ];
        echo json_encode($result);
        exit();
    } else {
        $result = [
            "status" => 'error'
        ];
        echo json_encode($result);
        exit();
    }
}
 




