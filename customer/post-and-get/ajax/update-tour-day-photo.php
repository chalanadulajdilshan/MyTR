<?php

include '../../../class/include.php';


if ($_POST['option'] == 'update') {
    $TOUR_DATE_PHOTO = new TourDatePhoto($_POST['id']);

    if (isset($_POST['add-images'])) {

        foreach ($_POST['add-images'] as $tour_day_photo) {
            $TOUR_DATE_PHOTO->image_name = $tour_day_photo;
            $TOUR_DATE_PHOTO->tour_date = $_POST['id'];
            $TOUR_DATE_PHOTO->create();
        }
    }
//    $TOUR_DATE_PHOTO->update();
    $result = ["status" => 'success', "id" => $_POST['id']];
    echo json_encode($result);
    exit();
}
 
