<?php

include '../../../class/include.php';

//create tour packages
if ($_POST['option'] == 'SELECT_PACKAGES') {

    $TOUR_COMPANY_PACKAGE_SELECTED = new TourCompanyPackageSelected(NULL);

    $TOUR_COMPANY_PACKAGE_SELECTED->customer_id = $_POST['customer_id'];
    $TOUR_COMPANY_PACKAGE_SELECTED->tour_company = $_POST['company_id'];
    $TOUR_COMPANY_PACKAGE_SELECTED->price = $_POST['price'];
    $TOUR_COMPANY_PACKAGE_SELECTED->selected_package = $_POST['tour_id'];
    $TOUR_COMPANY_PACKAGE_SELECTED->exclude = $_POST['exclude'];
    $TOUR_COMPANY_PACKAGE_SELECTED->include = $_POST['include'];


    $res = $TOUR_COMPANY_PACKAGE_SELECTED->create();
    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}

//create tour packages Own
if ($_POST['option'] == 'CREATE-TOUR_OWN') {

    $TOUR_COMPANY_PACKAGES = new TourCompanyPackage(NULL);

    $TOUR_COMPANY_PACKAGES->customer_id = $_POST['customer_id'];
    $TOUR_COMPANY_PACKAGES->tour_company = $_POST['id'];
    $TOUR_COMPANY_PACKAGES->type = $_POST['type'];
    $TOUR_COMPANY_PACKAGES->title = $_POST['title'];
    $TOUR_COMPANY_PACKAGES->image_name = $_POST['image_name'];
    $TOUR_COMPANY_PACKAGES->days = $_POST['dates'];
    $TOUR_COMPANY_PACKAGES->price = $_POST['price'];
    $TOUR_COMPANY_PACKAGES->description = $_POST['description'];
    $TOUR_COMPANY_PACKAGES->include_exclude = $_POST['include_and_exclude'];



    $res = $TOUR_COMPANY_PACKAGES->create();
    $result = ["status" => 'success', "id" => $_POST['id']];
    echo json_encode($result);
    exit();
}


//update tour packages Own
if ($_POST['option'] == 'UPDATE-TOUR_OWN') {

    $TOUR_COMPANY_PACKAGES = new TourCompanyPackage($_POST['id']);

    $TOUR_COMPANY_PACKAGES->type = $_POST['type'];
    $TOUR_COMPANY_PACKAGES->title = $_POST['title'];

    if ($_POST['image_name'] == "") {
        $TOUR_COMPANY_PACKAGES->image_name = $_POST['old-image_name'];
    } else {
        $TOUR_COMPANY_PACKAGES->image_name = $_POST['image_name'];
    }

    $TOUR_COMPANY_PACKAGES->days = $_POST['dates'];
    $TOUR_COMPANY_PACKAGES->price = $_POST['price'];
    $TOUR_COMPANY_PACKAGES->description = $_POST['description'];
    $TOUR_COMPANY_PACKAGES->include_exclude = $_POST['include_and_exclude'];



    $res = $TOUR_COMPANY_PACKAGES->update();
    $result = ["status" => 'success', "id" => $_POST['id']];
    echo json_encode($result);
    exit();
}
?>
 
