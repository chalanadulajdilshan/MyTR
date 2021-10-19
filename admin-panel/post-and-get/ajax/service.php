<?php

include '../../../class/include.php';

//Create
if (isset($_POST['create'])) {
    $SERVICE = new Service(NULL);

    $SERVICE->title = $_POST['title'];
    $SERVICE->short_description = $_POST['short_description'];
    $SERVICE->description = $_POST['description'];


    $dir_dest = '../../../upload/service/';

    $handle = new Upload($_FILES['image_name']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = Helper::randamId();
        $handle->image_x = 350;
        $handle->image_y = 300;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $SERVICE->image_name = $imgName;

    $SERVICE->create();

    if ($SERVICE->id) {
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

//Update
if (isset($_POST['update'])) {

    $dir_dest = '../../../upload/service/';

    $handle = new Upload($_FILES['image_name']);
    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $_POST ["oldImageName"];
        $handle->image_x = 350;
        $handle->image_y = 300;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $SERVICE = new Service($_POST['id']);
    $SERVICE->image_name = $_POST['oldImageName'];
    $SERVICE->title = $_POST['title'];
    $SERVICE->short_description = $_POST['short_description'];
    $SERVICE->description = $_POST['description'];

    $result = $SERVICE->update();

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

//Arrange
if (isset($_POST['arrange'])) {
    foreach ($_POST['sort'] as $key => $img) {

        $key = $key + 1;
        $SERVICE = Service::arrange($key, $img);
        header('Location:../../arrange-services.php?message=9');
    }
}