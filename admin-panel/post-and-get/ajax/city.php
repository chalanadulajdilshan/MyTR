<?php

include '../../../class/include.php';
header('Content-Type: application/json; charset=UTF8');

if (isset($_POST['create'])) {
  
    $CITY = new City(NULL);

     
    $CITY->name = $_POST['title']; 
    $CITY->create();

    if ($CITY->id) {
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

if (isset($_POST['update'])) {
 

    $CITY = new Comments($_POST['id']); 
    $CITY->name = $_POST['title']; 

    $result = $CITY->update();

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




