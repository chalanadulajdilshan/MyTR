<?php

include '../../../class/include.php';

//create menu
if (isset($_POST['create'])) {

    $MENU = new Menu(NULL);

    $MENU->menu_type = $_POST['menu_type'];
    $MENU->title = ucwords($_POST['title']);
    $MENU->description = $_POST['description'];
    $MENU->price = $_POST['price'];
    $MENU->offer = $_POST['offer'];
    $MENU->status = $_POST['status'];


    $res = $MENU->create();

    $result = ["status" => 'success', "id" => $res];
    echo json_encode($result);
    exit();
}

//update menu
if (isset($_POST['update'])) {

    $MENU = new Menu($_POST['id']);

    $MENU->title = ucwords($_POST['title']);
    $MENU->description = $_POST['description'];
    $MENU->price = $_POST['price'];
    $MENU->offer = $_POST['offer'];

    $res = $MENU->update();
    $result = ["status" => 'success', "id" => $res->id];
    echo json_encode($result);
    exit();
}
?>
 
