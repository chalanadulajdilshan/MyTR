<!DOCTYPE html>
<?php
include '../class/include.php';
include './auth.php';
?>
<html class="loading" lang="en" data-textdirection="ltr">
    <!-- BEGIN: Head-->

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Manage Restaurants || My.TravelPartner.lk</title>
        <link rel="apple-touch-icon" href="app-assets/images/logo-favicon.png">
        <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/logo-favicon.png">     
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/charts/apexcharts.css">
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/swiper.min.css">
        <!-- END: Vendor CSS-->

        <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/colors.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/components.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/extensions/toastr.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/toastr.css">        <!-- END: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="../admin-panel/plugin/sweetalert/sweetalert.css">
        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/pages/dashboard-ecommerce.min.css">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <!-- END: Custom CSS-->
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    </head>
    <!-- END: Head-->

    <!-- BEGIN: Body-->
    <body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">

        <!-- BEGIN: Header-->
        <?php
        include 'header.php';
        ?>
        <!-- END: Main Menu-->


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
                                        <li class="breadcrumb-item active">Manage Your Restaurants
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <?php
                    $REASTURANT = new Restaurant(NULL);
                    foreach ($REASTURANT->getRenterCarsByCustomer($_SESSION['id']) as $restaurant) {
                        ?>
                        <div class="col-md-3" id="div<?php echo $restaurant['id'] ?>">
                            <div class="card">
                                <div class="card-content">
                                    <img class="card-img-top img-fluid" src="../upload/restaurant/main/gallery/thumb/<?php echo $restaurant['main_image'] ?>" alt="<?php echo $restaurant['title'] ?>"  >
                                    <div class="card-body" style="padding: 10px;">
                                        <h5 class=" text-left"><?php echo $restaurant['title'] ?></h5>
                                        <a href="edit-restaurant.php?id=<?php echo $restaurant['id'] ?>" data-toggle="tooltip" data-placement="bottom" title="Edit" ><i class=" bx bx-edit-alt edit-btn"></i></a> | 
                                        <a href="create-menu-type.php?id=<?php echo $restaurant['id'] ?>"  data-toggle="tooltip" data-placement="bottom" title="Add Your Menu"><i class=" bx bx-restaurant info-btn"></i></a>  | 
                                        <a href="#" class="delete-rent-car-company"  data-id="<?php echo $restaurant['id'] ?>"  data-toggle="tooltip" data-placement="bottom" title="Delete" ><i class="bx bxs-trash delete-btn"></i></a> 

                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>  
        </div>

        <!-- END: Content-->
        <?php include './footer.php'; ?>


        <div class="sidenav-overlay"></div>
        <div class="drag-target"></div>

        <script src="../js/jquery-2.2.4.min.js" type="text/javascript"></script>
        <script src="app-assets/vendors/js/vendors.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
        <!-- BEGIN Vendor JS-->

        <!-- BEGIN: Page Vendor JS-->
        <script src="app-assets/vendors/js/charts/apexcharts.min.js"></script>
        <script src="app-assets/vendors/js/extensions/swiper.min.js"></script>
        <script src="app-assets/vendors/js/extensions/toastr.min.js"></script>

        <!-- BEGIN: Theme JS-->
        <script src="app-assets/js/scripts/configs/vertical-menu-dark.min.js"></script>
        <script src="app-assets/js/core/app-menu.min.js"></script>
        <script src="app-assets/js/core/app.min.js"></script>
        <script src="app-assets/js/scripts/components.min.js"></script>
        <script src="app-assets/js/scripts/footer.min.js"></script>
        <script src="app-assets/js/scripts/customizer.min.js"></script>
        <script src="includes/dash.js"></script>
        <script src="app-assets/js/scripts/extensions/toastr.min.js"></script> 
        <script src="../admin-panel/plugin/sweetalert/sweetalert.min.js" type="text/javascript"></script>
        <!-- BEGIN: Page JS-->
        <script src="app-assets/js/scripts/pages/dashboard-ecommerce.min.js"></script>
        <script src="delete/js/rent-car-company.js" type="text/javascript"></script>

    </body>
    <!-- END: Body-->

</html>