<?php

include '../../../class/include.php';
header('Content-Type: application/json; charset=UTF8');

//create tour date
if (isset($_POST['create'])) {

    $TOUR_DATE = new TourDate(NULL);
    $TOUR_DATE_PHOTO = new TourDatePhoto(NULL);

    $TOUR_DATE->tour = $_POST['id'];
    $TOUR_DATE->title = ucwords($_POST['title']);
    $TOUR_DATE->description = $_POST['description'];
    
    $res = $TOUR_DATE->create();
    foreach ($_POST['add-images'] as $tour_day) {
        $TOUR_DATE_PHOTO->tour_date = $res->id;
        $TOUR_DATE_PHOTO->image_name = $tour_day;
        $TOUR_DATE_PHOTO->create(); 
    }

    $result = ["id" => $_POST['id']];
    echo json_encode($result);
    exit();
}

if (isset($_POST['update'])) { 

    $TOUR_DATE = new TourDate($_POST['id']);
 
    $TOUR_DATE->title = ucwords($_POST['title']);
    $TOUR_DATE->description = $_POST['description'];

    $TOUR_DATE->update();
    $result = ["id" => $_POST['id']];
    echo json_encode($result);
    exit();
}

if (isset($_POST['save-data'])) {

    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;

        $TOUR_DATE = TourDate::arrange($key, $img);
        $id = $_POST['id'];
        header('Location:../../../arrange-tour-date.php?id=' . $id . '&message=9');
    }
}