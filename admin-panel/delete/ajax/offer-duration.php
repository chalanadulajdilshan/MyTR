<?php

include '../../../class/include.php';
 
if ($_POST['option'] == 'delete') {

    $OFFER_DURATION = new OfferDuration($_POST['id']);

    $result = $OFFER_DURATION->delete();

    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}