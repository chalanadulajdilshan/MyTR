<?php

include '../../../class/include.php';

$dir_dest = '../../../upload/user/';

$handle = new Upload($_FILES['image_name']);
$imgName = null;
 
if ($handle->uploaded) {
    $handle->image_resize = true;
    $handle->file_new_name_body = TRUE;
    $handle->file_overwrite = TRUE;
    $handle->file_new_name_ext = FALSE;
    $handle->image_ratio_crop = 'C';
    $handle->file_new_name_body = $_POST ["oldImageName"];
    $handle->image_x = 500;
    $handle->image_y = 500;

    $handle->Process($dir_dest);

    if ($handle->processed) {
        $info = getimagesize($handle->file_dst_pathname);
        $imgName = $handle->file_dst_name;
    }
}

$USER = new User($_POST['id']);
$USER->image_name = $_POST['oldImageName'];
$USER->name = $_POST['name'];
$USER->username = $_POST['username'];

$result = $USER->update();
 
if ($result) {
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
