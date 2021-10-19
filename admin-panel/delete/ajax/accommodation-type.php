<?php

include '../../../class/include.php';
 
 

if ($_POST['option'] == 'delete') {
   
    $ACCOMMODATION_TYPE = new AccommodationType($_POST['id']);
  
    $result = $ACCOMMODATION_TYPE->delete();

    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}