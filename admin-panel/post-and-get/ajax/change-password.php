<?php
include '../../../class/include.php';
 
$USER = new User(NULL);

$OldPassOk = $USER->checkOldPass($_POST["id"], $_POST["oldPass"]);

if ($_POST["newPass"] === $_POST["confPass"]) {
    if ($OldPassOk) {
        $result = $USER->changePassword($_POST["id"], $_POST["newPass"]);
        if ($result == 'TRUE') {
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
?>
 