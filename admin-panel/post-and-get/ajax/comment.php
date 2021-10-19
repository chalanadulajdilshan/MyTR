<?php

include '../../../class/include.php';
header('Content-Type: application/json; charset=UTF8');

if (isset($_POST['create'])) {

    date_default_timezone_set("Asia/Calcutta");
    $today = date('Y-m-d H:i:s');
 

    $COMMENT = new Comments(NULL);

    $active = 0;
    if (isset($_POST['active'])) {
        $active = $_POST['active'];
    }

    $COMMENT->name = $_POST['name'];
    $COMMENT->title = $_POST['title'];
    $COMMENT->comment = $_POST['short_description'];
    $COMMENT->is_active = $active;
    $COMMENT->create_at = $today;
    $dir_dest = '../../../upload/comment/';

    $handle = new Upload($_FILES['image_name']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = Helper::randamId();
        $handle->image_x = 80;
        $handle->image_y = 80;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $COMMENT->image_name = $imgName;


    $COMMENT->create();

    if ($COMMENT->id) {
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
}

if (isset($_POST['update'])) {

    date_default_timezone_set("Asia/Calcutta");
    $today = date('Y-m-d H:i:s');

    
    $dir_dest = '../../../upload/comment/';

    $handle = new Upload($_FILES['image_name']);
    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $_POST ["oldImageName"];
        $handle->image_x = 80;
        $handle->image_y = 80;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $active = 0;
    if (isset($_POST['active'])) {
        $active = $_POST['active'];
    }

    $COMMENT = new Comments($_POST['id']);
    $COMMENT->image_name = $_POST['oldImageName'];
    $COMMENT->title = $_POST['title'];
    $COMMENT->name = $_POST['name'];
    $COMMENT->comment = $_POST['comment'];
    $COMMENT->is_active = $active;
    $COMMENT->create_at = $today;

    $result = $COMMENT->update();

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
}




