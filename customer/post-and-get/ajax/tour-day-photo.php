<?php

include '../../../class/include.php';

//create tour day images
if ($_POST['action'] == 'upload-add-image') {

    $dir_dest = '../../../upload/tour-package/date/photo/';
    $dir_dest_thumb = '../../../upload/tour-package/date/photo/thumb/';
    $imgName = Helper::randamId();

    $handle = new Upload($_FILES['image_name']);

    if ($handle->uploaded) {

        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $imgName;
        $handle->image_x = 900;
        $handle->image_y = 570;

        $handle->Process($dir_dest);

        if ($handle->processed) {

            $handle1 = new Upload($_FILES['image_name']);

            if ($handle1->uploaded) {

                $handle1->image_resize = true;
                $handle1->file_new_name_ext = 'jpg';
                $handle1->image_ratio_crop = 'C';
                $handle1->file_new_name_body = $imgName;
                $handle1->image_x = 300;
                $handle1->image_y = 250;

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

//delete add tour images
if ($_POST['action'] == 'delete') {

    unlink('../../../upload/tour-package/date/photo/thumb/' . $_POST['id']);
    unlink('../../../upload/tour-package/date/photo/' . $_POST['id']);

    $data = array("status" => TRUE);
    header('Content-type: application/json');
    echo json_encode($data);
}
 

if ($_POST['action'] == 'update') {
    $TOUR_DATE_PHOTO = new TourDatePhoto($_POST['id']);
   
    if (isset($_POST['add-images'])) {

        foreach ($_POST['add-images'] as $tour_day_photo) {
            $TOUR_DATE_PHOTO->image_name = $tour_day_photo;
            $TOUR_DATE_PHOTO->tour_date = $_POST['id'];
            $TOUR_DATE_PHOTO->create();
        }
    }
    $TOUR_DATE_PHOTO->update();
    $result = ["status" => 'success', "id" => $_POST['id']];
    echo json_encode($result);
    exit();
}

//delete parmenetly tour image
if ($_POST['action'] == 'delete-room-photo') {

    $TOUR_DATE_PHOTO = new TourDate($_POST['id']);

    unlink('../../../upload/tour-package/date/photo/thumb/' . $TOUR_DATE_PHOTO->image_name);
    unlink('../../../upload/tour-package/date/photo/' . $TOUR_DATE_PHOTO->image_name);

    $result = $ROOM_PHOTO->delete();
    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}
