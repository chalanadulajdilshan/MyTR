<?php

include '../../../class/include.php';

if ($_POST['option'] == 'delete') {

    $BANNER = new Banner($_POST['id']);

    $result = $BANNER->delete();
    
    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}