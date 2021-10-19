<!doctype html>
<?php
$id = '';
$id = base64_decode($this->id);

$RENT_CAR_PRICE = new RentCarPrice($id);
$RENT_CAR = new RentCar($RENT_CAR_PRICE->rent_car);
$RENT_CAR_COMPANY = new RentCarCompany($RENT_CAR->company_id);
$DEFAULTDATA = new DefaultData();
?>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Title Of Site -->
        <title>MyTravelPartner.lk - Hotel Booking</title>
        <meta name="description" content="Resposnive HTML Template for Travel Booking Based on Bootstrap 4.x.x" />
        <meta name="keywords" content="accommodation, booking, holiday, hostel, hotel, motel, reservation, resort, tour, tourism, travel, travel agency, trip, vacation, flight, guide, journey, rental, destination, travel booking" />
        <meta name="author" content="crenoveative">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="images/logo-favicon.png">

        <!-- Fav and Touch Icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo URL ?>images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo URL ?>images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo URL ?>images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo URL ?>images/ico/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="<?php echo URL ?>images/ico/favicon.png">

        <!-- Font face -->
        <link href="https://fonts.googleapis.com/css?family=Aleo:300,300i,400,400i,700,700i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet"> 

        <!-- CSS -->
        <link href="<?php echo URL ?>css/font-icons.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo URL ?>bootstrap/css/bootstrap.min.css" media="screen">	
        <link href="<?php echo URL ?>css/animate.css" rel="stylesheet">
        <link href="<?php echo URL ?>css/main.css" rel="stylesheet">

        <link href="<?php echo URL ?>css/style.css" rel="stylesheet">
        <link href="<?php echo URL ?>css/your-style.css" rel="stylesheet">
        <link href="<?php echo URL ?>css/plugin.css" rel="stylesheet">
        <link href="<?php echo URL ?>css/jquery.timepicker.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"  rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link href="<?php echo URL ?>css/sweetalert.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link href="<?php echo URL ?>booking-hotel/style.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo URL ?>css/jquery.datetimepicker.min.css" rel="stylesheet" type="text/css"/>


    </head>



    <!-- start Body -->
    <body class="with-waypoint-sticky"> 
        <!-- start Body Inner -->
        <div class="body-inner">

            <!-- start Header -->
<?php include 'views/header.php'; ?>
            <!-- end Header --> 

            <!-- start Main Wrapper -->
            <div class="main-wrapper scrollspy-action">

                <div class="page-title breadcrumb-wrapper">
                    <div class="container">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="hotel.php">Rent Car</a></li> 
                                <li class="breadcrumb-item"><a href="view-rent-company.php?id=<?php echo $RENT_CAR_COMPANY->id ?>"><?php echo $RENT_CAR_COMPANY->title ?></a></li> 
                                <li class="breadcrumb-item active" aria-current="page"><?php echo $RENT_CAR->title ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="page-wrapper page-payment bg-light">

                    <div class="container">

                        <div class="row gap-30">


                            <div class="col-12 col-lg-4 order-lg-last">

                                <aside class="sticky-kit sidebar-wrapper">

                                    <a href="#" class="product-small-item">
                                        <div class="image">
                                            <img src="<?php echo URL ?>upload/rent-a-car/gallery/thumb/<?php echo $RENT_CAR_COMPANY->image_name ?>" alt="<?php echo $RENT_CAR_COMPANY->title ?>" />
                                        </div>
                                        <div class="content">
                                            <div class="content-body">
                                                <div class="rating-item rating-sm rating-inline mb-7">
                                                    <div class="rating-icons">
                                                        <input type="hidden" class="rating" data-filled="rating-icon ri-star rating-rated" data-empty="rating-icon ri-star-empty" data-fractions="2" data-readonly value="4.5"/>
                                                    </div>
                                                    <p class="rating-text text-muted font-10">26 reviews</p>
                                                </div>
                                                <h6><?php echo $RENT_CAR_COMPANY->title ?></h6>
                                                <span class="meta text-muted"><i class="ion-location text-info"></i> Katong, Singapore</span>
                                            </div>
                                            <div class="price">
                                                from <span class="text-secondary font700">$895</span> /night
                                            </div>
                                        </div>
                                    </a>

                                    <div class="clear"></div>

                                    <div class="booking-selection-box"  id="airDatepickerRange-vehicle">

                                        <div class="content">
                                            <h5 class="font-serif font400">Booking <?php echo $RENT_CAR->title ?><span id="days_count"></span>  </h5>

                                            <ul class="booking-amount-list clearfix mb-20">
                                                <li ><span id="start_date"></span> <span class="font600" id="start_day_name">   </span>
                                                </li>
                                                <li class="text-right"> <span id="end_date"></span> <span class="font700" id="end_date_name"> </span>
                                                </li>
                                            </ul>

                                            <div class="hotel-room-sm-item mb-30">
                                                <ul class="confirmation-list">
                                                    <li class="clearfix">
                                                        <span class="font-weight-bold">Pick up Date and Time</span>
                                                        <span id="pick_up_date_append"> </span>
                                                    </li>
                                                    <li class="clearfix">
                                                        <span class="font-weight-bold">Return Date and Time</span>
                                                        <span id="return_date_append"> </span>
                                                    </li>
                                                    <li class="clearfix">
                                                        <span class="font-weight-bold">Pick up Method</span>
                                                        <span id="pick_up_method_append"></span>
                                                    </li>
                                                    <li class="clearfix">
                                                        <span class="font-weight-bold">Drop Method</span>
                                                        <span id="drop_method_append"> </span>
                                                    </li>

                                                    <li class="clearfix">
                                                        <span class="font-weight-bold">Distance</span>
                                                        <span>$345</span>
                                                    </li>
                                                    <li class="clearfix">
                                                        <span class="font-weight-bold">Per km</span>
                                                        <span>$345</span>
                                                    </li>

                                                </ul>
                                            </div>

                                            <h5 class="font-serif font400">Price</h5>
                                            <ul class="summary-price-list">
                                                <li>Package Price <small class="f-12" >(Day price - <?php
foreach ($DEFAULTDATA->GetCurrancyType() as $key => $curancy) {
    if ($key == $RENT_CAR_PRICE->currency_type) {
        echo $curancy;
        echo '<input type="hidden" id="curancy" value="' . $curancy . '">';
    }
}
echo $RENT_CAR_PRICE->price
?> x <span id="days_append">1</span>)
                                                    </small> <span class="absolute-right" id="package_price_append"></span></li>
                                                <li>Distance Charge <span class="absolute-right">$26.36</span></li>
                                                <li>Driver Charge <span class="absolute-right">$26.36</span></li>
                                                <li class="total">Total <span class="text-main absolute-right">$26.36</span></li>
                                                <input type="hidden" value="<?php echo $RENT_CAR_PRICE->price ?>" id="package_price">
                                            </ul>

                                        </div>

                                    </div>

                                </aside>

                            </div>

                            <div class="col-12 col-lg-8">

                                <div class="content-wrapper">

                                    <div class="success-box">

                                        <div class="icon">

                                            <span><i class="ri ri-check-square"></i></span>

                                        </div>

                                        <div class="content">
                                            <h4>Great choice! You’re just 1 minute away from booking. </h4>
                                            <p>Fill in your details below to complete the booking. The host will then have 24 hours to accept your booking request. Once your booking is accepted, we will send you a confirmation email with the host’s contact details and the exact address of the property. </p>
                                        </div>

                                    </div>

<?php if (!$VISITOR->id) {
    ?>
                                        <div class="alert alert-warning pt-10 pb-10 mb-30" role="alert"><i class="fas fa-info-circle mr-5"></i>Returning customer? <a href="visitor/hotel-booking-login.php?id=<?php echo $id ?>" class="letter-spacing-0">Click here to login</a></div>
                                    <?php } ?>
                                    <div class="payment-form-wrapper">

                                        <h3 class="heading-title"><span>Billing Information</span></h3>
                                        <p class="post-heading">Two before narrow not relied how except moment myself.</p>

                                        <div class="bg-white-shadow pt-25 ph-30">
                                            <div class="row gap-20 mb-0">

                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label>First name <span class="font12 text-danger">*</span></label>
                                                        <input type="text" class="form-control form-bg-light" value="<?php echo $VISITOR->full_name ?>" readonly=""/>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label>Email <span class="font12 text-danger">*</span></label>
                                                        <input type="email" class="form-control form-bg-light" value="<?php echo $VISITOR->email ?>" readonly=""/>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label>Phone <span class="font12 text-danger">*</span></label>
                                                        <input type="text" class="form-control form-bg-light" value="<?php echo $VISITOR->phone_number ?>" readonly=""/>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label>Message   <span class="font12 text-danger">*</span></label>
                                                        <textarea class="form-control form-bg-light" rows="6" id="txtMessage" name="txtMessage"></textarea>
                                                        <div class="col-12">
                                                            <span id="spanMessage" ></span>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="mb-20"></div>


                                        <h3 class="heading-title"><span>" <?php echo $RENT_CAR->title ?> " - Vehicle Booking Details</span></h3>
                                        <p class="post-heading">Dinner abroad am depart ye turned hearts as me wished.</p>

                                        <div class="bg-white-shadow pt-25 ph-30" id="wrapper"> 
                                            <div class="row gap-20 mb-0 "   >

                                                <div class="col-12 col-sm-3">
                                                    <div class="form-group"> 
                                                        <label>Pickup Date</label>
                                                        <div class="form-icon-left">
                                                            <span class="icon-font text-muted"><i class="bx bx-calendar"></i></span>
                                                            <input type="text"  id="pick_up_date" class="form-control form-readonly-control datepicker1 val_change "  name="pick_up_date" placeholder="dd/mm/yyyy">

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-3">
                                                    <div class="form-group"> 
                                                        <label>Pickup Time</label>
                                                        <div class="form-icon-left">
                                                            <span class="icon-font text-muted"><i class="bx bx-time"></i></span>
                                                            <input type="text"  id="pick_up_time" class="form-control form-readonly-control val_change">

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3 col-12 col-sm-3">
                                                    <div class="form-group"> 
                                                        <label>Return Date</label>
                                                        <div class="form-icon-left">
                                                            <span class="icon-font text-muted"><i class="bx bx-calendar"></i></span>
                                                            <input type="text" id="return_date" class="form-control form-readonly-control datepicker2 val_change" name="return_date" placeholder="dd/mm/yyyy">
                                                            <div class="col-12">
                                                                <span id="spanCheckOut" ></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-3">
                                                    <div class="form-group"> 
                                                        <label>Return Time</label>
                                                        <div class="form-icon-left">
                                                            <span class="icon-font text-muted"><i class="bx bx-time"></i></span>
                                                            <input type="text"  id="return_time" class="form-control form-readonly-control   val_change"  name="check_in_date" >
                                                            <div class="col-12">
                                                                <span id="spanCheckIn" ></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-xs-6">

                                                    <div class="form-group form-spin-group">
                                                        <label for="room-amount">Number of Days</label>
                                                        <div class="form-icon-left">
                                                            <span class="icon-font"><i class="bx bx-calendar-check text-muted"></i></span>
                                                            <input type="text" class="form-control   form-readonly-control val_change"  id="days" name="days"   value="1" readonly=""  /> 
                                                        </div>
                                                    </div> 
                                                </div>

                                                <div class="col-md-4 col-sm-6 col-xs-6">

                                                    <div class="form-group form-spin-group">
                                                        <label for="adult-amount">Adults</label>
                                                        <div class="form-icon-left">
                                                            <span class="icon-font"><i class="dripicons-user text-muted"></i></span>
                                                            <input type="text" class="form-control touch-spin-03 form-readonly-control val_change"  value="0" readonly id="adults" name="adults"/>
                                                        </div> 
                                                    </div>
                                                </div>

                                                <div class="col-md-4 col-sm-6 col-xs-6">
                                                    <div class="form-group form-spin-group">
                                                        <label for="child-amount">Children</label>
                                                        <div class="form-icon-left">
                                                            <span class="icon-font"><i class="dripicons-user text-muted"></i></span>
                                                            <input type="text" class="form-control touch-spin-03 form-readonly-control val_change"  value="0" readonly id="child" name="child"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>  
                                        </div>
                                        <div class="bg-white-shadow pt-25 ph-30 mt-20 "  id="picklocation"> 
                                            <div class="row gap-20 mb-0 "  >
                                                <div class="col-md-6 col-xs-12"> 
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="pickupnearest" name="flightSearchRadio" value="Nearest Office" class="custom-control-input pick_up_method val_change"  >
                                                        <label class="custom-control-label" for="pickupnearest">Get the vehicle in nearest office.</label>

                                                    </div> 
                                                </div>

                                                <div class="col-md-6 col-xs-12"> 
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="pickuphomedelivery" name="flightSearchRadio" value="Home Delivery" class="custom-control-input pick_up_method val_change"  >
                                                        <label class="custom-control-label" for="pickuphomedelivery">Home Delivery</label>

                                                    </div>

                                                </div> 
                                                <div class="col-md-6 col-xs-12 mt-15"> 
                                                    <div class="form-group form-spin-group">
                                                        <label for="adult-amount">Select your nearest office</label>
                                                        <div class="form-icon-left">
                                                            <span class="icon-font"><i class="dripicons-user text-muted"></i></span>
                                                            <select class="form-control" id="nearest_office_pick_up">
                                                                <option> - select nearest office  -</option>
                                                                <option value="Galle"> Galle</option>
                                                            </select>
                                                        </div> 
                                                    </div> 
                                                </div>

                                                <div class="col-md-6 col-xs-12 col-sm-6 mt-15 " style="display: none" id="pickuphome">
                                                    <div class="form-group"> 
                                                        <label>Where you want us to deliver the vehicle</label>
                                                        <div class="form-icon-left">
                                                            <span class="icon-font text-muted"><i class="bx bx-map-pin"></i></span>
                                                            <input type="text" id="deliver_home_pick_up" class="form-control form-readonly-control  " name="check_out_date" placeholder="Enter Location">
                                                            <div class="col-12">
                                                                <span id="spanCheckOut" ></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="bg-white-shadow pt-25 ph-30 mt-20">
                                            <div class="row  "> 
                                                <div class="col-md-6 col-xs-12"> 
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="dropupnearest" name="dropupnearest" class="custom-control-input drop_method" value="Nearest Office">
                                                        <label class="custom-control-label" for="dropupnearest">Return vehicle to nearest office</label>

                                                    </div> 
                                                </div>

                                                <div class="col-md-6 col-xs-12"> 
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="dropuphomedelivery" name="dropupnearest" class="custom-control-input drop_method" value="Home Delivery" >
                                                        <label class="custom-control-label" for="dropuphomedelivery">Home Delivery</label>

                                                    </div>

                                                </div>  
                                            </div>
                                            <div class="row gap-20 mb-0 mt-15"  >
                                                <div class="col-md-6 col-xs-12"> 
                                                    <div class="form-group form-spin-group">
                                                        <label for="adult-amount">Select your nearest office</label>
                                                        <div class="form-icon-left">
                                                            <span class="icon-font"><i class="dripicons-user text-muted"></i></span>
                                                            <select class="form-control" id="retun_nearest">
                                                                <option> - select nearest office  -</option>
                                                                <option value="Galle"> Galle</option>
                                                            </select>
                                                        </div> 
                                                    </div> 
                                                </div>

                                                <div class="col-md-6 col-xs-12 " style="display: none" id="dropuphome">
                                                    <div class="form-group"> 
                                                        <label>Where you want us to deliver the vehicle</label>
                                                        <div class="form-icon-left">
                                                            <span class="icon-font text-muted"><i class="bx bx-map-pin"></i></span>
                                                            <input type="text" id="return_homde_delivery" class="form-control form-readonly-control  " name="check_out_date" placeholder="Enter Location">
                                                            <div class="col-12">
                                                                <span id="spanCheckOut" ></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="mb-20"></div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="acceptTerm"   />
                                            <label class="custom-control-label" for="acceptTerm">   So gate at no only none open. <a href="#">Betrayed at properly</a> it of graceful on. <a href="#">Dinner abroad</a> am depart ye turned  .</label>
                                        </div>
                                        <div class="mb-20"></div>
                                        <div class="row">
                                            <div class="  col-4"  >
                                                <label for="comment">Security Code:</label>
                                                <input  type="text" name="captchacode" id="captchacode" class="form-control input-validater" placeholder="Enter the code " style="color: black">
                                                <div class="col-lg-12">
                                                    <span id="capspan" ></span>
                                                </div>
                                            </div>
                                            <div class="col-4"  >
<?php include("./booking-hotel/captchacode-widget.php"); ?>
                                            </div>  
                                            <div class="col-4  "  >
                                                <button class="btn btn-primary mt-20" id="btnSubmit" type="submit" style="float: right">Book now <i class="fa fa-long-arrow-right"></i></button> 
                                            </div>  
                                        </div> 



                                        <div class="row shrink-auto-md gap-30 mt-40">

                                            <div class="col-12 col-shrink">
                                                <div class="featured-contact-01">
                                                    <h6>Need help? Call us on</h6>
                                                    <span class="phone-number"><i class="material-icons">phone</i> 1985 5524 145</span>
                                                    It's free to call from anywhere
                                                </div>
                                            </div>

                                            <div class="col-12 col-auto">

                                                <h6 class="text-uppercase letter-spacing-2 line-1 font500"><span>Why Book With Travel Material</span></h6>

                                                <ul class="list-icon-data-attr font-ionicons">
                                                    <li data-content="&#xf383">Excited him now natural saw passage age explain.</li>
                                                    <li data-content="&#xf383">Farther so friends is detract do private.</li>
                                                    <li data-content="&#xf383">Procured is material his offering humanity laughing moderate can.</li>
                                                </ul>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="fullwidth-horizon-sticky border-0">&#032;</div> <!-- is used to stop the above stick menu -->

                        </div>

                    </div>

                </div>		
                <!-- end Main Wrapper -->



                <!-- start Footer Wrapper -->
<?php include 'views/footer.php'; ?>
                <!-- start Footer Wrapper -->



            </div> 
            <!-- start Back To Top -->
            <a id="back-to-top" href="#" class="back-to-top" role="button" title="Click to return to top" data-toggle="tooltip" data-placement="left"><i class="bx bx-chevron-up"></i></a>

            <script type="text/javascript" src="<?php echo URL ?>js/jquery-2.2.4.min.js"></script> 
            <script src="<?php echo URL ?>js/jquery.datetimepicker.full.min.js" type="text/javascript"></script>
            <script>
                $('#pick_up_time').datetimepicker({
                    dayOfWeekStart: 1,
                    lang: 'en',
                    minDate: 0,
                    datepicker: false,
                    format: 'H:i',
                    defaultTime: '00:00',
                    value: ' '
                });
                $('#return_time').datetimepicker({
                    dayOfWeekStart: 1,
                    lang: 'en',
                    minDate: 0,
                    datepicker: false,
                    format: 'H:i',
                    defaultTime: '00:00',
                    value: ' '
                });
            </script> 
            <script src="<?php echo URL ?>js/ajax/custome.js" type="text/javascript"></script>
            <script type="text/javascript" src="<?php echo URL ?>js/plugins.js"></script> 
            <script type="text/javascript" src="<?php echo URL ?>js/plugins/jquery.typeahead.min.js"></script>
            <script type="text/javascript" src="<?php echo URL ?>js/custom-autocomplete.js"></script> 
            <script src="<?php echo URL ?>js/sweetalert.min.js" type="text/javascript"></script>
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
            <script>

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

            <script src="<?php echo URL ?>js/ajax/rent-vehicle-booking.js" type="text/javascript"></script>
            <script type="text/javascript" src="<?php echo URL ?>js/custom-core.js"></script> 

    </body>

</html>