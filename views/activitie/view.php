<!doctype html>
<?php
$id = '';
$id = base64_decode($this->id);

$ACTIVITIES = new Activities($id);
?>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Title Of Site -->
        <title> <?php echo $ACTIVITIES->title ?> - MyTravelPartner.lk</title>
        <meta name="description" content="Resposnive HTML Template for Travel Booking Based on Bootstrap 4.x.x" />
        <meta name="keywords" content="accommodation, booking, holiday, hostel, hotel, motel, reservation, resort, tour, tourism, travel, travel agency, trip, vacation, flight, guide, journey, rental, destination, travel booking" />
        <meta name="author" content="crenoveative">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

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
            <?php include 'views/header.php'; ?>
            <!-- end Header -->

            <!-- start Main Wrapper -->
            <div class="main-wrapper scrollspy-action">

                <div class="page-title breadcrumb-wrapper">
                    <div class="container">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="<?php echo URL ?>activitie/">Activities</a></li> 
                                <li class="breadcrumb-item active" aria-current="page"><?php echo $ACTIVITIES->title ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="page-wrapper page-detail bg-light">


                    <div class="container">

                        <div class="row gap-30">

                            <div class="col-12 col-lg-8 col-xl-9">

                                <div class="content-wrapper">

                                    <div class="slick-gallery-slideshow detail-gallery">

                                        <div class="slider gallery-slideshow">
                                            <?php
                                            $ACTIVITY_PHOTO = new ActivitiesPhoto(NULL);
                                            foreach ($ACTIVITY_PHOTO->getActivitiesPhotosById($id) as $activity_photo) {
                                                ?>
                                                <div><div class="image"><img src="<?php echo URL ?>upload/activity/gallery/<?php echo $activity_photo['image_name'] ?>" alt="<?php echo $activity_photo['caption'] ?>" /></div></div>
                                            <?php } ?>
                                        </div>
                                        <div class="slider gallery-nav">
                                            <?php
                                            $ACTIVITY_PHOTO = new ActivitiesPhoto(NULL);
                                            foreach ($ACTIVITY_PHOTO->getActivitiesPhotosById($id) as $activity_photo) {
                                                ?>
                                                <div><div class="image"><img src="<?php echo URL ?>upload/activity/gallery/thumb/<?php echo $activity_photo['image_name'] ?>" alt="<?php echo $activity_photo['caption'] ?>" /></div></div>

                                            <?php } ?>
                                        </div>

                                    </div>

                                    <div id="detail-content-sticky-nav-01" > 
                                        <h3 class="heading-title"><span><?php echo $ACTIVITIES->title ?></span></h3>   
                                        <h6>Get the celebrity treatment with world-class service at Marina Bay Sands </h6> 
                                        <?php echo $ACTIVITIES->description ?>  
                                    </div>



                                    <div id="detail-content-sticky-nav-03" class="fullwidth-horizon-sticky-section">

                                        <h3 class="heading-title"><span>What's nearby</span></h3>

                                        <div class="hotel-detail-location-wrapper">

                                            <div class="row gap-30">

                                                <div class="col-12 col-md-7">

                                                    <div class="map-holder">

                                                        <div id="hotel-detail-map" data-lat="25.19739" data-lon="55.28821" style="width: 100%; height: 480px;"></div>

                                                        <div class="infobox-wrapper">
                                                            <div id="infobox">
                                                                <div class="infobox-inner">

                                                                    <div class="font500 font12">We Are Here</div>

                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="col-12 col-md-5">

                                                    <div class="col-inner">

                                                        <h5 class="text-uppercase">Location highlights</h5>
                                                        <?php echo $ACTIVITIES->location_highlight ?>  
                                                    </div> 
                                                </div>

                                            </div>

                                        </div>

                                    </div> 
                                </div>

                            </div>

                            <div  class="col-12 col-lg-4 col-xl-3">

                                <aside class="sticky-kit sidebar-wrapper"> 
                                    <?php
                                    $ACTIVITIES = new Activities(NULL);
                                    foreach ($ACTIVITIES->all() as $key => $activity) {
                                        if ($key < 6) {
                                            ?>
                                            <a href="<?php echo URL ?>activitie/view/<?php echo base64_encode($activity['id']) ?>" class="item-small clearfix mb-10">
                                                <div class="image">
                                                    <img src="<?php echo URL ?>upload/activity/<?php echo $activity['image_name'] ?>" alt="<?php echo $activity['title'] ?>" />
                                                </div>
                                                <div class="content">
                                                    <h6><?php echo $activity['title'] ?></h6>
                                                    <span class="text-muted"><?php echo $activity['location'] ?></span> 
                                                    <span class="meta text-secondary"><span class="font12 d-block"> View More </span> </span>
                                                </div>

                                            </a>
                                            <?php
                                        }
                                    }
                                    ?>
                                    <a href="<?php echo URL ?>activitie/" class="btn btn-secondary btn-block mt-20">View All</a> 
                                </aside> 
                            </div> 
                        </div> 


                    </div>

                </div>

                <section class="bg-white mt-30">

                    <div class="container">

                        <div class="section-title mb-25 text-center">

                            <h3>You may also like</h3>

                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="slick-carousel-wrapper pb-10">

                                    <div class="slick-carousel-inner">

                                        <div class="slick-product-item-4"> 

                                            <?php
                                            $ACTIVITIES = new Activities(NULL);
                                            foreach ($ACTIVITIES->all() as $activity) {
                                                ?>
                                                <div class="slick-item">  
                                                    <div class="product-grid-item">  
                                                        <div class="image">
                                                            <a href="<?php echo URL ?>activitie/view/<?php echo base64_encode($activity['id']) ?>">
                                                                <img src="<?php echo URL ?>upload/activity/<?php echo $activity['image_name'] ?>" alt="<?php echo $activity['title'] ?>">
                                                            </a>
                                                        </div>

                                                        <div class="content pt-10 clearfix">

                                                            <div class="short-info mr-0 mb-10"> 
                                                                <p class="location mb-0"><i class="fas fa-map-marker-alt text-primary"></i><?php echo $activity['location'] ?></p>
                                                                <a href="<?php echo URL ?>activitie/view/<?php echo base64_encode($activity['id']) ?>">
                                                                    <h5 class="mt-5"><?php echo $activity['title'] ?> </h5>
                                                                </a>

                                                            </div>

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
                                </div>
                            </div>
                        </div>

                    </div>

                </section>

            </div>		
            <!-- end Main Wrapper -->



            <!-- start Footer Wrapper -->
            <?php include 'views/footer.php'; ?>
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