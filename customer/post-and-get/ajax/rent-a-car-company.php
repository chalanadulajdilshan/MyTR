    <?php

include '../../../class/include.php';

//create rent car company
if (isset($_POST['create'])) {

    $RESTAURANT = new Restaurant(NULL);

    $RESTAURANT->customer_id = $_POST['customer_id'];
    $RESTAURANT->title = ucwords($_POST['title']);
    $RESTAURANT->address_1 = $_POST['address_1'];
    $RESTAURANT->address_2 = $_POST['address_2'];
    $RESTAURANT->city = $_POST['city'];
    $RESTAURANT->zip_code = $_POST['zip_code'];
    $RESTAURANT->contact_name = $_POST['contact_name'];
    $RESTAURANT->email = $_POST['contact_email'];
    $RESTAURANT->contact_number_1 = $_POST['contact_number_1'];
    $RESTAURANT->contact_number_2 = $_POST['contact_number_2'];
    $RESTAURANT->image_name = $_POST['image_name'];
    $RESTAURANT->serve_types = $_POST['serve_types'];
    $RESTAURANT->open_time = $_POST['open_time'];
    $RESTAURANT->close_time = $_POST['close_time'];
    $RESTAURANT->close_days = $_POST['close_days'];
    $RESTAURANT->description = $_POST['description'];
    $RESTAURANT->status = $_POST['agree'];

    $res = $RESTAURANT->create();
    $result = ["status" => 'success', "id" => $res->id];
    echo json_encode($result);
    exit();
}

//update tour company packages
if (isset($_POST['update'])) {

    $RESTAURANT = new RentCarCompany($_POST['id']);

    

    if ($_POST['image_name'] == "") {
        $RESTAURANT->image_name = $_POST['old-image_name'];
    } else {
        $RESTAURANT->image_name = $_POST['image_name'];
    }

    $RESTAURANT->title = ucwords($_POST['title']);
    $RESTAURANT->address_1 = $_POST['address_1'];
    $RESTAURANT->address_2 = $_POST['address_2'];
    $RESTAURANT->city = $_POST['city'];
    $RESTAURANT->zip_code = $_POST['zip_code'];
    $RESTAURANT->contact_name = $_POST['contact_name'];
    $RESTAURANT->email = $_POST['contact_email'];
    $RESTAURANT->contact_number_1 = $_POST['contact_number_1'];
    $RESTAURANT->contact_number_2 = $_POST['contact_number_2'];
    $RESTAURANT->description = $_POST['description'];
    $RESTAURANT->agree = $_POST['agree'];


    $res = $RESTAURANT->update();
    $result = ["status" => 'success', "id" => $res->id];
    echo json_encode($result);
    exit();
}
?>
 
