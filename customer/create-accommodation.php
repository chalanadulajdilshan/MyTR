<!DOCTYPE html>
<?php
include '../class/include.php';
include './auth.php';
$ACCOMMODATION_TYPE = new AccommodationType(NULL);
$FACILITY = new Facility(NULL);
$CUSTOMER = new Customer($_SESSION['id'])
?>
<html class="loading" lang="en" data-textdirection="ltr">
    <!-- BEGIN: Head-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Create Accommodation - MyTravelPartner.lk </title>
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
        <!-- END: Vendor CSS-->

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
                                        <li class="breadcrumb-item active">Create Accommodation
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
                                            <form action="#" class="wizard-horizontal" id="form-data">
                                                <!-- Step 1 -->
                                                <h6>
                                                    <i class="step-icon"></i>
                                                    <span class="fonticon-wrap">
                                                        <i class="bx  bxs-home f-50"></i>
                                                    </span>
                                                    <span>Basic Details</span>
                                                </h6>
                                                <!-- Step 1 end-->
                                                <!-- body content of step 1 -->
                                                <fieldset>
                                                    <div class="br">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <h5>Fill Your Property Details - <small class="text-success">Start by telling us your property type, property's name and Star Rating. </small></h5>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label>What's the name of your property? </label>
                                                                    <fieldset class="form-group">
                                                                        <select class="form-control" id="type" name="type">

                                                                            <option value=""> Select your property type</option>
                                                                            <?php foreach ($ACCOMMODATION_TYPE->all() as $accommodation_type) { ?>
                                                                                <option value="<?php echo $accommodation_type['id'] ?>"><?php echo $accommodation_type['title'] ?></option> 
                                                                            <?php } ?>
                                                                        </select>
                                                                    </fieldset> 
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label>What's the name of your property? </label>
                                                                    <input type="text" class="form-control" name="title" id="title" placeholder="Enter Your property name">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6"> 
                                                                <label>Another Web Sites?</label>
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="d-inline-block mr-2 mb-1">
                                                                        <fieldset>
                                                                            <div class="checkbox checkbox-primary">
                                                                                <input type="checkbox" id="colorCheckbox1" checked name="booking_com" value="1" >
                                                                                <label for="colorCheckbox1">Booking.com</label>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                    <li class="d-inline-block mr-2 mb-1">
                                                                        <fieldset>
                                                                            <div class="checkbox checkbox-primary">
                                                                                <input type="checkbox" id="colorCheckbox2" name="tripadvisor" value="1" >
                                                                                <label for="colorCheckbox2">Tripadvisor</label>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                    <li class="d-inline-block mr-2 mb-1">
                                                                        <fieldset>
                                                                            <div class="checkbox checkbox-primary">
                                                                                <input type="checkbox" id="colorCheckbox3" name="agoda" value="1">
                                                                                <label for="colorCheckbox3">Agoda</label>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                    <li class="d-inline-block mr-2 mb-1">
                                                                        <fieldset>
                                                                            <div class="checkbox checkbox-primary">
                                                                                <input type="checkbox" id="colorCheckbox4" name="expedia" value="1">
                                                                                <label for="colorCheckbox4">Expedia</label>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                </ul> 
                                                            </div>
                                                            <div class="col-sm-6"> 
                                                                <label>Star rating</label>
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="d-inline-block m-r-12 mb-1">
                                                                        <fieldset>
                                                                            <div class="custom-control custom-radio">
                                                                                <input type="radio" class="custom-control-input" name="star_rating"  id="customRadio0"  value="0" checked>
                                                                                <label class="custom-control-label" for="customRadio0">Unstart</label>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                    <li class="d-inline-block m-r-12 mb-1">
                                                                        <fieldset>
                                                                            <div class="custom-control custom-radio">
                                                                                <input type="radio" class="custom-control-input" name="star_rating" id="customRadio1"   value="1">
                                                                                <label class="custom-control-label" for="customRadio1">1 <i class="bx bx-star f-12"></i></label>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                    <li class="d-inline-block m-r-12 mb-1">
                                                                        <fieldset>
                                                                            <div class="custom-control custom-radio">
                                                                                <input type="radio" class="custom-control-input" name="star_rating"  id="customRadio2"  value="2">
                                                                                <label class="custom-control-label" for="customRadio2">2 <i class="bx bx-star f-12"></i><i class="bx bx-star f-12"></i></label>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                    <li class="d-inline-block m-r-12 mb-1">
                                                                        <fieldset>
                                                                            <div class="custom-control custom-radio">
                                                                                <input type="radio" class="custom-control-input" name="star_rating"  id="customRadio3"  value="3">
                                                                                <label class="custom-control-label" for="customRadio3">3 <i class="bx bx-star f-12"></i><i class="bx bx-star f-12"></i><i class="bx bx-star f-12"></i></label>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                    <li class="d-inline-block m-r-12 mb-1">
                                                                        <fieldset>
                                                                            <div class="custom-control custom-radio">
                                                                                <input type="radio" class="custom-control-input" name="star_rating"  id="customRadio4"  value="4">
                                                                                <label class="custom-control-label" for="customRadio4">4 <i class="bx bx-star f-12"></i><i class="bx bx-star f-12"></i><i class="bx bx-star f-12"></i><i class="bx bx-star f-12"></i></label>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                    <li class="d-inline-block m-r-12 mb-1">
                                                                        <fieldset>
                                                                            <div class="custom-control custom-radio">
                                                                                <input type="radio" class="custom-control-input" name="star_rating"  id="customRadio5"  value="5">
                                                                                <label class="custom-control-label" for="customRadio5">5 <i class="bx bx-star f-12"></i><i class="bx bx-star f-12"></i><i class="bx bx-star f-12"></i><i class="bx bx-star f-12"></i><i class="bx bx-star f-12"></i></label>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li> 
                                                                </ul> 
                                                            </div> 
                                                        </div>
                                                    </div>
                                                    <hr>


                                                    <div class="br">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <h5>Where's your property located? <small class="text-success">Fill your Property located details</small> </h5>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label>Main Address </label>
                                                                    <input type="text" class="form-control" id="address_1" name="address_1" placeholder="Unit Number, suite floor, Bulding">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label>Street address</label>
                                                                    <input type="text" class="form-control" id="address_2" name="address_2" placeholder="Street name">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>city</label>
                                                                    <select class="select2 form-control" name="city" id="city">
                                                                        <option value="" selected="">Select Your City</option>
                                                                        <?php
                                                                        $CITY = new City(NULL);
                                                                        foreach ($CITY->all() as $city) {
                                                                            ?>
                                                                            <option value="<?php echo $city['id'] ?>" ><?php echo $city['name'] ?></option>

                                                                        <?php } ?>

                                                                    </select>

                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Zip Code</label>
                                                                    <input type="text" class="form-control" name="zip_code" id="zip_code" placeholder="Enter Your Zip code" readonly="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr> 
                                                    <div class="br">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <h5>What are the contact details for this property?   </h5>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label>Contact name </label>
                                                                    <input type="text" class="form-control" placeholder="Contact name" id="contact_name" name="contact_name" value="<?php echo $CUSTOMER->full_name ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label>Contact number </label>
                                                                    <input type="text" class="form-control" name="mobile_number_1" id="mobile_number_1" placeholder="07+ 123 4567" value="<?php echo $CUSTOMER->phone_number ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label>  Alternative contact number (optional) </label>
                                                                    <input type="text" class="form-control" placeholder=" 07+ 123 4567" name="mobile_number_2" id="mobile_number_2" >
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label>Contact Email </label>
                                                                    <input type="email" class="form-control" placeholder="Contact email" id="contact_email" name="contact_email" value="<?php echo $CUSTOMER->email ?>">
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="br mb-2">
                                                        <div class="row">  
                                                            <div class="col-sm-4" id="show-btn"> 
                                                                <a href="#" id="delete-hotel-img"><i class="bx bxs-trash delete-btn-p" style="display: none"></i></a>
                                                                <input type="hidden" id="del-hotel" name="image_name">
                                                                <img src="app-assets/images/hotel-avatar.jpg" id="main-img" style="box-shadow: 0 0 0 2px #0071c2;"/>

                                                            </div> 
                                                            <div class="col-sm-4"  > 
                                                                <label>Your Property Main Image</label>
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input" id="main_img" name="image_name">
                                                                    <label class="custom-file-label" for="main_img">Property main image</label>
                                                                </div> 
                                                            </div>  
                                                        </div> 
                                                    </div>
                                                    <input type="hidden" name="action" value="upload-add-image">
                                                </fieldset>
                                                <!-- Step 2-->
                                                <h6>
                                                    <i class="step-icon"></i>
                                                    <span class="fonticon-wrap">
                                                        <i class="bx bx-station f-50"></i>
                                                    </span>
                                                    <span>Facilities & Services</span>
                                                </h6>
                                                <!-- Step 2 end-->
                                                <!-- body content of step 2 -->
                                                <fieldset>
                                                    <div class="br">
                                                        <div class="row"> 
                                                            <div class="col-sm-6"> 
                                                                <h5>Parking ?   </h5> 
                                                                <div class="form-group">
                                                                    <label>Is parking available to guests? </label>
                                                                    <fieldset class="form-group">
                                                                        <select class="form-control" id="basicSelect"  name="parking">
                                                                            <option value="0" selected="">No</option>
                                                                            <option value="1">Yes, Free</option>
                                                                            <option value="2">Yes, Paid</option>
                                                                        </select>
                                                                    </fieldset> 
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6"> 
                                                                <h5>Breakfast ?   </h5> 
                                                                <div class="form-group">
                                                                    <label>Is breakfast available to guests? </label>
                                                                    <fieldset class="form-group" >
                                                                        <select class="form-control" id="basicSelect" name="breakfast">
                                                                            <option value="0" selected="">No</option>
                                                                            <option value="1">Yes, It is included in the price</option>
                                                                            <option value="2">It is optional</option>
                                                                        </select>
                                                                    </fieldset> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <hr>
                                                    <div class="br">
                                                        <div class="row"> 
                                                            <div class="col-md-12">
                                                                <h5>Facilities  </h5>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label>Facilities That Are Popular With Guests</label>
                                                            </div>
                                                            <?php
                                                            foreach ($FACILITY->all() as $key => $facility) {
                                                                ?>
                                                                <div class="col-md-3 mb-1">
                                                                    <fieldset>
                                                                        <div class="checkbox checkbox-primary">
                                                                            <input type="checkbox" id="colorCheckboxf<?php echo $key ?>"   name="facility[]" value="<?php echo $facility['id'] ?>">
                                                                            <label for="colorCheckboxf<?php echo $key ?>"><?php echo $facility['title'] ?></label>
                                                                        </div>
                                                                    </fieldset>
                                                                </div>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                </fieldset>
                                                <!-- body content of step 2 end-->

                                                <h6>
                                                    <i class="step-icon"></i>
                                                    <span class="fonticon-wrap">
                                                        <i class="bx bxs-book-content f-50"></i>
                                                    </span>
                                                    <span>Polices</span>
                                                </h6>
                                                <!-- Step 2 end-->
                                                <fieldset>
                                                    <div class="br">
                                                        <div class="row"> 
                                                            <div class="col-sm-6"> 
                                                                <h5>Children ?   </h5>
                                                                <div class="form-group">
                                                                    <label>Can you accommodate children? </label>
                                                                    <fieldset class="form-group">
                                                                        <select class="form-control" id="basicSelect" name="children">
                                                                            <option value="0" selected="">No</option>
                                                                            <option value="1">Yes</option> 
                                                                        </select>
                                                                    </fieldset> 
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6"> 
                                                                <h5 >Pets ?   </h5>

                                                                <div class="form-group">
                                                                    <label>Do you allow pets? </label>
                                                                    <fieldset class="form-group">
                                                                        <select class="form-control" id="basicSelect" name="pets">
                                                                            <option value="0" selected="">No</option>
                                                                            <option value="1">Yes</option>
                                                                            <option value="2">Upon request</option>
                                                                        </select>
                                                                    </fieldset> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    <hr>
                                                    <div class="row">  
                                                        <div class="col-sm-6">
                                                            <div class="br"> 
                                                                <h5>Check-in  </h5> 
                                                                <div class="form-group">
                                                                    <label>Form </label>
                                                                    <fieldset class="form-group position-relative has-icon-left">
                                                                        <input type="text" class="form-control pickatime" placeholder="Select Time" value="8.00 A.M" name="check_in[]">
                                                                        <div class="form-control-position">
                                                                            <i class='bx bx-history'></i>
                                                                        </div>
                                                                    </fieldset>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>To </label>
                                                                    <fieldset class="form-group position-relative has-icon-left">
                                                                        <input type="text" class="form-control pickatime" placeholder="Select Time" value="10.00: P.M" name="check_in[]">
                                                                        <div class="form-control-position">
                                                                            <i class='bx bx-history'></i>
                                                                        </div>
                                                                    </fieldset>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6"> 
                                                            <div class="br"> 
                                                                <h5>Check-out </h5>  
                                                                <div class="form-group">
                                                                    <label>Form </label>
                                                                    <fieldset class="form-group position-relative has-icon-left">
                                                                        <input type="text" class="form-control pickatime" placeholder="Select Time" value="8.00 A.M" name="check_out[]">
                                                                        <div class="form-control-position">
                                                                            <i class='bx bx-history'></i>
                                                                        </div>
                                                                    </fieldset>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>To </label>
                                                                    <fieldset class="form-group position-relative has-icon-left">
                                                                        <input type="text" class="form-control pickatime" placeholder="Select Time" value="10.00: P.M" name="check_out[]">
                                                                        <div class="form-control-position">
                                                                            <i class='bx bx-history'></i>
                                                                        </div>
                                                                    </fieldset>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-12"> 
                                                            <div class="br">
                                                                <h5>Property Description    </h5>  
                                                                <textarea id="description" name="description"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                </fieldset>
                                                <!-- body content of step 2 end-->
                                                <!-- Step 3-->
                                                <h6>
                                                    <i class="step-icon"></i>
                                                    <span class="fonticon-wrap">
                                                        <i class=" bx bx-dollar f-50"></i>
                                                    </span>
                                                    <span>Payments</span>
                                                </h6>
                                                <!-- Step 3 end-->
                                                <!-- body content of step 3 -->
                                                <fieldset>
                                                    <div class="row">
                                                        <div class="col-sm-9"> 
                                                            <div class="br"> 
                                                                <h5>Guest Payment Options </h5>  
                                                                <h6>Can you charge credit cards at the property? </h6>  
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="d-inline-block m-r-12 mb-1">
                                                                        <fieldset>
                                                                            <div class="custom-control custom-radio">
                                                                                <input type="radio" class="custom-control-input"  id="guest_payment1"  value="0" name="guest_payment">
                                                                                <label class="custom-control-label" for="guest_payment1">Yes</label>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                    <li class="d-inline-block m-r-12 mb-1">
                                                                        <fieldset>
                                                                            <div class="custom-control custom-radio">
                                                                                <input type="radio" class="custom-control-input"    id="guest_payment2"  value="0" checked="" name="guest_payment">
                                                                                <label class="custom-control-label" for="guest_payment2">No</label>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3" style="display: none" id="show-pay">
                                                            <ul class="list-unstyled mb-0">
                                                                <li class="d-inline-block m-r-12 mb-1">
                                                                    <fieldset>
                                                                        <fieldset>
                                                                            <div class="checkbox checkbox-primary"> 
                                                                                <input type="checkbox" id="colorCheckboxfp1"  class="pay" name="payment_card[]" value="1">
                                                                                <img src="../images/payment-icons/01.png" style="width: 20%;  margin-left: 25px;">
                                                                                <label for="colorCheckboxfp1"> </label>
                                                                            </div>
                                                                        </fieldset>
                                                                    </fieldset>
                                                                </li>
                                                                <li class="d-inline-block m-r-12 mb-1">
                                                                    <fieldset>
                                                                        <div class="checkbox checkbox-primary"> 
                                                                            <input type="checkbox" id="colorCheckboxfp2" class="pay"  name="payment_card[]" value="2">
                                                                            <img src="../images/payment-icons/02.png" style="width: 20%;     margin-left: 25px;">
                                                                            <label for="colorCheckboxfp2"></label>
                                                                        </div>
                                                                    </fieldset>
                                                                </li>
                                                                <li class="d-inline-block m-r-12 mb-1">
                                                                    <fieldset>
                                                                        <div class="checkbox checkbox-primary"> 
                                                                            <input type="checkbox" id="colorCheckboxfp3" class="pay"  name="payment_card[]" value="3">
                                                                            <img src="../images/payment-icons/03.png" style="width: 20%; margin-left: 25px;">
                                                                            <label for="colorCheckboxfp3">     </label>
                                                                        </div>
                                                                    </fieldset>
                                                                </li>
                                                                <li class="d-inline-block m-r-12 mb-1">
                                                                    <fieldset>
                                                                        <div class="checkbox checkbox-primary"> 
                                                                            <input type="checkbox" id="colorCheckboxfp4"  class="pay" name="payment_card[]" value="4">
                                                                            <img src="../images/payment-icons/04.png" style="width: 20%;   margin-left: 25px;">
                                                                            <label for="colorCheckboxfp4">     </label>
                                                                        </div>
                                                                    </fieldset>
                                                                </li> 

                                                            </ul> 
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-sm-9"> 
                                                            <div class="br"> 
                                                                <h5>Commission Payments</h5>  
                                                                <h6>At the beginning of each month, we'll send you an invoice for all complete bookings in the previous month.  </h6>  

                                                                <fieldset>
                                                                    <div class="form-group">
                                                                        <label  >What name should be placed on the invoice (e.g. legal/company name)?</label>
                                                                        <input type="text" class="form-control  " placeholder="Invoice Name" name="invoice_name"   > 
                                                                    </div>
                                                                </fieldset> 
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3"> 
                                                            <div class="toast toast-translucent mr-auto ml-auto" role="alert" aria-live="assertive"   aria-atomic="true">
                                                                <div class="toast-header ">
                                                                    <center>
                                                                        <span class="mr-auto toast-title text-center">If u wont to  add your accommodation free or Pay..!</span>
                                                                    </center>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="br"> 
                                                        <div class="row"> 

                                                            <div class="col-sm-5"> 
                                                                <h5>Select your Publish methods in here ?   </h5>
                                                                <div class="form-group">
                                                                    <label>You can select the your Accommodation Publish method.</label>
                                                                    <fieldset class="form-group">
                                                                        <select class="form-control" id="months" name="months">
                                                                            <option value="0" selected=""> Select your Publish Method</option>
                                                                           
                                                                        </select>
                                                                    </fieldset> 
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4"> 
                                                                <h5 >Payment </h5>

                                                                <div class="form-group">
                                                                    <label>Fee for selected methods </label>
                                                                    <fieldset class="form-group">
                                                                        <input type="text" name="payment" id="payment" class="form-control  "  >
                                                                    </fieldset> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 mt-30">
                                                        <strong>Read all term and conditions carefully.</strong>
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <div class="checkbox checkbox-primary mt-1">
                                                                    <input type="checkbox" id="agree"   name="agree" value="1"  >
                                                                    <label for="agree" class="text-success"><b>I read all <a href="" target="_bank"> TERMS AND CONDITIONS</a> and i Agree.</b></label>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                    </div>


                                                </fieldset>
                                                <input type="hidden" name="customer_id"  value="<?php echo $CUSTOMER->id ?>">
                                                <input type="hidden" name="create"   >
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


        <!-- BEGIN: Footer-->
        <?php include './footer.php'; ?>
        <!-- END: Footer-->
        <script src="../js/jquery-2.2.4.min.js" type="text/javascript"></script> 
        <script src="app-assets/vendors/js/vendors.min.js"></script>  
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script> 
        <script src="app-assets/js/scripts/configs/vertical-menu-dark.min.js"></script>
        <script src="app-assets/js/core/app-menu.min.js"></script>
        <script src="app-assets/js/core/app.min.js"></script>
        <script src="app-assets/js/scripts/components.min.js"></script>
        <script src="app-assets/js/scripts/footer.min.js"></script>
        <script src="app-assets/js/scripts/customizer.min.js"></script> 
        <script src="app-assets/js/scripts/pickers/dateTime/pick-a-datetime.min.js"></script>
        <script src="app-assets/vendors/js/extensions/jquery.steps.min.js"></script>
        <script src="app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>

        <!-- create accommodation-->
        <script src="app-assets/js/scripts/forms/wizard-steps.min.js"></script>
        <script src="js/ajax/main-image.js" type="text/javascript"></script>
        <script src="js/ajax/publish-payment.js" type="text/javascript"></script>

        <script src="app-assets/vendors/js/pickers/pickadate/picker.js"></script>
        <script src="app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
        <script src="app-assets/vendors/js/pickers/pickadate/picker.time.js"></script>
        <script src="app-assets/vendors/js/pickers/pickadate/legacy.js"></script>
        <script src="app-assets/vendors/js/pickers/daterange/daterangepicker.js"></script>
        <script src="app-assets/js/scripts/configs/vertical-menu-dark.min.js"></script> 
         <script src="../admin-panel/plugin/sweetalert/sweetalert.min.js" type="text/javascript"></script>
        <script src="../admin-panel/js/tinymce/js/tinymce/tinymce.min.js" type="text/javascript"></script>
        <script src="js/jquery.preloader.min.js" type="text/javascript"></script>
        <!-- BEGIN: Page JS-->
        <script src="app-assets/vendors/js/forms/select/select2.full.min.js"></script>
        <script src="app-assets/js/scripts/forms/select/form-select2.min.js"></script> 
        <script src="js/ajax/zip-code.js" type="text/javascript"></script>
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

            $("#guest_payment1") // select the radio by its id
                    .change(function () { // bind a function to the change event
                        if ($(this).is(":checked")) { // check if the radio is checked
                            $("#show-pay").show();
                            $(".pay").prop("checked", false);
                            $("#colorCheckboxfp1").prop("checked", true);
                            $("#colorCheckboxfp2").prop("checked", true);

                        }
                    });
            $("#guest_payment2") // select the radio by its id
                    .change(function () { // bind a function to the change event
                        if ($(this).is(":checked")) { // check if the radio is checked
                            $("#show-pay").hide();
                            $(".pay").prop("checked", false);
                        }
                    }); 
        </script>
    </body>

</html>