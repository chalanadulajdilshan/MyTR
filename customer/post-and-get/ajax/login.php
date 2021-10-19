<?php

include '../../../class/include.php';

$CUSTOMER = new Customer(NULL);

$email= $_POST['email'];
$password= $_POST['password'];
 


if ($CUSTOMER->login($email, $password)) {
    $response['status'] = 'success';
    echo json_encode($response);
    exit();
} else {
    $response['status'] = 'error';
    $response['message'] = "Sorry, your email or Password went wrong..!";
    echo json_encode($response);
    exit();
}
?>
 
