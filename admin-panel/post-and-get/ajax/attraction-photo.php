<?php

include '../../../class/include.php';
header('Content-Type: application/json; charset=UTF8');

//Create
if (isset($_POST['create'])) {
    $ATTRACTION_PHOTO = new AttractionPhoto(NULL);

    $ATTRACTION_PHOTO->attraction = $_POST['id'];
    $ATTRACTION_PHOTO->caption = $_POST['caption'];

    $dir_dest = '../../../upload/attraction/gallery/';
    $dir_dest_thumb = '../../../upload/attraction/gallery/thumb/';

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
        $handle->image_x = 470;
        $handle->image_y = 320;

        $handle->Process($dir_dest_thumb);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $ATTRACTION_PHOTO->image_name = $imgName;


    $ATTRACTION_PHOTO->create();
    if ($ATTRACTION_PHOTO->id) {
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

    $dir_dest = '../../../upload/attraction/gallery/';
    $dir_dest_thumb = '../../../upload/attraction/gallery/thumb/';

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
        $handle->image_x = 470;
        $handle->image_y = 320;

        $handle->Process($dir_dest_thumb);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $ATTRACTION_PHOTO = new AttractionPhoto($_POST['id']);
    $ATTRACTION_PHOTO->caption = $_POST['caption'];
    $ATTRACTION_PHOTO->image_name = $_POST['oldImageName'];

    $ATTRACTION_PHOTO->update();

    if ($ATTRACTION_PHOTO) {
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

//Arange  
if (isset($_POST['arrange'])) {
    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;
        $ATTRACTION_PHOTO = AttractionPhoto::arrange($key, $img);
        
        $id = $_POST['id'];
        header('Location:../../arrange-destination-photo.php?message=9&&id=' . $id);
         
    }
}