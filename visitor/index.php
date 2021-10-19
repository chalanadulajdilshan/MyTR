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
        <meta name="author" content="PIXINVENT">
        <title>MyTravelPartner.lk - Customer || Home</title>
        <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.html">
        <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/logo-favicon.png">
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"  rel="stylesheet">

        <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/colors.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/components.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/extensions/toastr.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/toastr.css">       

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
    <body onload="myFunction()" class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">

        <!-- BEGIN: Header-->
        <?php
        include 'header.php';
        ?>
        <!-- END: Main Menu-->

        <!-- BEGIN: Content-->
        <div class="app-content content">
            <div class="content-overlay"></div>
            <div class="content-wrapper">
                <div class="content-header row">
                </div>
                <div class="content-body"><!-- Dashboard Ecommerce Starts -->
                    <section id="dashboard-ecommerce">
                        <div class="row">

                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar bg-rgba-success m-0 p-25 mr-75 mr-xl-2">
                                                <div class="avatar-content">
                                                    <i class="bx bxs-bed  text-success font-medium-2"></i>
                                                </div>
                                            </div>
                                            <div class="total-amount">
                                                <h5 class="mb-0">Accommodation</h5>
                                                <small class="text-muted  ">Bookings<span><b> 2</b></span></small>
                                            </div>
                                        </div>
                                        <div id="primary-line-chart"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar bg-rgba-secondary m-0 p-25 mr-75 mr-xl-2">
                                                <div class="avatar-content">
                                                    <i class="bx bxs-map text-info font-medium-2"></i>
                                                </div>
                                            </div>
                                            <div class="total-amount">
                                                <h5 class="mb-0">Tour Packages</h5>
                                                <small class="text-muted  ">Bookings<span><b> 2</b></span></small>
                                            </div>
                                        </div>
                                        <div id="primary-line-chart"></div>
                                    </div>
                                </div>
                            </div> 

                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar bg-rgba-warning m-0 p-25 mr-75 mr-xl-2">
                                                <div class="avatar-content">
                                                    <i class="bx bxs-car text-warning font-medium-2"></i>
                                                </div>
                                            </div>
                                            <div class="total-amount">
                                                <h5 class="mb-0">Rent a Car</h5>
                                                <small class="text-muted  ">Bookings<span><b> 2</b></span></small>
                                            </div>
                                        </div>
                                        <div id="primary-line-chart"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar bg-rgba-primary m-0 p-25 mr-75 mr-xl-2">
                                                <div class="avatar-content">
                                                    <i class="bx bxs-calendar text-primary font-medium-2"></i>
                                                </div>
                                            </div>
                                            <div class="total-amount">
                                                <h5 class="mb-0">My Bookings</h5>
                                                <small class="text-muted  ">Bookings<span><b> 2</b></span></small>
                                            </div>
                                        </div>
                                        <div id="primary-line-chart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row"> 
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-content">
                                        <a href="create-accommodation.php" >
                                            <img class="card-img-top img-fluid img-responsive" src="app-assets/images/hotel.jpg" alt="mytravelpartner.lk"  >
                                        </a>
                                        <div class="card-body">
                                            <h4 class="card-title text-center">ACCOMMODATION</h4>

                                            <a href="create-accommodation.php" class="btn btn-outline-primary w-100">Add Accommodation</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-content">
                                        <a href="create-tour.php" >
                                            <img class="card-img-top img-fluid" src="app-assets/images/tour.jpg" alt="mytravelpartner.lk"  >
                                        </a>
                                        <div class="card-body">
                                            <h4 class="card-title text-center">TOUR PACKAGES</h4>

                                            <a href="create-tour.php" class="btn btn-outline-primary w-100">Add Tour Packages</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-content">
                                        <a href="create-rent-car.php" >
                                            <img class="card-img-top img-fluid" src="app-assets/images/rent-car-c.jpg" alt="mytravelpartner.lk" >
                                        </a>
                                        <div class="card-body">
                                            <h4 class="card-title text-center">RENT A CAR</h4>

                                            <a href="create-rent-car.php" class="btn btn-outline-primary w-100">Add Rent a Car</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-content">
                                        <a href="view-booking-calendar.php" >
                                            <img class="card-img-top img-fluid" src="app-assets/images/booking.jpg" alt="mytravelpartner.lk"  >
                                        </a>
                                     
                                            <div class="card-body">
                                                <h4 class="card-title text-center">MY BOOKINGS</h4>

                                                <a href="view-booking-calendar.php" class="btn btn-outline-primary w-100">Manage My Bookings</a>
                                            </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </section>

                    <section class="faq-bottom"> 
                        <div class="row      ">
                            <div class="col-md-4">
                                <div class="col-sm-12 col-md-12 text-center border color-gray-faq rounded  card  "  >
                                    <i class="bx bx-phone-call primary font-large-1 text-muted p-50"></i>
                                    <h5>+ (810) 2548 2568</h5>
                                    <p class="text-muted font-medium-1">Best way to get answer faster!</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="col-sm-12 col-md-12 text-center border color-gray-faq rounded  card  "  >
                                    <i class="bx bx-mail-send primary font-large-1 p-50"></i>
                                    <h5><a href="mailto:hello@help.com">hello@help.com</a></h5>
                                    <p class="text-muted font-medium-1">Best way to get answer faster!</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="col-sm-12 col-md-12 text-center border color-gray-faq rounded  card  "  >
                                    <i class="bx bx-mail-send primary font-large-1 p-50"></i>
                                    <h5><a href="mailto:hello@help.com">hello@help.com</a></h5>
                                    <p class="text-muted font-medium-1">Best way to get answer faster!</p>
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
        <script>
                            function myFunction() {

                                toastr.info("I do not think that word means what you think it means.", "Welcome MyTravelPartner.lk.!", {
                                    showMethod: "slideDown",
                                    hideMethod: "slideUp",
                                    timeOut: 8e3
                                });

                            }

        </script>



        <!-- BEGIN: Page JS-->
        <script src="app-assets/js/scripts/pages/dashboard-ecommerce.min.js"></script>
        <!-- END: Page JS-->

    </body>
    <!-- END: Body-->

</html>