<?php

include '../../../class/include.php';
Session_start();

if ($_POST['action'] == 'CREATE') {

    $VISITOR_MESSAGE = new VisitorMessage(NULL);
    $VISITOR_MESSAGE->message = $_POST["message"];
    $VISITOR_MESSAGE->customer = $_POST["customer"];
    $VISITOR_MESSAGE->visitor = $_POST["visitor"];
    $VISITOR_MESSAGE->type = 'C';


    $result = $VISITOR_MESSAGE->create();

    if ($result) {
        $array['id'] = $result->id;
        $array['customer'] = $result->customer;
        $array['visitor'] = $result->visitor;
        $array['message'] = $result->message;
        $array['send_at'] = date_format(date_create($result->createdAt), "h:i A");
        $array['status'] = "success";


        header('Content-Type: application/json');
        echo json_encode($array);
        exit();
    }
}


if ($_POST['action'] == 'GETMESSAGES') {
    $VISITOR_MESSAGE = new VisitorMessage(NULL);
    $messages = $VISITOR_MESSAGE->getMessagesByVisitor($_POST['customer'], $_POST['visitor']);
//    dd($messages);
    $VISITOR = new Visitor($_POST['visitor']);
    $CUSTOMER = new Customer($_POST['customer']);

    $arr = array();
    $final_arr = array();

    $final_arr['image_name'] = $CUSTOMER->image_name;
    $final_arr['image_name_visitor'] = $VISITOR->image_name;
    $final_arr['visitor_name'] = $VISITOR->full_name;
    $final_arr['is_type'] = $VISITOR->is_type;
    $final_arr['id'] = $VISITOR->id;
    if (Helper::checkIsOnline($VISITOR->lastLogin)) {
        $final_arr['status'] = 'active';
    } else {
        $final_arr['status'] = 'inactive';
    }

    foreach ($messages as $message) {
        $array = array();
        $array['message'] = $message['message'];
        $array['customer'] = $message['customer'];
        $array['visitor'] = $message['visitor'];
        $array['type'] = $message['type'];
        $array['is_type'] = $VISITOR->is_type;
        ;

        $array['send_at'] = date_format(date_create($message['created_at']), "h:i A");

        array_push($arr, $array);
    }

    $final_arr['messages'] = $arr;

    if ($messages) {
        header('Content-Type: application/json');
        echo json_encode($final_arr);
        exit();
    }
}

 

if ($_POST['action'] == 'UPDATE_TYPING') {
     
    $CUSTOMERS= new Customer($_SESSION['id']);
     
    $CUSTOMERS->is_type = $_POST['is_type'];
    $result = $CUSTOMERS->updatIsTypeing();
  
    if ($result) {
        $result = ["status" => 'success'];
        echo json_encode($result);
        exit();
    }
}
 
    