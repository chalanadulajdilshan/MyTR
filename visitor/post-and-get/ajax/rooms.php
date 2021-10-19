<?php

include '../../../class/include.php';


if (isset($_POST['create'])) {

    $ROOM = new Room(NULL);
    $ROOM_PHOTO = new RoomPhoto(NULL);


    $ROOM->acc_id = $_POST['id'];
    $ROOM->title = $_POST['title'];
    $ROOM->room_type = $_POST['room_type'];
    $ROOM->num_of_rooms = $_POST['num_of_rooms'];
    $ROOM->smoking_policy = $_POST['smoking_policy'];
    $ROOM->price = $_POST['price'];
    $ROOM->max = $_POST['max'];
    $ROOM->discount = $_POST['discount']; 


    if (isset($_POST['amenities'])) {
        $ROOM->amenities = implode(",", $_POST['amenities']);
    }

    $res = $ROOM->create();
    if ($res->id) {

        $ROOM_PHOTO->room = $res->id;
        if (isset($_POST['add-images'])) {

            foreach ($_POST['add-images'] as $room_photo) {

                $ROOM_PHOTO->acc_id = $_POST['id'];
                $ROOM_PHOTO->image_name = $room_photo;
                $ROOM_PHOTO->create();
            }
        }
    }
    $result = ["status" => 'success', "id" => $_POST['room_type']];
    echo json_encode($result);
    exit();
}

if (isset($_POST['update'])) {

    $ROOM = new Room($_POST['id']);
    $ROOM_PHOTO = new RoomPhoto(NULL);
    
    $ROOM->title = $_POST['title'];
    $ROOM->room_type = $_POST['room_type'];
    $ROOM->num_of_rooms = $_POST['num_of_rooms'];
    $ROOM->smoking_policy = $_POST['smoking_policy'];
    $ROOM->price = $_POST['price'];
    $ROOM->max = $_POST['max'];
    $ROOM->discount = $_POST['discount'];



    if (isset($_POST['amenities'])) {
        $ROOM->amenities = implode(",", $_POST['amenities']);
    }


    if (isset($_POST['add-images'])) {
        $ROOM_PHOTO->room = $_POST['id'];

        foreach ($_POST['add-images'] as $room_photo) {
            $ROOM_PHOTO->image_name = $room_photo;
            $ROOM_PHOTO->acc_id = $_POST['acc_id'];
            $ROOM_PHOTO->create();
        }
    }
    $ROOM->update();
    $result = ["status" => 'success', "id" => $_POST['id']];
    echo json_encode($result);
    exit();
}
?>
 
