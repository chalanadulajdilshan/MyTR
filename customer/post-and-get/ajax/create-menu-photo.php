<?php

include '../../../class/include.php';
 
 
//create menu
if ($_POST['option'] == 'create') {
    
    $MENU_PHOTO = new MenuPhoto(null);
     
    if (isset($_POST['add-images'])) {

        foreach ($_POST['add-images'] as $menu_photo) {
            $MENU_PHOTO->image_name = $menu_photo;
            $MENU_PHOTO->menu = $_POST['id'];
            $MENU_PHOTO->create();
        }
    }

  
    $result = ["status" => 'success', "id" => $_POST['id']];
    echo json_encode($result);
    exit();
}
 
 
