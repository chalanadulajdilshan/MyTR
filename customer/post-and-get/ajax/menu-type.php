<?php

include '../../../class/include.php';
header('Content-Type: application/json; charset=UTF8');


//create menu
if (isset($_POST['create'])) {

    $MENU_TYPE = new MenuType(NULL);

    $MENU_TYPE->title = $_POST['title'];
    $MENU_TYPE->restaurant_id = $_POST['id'];

    $res = $MENU_TYPE->create();

    $result = ["status" => 'success', "id" => $res];
    echo json_encode($result);
    exit();
}

//update menu
if (isset($_POST['update'])) {


    $MENU_TYPE = new MenuType($_POST['id']);

    $MENU_TYPE->title = $_POST['title'];
    $MENU_TYPE->update();

    $result = ["id" => $_POST['id']];
    echo json_encode($result);
    exit();
}

 