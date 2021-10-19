<!DOCTYPE html>
<?php
include '../class/include.php';
include './auth.php';

$id = '';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$TOUR_PACKAGE = new TourPackage($id);
?>
<html class="loading" lang="en" data-textdirection="ltr">
    <!-- BEGIN: Head-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="author" content="MyTravelPartner.lk">
        <title>Create tour package Photo - MyTravelPartner.lk</title>
        <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
        <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/logo-favicon.png"> 
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
        <!-- END: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css">
        <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/colors.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/components.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.min.css">
        <link rel="stylesheet" type="text/css" href="../admin-panel/plugin/sweetalert/sweetalert.css">
        <!-- END: Theme CSS-->

        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.min.css"> 
        <link rel="stylesheet" type="text/css" href="assets/css/style.css"> 
        <link href="assets/css/preloader.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    </head>
    <!-- END: Head-->

    <!-- BEGIN: Body-->
    <body class="someBlock vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">

        <!-- BEGIN: Header-->
        <div class="header-navbar-shadow"></div>
        <?php include './header.php'; ?>
        <!-- END: Header-->


        <!-- BEGIN: Content-->
        <div class="app-content content">
            <div class="content-overlay"></div>
            <div class="content-wrapper">
                <div class="content-header row">
                    <div class="content-header-left col-12 mb-2 mt-1">
                        <div class="row breadcrumbs-top">
                            <div class="col-12">
                                <h5 class="content-header-title float-left pr-1 mb-0">Dashboard</h5>
                                <div class="breadcrumb-wrapper col-12">
                                    <ol class="breadcrumb p-0 mb-0">
                                        <li class="breadcrumb-item"><a href="index.php"><i class="bx bx-home-alt"></i></a>
                                        </li>

                                        <li class="breadcrumb-item active">Create Tour Package Photo - <span class="text-danger"> " <?php echo $TOUR_PACKAGE->title ?> " </span>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-body">  
                    <section id="info-tabs-">
                        <div class="row">
                            <div class="col-12">   
                                <div class="card icon-tab"> 
                                    <div class="card-content mt-2">
                                        <div class="card-body">
                                            <form action="#" class="wizard-horizontal form repeater-default" id="form-data">
                                                <fieldset>
                                                    <div class="br">
                                                        <div class="row">

                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Caption</label>
                                                                    <input type="text" class="form-control" placeholder="Enter Caption" id="caption" name="caption"   >
                                                                </div>
                                                            </div>  

                                                            <div class="col-sm-12 form-group"    > 
                                                                <label>Add your Image</label>
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input" id="image_name" name="image_name">
                                                                    <label class="custom-file-label" for="main_img_tour">Add your image</label>
                                                                </div> 
                                                            </div>

                                                        </div> 
                                                    </div>  
                                                    <hr>

                                                    <button class="btn btn-warning mb-1" type="button" id="create"   style="float: right;color: white">
                                                        <span class=" spinner-border-sm" role="status" aria-hidden="true"></span>
                                                        Create
                                                    </button>
                                                    <input type="hidden"   name="create">
                                                    <input type="hidden"   name="id" value="<?php echo $id ?>">
                                                </fieldset> 
                                            </form> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="content-body"> 
                    <section id="info-tabs-">
                        <div class="row">
                            <div class="col-12">
                                <div class="card icon-tab">  
                                    <div class="card-content mt-2">
                                        <div class="card-body">

                                            <div class="br"> 
                                                <div class="row">
                                                    <?php
                                                    $TOUR_PACKAGE_PHOTO = new TourPackagePhoto(NULL);
                                                    if (count($TOUR_PACKAGE_PHOTO->getTourPackagePhotosByPackage($id)) > 0) {
                                                        foreach ($TOUR_PACKAGE_PHOTO->getTourPackagePhotosByPackage($id) as $key => $tour_package_photo) {
                                                            ?>
                                                            <div class="col-md-3 col-sm-6" id="div<?php echo $tour_package_photo['id'] ?>">
                                                                <div   style="background-color: #f2f4f4;margin-bottom: 25px;">
                                                                    <div class="card" >
                                                                        <div class="card-content" > 
                                                                            <img class="card-img-top img-fluid" src="../upload/tour-package/gallery/thumb/<?php echo $tour_package_photo['image_name'] ?>" alt="mytravelpartner.lk"  >

                                                                            <div class="card-body" style="padding: 10px; background-color: #f2f4f4;" >
                                                                                <h6 class=" text-left"><?php echo $tour_package_photo['caption'] ?></h6>
                                                                                <a href="edit-tour-package-photo.php?id=<?php echo $tour_package_photo['id'] ?>" data-toggle="tooltip" data-placement="bottom" title="Edit" ><i class=" bx bx-edit-alt edit-btn"></i></a> | 
                                                                                <a href="arrange-tour-package-photo.php?id=<?php echo $id ?>"  data-toggle="tooltip" data-placement="bottom" title="Arrange"><i class=" bx bx-transfer succes-btn"></i></a> | 
                                                                                <a href="#" class="delete-tour-package-photo" data-id="<?php echo $tour_package_photo['id'] ?>" data-toggle="tooltip" data-placement="bottom" title="Delete" ><i class="bx bxs-trash delete-btn"></i></a> 
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php
                                                        }
                                                    } else {
                                                        ?>
                                                        <p class="text-danger text-bold-600 text-left">No tour package images.</p>
                                                    <?php } ?>
                                                </div>
                                            </div>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>  
                </div>
            </div>
        </div>
        <!-- END: Content-->



        <div class="sidenav-overlay"></div>
        <div class="drag-target"></div>

        <!-- BEGIN: Footer-->

        <!-- END: Footer-->
        <script src="../js/jquery-2.2.4.min.js" type="text/javascript"></script> 

        <script src="app-assets/vendors/js/vendors.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>

        <!-- BEGIN: Theme JS-->
        <script src="app-assets/js/scripts/configs/vertical-menu-dark.min.js"></script>
        <script src="app-assets/js/core/app-menu.min.js"></script>
        <script src="app-assets/js/core/app.min.js"></script>
        <script src="app-assets/js/scripts/components.min.js"></script>
        <script src="app-assets/js/scripts/footer.min.js"></script>
        <script src="app-assets/js/scripts/customizer.min.js"></script> 
        <script src="app-assets/js/scripts/forms/form-repeater.min.js"></script>

        <script src="app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js"></script>
        <script src="app-assets/js/scripts/forms/number-input.min.js"></script>
        <script src="app-assets/vendors/js/forms/repeater/jquery.repeater.min.js"></script>
        <script src="plugin/sweetalert/sweetalert.min.js" type="text/javascript"></script>
        <!-- END: Page Vendor JS--> 
        <script src="js/jquery.preloader.min.js" type="text/javascript"></script>
        <script src="js/ajax/tour-package-photo.js" type="text/javascript"></script>
        <script src="delete/js/tour-package-photo.js" type="text/javascript"></script>

    </body>

</html>