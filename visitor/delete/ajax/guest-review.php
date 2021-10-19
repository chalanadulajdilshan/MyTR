<?php

include '../../../class/include.php';

if ($_POST['option'] == 'delete') {

    $GUEST_REVIEWS= new GuestReview($_POST['id']);

 
    $result = $GUEST_REVIEWS->delete();


    if ($result) {

        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}