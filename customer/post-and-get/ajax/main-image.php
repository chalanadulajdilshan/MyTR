<?php

include '../../../class/include.php';
 
//Create accommodation main image
if ($_POST['action'] == 'upload-add-image') {


    $dir_dest = '../../../upload/accommodation/gallery/';
    $dir_dest_thumb = '../../../upload/accommodation/gallery/thumb/';
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

//Create rent a car main image 
if ($_POST['action'] == 'upload-add-image-rent-car') {
          
    $dir_dest = '../../../upload/rent-a-car/gallery/';
    $dir_dest_thumb = '../../../upload/rent-a-car/gallery/thumb/';
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

//Create tour main image
if ($_POST['action'] == 'upload-add-main_img_tour') {

    $dir_dest = '../../../upload/tour-package/main/gallery/';
    $dir_dest_thumb = '../../../upload/tour-package/main/gallery/thumb/';
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

//Create Restaurant main image
if ($_POST['action'] == 'upload-add-main_img_restaurant') {

    $dir_dest = '../../../upload/restaurant/main/gallery/';
    $dir_dest_thumb = '../../../upload/restaurant/main/gallery/thumb/';
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

//Create tour package image
if ($_POST['action'] == 'upload-add-tour-package') {

    $dir_dest = '../../../upload/tour-package/gallery/';
    $dir_dest_thumb = '../../../upload/tour-package/gallery/thumb/';
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


//Delete accommodation main image
if ($_POST['action'] == 'delete') {

    unlink('../../../upload/accommodation/gallery/thumb/' . $_POST['id']);
    unlink('../../../upload/accommodation/gallery/' . $_POST['id']);

    $data = array("status" => TRUE);
    header('Content-type: application/json');
    echo json_encode($data);
}

//Delete rent a car main image
if ($_POST['action'] == 'delete-vehicle') {

    unlink('../../../upload/rent-a-car/gallery/thumb/' . $_POST['id']);
    unlink('../../../upload/rent-a-car/gallery/' . $_POST['id']);

    $data = array("status" => TRUE);
    header('Content-type: application/json');
    echo json_encode($data);
}

//Delete tour main image
if ($_POST['action'] == 'delete-tour') {

    unlink('../../../upload/tour-package/main/gallery/thumb/' . $_POST['id']);
    unlink('../../../upload/tour-package/main/gallery/' . $_POST['id']);

    $data = array("status" => TRUE);
    header('Content-type: application/json');
    echo json_encode($data);
}

//Delete tour package image
if ($_POST['action'] == 'delete-tour-package') {

    unlink('../../../upload/tour-package/main/gallery/thumb/' . $_POST['id']);
    unlink('../../../upload/tour-packagemain//gallery/' . $_POST['id']);

    $data = array("status" => TRUE);
    header('Content-type: application/json');
    echo json_encode($data);
}

//Delete tour package image
if ($_POST['action'] == 'delete-restaurant-img') {

    unlink('../../../upload/restaurant/main/gallery/thumb/' . $_POST['id']);
    unlink('../../../upload/restaurant/main/gallery/' . $_POST['id']);

    $data = array("status" => TRUE);
    header('Content-type: application/json');
    echo json_encode($data);
}

 
