<!doctype html>
<?php
include './class/include.php';

$VEHICLE_TYPE = new VehicleType(NULL);
$DISTRICTS = new District(NULL);
$RENT_CAR_COMPANY = new RentCarCompany(NULL);
$RENT_CARS = new RentCar(NULL);

if (isset($_GET["page"])) {
    $page = (int) $_GET["page"];
} else {
    $page = 1;
}
$setlimit = 10;

$pagelimit = ($page * $setlimit) - $setlimit;
?>
<html lang="en">


    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Title Of Site -->
        <title>Rent a Vehicle</title>
        <meta name="description" content="Resposnive HTML Template for Travel Booking Based on Bootstrap 4.x.x" />
        <meta name="keywords" content="accommodation, booking, holiday, hostel, hotel, motel, reservation, resort, tour, tourism, travel, travel agency, trip, vacation, flight, guide, journey, rental, destination, travel booking" />
        <meta name="author" content="crenoveative">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="images/logo-favicon.png">

        <!-- Fav and Touch Icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.html">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.html">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.html">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.html">
        <link rel="shortcut icon" href="images/ico/favicon.html">

        <!-- Font face -->
        <link href="https://fonts.googleapis.com/css?family=Aleo:300,300i,400,400i,700,700i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet"> 

        <!-- CSS -->
        <link href="<?php echo URL ?>css/font-icons.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo URL ?>bootstrap/css/bootstrap.min.css" media="screen">	
        <link href="<?php echo URL ?>css/animate.html" rel="stylesheet">
        <link href="<?php echo URL ?>css/main.css" rel="stylesheet">
        <link href="<?php echo URL ?>css/plugin.css" rel="stylesheet">
        <link href="<?php echo URL ?>css/style.css" rel="stylesheet">
        <link href="<?php echo URL ?>css/your-style.css" rel="stylesheet">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link href="css/jquery.datetimepicker.min.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"  rel="stylesheet">



    </head>



    <!-- start Body -->
    <body class="with-waypoint-sticky">

        <!-- start Body Inner -->
        <div class="body-inner">

            <!-- start Header -->
            <?php
            include 'views/header.php';
            ?>
            <!-- end Header -->

            <!-- start Main Wrapper -->
            <div class="main-wrapper scrollspy-container">
                <div class="page-title breadcrumb-wrapper">
                    <div class="container">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="rent-a-car.php">Rent a Vehicle</a></li> 
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="page-title breadcrumb-wrapper">
                    <section class="page-wrapper bg-light-primary">
                        <div class="container">
                            <div class="row gap-20 gap-md-30 gap-xl-40">
                                <div class="col-12 col-lg-4">
                                    <aside class="sidebar-wrapper filter-wrapper mb-10 mb-md-0">
                                        <div class="box-expand-lg">
                                            <div id="filterResultCallapseOnMobile" class="collapse box-collapse"> 
                                                <div class="wrapper-inner">
                                                    <div class="sidebar-title bg-primary">
                                                        <div class="d-flex align-items-end">
                                                            <div>
                                                                <h4 class="text-white font-serif font400">Filter Rent vehicles</h4>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="sidebar-box" style="background-color:#515263;margin-top: -20px;">
                                                        <div class="box-content">
                                                            <div class="tab-content">
                                                                <div role="tabpanel" class="tab-pane active" id="formSearchMain-01">
                                                                    <div class="tab-inner menu-horizontal-content">
                                                                        <div class="form-search-main-01">
                                                                            <form action="rent-a-car.php">
                                                                                <div class="form-inner">

                                                                                    <div class="row gap-10 mb-15 align-items-end" id="wrapper" >

                                                                                        <div class="col-12">
                                                                                            <div class="form-group">
                                                                                                <label class="text-white">Pick Up Location </label>
                                                                                                <div class="form-icon-left typeahead__container">
                                                                                                    <span class="icon-font text-muted"><i class="bx bx-map"></i></span>
                                                                                                    <input class="js-typeahead-country_v1 form-control" name="pick_up" type="search" placeholder="Enter Pick Up Location " autocomplete="off">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-12">
                                                                                            <div class="col-inner">
                                                                                                <div class="row gap-10 mb-15">

                                                                                                    <div class="col-8">
                                                                                                        <div class="form-group">
                                                                                                            <label class="text-white">Pickup Date </label>
                                                                                                            <div class="form-icon-left">
                                                                                                                <span class="icon-font text-muted"><i class="bx bx-calendar"></i></span>
                                                                                                                <input type="text"  class="form-control  datepicker1" name="pick_up_date" placeholder="dd/mm/yyyy" id="pick_up_date">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div> 
                                                                                                    <div class="col-4">
                                                                                                        <div class="form-group">
                                                                                                            <label class="text-white">Pickup Time </label>
                                                                                                            <div class="form-icon-left">
                                                                                                                <span class="icon-font text-muted"><i class="bx bx-time"></i></span>
                                                                                                                <input type="text"  class="form-control  time" name="pick_up_time" placeholder="00:00">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div> 
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-12">
                                                                                            <div class="form-group">
                                                                                                <label class="text-white">Return  Location </label>
                                                                                                <div class="form-icon-left typeahead__container">
                                                                                                    <span class="icon-font text-muted"><i class="bx bx-map"></i></span>
                                                                                                    <input class="js-typeahead-country_v1 form-control" name="drop_location" type="search" placeholder="Enter Drop Location " autocomplete="off" >
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-12">
                                                                                            <div class="col-inner">
                                                                                                <div class="row gap-10 mb-15"> 

                                                                                                    <div class="col-8">
                                                                                                        <div class="form-group">
                                                                                                            <label class="text-white">Return Date</label>
                                                                                                            <div class="form-icon-left">
                                                                                                                <span class="icon-font text-muted"><i class="bx bx-calendar"></i></span>
                                                                                                                <input   class="form-control  datepicker2" placeholder="dd/mm/yyyy" name="return_date" id="return_date">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-4">
                                                                                                        <div class="form-group">
                                                                                                            <label class="text-white">Return Time </label>
                                                                                                            <div class="form-icon-left">
                                                                                                                <span class="icon-font text-muted"><i class="bx bx-time"></i></span>
                                                                                                                <input type="text"  class="form-control  time" placeholder="00:00" name="return_time">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div> 
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-12 "> 
                                                                                            <div class="col-inner"> 
                                                                                                <div class="row gap-10 mb-15"> 
                                                                                                    <div class="col-3 col-sm-6 col-md-3">
                                                                                                        <div class="form-group form-spin-group">
                                                                                                            <label for="room-amount" class="text-white">Dates</label>
                                                                                                            <div class="form-icon-left">
                                                                                                                <span class="icon-font text-muted"><i class="bx bx-calendar-check"></i></span>
                                                                                                                <input type="text" class="form-control   form-readonly-control" id="days" placeholder="0" readonly />
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="col-9 col-sm-6 col-md-9">
                                                                                                        <div class="col-inner">
                                                                                                            <div class="form-people-thread">
                                                                                                                <div class="row gap-5 align-items-center">

                                                                                                                    <div class="form-group form-spin-group">
                                                                                                                        <label for="room-amount" class="text-white">Vehicle Types</label>
                                                                                                                        <div class="form-icon-left">
                                                                                                                            <span class="icon-font text-muted"><i class="bx bx-car"></i></span>
                                                                                                                            <select class="form-control">
                                                                                                                                <option>-- Select Vehicle Type --</option>
                                                                                                                                <?php foreach ($VEHICLE_TYPE->all() as $key => $vehicle_type) {
                                                                                                                                    ?>
                                                                                                                                    <option value="<?php echo $vehicle_type['id'] ?>"> <?php echo $vehicle_type['title'] ?></option>
                                                                                                                                <?php } ?>
                                                                                                                            </select>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div> 
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-12">
                                                                                            <a href="#" class="btn btn-primary btn-block">Search now</a>
                                                                                        </div>

                                                                                    </div>

                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="sidebar-box">

                                                        <div class="box-title"><h5>Review Ratings </h5></div>

                                                        <div class="box-content"> 

                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input common_selector start_rate" id="filerFacility-s1" name="filerFacility" value="1" >
                                                                <label class="custom-control-label" for="filerFacility-s1"> <span class="material-icons star-size">    star   </span>  <small class="text-muted font11">(3)</small></label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input common_selector start_rate" id="filerFacility-s2" name="filerFacility"  value="2">
                                                                <label class="custom-control-label" for="filerFacility-s2"> <span class="material-icons star-size">    star   </span> <span class="material-icons star-size">    star   </span>   <small class="text-muted font11">(5)  </small></label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input common_selector start_rate" id="filerFacility-s3" name="filerFacility"  value="3">
                                                                <label class="custom-control-label" for="filerFacility-s3"> <span class="material-icons star-size">    star   </span> <span class="material-icons star-size">    star   </span>  <span class="material-icons star-size">    star   </span>   <small class="text-muted font11">(4)</small></label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input common_selector start_rate" id="filerFacility-s4" name="filerFacility"  value="4">
                                                                <label class="custom-control-label" for="filerFacility-s4"> <span class="material-icons star-size">    star   </span>  <span class="material-icons star-size">    star   </span>  <span class="material-icons star-size">    star   </span>  <span class="material-icons star-size">    star   </span>  <small class="text-muted font11">(3)</small></label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input common_selector start_rate" id="filerFacility-s5" name="filerFacility"  value="5">
                                                                <label class="custom-control-label" for="filerFacility-s5"> <span class="material-icons star-size">    star   </span> <span class="material-icons star-size">    star   </span>  <span class="material-icons star-size">    star   </span>  <span class="material-icons star-size">    star   </span>  <span class="material-icons star-size">    star   </span>   <small class="text-muted font11">(1)</small></label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input common_selector start_rate" id="filerFacility-s" name="filerFacility" value="0" >
                                                                <label class="custom-control-label" for="filerFacility-s"> Unrated <small class="text-muted font11">(1)</small></label>
                                                            </div>
                                                        </div> 
                                                    </div> 

                                                    <div class="sidebar-box">

                                                        <div class="box-title"><h5>Vehicle Types</h5></div> 
                                                        <div class="box-content">
                                                            <?php
                                                            foreach ($VEHICLE_TYPE->all() as $key => $vehicle_type) {
                                                                ?>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input common_selector vehicle_type" id="filrerCarCategory-v<?php echo $vehicle_type['id'] ?>" name="filrerCarCategory"  value="<?php echo $vehicle_type['id'] ?>">
                                                                    <label class="custom-control-label" for="filrerCarCategory-v<?php echo $vehicle_type['id'] ?>"><?php echo $vehicle_type['title'] ?> <small class="text-muted font11">(<?php echo $RENT_CARS->getCountByVehicleType($vehicle_type['id']); ?>)</small></label>
                                                                </div>
                                                            <?php } ?>


                                                            <!--                                                            <div id="filrerCarCategoryShowHide" class="collapse"> 
                                                            
                                                                                                                            <div class="collapse-inner">
                                                            
                                                                                                                                <div class="custom-control custom-checkbox">
                                                                                                                                    <input type="checkbox" class="custom-control-input" id="filrerCarCategory-06" name="filrerCarCategory" >
                                                                                                                                    <label class="custom-control-label" for="filrerCarCategory-06">MPV <small class="text-muted font11">(25)</small></label>
                                                                                                                                </div>
                                                                                                                                <div class="custom-control custom-checkbox">
                                                                                                                                    <input type="checkbox" class="custom-control-input" id="filrerCarCategory-07" name="filrerCarCategory">
                                                                                                                                    <label class="custom-control-label" for="filrerCarCategory-07">Sport Car <small class="text-muted font11">(14)</small></label>
                                                                                                                                </div>
                                                            
                                                                                                                            </div>
                                                            
                                                                                                                        </div>-->
                                                            <!--
                                                                                                                        <div class="clear mb-5"></div>
                                                            
                                                                                                                        <button class="btn btn-toggle btn-text-inherit text-secondary text-uppercase font10 letter-spacing-1 font600 collapsed collapsed-on" type="buttom" data-toggle="collapse" data-target="#filrerCarCategoryShowHide">Show more (+)</button>
                                                            
                                                                                                                        <button class="btn btn-toggle btn-text-inherit text-secondary text-uppercase font10 letter-spacing-1 font600 collapsed collapsed-off" type="buttom" data-toggle="collapse" data-target="#filrerCarCategoryShowHide">Show less (-)</button>
                                                            -->

                                                        </div>

                                                    </div>

                                                    <div class="sidebar-box">

                                                        <div class="box-title"><h5>Districts</h5></div>

                                                        <div class="box-content">
                                                            <?php
                                                            foreach ($DISTRICTS->all() as $key => $district) {
                                                                if ($key < 15) {
                                                                    ?>

                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input common_selector district" id="filterDistrict<?php echo $key ?>"   >
                                                                        <label class="custom-control-label" for="filterDistrict<?php echo $key ?>"><?php echo $district['name'] ?> <small class="text-muted font11">(<?php echo $RENT_CAR_COMPANY->getCountByCompanyByDistrict($district['id']); ?>)</small></label>
                                                                    </div>
                                                                    <?php
                                                                }
                                                            }
                                                            ?>
                                                            <div id="filterCarBarndShowHide" class="collapse"> 

                                                                <div class="collapse-inner">

                                                                    <?php
                                                                    foreach ($DISTRICTS->all() as $key => $district) {
                                                                        if ($key > 15) {
                                                                            ?>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="filterDistrict<?php echo $key ?>"   >
                                                                                <label class="custom-control-label" for="filterDistrict<?php echo $key ?>"><?php echo $district['name'] ?> <small class="text-muted font11">(<?php echo $RENT_CAR_COMPANY->getCountByCompanyByDistrict($district['id']); ?>)</small></label>
                                                                            </div>
                                                                            <?php
                                                                        }
                                                                    }
                                                                    ?>
                                                                </div>

                                                            </div> 


                                                            <button class="btn btn-toggle btn-text-inherit text-secondary text-uppercase font10 letter-spacing-1 font600 collapsed collapsed-on" type="buttom" data-toggle="collapse" data-target="#filterCarBarndShowHide">Show more (+)</button>

                                                            <button class="btn btn-toggle btn-text-inherit text-secondary text-uppercase font10 letter-spacing-1 font600 collapsed collapsed-off" type="buttom" data-toggle="collapse" data-target="#filterCarBarndShowHide">Show less (-)</button>

                                                        </div>

                                                    </div>



                                                    <div class="sidebar-box">

                                                        <div class="box-title"><h5>Filer Text</h5></div>

                                                        <div class="box-content">
                                                            <p class="line-15">Park fat she nor does play deal our. Procured sex material his offering humanity laughing moderate can.</p>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="featured-contact-01 mt-40 mb-30 d-none d-md-block">
                                            <h6>You Need help? Call us on</h6>
                                            <span class="phone-number"><i class="material-icons">phone</i> <?php echo $MOBILE_NUMBER->short_description ?></span>
                                            It's free to call from anywhere
                                        </div>

                                        <div class=" d-none d-lg-block">

                                            <h6 class="text-uppercase letter-spacing-2 line-1 font500"><span>Why Book vehicle with us</span></h6>

                                            <ul class="list-icon-data-attr font-ionicons">
                                                <li data-content="&#xf383">Excited him now natural saw passage age explain.</li>
                                                <li data-content="&#xf383">Farther so friends is detract do private.</li>
                                                <li data-content="&#xf383">Procured is material his offering humanity laughing moderate can.</li>
                                            </ul>

                                        </div>

                                        <div class="d-block d-lg-none">
                                            <button type="buttom" class="btn btn-toggle btn-outline-primary btn-block collapsed collapsed-disapear" data-toggle="collapse" data-target="#filterResultCallapseOnMobile">Show Filter</button>		
                                        </div>

                                    </aside>
                                    <input type="hidden" id="pagelimit" value="<?php echo $pagelimit ?>">
                                    <input type="hidden" id="setlimit" value="<?php echo $setlimit ?>"> 
                                    <input type="hidden" id="page" value="<?php echo $page ?>"> 
                                </div>

                                <div class="col-12 col-lg-8">
                                    <div class="content-wrapper"> 
                                        
                                        <!--filter append-->
                                        <div class="product-long-item-wrapper filter_data">   </div>

                                        <div class="row">
                                            <div class="col-12 pager-wrappper mt-40" id="show_pagination">
                                            </div>
                                        </div>
                                        
                                        
                                    </div>
                                </div
                            </div>
                        </div>
                    </section>
                </div>	
                <!-- end Main Wrapper -->


                <!-- start Footer Wrapper -->
                <?php
                include 'views/footer.php';
                ?>
                <!-- start Footer Wrapper -->

            </div>
            <!-- end Body Inner -->



            <!-- start Back To Top -->
            <a id="back-to-top" href="#" class="back-to-top" role="button" title="Click to return to top" data-toggle="tooltip" data-placement="left"><i class="bx bx-chevron-up"></i></a>
            <!-- end Back To Top -->



            <!-- JS -->
            <script type="text/javascript" src="<?php echo URL ?>js/jquery-2.2.4.min.js"></script>
            <script type="text/javascript" src="<?php echo URL ?>js/plugins.js"></script> 
            <script type="text/javascript" src="<?php echo URL ?>js/plugins/jquery.typeahead.min.js"></script>
            <script type="text/javascript" src="<?php echo URL ?>js/custom-autocomplete.js"></script>

            <script src="<?php echo URL ?>js/ajax/rent-car-company-filter.js" type="text/javascript"></script>

            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
            <script src="<?php echo URL ?>js/jquery.datetimepicker.full.min.js" type="text/javascript"></script>
            <script src="<?php echo URL ?>js/ajax/custome.js" type="text/javascript"></script>   

            <script>

                $(".sticky-kit").stick_in_parent({
                    offset_top: 105,
                });

                $(".touch-spin-03").TouchSpin({
                    min: 0,
                    max: 100,
                    verticalbuttons: true,
                    buttondown_class: "btn btn-white",
                    buttonup_class: "btn btn-white"
                });

                $('.time').datetimepicker({
                    dayOfWeekStart: 1,
                    lang: 'en',
                    minDate: 0,
                    datepicker: false,
                    format: 'H:i',
                    defaultTime: '00:00',
                }).val();

                $(function () {
                    var date = $('.datepicker1').datepicker({
                        dateFormat: 'yy-mm-dd',
                        minDate: 'today',
                    }).val();



                    var date2 = $('.datepicker2').datepicker({
                        dateFormat: 'yy-mm-dd',
                        minDate: +1

                    }).val();
                    $(".datepicker1").datepicker().datepicker("setDate", new Date());
                    var date3 = $('.datepicker1').datepicker('getDate');
                    date3.setDate(date3.getDate() + 1);
                    $('.datepicker2').datepicker('setDate', date3);
                });
            </script> 
            <script type="text/javascript" src="js/custom-core.js"></script>

    </body> 
</html>