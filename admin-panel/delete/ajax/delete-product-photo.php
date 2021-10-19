<?php

include '../../../class/include.php';

if ($_POST['option'] == 'delete') {

    $PRODUCT_PHOTO = new ProductPhoto($_POST['id']);

    $result = $PRODUCT_PHOTO->delete();

    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}