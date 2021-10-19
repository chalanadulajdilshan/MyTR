<?php

include '../../../class/include.php';

if (isset($_POST['create'])) {

    $OFFER_DURATION = new OfferDuration(NULL);

    $OFFER_DURATION->title = $_POST['title'];
    $OFFER_DURATION->dates = $_POST['dates'];
    $OFFER_DURATION->price = $_POST['price'];

    $OFFER_DURATION->create();
    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}

if (isset($_POST['update'])) {

    $OFFER_DURATION = new OfferDuration($_POST['id']);

    $OFFER_DURATION->title = $_POST['title'];
    $OFFER_DURATION->dates = $_POST['dates'];
    $OFFER_DURATION->price = $_POST['price'];

    $OFFER_DURATION->update();

    $result = ["id" => $_POST['id']];
    echo json_encode($result);
    exit();
}

if (isset($_POST['save-data'])) {

    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;

        $OFFER_DURATION = Offer::arrange($key, $img);

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}
