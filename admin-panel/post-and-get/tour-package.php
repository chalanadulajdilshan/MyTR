<?php

include '../../class/include.php';
  
if (isset($_POST['arrange'])) {

    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;

        $VEHICLE_PHOTOS = TourPackage::arrange($key, $img);

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}
?>