<!DOCTYPE html>
<?php
include '../class/include.php';
include './auth.php';

$id = '';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$ACCOMMODATION = new Accommodation($id);
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
        <meta name="author" content="MyTravelPartner.lk">
        <title>Edit Accommodation - MyTravelPartner.lk</title>
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

        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/select/select2.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/colors.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/components.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.min.css">
        <link href="assets/css/preloader.css" rel="stylesheet" type="text/css"/>
        <link href="plugin/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.min.css">

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
                                <h5 class="content-header-title float-left pr-1 mb-0">Accommodation</h5>
                                <div class="breadcrumb-wrapper col-12">
                                    <ol class="breadcrumb p-0 mb-0">
                                        <li class="breadcrumb-item"><a href="index.php"><i class="bx bx-home-alt"></i></a>
                                        </li> 
                                        <li class="breadcrumb-item active">Edit Accommodation
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

                                                <span>Edit Accommodation - <em class="text-danger">" <?php echo $ACCOMMODATION->title ?> " </em></span>
                                            </h3>
                                            <div class="card-body">


                                                <fieldset>
                                                    <div class="br">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <h5>Edit Your Property Details - <small class="text-success">Start by telling us your property type, property's name and Star Rating. </small></h5>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label>What's the name of your property? </label>
                                                                    <fieldset class="form-group">
                                                                        <select class="form-control" id="type" name="type">

                                                                            <option value=""> Select your property type</option>
                                                                            <?php
                                                                            foreach ($ACCOMMODATION_TYPE->all() as $accommodation_type) {
                                                                                if ($accommodation_type['id'] == $ACCOMMODATION->type) {
                                                                                    ?>

                                                                                    <option value="<?php echo $accommodation_type['id'] ?>" selected=""><?php echo $accommodation_type['title'] ?></option> 
                                                                                <?php } else { ?>
                                                                                    <option value="<?php echo $accommodation_type['id'] ?>"><?php echo $accommodation_type['title'] ?></option> 
                                                                                    <?php
                                                                                }
                                                                            }
                                                                            ?>
                                                                        </select>
                                                                    </fieldset> 
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label>What's the name of your property? </label>
                                                                    <input type="text" class="form-control" name="title" id="title" placeholder="Enter Your property name" value="<?php echo $ACCOMMODATION->title ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6"> 
                                                                <label>Another Web Sites?</label>
                                                                <ul class="list-unstyled mb-0">

                                                                    <li class="d-inline-block mr-2 mb-1">
                                                                        <fieldset>
                                                                            <div class="checkbox checkbox-primary">
                                                                                <input type="checkbox" id="colorCheckbox1"   name="booking_com" value="1" <?php
                                                                                if ($ACCOMMODATION->booking_com == 1) {
                                                                                    echo 'checked';
                                                                                }
                                                                                ?>>
                                                                                <label for="colorCheckbox1">Booking.com</label>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>


                                                                    <li class="d-inline-block mr-2 mb-1">
                                                                        <fieldset>
                                                                            <div class="checkbox checkbox-primary">
                                                                                <input type="checkbox" id="colorCheckbox2" name="tripadvisor" value="1"  <?php
                                                                                if ($ACCOMMODATION->tripadvisor == 1) {
                                                                                    echo 'checked';
                                                                                }
                                                                                ?>>
                                                                                <label for = "colorCheckbox2">Tripadvisor</label>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                    <li class = "d-inline-block mr-2 mb-1">
                                                                        <fieldset>
                                                                            <div class = "checkbox checkbox-primary">
                                                                                <input type = "checkbox" id = "colorCheckbox3" name = "agoda" value = "1" <?php
                                                                                if ($ACCOMMODATION->agoda == 1) {
                                                                                    echo 'checked';
                                                                                }
                                                                                ?>>
                                                                                <label for = "colorCheckbox3">Agoda</label>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                    <li class = "d-inline-block mr-2 mb-1">
                                                                        <fieldset>
                                                                            <div class = "checkbox checkbox-primary">
                                                                                <input type = "checkbox" id = "colorCheckbox4" name = "expedia" value = "1" <?php
                                                                                if ($ACCOMMODATION->expedia == 1) {
                                                                                    echo 'checked';
                                                                                }
                                                                                ?>>
                                                                                <label for = "colorCheckbox4">Expedia</label>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class = "col-sm-6">
                                                                <label>Star rating</label>
                                                                <ul class = "list-unstyled mb-0">
                                                                    <li class = "d-inline-block m-r-12 mb-1">
                                                                        <fieldset>
                                                                            <div class = "custom-control custom-radio">
                                                                                <input type = "radio" class = "custom-control-input" name = "star_rating" id = "customRadio0" value = "0" <?php
                                                                                if ($ACCOMMODATION->star_rating == 0) {
                                                                                    echo 'checked';
                                                                                }
                                                                                ?>>
                                                                                <label class = "custom-control-label" for = "customRadio0">Unstart</label>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                    <li class = "d-inline-block m-r-12 mb-1">
                                                                        <fieldset>
                                                                            <div class = "custom-control custom-radio">
                                                                                <input type = "radio" class = "custom-control-input" name = "star_rating" id = "customRadio1" value = "1"<?php
                                                                                if ($ACCOMMODATION->star_rating == 1) {
                                                                                    echo 'checked';
                                                                                }
                                                                                ?>>
                                                                                <label class = "custom-control-label" for = "customRadio1">1 <i class = "bx bx-star f-12"></i></label>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                    <li class = "d-inline-block m-r-12 mb-1">
                                                                        <fieldset>
                                                                            <div class = "custom-control custom-radio">
                                                                                <input type = "radio" class = "custom-control-input" name = "star_rating" id = "customRadio2" value = "2" <?php
                                                                                if ($ACCOMMODATION->star_rating == 2) {
                                                                                    echo 'checked';
                                                                                }
                                                                                ?>>
                                                                                <label class = "custom-control-label" for = "customRadio2">2 <i class = "bx bx-star f-12"></i><i class = "bx bx-star f-12"></i></label>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                    <li class = "d-inline-block m-r-12 mb-1">
                                                                        <fieldset>
                                                                            <div class = "custom-control custom-radio">
                                                                                <input type = "radio" class = "custom-control-input" name = "star_rating" id = "customRadio3" value = "3" <?php
                                                                                if ($ACCOMMODATION->star_rating == 3) {
                                                                                    echo 'checked';
                                                                                }
                                                                                ?>>
                                                                                <label class = "custom-control-label" for = "customRadio3">3 <i class = "bx bx-star f-12"></i><i class = "bx bx-star f-12"></i><i class = "bx bx-star f-12"></i></label>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                    <li class = "d-inline-block m-r-12 mb-1">
                                                                        <fieldset>
                                                                            <div class = "custom-control custom-radio">
                                                                                <input type = "radio" class = "custom-control-input" name = "star_rating" id = "customRadio4" value = "4" <?php
                                                                                if ($ACCOMMODATION->star_rating == 4) {
                                                                                    echo 'checked';
                                                                                }
                                                                                ?>>
                                                                                <label class = "custom-control-label" for = "customRadio4">4 <i class = "bx bx-star f-12"></i><i class = "bx bx-star f-12"></i><i class = "bx bx-star f-12"></i><i class = "bx bx-star f-12"></i></label>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                    <li class = "d-inline-block m-r-12 mb-1">
                                                                        <fieldset>
                                                                            <div class = "custom-control custom-radio">
                                                                                <input type = "radio" class = "custom-control-input" name = "star_rating" id = "customRadio5" value = "5" <?php
                                                                                if ($ACCOMMODATION->star_rating == 5) {
                                                                                    echo 'checked';
                                                                                }
                                                                                ?>>
                                                                                <label class = "custom-control-label" for = "customRadio5">5 <i class = "bx bx-star f-12"></i><i class = "bx bx-star f-12"></i><i class = "bx bx-star f-12"></i><i class = "bx bx-star f-12"></i><i class = "bx bx-star f-12"></i></label>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>


                                                    <div class = "br">
                                                        <div class = "row">
                                                            <div class = "col-12">
                                                                <h5>Where's your property located? <small class="text-success">Edit your Property located details</small> </h5>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label>Street address</label>
                                                                    <input type="text" class="form-control" id="address_1" name="address_1" placeholder="Street name" value="<?php echo $ACCOMMODATION->address_1 ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label>Address Line 2</label>
                                                                    <input type="text" class="form-control" id="address_2" name="address_2" placeholder=" Unit Number, suite floor, Bulding" value="<?php echo $ACCOMMODATION->address_2 ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>city</label>
                                                                    <select class="select2 form-control" name="city" id="city">
                                                                        <option value=""  >Select Your City</option>
                                                                        <?php
                                                                        $CITY = new City(NULL);
                                                                        foreach ($CITY->all() as $city) {
                                                                            if ($city['id'] == $ACCOMMODATION->city) {
                                                                                ?>
                                                                                <option value="<?php echo $city['id'] ?>" selected=""><?php echo $city['name'] ?></option>

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
                                                                    <input type="text" class="form-control" name="zip_code" id="zip_code" placeholder="Enter Your Zip code" value="<?php echo $ACCOMMODATION->zip_code ?>">
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
                                                                    <input type="text" class="form-control" placeholder="Contact name" id="contact_name" name="contact_name" value="<?php echo $ACCOMMODATION->contact_name ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label>Contact number </label>
                                                                    <input type="text" class="form-control" name="mobile_number_1" id="mobile_number_1" placeholder="07+ 123 4567" value="<?php echo $ACCOMMODATION->mobile_number_1 ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label>  Alternative contact number (optional) </label>
                                                                    <input type="text" class="form-control" placeholder=" 07+ 123 4567" name="mobile_number_2" id="mobile_number_2" value="<?php echo $ACCOMMODATION->mobile_number_2 ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label>Contact Email </label>
                                                                    <input type="email" class="form-control" placeholder="Contact email" id="contact_name" name="contact_email" value="<?php echo $ACCOMMODATION->email ?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="br mb-2">
                                                        <div class="row">  
                                                            <div class="col-sm-4" id="show-btn"> 
                                                                <a href="#" id="delete-hotel-img"><i class="bx bxs-trash delete-btn-p" style="display: none"></i></a>
                                                                <input type="hidden" id="del-hotel" name="image_name" >  
                                                                <img src="../upload/accommodation/gallery/thumb/<?php echo $ACCOMMODATION->image_name ?>" id="main-img" style="box-shadow: 0 0 0 2px #0071c2;"/>

                                                            </div> 
                                                            <div class="col-sm-4"  > 
                                                                <label>Change Your Property Main Image</label>
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input" id="main_img" name="image_name">
                                                                    <label class="custom-file-label" for="main_img">Property main image</label>
                                                                </div> 
                                                            </div>  
                                                        </div> 
                                                    </div>
                                                    <input type="hidden" name="action" value="upload-add-image">
                                                </fieldset>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card icon-tab">

                                        <div class="card-content mt-2">
                                            <h3 class="text-center mt-1">

                                                <span>Facility and Services</span>
                                            </h3>
                                            <div class="card-body">
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
                                                                            <option value="0" <?php
                                                                            if ($ACCOMMODATION->parking == 0) {
                                                                                echo 'selected';
                                                                            }
                                                                            ?> >No</option>
                                                                            <option value="1" <?php
                                                                            if ($ACCOMMODATION->parking == 1) {
                                                                                echo 'selected';
                                                                            }
                                                                            ?> >Yes, Free</option>
                                                                            <option value="2" <?php
                                                                            if ($ACCOMMODATION->parking == 2) {
                                                                                echo 'selected';
                                                                            }
                                                                            ?> >Yes, Paid</option>
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
                                                                            <option value="0" <?php
                                                                            if ($ACCOMMODATION->breakfast == 0) {
                                                                                echo 'selected';
                                                                            }
                                                                            ?> >No</option>
                                                                            <option value="1" <?php
                                                                            if ($ACCOMMODATION->breakfast == 1) {
                                                                                echo 'selected';
                                                                            }
                                                                            ?> >Yes, It is included in the price</option>
                                                                            <option value="2" <?php
                                                                            if ($ACCOMMODATION->breakfast == 2) {
                                                                                echo 'selected';
                                                                            }
                                                                            ?> >It is optional</option>
                                                                        </select>
                                                                    </fieldset> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <hr>
                                                    <div class="br">
                                                        <div class="row dataTable"> 
                                                            <div class="col-md-12">
                                                                <h5>Facilities  </h5>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label>Facilities That Are Popular With Guests</label>
                                                            </div>
                                                            <?php
                                                            foreach ($FACILITY->all() as $key => $facility) {
                                                                ?>
                                                                <div class="col-md-3 mb-1 ">
                                                                    <fieldset>
                                                                        <div class="checkbox checkbox-primary">
                                                                            <input type="checkbox" id="colorCheckboxf<?php echo $facility['id'] ?>" class="add-facility" name="facility"   data-id="<?php echo $facility['id'] ?>" acc_id="<?php echo $id ?>"  value="<?php echo $facility['id'] ?>" 
                                                                            <?php
                                                                            foreach (AccommodationFacility::getAcAccommodationFacilityById($id) as $facilities) {

                                                                                if ($facilities['facility_id'] == $facility['id']) {
                                                                                    echo 'checked';
                                                                                }
                                                                            }
                                                                            ?>
                                                                                   >
                                                                            <label for="colorCheckboxf<?php echo $facility['id'] ?>"><?php echo $facility['title'] ?></label>
                                                                        </div>
                                                                    </fieldset>
                                                                </div>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                </fieldset> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card icon-tab">

                                        <div class="card-content mt-2">
                                            <h3 class="text-center mt-1">

                                                <span>Polices</span>
                                            </h3>
                                            <div class="card-body">
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
                                                                            <option value="0"<?php
                                                                            if ($ACCOMMODATION->children == 0) {
                                                                                echo 'selected';
                                                                            }
                                                                            ?> >No</option>
                                                                            <option value="1" <?php
                                                                            if ($ACCOMMODATION->breakfast == 1) {
                                                                                echo 'selected';
                                                                            }
                                                                            ?> >Yes</option> 
                                                                        </select>
                                                                    </fieldset> 
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6"> 
                                                                <h5 >Pets ?   </h5>

                                                                <div class="form-group">
                                                                    <label>Do you allow pets?? </label>
                                                                    <fieldset class="form-group">
                                                                        <select class="form-control" id="basicSelect" name="pets">
                                                                            <option value="0" <?php
                                                                            if ($ACCOMMODATION->pets == 0) {
                                                                                echo 'selected';
                                                                            }
                                                                            ?> >No</option>
                                                                            <option value="1" <?php
                                                                            if ($ACCOMMODATION->pets == 1) {
                                                                                echo 'selected';
                                                                            }
                                                                            ?> >Yes</option>
                                                                            <option value="2" <?php
                                                                            if ($ACCOMMODATION->pets == 2) {
                                                                                echo 'selected';
                                                                            }
                                                                            ?> >Upon request</option>
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
                                                                        <?php
                                                                        foreach (explode(",", $ACCOMMODATION->check_in) as $key => $check_in) {
                                                                            if ($key == 0) {
                                                                                ?>
                                                                                <input type="text" class="form-control pickatime" placeholder="Select Time" value="<?php echo $check_in ?>" name="check_in[]" >
                                                                                <?php
                                                                            }
                                                                        }
                                                                        ?>
                                                                        <div class="form-control-position">
                                                                            <i class='bx bx-history'></i>
                                                                        </div>
                                                                    </fieldset>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>To </label>
                                                                    <fieldset class="form-group position-relative has-icon-left">
                                                                        <?php
                                                                        foreach (explode(",", $ACCOMMODATION->check_in) as $keys => $check_in) {
                                                                            if ($keys == 1) {
                                                                                ?>
                                                                                <input type="text" class="form-control pickatime" placeholder="Select Time" value="<?php echo $check_in ?>" name="check_in[]">
                                                                                <?php
                                                                            }
                                                                        }
                                                                        ?>
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
                                                                        <?php
                                                                        foreach (explode(",", $ACCOMMODATION->check_out) as $key => $check_out) {
                                                                            if ($key == 0) {
                                                                                ?>
                                                                                <input type="text" class="form-control pickatime" placeholder="Select Time" value="<?php echo $check_out ?>" name="check_out[]">
                                                                                <?php
                                                                            }
                                                                        }
                                                                        ?>
                                                                        <div class="form-control-position">
                                                                            <i class='bx bx-history'></i>
                                                                        </div>
                                                                    </fieldset>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>To </label>
                                                                    <fieldset class="form-group position-relative has-icon-left">
                                                                        <?php
                                                                        foreach (explode(",", $ACCOMMODATION->check_out) as $key => $check_out) {
                                                                            if ($key == 1) {
                                                                                ?>
                                                                                <input type="text" class="form-control pickatime" placeholder="Select Time" value="<?php echo $check_out ?>" name="check_out[]">
                                                                                <?php
                                                                            }
                                                                        }
                                                                        ?>
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
                                                                <textarea id="description" name="description"><?php echo $ACCOMMODATION->description ?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                </fieldset> 

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card icon-tab"> 
                                        <div class="card-content mt-2">
                                            <h3 class="text-center mt-1">

                                                <span>Payment Details</span>
                                            </h3>
                                            <div class="card-body">

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
                                                                                <input type="radio" class="custom-control-input"  id="guest_payment1"  value="1" name="guest_payment" <?php
                                                                                if ($ACCOMMODATION->guest_payment == 1) {
                                                                                    echo 'checked';
                                                                                }
                                                                                ?>>
                                                                                <label class="custom-control-label" for="guest_payment1">Yes</label>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                    <li class="d-inline-block m-r-12 mb-1">
                                                                        <fieldset>
                                                                            <div class="custom-control custom-radio">
                                                                                <input type="radio" class="custom-control-input"    id="guest_payment2"  value="0"  name="guest_payment" <?php
                                                                                if ($ACCOMMODATION->guest_payment == 0) {
                                                                                    echo 'checked';
                                                                                }
                                                                                ?>>
                                                                                <label class="custom-control-label" for="guest_payment2">No</label>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-3" id="show-pay">

                                                            <ul class="list-unstyled mb-0">

                                                                <li class="d-inline-block m-r-12 mb-1">
                                                                    <fieldset>
                                                                        <fieldset>
                                                                            <div class="checkbox checkbox-primary"> 
                                                                                <input type="checkbox" id="colorCheckboxfp1"   class="pay" name="payment_card[]" value="1"  <?php
                                                                                foreach (explode(",", $ACCOMMODATION->payment_card) as $key => $payment) {
                                                                                    if ($payment == 1) {
                                                                                        echo 'checked';
                                                                                    }
                                                                                }
                                                                                ?>>
                                                                                <img src="../images/payment-icons/01.png" style="width: 20%;  margin-left: 25px;">
                                                                                <label for="colorCheckboxfp1"> </label>
                                                                            </div>
                                                                        </fieldset>
                                                                    </fieldset>
                                                                </li>

                                                                <li class="d-inline-block m-r-12 mb-1">
                                                                    <fieldset>
                                                                        <div class="checkbox checkbox-primary"> 
                                                                            <input type="checkbox" id="colorCheckboxfp2"  class="pay"  name="payment_card[]" value="2"  <?php
                                                                            foreach (explode(",", $ACCOMMODATION->payment_card) as $key => $payment) {
                                                                                if ($payment == 2) {
                                                                                    echo 'checked';
                                                                                }
                                                                            }
                                                                            ?>>
                                                                            <img src="../images/payment-icons/02.png" style="width: 20%;     margin-left: 25px;">
                                                                            <label for="colorCheckboxfp2"></label>
                                                                        </div>
                                                                    </fieldset>
                                                                </li>

                                                                <li class="d-inline-block m-r-12 mb-1">
                                                                    <fieldset>
                                                                        <div class="checkbox checkbox-primary"> 
                                                                            <input type="checkbox" id="colorCheckboxfp3"  class="pay" name="payment_card[]" value="3" <?php
                                                                            foreach (explode(",", $ACCOMMODATION->payment_card) as $key => $payment) {
                                                                                if ($payment == 3) {
                                                                                    echo 'checked';
                                                                                }
                                                                            }
                                                                            ?>>
                                                                            <img src="../images/payment-icons/03.png" style="width: 20%; margin-left: 25px;">
                                                                            <label for="colorCheckboxfp3">     </label>
                                                                        </div>
                                                                    </fieldset>
                                                                </li>

                                                                <li class="d-inline-block m-r-12 mb-1">
                                                                    <fieldset>
                                                                        <div class="checkbox checkbox-primary"> 
                                                                            <input type="checkbox" id="colorCheckboxfp4"  class="pay" name="payment_card[]" value="4" <?php
                                                                            foreach (explode(",", $ACCOMMODATION->payment_card) as $key => $payment) {
                                                                                if ($payment == 4) {
                                                                                    echo 'checked';
                                                                                }
                                                                            }
                                                                            ?>>
                                                                            <img src="../images/payment-icons/04.png" style="width: 20%;   margin-left: 25px;" for="colorCheckboxfp4">
                                                                            <label for="colorCheckboxfp4">     </label>
                                                                        </div>
                                                                    </fieldset>
                                                                </li> 
                                                            </ul> 

                                                        </div>

                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-sm-12"> 
                                                            <div class="br"> 
                                                                <h5>Commission Payments</h5>  
                                                                <h6>At the beginning of each month, we'll send you an invoice for all complete bookings in the previous month. </h6>

                                                                <fieldset>
                                                                    <div class = "form-group">
                                                                        <label >What name should be placed on the invoice (e.g. legal/company name)?</label>
                                                                        <input type = "text" class = "form-control  " placeholder = "Invoice Name" name = "invoice_name" value="<?php echo $ACCOMMODATION->invoice_name ?>" >
                                                                    </div>
                                                                </fieldset> 
                                                            </div>
                                                        </div> 
                                                    </div>                                                     
                                                </fieldset> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card icon-tab"> 
                                        <div class="card-content mt-2">
                                            <h3 class="text-center mt-1">
                                                <span>Other Details</span>
                                            </h3>
                                            <div class="card-body"> 
                                                <fieldset> 
                                                    <div class="row">
                                                        <div class="col-sm-12"> 
                                                            <div class="br"> 

                                                                <div class ="form-group">
                                                                    <label >add this map code.</label>
                                                                    <input type = "text" class = "form-control  "  name = "map" value="<?php echo $ACCOMMODATION->map ?>"  placeholder="Enter the map enberd code.">
                                                                </div>

                                                                <div class="row">  
                                                                    <div class="col-sm-4"  > 
                                                                        <label>Change Your Property Map Image</label>
                                                                        <div class="custom-file">
                                                                            <input type="file" class="custom-file-input"  name="map_image"  >
                                                                            <label class="custom-file-label" for="main_img">Property map image</label>
                                                                        </div> 
                                                                    </div> 
                                                                    <div class="col-sm-4"  > 
                                                                        <?php
                                                                        if (!empty($ACCOMMODATION->map_image)) {
                                                                            ?>

                                                                        <img src="../upload/accommodation/map/<?php echo $ACCOMMODATION->map_image ?>"  width="100%"style="box-shadow: 0 0 0 2px #0071c2;"/>
                                                                        <?php } ?>
                                                                    </div> 
                                                                     
                                                                </div> 

                                                                 
                                                                <div class ="form-group mt-2" > 
                                                                    <label >Location Details   </label >
                                                                    <textarea id="location" name="location"><?php echo $ACCOMMODATION->location ?></textarea> 
                                                                </div>

                                                                <div class="col-sm-6" style="margin-top: 20px;">  
                                                                    <h6 class="text-danger">Activate or Deactivate Accommodation Company</h6>  
                                                                    <div class="checkbox checkbox-primary mt-1">
                                                                        <input type="checkbox" id="is_active"   name="isPublished" value="1" <?php
                                                                        if ($ACCOMMODATION->isPublished == 1) {
                                                                            echo 'checked=""';
                                                                        }
                                                                        ?>>
                                                                        <label for="is_active">Is Active / Deactivate .</label>
                                                                    </div> 
                                                                </div>
                                                                <div class="mb-2">
                                                                    <button class="btn btn-warning mb-1  " type="button"  style="float: right " id="update-location">
                                                                        <span class=" spinner-border-sm" role="status" aria-hidden="true"></span>
                                                                        Update
                                                                    </button>  
                                                                </div> 
                                                            </div>
                                                        </div> 
                                                    </div> 
                                                </fieldset> 
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <input type="hidden"   name="old-image_name" value="<?php echo $ACCOMMODATION->image_name ?>">
                                <input type="hidden" value="<?php echo $id ?>" name="id">
                                <input type = "hidden" name = "update_location" > 
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <!--END: Content-->

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
        <script src="js/ajax/accommodation.js" type="text/javascript"></script>
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
        <script src="js/jquery.preloader.min.js" type="text/javascript"></script>
        <script src="app-assets/vendors/js/forms/select/select2.full.min.js"></script>
        <script src="app-assets/js/scripts/forms/select/form-select2.min.js"></script> 

        <script src="app-assets/js/scripts/pickers/dateTime/pick-a-datetime.min.js"></script>
        <script src="js/tinymce/js/tinymce/tinymce.min.js" type="text/javascript"></script>
        <script src="plugin/sweetalert/sweetalert.min.js" type="text/javascript"></script>

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
            tinymce.init({
                selector: "#location",
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