<?php

include '../../../class/include.php';
header('Content-Type: application/json; charset=UTF8');

//Create
if (isset($_POST['create'])) {
    $SERVICE_PHOTO = new ServicePhoto(NULL);

    $SERVICE_PHOTO->service = $_POST['id'];
    $SERVICE_PHOTO->caption = $_POST['caption'];

    $dir_dest = '../../../upload/service/gallery/';
    $dir_dest_thumb = '../../../upload/service/gallery/thumb/';

    $handle = new Upload($_FILES['image_name']);

    $imgName = null;
    $img = Helper::randamId();

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $img;
        $handle->image_x = 900;
        $handle->image_y = 500;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }


        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $img;
        $handle->image_x = 300;
        $handle->image_y = 175;

        $handle->Process($dir_dest_thumb);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $SERVICE_PHOTO->image_name = $imgName;


    $SERVICE_PHOTO->create();
    if ($SERVICE_PHOTO->id) {
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
    $dir_dest = '../../../upload/service/gallery/';
    $dir_dest_thumb = '../../../upload/service/gallery/thumb/';

    $handle = new Upload($_FILES['image_name']);

    $imgName = null;
    $img = Helper::randamId();

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $_POST ["oldImageName"];
        $handle->image_x = 900;
        $handle->image_y = 500;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }

        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $_POST ["oldImageName"];
        $handle->image_x = 300;
        $handle->image_y = 175;

        $handle->Process($dir_dest_thumb);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $SERVICE_PHOTO = new ServicePhoto($_POST['id']);
    $SERVICE_PHOTO->caption = $_POST['caption'];
    $SERVICE_PHOTO->image_name = $_POST['oldImageName'];

    $SERVICE_PHOTO->update();

    if ($SERVICE_PHOTO) {
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

//ArrangeF
if (isset($_POST['arrange'])) {
    foreach ($_POST['sort'] as $key => $img) {

        $key = $key + 1;
        $SERVICE_PHOTO = ServicePhoto::arrange($key, $img);
        $id = $_POST['id'];
        header('Location:../../arrange-service-photo.php?message=9&id=' . $id);
    }
}
