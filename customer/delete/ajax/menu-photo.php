<?php

include '../../../class/include.php';

if ($_POST['option'] == 'delete') {

    $MENU_PHOTO = new MenuPhoto($_POST['id']);

 
    $result = $MENU_PHOTO->delete();


    if ($result) {

        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}