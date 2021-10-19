<?php

include '../../../class/include.php';

if ($_POST['option'] == 'delete') {

    $COMMENT= new Comments($_POST['id']);

    $result = $COMMENT->delete();

    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}