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
        <meta name="viewport" content="">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="PIXINVENT">
        <title> Hotel Booking || MyTravelPartner.lk </title>
        <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
        <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
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
                                <h5 class="content-header-title float-left pr-1 mb-0">DataTables</h5>
                                <div class="breadcrumb-wrapper col-12">
                                    <ol class="breadcrumb p-0 mb-0">
                                        <li class="breadcrumb-item"><a href="index.html"><i class="bx bx-home-alt"></i></a>
                                        </li>
                                        <li class="breadcrumb-item active">Manage your Bookings.
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
                                                            <th>Status</th>
                                                            <th>Price</th>
                                                            <th>Option</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $HOTEL_BOOKING = new HotelBooking(NULL);
                                                        foreach ($HOTEL_BOOKING->getBookingsById($_SESSION['id']) as $bookings) {
                                                            $ACCOMMODATION = new Accommodation($bookings['acc_id']);
                                                            $ROOM = new Room($bookings['room_id']);
                                                            ?>
                                                            <tr>
                                                                <td>
                                                                    <?php echo $ACCOMMODATION->title ?>
                                                                </td>
                                                                <td> <?php echo ucwords($ROOM->title) ?></td>
                                                                <td> <?php echo $bookings['check_in'] ?></td>
                                                                <td> <?php echo $bookings['check_out'] ?></td>
                                                                <td> <?php echo $bookings['rooms'] ?></td>
                                                                <?php if ($bookings['status'] == 0) { ?>
                                                                    <td class="text-warning">  Pending..!</td> 
                                                                <?php } ?>
                                                                <?php if ($bookings['status'] == 1) { ?>
                                                                    <td class="text-success">  Confirm..!</td> 
                                                                <?php } ?>
                                                                <?php if ($bookings['status'] == 2) { ?>
                                                                    <td class="text-danger">  Cancel..!</td> 
                                                                <?php } ?>

                                                                <td> <?php echo number_format($bookings['price'], 2) ?></td> 
                                                                <td> <div class="dropdown">
                                                                        <span class="bx bx-dots-vertical-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu"></span>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> edit</a>
                                                                            <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> delete</a>
                                                                        </div>
                                                                    </div></td> 
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
                                                            <th>Status</th>
                                                            <th>Price</th>
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


        <!-- BEGIN: Footer-->
        <?php include './footer.php'; ?>
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
        <script src="app-assets/js/core/app-menu.min.js"></script>
        <script src="app-assets/js/core/app.min.js"></script>
        <script src="app-assets/js/scripts/components.min.js"></script>
        <script src="app-assets/js/scripts/footer.min.js"></script>
        <script src="app-assets/js/scripts/customizer.min.js"></script>
        <!-- END: Theme JS-->

        <!-- BEGIN: Page JS-->
        <script src="app-assets/js/scripts/datatables/datatable.min.js"></script>
        <!-- END: Page JS-->

    </body>
    <!-- END: Body-->
</html>