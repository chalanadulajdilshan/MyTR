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
        <link rel = "apple-touch-icon" href = "app-assets/images/ico/apple-icon-120.html">
        <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/logo-favicon.png">
        <link href = "https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel = "stylesheet">

        <!--BEGIN: Vendor CSS-->
        <link rel = "stylesheet" type = "text/css" href = "app-assets/vendors/css/vendors.min.css">
        <link rel = "stylesheet" type = "text/css" href = "app-assets/vendors/css/forms/select/select2.min.css"> 
        <link rel = "stylesheet" type = "text/css" href = "app-assets/css/bootstrap.min.css">
        <link rel = "stylesheet" type = "text/css" href = "app-assets/css/bootstrap-extended.min.css">
        <link rel = "stylesheet" type = "text/css" href = "app-assets/css/colors.min.css">
        <link rel = "stylesheet" type = "text/css" href = "app-assets/css/components.min.css">
        <link rel = "stylesheet" type = "text/css" href = "app-assets/css/themes/dark-layout.min.css">
        <link rel = "stylesheet" type = "text/css" href = "app-assets/css/themes/semi-dark-layout.min.css">
        <link href="assets/css/preloader.css" rel="stylesheet" type="text/css"/>
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
    <body class = "someBlock vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-sticky footer-static  " data-open = "click" data-menu = "vertical-menu-modern" data-col = "2-columns" data-layout = "semi-dark-layout">


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
                                        <li class="breadcrumb-item active">Select your tour packages
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


                    <div class="card icon-tab">
                        <div class="card-content mt-2">
                            <div class="card-body">
                                <fieldset>
                                    <div class="br ">                                                     
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
                                                                        Create your Own Packages
                                                                    </a>
                                                                </li>

                                                            </ul>
                                                            <div class="tab-content">
                                                                <div class="tab-pane active" id="home-center" aria-labelledby="home-tab-center" role="tabpanel">
                                                                    <div class="content-body"> 
                                                                        <section id="page-account-settings">

                                                                            <div class="row">
                                                                                <div class="col-12">
                                                                                    <div class="row">
                                                                                        <div class="col-md-3 mb-3 mb-md-0 pills-stacked">
                                                                                            <ul class="nav nav-pills flex-column">
                                                                                                <?php
                                                                                                $TOUR_TYPE = new TourType(NULL);
                                                                                                foreach ($TOUR_TYPE->all() as $key => $tour_type) {
                                                                                                    if ($key == 0) {
                                                                                                        ?>
                                                                                                        <li class="nav-item   " style="margin-bottom: 10px;">
                                                                                                            <a class="nav-link d-flex align-items-center active" id="account-pill-general-<?php echo $key ?>" data-toggle="pill"
                                                                                                               href="#account-vertical-genera1-<?php echo $key ?>" aria-expanded="true">
                                                                                                                <i class="bx bxs-right-arrow-circle"></i>
                                                                                                                <span><?php echo $tour_type['title'] ?></span>
                                                                                                            </a>
                                                                                                        </li>

                                                                                                    <?php } else { ?>  
                                                                                                        <li class="nav-item   " style="margin-bottom: 10px;">
                                                                                                            <a class="nav-link d-flex align-items-center" id="account-pill-passwordl-<?php echo $key ?>" data-toggle="pill"     href="#account-vertical-passwordl-<?php echo $key ?>" aria-expanded="false" style="padding-left: 15px!important;">
                                                                                                                <i class="bx bxs-right-arrow-circle"></i>
                                                                                                                <span><?php echo $tour_type['title'] ?></span>
                                                                                                            </a>
                                                                                                        </li>
                                                                                                        <?php
                                                                                                    }
                                                                                                }
                                                                                                ?>
                                                                                            </ul>
                                                                                        </div>
                                                                                        <!-- right content section -->
                                                                                        <div class="col-md-9">
                                                                                            <div class="card">
                                                                                                <div class="card-content">

                                                                                                    <div class="tab-content">
                                                                                                        <?php
                                                                                                        $TOUR_TYPE = new TourType(NULL);
                                                                                                        foreach ($TOUR_TYPE->all() as $key => $tour_type) {
                                                                                                            if ($key == 0) {
                                                                                                                ?>
                                                                                                                <div role="tabpanel" class="tab-pane active" id="account-vertical-genera1-<?php echo $key ?>" aria-labelledby="account-pill-general-<?php echo $key ?>" aria-expanded="true">
                                                                                                                    <section id="decks">
                                                                                                                        <div class="row">
                                                                                                                            <?php
                                                                                                                            $TOUR_PACKAGE = new TourPackage(NULL);
                                                                                                                            foreach ($TOUR_PACKAGE->getTourPackageById($tour_type['id']) as $key => $tour_packages) {
                                                                                                                                ?>
                                                                                                                                <div class="col-md-4 col-sm-6 dataTable"> 
                                                                                                                                    <div   style="background-color: #f2f4f4;margin-bottom: 25px;">
                                                                                                                                        <div class="card-content">
                                                                                                                                            <img class="card-img-top img-fluid" src="../upload/tour-package/<?php echo $tour_packages['image_name'] ?>"   alt="<?php echo $tour_packages['title'] ?>" />
                                                                                                                                            <div  style="padding: 15px;">
                                                                                                                                                <h4 class="card-title" style="margin-bottom: 8px;"> <?php echo ucwords($tour_packages['title']) ?></h4>
                                                                                                                                                <div class="row">
                                                                                                                                                    <div class="col-md-7">
                                                                                                                                                        <fieldset>
                                                                                                                                                            <div class="custom-control custom-checkbox  " style="margin-top: 5px;">
                                                                                                                                                                <input type="checkbox" class="custom-control-input  "   data-toggle="modal" data-target="#info<?php echo $key ?>" value="<?php echo $tour_packages['id'] ?>" id="customCheck<?php echo $tour_packages['id'] ?>" style="border: 1px solid   #475F7B;" 
                                                                                                                                                                <?php
                                                                                                                                                                foreach (TourCompanyPackageSelected::getTourPackagesByCompany($id) as $tour_package_selected) {

                                                                                                                                                                    if ($tour_package_selected['selected_package'] == $tour_packages['id']) {
                                                                                                                                                                        echo 'checked   disabled=""';
                                                                                                                                                                    }
                                                                                                                                                                }
                                                                                                                                                                ?>> 

                                                                                                                                                                <label class="custom-control-label" for="customCheck<?php echo $tour_packages['id'] ?>">Select This</label>
                                                                                                                                                            </div>
                                                                                                                                                        </fieldset> 

                                                                                                                                                    </div>

                                                                                                                                                    <div class="col-md-5">
                                                                                                                                                        <a href="view-tour-package.php?id=<?php echo $tour_packages['id'] ?>" target="_blank" data-toggle="tooltip" data-placement="bottom" title="View Package">
                                                                                                                                                            <i class="bx bx-show succes-btn"></i>
                                                                                                                                                        </a>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>

                                                                                                                                    <div class="modal-info mr-1 mb-1 d-inline-block">  

                                                                                                                                        <div class="modal fade text-left" id="info<?php echo $key ?>" tabindex="-1" role="dialog"
                                                                                                                                             aria-labelledby="myModalLabel130" aria-hidden="true">
                                                                                                                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                                                                                                                <div class="modal-content">
                                                                                                                                                    <div class="modal-header bg-info">
                                                                                                                                                        <h5 class="modal-title white" id="myModalLabel130"><?php echo ucwords($tour_packages['title']) ?></h5>
                                                                                                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                                                            <i class="bx bx-x"></i>
                                                                                                                                                        </button>
                                                                                                                                                    </div>
                                                                                                                                                    <div class="modal-body">
                                                                                                                                                        <label>Tour Package Include Details</label>
                                                                                                                                                        <textarea   class="form-control   "   id="include<?php echo $tour_packages['id'] ?>" style="background: white;border: 1px solid   #475F7B;">  </textarea>

                                                                                                                                                        <label>Tour Package Exclude  Details</label>
                                                                                                                                                        <textarea   class="form-control  "  id="exclude<?php echo $tour_packages['id'] ?>" style="background: white;border: 1px solid   #475F7B;">  </textarea>
                                                                                                                                                        <h6 class="text-success mt-1">Please Enter Your <span class="text-danger"> Package Price..? </span></h6>
                                                                                                                                                        <input type="number" min="0" class="form-control btn-sm  "  id="price<?php echo $tour_packages['id'] ?>" placeholder="Enter Your Package Price in USD$"  style="padding: 15px;height: 0px;width: 50%;border: 1px solid   #475F7B; " name="price" >
                                                                                                                                                    </div>
                                                                                                                                                    <div class="modal-footer">
                                                                                                                                                        <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                                                                                                                                                            <i class="bx bx-x d-block d-sm-none"></i>
                                                                                                                                                            <span class="d-none d-sm-block">Close</span>
                                                                                                                                                        </button>
                                                                                                                                                        <button type="button" class="btn btn-info ml-1 create-selected" data-dismiss="modal"  data-id="<?php echo $tour_packages['id'] ?>" company-id="<?php echo $id ?>"  customer-id="<?php echo $_SESSION['id'] ?>">
                                                                                                                                                            <i class="bx bx-check d-block d-sm-none"></i>
                                                                                                                                                            <span class="d-none d-sm-block">Add Now</span>
                                                                                                                                                        </button>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                            </div>

                                                                                                                                        </div> 
                                                                                                                                        </form>
                                                                                                                                    </div> 
                                                                                                                                </div>

                                                                                                                                <?php
                                                                                                                            }
                                                                                                                            ?>
                                                                                                                        </div>
                                                                                                                    </section>
                                                                                                                </div>
                                                                                                            <?php } else { ?>  
                                                                                                                <div class="tab-pane fade " id="account-vertical-passwordl-<?php echo $key ?>" role="tabpanel"    aria-labelledby="account-pill-passwordl-<?php echo $key ?>" aria-expanded="false">
                                                                                                                    <div class="row">
                                                                                                                        <?php
                                                                                                                        foreach ($TOUR_PACKAGE->getTourPackageById($tour_type['id']) as $key => $tour_packages) {
                                                                                                                            ?>
                                                                                                                            <div class="col-md-4 col-sm-6 dataTable">
                                                                                                                                <div   style="background-color: #f2f4f4;margin-bottom: 25px;">
                                                                                                                                    <div class="card-content">
                                                                                                                                        <img class="card-img-top img-fluid" src="../upload/tour-package/<?php echo $tour_packages['image_name'] ?>"   alt="<?php echo $tour_packages['title'] ?>" />
                                                                                                                                        <div  style="padding: 15px;">
                                                                                                                                            <h4 class="card-title" style="margin-bottom: 8px;"> <?php echo ucwords($tour_packages['title']) ?></h4>
                                                                                                                                            <div class="row">
                                                                                                                                                <div class="col-md-7">
                                                                                                                                                    <fieldset>
                                                                                                                                                        <div class="custom-control custom-checkbox  " style="margin-top: 5px;">
                                                                                                                                                            <input type="checkbox" class="custom-control-input "  data-toggle="modal" data-target="#info2<?php echo $tour_packages['id'] ?>"    value="<?php echo $tour_packages['id'] ?>"  id="customCheck2<?php echo $tour_packages['id'] ?>"   
                                                                                                                                                            <?php
                                                                                                                                                            foreach (TourCompanyPackageSelected::getTourPackagesByCompany($id) as $tour_package_selected) {

                                                                                                                                                                if ($tour_package_selected['selected_package'] == $tour_packages['id']) {
                                                                                                                                                                    echo 'checked   disabled=""';
                                                                                                                                                                }
                                                                                                                                                            }
                                                                                                                                                            ?>> 

                                                                                                                                                            <label class="custom-control-label" for="customCheck2<?php echo $tour_packages['id'] ?>">Select This</label>
                                                                                                                                                        </div>
                                                                                                                                                    </fieldset> 
                                                                                                                                                </div>


                                                                                                                                                <div class="col-md-5">
                                                                                                                                                    <a href="view-tour-package.php?id=<?php echo $tour_packages['id'] ?>" target="_blank" data-toggle="tooltip" data-placement="bottom" title="View Package">
                                                                                                                                                        <i class="bx bx-show succes-btn"></i>
                                                                                                                                                    </a>
                                                                                                                                                </div>

                                                                                                                                            </div>

                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="modal-info mr-1 mb-1 d-inline-block"> 

                                                                                                                                    <!--info theme Modal -->
                                                                                                                                    <div class="modal fade text-left" id="info2<?php echo $tour_packages['id'] ?>" tabindex="-1" role="dialog"
                                                                                                                                         aria-labelledby="myModalLabel130" aria-hidden="true">
                                                                                                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                                                                                                            <div class="modal-content">
                                                                                                                                                <div class="modal-content">
                                                                                                                                                    <div class="modal-header bg-info">
                                                                                                                                                        <h5 class="modal-title white" id="myModalLabel130"><?php echo ucwords($tour_packages['title']) ?></h5>
                                                                                                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                                                            <i class="bx bx-x"></i>
                                                                                                                                                        </button>
                                                                                                                                                    </div>
                                                                                                                                                    <div class="modal-body">
                                                                                                                                                        <label>Tour Package Include Details</label>
                                                                                                                                                        <textarea   class="form-control   "   id="include<?php echo $tour_packages['id'] ?>" style="background: white;border: 1px solid   #475F7B;">  </textarea>

                                                                                                                                                        <label>Tour Package Exclude  Details</label>
                                                                                                                                                        <textarea   class="form-control  "  id="exclude<?php echo $tour_packages['id'] ?>" style="background: white;border: 1px solid   #475F7B;">  </textarea>
                                                                                                                                                        <h6 class="text-success mt-1">Please Enter Your <span class="text-danger"> Package Price..? </span></h6>
                                                                                                                                                        <input type="number" min="0" class="form-control btn-sm  "  id="price<?php echo $tour_packages['id'] ?>" placeholder="Enter Your Package Price in USD$"  style="padding: 15px;height: 0px;width: 50%;border: 1px solid   #475F7B; " name="price" >
                                                                                                                                                    </div>
                                                                                                                                                    <div class="modal-footer">
                                                                                                                                                        <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                                                                                                                                                            <i class="bx bx-x d-block d-sm-none"></i>
                                                                                                                                                            <span class="d-none d-sm-block">Close</span>
                                                                                                                                                        </button>
                                                                                                                                                        <button type="button" class="btn btn-info ml-1 create-selected" data-dismiss="modal"  data-id="<?php echo $tour_packages['id'] ?>" company-id="<?php echo $id ?>"  customer-id="<?php echo $_SESSION['id'] ?>">
                                                                                                                                                            <i class="bx bx-check d-block d-sm-none"></i>
                                                                                                                                                            <span class="d-none d-sm-block">Add Now</span>
                                                                                                                                                        </button>
                                                                                                                                                    </div>
                                                                                                                                                </div> 

                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <?php
                                                                                                                            }
                                                                                                                            ?>
                                                                                                                        </div> 
                                                                                                                    </div>
                                                                                                                    <?php
                                                                                                                }
                                                                                                            }
                                                                                                            ?> 
                                                                                                        </div> 
                                                                                                    </div>
                                                                                                </div> 
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div> 
                                                                        </section>
                                                                    </div>

                                                                </div>

                                                                <div class="tab-pane" id="service-center" aria-labelledby="service-tab-center" role="tabpanel">
                                                                    <form id="form-data-own">
                                                                        <div class="row">
                                                                            <div class="col-sm-6">
                                                                                <div class="form-group">
                                                                                    <label>Select Your Tour Type</label>
                                                                                    <select class="select2 form-control" name="type" id="type">
                                                                                        <option value="">Select Tour Type</option>
                                                                                        <?php
                                                                                        $TOUR_TYPE = new TourType(NULL);
                                                                                        foreach ($TOUR_TYPE->all() as $tour_type) {
                                                                                            ?>
                                                                                            <option value="<?php echo $tour_type['id'] ?>"><?php echo $tour_type['title'] ?></option>
                                                                                        <?php } ?>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <div class="form-group">
                                                                                    <label>Tour Title</label>
                                                                                    <input type="text" class="form-control" placeholder="Enter Title" name="title" id="title">
                                                                                </div>
                                                                            </div>


                                                                            <div class="col-sm-4 mt-2" id="show-btn"> 
                                                                                <a href="#" id="delete_tour_package"><i class="bx bxs-trash delete-btn-p" style="display: none"></i></a>
                                                                                <input type="hidden" id="del-tour-package" name="image_name">
                                                                                <img src="app-assets/images/tour-main.jpg" id="main-img" style="box-shadow: 0 0 0 2px #0071c2;"/>
                                                                                <input type="hidden" name="action" value="upload-add-tour-package">
                                                                            </div> 

                                                                            <div class="col-sm-3"> 
                                                                                <label>Your Tour Main Image</label>
                                                                                <div class="custom-file">
                                                                                    <input type="file" class="custom-file-input" id="tour_package_img" name="image_name">
                                                                                    <label class="custom-file-label" for="main_img_rent_car">Tour main image</label>
                                                                                </div> 
                                                                            </div>  
                                                                            <div class="col-sm-2">
                                                                                <div class="form-group">
                                                                                    <label>Tour Dates</label>
                                                                                    <input type="number" class="touchspin" value="1" name="dates" id="dates" >
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-3">
                                                                                <div class="form-group">
                                                                                    <label>Price per Day(USD)</label>
                                                                                    <input type="text" class="touchspin" value="1" data-bts-prefix="USD$" name="price" id="price">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-12 mt-2">
                                                                                <div class="form-group">
                                                                                    <label>Main Tour Description</label>
                                                                                    <textarea class='description' name="description" style="background: white;">  </textarea>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-12">
                                                                                <div class="form-group">
                                                                                    <label>Include and Exclude</label>
                                                                                    <textarea id='include_and_exclude' name="include_and_exclude" style="background: white;">  </textarea>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-12">
                                                                                <input type="hidden" name="option" value="CREATE-TOUR_OWN">
                                                                                <input type="hidden" name="customer_id" value="<?php echo $_SESSION['id'] ?>"> 
                                                                                <input type="hidden" name="id" value="<?php echo $id ?>"> 
                                                                                <button class="btn btn-primary" type="button" style="float: right" id="create-tour-package">NEXT</button>
                                                                            </div> 
                                                                        </div>


                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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
        <script src="js/jquery.preloader.min.js" type="text/javascript"></script>
        <script src="app-assets/vendors/js/forms/select/select2.full.min.js"></script>
        <script src="app-assets/js/scripts/forms/select/form-select2.min.js"></script>
        <script src="app-assets/js/scripts/navs/navs.min.js"></script><!-- END: Page JS-->
        <script src="../admin-panel/js/tinymce/js/tinymce/tinymce.min.js" type="text/javascript"></script>
        <script src="app-assets/js/scripts/modal/components-modal.min.js"></script>
        <script src="plugin/sweetalert/sweetalert.min.js" type="text/javascript"></script>
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
</html>