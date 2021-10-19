<?php

include '../../../class/include.php';
header('Content-Type: application/json; charset=UTF8');

if (isset($_POST['create'])) {
    $TOUR_TYPE = new TourType(NULL);
   
    $TOUR_TYPE->title = $_POST['title'];
   
    
    $TOUR_TYPE->create();
    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}


if (isset($_POST['update'])) {

  
    $TOUR_TYPE = new TourType($_POST['id']);
 
    $TOUR_TYPE->title = $_POST['title']; 
    $TOUR_TYPE->update();

    $result = ["id" => $_POST['id']];
    echo json_encode($result);
    exit();
}

 