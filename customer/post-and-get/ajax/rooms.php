<?php

include '../../../class/include.php';

//header('Content-Type: application/json');
//create room
if (isset($_POST['create'])) {

    $ROOM = new Room(NULL);
    $ROOM_PHOTO = new RoomPhoto(NULL);


    $ROOM->acc_id = $_POST['id'];
    $ROOM->title = ucwords($_POST['title']);
    $ROOM->room_type = $_POST['room_type'];
    $ROOM->num_of_rooms = $_POST['num_of_rooms'];

    $ROOM->smoking_policy = $_POST['smoking_policy'];
    $ROOM->price = $_POST['price'];
    $ROOM->max = $_POST['max'];
    $ROOM->discount = $_POST['discount'];
    $ROOM->description = $_POST['description'];


    $ROOM->bed_name = $_POST['bed_name'];
    $ROOM->extra_bed = $_POST['extra_bed'];
    $ROOM->num_bed = $_POST['num_bed'];


    if (isset($_POST['amenities'])) {
        $ROOM->amenities = implode(",", $_POST['amenities']);
    }

    $res = $ROOM->create();

    if ($res) {


        if (isset($_POST['add-images'])) {

            foreach ($_POST['add-images'] as $room_photo) {

                $ROOM_PHOTO->acc_id = $_POST['id'];
                $ROOM_PHOTO->room = $res;
                $ROOM_PHOTO->image_name = $room_photo;
                $ROOM_PHOTO->create();
            }
        }

        $result = ["status" => 'success', "id" => $_POST['id']];
        echo json_encode($result);
        exit();
    }
}

//update room details
if (isset($_POST['update'])) {

    $ROOM = new Room($_POST['id']);
    $ROOM_PHOTO = new RoomPhoto(NULL);

    $ROOM->title = ucwords($_POST['title']);
    $ROOM->room_type = $_POST['room_type'];
    $ROOM->num_of_rooms = $_POST['num_of_rooms'];
    $ROOM->smoking_policy = $_POST['smoking_policy'];
    $ROOM->price = $_POST['price'];
    $ROOM->max = $_POST['max'];
    $ROOM->num_of_rooms = $_POST['num_of_rooms'];
    $ROOM->discount = $_POST['discount'];

    $ROOM->bed_name = ucwords($_POST['bed_name']);
    $ROOM->extra_bed = $_POST['extra_bed'];
    $ROOM->num_bed = $_POST['num_bed'];
    $ROOM->description = $_POST['description'];


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
 
