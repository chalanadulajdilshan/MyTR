<?php

include '../../../class/include.php';
header('Content-Type: application/json; charset=UTF8');


 
//Create
if (isset($_POST['create'])) {
    $PRODUCT = new Product(NULL);

    $PRODUCT->title = $_POST['title'];
    $PRODUCT->short_description = $_POST['short_description'];
    $PRODUCT->description = $_POST['description'];


    $dir_dest = '../../../upload/product/';
   
    $handle = new Upload($_FILES['image_name']);

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

    $PRODUCT->image_name = $imgName;

    $PRODUCT->create();

    if ($PRODUCT) {
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

    $dir_dest = '../../../upload/product/';

    $handle = new Upload($_FILES['image_name']);
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
    
     $PRODUCT = new Product($_POST['id']);
    $PRODUCT->image_name = $_POST['oldImageName'];
    $PRODUCT->title = $_POST['title'];
    $PRODUCT->short_description = $_POST['short_description'];
    $PRODUCT->description = $_POST['description'];
 
     $PRODUCT->update();

    if ($PRODUCT) {
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
        $PRODUCT = Product::arrange($key, $img);
        header('Location:../../../arrange-product.php?message=9');
    }
}



 