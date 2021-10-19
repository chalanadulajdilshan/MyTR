<!DOCTYPE html>
<?php
include '../class/include.php';
include './auth.php';

$id = '';
$id = $_GET['id'];
$PAGES = new Page($id);
?>
<html class="loading" lang="en" data-textdirection="ltr">
    <!-- BEGIN: Head-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="author" content="PIXINVENT">
        <title>Edit Pages - MyTravelPartner</title>
        <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
        <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/logo-favicon.png"> 
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
        <!-- END: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css">
        <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/colors.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/components.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.min.css">
        <link rel="stylesheet" type="text/css" href="plugin/sweetalert/sweetalert.css"> 
        <!-- END: Theme CSS-->

        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.min.css"> 
        <link rel="stylesheet" type="text/css" href="assets/css/style.css"> 
        <link href="assets/css/preloader.css" rel="stylesheet" type="text/css"/>
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
                                <h5 class="content-header-title float-left pr-1 mb-0">Dashboard</h5>
                                <div class="breadcrumb-wrapper col-12">
                                    <ol class="breadcrumb p-0 mb-0">
                                        <li class="breadcrumb-item"><a href="index.php"><i class="bx bx-home-alt"></i></a>
                                        </li>

                                        <li class="breadcrumb-item active">Edit Pages - <span class="text-danger">" <?php echo $PAGES->title ?> "</span>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-body">  
                    <section id="info-tabs-">
                        <div class="row">
                            <div class="col-12">   
                                <div class="card icon-tab"> 
                                    <div class="card-content mt-2">
                                        <div class="card-body">
                                            <form action="#" class="wizard-horizontal form repeater-default" id="form-data">
                                                <fieldset>
                                                    <div class="br">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <h5>Edit Pages  
                                                                </h5>
                                                            </div> 

                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Title</label>
                                                                    <input type="text" class="form-control" placeholder="Enter Title" id="title" name="title" value="<?php echo $PAGES->title ?>">
                                                                </div>
                                                            </div>  
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Short Description</label>
                                                                    <input type="text" class="form-control" placeholder="Enter Short Description" id="short_description" name="short_description" value="<?php echo $PAGES->short_description ?>">
                                                                </div>
                                                            </div> 
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Description  </label>
                                                                    <textarea id="description" name="description" ><?php echo $PAGES->description ?> </textarea>
                                                                </div>
                                                            </div>
                                                        </div>  
                                                    </div>  
                                                    <hr>

                                                    <button class="btn btn-warning mb-1" type="button" id="update" style="float: right;color: white">
                                                        <span class=" spinner-border-sm" role="status" aria-hidden="true"></span>
                                                        Update
                                                    </button>
                                                    <input type="hidden" id="id" value="<?php echo $id ?>" name="id">
                                                    <input type="hidden"    name="update"/>
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



        <div class="sidenav-overlay"></div>
        <div class="drag-target"></div>

        <!-- BEGIN: Footer-->

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
        <script src="plugin/sweetalert/sweetalert.min.js" type="text/javascript"></script>
        <!-- END: Page Vendor JS--> 
        <script src="js/jquery.preloader.min.js" type="text/javascript"></script>
        <script src="js/ajax/pages.js" type="text/javascript"></script>
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

        </script>

    </body>

</html>