<!DOCTYPE html>
<?php
include '../class/include.php';
include './auth.php';
$id = '';
$id = $_GET['id'];
?>
<html class="loading" lang="en" data-textdirection="ltr">
    <!-- BEGIN: Head-->

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="author" content="MyTravelPartner.lk">
        <title>Create Rent a car - MyTravelPartner.lk </title>
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
        <!-- END: Theme CSS-->
        <link href="assets/css/preloader.css" rel="stylesheet" type="text/css"/>

        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/wizard.min.css">
        <link href="plugin/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <!-- END: Custom CSS-->
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
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
                                        <li class="breadcrumb-item active">Create rent a car company vehicles
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
                                                            <h5>Fill Your Rent a Car Details - <small class="text-success">Vehicle type,and add the main title for the rent a car for customer. </small></h5>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label>Vehicle Type</label>
                                                                <select class="select2 form-control" name="type" id="type">
                                                                    <option value="">Choose Vehicle Type</option>
                                                                    <?php
                                                                    $VEHICLE_TYPE = new VehicleType(NULL);
                                                                    foreach ($VEHICLE_TYPE->all() as $vehicle_type) {
                                                                        ?>
                                                                        <option value="<?php echo $vehicle_type['id'] ?>"><?php echo $vehicle_type['title'] ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label>Title</label>
                                                                <input type="text" class="form-control" placeholder="Title" name="title" id="title">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label>Registration Number</label>
                                                                <input type="text" class="form-control" placeholder="Enter Registration Number" id="reg_number" name="reg_number">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label>Registration Year</label>
                                                                <input type="text" class="form-control" placeholder="Enter Registration Year" id="reg_year" name="reg_year">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label>fuel type</label>
                                                                <select class="select2 form-control" id="fuel_type" name="fuel_type">
                                                                    <option value=""> -- select Fuel Type --</option>
                                                                    <option value="Diesel">Diesel</option>
                                                                    <option value="Electrical">Electrical</option>
                                                                    <option value="Petrol">Petrol</option>
                                                                    <option value="Hybrid">Hybrid</option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">

                                                        </div> 
                                                    </div>
                                                </div>
                                                <hr> 
                                                <fieldset>
                                                    <div class="br">
                                                        <div class="row"> 
                                                            <div class="col-12">
                                                                <h5>Your Contact Details - <small class="text-success"> If you can add your contact details. </small></h5>
                                                            </div>
                                                        </div>
                                                        <div class="row">  

                                                            <div class="col-sm-4 col-md-2">
                                                                <div class="form-group">
                                                                    <label>Contact Name</label>
                                                                    <input type="text" class="form-control" placeholder="Enter Contact name" value="<?php echo $CUSTOMER->full_name ?>" name="contact_name" id="contact_name">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4 col-md-3">
                                                                <div class="form-group">
                                                                    <label>Email</label>
                                                                    <input type="email" class="form-control" placeholder="Enter your email" value="<?php echo $CUSTOMER->email ?>" name="email" id="email">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4  col-md-3">
                                                                <div class="form-group">
                                                                    <label> Contact number</label>
                                                                    <input type="text" class="form-control mobile_number" placeholder="Enter Contact number " value="<?php echo $CUSTOMER->phone_number ?>" id="contact_number" name="contact_number">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4  col-md-4">
                                                                <div class="form-group">
                                                                    <label>Alternative contact number (optional) </label>
                                                                    <input type="text" class="form-control mobile_number" placeholder="Enter Contact number " id="contact_number_2" name="contact_number_2">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <hr>

                                                <div class="br mb-2">
                                                    <div class="row">  

                                                        <div class="col-sm-6" id="show-btn"> 
                                                            <label>Front side of your driving license</label>
                                                            <div class="custom-file" style="width: 76%;">
                                                                <input type="file" class="custom-file-input" id="licen_front" name="licen_front" >
                                                                <label class="custom-file-label" for="licen_front">Upload Front side license Image </label>
                                                            </div>  
                                                            <input type="hidden" id="licen_front_image_name" name="licen_front_image_name" >

                                                            <img src="app-assets/images/rent-car/front.jpg" id="licen_front_img" style="box-shadow: 0 0 0 2px #0071c2;margin-top: 10px;"/>
                                                            <input type="hidden"   name="selected_option_1" value="licen_front" >
                                                        </div> 
                                                        <div class="col-sm-6" id="show-btn"> 
                                                            <label>Back side of your driving license</label>
                                                            <div class="custom-file" style="width: 76%;">
                                                                <input type="file" class="custom-file-input" id="licen_back" name="licen_back">
                                                                <label class="custom-file-label" for="licen_back">Upload Back side license Image</label>
                                                            </div> 

                                                            <input type="hidden" id="licen_back_image_name" name="licen_back_image_name">
                                                            <img src="app-assets/images/rent-car/back.jpg" id="licen_back_img" style="box-shadow: 0 0 0 2px #0071c2;margin-top: 10px;"/>
                                                            <input type="hidden"   name="selected_option" value="licen_back" >
                                                        </div> 

                                                    </div> 
                                                </div>

                                                <div class="br mb-2">
                                                    <div class="row">  
                                                        <div class="col-sm-4" id="show-btn"> 
                                                            <a href="#" id="delete-rent-car-img"><i class="bx bxs-trash delete-btn-p" style="display: none"></i></a>
                                                            <input type="hidden" id="del-vehicle" name="image_name">
                                                            <img src="app-assets/images/rent-car.jpg" id="main-img" style="box-shadow: 0 0 0 2px #0071c2;"/>

                                                        </div> 
                                                        <div class="col-sm-4"  > 
                                                            <label>Your Vehicle Main Image</label>
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" id="main_img_rent_car" name="image_name">
                                                                <label class="custom-file-label" for="main_img_rent_car">Vehicle main image</label>
                                                            </div> 
                                                        </div>  
                                                    </div> 
                                                </div>

                                                <input type="hidden" name="action" value="upload-add-image-rent-car">

                                                <hr> 
                                                <div class="br mb-2"  >
                                                    <div class="row"> 
                                                        <div class="col-12">
                                                            <h5>Add Your Vehicle  Images <small class="text-danger">(Please add more than 5 Images)</small></h5>
                                                        </div>
                                                    </div>
                                                    <div class="row"> 
                                                        <div class="col-sm-4">
                                                            <div class="">
                                                                <label>Your Vehicle Images</label>
                                                                <div class="custom-file">
                                                                    <input type="hidden" name="option" value="upload-add-image">
                                                                    <input type="file" class="custom-file-input" id="add-vehicle-img" name="image" >
                                                                    <label class="custom-file-label" for="add-room-img">Add Your Vehicle images</label>

                                                                </div>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                    <div class="row" id="image-list">

                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                                <div class="card icon-tab">

                                    <div class="card-content mt-2">
                                        <div class="card-body">
                                            <fieldset>
                                                <div class="br mb-2">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h5>Condition & Facilities - <small class="text-success">Vehicle type,and add the main title for the rent a car for customer. </small></h5>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label>Vehicle Budget</label>
                                                                <select class="select2 form-control" name="budget" id="budget">
                                                                    <option value="1">Vehicle Budget</option>
                                                                    <option value="2">Economy</option>
                                                                    <option value="3">Compact(mid sized car)</option>
                                                                    <option value="4">Premium(High luxurious)</option>
                                                                    <option value="5">Luxurious</option>

                                                                </select>
                                                            </div>
                                                        </div> 
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <label>Air Condition</label><br>
                                                                <div class="row pl-2 pt-1">
                                                                    <ul class="list-unstyled mb-0">
                                                                        <li class="d-inline-block m-r-12 mb-1">
                                                                            <fieldset>
                                                                                <div class="custom-control custom-radio">
                                                                                    <input type="radio" class="custom-control-input"  id="air_condition"  value="1" checked="" name="air_condition">
                                                                                    <label class="custom-control-label" for="air_condition">Yes</label>
                                                                                </div>
                                                                            </fieldset>
                                                                        </li>
                                                                        <li class="d-inline-block m-r-12 mb-1">
                                                                            <fieldset>
                                                                                <div class="custom-control custom-radio">
                                                                                    <input type="radio" class="custom-control-input"    id="air_condition2"  value="0"  name="air_condition">
                                                                                    <label class="custom-control-label" for="air_condition2">No</label>
                                                                                </div>
                                                                            </fieldset>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <label> Transmission (Gear type) </label><br>
                                                                <div class="row pl-2 pt-1">
                                                                    <ul class="list-unstyled mb-0">
                                                                        <li class="d-inline-block m-r-12 mb-1">
                                                                            <fieldset>
                                                                                <div class="custom-control custom-radio">
                                                                                    <input type="radio" class="custom-control-input"  id="transmission"  value="1" name="transmission">
                                                                                    <label class="custom-control-label" for="transmission"> Automatic </label>
                                                                                </div>
                                                                            </fieldset>
                                                                        </li>
                                                                        <li class="d-inline-block m-r-12 mb-1">
                                                                            <fieldset>
                                                                                <div class="custom-control custom-radio">
                                                                                    <input type="radio" class="custom-control-input"    id="transmission1"  value="0" checked="" name="transmission">
                                                                                    <label class="custom-control-label" for="transmission1">Manual</label>
                                                                                </div>
                                                                            </fieldset>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <div class="form-group">
                                                                <label>Number of Passengers</label>
                                                                <div class="form-group"> 
                                                                    <div class="d-inline-block mb-1 mr-1">
                                                                        <input type="number" class="touchspin"  value="1" name="num_passengers" id="num_passengers" min="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <div class="form-group">
                                                                <label>Number of Baggages</label>
                                                                <div class="form-group"> 
                                                                    <div class="d-inline-block mb-1 mr-1">
                                                                        <input type="number" class="touchspin" value="1" name="num_baggaes" id="num_baggaes" min="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <div class="form-group">
                                                                <label>Number of Doors</label>
                                                                <div class="form-group"> 
                                                                    <div class="d-inline-block mb-1 mr-1">
                                                                        <input type="number" class="touchspin" value="1" name="num_doors" id="num_doors" min="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label>Vehicle Location</label>
                                                                <select class="select2 form-control" name="city" id="city">
                                                                    <option value=""  >Select Your City</option>
                                                                    <?php
                                                                    $CITY = new City(NULL);
                                                                    foreach ($CITY->all() as $city) {
                                                                        if ($city['id'] == $RENT_CAR_COMPANY->city) {
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


                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <label> Airport Transfer </label><br>
                                                                <div class="row pl-2 pt-1">
                                                                    <ul class="list-unstyled mb-0">
                                                                        <li class="d-inline-block m-r-12 mb-1">
                                                                            <fieldset>
                                                                                <div class="custom-control custom-radio">
                                                                                    <input type="radio" class="custom-control-input"  id="airport_transfer" checked=""  value="1" name="airport_transfer">
                                                                                    <label class="custom-control-label" for="airport_transfer"> Available  </label>
                                                                                </div>
                                                                            </fieldset>
                                                                        </li>
                                                                        <li class="d-inline-block m-r-12 mb-1">
                                                                            <fieldset>
                                                                                <div class="custom-control custom-radio">
                                                                                    <input type="radio" class="custom-control-input"    id="airport_transfer1"  value="0"   name="airport_transfer">
                                                                                    <label class="custom-control-label" for="airport_transfer1">Not Available</label>
                                                                                </div>
                                                                            </fieldset>
                                                                        </li>

                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <label> Wedding Hire </label><br>
                                                                <div class="row pl-2 pt-1">
                                                                    <ul class="list-unstyled mb-0">
                                                                        <li class="d-inline-block m-r-12 mb-1">
                                                                            <fieldset>
                                                                                <div class="custom-control custom-radio">
                                                                                    <input type="radio" class="custom-control-input"  id="wedding_cars"  checked=""  value="1" name="wedding_cars">
                                                                                    <label class="custom-control-label" for="wedding_cars"> Available  </label>
                                                                                </div>
                                                                            </fieldset>
                                                                        </li>
                                                                        <li class="d-inline-block m-r-12 mb-1">
                                                                            <fieldset>
                                                                                <div class="custom-control custom-radio">
                                                                                    <input type="radio" class="custom-control-input"    id="wedding_cars1"  value="0" name="wedding_cars">
                                                                                    <label class="custom-control-label" for="wedding_cars1">Not Available</label>
                                                                                </div>
                                                                            </fieldset>
                                                                        </li>

                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <hr>

                                                <div class="br">
                                                    <div class="row"> 
                                                        <div class="col-md-12">
                                                            <h5>Features  </h5>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label>Features That Are Popular With Guests</label>
                                                        </div>
                                                        <?php
                                                        $FEATURE = new Features(NULL);
                                                        foreach ($FEATURE->all() as $key => $features) {
                                                            ?>
                                                            <div class="col-md-3 mb-1">
                                                                <fieldset>
                                                                    <div class="checkbox checkbox-primary">
                                                                        <input type="checkbox" id="colorCheckboxf<?php echo $key ?>"   name="features[]" value="<?php echo $features['id'] ?>">
                                                                        <label for="colorCheckboxf<?php echo $key ?>"><?php echo $features['title'] ?></label>
                                                                    </div>
                                                                </fieldset>
                                                            </div>
<?php } ?>
                                                    </div>
                                                </div>
                                                <hr>

                                                <div class="br mb-2">
                                                    <h5>Vehicle Description    </h5>  
                                                    <textarea id="description" name="description"></textarea>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 mb-1">
                                                        <fieldset>
                                                            <div class="checkbox checkbox-primary">
                                                                <input type="checkbox" id="status"   name="status" value="1" checked="">
                                                                <label for="Active">Available Now</label>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                               
                                                    <div class="col-sm-6  ">
                                                        <input type="hidden" name="create">
                                                        <input type="hidden" name="customer_id" value="<?php echo $_SESSION['id'] ?>">
                                                        <input type="hidden" name="company_id" value="<?php echo $id ?>">
                                                        <button class="btn btn-primary  " id="create" type="button" style="float: right">create</button>

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
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>


        <!-- BEGIN Vendor JS-->
        <script src="js/ajax/main-image.js" type="text/javascript"></script>
        <script src="js/ajax/rent-a-car.js" type="text/javascript"></script>
        <script src="js/ajax/city.js" type="text/javascript"></script>
        <script src="js/ajax/driving-license.js" type="text/javascript"></script>
        <script src="delete/js/rent-car.js" type="text/javascript"></script>
        <!-- BEGIN Vendor JS-->

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
        <script src="plugin/sweetalert/sweetalert.min.js" type="text/javascript"></script>
        <!-- BEGIN: Page JS-->
        <script src="app-assets/vendors/js/forms/select/select2.full.min.js"></script>
        <script src="app-assets/js/scripts/forms/select/form-select2.min.js"></script>
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