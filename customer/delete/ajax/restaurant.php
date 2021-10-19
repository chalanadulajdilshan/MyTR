<?php

include '../../../class/include.php';
 
if ($_POST['option'] == 'delete') {

    $REASTURANT= new Restaurant($_POST['id']);

    $result = $REASTURANT->delete();

    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}