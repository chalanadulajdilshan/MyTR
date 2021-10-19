<?php

include '../../../class/include.php';

if ($_POST['option'] == 'delete') {

    $ALBUM_PHOTO = new AlbumPhoto($_POST['id']);

    $result = $ALBUM_PHOTO->delete();

    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}