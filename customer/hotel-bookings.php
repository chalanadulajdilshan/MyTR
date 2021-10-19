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
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Frest admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Frest admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="PIXINVENT">
        <title>Hotel Bookings - My travel Partner </title>
        <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/logo-favicon.png">  
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/datatables.min.css">
        <!-- END: Vendor CSS-->

        <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/colors.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/components.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.min.css">
        <!-- END: Theme CSS-->

        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.min.css">
        <link rel="stylesheet" type="text/css" href="../admin-panel/plugin/sweetalert/sweetalert.css">
        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <!-- END: Custom CSS-->
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    </head>
    <!-- END: Head-->

    <!-- BEGIN: Body-->
    <body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">

        <!-- BEGIN: Header-->
        <div class="header-navbar-shadow"></div>
        <?php include './header.php'; ?>
        <!-- END: Header-->


        <!-- BEGIN: Main Menu-->

        <!-- END: Main Menu-->

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
                                        <li class="breadcrumb-item active">Manage Your Bookings
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-body">
                    <section id="basic-datatable">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">

                                    <div class="card-content">
                                        <div class="card-body card-dashboard">

                                            <div class="table-responsive">
                                                <table class="table zero-configuration">
                                                    <thead>
                                                        <tr>
                                                            <th>Property Name</th>
                                                            <th>Room Name</th>
                                                            <th>Check in</th>
                                                            <th>Check out</th>
                                                            <th>Rooms</th>                                                            
                                                            <th>Price</th>
                                                            <th>Status</th> 
                                                            <th>Option</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $HOTEL_BOOKING = new HotelBooking(NULL);
                                                        foreach ($HOTEL_BOOKING->getCustomerBookingsById($_SESSION['id']) as $bookings) {
                                                            $ACCOMMODATION = new Accommodation($bookings['acc_id']);
                                                            $ROOM = new Room($bookings['room_id']);
                                                            ?>
                                                            <tr id="div<?php echo $bookings['id'] ?>">
                                                                <td>
                                                                    <?php echo $ACCOMMODATION->title ?>
                                                                </td>
                                                                <td> <?php echo ucwords($ROOM->title) ?></td>
                                                                <td> <?php echo $bookings['check_in'] ?></td>
                                                                <td> <?php echo $bookings['check_out'] ?></td>
                                                                <td> <?php echo $bookings['rooms'] ?></td>
                                                                <td> <?php    echo number_format($bookings['price'], 2)   ?></td> 
                                                                <?php if ($bookings['status'] == 0) { ?>
                                                                    <td class="text-warning">  Pending</td> 
                                                                <?php } ?>
                                                                <?php if ($bookings['status'] == 1) { ?>
                                                                    <td class="text-success">  Success</td> 
                                                                <?php } ?>
                                                                <?php if ($bookings['status'] == 2) { ?>
                                                                    <td class="text-danger">  Cancel</td> 
                                                                <?php } ?>

                                                                <td> <div class="dropdown">
                                                                        <span class="bx bx-dots-vertical-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu"></span>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <a class="dropdown-item" href="edit-hotel-booking.php?id=<?php echo $bookings['id'] ?>"><i class="bx bx-edit-alt mr-1"></i> edit</a>
                                                                            <a class="dropdown-item delete-booking"  data-id="<?php echo $bookings['id'] ?>"  href="#"><i class="bx bx-trash mr-1"></i> delete</a>
                                                                        </div>
                                                                    </div>
                                                                </td> 
                                                            </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Property Name</th>
                                                            <th>Room Name</th>
                                                            <th>Check in</th>
                                                            <th>Check out</th>
                                                            <th>Rooms</th>                                                             
                                                            <th>Price</th>
                                                            <th>Status</th>
                                                            <th>Option</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
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


        <!-- BEGIN: Customizer-->
        <div class="customizer d-none d-md-block"><a class="customizer-close" href="#"><i class="bx bx-x"></i></a><a class="customizer-toggle" href="#"><i class="bx bx-cog bx bx-spin white"></i></a><div class="customizer-content p-2">
                <h4 class="text-uppercase mb-0">Theme Customizer</h4>
                <small>Customize & Preview in Real Time</small>
                <hr>
                <!-- Theme options starts -->
                <h5 class="mt-1">Theme Layout</h5>
                <div class="theme-layouts">
                    <div class="d-flex justify-content-start">
                        <div class="mx-50">
                            <fieldset>
                                <div class="radio">
                                    <input type="radio" name="layoutOptions" value="false" id="radio-light" class="layout-name" data-layout=""
                                           checked>
                                    <label for="radio-light">Light</label>
                                </div>
                            </fieldset>
                        </div>
                        <div class="mx-50">
                            <fieldset>
                                <div class="radio">
                                    <input type="radio" name="layoutOptions" value="false" id="radio-dark" class="layout-name"
                                           data-layout="dark-layout">
                                    <label for="radio-dark">Dark</label>
                                </div>
                            </fieldset>
                        </div>
                        <div class="mx-50">
                            <fieldset>
                                <div class="radio">
                                    <input type="radio" name="layoutOptions" value="false" id="radio-semi-dark" class="layout-name"
                                           data-layout="semi-dark-layout">
                                    <label for="radio-semi-dark">Semi Dark</label>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
                <!-- Theme options starts -->
                <hr>

                <!-- Menu Colors Starts -->
                <div id="customizer-theme-colors">
                    <h5>Menu Colors</h5>
                    <ul class="list-inline unstyled-list">
                        <li class="color-box bg-primary selected" data-color="theme-primary"></li>
                        <li class="color-box bg-success" data-color="theme-success"></li>
                        <li class="color-box bg-danger" data-color="theme-danger"></li>
                        <li class="color-box bg-info" data-color="theme-info"></li>
                        <li class="color-box bg-warning" data-color="theme-warning"></li>
                        <li class="color-box bg-dark" data-color="theme-dark"></li>
                    </ul>
                    <hr>
                </div>
                <!-- Menu Colors Ends -->
                <!-- Menu Icon Animation Starts -->
                <div id="menu-icon-animation">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="icon-animation-title">
                            <h5 class="pt-25">Icon Animation</h5>
                        </div>
                        <div class="icon-animation-switch">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" checked id="icon-animation-switch">
                                <label class="custom-control-label" for="icon-animation-switch"></label>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
                <!-- Menu Icon Animation Ends -->
                <!-- Collapse sidebar switch starts -->
                <div class="collapse-sidebar d-flex justify-content-between align-items-center">
                    <div class="collapse-option-title">
                        <h5 class="pt-25">Collapse Menu</h5>
                    </div>
                    <div class="collapse-option-switch">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="collapse-sidebar-switch">
                            <label class="custom-control-label" for="collapse-sidebar-switch"></label>
                        </div>
                    </div>
                </div>
                <!-- Collapse sidebar switch Ends -->
                <hr>

                <!-- Navbar colors starts -->
                <div id="customizer-navbar-colors">
                    <h5>Navbar Colors</h5>
                    <ul class="list-inline unstyled-list">
                        <li class="color-box bg-white border selected" data-navbar-default=""></li>
                        <li class="color-box bg-primary" data-navbar-color="bg-primary"></li>
                        <li class="color-box bg-success" data-navbar-color="bg-success"></li>
                        <li class="color-box bg-danger" data-navbar-color="bg-danger"></li>
                        <li class="color-box bg-info" data-navbar-color="bg-info"></li>
                        <li class="color-box bg-warning" data-navbar-color="bg-warning"></li>
                        <li class="color-box bg-dark" data-navbar-color="bg-dark"></li>
                    </ul>
                    <small><strong>Note :</strong> This option with work only on sticky navbar when you scroll page.</small>
                    <hr>
                </div>
                <!-- Navbar colors starts -->
                <!-- Navbar Type Starts -->
                <h5>Navbar Type</h5>
                <div class="navbar-type d-flex justify-content-start">
                    <div class="hidden-ele mx-50">
                        <fieldset>
                            <div class="radio">
                                <input type="radio" name="navbarType" value="false" id="navbar-hidden">
                                <label for="navbar-hidden">Hidden</label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="mx-50">
                        <fieldset>
                            <div class="radio">
                                <input type="radio" name="navbarType" value="false" id="navbar-static">
                                <label for="navbar-static">Static</label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="mx-50">
                        <fieldset>
                            <div class="radio">
                                <input type="radio" name="navbarType" value="false" id="navbar-sticky" checked>
                                <label for="navbar-sticky">Fixed</label>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <hr>
                <!-- Navbar Type Starts -->

                <!-- Footer Type Starts -->
                <h5>Footer Type</h5>
                <div class="footer-type d-flex justify-content-start">
                    <div class="mx-50">
                        <fieldset>
                            <div class="radio">
                                <input type="radio" name="footerType" value="false" id="footer-hidden">
                                <label for="footer-hidden">Hidden</label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="mx-50">
                        <fieldset>
                            <div class="radio">
                                <input type="radio" name="footerType" value="false" id="footer-static" checked>
                                <label for="footer-static">Static</label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="mx-50">
                        <fieldset>
                            <div class="radio">
                                <input type="radio" name="footerType" value="false" id="footer-sticky">
                                <label for="footer-sticky" class="">Sticky</label>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <!-- Footer Type Ends -->
                <hr>

                <!-- Card Shadow Starts-->
                <div class="card-shadow d-flex justify-content-between align-items-center py-25">
                    <div class="hide-scroll-title">
                        <h5 class="pt-25">Card Shadow</h5>
                    </div>
                    <div class="card-shadow-switch">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" checked id="card-shadow-switch">
                            <label class="custom-control-label" for="card-shadow-switch"></label>
                        </div>
                    </div>
                </div>
                <!-- Card Shadow Ends-->
                <hr>

                <!-- Hide Scroll To Top Starts-->
                <div class="hide-scroll-to-top d-flex justify-content-between align-items-center py-25">
                    <div class="hide-scroll-title">
                        <h5 class="pt-25">Hide Scroll To Top</h5>
                    </div>
                    <div class="hide-scroll-top-switch">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="hide-scroll-top-switch">
                            <label class="custom-control-label" for="hide-scroll-top-switch"></label>
                        </div>
                    </div>
                </div>
                <!-- Hide Scroll To Top Ends-->
            </div>
        </div>
        <!-- End: Customizer-->



        <!-- BEGIN: Footer-->
        <footer class="footer footer-static footer-light">
            <p class="clearfix mb-0"><span class="float-left d-inline-block">2020 &copy; PIXINVENT</span><span class="float-right d-sm-inline-block d-none">Crafted with<i class="bx bxs-heart pink mx-50 font-small-3"></i>by<a class="text-uppercase" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent</a></span>
                <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="bx bx-up-arrow-alt"></i></button>
            </p>
        </footer>
        <!-- END: Footer-->


        <!-- BEGIN: Vendor JS-->
        <script src="app-assets/vendors/js/vendors.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
        <!-- BEGIN Vendor JS-->

        <!-- BEGIN: Page Vendor JS-->
        <script src="app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
        <script src="app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js"></script>
        <script src="app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js"></script>
        <script src="app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
        <script src="app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
        <script src="app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
        <script src="app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
        <script src="app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
        <!-- END: Page Vendor JS-->

        <!-- BEGIN: Theme JS-->
        <script src="app-assets/js/scripts/configs/vertical-menu-dark.min.js"></script>
        <script src="app-assets/js/core/app-menu.min.js"></script>
        <script src="app-assets/js/core/app.min.js"></script>
        <script src="app-assets/js/scripts/components.min.js"></script>
        <script src="app-assets/js/scripts/footer.min.js"></script>
        <script src="app-assets/js/scripts/customizer.min.js"></script>
        <script src="../admin-panel/plugin/sweetalert/sweetalert.min.js" type="text/javascript"></script>


        <!-- BEGIN: Page JS-->
        <script src="app-assets/js/scripts/datatables/datatable.min.js"></script>
        <script src="delete/js/hote-booking.js" type="text/javascript"></script>

    </body>
    <!-- END: Body-->
</html>