<?php

include '../../../class/include.php';

if ($_POST['option'] == 'delete') {

    $PRODUCT = new Product($_POST['id']);

    $result = $PRODUCT->delete();

    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}