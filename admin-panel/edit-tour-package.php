<!DOCTYPE html>
<?php
include '../class/include.php';
include './auth.php';

$id = '';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$TOUR_PACKAGE = new TourPackage($id);
?>
<html class="loading" lang="en" data-textdirection="ltr">
    <!-- BEGIN: Head-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="author" content="PIXINVENT">
        <title>Edit Tour Package - MyTravelPartner.lk</title>
        <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
        <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/logo-favicon.png"> 
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

        <!-- END: Theme CSS-->

        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/select/select2.min.css">
        <!-- END: Vendor CSS-->

        <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/colors.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/components.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.min.css">
        <link href="assets/css/jm.spinner.css" rel="stylesheet" type="text/css"/>
        <!-- END: Theme CSS-->

        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/wizard.min.css">
        <link href="plugin/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
        <!-- END: Theme CSS-->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <!-- BEGIN: Page CSS-->   
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

                                        <li class="breadcrumb-item active">Edit Tour Package <span class="text-danger"> " <?php echo $TOUR_PACKAGE->title?> " </span>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-body">  
                    <section id="info-tabs-">

                        <div class="card icon-tab"> 
                            <div class="card-content mt-2">
                                <div class="card-body">
                                    <form action="#" class="wizard-horizontal form repeater-default" id="form-data">
                                        <fieldset>
                                            <div class="br">
                                                <div class="row"> 
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label>Select Tour Type</label>
                                                            <select class="select2 form-control" name="tour_type" id="tour_type">
                                                                <option value="" selected="">Select Your tour type</option>
                                                                <?php
                                                                $TOUR_TYPE = NEW TourType(NULL);
                                                                foreach ($TOUR_TYPE->all() as $tour_type) {
                                                                    if ($tour_type['id'] == $TOUR_PACKAGE->tour_type) {
                                                                        ?>
                                                                        <option value="<?php echo $tour_type['id'] ?>" selected=""><?php echo $tour_type['title'] ?></option>
                                                                    <?php } else { ?>
                                                                        <option value="<?php echo $tour_type['id'] ?>"><?php echo $tour_type['title'] ?></option>
                                                                        <?php
                                                                    }
                                                                }
                                                                ?>

                                                            </select>
                                                        </div>
                                                    </div>  
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label>Title</label>
                                                            <input type="text" class="form-control" placeholder="Enter Title" id="title" name="title" value="<?php echo $TOUR_PACKAGE->title ?>">
                                                        </div>
                                                    </div>  
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label>Dates</label>
                                                            <input type="text" class="form-control" placeholder="Enter Dates" id="dates" name="dates" value="<?php echo $TOUR_PACKAGE->dates ?>">
                                                        </div>
                                                    </div>  


                                                    <div class="col-sm-12 form-group"    > 
                                                        <label>Edit your Image</label>
                                                        <div class="custom-file">
                                                            <input type="hidden" class="custom-file-input" id="image_name" value="<?php echo $SLIDER->image_name ?>">
                                                            <input type="file" class="custom-file-input"  name="image_name"  >
                                                            <label class="custom-file-label" for="main_img_tour">Click here to Edit image</label>
                                                        </div> 
                                                    </div>  
                                                    <div class="col-sm-8 " id="show-btn">    
                                                        <img src="../upload/tour-package/thumb/<?php echo $TOUR_PACKAGE->image_name ?>" id="main-img" style="box-shadow: 0 0 0 2px #0071c2;width: 100%"/>
                                                    </div> 
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label>Short Description</label>
                                                            <input type="text" class="form-control" placeholder="Enter short description" id="short_description" name="short_description"  value="<?php echo $TOUR_PACKAGE->short_description ?>" >
                                                        </div>
                                                    </div>  
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label>Map Code</label>
                                                            <input type="text" class="form-control" placeholder="Enter map code" id="map_code" name="map_code" value="<?php echo $TOUR_PACKAGE->map ?>"  >
                                                        </div>
                                                    </div>  
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label>Description</label>
                                                            <textarea id='description' name="description" ><?php echo $TOUR_PACKAGE->description ?></textarea>
                                                        </div>
                                                    </div>  
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label>Include and Exclude</label>
                                                            <textarea id='include_and_exclude' name="include_and_exclude" > <?php echo $TOUR_PACKAGE->include_exclude ?>  </textarea>
                                                        </div>
                                                    </div>  

                                                    <div class="col-sm-12"> 
                                                        <button class="btn btn-warning mb-1" type="button" id="update" style="float: right;color: white;margin-top: 20px">
                                                            <span class=" spinner-border-sm" role="status" aria-hidden="true"></span>
                                                            Update
                                                        </button>
                                                        <input type="hidden" id="id" value="<?php echo $id ?>" name="id"> 
                                                        <input type="hidden"   name="update"> 
                                                        <input type="hidden"  value="<?php echo $TOUR_PACKAGE->image_name; ?>" name="oldImageName"/>
                                                    </div>
                                                </div>
                                            </div>  

                                        </fieldset> 
                                    </form> 
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

        <script src="app-assets/vendors/js/extensions/jquery.steps.min.js"></script>
        <script src="app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script> 
        <script src="app-assets/js/scripts/configs/vertical-menu-dark.min.js"></script>
        <script src="app-assets/js/core/app-menu.min.js"></script>
        <script src="app-assets/js/core/app.min.js"></script>
        <script src="app-assets/js/scripts/components.min.js"></script>
        <script src="app-assets/js/scripts/footer.min.js"></script>
        <script src="app-assets/js/scripts/customizer.min.js"></script> 
        <script src="app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js"></script>
        <script src="app-assets/js/scripts/forms/number-input.min.js"></script>
        <script src="app-assets/vendors/js/forms/repeater/jquery.repeater.min.js"></script>
        <script src="app-assets/vendors/js/forms/select/select2.full.min.js"></script>
        <script src="app-assets/js/scripts/forms/select/form-select2.min.js"></script>
        <!-- END: Page JS-->
        <script src="plugin/sweetalert/sweetalert.min.js" type="text/javascript"></script>


        <script src="js/jquery.preloader.min.js" type="text/javascript"></script>
        <script src="js/ajax/tour-package.js" type="text/javascript"></script>

        <script src="js/tinymce/js/tinymce/tinymce.min.js" type="text/javascript"></script> 
        <script>
            tinymce.init({
                selector: "#include_and_exclude",
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