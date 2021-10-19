<!doctype html>
<?php
include './class/include.php';
$DEFAULTDATA = new DefaultData();
date_default_timezone_set("Asia/Calcutta");
$today = date('Y-m-d');
?>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Title Of Site -->
        <title>Home - MyTravelPartner.lk</title>
        <meta name="description" content="Resposnive HTML Template for Travel Booking Based on Bootstrap 4.x.x" />
        <meta name="keywords" content="accommodation, booking, holiday, hostel, hotel, motel, reservation, resort, tour, tourism, travel, travel agency, trip, vacation, flight, guide, journey, rental, destination, travel booking" />
        <meta name="author" content="crenoveative">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="images/logo-favicon.png">

        <!-- Fav and Touch Icons -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.html">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.html">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.html">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.html">
        <link rel="shortcut icon" href="images/ico/favicon.html">


        <!-- Font face -->
        <link href="https://fonts.googleapis.com/css?family=Aleo:300,300i,400,400i,700,700i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet"> 


        <!-- CSS -->
        <link href="css/font-icons.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="screen">	
        <link href="css/animate.html" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/plugin.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/your-style.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"  rel="stylesheet">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link href="css/jquery.datetimepicker.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/preloader.css" rel="stylesheet" type="text/css"/>
    </head>



    <!-- start Body -->
    <body class="someBlock with-waypoint-sticky ">

        <!-- start Body Inner -->
        <div class="body-inner">

            <!-- start Header -->
            <?php
            include 'views/header.php';
            ?>
            <!-- end Header --> 


            <!-- start Main Wrapper -->
            <div class="main-wrapper scrollspy-action"> 
                <!-- start Hero Banner -->
                <div class="slick-hero-slider-wrapper bg-light">

                    <div class="slider slick-hero-slider-02 slick-slider-center-mode slick-animation mb-0">
                        <?php
                        $SLIDER = new Slider(NULL);
                        foreach ($SLIDER->all() as $slider) {
                            ?>
                            <div class="slick-item">

                                <div class="bg-image" data-dark-overlay="4" style="background-image:url('upload/slider/<?php echo $slider['image_name'] ?>');"></div>

                            </div>
                        <?php } ?>


                    </div>

                    <div class="hero-form-absolute option-02">

                        <div class="container">

                            <div class="row gap-40 gap-lg-60 align-items-center">

                                <div class="col-12 col-lg-6 col-xl-7">

                                    <div class="hero-text">

                                        <h2 class="text-shadow-slider">TRAVEL WITH US TODAY.! </h2>
                                        <p class="lead text-shadow-slider">Welcome to Sri Lanka. Come and Travel with us today.</p>
                                        <p class="hero-price text-shadow-slider">
                                            all starting from
                                            <span>USD $986</span>
                                        </p>
                                        <a href="#" class="btn btn-secondary btn-wide">Book now</a>
                                        <p class="font-sm mt-25 line-125 spacing-1 text-shadow-slider">* Booking period June 15 to June, 23 2019<br/>* Traveling period  Nov 15 to Nov 23, 2019</p>

                                    </div>

                                </div>

                                <div class="col-12 col-md-9 col-lg-6 col-xl-5">

                                    <div class="hero-form-inner text-white">

                                        <div class="menu-horizontal-wrapper-02">

                                            <nav class="menu-horizontal-02">
                                                <ul class="nav">
                                                    <li>
                                                        <a class="active" data-toggle="tab" href="#formSearchMain-01">Hotels</a>
                                                    </li>
                                                    <li>
                                                        <a data-toggle="tab" href="#formSearchMain-03">Vehicles</a>
                                                    </li>
                                                    <li>
                                                        <a data-toggle="tab" href="#formSearchMain-04">Tours</a>
                                                    </li>
                                                    <li>
                                                        <a data-toggle="tab" href="#formSearchMain-02">Restaurants</a>
                                                    </li>
                                                    <!--                                                    <li>
                                                                                                            <a data-toggle="tab" href="#formSearchMain-05">Guide</a>
                                                                                                        </li>-->
                                                </ul>
                                            </nav>

                                            <div class="tab-content">

                                                <div role="tabpanel" class="tab-pane active" id="formSearchMain-01">

                                                    <div class="tab-inner menu-horizontal-content">
                                                        <form action="search-accommodation.php" method="POST">
                                                            <div class="form-search-main-01">



                                                                <div class="form-inner">

                                                                    <div class="row gap-10 mb-15 align-items-end">

                                                                        <div class="col-12">
                                                                            <div class="form-group">
                                                                                <label>Destination</label>
                                                                                <div class="form-icon-left typeahead__container">
                                                                                    <span class="icon-font text-muted"><i class="bx bx-map"></i></span>
                                                                                    <input class="js-typeahead-country_v1 form-control" name="city" type="search" placeholder="Where are you going?." id="city" autocomplete="off" required="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="col-inner">
                                                                                <div id="airDatepickerRange-hotel" class="row gap-10 mb-15">

                                                                                    <div class="col-6">
                                                                                        <div class="form-group">
                                                                                            <label>Check-in</label>
                                                                                            <div class="form-icon-left">
                                                                                                <span class="icon-font text-muted"><i class="bx bx-calendar"></i></span>
                                                                                                <input type="text"  class="form-control form-readonly-control datepicker1" id="check_in" name="check_in" placeholder="dd/mm/yyyy">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-6">
                                                                                        <div class="form-group">
                                                                                            <label>Check-out</label>
                                                                                            <div class="form-icon-left">
                                                                                                <span class="icon-font text-muted"><i class="bx bx-calendar"></i></span>
                                                                                                <input type="text" id="dateEnd-hotel" class="form-control form-readonly-control datepicker2 " name="check_out"id="check_out" placeholder="dd/mm/yyyy">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 ">

                                                                            <div class="col-inner">

                                                                                <div class="row gap-10 mb-15">

                                                                                    <div class="col-4 col-sm-6 col-md-4">
                                                                                        <div class="form-group form-spin-group">
                                                                                            <label for="room-amount">Rooms</label>
                                                                                            <div class="form-icon-left">
                                                                                                <span class="icon-font text-muted"><i class="bx bx-home-alt"></i></span>
                                                                                                <input type="text" class="form-control touch-spin-03 form-readonly-control" id="rooms" name="rooms" placeholder="0"   readonly />
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-8 col-sm-6 col-md-8">
                                                                                        <div class="col-inner">
                                                                                            <div class="form-people-thread">
                                                                                                <div class="row gap-5 align-items-center">
                                                                                                    <div class="col">
                                                                                                        <div class="form-group form-spin-group">
                                                                                                            <label for="room-amount">Adults <small class=" text-muted font10 line-1">(12-75)</small></label>
                                                                                                            <div class="form-icon-left">
                                                                                                                <span class="icon-font text-muted"><i class="bx bx-user"></i></span>
                                                                                                                <input type="text" class="form-control touch-spin-03 form-readonly-control" id="adults" name="adults" placeholder="0" readonly />
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col">
                                                                                                        <div class="form-group form-spin-group">
                                                                                                            <label for="room-amount">Children <small class="text-muted font10 line-1">(2-12)</small></label>
                                                                                                            <div class="form-icon-left">
                                                                                                                <span class="icon-font text-muted"><i class="bx bx-user"></i></span>
                                                                                                                <input type="text" class="form-control touch-spin-03 form-readonly-control" placeholder="0" name="child" readonly />
                                                                                                            </div>
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
                                                                            <button type="submit" class="btn btn-primary btn-block" id="search">Search now</button>
                                                                        </div>

                                                                    </div>

                                                                </div>                                                          

                                                            </div>
                                                        </form>
                                                    </div>

                                                </div>

                                                <div role="tabpanel" class="tab-pane fade in" id="formSearchMain-02">

                                                    <div class="tab-inner menu-horizontal-content">

                                                        <div class="form-search-main-01">

                                                            <form>

                                                                <div class="form-inner">

                                                                    <div class="mb-10">

                                                                        <div class="custom-control custom-radio  custom-control-inline">
                                                                            <input type="radio" id="flightSearchRadio-1" name="flightSearchRadio" class="custom-control-input" checked>
                                                                            <label class="custom-control-label" for="flightSearchRadio-1">Return</label>
                                                                        </div>

                                                                        <div class="custom-control custom-radio  custom-control-inline">
                                                                            <input type="radio" id="flightSearchRadio-2" name="flightSearchRadio" class="custom-control-input">
                                                                            <label class="custom-control-label" for="flightSearchRadio-2">One-way</label>
                                                                        </div>

                                                                        <div class="custom-control custom-radio  custom-control-inline">
                                                                            <input type="radio" id="flightSearchRadio-3" name="flightSearchRadio" class="custom-control-input">
                                                                            <label class="custom-control-label" for="flightSearchRadio-3">Multicities</label>
                                                                        </div>

                                                                    </div>

                                                                    <div class="row gap-10 mb-15">

                                                                        <div class="col-6">
                                                                            <div class="form-group">
                                                                                <label>From</label>
                                                                                <div class="form-icon-left typeahead__container">
                                                                                    <span class="icon-font text-muted"><i class="bx bx-map"></i></span>
                                                                                    <input class="js-typeahead-country_v1 form-control" name="country_v1[query]" type="search" placeholder="Country or city" autocomplete="off">
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-6">
                                                                            <div class="form-group">
                                                                                <label>To</label>
                                                                                <div class="form-icon-left typeahead__container">
                                                                                    <span class="icon-font text-muted"><i class="bx bx-map"></i></span>
                                                                                    <input class="js-typeahead-country_v1 form-control" name="country_v1[query]" type="search" placeholder="Country or city" autocomplete="off">
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-12">
                                                                            <div class="col-inner">
                                                                                <div id="airDatepickerRange-flight" class="row gap-10 mb-15">

                                                                                    <div class="col-6">
                                                                                        <div class="form-group">
                                                                                            <label>Check-in</label>
                                                                                            <div class="form-icon-left">
                                                                                                <span class="icon-font text-muted"><i class="bx bx-calendar"></i></span>
                                                                                                <input type="text"   class="form-control form-readonly-control datepicker1" placeholder="dd/mm/yyyy">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-6">
                                                                                        <div class="form-group">
                                                                                            <label>Check-out</label>
                                                                                            <div class="form-icon-left">
                                                                                                <span class="icon-font text-muted"><i class="bx bx-calendar"></i></span>
                                                                                                <input type="text" id="dateEnd-flight" class="form-control form-readonly-control" placeholder="dd/mm/yyyy">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-12">
                                                                            <div class="col-inner">
                                                                                <div class="row gap-5">
                                                                                    <div class="col-4">
                                                                                        <div class="form-group form-spin-group">
                                                                                            <label for="room-amount">Adult <small class="text-muted font10 line-1">(12-75)</small></label>
                                                                                            <div class="form-icon-left">
                                                                                                <span class="icon-font text-muted"><i class="bx bx-user"></i></span>
                                                                                                <input type="text" class="form-control touch-spin-03 form-readonly-control" placeholder="0" readonly />
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-4">
                                                                                        <div class="form-group form-spin-group">
                                                                                            <label for="room-amount">Child <small class="text-muted font10 line-1">(2-12)</small></label>
                                                                                            <div class="form-icon-left">
                                                                                                <span class="icon-font text-muted"><i class="bx bx-user"></i></span>
                                                                                                <input type="text" class="form-control touch-spin-03 form-readonly-control" placeholder="0" readonly />
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-4">
                                                                                        <div class="form-group form-spin-group">
                                                                                            <label for="room-amount">Infant <small class="text-muted font10 line-1">(0-2)</small></label>
                                                                                            <div class="form-icon-left">
                                                                                                <span class="icon-font text-muted"><i class="bx bx-user"></i></span>
                                                                                                <input type="text" class="form-control touch-spin-03 form-readonly-control" placeholder="0" readonly />
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                    <div class="d-flex flex-row align-items-center mt-20">
                                                                        <div class="mr-auto">
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="flightSearchCheck-1" />
                                                                                <label class="custom-control-label" for="flightSearchCheck-1">(-/+ 3 days)</label>
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <a href="#" class="btn btn-primary btn-wide">Search now</a>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                            </form>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div role="tabpanel" class="tab-pane fade in" id="formSearchMain-03">

                                                    <div class="tab-inner menu-horizontal-content">

                                                        <div class="form-search-main-01">

                                                            <form>

                                                                <div class="form-inner">

                                                                    <div class="row gap-10 mb-15 align-items-center">

                                                                        <div class="col-6">
                                                                            <div class="form-group">
                                                                                <label>Pick-up Location</label>
                                                                                <div class="form-icon-left typeahead__container">
                                                                                    <span class="icon-font text-muted"><i class="bx bx-map"></i></span>
                                                                                    <input class="js-typeahead-country_v1 form-control" name="country_v1[query]" type="search" placeholder="Pick up location" autocomplete="off">
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-6">
                                                                            <div class="form-group">
                                                                                <label>Drop-off Location</label>
                                                                                <div class="form-icon-left typeahead__container">
                                                                                    <span class="icon-font text-muted"><i class="bx bx-map"></i></span>
                                                                                    <input class="js-typeahead-country_v1 form-control" name="country_v1[query]" type="search" placeholder="Drop off location" autocomplete="off">
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-12">

                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="carCheck11">
                                                                                <label class="custom-control-label" for="carCheck11">Return car to the same location</label>
                                                                            </div>

                                                                        </div>

                                                                        <div class="col-6">

                                                                            <div class="form-group">
                                                                                <label>Pick-up Date</label>
                                                                                <div class="form-icon-left">
                                                                                    <span class="icon-font text-muted"><i class="bx bx-calendar"></i></span>
                                                                                    <input type="text" class="form-control form-readonly-control datetime" placeholder="Date and Time" data-language="en" data-timepicker="true" readonly>
                                                                                </div>
                                                                            </div>

                                                                        </div>

                                                                        <div class="col-6">

                                                                            <div class="form-group">
                                                                                <label>Drop-off Date</label>
                                                                                <div class="form-icon-left">
                                                                                    <span class="icon-font text-muted"><i class="bx bx-calendar"></i></span>
                                                                                    <input type="text" class="form-control form-readonly-control datetime" placeholder="Date and Time" data-language="en" data-timepicker="true" readonly>
                                                                                </div>
                                                                            </div>

                                                                        </div>

                                                                        <div class="col-12">

                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="carCheck21" checked >
                                                                                <label class="custom-control-label" for="carCheck21">Vehicle with driver</label>
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

                                                <div role="tabpanel" class="tab-pane fade in" id="formSearchMain-04">

                                                    <div class="tab-inner menu-horizontal-content">

                                                        <div class="form-search-main-01">

                                                            <form>

                                                                <div class="form-inner">

                                                                    <div class="row gap-10 mb-15 align-items-sm-center">

                                                                        <div class="col-6">
                                                                            <div class="form-group">
                                                                                <label>Destination</label>
                                                                                <div class="form-icon-left typeahead__container">
                                                                                    <span class="icon-font text-muted"><i class="bx bx-map"></i></span>
                                                                                    <input class="js-typeahead-country_v1 form-control" name="country_v1[query]" type="search" placeholder="Where are you going?." autocomplete="off">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <div class="form-group">
                                                                                <label>Type of tour</label>
                                                                                <div class="form-icon-left">
                                                                                    <span class="icon-font text-muted"><span class="icon-inner"><i class="bx bx-calendar"></i></span></span>
                                                                                    <select  data-placeholder="Tour Type" class="chosen-no-search form-control" tabindex="2">
                                                                                        <option></option>
                                                                                        <?php
                                                                                        $TOUR_TYPE = new TourType(NULL);
                                                                                        foreach ($TOUR_TYPE->all() as $tour_type) {
                                                                                            ?>
                                                                                            <option value="<?php echo $tour_type['id'] ?>"><?php echo $tour_type['title'] ?></option>
                                                                                        <?php } ?>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-8 col-md-12">
                                                                            <div class="col-inner">
                                                                                <div class="row gap-10 mb-15">

                                                                                    <div class="col-6">
                                                                                        <div class="form-group">
                                                                                            <label>When Start Date.</label>
                                                                                            <div class="form-icon-left">
                                                                                                <span class="icon-font text-muted"><i class="bx bx-calendar"></i></span>
                                                                                                <input type="text" class="form-control form-readonly-control datepicker1" placeholder="Pick a Date" data-min-view="months" data-view="months" data-date-format="MM yyyy" data-language="en" data-auto-close="true" readonly>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-4 col-sm-4 col-md-6">
                                                                                        <div class="form-group form-spin-group">
                                                                                            <label>Number of Guests</label>
                                                                                            <div class="form-icon-left">
                                                                                                <span class="icon-font text-muted"><i class="bx bx-user"></i></span>
                                                                                                <input type="text" class="form-control touch-spin-03 form-readonly-control" placeholder="0" readonly />
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>


                                                                                </div>

                                                                            </div>

                                                                        </div>



                                                                        <div class="col-12">

                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="preferLocalGuide" />
                                                                                <label class="custom-control-label" for="preferLocalGuide">Prefer private local guide</label>
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

                                                <div role="tabpanel" class="tab-pane fade in" id="formSearchMain-05">

                                                    <div class="tab-inner menu-horizontal-content">

                                                        <div class="form-search-main-01">

                                                            <form>

                                                                <div class="form-inner">

                                                                    <div class="row gap-10 mb-15 align-items-end">

                                                                        <div class="col-12">
                                                                            <div class="form-group">
                                                                                <label>Destination</label>
                                                                                <div class="form-icon-left typeahead__container">
                                                                                    <span class="icon-font text-muted"><i class="bx bx-map"></i></span>
                                                                                    <input class="js-typeahead-country_v1 form-control" name="country_v1[query]" type="search" placeholder="Country or city" autocomplete="off">
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-12 col-sm-12 col-md-12">
                                                                            <div class="col-inner">
                                                                                <div id="airDatepickerRange-guide" class="row gap-10 mb-15">

                                                                                    <div class="col-6">
                                                                                        <div class="form-group">
                                                                                            <label>Check-in</label>
                                                                                            <div class="form-icon-left">
                                                                                                <span class="icon-font text-muted"><i class="bx bx-calendar"></i></span>
                                                                                                <input type="text" id="dateStart-guide" class="form-control form-readonly-control" placeholder="dd/mm/yyyy">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-6">
                                                                                        <div class="form-group">
                                                                                            <label>Check-out</label>
                                                                                            <div class="form-icon-left">
                                                                                                <span class="icon-font text-muted"><i class="bx bx-calendar"></i></span>
                                                                                                <input type="text" id="dateEnd-guide" class="form-control form-readonly-control" placeholder="dd/mm/yyyy">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-8">
                                                                            <div class="form-group">
                                                                                <label>Speak</label>
                                                                                <div class="form-icon-left">
                                                                                    <span class="icon-font text-muted"><span class="icon-inner"><i class="bx bx-globe"></i></span></span>
                                                                                    <select multiple data-placeholder="Please select" class="chosen-no-search form-control" tabindex="2">
                                                                                        <option></option>
                                                                                        <option>English</option>
                                                                                        <option>French</option>
                                                                                        <option>Italiano</option>
                                                                                        <option>Arabic</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-4">
                                                                            <div class="form-group form-spin-group">
                                                                                <label>How many days?</label>
                                                                                <div class="form-icon-left">
                                                                                    <span class="icon-font text-muted"><i class="bx bx-user"></i></span>
                                                                                    <input type="text" class="form-control touch-spin-03 form-readonly-control" placeholder="0" readonly />
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

                                </div>

                            </div>

                        </div>

                    </div>

                </div>
                <!-- end Hero Banner -->



                <!-- start Site Content -->

                <section style="margin-top: -45px;" >

                    <div class="container">

                        <div class="row equal-height cols-2 cols-md-2 cols-lg-4 gap-10 gap-md-20 gap-xl-30">

                            <div class="col-3"  id="hotel"  >
                                <?php
                                $OFFER = new Offer(NULL);
                                foreach ($OFFER->getOfferByCategory(1) as $key => $offer) {
                                    if ($key == 0) {
                                        ?>
                                        <div class=" active showdiv "   >

                                            <figure class="featured-image-grid-item with-highlight">
                                                <div class="image">
                                                    <img src="upload/offer/<?php echo $offer['image_name'] ?>"alt="<?php echo $offer['title'] ?>"/>
                                                </div>
                                                <figcaption class="content">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div>
                                                            <span class="item-highlight text-secondary">
                                                                Save up to<span><?php echo $offer['offer_presentage'] ?>%</span>	
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="item-expire">
                                                                <?php
                                                                $end_date = $offer['end_date'];
                                                                $date1 = date_create("$today");
                                                                $date2 = date_create("$end_date");

                                                                $dateDifference = date_diff($date2, $date1)->format('%d');

                                                                echo $dateDifference;
                                                                ?>
                                                                days left</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="mb-0"><?php echo $offer['title'] ?></h5>
                                                    <p><?php echo $offer['short_description'] ?></p>
                                                    <span class="act-as-btn text-secondary">Book Now <i class="material-icons">arrow_forward</i></span>
                                                </figcaption>
                                                <a href="#" class="position-absolute-href"></a>
                                            </figure>

                                        </div>
                                    <?php } else { ?>
                                        <div class="showdiv">
                                            <figure class="featured-image-grid-item with-highlight">
                                                <div class="image">
                                                    <img src="upload/offer/<?php echo $offer['image_name'] ?>"alt="<?php echo $offer['title'] ?>"/>
                                                </div>
                                                <figcaption class="content">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div>
                                                            <span class="item-highlight text-secondary">
                                                                Save up to<span><?php echo $offer['offer_presentage'] ?>%</span>	
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="item-expire">
                                                                <?php
                                                                $end_date = $offer['end_date'];
                                                                $date1 = date_create("$today");
                                                                $date2 = date_create("$end_date");

                                                                $dateDifference = date_diff($date2, $date1)->format('%d');

                                                                echo $dateDifference;
                                                                ?>
                                                                days left</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="mb-0"><?php echo $offer['title'] ?></h5>
                                                    <p><?php echo $offer['short_description'] ?></p>
                                                    <span class="act-as-btn text-secondary">Book Now <i class="material-icons">arrow_forward</i></span>
                                                </figcaption>
                                                <a href="#" class="position-absolute-href"></a>
                                            </figure>

                                        </div>
                                        <?php
                                    }
                                }
                                ?>

                            </div>
                            <div class="col-3"  id="rentcar"  >

                                <?php
                                $OFFER = new Offer(NULL);
                                foreach ($OFFER->getOfferByCategory(2) as $key => $offer) {
                                    if ($key == 0) {
                                        ?>
                                        <div class=" active showdiv "   >

                                            <figure class="featured-image-grid-item with-highlight">
                                                <div class="image">
                                                    <img src="upload/offer/<?php echo $offer['image_name'] ?>"alt="<?php echo $offer['title'] ?>"/>
                                                </div>
                                                <figcaption class="content">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div>
                                                            <span class="item-highlight text-secondary">
                                                                Save up to<span><?php echo $offer['offer_presentage'] ?>%</span>	
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="item-expire">
                                                                <?php
                                                                $OFFER_DURATION = new OfferDuration($offer['offer_duration']);
                                                                echo $OFFER_DURATION->dates;
                                                                ?>
                                                                days left</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="mb-0"><?php echo $offer['title'] ?></h5>
                                                    <p><?php echo $offer['short_description'] ?></p>
                                                    <span class="act-as-btn text-secondary">Book Now <i class="material-icons">arrow_forward</i></span>
                                                </figcaption>
                                                <a href="#" class="position-absolute-href"></a>
                                            </figure>

                                        </div>
                                    <?php } else { ?>
                                        <div class="showdiv">
                                            <figure class="featured-image-grid-item with-highlight">
                                                <div class="image">
                                                    <img src="upload/offer/<?php echo $offer['image_name'] ?>"alt="<?php echo $offer['title'] ?>"/>
                                                </div>
                                                <figcaption class="content">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div>
                                                            <span class="item-highlight text-secondary">
                                                                Save up to<span><?php echo $offer['offer_presentage'] ?>%</span>	
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="item-expire">
                                                                <?php
                                                                $OFFER_DURATION = new OfferDuration($offer['offer_duration']);
                                                                echo $OFFER_DURATION->dates;
                                                                ?>
                                                                days left</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="mb-0"><?php echo $offer['title'] ?></h5>
                                                    <p><?php echo $offer['short_description'] ?></p>
                                                    <span class="act-as-btn text-secondary">Book Now <i class="material-icons">arrow_forward</i></span>
                                                </figcaption>
                                                <a href="#" class="position-absolute-href"></a>
                                            </figure>

                                        </div>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                            <div class="col-3"  id="tour"  >
                                <?php
                                $OFFER = new Offer(NULL);
                                foreach ($OFFER->getOfferByCategory(3) as $key => $offer) {
                                    if ($key == 0) {
                                        ?>
                                        <div class=" active showdiv "   >

                                            <figure class="featured-image-grid-item with-highlight">
                                                <div class="image">
                                                    <img src="upload/offer/<?php echo $offer['image_name'] ?>"alt="<?php echo $offer['title'] ?>"/>
                                                </div>
                                                <figcaption class="content">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div>
                                                            <span class="item-highlight text-secondary">
                                                                Save up to<span><?php echo $offer['offer_presentage'] ?>%</span>	
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="item-expire">
                                                                <?php
                                                                $OFFER_DURATION = new OfferDuration($offer['offer_duration']);
                                                                echo $OFFER_DURATION->dates;
                                                                ?>
                                                                days left</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="mb-0"><?php echo $offer['title'] ?></h5>
                                                    <p><?php echo $offer['short_description'] ?></p>
                                                    <span class="act-as-btn text-secondary">Book Now <i class="material-icons">arrow_forward</i></span>
                                                </figcaption>
                                                <a href="#" class="position-absolute-href"></a>
                                            </figure>

                                        </div>
                                    <?php } else { ?>
                                        <div class="showdiv">
                                            <figure class="featured-image-grid-item with-highlight">
                                                <div class="image">
                                                    <img src="upload/offer/<?php echo $offer['image_name'] ?>"alt="<?php echo $offer['title'] ?>"/>
                                                </div>
                                                <figcaption class="content">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div>
                                                            <span class="item-highlight text-secondary">
                                                                Save up to<span><?php echo $offer['offer_presentage'] ?>%</span>	
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="item-expire">
                                                                <?php
                                                                $OFFER_DURATION = new OfferDuration($offer['offer_duration']);
                                                                echo $OFFER_DURATION->dates;
                                                                ?>
                                                                days left</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="mb-0"><?php echo $offer['title'] ?></h5>
                                                    <p><?php echo $offer['short_description'] ?></p>
                                                    <span class="act-as-btn text-secondary">Book Now <i class="material-icons">arrow_forward</i></span>
                                                </figcaption>
                                                <a href="#" class="position-absolute-href"></a>
                                            </figure>

                                        </div>
                                        <?php
                                    }
                                }
                                ?>

                            </div>
                            <div class="col-3">

                                <div class="   showdiv "   >
                                    <figure class="featured-image-grid-item with-highlight">
                                        <div class="image">
                                            <img src="images/image-regular/03.jpg"alt="image"/>
                                        </div>
                                        <figcaption class="content">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <span class="item-highlight text-secondary">
                                                        Save up to<span>25%</span>	
                                                    </span>
                                                </div>
                                                <div>
                                                    <span class="item-expire">Only 3 days</span>
                                                </div>
                                            </div>
                                            <h5 class="mb-0">Last Minute Deals</h5>
                                            <p>Book now and save</p>
                                            <span class="act-as-btn text-secondary">Book Now <i class="material-icons">arrow_forward</i></span>
                                        </figcaption>
                                        <a href="#" class="position-absolute-href"></a>
                                    </figure>

                                </div> 

                            </div>
                        </div>
                    </div> 
                </section>
            </div> 


            <section>	
                <div class="section-title text-center">

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-2">
                            </div>
                            <div class="col-lg-8">
                                <h2 class="">Best Accommodations </h2>    
                            </div>
                            <div class="col-lg-2">
                                <a href="hotel.php">
                                    <button type="button" class="btn btn-outline-danger float-right"  >View All</button>
                                </a>  
                            </div>
                        </div>
                    </div>

                </div>
                <div class="container">
                    <div class="row">
                        <!-- max 6-->
                        <?php
                        $ACCOMMODATION = new Accommodation(NULL);
                        foreach ($ACCOMMODATION->all() as $key => $accommodation) {
                            $ROOM = new Room(NULL);
                            $ACCOMMODATION_FACILITY = new AccommodationFacility(NULL);
                            $ACCOMMODATION_TYPE = new AccommodationType($accommodation['type']);
                            if ($key < 7) {
                                ?>
                                <div class="col-md-3 col-xs-12">

                                    <div class="product-grid-item">

                                        <a href="accommodations/view/<?php echo base64_encode($accommodation['id']) ?>" target="_blank">

                                            <div class="image caption-relative">
                                                <img src="upload/accommodation/gallery/thumb/<?php echo $accommodation['image_name'] ?>" alt="<?php echo $accommodation['title'] ?>">
                                                <div class="caption-holder padding-10">
                                                    <div class="caption-top w-100 text-right">
                                                        <span class=" d-inline-block font600 text-uppercase font12 ph-15 pv-5 line-135 rounded" style="background-color: #006607"><?php echo $ACCOMMODATION_TYPE->title ?> </span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="content clearfix">
                                                <div class="rating-item rating-sm ">
                                                    <div class="rating-icons ">
                                                        <p class="rating-text text-muted"> <span class="material-icons star-size-1">    star   </span>      <span class="material-icons star-size-1">    star   </span>  <span class="material-icons star-size-1">    star   </span>  <span class="material-icons star-size-1">    star   </span>  <span class="material-icons star-size-1">    star   </span> <span class="bg-primary">6.0</span> <strong class="text-dark">Good</strong> - 1,2547</p>
                                                    </div>
                                                </div>

                                                <div class="short-info mt-10">
                                                    <h6><?php echo substr($accommodation['title'], 0, 19) ?>..</h6>
                                                    <p class="location"><i class="fas fa-map-marker-alt text-primary"></i>  <?php
                                                        $CITY = new City($accommodation['city']);
                                                        echo $CITY->name;
                                                        ?>
                                                    </p>
                                                </div>

                                                <div class="price" style="bottom:10px;">
                                                    <div class="float-right">
                                                        start from
                                                        <span class="text-secondary">$<?php echo $ROOM->getMinPriceByAccommodation($accommodation['id']); ?></span>
                                                        per night
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </section>

            <section>
                <div class="container">
                    <div class="section-title text-center">
                        <div class="row">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-8">
                                <h2>Best Tour Packages</h2>	
                            </div>
                            <div class="col-md-2">
                                <a href="tour-company.php">
                                    <button type="button" class="btn btn-outline-danger float-right">View All</button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content">  
                        <div class="slick-carousel-inner">
                            <div class="slick-product-item-4">
                                <?php
                                $TOUR_COMPANY = new TourCompany(NULL);
                                $TOUR_COMPANY_SELECTED_PACKAGE = new TourCompanyPackageSelected(NULL);
                                $TOUR_COMPANY_PACKAGE = new TourCompanyPackage(NULL);
                                foreach ($TOUR_COMPANY->all() as $tour_company) {
                                    ?>

                                    <div class="slick-item">
                                        <div class="product-grid-item">
                                            <a href="tour/view/<?php echo base64_encode($tour_company['id']) ?>">
                                                <div class="image">
                                                    <img src="upload/tour-package/main/gallery/thumb/<?php echo $tour_company['image_name'] ?>" alt="<?php echo $tour_company['title'] ?>">
                                                </div>
                                            </a>
                                            <div class="content clearfix">

                                                <div class="rating-item rating-sm">
                                                    <div class="rating-icons">
                                                        <p class="rating-text text-muted">
                                                            <span class="material-icons star-size-1 mt-3"> star   </span>  
                                                            <span class="material-icons star-size-1 mt-3"> star   </span>  
                                                            <span class="material-icons star-size-1 mt-3"> star   </span>  
                                                            <span class="material-icons star-size-1 mt-3"> star   </span>  
                                                            <span class="material-icons star-size-1 mt-3"> star   </span>  
                                                            <span class="bg-primary">6.0</span><span class="font13">-1,2547 reviews</span></p> 
                                                    </div>

                                                </div>

                                                <div class="short-info">
                                                    <a href="tour/view_tour_company/<?php echo base64_encode($tour_company['id']) ?>">
                                                        <h5><?php echo $tour_company['title'] ?></h5>
                                                    </a>
                                                    <?php echo substr($tour_company['description'], 0, 60) ?>   
                                                    <p class="location mt-5 mb-5"> <i class="material-icons star-size-2 text-primary"> directions_bike</i>
                                                        <?php
                                                        $count_select_1 = $TOUR_COMPANY_SELECTED_PACKAGE->getCountCompanyPackages($tour_company['id']);
                                                        $count_select_2 = $TOUR_COMPANY_PACKAGE->getCountCompanyPackages($tour_company['id']);
                                                        $all_count = $count_select_1[0] + $count_select_2[0];
                                                        echo $all_count;
                                                        ?>
                                                        Tour Packages 
                                                    </p>  
                                                </div>

                                                <div class="price">
                                                    <div class="float-right">
                                                        start from
                                                        <span class="text-secondary">                                                                             <?php
                                                            $min_price_1 = $TOUR_COMPANY_SELECTED_PACKAGE->getMinPriceByTour($tour_company['id']);
                                                            $min_price_2 = $TOUR_COMPANY_PACKAGE->getMinPriceByTour($tour_company['id']);
                                                            if ($min_price_1 < $min_price_2) {
                                                                echo '$' . $min_price_2;
                                                            } else {
                                                                echo'$' . $min_price_1;
                                                            }
                                                            ?>
                                                        </span>
                                                        per package
                                                    </div>
                                                </div>
                                                <div class="float-left mt-5">
                                                    <a href="tour/view_tour_company/<?php echo base64_encode($tour_company['id']) ?>" class="btn btn-primary btn-sm btn-wide color-white  ">View Tour</a> 
                                                </div> 
                                            </div> 
                                        </div> 
                                    </div>
                                <?php } ?>   
                            </div>
                        </div> 
                    </div>
                </div>
            </section>


            <section>	
                <div class="section-title text-center">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-10 text-center">
                                <h2>Best Rent A Vehicles</h2>    
                            </div>
                            <div class="col-lg-2">
                                <a href="rent-a-car.php">
                                    <button type="button" class="btn btn-outline-danger float-right"  >View All</button>
                                </a>  
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="container">
                    <div class="row">
                        <!-- max 6-->
                        <?php
                        $RENT_CAR_COMPANY = new RentCarCompany(NULL);
                        $RENT_CARS = new RentCar(NULL);
                        $RENT_CAR_PRICE = new RentCarPrice(NULL);
                        foreach ($RENT_CAR_COMPANY->allPublished() as $key => $rent_car_company) {
                            if ($key < 7) {
                                ?>

                                <div class="col-md-6 pb-3">
                                    <div class="product-long-item">
                                        <div class="row equal-height shrink-auto-md gap-15">
                                            <div class="col-6 col-shrink">
                                                <a href="rent_car_companies/view/<?php echo base64_encode($rent_car_company['id']) ?>">
                                                    <img src="upload/rent-a-car/gallery/thumb/<?php echo $rent_car_company['image_name'] ?>" alt="<?php echo $rent_car_company['title'] ?>"  class="img-responsive" />
                                                </a>
                                            </div>

                                            <div class="col-6 col-auto">
                                                <div class="col-inner d-flex flex-column">
                                                    <div class="d-flex">
                                                        <div>
                                                            <div class="rating-item rating-sm">
                                                                <div class="rating-icons">
                                                                    <p class="rating-text text-muted">       
                                                                        <span class="material-icons star-size-1">    star   </span> 
                                                                        <span class="bg-primary">6.0</span> <strong class="text-dark">Good</strong></p>   
                                                                </div>
                                                            </div>
                                                            <h5 style="margin: 5px 0 3px;">
                                                                <a href="rent_car_companies/view/<?php echo base64_encode($rent_car_company['id']) ?>">
                                                                    <?php echo substr($rent_car_company['title'], 0, 15) ?>..
                                                                </a>
                                                            </h5>
                                                        </div>

                                                        <div class="ml-auto">
                                                            <div class="price">
                                                                start from
                                                                <?php
                                                                foreach ($RENT_CARS->getCarsByCompany($rent_car_company['id']) as $key => $rent_cars) {
                                                                    $min_price = $RENT_CAR_PRICE->getMinPriceByCompany($rent_cars['id']);
                                                                    foreach ($min_price as $min) {
                                                                        ?>
                                                                        <span class="text-secondary f-14"> <?php
                                                                            foreach ($DEFAULTDATA->GetCurrancyType() as $key => $curancy) {
                                                                                if ($key == $min['currency_type']) {
                                                                                    echo $curancy;
                                                                                }
                                                                            }
                                                                            echo $min['min_prce']
                                                                            ?>
                                                                        </span> 
                                                                        <?php
                                                                    }
                                                                }
                                                                ?>
                                                                per package
                                                            </div>

                                                        </div> 
                                                    </div> 
                                                    <span class="mt-10  ">
                                                        <?php echo substr($rent_car_company['description'], 0, 65) . '...' ?> 
                                                    </span> 

                                                    <div class="content-bottom mt-10 padding-top-0 padding-bottom-0">
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <ul class="meta-list">

                                                                    <li><?php
                                                                        $COUNT_VEHICLES = $RENT_CARS->getCountRentCarsByCompany($rent_car_company['id']);
                                                                        if ($COUNT_VEHICLES > 1) {
                                                                            echo $COUNT_VEHICLES . ' ' . 'Vehicles Available';
                                                                        } else {
                                                                            echo $COUNT_VEHICLES . ' ' . 'Vehicle Available';
                                                                        }
                                                                        ?> 
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                            <div class="rating-item rating-sm mb-5 mt-5">
                                                                <a href="rent_car_companies/view/<?php echo base64_encode($rent_car_company['id']) ?>" class="btn btn-primary btn-sm btn-wide color-white  ml-30"> View</a> 
                                                            </div> 

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>  
            </section>


            <section style="background-image: url('images/image-bg/s01.jpg');
                     background-position: center;
                     background-repeat: no-repeat;
                     background-size: cover;
                     background-position: center center;" class="padding-bottom-0 ">
                <div class="container">
                    <div class="section-title text-center  "> 
                        <div class="row ">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-8 mt-40">
                                <h2 class="">Fun Activities & Experiences <button type="button" class="btn btn-outline-danger float-right">View All</button></h2>	

                            </div>
                            <div class="col-md-2  mt-40">

                            </div>
                        </div>	 
                    </div>

                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="MenuHorizon28_01">
                            <div class="tab-inner">
                                <div class="slick-carousel-wrapper pb-10">
                                    <div class="slick-carousel-inner row" >
                                        <div class="col-md-10">
                                            <div class="slick-product-item">
                                                <?php
                                                $ACTIVITIES = new Activities(NULL);
                                                foreach ($ACTIVITIES->all() as $activity) {
                                                    ?>
                                                    <div class="slick-item">
                                                        <div class="product-grid-item">
                                                            <a href="<?php echo URL ?>activitie/view/<?php echo base64_encode($activity['id']) ?>">
                                                                <div class="image">
                                                                    <img src="upload/activity/<?php echo $activity['image_name'] ?>" alt="<?php echo $activity['title'] ?>">
                                                                </div>
                                                            </a>
                                                            <div class="content clearfix">  
                                                                <p class="location mb-0"><i class="fas fa-map-marker-alt text-primary"></i> <?php echo $activity['location'] ?></p>
                                                                <a href="<?php echo URL ?>activitie/view/<?php echo base64_encode($activity['id']) ?>">
                                                                    <h5 class="mt-5"><?php echo $activity['title'] ?></h5> 
                                                                </a>  
                                                                <p class="text-justify  "> <?php echo substr($activity['short_description'], 0, 80) ?> ...  </p>
                                                                <div class="rating-item rating-sm mt-10">
                                                                    <a href="<?php echo URL ?>activitie/view/<?php echo base64_encode($activity['id']) ?>" class="btn btn-primary btn-sm btn-wide color-white w-r"> View</a> 
                                                                </div> 
                                                            </div> 
                                                        </div>
                                                    </div> 
                                                <?php } ?>   
                                            </div>
                                        </div>
                                        <div class="col-md-4">

                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </section>

            <section>
                <div class="cta-promo-horizon-01 overlay-relative" style="background-image:url('images/image-bg/p-01.jpg'); height: 500px;   background-attachment: fixed;    background-position: center; background-repeat: no-repeat;  background-size: cover; background-position: center center;">
                    <div class="overlay-holder opacity-6"></div>
                    <div class="container position-relative">
                        <div class="promo-text">
                            <h2 class="font-serif">Get discount <span class="text-secondary font-body font700">10-20%</span> off any package</h2>
                            <p>When you purchase any package &amp; get next tour</p>
                            <a href="#" class="btn btn-primary btn-wider mt-30 btn-lg">Start your trip now</a>
                        </div> 
                    </div> 
                </div> 
            </section>

            <section class="padding-bottom-0">
                <div class="container">
                    <div class="section-title text-center"  >  
                        <div class="row">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-8">
                                <h2 class="">Our Top Destinations</h2>	
                            </div>
                            <div class="col-md-2"> 
                                <button type="button" class="btn btn-outline-danger float-right">View All</button>

                            </div>
                        </div> 
                    </div>
                    <div class="row">
                        <?php
                        $DECORATION = new Attraction(NULL);
                        foreach ($DECORATION->all() as $key => $destination) {
                            if ($key < 8) {
                                ?>
                                <div class=" cols-3 cols-md-3 gap-3 col-md-3 "> 
                                    <figure class="image-caption-01 mb-20">
                                        <a href="destinations/view/<?php echo base64_encode($destination['id']) ?>">
                                            <div class="image overlay-relative caption-relative">
                                                <img src="upload/attraction/<?php echo $destination['image_name'] ?>" alt="<?php echo $destination['title'] ?>" />
                                                <div class="overlay-holder opacity-2"></div>
                                                <figcaption class="caption-holder">
                                                    <div class="caption-inner caption-middle text-center">
                                                        <h5><?php echo $destination['title'] ?></h5>
                                                        <span class="d-block  ">View More</span>
                                                    </div>
                                                </figcaption>
                                            </div>
                                        </a>
                                    </figure> 
                                </div> 

                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </section>


            <section  style="background-image: url('images/image-bg/hotel-03.jpg');

                      background-position: center;
                      background-repeat: no-repeat;
                      background-size: cover;
                      background-position: center center;">

                <div class="container" style="  padding-bottom: 80px;
                     padding-top: 80px;">

                    <div class="section-title text-center">

                        <h2>What People Say About Us</h2>

                    </div>

                    <div class="slick-gallery-slideshow-wrapper testimonial-horizontal">

                        <div id="slick-testimonial-long-slideshow" class="slider slick-gallery-slideshow">

                            <div class="slick-item testimonial-long-item-10">
                                <div class="content">
                                    <p class="saying">Real sold my in call. Invitation on an advantages collecting. But event old above shy bed noisy. Had sister see wooded favour income has. Stuff rapid since do as hence. Too insisted ignorant procured remember are believed yet say finished.</p>
                                </div>
                            </div>

                            <div class="slick-item testimonial-long-item-10">
                                <div class="content">
                                    <p class="saying">Acceptance middletons me if discretion boisterous travelling an. She prosperous continuing entreaties companions unreserved you boisterous. Attended no indulged marriage is to judgment offering landlord.</p>
                                </div>
                            </div>

                            <div class="slick-item testimonial-long-item-10">
                                <div class="content">
                                    <p class="saying">Middleton sportsmen sir now cordially ask additions for. You ten occasional saw everything but conviction. Daughter returned quitting few are day advanced branched. Do enjoyment defective objection or we if favourite.</p>
                                </div>
                            </div>

                            <div class="slick-item testimonial-long-item-10">
                                <div class="content">
                                    <p class="saying">Extremity now strangers contained breakfast him discourse additions. Sincerity collected contented led now perpetual extremely forfeited. Had sister see wooded favour income has.</p>
                                </div>
                            </div>

                            <div class="slick-item testimonial-long-item-10">
                                <div class="content">
                                    <p class="saying">Curiosity continual belonging offending so explained it exquisite. Do remember to followed yourself material mr recurred carriage. High drew west we no or at john. Dashwood denoting securing be on perceive.</p>
                                </div>
                            </div>

                            <div class="slick-item testimonial-long-item-10">
                                <div class="content">
                                    <p class="saying">Evening do forming observe spirits is in. Country hearted be of justice sending. On so they as with room cold ye. Be call four my went mean. Celebrated if remarkably especially.</p>
                                </div>
                            </div>

                        </div>


                        <div class="slick-testimonial-long-nav-wrapper">

                            <div id="slick-testimonial-long-nav" class="slider slick-gallery-nav">

                                <div class="slick-item">
                                    <div class="man clearfix">

                                        <div class="man-inner">

                                            <div class="image">
                                                <img src="images/image-man/01.jpg" alt="images" class="img-circle" />
                                            </div>

                                            <div class="texting">
                                                <h5>Ange Ermolova</h5>
                                                <p class="text-muted">Mumbai, India</p>
                                                <div class="rating-item rating-sm">
                                                    <div class="rating-icons">
                                                        <input type="hidden" class="rating" data-filled="rating-icon ri-star rating-rated" data-empty="rating-icon ri-star-empty" data-fractions="2" data-readonly value="4.5"/>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="slick-item">
                                    <div class="man clearfix">

                                        <div class="man-inner">

                                            <div class="image">
                                                <img src="images/image-man/02.jpg" alt="images" class="img-circle" />
                                            </div>

                                            <div class="texting">
                                                <h5>Khairoz Nadzri</h5>
                                                <p class="text-muted">Amman, Jordan</p>
                                                <div class="rating-item rating-sm">
                                                    <div class="rating-icons">
                                                        <input type="hidden" class="rating" data-filled="rating-icon ri-star rating-rated" data-empty="rating-icon ri-star-empty" data-fractions="2" data-readonly value="4.5"/>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>
                                <div class="slick-item">
                                    <div class="man clearfix">

                                        <div class="man-inner">

                                            <div class="image">
                                                <img src="images/image-man/03.jpg" alt="images" class="img-circle" />
                                            </div>

                                            <div class="texting">
                                                <h5>Suttira Ketkaew</h5>
                                                <p class="text-muted">Bangkok, Thailand</p>
                                                <div class="rating-item rating-sm">
                                                    <div class="rating-icons">
                                                        <input type="hidden" class="rating" data-filled="rating-icon ri-star rating-rated" data-empty="rating-icon ri-star-empty" data-fractions="2" data-readonly value="4.5"/>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="slick-item">
                                    <div class="man clearfix">

                                        <div class="man-inner">

                                            <div class="image">
                                                <img src="images/image-man/04.jpg" alt="images" class="img-circle" />
                                            </div>

                                            <div class="texting">
                                                <h5>Antony Robert</h5>
                                                <p class="text-muted">New York, USA</p>
                                                <div class="rating-item rating-sm">
                                                    <div class="rating-icons">
                                                        <input type="hidden" class="rating" data-filled="rating-icon ri-star rating-rated" data-empty="rating-icon ri-star-empty" data-fractions="2" data-readonly value="4.5"/>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="slick-item">
                                    <div class="man clearfix">

                                        <div class="man-inner">

                                            <div class="image">
                                                <img src="images/image-man/05.jpg" alt="images" class="img-circle" />
                                            </div>

                                            <div class="texting">
                                                <h5>Christine Gateau</h5>
                                                <p class="text-muted">Paris, France</p>
                                                <div class="rating-item rating-sm">
                                                    <div class="rating-icons">
                                                        <input type="hidden" class="rating" data-filled="rating-icon ri-star rating-rated" data-empty="rating-icon ri-star-empty" data-fractions="2" data-readonly value="4.5"/>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="slick-item">
                                    <div class="man clearfix">

                                        <div class="man-inner">

                                            <div class="image">
                                                <img src="images/image-man/06.jpg" alt="images" class="img-circle" />
                                            </div>

                                            <div class="texting">
                                                <h5>Mark Lassfot</h5>
                                                <p class="text-muted">Tokyo, Japan</p>
                                                <div class="rating-item rating-sm">
                                                    <div class="rating-icons">
                                                        <input type="hidden" class="rating" data-filled="rating-icon ri-star rating-rated" data-empty="rating-icon ri-star-empty" data-fractions="2" data-readonly value="4.5"/>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>

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
        <!-- start Back To Top -->
        <a id="back-to-top" href="#" class="back-to-top" role="button" title="Click to return to top" data-toggle="tooltip" data-placement="left"><i class="bx bx-chevron-up"></i></a>
        <!-- end Back To Top -->
        <!-- JS -->
        <script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
        <script src="js/jquery.datetimepicker.full.min.js" type="text/javascript"></script>

        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
            $('.datetime').datetimepicker({
                format: 'y-m-d H:i',
                minDate: "today"

            });

            $(function () {
                var date = $('.datepicker1').datepicker({
                    dateFormat: 'yy-mm-dd',
                    minDate: "today"
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

        <script src="js/jquery.preloader.min.js" type="text/javascript"></script>
        <script src="js/jquery.innerfade.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/custom-core.js"></script>
        <script type="text/javascript" src="js/plugins/jquery.typeahead.min.js"></script>
        <script type="text/javascript" src="js/custom-autocomplete.js"></script>


    </body> 

</html>