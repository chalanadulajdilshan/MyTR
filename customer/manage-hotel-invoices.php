<!DOCTYPE html>
<?php
include '../class/include.php';
include './auth.php';
$id = $_SESSION['id'];
?>
<html class="loading" lang="en" data-textdirection="ltr">
    <!-- BEGIN: Head-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Frest admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Frest admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="MyTravelPartner.lk">
        <title>Manage Invoices - MyTravelPartner.lk</title>
        <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/logo-favicon.png"> 
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/datatables.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css">
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/responsive.bootstrap.min.css">
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
        <link rel="stylesheet" type="text/css" href="app-assets/css/pages/app-invoice.min.css">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <!-- END: Custom CSS-->

    </head>
    <!-- END: Head-->

    <!-- BEGIN: Body-->
    <body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">

        <!-- BEGIN: Header-->
        <div class="header-navbar-shadow"></div>

        <!-- END: Header-->
        <?php include './header.php'; ?>

        <!-- BEGIN: Content-->
        <div class="app-content content">
            <div class="content-overlay"></div>
            <div class="content-wrapper">
                <div class="content-header row">
                </div>
                <div class="content-body"><!-- invoice list -->
                    <section class="invoice-list-wrapper">
                        <!-- create invoice button-->

                        <!-- Options and filter dropdown button-->
                        <div class="action-dropdown-btn d-none">
                            <div class="dropdown invoice-filter-action">

                            </div>
                            <div class="dropdown invoice-options">

                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table invoice-data-table dt-responsive nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th>
                                            <span class="align-middle">Booking Id#</span>
                                        </th>
                                        <th>Date</th>
                                        <th>Room</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $HOTEL_BOOKING = new HotelBooking(NULL);
                                    foreach ($HOTEL_BOOKING->getBookingdByCustomer($id) as $hotel_booking) {
                                        $VISITOR = new Visitor($hotel_booking['visitor_id']);
                                        $ROOM = new Room($hotel_booking['room_id']);
                                        ?>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <a href="#"><?php echo $hotel_booking['booking_id'] ?></a>
                                            </td>


                                            <td><small class="text-muted"><?php
                                                    $check_in = date_create($hotel_booking['check_in']);
                                                    $check_out = date_create($hotel_booking['check_out']);
                                                    echo date_format($check_in, "y/m/d") . ' <span class="text-danger"><b> - </b></span>' . date_format($check_out, "m/d");
                                                    ?></small></td>

                                            <td><span class="invoice-customer"><?php echo $ROOM->title ?></span></td>
                                            <td><span class="invoice-amount">$<?php echo $hotel_booking['price'] ?></span></td>
                                            <?php
                                            if ($hotel_booking['status'] == 0) {
                                                ?>
                                                <td><span class="badge badge-light-warning badge-pill">PENDING..!</span></td>
                                                <?php
                                            } else if ($hotel_booking['status'] == 1) {
                                                ?>
                                                <td><span class="badge badge-light-success badge-pill">CONFIRMED..!</span></td>
                                                <?php
                                            } else if ($hotel_booking['status'] == 2) {
                                                ?>
                                                <td><span class="badge badge-light-danger badge-pill">CANCELED..!</span></td>
                                            <?php } ?>



                                            <td>
                                                <div class="invoice-action">
                                                    <a href="view-booking-room-details.php?id=<?php echo $hotel_booking['room_id'] ?>" target="_blank"class="invoice-action-view mr-1">
                                                        <i class="bx bx-show-alt"></i>
                                                    </a>
                                                    <a href="edit-hotel-booking.php?id=<?php echo $hotel_booking['id'] ?>" class="invoice-action-edit cursor-pointer">
                                                        <i class="bx bx-edit"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <!-- END: Content-->


        <!-- BEGIN: Customizer-->

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
        <script src="app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js"></script>
        <script src="app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
        <script src="app-assets/vendors/js/tables/datatable/responsive.bootstrap.min.js"></script>
        <!-- END: Page Vendor JS-->

        <!-- BEGIN: Theme JS-->
        <script src="app-assets/js/scripts/configs/vertical-menu-dark.min.js"></script>
        <script src="app-assets/js/core/app-menu.min.js"></script>
        <script src="app-assets/js/core/app.min.js"></script>
        <script src="app-assets/js/scripts/components.min.js"></script>
        <script src="app-assets/js/scripts/footer.min.js"></script>
        <script src="app-assets/js/scripts/customizer.min.js"></script>
        <!-- END: Theme JS-->

        <!-- BEGIN: Page JS-->
        <script src="app-assets/js/scripts/pages/app-invoice.min.js"></script>
        <!-- END: Page JS-->

    </body>
    <!-- END: Body-->
</html>