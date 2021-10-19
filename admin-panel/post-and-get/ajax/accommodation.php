<?php

include '../../../class/include.php';


//create Facility
if (isset($_POST['create-facility'])) {

    $FACILITY = new Facility(NULL);

    $FACILITY->title = $_POST['title'];
    $FACILITY->icion = $_POST['icion'];
    $FACILITY->type = $_POST['type'];

    $FACILITY->create();

    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}

//Update facility
if (isset($_POST['update-facility'])) {


    $FACILITY = new Facility($_POST['id']);

    $FACILITY->title = $_POST['title'];
    $FACILITY->icion = $_POST['icon'];
    $FACILITY->type = $_POST['type'];
    $FACILITY->update();


    $result = ["id" => $_POST['id']];
    echo json_encode($result);
    exit();
}

//Create Accommodation Type
if (isset($_POST['create-accommodation-type'])) {

    $ACCOMMODATION_TYPE = new AccommodationType(NULL);

    $ACCOMMODATION_TYPE->title = $_POST['title'];

    $ACCOMMODATION_TYPE->create();

    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}

//update accommodation Type
if (isset($_POST['update-accommodation-type'])) {


    $ACCOMMODATION_TYPE = new AccommodationType($_POST['id']);

    $ACCOMMODATION_TYPE->title = $_POST['title'];
    $ACCOMMODATION_TYPE->update();


    $result = ["id" => $_POST['id']];
    echo json_encode($result);
    exit();
}

//Create Room Tyoe
if (isset($_POST['create-room-type'])) {

    $ROOM_TYPE = new RoomType(NULL);

    $ROOM_TYPE->title = $_POST['title'];

    $ROOM_TYPE->create();

    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}

//Update Room type
if (isset($_POST['update-room-type'])) {


    $ROOM_TYPE = new RoomType($_POST['id']);

    $ROOM_TYPE->title = $_POST['title'];
    $ROOM_TYPE->update();


    $result = ["id" => $_POST['id']];
    echo json_encode($result);
    exit();
}

//create amenities tyoe
if (isset($_POST['create-amenities-type'])) {

    $AMENITIES_TYPE = new AmenitiesType(NULL);

    $AMENITIES_TYPE->title = $_POST['title'];

    $AMENITIES_TYPE->create();

    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}

//update aminiteis type
if (isset($_POST['update-amenities-type'])) {


    $AMENITIES_TYPE = new AmenitiesType($_POST['id']);

    $AMENITIES_TYPE->title = $_POST['title'];
    $AMENITIES_TYPE->update();


    $result = ["id" => $_POST['id']];
    echo json_encode($result);
    exit();
}

//create amenities
if (isset($_POST['create-amenities'])) {

    $AMENITIES = new Amenities(NULL);

    $AMENITIES->type = $_POST['id'];
    $AMENITIES->title = $_POST['title'];
    $AMENITIES->create();

    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}

//update amenities
if (isset($_POST['update-amenities'])) {


    $AMENITIES = new Amenities($_POST['id']);

    $AMENITIES->title = $_POST['title'];
    $AMENITIES->update();


    $result = ["id" => $_POST['id']];
    echo json_encode($result);
    exit();
}

//update loction
if (isset($_POST['update_location'])) {


    $ACCOMMODATION = new Accommodation($_POST['id']);

    $ACCOMMODATION->map = $_POST['map'];
    $ACCOMMODATION->location = $_POST['location'];
    $ACCOMMODATION->description = $_POST['description'];

    $dir_dest = '../../../upload/accommodation/map/';

    $handle = new Upload($_FILES['map_image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = Helper::randamId();
        $handle->image_x = 600;
        $handle->image_y = 600;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $ACCOMMODATION->map_image = $imgName;

    $active = 0;
    if (isset($_POST['isPublished'])) {
        $active = $_POST['isPublished'];
    }
    $ACCOMMODATION->isPublished = $active;
    $ACCOMMODATION->updateLocation();


    $result = ["id" => $_POST['id']];
    echo json_encode($result);
    exit();
}

 