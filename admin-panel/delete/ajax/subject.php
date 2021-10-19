<?php

include '../../../class/include.php';

if ($_POST['option'] == 'delete') {

    $SUBJECT = new Subject($_POST['id']);

    $result = $SUBJECT->delete();

    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}