<!doctype html>
<?php
$id = '';
$id = base64_decode($this->id);


$GUEST_REVIEWS = new GuestReview(NULL);
$ROOM = new Room(NULL);
$ROOM_PHOTO = new RoomPhoto(NULL);
$DEFAULTDATA = new DefaultData(NULL);
$ACCOMMODATION_FACILITY = new AccommodationFacility(NULL);

$ACCOMMODATION = new Accommodation($id);
$ACCOMMODATION_TYPE = new AccommodationType($ACCOMMODATION->type);
$CITY = new City($ACCOMMODATION->city);

$min_price = $ROOM->getMinPriceByAccommodation($id);
?>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Title Of Site -->
        <title><?php echo $ACCOMMODATION->title ?> | MyTravelPartner.lk</title>
        <meta name="description" content="Resposnive HTML Template for Travel Booking Based on Bootstrap 4.x.x" />
        <meta name="keywords" content="accommodation, booking, holiday, hostel, hotel, motel, reservation, resort, tour, tourism, travel, travel agency, trip, vacation, flight, guide, journey, rental, destination, travel booking" />
        <meta name="author" content="crenoveative">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="images/logo-favicon.png">

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
        <link rel="stylesheet" href="<?php echo URL ?>OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css" />
        <link rel="stylesheet" href="<?php echo URL ?>OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"  rel="stylesheet">
        <link href="<?php echo URL ?>admin-panel/plugin/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>

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
                                <li class="breadcrumb-item"><a href="./">Home</a></li>
                                <li class="breadcrumb-item"><a href="<?php echo URL ?>hotels">Accommodations</a></li>
                                <li class="breadcrumb-item"><a href="#"><?php echo $ACCOMMODATION_TYPE->title ?></a></li>
                                <li class="breadcrumb-item"><a href="#"><?php echo ucwords($ACCOMMODATION->title) ?></a></li>
                            </ol>
                        </nav>
                    </div>
                </div> 

                <div class="page-wrapper page-detail bg-light">
                    <div class="detail-header">
                        <div class="container">
                            <div class="d-flex flex-column flex-lg-row">
                                <div>
                                    <h2 id="detail-content-sticky-nav-00" class="name"><?php echo ucwords($ACCOMMODATION->title) ?></h2>


                                    <div class="star-rating-wrapper">
                                        <div class="rating-item rating-inline margin-bottom-10">
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
                                        <p class="rating-text text-muted "><span class="bg-primary " id="rating-btn">6.0</span> <strong class="text-dark">Good</strong> <span class="font13">- 1,2547 reviews</span></p>   
                                    </div>

                                    <div class="clear"></div>

                                    <p class="location"><i class="material-icons text-info small">place</i> <?php echo $ACCOMMODATION->address_1 ?>, <?php echo $ACCOMMODATION->address_2 ?> <?php echo $CITY->name ?>, <?php echo $ACCOMMODATION->zip_code ?><a href="#detail-content-sticky-nav-03" class="anchor">Show map</a></p>


                                </div>

                                <div class="ml-lg-auto text-left text-lg-right mt-20 mt-lg-0">

                                    <div class="price">Start Price From <span><br><span>$<?php echo $min_price ?></span> </span> / Per Night</div>
                                    <a href="#detail-content-sticky-nav-02" class="anchor btn btn-primary btn-wide mt-5">See price and date</a>

                                </div>

                            </div>

                        </div>

                    </div>

                    <span  id="detail-content-sticky-nav-00" class="d-block"></span>

                    <div class="fullwidth-horizon-sticky d-none d-lg-block">

                        <div class="fullwidth-horizon-sticky-inner">

                            <div class="container">

                                <div class="fullwidth-horizon-sticky-item clearfix">

                                    <ul id="horizon-sticky-nav" class="horizon-sticky-nav clearfix">
                                        <li>
                                            <a href="#detail-content-sticky-nav-00">Gellary</a>
                                        </li>
                                        <li>
                                            <a href="#detail-content-sticky-nav-01">Overview</a>
                                        </li>
                                        <li>
                                            <a href="#detail-content-sticky-nav-02">Available rooms</a>
                                        </li>
                                        <li>
                                            <a href="#detail-content-sticky-nav-03">What's nearby</a>
                                        </li>
                                        <li>
                                            <a href="#detail-content-sticky-nav-04">Facilities</a>
                                        </li>
                                        <li>
                                            <a href="#detail-content-sticky-nav-05">Conditions</a>
                                        </li>
                                        <li>
                                            <a href="#detail-content-sticky-nav-06">Reviews</a>
                                        </li>
                                    </ul>

                                </div>

                            </div>
                        </div>
                    </div>

                    <!--                    <div class="container">
                    
                                            <div id="change-search" class=""> 
                    
                                                <div class="change-search-wrapper rounded-0 shadow-sm mh-1 mb-0">
                    
                                                    <div class="row gap-10 gap-xl-20 align-items-end">
                    
                                                        <div class="col-12 col-lg-6">
                    
                                                            <div class="form-group">
                                                                <label>Destination</label>
                                                                <div class="form-icon-left typeahead__container">
                                                                    <span class="icon-font text-muted"><i class="bx bx-map"></i></span>
                                                                    <input class="js-typeahead-country_v1 form-control" name="country_v1[query]" type="search" placeholder="Country or city" autocomplete="off">
                                                                </div>
                                                            </div>
                    
                                                        </div>
                    
                                                        <div class="col-12 col-lg-6">
                    
                                                            <div id="airDatepickerRange-hotel" class="row gap-10 gap-xl-20">
                    
                                                                <div class="col-12 col-sm-6 col-sm-6 col-md-6">
                    
                                                                    <div class="form-group"> 
                                                                        <label>Check-in</label>
                                                                        <div class="form-icon-left">
                                                                            <span class="icon-font text-muted"><i class="bx bx-calendar"></i></span>
                                                                            <input type="text" id="dateStart-hotel" class="form-control form-readonly-control" placeholder="dd/mm/yyyy">
                                                                        </div>
                                                                    </div>
                    
                                                                </div>
                    
                                                                <div class="col-12 col-sm-6 col-sm-6 col-md-6">
                    
                                                                    <div class="form-group"> 
                                                                        <label>Check-out</label>
                                                                        <div class="form-icon-left">
                                                                            <span class="icon-font text-muted"><i class="bx bx-calendar"></i></span>
                                                                            <input type="text" id="dateEnd-hotel" class="form-control form-readonly-control" placeholder="dd/mm/yyyy">
                                                                        </div>
                                                                    </div>
                    
                                                                </div>
                    
                                                            </div>
                    
                    
                                                        </div>
                    
                                                        <div class="col-12 col-sm-8 col-md-9">
                    
                                                            <div class="row gap-10 gap-xl-20">
                    
                                                                <div class="col-4 col-sm-4">
                    
                                                                    <div class="form-group form-spin-group">
                                                                        <label for="room-amount">Rooms</label>
                                                                        <div class="form-icon-left">
                                                                            <span class="icon-font"><i class="dripicons-user text-muted"></i></span>
                                                                            <input type="text" class="form-control touch-spin-03 form-readonly-control" placeholder="dd/mm/yyyy" value="1" readonly />
                                                                        </div>
                                                                    </div>
                    
                                                                </div>
                    
                                                                <div class="col-4 col-sm-4 col-md-4">
                    
                                                                    <div class="form-group form-spin-group">
                                                                        <label for="adult-amount">Adults</label>
                                                                        <div class="form-icon-left">
                                                                            <span class="icon-font"><i class="dripicons-user text-muted"></i></span>
                                                                            <input type="text" class="form-control touch-spin-03 form-readonly-control" placeholder="dd/mm/yyyy" value="0" readonly />
                                                                        </div> 
                                                                    </div>
                    
                                                                </div>
                    
                                                                <div class="col-4 col-sm-4">
                    
                                                                    <div class="form-group form-spin-group">
                                                                        <label for="child-amount">Children</label>
                                                                        <div class="form-icon-left">
                                                                            <span class="icon-font"><i class="dripicons-user text-muted"></i></span>
                                                                            <input type="text" class="form-control touch-spin-03 form-readonly-control" placeholder="dd/mm/yyyy" value="0" readonly />
                                                                        </div>
                                                                    </div>
                    
                                                                </div>
                                                            </div>
                    
                                                        </div>
                    
                                                        <div class="col-12 col-sm-4 col-md-3">
                                                            <div class="form-group">
                                                                <button class="btn btn-block btn-primary btn-form">Search</button>
                                                            </div>
                                                        </div>
                    
                                                    </div>
                    
                                                </div>
                    
                                            </div>
                    
                                        </div>-->

                    <div class="container">

                        <div class="row gap-30">

                            <div class="col-12 col-lg-8 col-xl-9">

                                <div class="content-wrapper">

                                    <div class="slick-gallery-slideshow detail-gallery">

                                        <div class="slider gallery-slideshow">
                                            <?php
                                            foreach ($ROOM_PHOTO->getRoomPhotosByAccId($id) as $room_photo) {
                                                ?>
                                                <div><div class="image"><img src="<?php echo URL ?>upload/accommodation/gallery/room/<?php echo $room_photo['image_name'] ?>" alt="<?php echo $ACCOMMODATION->title['image_name'] ?>" /></div></div>
                                            <?php } ?>
                                        </div>
                                        <div class="slider gallery-nav">
                                            <?php
                                            foreach ($ROOM_PHOTO->getRoomPhotosByAccId($id) as $room_photo) {
                                                ?>
                                                <div><div class="image"><img src="<?php echo URL ?>upload/accommodation/gallery/room/thumb/<?php echo $room_photo['image_name'] ?>" alt="<?php echo $ACCOMMODATION->title['image_name'] ?>" /></div></div>
                                            <?php } ?>
                                        </div>

                                    </div>

                                    <div id="detail-content-sticky-nav-01" class="fullwidth-horizon-sticky-section">

                                        <h3 class="heading-title  " style="margin-bottom: 0px;" ><span>Overview</span></h3>
                                        <h6 style="margin-top: 2px;">Get the celebrity treatment with world-class service at Marina Bay Sands..! </h6>
                                        <div class= " row main-facility-list clearfix  " style="margin-bottom: 8px;">

                                            <?php
                                            foreach ($ACCOMMODATION_FACILITY->getAcAccommodationFacilityById($id) as $key => $facilities) {
                                                $FACILITY = new Facility($facilities['facility_id']);
                                                if ($key < 8) {
                                                    ?>
                                                    <div class="col-md-3 padding-10" >
                                                        <span class="icon-font"><i class="material-icons"><?php echo $FACILITY->icion ?></i></span> <?php echo $FACILITY->title ?>
                                                    </div>

                                                    <?php
                                                }
                                            }
                                            ?>
                                        </div>

                                        <?php
                                        $CITY = new City($ACCOMMODATION->city);
                                        echo '<span class="text-primary font700"><i class="fa fa-thumbs-o-up"></i>One of the best Accommodation Place in Sri Lanka, it is located in ' .
                                        $CITY->name . '  .!  </span> ' . $ACCOMMODATION->description
                                        ?> 





                                        <!--                                        <div class="feature-box set-width">
                                        
                                                                                    <h5>Guests Love It Because...</h5>
                                        
                                                                                    <ul class="clearfix">
                                        
                                                                                        <li class="clearfix">
                                                                                            <span class="icon-font"><i class="material-icons">stars</i> </span>
                                                                                            <span class="content"><span class="font700 font16">“great pool area”</span><span class="text-muted font-italic font13 spacing-10">1681 related reviews</span></span>
                                                                                        </li>
                                        
                                                                                        <li class="clearfix">
                                                                                            <span class="icon-font"><i class="material-icons">stars</i> </span>
                                                                                            <span class="content"><span class="font700 font16">“amazing views”</span><span class="text-muted font-italic font13 spacing-10">1441 related reviews</span></span>
                                                                                        </li>
                                        
                                                                                        <li class="clearfix">
                                                                                            <span class="icon-font"><i class="material-icons">stars</i> </span>
                                                                                            <span class="content"><span class="font700 font16">“wonderful staff”</span><span class="text-muted font-italic font13 spacing-10">570 related reviews</span></span>
                                                                                        </li>
                                                                                    </ul>
                                        
                                                                                    <h6 class="font700 text-primary">Perfect for a 1-night stay!</h6>
                                        
                                                                                    <ul class="clearfix">
                                        
                                                                                        <li class="clearfix">
                                                                                            <span class="icon-font"><i class="material-icons">place</i></span>
                                                                                            <span class="content">Top Location: Highly rated by recent guests (9.2)</span>
                                                                                        </li>
                                        
                                                                                        <li class="clearfix">
                                                                                            <span class="icon-font"><i class="material-icons">place</i></span>
                                                                                            <span class="content">Subway/Metro Access: Bayfront is just minutes away </span>
                                                                                        </li>
                                        
                                                                                    </ul>
                                        
                                                                                    <h6 class="font700 text-primary">Popular Facilities:</h6>
                                        
                                                                                    <ul class="clearfix">
                                        
                                                                                        <li class="clearfix">
                                                                                            <span class="icon-font"><i class="material-icons">restaurant</i></span>
                                                                                            <span class="content">Restuarant</span>
                                                                                        </li>
                                        
                                                                                    </ul>
                                        
                                                                                    <h6 class="font700 text-primary">Popular District:</h6>
                                        
                                                                                    <ul class="clearfix">
                                        
                                                                                        <li class="clearfix">
                                                                                            <span class="icon-font"><i class="material-icons">beach_access</i> </span>
                                                                                            <span class="content">Marina Bay</span>
                                                                                        </li>
                                        
                                                                                        <li class="clearfix">
                                                                                            <span class="icon-font"><i class="material-icons">beach_access</i></span>
                                                                                            <span class="content">300 m away from Gardens By the Bay</span>
                                                                                        </li>
                                        
                                                                                        <li class="clearfix">
                                                                                            <span class="icon-font"><i class="material-icons">local_grocery_store</i></span>
                                                                                            <span class="content">Great area for shopping! </span>
                                                                                        </li>
                                        
                                                                                    </ul>
                                        
                                                                                </div>-->



                                    </div>

                                    <div id="detail-content-sticky-nav-02" class="fullwidth-horizon-sticky-section">

                                        <h3 class="heading-title"><span>Available rooms</span></h3>


                                        <div class="room-item-wrapper">

                                            <div class="room-item heading d-none d-md-block">

                                                <div class="row gap-20">

                                                    <div class="col-xs-12 col-sm-12 col-md-6">

                                                        <div class="row gap-20">

                                                            <div class="col-xss-6 col-xs-3 col-sm-4 col-md-1">

                                                            </div>

                                                            <div class="col-xss-12 col-xs-9 col-sm-8 col-md-8">
                                                                <span>Room Types</span>
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-xs-12 col-sm-8 col-sm-offset-4 col-md-6 col-md-offset-0">

                                                        <div class="row gap-20">

                                                            <div class="col-xs-12 col-sm-8 col-md-8">
                                                                <span>Room options</span>
                                                            </div>

                                                            <div class="col-xs-12 col-sm-4 col-md-4">
                                                                <span>No. room</span>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <?php
                                            foreach ($ROOM->getRoomsByAccommodationType($id) as $room) {
                                                ?>

                                                <div class="room-item">

                                                    <div class="row gap-20">

                                                        <div class="col-12 col-sm-12 col-md-6">
                                                            <div class="row gap-20">

                                                                <div class="col-6 col-xs-3 col-sm-4 col-md-6">
                                                                    <div class="image">
                                                                        <?php
                                                                        foreach ($ROOM_PHOTO->getRoomPhotosById($room['id'])as $key => $room_photos) {
                                                                            if ($key == 0) {
                                                                                ?>
                                                                                <img src="<?php echo URL ?>upload/accommodation/gallery/room/<?php echo $room_photos['image_name'] ?>" alt="image" width="100%" class="border-4px"/>
                                                                                <?php
                                                                            }
                                                                        }
                                                                        ?>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12 col-xs-9 col-sm-8 col-md-6">
                                                                    <div class="content">
                                                                        <h5><a href="#"><?php echo ucwords($room['title']) ?></a></h5>
                                                                        <p><span class = "font700">Room Type : </span><?php
                                                                            $ROOM_TYPE = new RoomType($room['room_type']);
                                                                            echo ucwords($ROOM_TYPE->title);
                                                                            ?></p>
                                                                        <p class = "max-man">Max. :

                                                                            <span data-toggle = "tooltip" data-placement = "top" title = "Maximum <?php echo $room['max'] ?> persons"> <i class = "fas fa-male"></i></span> <b><?php echo $room['max'] ?></b>
                                                                        </p>
                                                                        <?php
                                                                        if ($room['smoking_policy'] == 0) {
                                                                            ?>
                                                                            <p class="  not-this text-muted"><span class="icon-font"><i class="material-icons">smoke_free</i></span> Non-smoking Rooms</p>
                                                                        <?php } ?>
                                                                        <?php
                                                                        if ($room['smoking_policy'] == 1) {
                                                                            ?>
                                                                            <p><span class="icon-font"><i class="material-icons">smoking_rooms</i></span> Smoking Rooms</p>
                                                                        <?php } ?>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class = "col-12 col-md-6">

                                                            <div class = "row gap-20 justify-content-between">

                                                                <div class = "col-7 col-sm-8 col-md-7">

                                                                    <p class = "line13 mt-5 mb-15"><span class = "block text-success font600 text-uppercase">Special Condition</span></p>

                                                                    <ul class = "list-icon-data-attr font-awesome list-block-md">
                                                                        <?php
                                                                        foreach (explode(",", $room['amenities']) as $key => $amenities) {
                                                                            if ($key < 4) {
                                                                                $AMENITIES = new Amenities($amenities);
                                                                                ?>  
                                                                                <li data-content = "&#xf00c"><?php echo $AMENITIES->title ?></li>
                                                                                <?php
                                                                            }
                                                                        }
                                                                        ?>
                                                                    </ul> 
                                                                </div>

                                                                <div class = "col-5 col-sm-4 col-md-5">
                                                                    <div class = "form-group form-spin-group mb-5">

                                                                        <p class = "price">
                                                                            <?php
                                                                            if ($room['discount'] != 0) {
                                                                                $dis_count = ($room['price'] * $room['discount'] / 100);
                                                                                $dis_price = $room['price'] - $dis_count;
                                                                                ?>
                                                                                <span class = "not-this">$<?php echo$room['price'] ?></span> 

                                                                                <span class = "number text-secondary"><small>$</small><?php echo $dis_price ?></span> <br> <span class="text-warning"> ( Per Night ) </span>
                                                                            <?php } else { ?>
                                                                                <span class = "number text-secondary"><small>$</small><?php echo $room['price'] ?></span>  <span class="text-warning"> ( Per Night ) </span>
                                                                            <?php } ?>
                                                                        </p>
                                                                        <label class = "line12 font13 spacing-05 mt-5 mb-10 block">Available Rooms <span class="material-icons">  local_hotel  </span> <b class="f-18"><?php echo $room['num_of_rooms'] ?></b></label>
                                                                        <div class = "form-icon-left">
                                                                            <input type="hidden" id="rooms" value="<?php echo $room['num_of_rooms'] ?>" >
                                                                        </div>
                                                                    </div>

                                                                    <a href = "#" class = "btn btn-primary btn-sm btn-block"   data-target="#mymodal<?php echo $room['id'] ?>" data-toggle="modal">Book</a>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>



                                                <div class="row cols-1 cols-md-4 gap-10 gap-md-20" >
                                                    <div class="modal" id="mymodal<?php echo $room['id'] ?>">
                                                        <div class="modal-dialog    modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h3 class="modal-title  "><center><?php echo ucwords($room['title']) ?></center></h3>
                                                                    <button class="close" data-dismiss="modal" type="button" >&times;</button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div id="demo" class="carousel slide" data-ride="carousel"> 
                                                                        <!-- The slideshow -->
                                                                        <div class="carousel-inner">

                                                                            <?php
                                                                            foreach ($ROOM_PHOTO->getRoomPhotosById($room['id'])as $key => $room_photos) {
                                                                                if ($key == 0) {
                                                                                    ?>
                                                                                    <div class="carousel-item active">

                                                                                        <img src="<?php echo URL ?>upload/accommodation/gallery/room/<?php echo $room_photos['image_name'] ?>" width="100%"  >
                                                                                    </div>

                                                                                    <?php
                                                                                } else {
                                                                                    ?>
                                                                                    <div class="carousel-item  ">

                                                                                        <img src="<?php echo URL ?>upload/accommodation/gallery/room/<?php echo $room_photos['image_name'] ?>" width="100%"  >
                                                                                    </div>

                                                                                    <?php
                                                                                }
                                                                            }
                                                                            ?>



                                                                        </div>

                                                                        <!-- Left and right controls -->
                                                                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                                                            <span class="carousel-control-prev-icon"></span>
                                                                        </a>
                                                                        <a class="carousel-control-next" href="#demo" data-slide="next">
                                                                            <span class="carousel-control-next-icon"></span>
                                                                        </a>

                                                                    </div> 
                                                                    <?php echo $room['description'] ?>
                                                                    <?php
                                                                    if ($room['num_bed'] == 1) {
                                                                        ?>
                                                                        <p> <i class="material-icons">bed</i> Bed Name : - <b> <?php echo $room['bed_name'] ?></b> - <i class="fas fa-male"></i> <?php echo $room['num_bed'] ?> person in one bed.</p>
                                                                    <?php } else { ?>
                                                                        <p> <i class="material-icons">bed</i> Bed Name : - <b> <?php echo $room['bed_name'] ?></b> - <i class="fas fa-male"></i> <?php echo $room['num_bed'] ?> persons in one bed.</p>
                                                                    <?php } ?>

                                                                    <?php
                                                                    if ($room['extra_bed'] == 0) {
                                                                        ?>
                                                                        <p> <i class="material-icons">local_hotel  </i> Extra Bed : - <b> Non Extra Beds</b>  </p>
                                                                    <?php } else if ($room['extra_bed'] == 1) { ?>
                                                                        <p> <i class="material-icons">local_hotel  </i> Extra Bed : - <b> Available Extra Beds</b>  </p>
                                                                    <?php } else if ($room['extra_bed'] == 2) { ?>

                                                                        <p> <i class="material-icons">local_hotel  </i> Extra Bed : - <b>  If you can manage with us.</b>  </p>
                                                                    <?php } ?>


                                                                    <h6 class="text-success">Special Condition </h6>
                                                                    <?php
                                                                    if ($room['smoking_policy'] == 0) {
                                                                        ?>
                                                                        <p class="not-this text-muted"><span class="icon-font"><i class="material-icons">smoke_free</i></span> Non-smoking Rooms</p>
                                                                    <?php } ?>
                                                                    <?php
                                                                    if ($room['smoking_policy'] == 1) {
                                                                        ?>
                                                                        <p><span class="icon-font"><i class="material-icons">smoking_rooms</i></span> Smoking Rooms</p>
                                                                    <?php } ?>
                                                                    <h6>Room Facility </h6>

                                                                    <div class = "row list-icon-data-attr font-awesome ">

                                                                        <?php
                                                                        foreach (explode(",", $room['amenities']) as $key => $amenities) {
                                                                            if ($key < 4) {
                                                                                $AMENITIES = new Amenities($amenities);
                                                                                ?>  
                                                                                <div class="col-md-3" data-content = "&#xf00c"> <span class="ml-15"><?php echo $AMENITIES->title ?></span></div>
                                                                                <?php
                                                                            }
                                                                        }
                                                                        ?>
                                                                    </div> 

                                                                    <div class="row form-group pull-right col-md-2" style="float: right"> 
                                                                        <a href="<?php echo URL ?>accommodations/booking/<?php echo base64_encode($room['id']) ?>">  <button class="btn btn-block btn-primary btn-form ">Book Now</button></a>
                                                                        <input type="hidden" value="<?php echo $room['id'] ?>">
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

                                    <div id="detail-content-sticky-nav-03" class="fullwidth-horizon-sticky-section">

                                        <h3 class="heading-title"><span>What's nearby</span></h3>

                                        <div class="hotel-detail-location-wrapper">

                                            <div class="row gap-30">

                                                <div class="col-12 col-md-7">

                                                    <div class="map-holder">
                                                        <a href="<?php echo $ACCOMMODATION->map ?>">
                                                            <img src="<?php echo URL ?>upload/accommodation/map/<?php echo $ACCOMMODATION->map_image ?>">
                                                        </a>

                                                    </div>

                                                </div>

                                                <div class="col-12 col-md-5">

                                                    <div class="col-inner">

                                                        <h5 class="text-uppercase">Location highlights</h5>
                                                        <?php echo $ACCOMMODATION->location ?>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div id="detail-content-sticky-nav-04" class="fullwidth-horizon-sticky-section">

                                        <h3 class="heading-title"><span>Hotel Facilities</span></h3>

                                        <div class="mb-25">
                                            <h6>Most Popular Facility</h6>

                                            <div class="mb-25"> 

                                                <ul class="list-icon-absolute row cols-2 cols-md-2 cols-lg-3">
                                                    <?php
                                                    if ($ACCOMMODATION->breakfast == 0) {
                                                        ?>
                                                        <li class="col text-warning  not-this"><span class="icon-font"><i class="material-icons"> room_service</i></span>Breakfast not Included </li>
                                                        <?php
                                                    }
                                                    if ($ACCOMMODATION->breakfast == 1) {
                                                        ?>
                                                        <li class="col text-success"><span class="icon-font"><i class="material-icons"> room_service</i></span>Breakfast Included </li>
                                                        <?php
                                                    }
                                                    if ($ACCOMMODATION->breakfast == 2) {
                                                        ?>
                                                        <li class="col text-success"><span class="icon-font"><i class="material-icons"> room_service</i></span>Breakfast Optional </li>
                                                        <?php
                                                    }
                                                    if ($ACCOMMODATION->parking == 0) {
                                                        ?>
                                                        <li class="col text-warning  not-this"><span class="icon-font"><i class="material-icons"> local_parking</i></span>No Parking  </li>
                                                        <?php
                                                    }
                                                    if ($ACCOMMODATION->parking == 1) {
                                                        ?>
                                                        <li class="col text-success"><span class="icon-font"><i class="material-icons"> local_parking</i></span>Yes Free Parking </li>
                                                        <?php
                                                    }
                                                    if ($ACCOMMODATION->parking == 2) {
                                                        ?>
                                                        <li class="col text-success"><span class="icon-font"><i class="material-icons"> local_parking</i></span>Yes Paid for Parking </li>
                                                        <?php
                                                    }
                                                    if ($ACCOMMODATION->children == 0) {
                                                        ?>
                                                        <li class="col text-warning  not-this"><span class="icon-font"><i class="material-icons"> child_care</i></span>Children are not allowed  </li>
                                                        <?php
                                                    }
                                                    if ($ACCOMMODATION->children == 1) {
                                                        ?>
                                                        <li class="col text-success"><span class="icon-font"><i class="material-icons"> child_care</i></span>Children of all ages are welcome. </li>
                                                    <?php } ?>
                                                </ul>

                                            </div> 
                                            <div class="mb-25">
                                                <?php foreach ($DEFAULTDATA->getFacilityType() as $key => $facility_type) { ?>
                                                    <h6><?php echo $facility_type ?></h6>


                                                    <ul class="list-icon-absolute row cols-2 cols-md-2 cols-lg-3">
                                                        <?php
                                                        foreach ($ACCOMMODATION_FACILITY->getAcAccommodationFacilityById($id) as $facilities) {
                                                            $FACILITY = new Facility($facilities['facility_id']);
                                                            if ($FACILITY->type == $key) {
                                                                ?>
                                                                <li class="col  "><span class="icon-font"><i class="material-icons"><?php echo $FACILITY->icion ?></i></span><?php echo $FACILITY->title ?></li>
                                                                <?php
                                                            }
                                                        }
                                                        ?>
                                                    </ul>
                                                <?php } ?>
                                            </div>
                                        </div>


                                        <!--                                        <div class="mb-25">
                                        
                                                                                    <h6>Things to do, ways to relax</h6>
                                        
                                                                                    <ul class="list-icon-absolute row cols-2 cols-md-2 cols-lg-3">
                                                                                        <li class="col"><span class="icon-font"><i class="material-icons">fitness_center</i></span>Fitness center</li>
                                                                                        <li class="col"><span class="icon-font"><i class="material-icons">pool</i></span>Swimming pool</li>
                                                                                        <li class="col"><span class="icon-font"><i class="material-icons">local_florist</i></span>Garden</li>
                                                                                    </ul>
                                        
                                                                                </div>
                                        
                                                                                <div class="mb-25">
                                        
                                                                                    <h6>Dining, drinking, and snacking</h6>
                                        
                                                                                    <ul class="list-icon-absolute row cols-2 cols-md-2 cols-lg-3">
                                                                                        <li class="col"><span class="icon-font"><i class="material-icons">room_service</i></span>24-hour room service</li>
                                                                                        <li class="col"><span class="icon-font"><i class="material-icons">parking</i></span>Room service</li>
                                                                                        <li class="col"><span class="icon-font"><i class="material-icons">local_dining</i></span>Restaurant</li>
                                                                                        <li class="col"><span class="icon-font"><i class="material-icons">local_cafe</i></span>Coffee shop</li>
                                                                                        <li class="col"><span class="icon-font"><i class="material-icons">local_drink</i></span>Poolside bar</li>
                                                                                        <li class="col"><span class="icon-font"><i class="material-icons">local_bar</i></span>Bar</li>
                                                                                    </ul>
                                        
                                                                                </div>
                                        
                                                                                <div class="mb-25">
                                        
                                                                                    <h6>Access, services, and conveniences </h6>
                                        
                                                                                    <ul class="list-icon-absolute row cols-2 cols-md-2 cols-lg-3">
                                                                                        <li class="col"><span class="icon-font"><i class="material-icons">local_convenience_store</i></span>24-hour front desk</li>
                                                                                        <li class="col"><span class="icon-font"><i class="material-icons">accessible</i></span>Facilities for disabled guests</li>
                                                                                        <li class="col"><span class="icon-font"><i class="material-icons">work</i></span>Luggage storage</li>
                                                                                        <li class="col"><span class="icon-font"><i class="material-icons">local_laundry_service</i></span>Laundry service</li>
                                                                                        <li class="col"><span class="icon-font"><i class="material-icons">compass_calibration</i></span>Concierge</li>
                                                                                        <li class="col"><span class="icon-font"><i class="material-icons">transfer_within_a_station</i></span>Elevator</li>
                                                                                        <li class="col not-this text-muted"><span class="icon-font"><i class="material-icons">pets</i></span>Pets allowed</li>
                                                                                        <li class="col"><span class="icon-font"><i class="material-icons">local_atm</i></span>Safety deposit boxes</li>
                                                                                        <li class="col"><span class="icon-font"><i class="material-icons">attach_money</i></span>Currency exchange</li>
                                                                                        <li class="col"><span class="icon-font"><i class="material-icons">smoking_rooms</i></span>Smoking area</li>
                                                                                    </ul>
                                        
                                                                                </div>
                                        
                                                                                <div class="facility-box clearfix">
                                        
                                                                                    <h6>For the kids</h6>
                                        
                                                                                    <ul class="list-icon-absolute row cols-2 cols-md-2 cols-lg-3">
                                                                                        <li class="col"><span class="icon-font"><i class="material-icons">child_friendly</i></span>Cabysitting</li>
                                                                                    </ul>
                                        
                                                                                </div>-->

                                    </div>

                                    <div id="detail-content-sticky-nav-05" class="fullwidth-horizon-sticky-section">

                                        <h3 class="heading-title"><span>Conditions</span></h3>

                                        <div class="feature-box-2 mb-0 bg-white">

                                            <div class="feature-row">
                                                <div class="row gap-10 gap-md-30">

                                                    <div class="col-12 col-sm-4 col-md-3">
                                                        <h6>Check-in</h6>
                                                    </div>

                                                    <div class="col-12 col-sm-8 col-md-9">
                                                        <p>From - To : <b><?php echo $ACCOMMODATION->check_in ?> </b></p>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="feature-row">
                                                <div class="row gap-10 gap-md-30">

                                                    <div class="col-12 col-sm-4 col-md-3">
                                                        <h6>Check-out</h6>
                                                    </div>

                                                    <div class="col-12 col-sm-8 col-md-9">
                                                        <p>From - To : <b><?php echo $ACCOMMODATION->check_in ?> </b>  </p>
                                                    </div>

                                                </div>
                                            </div>

                                            <!--                                            <div class="feature-row">
                                                                                            <div class="row gap-10 gap-md-30">
                                            
                                                                                                <div class="col-xs-12 col-sm-4 col-md-3">
                                                                                                    <h6>Cancellation/<br/>prepayment</h6>
                                                                                                </div>
                                            
                                                                                                <div class="col-xs-12 col-sm-8 col-md-9">
                                                                                                    <p>Their could can widen ten she any. As so we smart those money in. Am wrote up whole so tears sense oh. Absolute required of reserved in offering no. <a href="#">How sense found our those</a> gay again taken the.</p>
                                                                                                </div>
                                            
                                                                                            </div>
                                                                                        </div>-->

                                            <div class="feature-row">
                                                <div class="row gap-10 gap-md-30">

                                                    <div class="col-xs-12 col-sm-4 col-md-3">
                                                        <h6>Children </h6>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-8 col-md-9">
                                                        <?php
                                                        if ($ACCOMMODATION->children == 0) {
                                                            ?>
                                                            <p>Children are not allowed, Because Our Hotel has not facilities for the children</p>
                                                        <?php } ?>
                                                        <?php
                                                        if ($ACCOMMODATION->children == 1) {
                                                            ?>
                                                            <p>Children of all ages are welcome. Our Hotel has facilities for the children</p>
                                                        <?php } ?>
<!--                                                        <p class="alert alert-success"><strong class="mr-5 text-uppercase font-serif font15">Agreed matter !</strong> pretty our people moment put excuse narrow.</p>-->


                                                    </div>

                                                </div>
                                            </div> 

                                            <div class="feature-row">
                                                <div class="row gap-10 gap-md-30">

                                                    <div class="col-xs-12 col-sm-4 col-md-3">
                                                        <h6>Pets</h6>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-8 col-md-9">
                                                        <?php if ($ACCOMMODATION->pets == 0) { ?>
                                                            <p class="col not-this text-muted"><span class="icon-font"><i class="material-icons">pets</i></span>Pets are not allowed.</p>
                                                        <?php } ?>
                                                        <?php if ($ACCOMMODATION->pets == 1) { ?>
                                                            <p> <i class="material-icons">pets </i>Pets are   allowed.</p>
                                                        <?php } ?>
                                                        <?php if ($ACCOMMODATION->pets == 2) { ?>
                                                            <p> <i class="material-icons">pets </i> Upon Reguest </p>
                                                        <?php } ?>

                                                    </div>

                                                </div>
                                            </div>

                                            <div class="feature-row">
                                                <div class="row gap-10 gap-md-30">

                                                    <div class="col-xs-12 col-sm-4 col-md-3">
                                                        <h6>Groups</h6>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-8 col-md-9">
                                                        <p>Built purse maids cease her ham new seven among and. Pulled coming wooded tended it answer remain me be.</p>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="feature-row">
                                                <div class="row gap-10 gap-md-30">

                                                    <div class="col-xs-12 col-sm-4 col-md-3">
                                                        <h6>Guest Payment Options </h6>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-8 col-md-9">
                                                        <?php
                                                        if ($ACCOMMODATION->guest_payment == 1) {
                                                            ?>
                                                            <ul class="payment-list clearfix">
                                                                <?php
                                                                foreach (explode(",", $ACCOMMODATION->payment_card) as $payment_cars) {
                                                                    if ($payment_cars == 1) {
                                                                        ?> 
                                                                        <li><div class="image" data-toggle="tooltip" data-placement="top" title="Frankness applauded by supported ye household. Collected favourite now for for and rapturous repulsive consulted. An seems green be wrote again."><img src="<?php echo URL ?>images/payment-icons/01.png" alt="Image" /></div></li>
                                                                        <?php
                                                                    }
                                                                    if ($payment_cars == 2) {
                                                                        ?>
                                                                        <li><div class="image" data-toggle="tooltip" data-placement="top" title="Frankness applauded by supported ye household. Collected favourite now for for and rapturous repulsive consulted. An seems green be wrote again."><img src="<?php echo URL ?>images/payment-icons/02.png" alt="Image" /></div></li>
                                                                        <?php
                                                                    }
                                                                    if ($payment_cars == 3) {
                                                                        ?>
                                                                        <li><div class="image" data-toggle="tooltip" data-placement="top" title="Frankness applauded by supported ye household. Collected favourite now for for and rapturous repulsive consulted. An seems green be wrote again."><img src="<?php echo URL ?>images/payment-icons/03.png" alt="Image" /></div></li>
                                                                        <?php
                                                                    }
                                                                    if ($payment_cars == 4) {
                                                                        ?>
                                                                        <li><div class="image" data-toggle="tooltip" data-placement="top" title="Frankness applauded by supported ye household. Collected favourite now for for and rapturous repulsive consulted. An seems green be wrote again."><img src="<?php echo URL ?>images/payment-icons/04.png" alt="Image" /></div></li>
                                                                        <?php
                                                                    }
                                                                }
                                                                ?>
                                                            </ul>

                                                            <p>Material confined likewise it humanity raillery an unpacked</p>
                                                        <?php } else { ?>
                                                            <p class="alert alert-success"><strong class="mr-5 text-uppercase font-serif font15">Only Cash Payment !</strong> Customer can pay the cash money only.</p>
                                                        <?php } ?>  
                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div id="detail-content-sticky-nav-06" class="fullwidth-horizon-sticky-section">

                                        <h3 class="heading-title"><span>Reviews</span></h3>

                                        <div class="detail-review-header">

                                            <div class="average-score">

                                                <div class="progress-radial progress-radial-md progress-80">
                                                    <div class="overlay">
                                                        <div class="progress-radial-inner">
                                                            <div class="caption">
                                                                <h5>Very good </h5>
                                                                <p class="number text-primary">8.0</p>
                                                                <a href="#" class="text-muted">based on <?php echo count($GUEST_REVIEWS->guestReviewsByAccId($id)) ?>  reviews</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="content">

                                                <div class="row gap-10 align-items-center">

                                                    <div class="col-12 col-md-6">
                                                        <p class="line-125">Filter by traveler type:</p>
                                                    </div>

                                                    <div class="col-12 col-md-6">

                                                        <select class="chosen-the-basic form-control" tabindex="2">
                                                            <option value="0">All reviewers (1254)</option>
                                                            <option value="1">Business travelers (843)</option>
                                                            <option value="2">Couples (432)</option>
                                                            <option value="3">Solo travelers (342)</option>
                                                            <option value="4">Family tours (421)</option>
                                                        </select>

                                                    </div>		

                                                </div>

                                                <div class="row mt-30 gap-20">

                                                    <div class="col-12 col-sm-6">
                                                        <div class="progress progress-primary">
                                                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 76%;"></div>
                                                        </div>
                                                        <p class="progress-label">Terrible <span class="text-dark">7.6</span></p>
                                                    </div>

                                                    <div class="col-12 col-sm-6">
                                                        <div class="progress progress-primary">
                                                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 74%;"></div>
                                                        </div>
                                                        <p class="progress-label">Poor <span class="text-dark">7.4</span></p>
                                                    </div>

                                                    <div class="col-12 col-sm-6">
                                                        <div class="progress progress-primary">
                                                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 82%;"></div>
                                                        </div>
                                                        <p class="progress-label">Average <span class="text-dark">8.2</span></p>
                                                    </div>

                                                    <div class="col-12 col-sm-6">
                                                        <div class="progress progress-primary">
                                                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 76%;"></div>
                                                        </div>
                                                        <p class="progress-label"> Very Good <span class="text-dark">7.6</span></p>
                                                    </div>

                                                    <div class="col-12 col-sm-6">
                                                        <div class="progress progress-primary">
                                                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 88%;"></div>
                                                        </div>
                                                        <p class="progress-label">Excellent <span class="text-dark">8.8</span></p>
                                                    </div>

                                                    <!--                                                    <div class="col-12 col-sm-6">
                                                                                                            <div class="progress progress-primary">
                                                                                                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 69%;"></div>
                                                                                                            </div>
                                                                                                            <p class="progress-label">Value for Money <span class="text-dark">6.9</span></p>
                                                                                                        </div>-->

                                                </div>

                                            </div>

                                        </div>

                                        <div class="review-wrapper mb-10">
                                            <?php
                                            foreach ($GUEST_REVIEWS->guestReviewsByAccId($id) as $guest_reviews) {
                                                $VISITOR = new Visitor($guest_reviews['visitor']);
                                                ?>
                                                <div class="review-item">

                                                    <div class="row gap-15">
                                                        <div class="col-12 col-sm-5 col-md-3">
                                                            <div class="progress-radial progress-radial-sm progress-100">
                                                                <div class="overlay">
                                                                    <?php
                                                                    if (empty($VISITOR->image_name)) {
                                                                        ?>
                                                                        <img src="<?php echo URL ?>images/member.jpg" style="border-radius: 50%">
                                                                    <?php } else { ?>
                                                                        <img src="<?php echo URL ?>upload/visitor/profile/<?php echo $VISITOR->image_name ?>" alt="<?php echo $VISITOR->full_name ?>"style="border-radius: 50%">

                                                                    <?php } ?>

                                                                </div>
                                                            </div>

                                                            <ul class="meta-list">
                                                                <li><span class="position-absolute-top"><i class="fas fa-user"></i></span> <?php echo $VISITOR->full_name ?></li>
                                                                <li><span class="position-absolute-top"><i class="fas fa-clock"></i></span> <?php echo $guest_reviews['create_at'] ?></li>
                                                                <li><span class="position-absolute-top"><i class="fas fa-map-marker-alt"></i></span> <?php echo $VISITOR->city ?> </li>
                                                            </ul>
                                                        </div>

                                                        <div class="col-12 col-sm-7 col-md-9"> 
                                                            <div class="entry"> 
                                                                <h5> <?php echo $guest_reviews['title'] ?></h5>
                                                                <p>  <?php echo $guest_reviews['review'] ?></p>
                                                            </div>

                                                            <div class="meta"> 
                                                                <div class="row gap-5"> 
                                                                    <div class="col-12 col-xl-5">
                                                                        <span class="date">Reviewed 10 Aug 2016</span>
                                                                    </div>

                                                                    <div class="col-12 col-xl-7">
                                                                        <ul class="review-useful">
                                                                            <li><span>Was this review helpful? </span></li>
                                                                            <li class="the-label"><a href="#"><i class="fas fa-thumbs-up"></i></a> 2</li>
                                                                            <li class="the-label"><a href="#"><i class="fas fa-thumbs-down"></i></a> 1</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>


                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div  class="col-12 col-lg-4 col-xl-3">

                                <aside class="sticky-kit sidebar-wrapper">

                                    <button class="btn btn-secondary btn-wide btn-toggle collapsed btn-change-search btn-block" data-toggle="collapse" data-target="#change-search"></button>

                                    <div class="booking-selection-box  mt-20">

                                        <div class="heading clearfix">
                                            <div class="d-flex align-items-end">
                                                <div>
                                                    <h5 class="text-white font-serif font400">Top Related Hotels</h5>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="content"> 
                                            <div class="hotel-room-sm-item">
                                                <?php
                                                $ACCOMMODATIONS = new Accommodation(NULL);

                                                foreach ($ACCOMMODATIONS->getByCity($ACCOMMODATION->city) as $key => $accommodation_city) {
                                                    $CIT = new City($accommodation_city['city']);
                                                    if ($key <= 5) {
                                                        ?>
                                                        <a  href="">
                                                            <div class="the-hotel-item">
                                                                <h5 class="f-14"><?php echo $accommodation_city['title'] ?></h5>
                                                                <div class="d-flex"> 
                                                                    <div>
                                                                        <div class="rating-item rating-xs">
                                                                            <div class="rating-icons">
                                                                                <input type="hidden" class="rating" data-filled="rating-icon fas fa-star rating-rated" data-empty="rating-icon far fa-star" data-fractions="2" data-readonly value="4.5"/>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                                <a href="hotel.php" target="_blank" class="btn btn-secondary btn-block mt-20">View ALL</a>
                                            </div>
                                        </div>
                                </aside>
                            </div>
                        </div>
                        <div class="fullwidth-horizon-sticky border-0">&#032;</div> <!-- is used to stop the above stick menu -->
                    </div>
                </div>

                <section class="bg-white section-sm">

                    <div class="container">

                        <div class="section-title mb-25">
                            <center>
                                <h3>Other Related Best Accommodation Places.</h3>
                            </center>


                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="slick-carousel-wrapper pb-10">

                                    <div class="slick-carousel-inner">

                                        <div class="slick-product-item-4">
                                            <?php
                                            $ACCOMMODATION = new Accommodation(NULL);
                                            foreach ($ACCOMMODATION->all() as $key => $accommodation) {
                                                $ROOM = new Room(NULL);
                                                $ACCOMMODATION_FACILITY = new AccommodationFacility(NULL);
                                                $ACCOMMODATION_TYPE = new AccommodationType($accommodation['type']);
                                                ?>
                                                <div class="slick-item">
                                                    <div class="product-grid-item">
                                                        <a href="<?php echo URL ?>accommodations/view/<?php echo base64_encode($accommodation['id']) ?>" target="_blank">
                                                            <div class="image caption-relative">
                                                                <img src="<?php echo URL ?>upload/accommodation/gallery/thumb/<?php echo $accommodation['image_name'] ?>" alt="<?php echo $accommodation['title'] ?>">

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

                                            <?php } ?>   

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                        if (isset($_SESSION['id'])) {
                            ?>
                            <div class="col-2  float-right message-btn "  >
                                <a href="visitor/create-messenger.php" class="anchor btn btn-success   btn-block mt-20 color-white message-url"  > <i class="bx bx-chat  "></i> Message with us</a>

                            </div>
                            <?php
                        } else {
                            ?>
                            <div class="col-2  float-right message-btn pulse"  >
                                <a href="visitor/message-login.php?id=<?php echo $ACCOMMODATION->id ?>" class="anchor btn btn-success   btn-block mt-20 color-white message-url"  > <i class="bx bx-chat  "></i> Message with us</a>

                            </div>
                        <?php } ?>

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

        <!-- start Back To Top -->
        <a id="back-to-top" href="#" class="back-to-top" role="button" title="Click to return to top" data-toggle="tooltip" data-placement="left"><i class="bx bx-chevron-up"></i></a>
        <!-- end Back To Top -->


        <!-- JS -->
        <script type="text/javascript" src="<?php echo URL ?>js/jquery-2.2.4.min.js"></script>
        <script src="<?php echo URL ?>js/ajax/hotel.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo URL ?>js/plugins.js"></script>
        <script type="text/javascript" src="<?php echo URL ?>js/custom-multiply-sticky.js"></script>
        <script type="text/javascript" src="<?php echo URL ?>js/custom-core.js"></script>

        <script type="text/javascript" src="<?php echo URL ?>js/plugins/jquery.typeahead.min.js"></script>
        <script type="text/javascript" src="<?php echo URL ?>js/custom-autocomplete.js"></script>

        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript" src="<?php echo URL ?>js/plugins/infobox.js"></script>
        <script type="text/javascript" src="<?php echo URL ?>js/custom-detail-map.js"></script>
        <script src="<?php echo URL ?>admin-panel/plugin/sweetalert/sweetalert.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo URL ?>OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js"></script>

    </body>  
</html>