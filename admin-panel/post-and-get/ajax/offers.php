<?php

include '../../../class/include.php';

if (isset($_POST['create'])) {

    $OFFER = new Offer(NULL);

    $OFFER->category = $_POST['category'];
    $OFFER->title = $_POST['title'];
    $OFFER->start_date = $_POST['start_date'];
    $OFFER->end_date = $_POST['end_date'];
    $OFFER->offer_presentage = $_POST['offer_presentage'];
    $OFFER->short_description = $_POST['short_description'];
    $OFFER->offer_duration = $_POST['offer_duration'];
    $OFFER->price = $_POST['price'];

    if (isset($_POST['is_publish'])) {
        $OFFER->is_publish = $_POST['is_publish'];
    } else {
        $OFFER->is_publish = 0;
    }


    $dir_dest = '../../../upload/offer/';

    $handle = new Upload($_FILES['image_name']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = Helper::randamId();
        $handle->image_x = 255;
        $handle->image_y = 300;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $OFFER->image_name = $imgName;
    $OFFER->create();
    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}

if (isset($_POST['update'])) {
    $dir_dest = '../../../upload/offer/';

    $handle = new Upload($_FILES['image_name']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $_POST ["oldImageName"];
        $handle->image_x = 255;
        $handle->image_y = 300;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $OFFER = new Offer($_POST['id']);

    $OFFER->image_name = $_POST['oldImageName'];
    $OFFER->category = $_POST['category'];
    $OFFER->title = $_POST['title'];
    $OFFER->start_date = $_POST['start_date'];
    $OFFER->end_date = $_POST['end_date'];
    $OFFER->offer_presentage = $_POST['offer_presentage'];
    $OFFER->short_description = $_POST['short_description'];
    $OFFER->offer_duration = $_POST['offer_duration'];
    $OFFER->price = $_POST['price'];
    if (isset($_POST['is_publish'])) {
        $OFFER->is_publish = $_POST['is_publish'];
    } else {
        $OFFER->is_publish = 0;
    }

    $OFFER->update();

    $result = ["id" => $_POST['id']];
    echo json_encode($result);
    exit();
}

if (isset($_POST['arrange'])) {

    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;

        $OFFER = Offer::arrange($key, $img);

         header('Location:../../arrange-offer.php?message=9');
    }
}
    