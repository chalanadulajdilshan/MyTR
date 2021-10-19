<?php

include '../../../class/include.php';

//create
if (isset($_POST['create'])) {

    $ALBUM_PHOTO = new AlbumPhoto(NULL);


    $ALBUM_PHOTO->album = $_POST['album'];
    $ALBUM_PHOTO->caption = $_POST['caption'];

    $dir_dest = '../../../upload/photo-album/gallery/';
    $dir_dest_thumb = '../../../upload/photo-album/gallery/thumb/';

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
        $handle->image_watermark_position = 'BL';
        $handle->image_watermark = '../../../images/logo-wide-white-footer.png';
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
        $handle->image_x = 285;
        $handle->image_y = 175;

        $handle->Process($dir_dest_thumb);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $ALBUM_PHOTO->image_name = $imgName;

    $ALBUM_PHOTO->create();

    if ($ALBUM_PHOTO->id) {
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


//update
if (isset($_POST['update'])) {

    $dir_dest = '../../../upload/photo-album/gallery/';
    $dir_dest_thumb = '../../../upload/photo-album/gallery/thumb/';

    $handle = new Upload($_FILES['image_name']);

    $img = $_POST ["oldImageName"];

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $img;
        $handle->image_watermark_position = 'BL';
        $handle->image_watermark = '../../../images/logo-wide-white-footer.png';
        $handle->image_x = 900;
        $handle->image_y = 500;

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
        $handle->image_x = 285;
        $handle->image_y = 175;

        $handle->Process($dir_dest_thumb);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $img = $handle->file_dst_name;
        }
    }

    $ALBUM_PHOTO = new AlbumPhoto($_POST['id']);

    $ALBUM_PHOTO->image_name = $_POST['oldImageName'];
    $ALBUM_PHOTO->caption = $_POST['caption'];
    $ALBUM_PHOTO->update();

    if ($ALBUM_PHOTO->id) {
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

//arrange
if (isset($_POST['arrange'])) {

    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;

        $ALBUM_PHOTO = AlbumPhoto::arrange($key, $img);

          header('Location:../../arrange-album-photo.php?message=9');
    }
}