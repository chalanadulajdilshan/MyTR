 
<?php

include '../../../class/include.php';



if ($_POST['option'] == 'GET_DURATION_VAL') {

    $OFFER_DURATION = new OfferDuration($_POST['id']);

     
    $data = array("status" => TRUE, "dates" => $OFFER_DURATION->dates, "price" => $OFFER_DURATION->price);
    header('Content-type: application/json');
    echo json_encode($data);
}