<?php

include '../../../class/include.php';


if (isset($_POST['create'])) {

    $TOUR_PACKAGE = new TourPackage(NULL);


    $TOUR_PACKAGE->tour_type = $_POST['tour_type'];
    $TOUR_PACKAGE->title = $_POST['title'];
    $TOUR_PACKAGE->dates = $_POST['dates'];
    $TOUR_PACKAGE->short_description = $_POST['short_description'];
    $TOUR_PACKAGE->description = $_POST['description'];
    $TOUR_PACKAGE->map = $_POST['map_code'];
    $TOUR_PACKAGE->include_exclude = $_POST['include_and_exclude'];


    $dir_dest = '../../../upload/tour-package/';
    $dir_dest_thumb = '../../../upload/tour-package/thumb/';

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
        $handle->image_x = 400;
        $handle->image_y = 300;


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
        $handle->image_x = 640;
        $handle->image_y = 320;

        $handle->Process($dir_dest_thumb);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $TOUR_PACKAGE->image_name = $imgName;
    $TOUR_PACKAGE->create();
    if ($TOUR_PACKAGE->id) {
        $result = [
            "status" => 'success',
            "id" => $TOUR_PACKAGE->id
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

    $dir_dest = '../../../upload/tour-package/';
    $dir_dest_thumb = '../../../upload/tour-package/thumb/';

    $handle = new Upload($_FILES['image_name']);

    $img = $_POST ["oldImageName"];

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $img;
        $handle->image_x = 400;
        $handle->image_y = 300;


        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $img = $handle->file_dst_name;
        }


        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $img;
        $handle->image_x = 640;
        $handle->image_y = 320;

        $handle->Process($dir_dest_thumb);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $img = $handle->file_dst_name;
        }
    }



    $TOUR_PACKAGE = new TourPackage($_POST['id']);

    $TOUR_PACKAGE->image_name = $_POST['oldImageName'];
    $TOUR_PACKAGE->tour_type = $_POST['tour_type'];
    $TOUR_PACKAGE->title = $_POST['title'];
    $TOUR_PACKAGE->dates = $_POST['dates'];
    $TOUR_PACKAGE->short_description = $_POST['short_description'];
    $TOUR_PACKAGE->description = $_POST['description'];
    $TOUR_PACKAGE->map = $_POST['map_code'];
    $TOUR_PACKAGE->include_exclude = $_POST['include_and_exclude'];

    $TOUR_PACKAGE->update();

    $result = ["id" => $_POST['id']];
    echo json_encode($result);
    exit();
}

if (isset($_POST['arrange'])) {

    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;

        $TOUR_PACKAGE = TourPackage::arrange($key, $img);
        header('Location:../../arrange-tour-package.php?id=' . $_POST['id'] . '&&message=9');
    }
}