<!DOCTYPE html>
<?php
include '../class/include.php ';
$id = '';
$id = $_GET['id'];
$HOTEL_BOOKING = new HotelBooking($id);
$ROOM = new Room($HOTEL_BOOKING->room_id);
$ACCOMMODATION = new Accommodation($HOTEL_BOOKING->acc_id);
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
        <title>Form Layouts - Frest - Bootstrap HTML admin template</title>
        <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
        <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
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

        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <!-- END: Custom CSS-->

    </head>
    <!-- END: Head-->

    <!-- BEGIN: Body-->
    <body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">

        <!-- BEGIN: Header-->
        <div class="header-navbar-shadow"></div>
        <?php include './header.php'; ?>

        <!-- BEGIN: Content-->
        <div class="app-content content">
            <div class="content-overlay"></div>
            <div class="content-wrapper">
                <div class="content-header row">
                    <div class="content-header-left col-12 mb-2 mt-1">
                        <div class="row breadcrumbs-top">
                            <div class="col-12">
                                <h5 class="content-header-title float-left pr-1 mb-0">Accommodation Bookings</h5>
                                <div class="breadcrumb-wrapper col-12">
                                    <ol class="breadcrumb p-0 mb-0">
                                        <li class="breadcrumb-item"><a href="index.php"><i class="bx bx-home-alt"></i></a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#"><?php echo $ACCOMMODATION->title ?></a>
                                        </li>
                                        <li class="breadcrumb-item active"><a href="#"><?php echo $ROOM->title?></a>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-body"><!-- Basic Horizontal form layout section start -->
                    <section id="basic-horizontal-layouts">
                        <div class="row match-height">
                            <div class="col-md-12 col-12">
                                <div class="card">

                                    <div class="card-content">
                                        <div class="card-body">
                                            <form class="form form-vertical">
                                                <div class="form-body">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="booking_id">#Booking Id</label>
                                                                <input type="text" id="booking_id" class="form-control"  readonly="" value="<?php echo $HOTEL_BOOKING->booking_id ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="room_type">Room Type</label>
                                                                <input type="text" id="room_type" class="form-control"   readonly="" value="<?php
                                                                $ROOM_TYPE = new RoomType($ROOM->room_type);
                                                                echo $ROOM_TYPE->title
                                                                ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="room_name">Room Name</label>
                                                                <input type="text" id="room_name" class="form-control"   value="<?php echo $ROOM->title ?>" readonly="">
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="number_of_booking">Number Of Booking Rooms</label>
                                                                <input type="text" id="number_of_booking" class="form-control"   value="<?php echo $HOTEL_BOOKING->rooms ?>" readonly="">
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label>Check in Date</label>
                                                                <input type="text" class="form-control"  value="<?php echo $HOTEL_BOOKING->check_in ?>" readonly="">
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label>Check Out Date</label>
                                                                <input type="text"  class="form-control"  value="<?php echo $HOTEL_BOOKING->check_out ?>" readonly="">
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label  >Nu of Adults</label>
                                                                <input type="text"   class="form-control"  value="<?php echo $HOTEL_BOOKING->adults ?>" readonly="">
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label>Nu of Childs</label>
                                                                <input type="text" class="form-control"  value="<?php echo $HOTEL_BOOKING->child ?>" readonly="">
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label>Booking Price</label>
                                                                <input type="text" class="form-control  light-success"  value="<?php echo $HOTEL_BOOKING->price ?>" readonly="">
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label class="text-danger">Booking Status</label> 
                                                                <?php
                                                                if ($HOTEL_BOOKING->status == 0) {
                                                                    ?>
                                                                    <input type="text" class="form-control text-warning back-basic-color" style="background-color: #fff" value="This Booking is Pending..!" readonly="">
                                                                <?php } elseif ($HOTEL_BOOKING->status == 1) { ?>
                                                                    <input type="text" class="form-control text-success back-basic-color" style="background-color: #fff" value="This Booking is Confirm...!" readonly="">
                                                                <?php } elseif ($HOTEL_BOOKING->status == 2) { ?>
                                                                    <input type="text" class="form-control text-danger back-basic-color" style="background-color: #fff" value="This Booking is Cancel...!" readonly="">
                                                                <?php } ?>
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label>Booking Message</label>
                                                                <textarea class="form-control" rows="8"><?php echo $HOTEL_BOOKING->message ?></textarea>

                                                            </div>
                                                        </div>

                                                        <div class="col-8">
                                                            <div class="form-group">
                                                                <label>Customer And Visitor Details</label><br>
                                                                <div class="chip chip-danger mr-1">
                                                                    <a href="edit-customer.php?id=<?php echo $HOTEL_BOOKING->customer_id ?>" target="_blank">
                                                                        <div class="chip-body">
                                                                            <div class="avatar">
                                                                                <i class="bx bx-user"></i>
                                                                            </div>
                                                                            <span class="chip-text">View Customer Details</span>
                                                                        </div>
                                                                    </a>
                                                                </div> 
                                                                <div class="chip chip-success mr-1">
                                                                    <a href="edit-visitor.php?id=<?php echo $HOTEL_BOOKING->visitor_id ?>" target="_blank">
                                                                        <div class="chip-body">
                                                                            <div class="avatar">
                                                                                <i class="bx bx-user"></i>
                                                                            </div>
                                                                            <span class="chip-text">View Visitor Details</span>
                                                                        </div>
                                                                    </a>
                                                                </div> 
                                                                <div class="chip chip-warning mr-1">
                                                                    <a href="view-accommodation.php?id=<?php echo $HOTEL_BOOKING->acc_id ?>" target="_blank">
                                                                        <div class="chip-body">
                                                                            <div class="avatar">
                                                                                <i class="bx bx-home"></i>
                                                                            </div>
                                                                            <span class="chip-text">View Accommodation Details</span>
                                                                        </div>
                                                                    </a>
                                                                </div> 
                                                                <div class="chip chip-primary mr-1">
                                                                    <a href="view-room.php?id=<?php echo $HOTEL_BOOKING->room_id ?>" target="_blank">
                                                                        <div class="chip-body">
                                                                            <div class="avatar">
                                                                                <i class="bx bx-bed"></i>
                                                                            </div>
                                                                            <span class="chip-text">View Room Details</span>
                                                                        </div>
                                                                    </a>
                                                                </div> 
                                                            </div>
                                                        </div> 

                                                    </div>
                                                </div>
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




        <!-- Buynow Button-->
        <?php include './footer.php'; ?>
        <!-- END: Footer-->


        <!-- BEGIN: Vendor JS-->
        <script src="app-assets/vendors/js/vendors.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
        <!-- BEGIN Vendor JS-->

        <!-- BEGIN: Page Vendor JS-->
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
        <!-- END: Page JS-->

    </body>
    <!-- END: Body-->
</html>