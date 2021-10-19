<?php

include '../../../class/include.php'; 

if (isset($_POST['update'])) {


    $VISITOR = new Visitor($_POST['id']);

    if (isset($_POST['is_active'])) {
        $active = $_POST['is_active'];
    } else {
        $active = 0;
    }

    $VISITOR->is_active = $active;

    $VISITOR->updateActive();

    if ($VISITOR) {
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
 




