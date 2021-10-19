<?php

include '../../../class/include.php';
  
//Driving license back
if ($_POST['selected_option'] == 'licen_back') {
   
    $dir_dest = '../../../upload/rent-a-car/license/back/';
    $dir_dest_thumb = '../../../upload/rent-a-car/license/back/thumb/';


    $imgName = Helper::randamId();

    $handle = new Upload($_FILES['licen_back']);

    if ($handle->uploaded) {

        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $imgName;
//        $handle->image_watermark = '../../img/logo-watermark.png';

        $image_dst_x = $handle->image_dst_x;
        $image_dst_y = $handle->image_dst_y;
        $newSize = Helper::calImgResize(600, $image_dst_x, $image_dst_y);

        $image_x = (int) $newSize[0];
        $image_y = (int) $newSize[1];

        $handle->image_x = $image_x;
        $handle->image_y = $image_y;

        $handle->Process($dir_dest);

        if ($handle->processed) {

            $handle1 = new Upload($_FILES['licen_back']);

            if ($handle1->uploaded) {

                $handle1->image_resize = true;
                $handle1->file_new_name_ext = 'jpg';
                $handle1->image_ratio_crop = 'C';
                $handle1->file_new_name_body = $imgName;
                $handle1->image_x = 400;
                $handle1->image_y = 247;

                $handle1->Process($dir_dest_thumb);

                if ($handle1->processed) {

                    $handle1->Clean(); // we delete the temporary files

                    header('Content-Type: application/json');

                    $result = [
                        "filename" => $handle1->file_dst_name,
                        "message" => 'success'
                    ];
                    echo json_encode($result);
                    exit();
                } else {

                    header('Content-Type: application/json');

                    $result = [
                        "message" => 'error'
                    ];
                    echo json_encode($result);
                    exit();
                }
            } else {

                header('Content-Type: application/json');

                $result = [
                    "message" => 'error'
                ];
                echo json_encode($result);
                exit();
            }
        } else {

            header('Content-Type: application/json');

            $result = [
                "message" => 'error'
            ];
            echo json_encode($result);
            exit();
        }
    } else {

        header('Content-Type: application/json');

        $result = [
            "message" => 'error'
        ];
        echo json_encode($result);
        exit();
    }
}

//
//if ($_POST['option'] == 'delete') {
//
//    unlink('../../../upload/rent-a-car/gallery/thumb/' . $_POST['id']);
//    unlink('../../../upload/rent-a-car/gallery/' . $_POST['id']);
//
//    $data = array("status" => TRUE);
//    header('Content-type: application/json');
//    echo json_encode($data);
//}
//
//if ($_POST['option'] == 'delete-car') {
//
//    $RENT_CAR_PHOTO = new RentCarPhoto($_POST['id']);
//    $RENT_CAR_PHOTO->delete();
//
//    unlink('../../../upload/rent-a-car/gallery/thumb/' . $RENT_CAR_PHOTO->image_name);
//    unlink('../../../upload/rent-a-car/gallery/' . $RENT_CAR_PHOTO->image_name);
//
//    $data = array("status" => TRUE);
//    header('Content-type: application/json');
//    echo json_encode($data);
//}
 