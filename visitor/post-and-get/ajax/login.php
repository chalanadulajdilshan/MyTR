<?php

include '../../../class/include.php';

$VISITOR = new Visitor(NULL);

$email = $_POST['email'];
$password = $_POST['password'];
$RES = $VISITOR->login($email, $password);

if ($RES) {


    $response = ["status" => 'success', "id" => $RES['id']];
    echo json_encode($response);
    exit();
} else {
    $response['status'] = 'error';
    $response['message'] = "Sorry, your email or Password went wrong..!";
    echo json_encode($response);
    exit();
}
?>
 
