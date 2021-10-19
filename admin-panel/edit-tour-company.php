<!DOCTYPE html>
<?php
include '../class/include.php';
include './auth.php';
$CUSTOMER = new Customer($_SESSION['id']);
$id = '';
$id = $_GET['id'];
$TOUR_COMPANY = new TourCompany($id);
?>
<html class="loading" lang="en" data-textdirection="ltr">
    <!-- BEGIN: Head-->

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="author" content="PIXINVENT">
        <title>Edit Tour Company || MyTravelPartner.lk</title>
        <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.html">
        <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/logo-favicon.png"> 
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

        <!-- BEGIN: Vendor CSS-->
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
        <link href="assets/css/preloader.css" rel="stylesheet" type="text/css"/>
        <!-- END: Theme CSS-->

        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/wizard.min.css">
        <link rel="stylesheet" type="text/css" href="../admin-panel/plugin/sweetalert/sweetalert.css">

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
            <div class="content-wrapper m-0">
                <div class="content-header row">
                    <div class="content-header-left col-12 mb-2 mt-1">
                        <div class="row breadcrumbs-top">
                            <div class="col-12">
                                <h5 class="content-header-title float-left pr-1 mb-0">Dashboard</h5>
                                <div class="breadcrumb-wrapper col-12">
                                    <ol class="breadcrumb p-0 mb-0">
                                        <li class="breadcrumb-item"><a href="index.php"></a>
                                        </li> 
                                        <li class="breadcrumb-item active">Edit Your Tour Company Details 
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
                                <form action="#" class="wizard-horizontal" id="form-data">
                                    <div class="card icon-tab">
                                        <div class="card-content mt-2">
                                            <div class="card-body">
                                                <!-- Step 1 end-->
                                                <!-- body content of step 1 -->
                                                <fieldset>
                                                    <div class="br">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <h5>Edit Your Tour Company Details - <small class="text-success">Edit your tour company name for customer. </small></h5>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label>Tour Company Name</label>
                                                                    <input type="text" class="form-control" placeholder="Name" id="title" name="title" value="<?php echo $TOUR_COMPANY->title ?>">
                                                                </div>
                                                            </div>  
                                                            <div class="col-md-6">
                                                                <label class="text-bold-600 text-danger">Select you Main Tour Types</label>

                                                                <div class="form-group">
                                                                    <select class="select2 form-control select-light-danger" multiple="multiple" name="tour_type[]  " id="tour_type">
                                                                        <?php
                                                                        $TOUR_TYPE = new TourType(NULL);
                                                                        $TOUR_COMPANY_SELECTED_TOUR_TYPE = new TourCompanySelectedTourTypes(NULL);


                                                                        foreach ($TOUR_TYPE->all() as $tour_type) {
                                                                            ?>
                                                                            <option value="<?php echo $tour_type['id'] ?>"  <?php
                                                                            foreach ($TOUR_COMPANY_SELECTED_TOUR_TYPE->getTourTypesByCompany($id) as $tour_company_selected_package) {
                                                                                if ($tour_company_selected_package['tour_type'] == $tour_type['id']) {
                                                                                    echo 'selected';
                                                                                } else {
                                                                                    
                                                                                }
                                                                            }
                                                                            ?> > <?php echo $tour_type['title'] ?></option> 
                                                                                    <?php
                                                                                }
                                                                                ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="br">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <h5>Where's your Company located? <small class="text-success">Fill your Company located details</small> </h5>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label>Street address</label>
                                                                    <input type="text" class="form-control" id="address_1" name="address_1" placeholder="Street name" value="<?php echo $TOUR_COMPANY->address_1 ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label>Address Line 2</label>
                                                                    <input type="text" class="form-control" id="address_2" name="address_2" placeholder=" Unit Number, suite floor, Bulding" value="<?php echo $TOUR_COMPANY->address_2 ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>city</label>
                                                                    <select class="select2 form-control" name="city" id="city">
                                                                        <option value="">Select Your City</option>
                                                                        <?php
                                                                        $CITY = new City(NULL);
                                                                        foreach ($CITY->all() as $city) {
                                                                            if ($TOUR_COMPANY->city == $city['id']) {
                                                                                ?>
                                                                                <option value="<?php echo $city['id'] ?>"  selected=""><?php echo $city['name'] ?></option>

                                                                            <?php } else { ?>
                                                                                <option value="<?php echo $city['id'] ?>" ><?php echo $city['name'] ?></option>
                                                                                <?php
                                                                            }
                                                                        }
                                                                        ?>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Zip Code</label>
                                                                    <input type="text" class="form-control" name="zip_code" id="zip_code" placeholder="Enter Your Zip code" value="<?php echo $TOUR_COMPANY->zip_code ?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="br">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <h5>What are the contact details for this company?   </h5>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <label>Contact name </label>
                                                                    <input type="text" class="form-control" placeholder="Contact name" id="contact_name" name="contact_name" value="<?php echo $TOUR_COMPANY->contact_name ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <label>Contact Email </label>
                                                                    <input type="email" class="form-control" placeholder="Contact email" id="contact_email" name="contact_email" value="<?php echo $TOUR_COMPANY->email ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <label>Contact number </label>
                                                                    <input type="text" class="form-control" name="contact_number_1" id="contact_number_1" placeholder="07+ 123 4567" value="<?php echo $TOUR_COMPANY->contact_number_1 ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label>  Alternative number (optional) </label>
                                                                    <input type="text" class="form-control" placeholder=" 07+ 123 4567" name="contact_number_2" id="contact_number_2"  value="<?php echo $TOUR_COMPANY->contact_number_2 ?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="br mb-2">
                                                        <div class="row">  
                                                            <div class="col-12">
                                                                <h5>Add The Main Tour Company Image  </h5>
                                                            </div>
                                                            <div class="col-sm-4" id="show-btn"> 
                                                                <a href="#" id="delete-tour-main-img"><i class="bx bxs-trash delete-btn-p" style="display: none"></i></a>
                                                                <input type="hidden" id="del-tour" name="image_name">
                                                                <?php
                                                                if (empty($TOUR_COMPANY->image_name)) {
                                                                    ?>
                                                                    <img src="app-assets/images/tour.jpg"  style="box-shadow: 0 0 0 2px #0071c2;width: 100%"/>

                                                                    <?php
                                                                } else {
                                                                    ?>
                                                                    <img src="../upload/tour-package/main/gallery/thumb/<?php echo $TOUR_COMPANY->image_name ?>" id="main-img" style="box-shadow: 0 0 0 2px #0071c2;width: 100%"/>
                                                                <?php } ?>
                                                                <input type="hidden" name="action" value="upload-add-main_img_tour">
                                                            </div> 
                                                            <div class="col-sm-4"  > 
                                                                <label>Your Tour Company Main Image</label>
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input" id="main_img_tour" name="image_name">
                                                                    <label class="custom-file-label" for="main_img_tour">Tour main image</label>
                                                                </div> 
                                                            </div>  
                                                        </div> 
                                                    </div>
                                                    <hr>
                                                    <div class="br mb-2">
                                                        <h5>Company  Description    </h5>  
                                                        <textarea class="description" name="description"><?php echo $TOUR_COMPANY->description ?></textarea>
                                                    </div>

                                                </fieldset>

                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <h6 class="text-danger">Activate or Deactivate Company</h6>  
                                                        <div class="checkbox checkbox-primary mt-1">
                                                            <input type="checkbox" id="is_active"   name="is_active" value="1" <?php
                                                            if ($TOUR_COMPANY->is_publish == 1) {
                                                                echo 'checked=""';
                                                            }
                                                            ?>>
                                                            <label for="is_active">Is Active.</label>
                                                        </div>  
                                                    </div> 
                                                    <div class="col-md-4">

                                                        <button class="btn btn-primary" id="update_active" type="button" style="float: right;">Update</button>
                                                    </div> 
                                                </div> 
                                                <input type="hidden"   name="old-image_name" value="<?php echo $TOUR_COMPANY->image_name ?>">
                                                <input type="hidden" name="id"  value="<?php echo $id ?>">
                                                <input type="hidden" name="update_active">
                                            </div> 
                                        </div> 
                                    </div>
                            </div> 
                        </div>
                    </section>
                </div>
            </div>
        </div>


        <script src="../js/jquery-2.2.4.min.js" type="text/javascript"></script> 
        <!-- BEGIN: Vendor JS-->
        <script src="app-assets/vendors/js/vendors.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>


        <!-- BEGIN Vendor JS-->
        <script src="js/ajax/tour-company.js" type="text/javascript"></script>
        <!-- BEGIN: Page Vendor JS-->


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
        <script src="../admin-panel/js/tinymce/js/tinymce/tinymce.min.js" type="text/javascript"></script>  
        <script src="app-assets/vendors/js/forms/repeater/jquery.repeater.min.js"></script>
        <script src="app-assets/vendors/js/forms/select/select2.full.min.js"></script>
        <script src="app-assets/js/scripts/forms/select/form-select2.min.js"></script>
        <script src="app-assets/js/scripts/navs/navs.min.js"></script>
        <!-- END: Page JS-->
        <script src="plugin/sweetalert/sweetalert.min.js" type="text/javascript"></script>  
        <script src="js/tinymce/js/tinymce/tinymce.min.js" type="text/javascript"></script>
        <script src="js/jquery.preloader.min.js" type="text/javascript"></script>
        <script>
            tinymce.init({
                selector: ".description",
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