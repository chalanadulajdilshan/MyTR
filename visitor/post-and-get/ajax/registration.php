<?php

include '../../../class/include.php';

$VISITOR = new Visitor(NULL);
$last_name = '';
if (isset($_POST['last_name'])) {
    $last_name = $_POST['last_name'];
}
$VISITOR->full_name = $_POST['first_name'] . ' ' . $last_name;
$VISITOR->phone_number = $_POST['mobile_number'];
$VISITOR->email = $_POST['email'];
$VISITOR->password = md5($_POST['password']);


$CHECK_EMAIL = $VISITOR->checkRegistrationEmail($_POST['email']);
$CHECK_MOBILE_NUMBER = $VISITOR->checkRegistrationMobile($_POST['mobile_number']);

if ($CHECK_EMAIL == 'true') {
    $response['status'] = 'error';
    $response['message'] = " Your Email is already exsists.!. Enter another Email address.";
    echo json_encode($response);
    exit();
} else if ($CHECK_MOBILE_NUMBER == 'true') {
    $response['status'] = 'error';
    $response['message'] = " Your Mobile Number is already exsists.!. Enter another Mobile Number.";
    echo json_encode($response);
    exit();
} else {

    $VISITOR->create();

    if ($VISITOR->id) {
        $VISITORS = new Visitor($VISITOR->id);

        if ($VISITORS->GenarateEmailCode()) {

            $email = $VISITORS->sendVerificationCodeEmail();
            $VISITOR->login($VISITOR->email, $_POST['password']); 
            $response['status'] = 'success';
            $response['id'] = $VISITORS->id;
            echo json_encode($response);
            exit();
        }
    } else {

        $response['status'] = 'error';
        $response['message'] = " Some Error ";
        echo json_encode($response);
        exit();
    }
}