<!DOCTYPE html>
<?php
include '../class/include.php';
include './auth.php';
$id = '';
$id = $_GET['id'];


$TOUR_COMPANY_PACKAGE_BY_SELECTED = TourCompanyPackage::getPackageById($_SESSION['id']);
$TOUR_COMPANY_PACKAGE = new TourCompanyPackage($TOUR_COMPANY_PACKAGE_BY_SELECTED);
?>
<html class = "loading" lang = "en" data-textdirection = "ltr">
    <!--BEGIN: Head-->

    <head>
        <meta http-equiv = "Content-Type" content = "text/html; charset=UTF-8">
        <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name = "author" content = "MyTravelPartner.lk">
        <title>Create Tour Package - MyTravelPartner.lk </title>
        <link rel = "shortcut icon" type = "image/x-icon" href ="../images/logo-favicon.png">
        <link href = "https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel = "stylesheet">

        <!--BEGIN: Vendor CSS-->
        <link rel = "stylesheet" type = "text/css" href = "app-assets/vendors/css/vendors.min.css">
        <link rel = "stylesheet" type = "text/css" href = "app-assets/vendors/css/forms/select/select2.min.css">
        <!--END: Vendor CSS-->

        <!--BEGIN: Theme CSS-->
        <link rel = "stylesheet" type = "text/css" href = "app-assets/css/bootstrap.min.css">
        <link rel = "stylesheet" type = "text/css" href = "app-assets/css/bootstrap-extended.min.css">
        <link rel = "stylesheet" type = "text/css" href = "app-assets/css/colors.min.css">
        <link rel = "stylesheet" type = "text/css" href = "app-assets/css/components.min.css">
        <link rel = "stylesheet" type = "text/css" href = "app-assets/css/themes/dark-layout.min.css">
        <link rel = "stylesheet" type = "text/css" href = "app-assets/css/themes/semi-dark-layout.min.css">
        <!--END: Theme CSS-->

        <!--BEGIN: Page CSS-->
        <link rel = "stylesheet" type = "text/css" href = "app-assets/css/core/menu/menu-types/vertical-menu.min.css">
        <link rel = "stylesheet" type = "text/css" href = "app-assets/css/plugins/forms/wizard.min.css">
        <link href="plugin/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
        <!--BEGIN: Custom CSS-->
        <link rel = "stylesheet" type = "text/css" href = "assets/css/style.css">
        <!--END: Custom CSS-->
        <link rel = "stylesheet" href = "https://unpkg.com/boxicons@latest/css/boxicons.min.css">

        <style>

            .custom-checkbox .custom-control-label::before{
                border: 1px solid   #475F7B;
            }
        </style>
    </head>
    <!--END: Head-->

    <!--BEGIN: Body-->
    <body class = "vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-sticky footer-static  " data-open = "click" data-menu = "vertical-menu-modern" data-col = "2-columns" data-layout = "semi-dark-layout">

        <!--BEGIN: Header-->
        <div class = "header-navbar-shadow"></div>
        <?php include './header.php';
        ?>
        <!-- END: Header-->

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
                                        <li class="breadcrumb-item active">Manage Tour Packages
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


                                <div class="card icon-tab">

                                    <div class="card-content mt-2">
                                        <div class="card-body">
                                            <fieldset>
                                                <div class="br  ">
                                                    <div class="row"> 
                                                        <div class="col-12">
                                                            <section id="nav-tabs-centered">
                                                                <div class="row">
                                                                    <div class="col-sm-12"> 
                                                                        <div class="card-content">
                                                                            <div class="card-body">

                                                                                <ul class="nav nav-tabs justify-content-center" role="tablist">
                                                                                    <li class="nav-item">
                                                                                        <a class="nav-link active" id="home-tab-center" data-toggle="tab" href="#home-center"
                                                                                           aria-controls="home-center" role="tab" aria-selected="true">
                                                                                            Select Our Tour Packages
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="nav-item">
                                                                                        <a class="nav-link " id="service-tab-center" data-toggle="tab" href="#service-center"
                                                                                           aria-controls="service-center" role="tab" aria-selected="false">
                                                                                            Manage your Own Packages
                                                                                        </a>
                                                                                    </li>

                                                                                </ul>
                                                                                <div class="tab-content">
                                                                                    <div class="tab-pane active" id="home-center" aria-labelledby="home-tab-center" role="tabpanel">
                                                                                        <div class="content-body"> 
                                                                                            <section id="page-account-settings">
                                                                                                <form id="form-data"> 
                                                                                                    <div class="row"> 
                                                                                                        <div class="col-md-12">
                                                                                                            <div class="card">
                                                                                                                <div class="card-content">

                                                                                                                    <div class="tab-content">

                                                                                                                        <div role="tabpanel" class="tab-pane active" id="account-vertical-genera1-<?php echo $key ?>" aria-labelledby="account-pill-general-<?php echo $key ?>" aria-expanded="true">
                                                                                                                            <section id="decks">
                                                                                                                                <div class="row">
                                                                                                                                    <?php
                                                                                                                                    $TOUR_COMPANY_PACKAGE_SELECTED = new TourCompanyPackageSelected(NULL);
                                                                                                                                    if (count($TOUR_COMPANY_PACKAGE_SELECTED->getTourPackagesByCompany($id)) > 0) {
                                                                                                                                        foreach ($TOUR_COMPANY_PACKAGE_SELECTED->getTourPackagesByCompany($id) as $key => $tour_packages) {
                                                                                                                                            $TOUR_COMPANY_PACKAGE = new TourPackage($tour_packages['selected_package']);
                                                                                                                                            ?>
                                                                                                                                            <div class="col-md-3 col-sm-6" id="div<?php echo $tour_packages['id'] ?>">
                                                                                                                                                <div   style="background-color: #f2f4f4;margin-bottom: 25px;">
                                                                                                                                                    <div class="card-content">
                                                                                                                                                        <img class="card-img-top img-fluid" src="../upload/tour-package/<?php echo $TOUR_COMPANY_PACKAGE->image_name ?>"   alt="<?php echo $tour_packages['title'] ?>" />
                                                                                                                                                        <div  style="padding: 15px;">
                                                                                                                                                            <h4 class="card-title" style="margin-bottom: 8px;"> <?php echo ucwords($TOUR_COMPANY_PACKAGE->title) ?></h4>
                                                                                                                                                            <div class="row">
                                                                                                                                                                <div class="col-md-6">
                                                                                                                                                                    <fieldset>
                                                                                                                                                                        <div class="custom-control custom-checkbox  " style="margin-top: 5px;">
                                                                                                                                                                            <input type="checkbox" class="custom-control-input "    disabled=""   value="<?php echo $tour_packages['id'] ?>" checked="" id="customCheck<?php echo $tour_packages['id'] ?>" >

                                                                                                                                                                            <label class="custom-control-label" for="customCheck<?php echo $tour_packages['id'] ?>">Selected</label>

                                                                                                                                                                        </div>
                                                                                                                                                                    </fieldset> 

                                                                                                                                                                </div>



                                                                                                                                                                <div class="col-md-6" style="padding: 0px;">
                                                                                                                                                                    <a href="#" data-toggle="modal" data-target="#info<?php echo $tour_packages['id'] ?>"data-toggle="tooltip" data-placement="bottom" title="Edit" ><i class=" bx bx-edit-alt edit-btn"></i></a> | 
                                                                                                                                                                    <a href="#" class="delete-tour-package-selected"   data-id="<?php echo $tour_packages['id'] ?>"  data-toggle="tooltip" data-placement="bottom" title="Delete" ><i class="bx bxs-trash delete-btn"></i></a> |
                                                                                                                                                                    <a href="view-tour-package.php?id=<?php echo $tour_packages['id'] ?>" target="_blank" data-toggle="tooltip" data-placement="bottom" title="View Package">
                                                                                                                                                                        <i class="bx bx-show succes-btn"></i>
                                                                                                                                                                    </a>
                                                                                                                                                                </div>

                                                                                                                                                                <div class="modal-info mr-1 mb-1 d-inline-block">  

                                                                                                                                                                    <div class="modal fade text-left" id="info<?php echo $tour_packages['id'] ?>" tabindex="-1" role="dialog"
                                                                                                                                                                         aria-labelledby="myModalLabel130" aria-hidden="true">
                                                                                                                                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                                                                                                                                            <div class="modal-content">
                                                                                                                                                                                <div class="modal-header bg-info">
                                                                                                                                                                                    <h5 class="modal-title white" id="myModalLabel130"><?php echo ucwords($TOUR_COMPANY_PACKAGE->title) ?> - Edit Package</h5>
                                                                                                                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                                                                                        <i class="bx bx-x"></i>
                                                                                                                                                                                    </button>
                                                                                                                                                                                </div>
                                                                                                                                                                                <div class="modal-body">
                                                                                                                                                                                    <label>Tour Package Include Details</label>
                                                                                                                                                                                    <textarea   class="form-control" name="description" style="background: white;border: 1px solid   #475F7B;"> <?php echo $tour_packages['include'] ?> </textarea>
                                                                                                                                                                                    <textarea   class="form-control" name="description" style="background: white;border: 1px solid   #475F7B;margin-top: 20px"> <?php echo $tour_packages['exclude'] ?> </textarea>
                                                                                                                                                                                    <h6 class="text-success mt-1">Please Enter Your <span class="text-danger"> Package Price..? </span></h6>
                                                                                                                                                                                    <input type="text" class="form-control btn-sm "   placeholder="Enter Your Package Price in USD$"  style="padding: 15px;height: 0px;width: 50%;border: 1px solid   #475F7B; " name="price" value="<?php echo $tour_packages['price'] ?>">

                                                                                                                                                                                </div>
                                                                                                                                                                                <div class="modal-footer">
                                                                                                                                                                                    <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                                                                                                                                                                                        <i class="bx bx-x d-block d-sm-none"></i>
                                                                                                                                                                                        <span class="d-none d-sm-block">Close</span>
                                                                                                                                                                                    </button>
                                                                                                                                                                                    <button type="button" class="btn btn-info ml-1 create-selected" data-dismiss="modal"  >
                                                                                                                                                                                        <i class="bx bx-check d-block d-sm-none"></i>
                                                                                                                                                                                        <span class="d-none d-sm-block">Update</span>
                                                                                                                                                                                    </button>
                                                                                                                                                                                </div>
                                                                                                                                                                            </div>
                                                                                                                                                                        </div>

                                                                                                                                                                    </div>

                                                                                                                                                                    <input type="hidden" name="create-selected"> 
                                                                                                                                                                    <input type="hidden" name="customer_id" value="<?php echo $_SESSION['id'] ?>"> 
                                                                                                                                                                    <input type="hidden" name="select" class="select" value="<?php echo $tour_packages['id'] ?>"> 
                                                                                                                                                                    <input type="hidden" name="id" value="<?php echo $id ?>"> 

                                                                                                                                                                </div> 

                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                            <?php
                                                                                                                                        }
                                                                                                                                    } else {
                                                                                                                                        ?>
                                                                                                                                        <div class="col-md-4"></div>
                                                                                                                                        <div class="col-md-4">

                                                                                                                                            <a href="create-tour-packages.php?id=<?php echo $id ?>" ><button class="btn btn-warning"   type="button"  >Add Your Packages</button></a> 
                                                                                                                                        </div>

                                                                                                                                        <div class="col-md-4"></div>    
                                                                                                                                    <?php } ?>
                                                                                                                                </div>

                                                                                                                            </section>
                                                                                                                        </div>

                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>                                                                                                        
                                                                                                </form>
                                                                                            </section>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="tab-pane" id="service-center" aria-labelledby="service-tab-center" role="tabpanel">
                                                                                        <form id="form-data-own">
                                                                                            <div class="row">
                                                                                                <?php
                                                                                                $TOUR_COMPANY_PACKAGE = new TourCompanyPackage(NULL);
                                                                                                if (count($TOUR_COMPANY_PACKAGE->getTourPackagesByCompany($id)) > 0) {
                                                                                                    foreach ($TOUR_COMPANY_PACKAGE->getTourPackagesByCompany($id) as $key => $tour_packages) {
                                                                                                        ?>
                                                                                                        <div class="col-md-3 col-sm-6" id="div<?php echo $tour_packages['id'] ?>">
                                                                                                            <div   style="background-color: #f2f4f4;margin-bottom: 25px;">
                                                                                                                <div class="card-content">
                                                                                                                    <img class="card-img-top img-fluid" src="../upload/tour-package/gallery/thumb/<?php echo $tour_packages['image_name'] ?>"   alt="<?php echo $tour_packages['title'] ?>" />
                                                                                                                    <div  style="padding: 15px;">
                                                                                                                        <h4 class="card-title" style="margin-bottom: 8px;"> <?php echo ucwords($tour_packages['title']) ?></h4>

                                                                                                                        <div class="row">
                                                                                                                            <div class="col-md-3">
                                                                                                                            </div>

                                                                                                                            <div class="col-md-9" style="float: right">
                                                                                                                                <a href="edit-custome-tour-packages.php?id=<?php echo $tour_packages['id'] ?>" data-toggle="tooltip" data-placement="bottom" title="Edit" ><i class=" bx bx-edit-alt edit-btn"></i></a> | 
                                                                                                                                <a href="create-tour-date.php?id=<?php echo $tour_packages['id'] ?>" data-toggle="tooltip" data-placement="bottom" title="View Tour Days" ><i class=" bx bx-calendar-plus info-btn"></i></a> |
                                                                                                                                <a href="#" class="delete-tour-package" data-id="<?php echo $tour_packages['id'] ?>" data-toggle="tooltip" data-placement="bottom" title="Delete" ><i class="bx bxs-trash delete-btn"></i></a> 
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <?php
                                                                                                    }
                                                                                                } else {
                                                                                                    ?>
                                                                                                    <div class="col-md-4"></div>
                                                                                                    <div class="col-md-4">

                                                                                                        <a href="create-tour-packages.php?id=<?php echo $id ?>" ><button class="btn btn-warning"   type="button"  >Add Your Packages</button></a> 
                                                                                                    </div>

                                                                                                    <div class="col-md-4"></div>                                                                                              
                                                                                                    <?php
                                                                                                }
                                                                                                ?>
                                                                                            </div>
                                                                                        </form> 
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

                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>

        <?php include './footer.php'; ?>




        <script src="../js/jquery-2.2.4.min.js" type="text/javascript"></script> 
        <!-- BEGIN: Vendor JS-->
        <script src="app-assets/vendors/js/vendors.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>


        <!-- BEGIN Vendor JS-->
        <script src="js/ajax/main-image.js" type="text/javascript"></script>
        <script src="js/ajax/tour-package.js" type="text/javascript"></script>
        <script src="delete/js/tour-package.js" type="text/javascript"></script>

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
         <!-- BEGIN: Page JS-->
         <script src="plugin/sweetalert/sweetalert.min.js" type="text/javascript"></script>
        <script src="app-assets/vendors/js/forms/select/select2.full.min.js"></script>
        <script src="app-assets/js/scripts/forms/select/form-select2.min.js"></script>
        <script src="app-assets/js/scripts/navs/navs.min.js"></script><!-- END: Page JS-->
        <script src="../admin-panel/js/tinymce/js/tinymce/tinymce.min.js" type="text/javascript"></script>



    </body>  
</html>