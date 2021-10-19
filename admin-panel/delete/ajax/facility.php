<?php

include '../../../class/include.php'; 

if ($_POST['option'] == 'delete') {
    
    $FACILITY = new Facility($_POST['id']);
  
    $result =  $FACILITY->delete();

    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}