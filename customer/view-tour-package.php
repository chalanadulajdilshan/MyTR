<!DOCTYPE html>
<?php
include '../class/include.php';
include './auth.php';
$id = '';
$id = $_GET['id'];
$TOUR_PACKAGE = new TourPackage($id);
?>
<html class="loading" lang="en" data-textdirection="ltr">
    <!-- BEGIN: Head-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>View Tour package - <?php echo $TOUR_PACKAGE->title ?></title>
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
         <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/logo-favicon.png">
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

        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    </head>
    <!-- END: Head-->

    <!-- BEGIN: Body-->
    <body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">

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
                                        <li class="breadcrumb-item"><a href="index.html"><i class="bx bx-home-alt"></i></a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#">View Tour Packages</a>
                                        </li>
                                        <li class="breadcrumb-item active"><?php echo $TOUR_PACKAGE->title ?>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-body"> 

                    <!-- Form wizard with icon tabs section start -->
                    <section id="info-tabs-">
                        <div class="row">
                            <div class="col-12">

                                <?php
                                if (isset($_GET['message'])) {
                                    $MESSAGE = new Message($_GET['message']);
                                    ?>

                                    <div class="alert alert-<?php echo $MESSAGE->status; ?> alert-dismissible mb-2" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <div class="d-flex align-items-center"> 
                                            <span>
                                                <?php echo $MESSAGE->description; ?>
                                            </span>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                                <div class="card icon-tab"> 
                                    <div class="card-content mt-2">
                                        <div class="card-body">
                                            <form action="#" class="wizard-horizontal form repeater-default" id="form-data">
                                                <fieldset>


                                                    <div class="br mb-2"  >

                                                        <div class="row"> 
                                                            <div class="col-12">
                                                                <h3 class="text-center"><u><?php echo $TOUR_PACKAGE->title ?></u></h3>
                                                            </div>
                                                        </div> 

                                                        <?php
                                                        $TOUR_DATE = new TourDate(NULL);
                                                        foreach ($TOUR_DATE->getTourDatesById($id) as $tour_date) {
                                                            ?>
                                                            <div class="row"> 
                                                                <div class="col-12">
                                                                    <h5><?php echo $tour_date['title'] ?></h5>
                                                                    <p>
                                                                        <?php echo $tour_date['description'] ?>
                                                                    </p>
                                                                </div>
                                                            </div> 


                                                            <div class="row mt-2 " id="delete">
                                                                <?php
                                                                $TOUR_DATE_PHOTO = new TourDatePhoto(NULL);
                                                                foreach ($TOUR_DATE_PHOTO->getTourDatePhotosById($tour_date['id']) as $tour_date_photo) {
                                                                    ?>

                                                                    <div class="col-md-3 delete-car  " id="<?php echo $tour_date_photo['id'] ?>" style="margin-bottom: 25px;" >

                                                                        <img src="../upload/tour-package/date/thumb/<?php echo $tour_date_photo['image_name'] ?>" width="100%" d>
                                                                    </div>

                                                                <?php } ?> 
                                                            </div>
                                                        <?php } ?>
                                                    </div> 
                                                </fieldset>  
                                            </form> 
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


        <!-- BEGIN: Footer-->
        <?php include './footer.php'; ?>
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


    </body>

</html>