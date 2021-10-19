<!DOCTYPE html>
<?php
include '../class/include.php';
include './auth.php';
$id = '';
$id = $_GET['id'];
$HOTEL_BOOKINGS = new HotelBooking($id);
$ROOM = new Room($HOTEL_BOOKINGS->room_id);
$VISITOR = new Visitor($HOTEL_BOOKINGS->visitor_id);
?>
<html class="loading" lang="en" data-textdirection="ltr">
    <!-- BEGIN: Head-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="author" content="PIXINVENT">
        <title>Edit Hotel Booking - MyTravelPartner.lk</title>
        <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
        <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/logo-favicon.png"> 
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
        <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/wizard.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.min.css">
        <link href="assets/css/preloader.css" rel="stylesheet" type="text/css"/>
        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/pickers/pickadate/pickadate.css">
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/pickers/daterange/daterangepicker.css">

        <!-- END: Vendor CSS-->

        <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/colors.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/components.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.min.css">
        <link href="plugin/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
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
                                <h5 class="content-header-title float-left pr-1 mb-0">Hotel Booking Details</h5>
                                <div class="breadcrumb-wrapper col-12">
                                    <ol class="breadcrumb p-0 mb-0">
                                        <li class="breadcrumb-item"><a href="index.php"><i class="bx bx-home-alt"></i></a>
                                        </li> 
                                        <li class="breadcrumb-item active">Manage Hotel Booking Details
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-body"><!-- Form wizard with icon tabs section start -->

                    <!-- Form wizard with icon tabs section start -->
                    <section id="info-tabs-">
                        <div class="row">
                            <form action="#" class="wizard-horizontal" id="form-data">
                                <div class="col-12">
                                    <div class="card icon-tab">

                                        <div class="card-content mt-2">
                                            <h3 class="text-center mt-1">

                                                <span>Hotel Booking Details</span>
                                            </h3>
                                            <div class="card-body">


                                                <fieldset>
                                                    <div class="br">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <h5>View Property Booking Details - <small class="text-success">Start by telling us your property type, property's name and Star Rating. </small></h5>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label>Guest Name</label>
                                                                    <input type="text" class="form-control" name="title" id="title"  value="<?php echo $VISITOR->full_name ?>" disabled="">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label> Guest Email</label>
                                                                    <input type="text" class="form-control" name="title" id="title"   value="<?php echo $VISITOR->email ?>" disabled="">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label> Guest Phone Number</label>
                                                                    <input type="text" class="form-control" name="title" id="title"   value="<?php echo $VISITOR->phone_number ?>" disabled="">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label> City</label>
                                                                    <input type="text" class="form-control" name="title" id="title"   value="<?php echo $VISITOR->city ?>" disabled="">
                                                                </div>
                                                            </div>


                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Room Name</label>
                                                                    <input type="text" class="form-control" name="title" id="title"  value="<?php echo ucwords($ROOM->title) ?>" disabled="">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label>Check in date</label>
                                                                    <input type="text" class="form-control" name="title" id="title"  value="<?php echo $HOTEL_BOOKINGS->check_in ?>" disabled="">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label> Check out date</label>
                                                                    <input type="text" class="form-control" name="title" id="title"   value="<?php echo $HOTEL_BOOKINGS->check_out ?>" disabled="">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <label> Num of Rooms</label>
                                                                    <input type="text" class="form-control" name="title" id="title"   value="<?php echo $HOTEL_BOOKINGS->rooms ?>" disabled="">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <label> Num of Adults</label>
                                                                    <input type="text" class="form-control" name="title" id="title"   value="<?php echo $HOTEL_BOOKINGS->adults ?>" disabled="">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <label> Num of Child</label>
                                                                    <input type="text" class="form-control" name="title" id="title"  value="<?php echo $HOTEL_BOOKINGS->child ?>" disabled="">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <label> Room Price</label>
                                                                    <input type="text" class="form-control" name="title" id="title"  value="<?php echo number_format($HOTEL_BOOKINGS->price, 2) ?>" disabled="">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label> Room Booking Special Note</label>
                                                                    <textarea class="form-control" rows="8"><?php echo $HOTEL_BOOKINGS->message ?></textarea>
                                                                </div>
                                                            </div>

                                                            <div class = "col-sm-6">
                                                                <label>Change status in your booking</label>
                                                                <ul class = "list-unstyled mb-0">
                                                                    <li class = "d-inline-block m-r-12 mb-1">
                                                                        <fieldset>
                                                                            <div class = "custom-control custom-radio">
                                                                                <input type = "radio" class = "custom-control-input agree"   name = "status" id = "customRadio0" value = "0" <?php
                                                                                if ($HOTEL_BOOKINGS->status == 0) {
                                                                                    echo 'checked';
                                                                                }
                                                                                ?>>
                                                                                <label class = "custom-control-label text-warning agree" for = "customRadio0">Pending..!</label>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                    <li class = "d-inline-block m-r-12 mb-1">
                                                                        <fieldset>
                                                                            <div class = "custom-control custom-radio">
                                                                                <input type = "radio" class = "custom-control-input agree" name = "status"  id = "customRadio1" value = "1"<?php
                                                                                if ($HOTEL_BOOKINGS->status == 1) {
                                                                                    echo 'checked';
                                                                                }
                                                                                ?>>
                                                                                <label class = "custom-control-label text-success agree" for = "customRadio1"> Confirm..!</label>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                    <li class = "d-inline-block m-r-12 mb-1">
                                                                        <fieldset>
                                                                            <div class = "custom-control custom-radio">
                                                                                <input type = "radio" class = "custom-control-input agree" name = "status" id = "customRadio2" value = "2"<?php
                                                                                if ($HOTEL_BOOKINGS->status == 2) {
                                                                                    echo 'checked';
                                                                                }
                                                                                ?>>
                                                                                <label class = "custom-control-label text-danger" for = "customRadio2"> Cancel..!</label>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mb-4">
                                                            <button class="btn btn-warning mb-1  " type="button"  style="float: right;  " id="update">
                                                                <span class=" spinner-border-sm" role="status" aria-hidden="true"></span>
                                                                Send Feed Back
                                                            </button>
<!--                                                            <a href="send-feedback-booking-email.php?id=<?php echo $id ?>" target="_blank"> 
                                                                <button class="btn btn-success mb-1  " type="button"  style="float: right;margin-right: 10px;display: none " >
                                                                    <span class=" spinner-border-sm" role="status" aria-hidden="true"></span>
                                                                    Send Response Email
                                                                </button> 
                                                            </a>-->
                                                        </div> 

                                                    </div>
                                                    <hr>
                                                </fieldset>

                                            </div>
                                        </div>
                                    </div>
                                </div> 

                                <input type="hidden" value="<?php echo $id ?>" name="id">
                                <input type = "hidden" name = "update" > 
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <!--END: Content-->



        <div class = "sidenav-overlay"></div>
        <div class = "drag-target"></div>

        <!--BEGIN: Footer-->
        <?php include './footer.php'; ?>
        <!--END: Footer-->

        <script src = "../js/jquery-2.2.4.min.js" type = "text/javascript"></script>
        <script src="app-assets/vendors/js/vendors.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
        <!-- BEGIN Vendor JS--> 

        <!-- BEGIN: Theme JS-->
        <script src="app-assets/js/scripts/configs/vertical-menu-dark.min.js"></script>
        <script src="app-assets/js/core/app-menu.min.js"></script>
        <script src="app-assets/js/core/app.min.js"></script>
        <script src="app-assets/js/scripts/components.min.js"></script>
        <script src="app-assets/js/scripts/footer.min.js"></script>
        <script src="app-assets/js/scripts/customizer.min.js"></script>
        <!-- END: Theme JS--> 

        <!-- BEGIN: Page JS-->
        <script src="app-assets/js/scripts/pickers/dateTime/pick-a-datetime.min.js"></script>
        <script src="app-assets/vendors/js/extensions/jquery.steps.min.js"></script>
        <script src="app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
        <!-- BEGIN: Page JS-->

        <script src="app-assets/vendors/js/pickers/pickadate/picker.js"></script>
        <script src="app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
        <script src="app-assets/vendors/js/pickers/pickadate/picker.time.js"></script>
        <script src="app-assets/vendors/js/pickers/pickadate/legacy.js"></script>
        <script src="app-assets/vendors/js/pickers/daterange/daterangepicker.js"></script>
        <script src="app-assets/js/scripts/pickers/dateTime/pick-a-datetime.min.js"></script>


        <script src="js/ajax/bookings.js" type="text/javascript"></script>

        <script src="js/jquery.preloader.min.js" type="text/javascript"></script>
        <script src="plugin/sweetalert/sweetalert.min.js" type="text/javascript"></script>
        <script src="js/tinymce/js/tinymce/tinymce.min.js" type="text/javascript"></script>



        <script>
            tinymce.init({
                selector: "#description",
                // ===========================================
                // INCLUDE THE PLUGIN
                // ===========================================

                plugins: [
                    "advlist autolink lists link image charmap print preview anchor",
                    "searchreplace visualblocks code fullscreen",
                    "insertdatetime media table contextmenu paste"
                ],
                // ===========================================
                // PUT PLUGIN'S BUTTON on the toolbar
                // ===========================================

                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
                // ===========================================
                // SET RELATIVE_URLS to FALSE (This is required for images to display properly)
                // ===========================================

                relative_urls: false



            });
            $("#guest_payment1") // select the radio by its id
                    .change(function () { // bind a function to the change event
                        if ($(this).is(":checked")) {
                            $(".pay").prop("checked", false);
                        }
                    }
                    );
            $("#guest_payment2") // select the radio by its id
                    .change(function () { // bind a function to the change event
                        if ($(this).is(":checked")) {
                            $(".pay").prop("checked", false);
                        }
                    });
        </script>
    </body>

</html>