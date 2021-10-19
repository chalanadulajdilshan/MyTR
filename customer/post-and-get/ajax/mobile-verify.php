<?php

include '../../../class/include.php';

if ($_POST['action'] === 'MOBILECODE') {

    $CUSTOMER = new Customer($_POST['id']);

    if ($CUSTOMER->GenarateMobileCode()) {

        $message = "Your account verification code is " . $CUSTOMER->phone_verification_code;
        $SMS = Helper::sendSMS('Thaksalawa', preg_replace('/[^0-9]/()', '', $CUSTOMER->phone_number), $message);

        if ($SMS) {
            header('Content-Type: application/json; charset=UTF8');
            $reture['status'] = 'success';
            echo json_encode($reture);
            exit();
        }
    }
}

if ($_POST['action'] === 'MOBILEVERYFY') {
    $CUSTOMER = new Customer($_POST['id']);
    $CHECK_CODE = $CUSTOMER->checkMobileVerificationCode($_POST['code']);

    if ($CHECK_CODE == 'true') {
        $CUSTOMER->phone_verification = 1;
        $CUSTOMER->updateMobileVerification();

        $response['status'] = 'success';
        echo json_encode($response);
        exit();
    } else {
        $response['status'] = 'error';
        echo json_encode($response);
        exit();
    }
}



