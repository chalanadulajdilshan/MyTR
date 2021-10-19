<?php

include '../../../class/include.php';
header('Content-Type: application/json; charset=UTF8');


$BANNER = new Banner(NULL);

$BANNER->title = $_POST['title']; 

$dir_dest = '../../../upload/banner/';

$handle = new Upload($_FILES['image_name']);

$imgName = null;

if ($handle->uploaded) {
    $handle->image_resize = true;
    $handle->file_new_name_ext = 'jpg';
    $handle->image_ratio_crop = 'C';
    $handle->file_new_name_body = Helper::randamId();
    $handle->image_x = 1920;
    $handle->image_y = 900;

    $handle->Process($dir_dest);

    if ($handle->processed) {
        $info = getimagesize($handle->file_dst_pathname);
        $imgName = $handle->file_dst_name;
    }
}

$BANNER->image_name = $imgName;
 
$BANNER->create(); 

if ($BANNER->id) {
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



$dir_dest = '../../../upload/banner/';

$handle = new Upload($_FILES['image_name']);
$imgName = null;

if ($handle->uploaded) {
    $handle->image_resize = true;
    $handle->file_new_name_body = TRUE;
    $handle->file_overwrite = TRUE;
    $handle->file_new_name_ext = FALSE;
    $handle->image_ratio_crop = 'C';
    $handle->file_new_name_body = $_POST ["oldImageName"];
    $handle->image_x = 1920;
    $handle->image_y = 900;

    $handle->Process($dir_dest);

    if ($handle->processed) {
        $info = getimagesize($handle->file_dst_pathname);
        $imgName = $handle->file_dst_name;
    }
}

$BANNER = new Banner($_POST['id']);
$BANNER->image_name = $_POST['oldImageName'];
$BANNER->title = $_POST['title'];

$result = $BANNER->update();

if ($result->id) {
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

 