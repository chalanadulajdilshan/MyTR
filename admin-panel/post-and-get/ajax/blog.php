<?php

include '../../../class/include.php';
 

if (isset($_POST['create'])) {

    $BLOG = new Blog(NULL);

    $BLOG->title = $_POST['title'];
    $BLOG->date = $_POST['date'];
    $BLOG->short_description = $_POST['short_description'];
    $BLOG->description = $_POST['description'];


    $dir_dest = '../../../upload/blog/';
    $dir_dest_thumb = '../../../upload/blog/thumb/';

    $handle = new Upload($_FILES['image']);

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
        $handle->image_x = 350;
        $handle->image_y = 250;

        $handle->Process($dir_dest_thumb);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

      
    $BLOG->image_name = $imgName;
    $BLOG->create();

    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}

if (isset($_POST['update'])) {
    
    
    $dir_dest = '../../../upload/blog/';
    $dir_dest_thumb = '../../../upload/blog/thumb/';

    $handle = new Upload($_FILES['image']);

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
        $handle->image_x = 350;
        $handle->image_y = 250;

        $handle->Process($dir_dest_thumb);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }


    $BLOG = new Blog($_POST['id']);

    $BLOG->image_name = $_POST['oldImageName'];
    $BLOG->title = $_POST['title'];
    $BLOG->date = $_POST['date'];
    $BLOG->short_description = $_POST['short_description'];
    $BLOG->description = $_POST['description'];
    $BLOG->update();


    $result = ["id" => $_POST['id']];
    echo json_encode($result);
    exit();
}

if (isset($_POST['arrange'])) {

    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;

        $BLOG = Blog::arrange($key, $img);

        header('Location:../../arrange-blog.php?message=9');
    }
}