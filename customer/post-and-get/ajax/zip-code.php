<?php

include '../../../class/include.php';

if ($_POST['action'] == 'GET_ZIP_CODE_BY_CITY') {

    $CITY = new City(NULL);
  
    $result = $CITY->getZipCodeById($_POST["city"]);
 
    echo json_encode($result);
    header('Content-type: application/json');
    exit();
}

