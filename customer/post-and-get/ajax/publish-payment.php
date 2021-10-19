<?php

include '../../../class/include.php';

if ($_POST['action'] == 'GETPAYMENT') {
   
    $PUBLISH_PAYMENT = new PublishPayment($_POST["months"]);

    echo json_encode($PUBLISH_PAYMENT->payment);
    header('Content-type: application/json');
    exit();
}

