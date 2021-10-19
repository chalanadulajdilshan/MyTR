<!doctype html>
<?php
$id = '';
$id = base64_decode($this->package);


$COMPANY_SELECTED = NEW TourCompanyPackageSelected($id);
$TOUR_PACKAGE = new TourPackage($COMPANY_SELECTED->selected_package);
$TOUR_DATES = new TourDate(NULL);
$TOUR_PACKAGE_PHOTO = new TourPackagePhoto(NULL);
?>
<html lang="en">


    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Title Of Site -->
        <title><?php echo $TOUR_PACKAGE->title ?> || MyTravelPartner.lk</title>
        <meta name="description" content="Resposnive HTML Template for Travel Booking Based on Bootstrap 4.x.x" />
        <meta name="keywords" content="accommodation, booking, holiday, hostel, hotel, motel, reservation, resort, tour, tourism, travel, travel agency, trip, vacation, flight, guide, journey, rental, destination, travel booking" />
        <meta name="author" content="crenoveative">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="shortcut icon" type="<?php echo URL ?>image/x-icon" href="images/logo-favicon.png">

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
        <link href="<?php echo URL ?>css/simplelightbox.min.css" rel="stylesheet" type="text/css"/>


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
                                <li class="breadcrumb-item"><a href="rent-a-car.php">Tour Packages</a></li>
                                <li class="breadcrumb-item"><a href="car-view.php"><?php echo $TOUR_PACKAGE->title ?></a></li>
                            </ol>
                        </nav>
                    </div>
                </div> 

                <div class="page-wrapper page-detail bg-light">



                    <span  id="detail-content-sticky-nav-00" class="d-block"></span>

                    <div class="container">

                        <div class="row gap-30">

                            <div class="col-12 col-lg-8 col-xl-9">

                                <div class="content-wrapper">

                                    <div class="slick-gallery-slideshow  ">

                                        <div class="slider gallery-slideshow">
                                            <?php
                                            foreach ($TOUR_PACKAGE_PHOTO->getTourPackagePhotosByPackage($id) as $tour_package_photo) {
                                                ?>
                                                <div><div class="image"><img src="<?php echo URL ?>upload/tour-package/gallery/<?php echo $tour_package_photo['image_name'] ?>" alt="<?php echo $tour_package_photo['caption'] ?>" /></div></div>
                                            <?php } ?>

                                        </div>
                                        <div class="slider gallery-nav">
                                            <?php
                                            foreach ($TOUR_PACKAGE_PHOTO->getTourPackagePhotosByPackage($id) as $tour_package_photo) {
                                                ?>
                                                <div><div class="image"><img src="<?php echo URL ?>upload/tour-package/gallery/thumb/<?php echo $tour_package_photo['image_name'] ?>" alt="<?php echo $tour_package_photo['caption'] ?>" /></div></div>

                                            <?php } ?>
                                        </div>

                                    </div>


                                    <div id="detail-content-sticky-nav-05" class="fullwidth-horizon-sticky-section ">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <h3 class="heading-title"><span><?php echo $TOUR_PACKAGE->title ?></span></h3>

                                            </div>
                                            <div class="col-md-3 detail-header " style="background: none;padding:  0px;margin: 0px;">
                                                <div class="price">
                                                    From <span>$<span><?php echo $COMPANY_SELECTED->price ?></span></span> / Per person
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                        $TOUR_DATE = new TourDate(NULL);
                                        foreach ($TOUR_DATE->getTourDatesById($TOUR_PACKAGE->id) as $tour_date) {
                                            ?>

                                            <div class="feature-box-2 mb-20 bg-white">

                                                <div class="booking-selection-box">
                                                    <div class="row">
                                                        <div class="col-md-2" style="padding-right:  0px;max-width: 12%;"><h5>Day <span class="text-success"><?php echo $tour_date['num_date'] ?> - </span></h5> </div>

                                                        <div class="col-md-10"style="padding-left:  0px;" ><h5 class="float-left"> <span class="text-success"><?php echo $tour_date['title'] ?></span></h5> </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <?php echo $tour_date['description'] ?>
                                                        </div> 
                                                    </div>
                                                    <div class="row mt-20">
                                                        <?php
                                                        $TOUR_DATE_PHOTO = new TourDatePhoto(NULL);
                                                        foreach ($TOUR_DATE_PHOTO->getTourDatePhotosById($tour_date['id']) as $tour_date_photo) {
                                                            ?>
                                                            <div class="col-md-3 gallery  ">
                                                                <a href="<?php echo URL ?>upload/tour-package/date/photo/<?php echo $tour_date_photo['image_name'] ?>" class="big"><img src="<?php echo URL ?>upload/tour-package/date/photo/thumb/<?php echo $tour_date_photo['image_name'] ?>" alt="<?php echo $tour_date_photo['caption'] ?>" title="<?php echo $tour_date_photo['caption'] ?>" /></a>

                                                            </div>
                                                        <?php } ?>
                                                    </div>

                                                </div>


                                            </div>
                                        <?php } ?>
                                    </div> 

                                    <div class="feature-box-2 mb-20 bg-white">

                                        <div class="booking-selection-box">
                                            <div class="row">
                                                <div class="col-md-12" style="padding-right:  0px; "><h5><?php echo $TOUR_PACKAGE->title ?> <span class="text-success"> Include Details </span></h5> </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <?php echo $COMPANY_SELECTED->include ?>  

                                                </div> 
                                            </div> 
                                        </div> 
                                    </div>
                                    <div class="feature-box-2 mb-20 bg-white">

                                        <div class="booking-selection-box">
                                            <div class="row">
                                                <div class="col-md-12" style="padding-right:  0px; "><h5><?php echo $TOUR_PACKAGE->title ?> <span class="text-success"> Exclude Details </span></h5> </div>


                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <?php echo $COMPANY_SELECTED->exclude ?>  

                                                </div> 
                                            </div> 
                                        </div> 
                                    </div>
                                </div> 
                            </div>

                            <div  class="col-12 col-lg-4 col-xl-3"> 
                                <aside class="sticky-kit sidebar-wrapper"  > 
                                    <div class="booking-selection-box  "> 
                                        <div class="heading clearfix">
                                            <div class="d-flex align-items-end">
                                                <div>
                                                    <h4 class="text-white font-serif font400">Book this Package </h4>
                                                </div> 
                                            </div>
                                        </div>

                                        <div class="content">
                                            <div class="sidebar-box"> 
                                                <p>If you like this Tour Package You Can Book it Now. You can get now..! </p>

                                                <div class="form-group mt-5">
                                                    <a href="<?php echo URL ?>tour/booking/<?php echo base64_encode($id) ?>" class="btn btn-secondary btn-block mt-20">Book Now</a>
                                                </div> 

                                            </div>  
                                        </div> 
                                    </div> 
                                </aside> 
                            </div> 
                        </div> 
                        <div class="fullwidth-horizon-sticky border-0">&#032;</div> <!-- is used to stop the above stick menu --> 
                    </div> 
                </div>



            </div>		
            <!-- end Main Wrapper -->



            <!-- start Footer Wrapper -->
            <?php
            include './footer.php';
            ?>
            <!-- start Footer Wrapper -->

        </div>
        <!-- end Body Inner -->

        <!-- start Back To Top -->
        <a id="back-to-top" href="#" class="back-to-top" role="button" title="Click to return to top" data-toggle="tooltip" data-placement="left"><i class="bx bx-chevron-up"></i></a>
        <!-- end Back To Top -->

        <!-- JS -->
        <script type="text/javascript" src="<?php echo URL ?>js/jquery-2.2.4.min.js"></script>
        <script src="<?php echo URL ?>js/simple-lightbox.min.js" type="text/javascript"></script>
        <script>
            $(function () {
                var $gallery = $('.gallery a').simpleLightbox();

                $gallery.on('show.simplelightbox', function () {
                    console.log('Requested for showing');
                })
                        .on('shown.simplelightbox', function () {
                            console.log('Shown');
                        })
                        .on('close.simplelightbox', function () {
                            console.log('Requested for closing');
                        })
                        .on('closed.simplelightbox', function () {
                            console.log('Closed');
                        })
                        .on('change.simplelightbox', function () {
                            console.log('Requested for change');
                        })
                        .on('next.simplelightbox', function () {
                            console.log('Requested for next');
                        })
                        .on('prev.simplelightbox', function () {
                            console.log('Requested for prev');
                        })
                        .on('nextImageLoaded.simplelightbox', function () {
                            console.log('Next image loaded');
                        })
                        .on('prevImageLoaded.simplelightbox', function () {
                            console.log('Prev image loaded');
                        })
                        .on('changed.simplelightbox', function () {
                            console.log('Image changed');
                        })
                        .on('nextDone.simplelightbox', function () {
                            console.log('Image changed to next');
                        })
                        .on('prevDone.simplelightbox', function () {
                            console.log('Image changed to prev');
                        })
                        .on('error.simplelightbox', function (e) {
                            console.log('No image found, go to the next/prev');
                            console.log(e);
                        });
            });
        </script>
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