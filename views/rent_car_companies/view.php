<!doctype html>
<?php
$id = '';
$id = base64_decode($this->id);

$RENT_CAR_COMPANY = new RentCarCompany($id);
$RENT_CAR = new RentCar(NULL);
$RENT_CAR_PHOTO = new RentCarPhoto(NULL);
$DEFAULTDATA = new DefaultData();
?>
<html lang="en">


    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Title Of Site -->
        <title>Rent a car  || MyTravelPartner.lk</title>
        <meta name="description" content="Resposnive HTML Template for Travel Booking Based on Bootstrap 4.x.x" />
        <meta name="keywords" content="accommodation, booking, holiday, hostel, hotel, motel, reservation, resort, tour, tourism, travel, travel agency, trip, vacation, flight, guide, journey, rental, destination, travel booking" />
        <meta name="author" content="crenoveative">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="images/logo-favicon.png">

        <!-- Fav and Touch Icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo URL ?>images/ico/apple-touch-icon-144-precomposed.html">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo URL ?>images/ico/apple-touch-icon-114-precomposed.html">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo URL ?>images/ico/apple-touch-icon-72-precomposed.html">
        <link rel="apple-touch-icon-precomposed" href="<?php echo URL ?>images/ico/apple-touch-icon-57-precomposed.html">
        <link rel="shortcut icon" href="<?php echo URL ?>images/ico/favicon.html">

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
            <div class="main-wrapper scrollspy-action"> 
                <div class="page-title breadcrumb-wrapper">
                    <div class="container">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="rent-a-car.php">Rent A Car</a></li>
                                <li class="breadcrumb-item"><a href=""><?php echo $RENT_CAR_COMPANY->title ?></a></li>
                            </ol>
                        </nav>
                    </div>
                </div> 

                <div class=" bg-light">  
                    <div class="container"> 
                        <div class="row gap-30"> 
                            <div class="col-12 col-lg-8 col-xl-9"> 
                                <div class="content-wrapper"> 
                                    <div class="slick-gallery-slideshow detail-gallery">

                                        <div class="slider gallery-slideshow">
                                            <?php
                                            foreach ($RENT_CAR->getCarsByCompany($id) as $rent_car) {
                                                foreach ($RENT_CAR_PHOTO->getCarPhotosById($rent_car['id']) as $rent_car_photo) {
                                                    ?>
                                                    <div><div class="image"><img src="<?php echo URL ?>upload/rent-a-car/gallery/<?php echo $rent_car_photo['image_name'] ?>" alt="<?php echo $RENT_CAR->title ?>" /></div></div>

                                                    <?php
                                                }
                                            }
                                            ?>
                                        </div>
                                        <div class="slider gallery-nav">
                                            <?php
                                            foreach ($RENT_CAR->getCarsByCompany($id) as $rent_car) {
                                                foreach ($RENT_CAR_PHOTO->getCarPhotosById($rent_car['id']) as $rent_car_photo) {
                                                    ?>
                                                    <div><div class="image"><img src="<?php echo URL ?>upload/rent-a-car/gallery/thumb/<?php echo $rent_car_photo['image_name'] ?>" alt="<?php echo $RENT_CAR->title ?>" /></div></div>

                                                    <?php
                                                }
                                            }
                                            ?>
                                        </div> 
                                    </div>


                                    <section> 
                                        <div class="container mt-40"> 
                                            <div  class="mb-40" > 
                                                <h3 class="heading-title" id="book-now"><span><?php echo $RENT_CAR_COMPANY->title ?></span></h3> 
                                                <p>   <?php echo $RENT_CAR_COMPANY->description ?>  </p>
                                            </div>


                                            <div class="section-title text-center" > 
                                                <h3>Select Your Vehicle</h3> 
                                            </div>

                                            <div class="row equal-height cols-1 cols-md-2 cols-lg-3 gap-10 gap-lg-20">
                                                <?php
                                                $RENT_CAR = new RentCar(NULL);
                                                $RENT_CAR_PRICE = new RentCarPrice(NULL);
                                                foreach ($RENT_CAR->getCarsByCompany($id) as $rent_cars) {
                                                    ?>
                                                    <div class="col"> 
                                                        <div class="product-grid-item"> 
                                                            <a href="<?php echo URL?>rent_car_companies/packages/<?php echo base64_encode($rent_cars['id'])?>">
                                                                <div class="image">
                                                                    <img src="<?php echo URL ?>upload/rent-a-car/gallery/thumb/<?php echo $rent_cars['main_image'] ?>" alt="<?php echo $rent_cars['title'] ?>">
                                                                </div>

                                                                <div class="content pt-10 clearfix">
                                                                    <div class="short-info mr-0 mb-10">

                                                                        <p class="  mb-0 text-success"> <i class="bx bx-car text-primary"></i> <?php
                                                                            $VEHICLE_TYPE = new VehicleType($rent_cars['type']);
                                                                            echo $VEHICLE_TYPE->title
                                                                            ?>   </p>
                                                                        <h6 class="mt-5"><?php echo $rent_cars['title'] ?></h6>
                                                                        <p class="text-justify">
                                                                            <?php echo substr($rent_cars['description'], 0, 60) ?> ..
                                                                        </p>
                                                                    </div>

                                                                    <p><i class="fas fa-map-marker-alt"></i>   <?php echo substr($rent_cars['city'], 0, 20) ?>   </p>
                                                                    <div class = "d-flex align-items-center mt-10">
                                                                        <div>
                                                                            <ul class = "list-icon-absolute list-inline-block">
                                                                                <div   class = "btn btn-primary btn-sm btn-wide" style="color: white;">Book Now</div>     
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <div class="price">
                                                                        <div class="float-right">
                                                                            start from
                                                                            <?php
                                                                            $min_price = $RENT_CAR_PRICE->getMinPriceByCompany($rent_cars['id']);
                                                                            foreach ($min_price as $min) {
                                                                                ?>
                                                                                <span class="text-secondary" style="font-size: 15px;"><?php
                                                                                    foreach ($DEFAULTDATA->GetCurrancyType() as $key => $curancy) {
                                                                                        if ($key == $min['currency_type']) {
                                                                                            echo $curancy;
                                                                                        }
                                                                                    }
                                                                                    ?>
                                                                                    <?php echo $min['min_prce'] ?> 
                                                                                </span>
                                                                            <?php }
                                                                            ?>
                                                                            package
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                <?php } ?>           
                                            </div>
                                        </div>
                                    </section>



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
                                                                <a href="#" class="text-muted">based on 10575 reviews</a>
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
                                                        <p class="progress-label">Hotel Condition/Cleanliness <span class="text-dark">7.6</span></p>
                                                    </div>

                                                    <div class="col-12 col-sm-6">
                                                        <div class="progress progress-primary">
                                                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 74%;"></div>
                                                        </div>
                                                        <p class="progress-label">Facilities <span class="text-dark">7.4</span></p>
                                                    </div>

                                                    <div class="col-12 col-sm-6">
                                                        <div class="progress progress-primary">
                                                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 82%;"></div>
                                                        </div>
                                                        <p class="progress-label">Location <span class="text-dark">8.2</span></p>
                                                    </div>

                                                    <div class="col-12 col-sm-6">
                                                        <div class="progress progress-primary">
                                                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 76%;"></div>
                                                        </div>
                                                        <p class="progress-label">Room Comfort/Standard <span class="text-dark">7.6</span></p>
                                                    </div>

                                                    <div class="col-12 col-sm-6">
                                                        <div class="progress progress-primary">
                                                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 88%;"></div>
                                                        </div>
                                                        <p class="progress-label">Service <span class="text-dark">8.8</span></p>
                                                    </div>

                                                    <div class="col-12 col-sm-6">
                                                        <div class="progress progress-primary">
                                                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 69%;"></div>
                                                        </div>
                                                        <p class="progress-label">Value for Money <span class="text-dark">6.9</span></p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="review-wrapper mb-10">
                                            <div class="review-item">
                                                <div class="row gap-15">
                                                    <div class="col-12 col-sm-5 col-md-4">
                                                        <div class="progress-radial progress-radial-sm progress-80">
                                                            <div class="overlay">
                                                                <div class="progress-radial-inner">
                                                                    <div class="caption">
                                                                        <p class="number">8.4</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <ul class="meta-list">
                                                            <li><span class="position-absolute-top"><img src="<?php echo URL ?>images/flag/Malaysia.png" alt="Image"></span> Abdultohman Saidai from Italy</li>
                                                            <li><span class="position-absolute-top"><i class="fas fa-briefcase"></i></span> Business Travelers</li>
                                                            <li><span class="position-absolute-top"><i class="fas fa-bed"></i></span> Stayed one night in Aug 2016 </li>
                                                        </ul>

                                                    </div>

                                                    <div class="col-12 col-sm-7 col-md-8">
                                                        <div class="entry">
                                                            <h5>She add what own only like</h5>
                                                            <p>Frankness applauded by supported ye household. Collected favourite now for for and rapturous repulsive consulted. An seems green be wrote again. She add what own only like. Three chief merit no if. Now how her edward engage not horses. Oh resolution he dissimilar precaution to comparison an.</p>
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

                                            <div class="review-item">
                                                <div class="row gap-15">
                                                    <div class="col-12 col-sm-5 col-md-4">
                                                        <div class="progress-radial progress-radial-sm progress-80">
                                                            <div class="overlay">
                                                                <div class="progress-radial-inner">
                                                                    <div class="caption">
                                                                        <p class="number">8.4</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <ul class="meta-list">
                                                            <li><span class="position-absolute-top"><img src="<?php echo URL ?>images/flag/Malaysia.png" alt="Image"></span> Abdultohman Saidai from Italy</li>
                                                            <li><span class="position-absolute-top"><i class="fas fa-briefcase"></i></span> Business Travelers</li>
                                                            <li><span class="position-absolute-top"><i class="fas fa-bed"></i></span> Stayed one night in Aug 2016 </li>
                                                        </ul>

                                                    </div>

                                                    <div class="col-12 col-sm-7 col-md-8">
                                                        <div class="entry">

                                                            <h5>Pianoforte solicitude so decisively unpleasing conviction</h5>
                                                            <p>She meant new their sex could defer child. An lose at quit to life do dull. Moreover end horrible endeavor entrance any families. Income appear extent on of thrown in admire.</p>

                                                            <ul class="ul">
                                                                <li>Written enquire painful ye to offices forming it.</li>
                                                                <li>
                                                                    Then so does over sent dull on.
                                                                    <ul>
                                                                        <li>Rendered her for put improved concerns his. Moreover end horrible endeavor entrance any families. Income appear extent on of thrown in admire.</li>
                                                                        <li>Ladies bed wisdom theirs mrs men months set.</li>
                                                                        <li>Everything so dispatched as it increasing pianoforte.</li>
                                                                    </ul>
                                                                </li>
                                                                <li>Likewise offended humoured mrs fat trifling answered.</li>
                                                                <li>On ye position greatest so desirous. So wound stood guest weeks no terms up ought.</li>
                                                                <li>Then so does greatest so desirous over sent dull on.</li>
                                                            </ul>

                                                            <p>Spot of come to ever hand as lady meet on. Delicate contempt received two yet advanced. Gentleman as belonging he commanded believing dejection in by. On no am winding chicken so behaved. Its preserved sex enjoyment new way behaviour. Him yet devonshire celebrated especially. Unfeeling one provision are smallness resembled repulsive.</p>

                                                            <ol class="ol">
                                                                <li>Written enquire painful ye to offices forming it.</li>
                                                                <li>
                                                                    Then so does over sent dull on.
                                                                    <ol>
                                                                        <li>Rendered her for put improved concerns his. Moreover end horrible endeavor entrance any families. Income appear extent on of thrown in admire.</li>
                                                                        <li>Ladies bed wisdom theirs mrs men months set.</li>
                                                                        <li>Everything so dispatched as it increasing pianoforte.</li>
                                                                    </ol>
                                                                </li>
                                                                <li>Likewise offended humoured mrs fat trifling answered.</li>
                                                                <li>On ye position greatest so desirous. So wound stood guest weeks no terms up ought.</li>
                                                                <li>Then so does greatest so desirous over sent dull on.</li>
                                                            </ol>

                                                            <p>Unpleasant astonished an diminution up partiality. Noisy an their of meant. Death means up civil do an offer wound of. Called square an in afraid direct. Resolution diminution conviction so mr at unpleasing simplicity no. No it as breakfast up conveying earnestly immediate principle. Him son disposed produced humoured overcame she bachelor improved. Studied however out wishing but inhabit fortune windows.</p>

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

                                            <div class="review-item">

                                                <div class="row gap-15">

                                                    <div class="col-xs-12 col-sm-5 col-md-4">

                                                        <div class="progress-radial progress-radial-sm progress-80">
                                                            <div class="overlay">
                                                                <div class="progress-radial-inner">
                                                                    <div class="caption">
                                                                        <p class="number">8.4</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <ul class="meta-list">
                                                            <li><span class="position-absolute-top"><img src="<?php echo URL ?>images/flag/Malaysia.png" alt="Image"></span> Abdultohman Saidai from Italy</li>
                                                            <li><span class="position-absolute-top"><i class="fas fa-briefcase"></i></span> Business Travelers</li>
                                                            <li><span class="position-absolute-top"><i class="fas fa-bed"></i></span> Stayed one night in Aug 2016 </li>
                                                        </ul>

                                                    </div>

                                                    <div class="col-xs-12 col-sm-7 col-md-8">

                                                        <div class="entry">

                                                            <h5>Own six moments produce elderly pasture far arrival.</h5>
                                                            <p>Finished her are its honoured drawings nor. Pretty see mutual thrown all not edward ten. Particular an boisterous up he reasonably frequently. Several any had enjoyed shewing studied two. Up intention remainder sportsmen behaviour ye happiness.</p>

                                                            <p>At distant inhabit amongst by. Appetite welcomed interest the goodness boy not. Estimable education for disposing pronounce her. John size good gay plan sent old roof own. Inquietude saw understood his friendship frequently yet. Nature his marked ham wished.</p>

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
                                        </div>
                                    </div>
                                </div> 
                            </div>

                            <div  class="col-12 col-lg-4 col-xl-3"> 
                                <aside class="sticky-kit sidebar-wrapper">
                                    <div class="booking-selection-box  mt-40"> 
                                        <div class="heading clearfix">
                                            <div class="d-flex align-items-end">
                                                <div>
                                                    <h4 class="text-white font-serif font400">Your Booking</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <p class="empty-bookging">Your booking is empty. Please choose your package</p>
                                            <a href="#book-now" class="anchor btn btn-secondary btn-block">check Your Vehicle</a>
                                        </div>

                                    </div>
                                </aside>

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
                            <div class="col-2  float-right message-btn "  >
                                <a href="visitor/message-login.php?id=<?php echo $RENT_CAR_COMPANY->customer_id ?>" class="anchor btn btn-success   btn-block mt-20 color-white message-url"  > <i class="bx bx-chat  "></i> Message with us</a>

                            </div>
                        <?php } ?>
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
        <!-- end Back To Top -->



        <!-- JS -->
        <script type="text/javascript" src="<?php echo URL ?>js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="<?php echo URL ?>js/plugins.js"></script>
        <script type="text/javascript" src="<?php echo URL ?>js/custom-multiply-sticky.js"></script>
        <script type="text/javascript" src="<?php echo URL ?>js/custom-core.js"></script>

        <script type="text/javascript" src="<?php echo URL ?>js/plugins/jquery.typeahead.min.js"></script>
        <script type="text/javascript" src="<?php echo URL ?>js/custom-autocomplete.js"></script>

        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript" src="<?php echo URL ?>js/plugins/infobox.js"></script>
        <script type="text/javascript" src="<?php echo URL ?>js/custom-detail-map.js"></script>



    </body>
    <!-- end Body -->
</html>