<!DOCTYPE html>
<?php
include '../class/include.php';
include './auth.php';

$id = '';
$id = $_GET['id'];
$MENU = new Menu($id);
?>
<html class="loading" lang="en" data-textdirection="ltr">
    <!-- BEGIN: Head-->

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="author" content="MyTravelPartner.lk">
        <title>Edit Menu || MyTravelPartner.lk </title>
        <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.html">
        <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/logo-favicon.png">
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

        <!-- BEGIN: Vendor CSS-->
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
        <link rel="stylesheet" type="text/css" href="../admin-panel/plugin/sweetalert/sweetalert.css"> 
        <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.min.css">
        <link href="assets/css/preloader.css" rel="stylesheet" type="text/css"/>
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/select/select2.min.css">
    </head>
    <!-- END: Head-->

    <!-- BEGIN: Body-->
    <body class="someBlock vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">
        <div class="box"></div>
        <!-- BEGIN: Header-->
        <div class="header-navbar-shadow"></div>
        <?php include './header.php'; ?>
        <!-- END: Header-->

        <!-- BEGIN: Content-->
        <div class="app-content content">
            <div class="content-overlay"></div>
            <div class="content-wrapper "  >
                <div class="content-header row">
                    <div class="content-header-left col-12 mb-2 mt-1">
                        <div class="row breadcrumbs-top">
                            <div class="col-12">
                                <h5 class="content-header-title float-left pr-1 mb-0">Dashboard</h5>
                                <div class="breadcrumb-wrapper col-12">
                                    <ol class="breadcrumb p-0 mb-0">
                                        <li class="breadcrumb-item"><a href="index.php"><i class="bx bx-home-alt"></i></a>
                                        </li> 
                                        <li class="breadcrumb-item active">Edit Restaurant Menu
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-body"> 


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

                    <div class="row">
                        <div class="col-12">  
                            <form action="#" class="wizard-horizontal" id="form-data">
                                <div class="card icon-tab">
                                    <div class="card-content mt-2">
                                        <div class="card-body"> 
                                            <fieldset>
                                                <div class="br">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h5>Edit Your Restaurant Menu Details - <small class="text-success">Edit your menu name. </small></h5>
                                                        </div>

                                                        <div class="col-sm-8">
                                                            <div class="form-group">
                                                                <label>Menu Title</label>
                                                                <input type="text" class="form-control" placeholder="Menu Title" name="title" id="title" value="<?php echo $MENU->title ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label>Menu Price (Rs:)</label>
                                                                <input type="number" class="form-control" placeholder="Menu Price" name="price" id="price" value="<?php echo $MENU->price ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label>Menu Offer (%) - (Optional)</label>
                                                                <input type="number" class="form-control" placeholder="offer" name="offer" id="offer" value="<?php echo $MENU->offer ?>">
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <hr>                                                        

                                                <div class="br mb-2">
                                                    <h5>Menu Description</h5>  
                                                    <textarea id="description" name="description" > <?php echo $MENU->description ?></textarea>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 mb-1">
                                                        <fieldset>
                                                            <div class="checkbox checkbox-primary">
                                                                <input type="checkbox" id="status"   name="status" value="1" <?php
                                                                if ($MENU->status == 1) {
                                                                    echo 'checked';
                                                                }
                                                                ?> >
                                                                <label for="status">Available Now</label>
                                                            </div>
                                                        </fieldset>
                                                    </div>

                                                    <div class="col-sm-6  ">
                                                        <input type="hidden" name="update">
                                                        <input type="hidden" name="id" value="<?php echo $id ?>">
                                                        <button class="btn btn-primary  " id="update" type="button" style="float: right">Update</button> 
                                                    </div>
                                                </div>
                                            </fieldset> 
                                        </div>
                                    </div>
                                </div> 
                            </form>
                        </div> 
                    </div>                      
                </div>
            </div>  
        </div>

        <?php include './footer.php'; ?>           


        <script src="../js/jquery-2.2.4.min.js" type="text/javascript"></script> 
        <!-- BEGIN: Vendor JS-->
        <script src="app-assets/vendors/js/vendors.min.js"></script> 
        <!-- BEGIN Vendor JS-->

        <script src="js/ajax/menu.js" type="text/javascript"></script>
        <!-- BEGIN Vendor JS-->

        <script src="app-assets/vendors/js/extensions/jquery.steps.min.js"></script>
        <script src="app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script> 
        <script src="app-assets/js/scripts/configs/vertical-menu-dark.min.js"></script>
        <script src="app-assets/js/core/app-menu.min.js"></script>
        <script src="app-assets/js/core/app.min.js"></script>
        <script src="app-assets/js/scripts/components.min.js"></script>
        <script src="app-assets/js/scripts/footer.min.js"></script>
        <script src="app-assets/js/scripts/customizer.min.js"></script>
        <script src="js/jquery.preloader.min.js" type="text/javascript"></script>
        <script src="plugin/sweetalert/sweetalert.min.js" type="text/javascript"></script>
        <!-- BEGIN: Page JS-->
        <script src="app-assets/js/scripts/navs/navs.min.js"></script><!-- END: Page JS-->
        <script src="../admin-panel/js/tinymce/js/tinymce/tinymce.min.js" type="text/javascript"></script>
        <script src="js/jquery.inputmask.bundle.min.js" type="text/javascript"></script>
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
        </script>
    </body>
    <!-- END: Body-->

</html>