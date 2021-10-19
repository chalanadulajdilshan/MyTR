<?php

include '../../../class/include.php';

$CUSTOMER = new Customer(NULL);
$last_name = '';
if (isset($_POST['last_name'])) {
    $last_name = $_POST['last_name'];
}
$CUSTOMER->full_name = $_POST['first_name'] . $last_name;
$CUSTOMER->phone_number = $_POST['mobile_number'];
$CUSTOMER->email = $_POST['email'];
$CUSTOMER->password = md5($_POST['password']);



$CHECK_EMAIL = $CUSTOMER->checkRegistrationEmail($_POST['email']);
$CHECK_MOBILE_NUMBER = $CUSTOMER->checkRegistrationMobile($_POST['mobile_number']);

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

    $CUSTOMER->create();
    if ($CUSTOMER->id) {

        $CUSTOMERS = new Customer($CUSTOMER->id);

        if ($CUSTOMERS->GenarateEmailCode()) {

            $email = $CUSTOMERS->sendVerificationCodeEmail();
            $CUSTOMER->login($CUSTOMER->email, $_POST['password']);
            $response['status'] = 'success';
            $response['id'] = $CUSTOMER->id;
            echo json_encode($response);
            exit();
            
        } else {


            $response['status'] = 'error';
            $response['message'] = "Some Error. ";
            echo json_encode($response);
            exit();
        }
    }
}

 