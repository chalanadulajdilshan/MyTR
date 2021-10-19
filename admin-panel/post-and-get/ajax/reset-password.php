<?php

include '../../../class/include.php';

$USER = new User(NULL);
$code = $_POST["reset_code"];
$password = $_POST["password"];
$confpassword = $_POST["confirmpassword"];

if ($password === $confpassword && $password != NULL && $confpassword != NULL) {
    if ($USER->SelectResetCode($code)) {
        $USER->updatePassword($password, $code);
        $result = [
            "status" => 'success'
        ];
        echo json_encode($result);
        exit();
    } else {
        $result = [
            "status" => 'error'
        ];
        echo json_encode($result);
        exit();
    }
} else {
    $result = [
        "status" => 'password_not_match'
    ];
    echo json_encode($result);
    exit();
}

