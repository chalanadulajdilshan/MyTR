<?php

include '../../../class/include.php';  
//create slider
if (isset($_POST['create'])) {
    $SLIDER = new Slider(NULL);


    $SLIDER->title = $_POST['title'];
 
    $dir_dest = '../../../upload/slider/';

    $handle = new Upload($_FILES['image_name']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = Helper::randamId();
        $handle->image_x = 1920;
        $handle->image_y = 600;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $SLIDER->image_name = $imgName;


    $SLIDER->create();

    if ($SLIDER->id) {
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

//update slider
if (isset($_POST['update'])) {

    $dir_dest = '../../../upload/slider/';

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
        $handle->image_y = 600;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $SLIDER = new Slider($_POST['id']);
    $SLIDER->image_name = $_POST['oldImageName'];
    $SLIDER->title = $_POST['title']; 

    $result = $SLIDER->update();

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

//Arange slider
if (isset($_POST['arrange'])) {
    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;
        $SLIDER = Slider::arrange($key, $img);
        header('Location:../../arrange-slider.php?message=9');
    }
}