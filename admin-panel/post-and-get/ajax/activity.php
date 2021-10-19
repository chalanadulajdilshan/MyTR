<?php

include '../../../class/include.php';
 

if (isset($_POST['create'])) {

    $ACTIVITY = new Activities(NULL);

    $ACTIVITY->title = $_POST['title'];
    $ACTIVITY->location = $_POST['location'];
    $ACTIVITY->short_description = $_POST['short_description'];
    $ACTIVITY->description = $_POST['description'];
    $ACTIVITY->map_code = $_POST['map_code'];
    $ACTIVITY->location_highlight = $_POST['location_highlight'];

    $dir_dest = '../../../upload/activity/';

    $handle = new Upload($_FILES['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = Helper::randamId();
        $handle->image_x = 360;
        $handle->image_y = 270;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $ACTIVITY->image_name = $imgName;
    $ACTIVITY->create();

    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}

if (isset($_POST['update'])) {
    $dir_dest = '../../../upload/activity/';

    $handle = new Upload($_FILES['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $_POST ["oldImageName"];
        $handle->image_x = 360;
        $handle->image_y = 270;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $ACTIVITY = new Activities($_POST['id']);

    $ACTIVITY->image_name = $_POST['oldImageName'];
    $ACTIVITY->title = $_POST['title'];
    $ACTIVITY->location = $_POST['location'];
    $ACTIVITY->short_description = $_POST['short_description'];
    $ACTIVITY->description = $_POST['description'];
    $ACTIVITY->map_code = $_POST['map_code'];
    $ACTIVITY->location_highlight = $_POST['location_highlight'];
    $ACTIVITY->update();


    $result = ["id" => $_POST['id']];
    echo json_encode($result);
    exit();
}

if (isset($_POST['arrange'])) {

    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;

        $ACTIVITY = Activities::arrange($key, $img);

        header('Location:../../arrange-activity.php?message=9');
    }
}