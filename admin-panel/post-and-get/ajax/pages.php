<?php

include '../../../class/include.php';
 
//create
if (isset($_POST['create'])) {
    $PAGES = new Page(NULL);

    $PAGES->title = $_POST['title'];
    $PAGES->short_description = $_POST['short_description'];
    $PAGES->description = $_POST['description'];
 

    $PAGES->create();

    if ($PAGES->id) {
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
 

    $PAGES = new Page($_POST['id']);
     $PAGES->title = $_POST['title'];
     $PAGES->short_description = $_POST['short_description'];
    $PAGES->description = $_POST['description'];

    $result = $PAGES->update();

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


