<?php

include '../../class/include.php';

if ($_POST['action'] == 'GET_CITYS') {

    $CITY = new City(NULL);

    $result = $CITY->all();

    echo json_encode($result);

    exit();
}

