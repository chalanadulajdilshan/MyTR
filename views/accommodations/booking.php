<!doctype html>

<?php
//if (!isset($_SESSION)) {
//    session_start();
//
//
if (isset($_SESSION['id'])) {

    $VISITOR = new Visitor($_SESSION['id']);
}
//}



$id = '';
$id = base64_decode($this->booking_id);

$ROOM = new Room($id);
$ACCOMMODATION = new Accommodation($ROOM->acc_id);
$min_price = $ROOM->getMinPriceByAccommodation($ROOM->acc_id);
$ACCOMMODATION_BOOKING = new AccommodationBooking(NULL);
$LAST_ID = $ACCOMMODATION_BOOKING->getCountByAccommodationId($ROOM->acc_id) + 1;

$CITY = new City($ACCOMMODATION->city);
?>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Title Of Site -->
        <title><?php echo $ACCOMMODATION->title ?>   || MyTravelPartner.lk </title>
        <meta name="description" content="Resposnive HTML Template for Travel Booking Based on Bootstrap 4.x.x" />
        <meta name="keywords" content="accommodation, booking, holiday, hostel, hotel, motel, reservation, resort, tour, tourism, travel, travel agency, trip, vacation, flight, guide, journey, rental, destination, travel booking" />
        <meta name="author" content="crenoveative">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo URL ?>images/logo-favicon.png">

        <!-- Fav and Touch Icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo URL ?>images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo URL ?>images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo URL ?>images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo URL ?>images/ico/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="images/ico/favicon.png">

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
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"  rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link href="css/sweetalert.css" rel="<?php echo URL ?>stylesheet" type="text/css"/>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link href="<?php echo URL ?>booking-hotel/style.css" rel="stylesheet" type="text/css"/>
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
            <div class="main-wrapper scrollspy-action">

                <div class="page-title breadcrumb-wrapper">
                    <div class="container">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="hotel.php">Hotels</a></li> 
                                <li class="breadcrumb-item"><a href="hotel-view.php?id=<?php echo $ACCOMMODATION->id ?>"><?php echo $ACCOMMODATION->title ?></a></li> 
                                <li class="breadcrumb-item active" aria-current="page"><?php echo $ROOM->title ?></li>
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
                                            <img src="<?php echo URL ?>upload/accommodation/gallery/thumb/<?php echo $ACCOMMODATION->image_name ?>" alt="<?php echo $ACCOMMODATION->title ?>" />
                                        </div>
                                        <div class="content">
                                            <div class="content-body">
                                                <div class="rating-item rating-sm rating-inline mb-7">
                                                    <div class="rating-icons">
                                                        <?php if ($ACCOMMODATION->star_rating == 1) { ?>
                                                            <small>Start Rating </small><span class="material-icons star-size">    star   </span> 
                                                        <?php } ?>

                                                        <?php if ($ACCOMMODATION->star_rating == 2) { ?>
                                                            <small>Start Rating </small><span class="material-icons star-size">    star   </span> <span class="material-icons star-size">    star   </span>
                                                        <?php } ?>
                                                        <?php if ($ACCOMMODATION->star_rating == 3) { ?>
                                                            <small>Start Rating </small><span class="material-icons star-size">    star   </span> <span class="material-icons star-size">    star   </span><span class="material-icons star-size">    star   </span>
                                                        <?php } ?>
                                                        <?php if ($ACCOMMODATION->star_rating == 4) { ?>
                                                            <small>Start Rating </small><span class="material-icons star-size">    star   </span> <span class="material-icons star-size">    star   </span><span class="material-icons star-size">    star   </span><span class="material-icons star-size">    star   </span>
                                                        <?php } ?>
                                                        <?php if ($ACCOMMODATION->star_rating == 5) { ?>
                                                            <small>Start Rating </small><span class="material-icons star-size">    star   </span> <span class="material-icons star-size">    star   </span><span class="material-icons star-size">    star   </span><span class="material-icons star-size">    star   </span><span class="material-icons star-size">    star   </span>
                                                        <?php } ?>
                                                    </div>

                                                </div>
                                                <h6><?php echo $ACCOMMODATION->title ?></h6>
                                                <span class="meta text-muted"><i class="ion-location text-info"></i> <?php echo $ACCOMMODATION->address_1 ?>, <?php echo $CITY->name ?></span>
                                            </div>
                                            <div class="price">
                                                Start from <span class="text-secondary font700">   
                                                    <?php
                                                    if ($ROOM->discount != 0) {
                                                        $dis_count = ($ROOM->price * $ROOM->discount / 100);
                                                        $dis_price = $ROOM->price - $dis_count;
                                                        ?>
                                                        <span class = "not-this">$<?php echo $ROOM->price ?></span> 

                                                        <span class = "number text-secondary"><small>$</small><?php echo $dis_price ?>   </span>
                                                    <?php } else { ?>
                                                        <span class = "number text-secondary"><small>$</small><?php echo$ROOM->price ?></span> </span>

                                                <?php } ?>
                                                </span> / Per night
                                            </div>
                                        </div>
                                    </a>

                                    <div class="clear"></div>

                                    <div class="booking-selection-box disply-row" style="display: none">

                                        <div class="content">

                                            <h5 class="font-serif font400">Booking for <span id="days"></span> Nights</h5>

                                            <ul class="booking-amount-list clearfix mb-20">
                                                <li ><span id="start_date"></span> <span class="font600" id="start_day_name">   </span>
                                                </li>
                                                <li class="text-right"> <span id="end_date"></span> <span class="font700" id="endDay_name"> </span>
                                                </li>
                                            </ul>

                                            <h5 class="font-serif font400">Rooms</h5>
                                            <div class="hotel-room-sm-item mb-30">
                                                <div class="the-room-item">
                                                    <h6 id="room_name_append"> </h6>
                                                    <div class="clearfix">
                                                        <span class="amount" id="per_night">  </span>
                                                        <span class="price" id="price"> </span>
                                                    </div>
                                                </div>

                                            </div>

                                            <h5 class="font-serif font400">Price</h5>
                                            <ul class="summary-price-list">
                                                <li> <p id="price_stay"> </p> <span class="absolute-right price_stay"> </span></li>
<!--                                                <li>taxes and fees <span class="absolute-right">$26.36</span></li>-->
                                                <li class="total">Total Price<span class="text-main absolute-right price_stay"> </span></li>
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

                                    <?php
                                    if (isset($VISITOR->id)) {
                                        ?>
                                    <?php } else { ?>
                                        <div class="alert alert-warning pt-10 pb-10 mb-30" role="alert"><i class="fas fa-info-circle mr-5"></i>Returning customer? <a href="<?php echo URL ?>visitor/hotel-booking-login.php?id=<?php echo $id ?>" class="letter-spacing-0">Click here to login</a></div>
                                    <?php } ?>
                                    <div class="payment-form-wrapper">

                                        <h3 class="heading-title"><span>Billing Information</span></h3>
                                        <p class="post-heading">Two before narrow not relied how except moment myself.</p>

                                        <div class="bg-white-shadow pt-25 ph-30"  >
                                            <div class="row gap-20 mb-0">

                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label>First name <span class="font12 text-danger">*</span></label>
                                                        <input type="text" class="form-control form-bg-light" value="<?php
                                    if (isset($VISITOR->full_name)) {
                                        echo $VISITOR->full_name;
                                    }
                                    ?>" readonly=""/>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label>Email <span class="font12 text-danger">*</span></label>
                                                        <input type="email" class="form-control form-bg-light" value="<?php
                                                        if (isset($VISITOR->email)) {
                                                            echo $VISITOR->email;
                                                        }
                                    ?>" readonly=""/>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label>Phone <span class="font12 text-danger">*</span></label>
                                                        <input type="text" class="form-control form-bg-light" value="<?php
                                                        if (isset($VISITOR->phone_number)) {
                                                            echo $VISITOR->phone_number;
                                                        }
                                    ?>" readonly=""/>
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


                                        <h3 class="heading-title"><span>" <?php echo $ROOM->title ?> " - Room Booking Details</span></h3>
                                        <p class="post-heading">Dinner abroad am depart ye turned hearts as me wished.</p>

                                        <div class="bg-white-shadow pt-25 ph-30"> 
                                            <div class="row gap-20 mb-0 " id="airDatepickerRange-hotel" >
                                                <?php
                                                if (isset($VISITOR->id)) {
                                                    ?>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group"> 
                                                            <label>Check-in</label>
                                                            <div class="form-icon-left">
                                                                <span class="icon-font text-muted"><i class="bx bx-calendar"></i></span>
                                                                <input type="text"  id="check_in_date" class="form-control form-readonly-control datepicker1 "  name="check_in_date" placeholder="dd/mm/yyyy">
                                                                <div class="col-12">
                                                                    <span id="spanCheckIn" ></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group"> 
                                                            <label>Check-out</label>
                                                            <div class="form-icon-left">
                                                                <span class="icon-font text-muted"><i class="bx bx-calendar"></i></span>
                                                                <input type="text" id="check_out_date" class="form-control form-readonly-control datepicker2" name="check_out_date" placeholder="dd/mm/yyyy">
                                                                <div class="col-12">
                                                                    <span id="spanCheckOut" ></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4 col-sm-4">

                                                        <div class="form-group form-spin-group">
                                                            <label for="room-amount">Rooms</label>
                                                            <div class="form-icon-left">
                                                                <span class="icon-font"><i class="bx bx-bed text-muted"></i></span>
                                                                <input type="text" class="form-control touch-spin-03 form-readonly-control" value="0" id="rooms" name="rooms"/>

                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="col-4 col-sm-4 col-md-4">

                                                        <div class="form-group form-spin-group">
                                                            <label for="adult-amount">Adults</label>
                                                            <div class="form-icon-left">
                                                                <span class="icon-font"><i class="dripicons-user text-muted"></i></span>
                                                                <input type="text" class="form-control touch-spin-03 form-readonly-control" placeholder="dd/mm/yyyy" value="0" readonly id="adults" name="adults"/>

                                                            </div> 
                                                        </div> 
                                                    </div>
                                                <?php } else { ?>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group"> 
                                                            <label>Check-in</label>
                                                            <div class="form-icon-left">
                                                                <span class="icon-font text-muted"><i class="bx bx-calendar"></i></span>
                                                                <input type="text"   class="form-control form-readonly-control datepicker1 "  disabled="" placeholder="dd/mm/yyyy">
                                                                <div class="col-12">
                                                                    <span id="spanCheckIn" ></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group"> 
                                                            <label>Check-out</label>
                                                            <div class="form-icon-left">
                                                                <span class="icon-font text-muted"><i class="bx bx-calendar"></i></span>
                                                                <input type="text"   class="form-control form-readonly-control datepicker2"   placeholder="dd/mm/yyyy" disabled="">
                                                                <div class="col-12">
                                                                    <span id="spanCheckOut" ></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4 col-sm-4">

                                                        <div class="form-group form-spin-group">
                                                            <label for="room-amount">Rooms</label>
                                                            <div class="form-icon-left">
                                                                <span class="icon-font"><i class="bx bx-bed text-muted"></i></span>
                                                                <input type="text" class="form-control touch-spin-03 form-readonly-control"disabled=""/>

                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="col-4 col-sm-4 col-md-4">

                                                        <div class="form-group form-spin-group">
                                                            <label for="adult-amount">Adults</label>
                                                            <div class="form-icon-left">
                                                                <span class="icon-font"><i class="dripicons-user text-muted"></i></span>
                                                                <input type="text" class="form-control touch-spin-03 form-readonly-control" disabled=""  />

                                                            </div> 
                                                        </div> 
                                                    </div>
                                                <?php } ?>
                                                <div class="col-4 col-sm-4">

                                                    <div class="form-group form-spin-group">
                                                        <label for="child-amount">Children</label>
                                                        <div class="form-icon-left">
                                                            <span class="icon-font"><i class="dripicons-user text-muted"></i></span>
                                                            <input type="text" class="form-control touch-spin-03 form-readonly-control" placeholder="dd/mm/yyyy" value="0" readonly id="child" name="child"/>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <!--Room name-->
                                            <input type="hidden" id="room_name" value="<?php echo ucwords($ROOM->title) ?>">
                                            <input type="hidden" id="available_rooms" value="<?php echo $ROOM->num_of_rooms ?>">
                                            <input type="hidden" id="room_id" value="<?php echo $id ?>">
                                            <input type="hidden" id="acc_id" value="<?php echo $ACCOMMODATION->id ?>">
                                            <input type="hidden" id="visitor_id" value="<?php echo $VISITOR->id ?>">
                                            <input type="hidden" id="customer_id" value="<?php echo $ACCOMMODATION->customer_id ?>">
                                            <input type="hidden" id="booking_id" value="<?php echo 'BOOKING-00' . $LAST_ID ?>">
                                            <input type="hidden" id="total_price"   >

                                            <?php
                                            if ($ROOM->discount != 0) {
                                                $dis_count = ($ROOM->price * $ROOM->discount / 100);
                                                $dis_price = $ROOM->price - $dis_count;
                                                ?>
                                                <input type="hidden"  class="room_price" value="<?php echo $dis_price ?>">
                                            <?php } else { ?>
                                                <input type="hidden"  class="room_price" value="<?php echo $ROOM->price ?>">
                                            <?php } ?>
                                        </div>
                                        <div class="mb-20"></div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="acceptTerm"   />
                                            <label class="custom-control-label" for="acceptTerm">   So gate at no only none open. <a href="#">Betrayed at properly</a> it of graceful on. <a href="#">Dinner abroad</a> am depart ye turned  .</label>
                                            <div class="col-12">
                                                <span id="tearm_valid" class="text-danger " style="font-weight: 700"></span>

                                            </div>
                                            <div class="mb-20"></div>
                                            <div class="row">
                                                <div class="col-4"  >
                                                    <label for="comment">Security Code:</label>
                                                    <input  type="text" name="captchacode" id="captchacode" class="form-control input-validater" placeholder="Enter the code " style="color: black">
                                                    <div class="col-lg-12">
                                                        <span id="capspan" ></span>
                                                    </div>
                                                </div>
                                                <div class="col-4"  >
                                                    <?php include("./booking-hotel/captchacode-widget.php"); ?>
                                                </div> 
                                                <?php
                                                if (isset($VISITOR->id)) {
                                                    ?>
                                                    <div class="col-4  "  >
                                                        <button class="btn btn-primary mt-20" id="btnSubmit" type="submit" style="float: right">Book now <i class="fa fa-long-arrow-right"></i></button> 
                                                    </div>  
                                                <?php } else { ?>
                                                    <div class="col-4  "  >
                                                        <button class="btn btn-primary mt-20" disabled="" type="submit" style="float: right">Book now <i class="fa fa-long-arrow-right"></i></button> 
                                                    </div> 
                                                <?php }
                                                ?>
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

                            <div class="fullwidth-horizon-sticky border-0">&#032;</div>  

                        </div>

                    </div>

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

            <script type="text/javascript" src="<?php echo URL ?>js/jquery-2.2.4.min.js"></script> 
            <script src="<?php echo URL ?>booking-hotel/scripts.js" type="text/javascript"></script>
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


            <script src="<?php echo URL ?>js/ajax/hotel.js" type="text/javascript"></script>
            <script type="text/javascript" src="<?php echo URL ?>js/custom-core.js"></script>


    </body>

</html>