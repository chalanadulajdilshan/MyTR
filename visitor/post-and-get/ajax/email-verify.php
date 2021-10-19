<?php

include '../../../class/include.php';

 

if ($_POST['action'] === 'EMAILVERYFY') {
    $VISITOR = new Visitor($_POST['id']);
    $CHECK_CODE = $VISITOR->checkEmailVerificationCode($_POST['code']);

    if ($CHECK_CODE == 'true') {
        $VISITOR->email_verification = 1;
        $VISITOR->updateEmailVerification();

        $response['status'] = 'success';
        echo json_encode($response);
        exit();
    } else {
        $response['status'] = 'error';
        echo json_encode($response);
        exit();
    }
}



