<?php

include '../../../class/include.php';

 

if ($_POST['action'] === 'EMAILVERYFY') {
    $CUSTOMER = new Customer($_POST['id']);
    $CHECK_CODE = $CUSTOMER->checkEmailVerificationCode($_POST['code']);

    if ($CHECK_CODE == 'true') {
        $CUSTOMER->email_verification = 1;
        $CUSTOMER->updateEmailVerification();

        $response['status'] = 'success';
        echo json_encode($response);
        exit();
    } else {
        $response['status'] = 'error';
        echo json_encode($response);
        exit();
    }
}



