<!DOCTYPE html>
<?php
include '../class/include.php';
include './auth.php';
$id = '';
$id = $_GET['id'];

$ROOM = new Room(NULL);
$ROOM_PHOTO = new RoomPhoto(NULL);
 ?>
<html class="loading" lang="en" data-textdirection="ltr">
    <!-- BEGIN: Head-->

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Manage Accommodation - My.TravelPartner.lk</title>
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

        <!-- BEGIN: Content-->
        <div class="app-content content">
            <div class="content-overlay"></div>
            <div class="content-wrapper"> 
                <div class="content-body"> 
                    <section id="dashboard-ecommerce">  
                        <div class="row">
                            <?php
                            if (count($ROOM->getRoomsByAccommodation($id)) > 0) {
                                foreach ($ROOM->getRoomsByAccommodation($id) as $room) {
                                    ?>

                                    <div class="col-md-3" id="div<?php echo $room['id'] ?>">
                                        <div class="card">
                                            <div class="card-content">
                                                <?php
                                                foreach ($ROOM_PHOTO->getRoomPhotosById($room['id']) as $key => $room_photo) {
                                                    if ($key == 0) {
                                                        ?>
                                                        <img class="card-img-top img-fluid" src="../upload/accommodation/gallery/room/thumb/<?php echo $room_photo['image_name'] ?>" alt="<?php echo $room['title'] ?>"  >
                                                        <?php
                                                    }
                                                }
                                                ?>
                                                <div class="card-body" style="padding: 10px;">
                                                    <h6 class=" text-left"><?php echo $room['title'] ?></h6>
                                                    <a href="view-room.php?id=<?php echo $room['id'] ?>" data-toggle="tooltip" data-placement="bottom" title="View Room" ><i class=" bx bx-show-alt alt warring-btn"></i></a>  
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <?php
                                }
                            } else {
                                ?>
                                <p class="text-danger text-bold-600 text-center">No Rooms Available..!</p>
                            <?php } ?>

                        </div>


                    </section>    
                </div>
            </div>  
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
<script src="../admin-panel/plugin/sweetalert/sweetalert.min.js" type="text/javascript"></script>
<!-- BEGIN: Page JS-->
<script src="app-assets/js/scripts/pages/dashboard-ecommerce.min.js"></script>
<script src="delete/js/rooms.js" type="text/javascript"></script>
<script src="delete/js/accommodation.js" type="text/javascript"></script>

<!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>