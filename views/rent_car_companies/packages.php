<!doctype html>
<?php
$id = '';
$id = base64_decode($this->id);

$RENT_CAR = new RentCar($id);
$RENT_CAR_COMPANY = new RentCarCompany($RENT_CAR->company_id);
$DEFAULTDATA = new DefaultData();
?>
<html lang="en">


    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Title Of Site -->
        <title>Car Details</title>
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
                                <li class="breadcrumb-item"><a href="rent-a-car.php"><?php echo $RENT_CAR_COMPANY->title ?></a></li>
                                <li class="breadcrumb-item"><a href="car-view.php"><?php echo $RENT_CAR->title ?></a></li>
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
                                    <div id="detail-content-sticky-nav-05" class="fullwidth-horizon-sticky-section ">
                                        <div class="feature-box-2 mb-20 bg-white">
                                            <div class="booking-selection-box">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-4 col-xs-4" style="padding-right:  0px; "><h5><?php echo $RENT_CAR->title ?>  - Vehicle Details</h5> </div>
                                                </div>
                                                <hr style="margin-top: 15px;margin-bottom: 15px;">
                                                <div class="row">
                                                    <div class="col-md-12 text-justify">
                                                        <?php echo $RENT_CAR->description ?>
                                                    </div> 
                                                </div>  
                                            </div>  
                                        </div> 

                                        <div class="feature-box-2  bg-white">

                                            <div class="feature-row">
                                                <div class="row gap-10 gap-md-30">

                                                    <div class="col-12 col-sm-4 col-md-3">
                                                        <h6>Company Name </h6>
                                                    </div>

                                                    <div class="col-12 col-sm-8 col-md-9">
                                                        <p> <?php echo $RENT_CAR_COMPANY->title ?> </p>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="feature-row">
                                                <div class="row gap-10 gap-md-30">

                                                    <div class="col-12 col-sm-4 col-md-3">
                                                        <h6>Vehicle Type</h6>
                                                    </div>

                                                    <div class="col-12 col-sm-8 col-md-9">
                                                        <p> <?php
                                                            $VEHICLE_TYPE = new VehicleType($RENT_CAR->type);

                                                            echo $VEHICLE_TYPE->title
                                                            ?> </p>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="feature-row">
                                                <div class="row gap-10 gap-md-30">

                                                    <div class="col-12 col-sm-4 col-md-3">
                                                        <h6>Registration Number </h6>
                                                    </div>

                                                    <div class="col-12 col-sm-8 col-md-9">
                                                        <p> <?php echo $RENT_CAR->reg_number ?> </p>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="feature-row">
                                                <div class="row gap-10 gap-md-30">

                                                    <div class="col-12 col-sm-4 col-md-3">
                                                        <h6>Registration Year </h6>
                                                    </div>

                                                    <div class="col-12 col-sm-8 col-md-9">
                                                        <p> <?php echo $RENT_CAR->reg_year ?> </p>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="feature-row">
                                                <div class="row gap-10 gap-md-30"> 
                                                    <div class="col-12 col-sm-4 col-md-3">
                                                        <h6>Fuel Type </h6>
                                                    </div>

                                                    <div class="col-12 col-sm-8 col-md-9">
                                                        <p> <?php echo $RENT_CAR->fuel_type ?> </p>
                                                    </div> 
                                                </div>
                                            </div>

                                            <div class="feature-row">
                                                <div class="row gap-10 gap-md-30"> 
                                                    <div class="col-xs-12 col-sm-4 col-md-3">
                                                        <h6>Contact Details</h6>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-8 col-md-9">
                                                        <p> <?php echo $RENT_CAR->contact_name . ' / ' . $RENT_CAR->contact_number . ' / ' . $RENT_CAR->contact_number_2 ?> <a href="" ><?php echo $RENT_CAR->email ?></a></p>
                                                    </div> 
                                                </div>
                                            </div>

                                            <div class="feature-row">
                                                <div class="row gap-10 gap-md-30"> 
                                                    <div class="col-xs-12 col-sm-4 col-md-3">
                                                        <h6>Vehicle Facility & Details</h6>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-8 col-md-9 ">
                                                        <p class="text-warning"><strong class="text-bold-700">Air Condition - </strong> <?php
                                                            if ($RENT_CAR->air_condition == 1) {
                                                                echo '  Air Condition has';
                                                            } else {
                                                                echo 'No Air Condition';
                                                            }
                                                            ?></p> 
                                                        <p> <strong class="text-bold-700"><i class="bx  bx-check text-bold-700 f-20 text-primary mr-5"> </i><?php echo $RENT_CAR->num_baggaes ?> - Baggages | </strong>  
                                                            <strong class="text-bold-700"><i class="bx  bx-check text-bold-700 f-20 text-primary mr-5"> </i>  <?php echo $RENT_CAR->num_doors ?> - Doors | </strong> 
                                                            <strong class="text-bold-700"><i class="bx  bx-check text-bold-700 f-20 text-primary mr-5"> </i>  <?php echo $RENT_CAR->num_passengers ?> - Passengers </strong></p>

                                                        <p class="alert alert-success"><strong class="mr-5 text-uppercase font-serif font15">Vehicle  Location  !</strong> <?php echo $RENT_CAR->city ?></p>

                                                        <p>Ham pretty our people moment put excuse narrow.</p>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="feature-row">
                                                <div class="row gap-10 gap-md-30">

                                                    <div class="col-xs-12 col-sm-4 col-md-3">
                                                        <h6>Airport Transfer</h6>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-8 col-md-9">
                                                        <p class="text-info"><strong class="text-bold-700"> <?php
                                                                if ($RENT_CAR->airport_transfer == 1) {
                                                                    echo 'Yes ..!   Airport Transfer include.';
                                                                } else {
                                                                    echo 'No ..!   Airport Transfer include.';
                                                                }
                                                                ?> </strong>
                                                        </p> 
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="feature-row" id="book_now">
                                                <div class="row gap-10 gap-md-30">
                                                    <div class="col-xs-12 col-sm-4 col-md-3">
                                                        <h6>Wedding Rents </h6>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-8 col-md-9">
                                                        <p class="text-success">
                                                            <strong class="text-bold-700"> <?php
                                                                if ($RENT_CAR->wedding_cars == 1) {
                                                                    echo 'Yes ..!   Wedding Rent  include.';
                                                                } else {
                                                                    echo 'No ..!   Wedding Rent not include.';
                                                                }
                                                                ?>
                                                            </strong>
                                                        </p> 
                                                    </div> 
                                                </div>
                                            </div> 
                                        </div>  

                                        <div class="feature-box-2 mb-20 bg-white" >
                                            <div class="booking-selection-box">
                                                <div class="row"> 

                                                    <div class="col-md-12 col-sm-8 col-xs-8" ><h5><?php echo $RENT_CAR->title ?> - <span class="text-success">Booking Packages Details</span></h5> </div>
                                                </div>
                                                <hr style="margin-top: 15px;margin-bottom: 15px;">   
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="table-responsive">
                                                            <table class="table mb-0  table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th>ID</th> 
                                                                        <th>Driving Type</th>
                                                                        <th>Select Type</th> 
                                                                        <th>Price</th>
                                                                        <th>Ex Price</th>
                                                                        <th>ACTION</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                    $RENT_CAR_PRICE = new RentCarPrice(NULL);
                                                                    foreach ($RENT_CAR_PRICE->getCarsPriceByCar($id) as $key => $price) {
                                                                        $key++;
                                                                        ?>
                                                                        <tr id="div19">
                                                                            <td class="text-bold-500">00<?php echo $key ?></td> 
                                                                            <td><?php
                                                                                foreach ($DEFAULTDATA->getResionForVehicle() as $key => $drivertype) {
                                                                                    if ($key == $price['driver']) {
                                                                                        echo $drivertype;
                                                                                    }
                                                                                }
                                                                                ?></td> 

                                                                            <td><?php
                                                                                foreach ($DEFAULTDATA->getRentType() as $key => $retuntype) {
                                                                                    if ($key == $price['type']) {
                                                                                        echo $retuntype;
                                                                                    }
                                                                                }
                                                                                ?></td> 
                                                                            <td><?php
                                                                                foreach ($DEFAULTDATA->GetCurrancyType() as $key => $curancy) {
                                                                                    if ($key == $price['currency_type']) {
                                                                                        echo $curancy . ' ' . number_format($price['price'], 2);
                                                                                    }
                                                                                }
                                                                                ?> </td>

                                                                            <td><?php echo number_format($price['extra_price'], 2) ?></td> 

                                                                            <td>
                                                                                <a href="<?php echo URL ?>rent_car_companies/booking/<?php echo base64_encode($price['id']) ?>" target="_blank" > 
                                                                                    <div class="btn btn-primary btn-sm btn-wide" style="color: white;">Book Now</div> 
                                                                                </a>
                                                                            </td>
                                                                        </tr> 
                                                                    <?php } ?>

                                                                </tbody>
                                                            </table>
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
                                    <div class="booking-selection-box mt-20">

                                        <div class="heading clearfix">
                                            <div class="d-flex align-items-end">
                                                <div>
                                                    <h4 class="text-white font-serif font400">Your Booking</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <p class="empty-bookging">Your booking is empty. Please choose your package</p>
                                            <a href="#book_now" class="anchor btn btn-secondary btn-block">check Your Booking..</a>
                                        </div>
                                    </div>

                                </aside>
                            </div>
                        </div>
                        <section class="bg-light section-sm padding-bottom-0">

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
                                                    $RENT_CAR_COMPANY = new RentCarCompany(NULL);
                                                    $RENT_CARS = new RentCar(NULL);
                                                    foreach ($RENT_CAR_COMPANY->allPublished() as $key => $rent_car_company) {
                                                        ?> 
                                                        <div class="slick-item"> 


                                                            <div class="product-grid-item">
                                                                <a href="<?php echo URL ?>rent_car_companies/view/<?php echo base64_encode($rent_car_company['id']) ?>">
                                                                    <div class="image">
                                                                        <img src="<?php echo URL ?>upload/rent-a-car/gallery/thumb/<?php echo $rent_car_company['image_name'] ?>" alt="mytravelpartner.lk">
                                                                    </div>
                                                                </a>

                                                                <div class="content pt-10 clearfix"> 
                                                                    <div class="short-info mr-0 mb-15">
                                                                        <div class="rating-item rating-sm mt-3">
                                                                            <div class="d-flex"> 
                                                                                <div> 
                                                                                    <div class="rating-item rating-sm rating-inline">
                                                                                        <div class="rating-icons">
                                                                                            <span class="material-icons star-size-1 " style="margin-top: 3px;">    star   </span>  
                                                                                            <span class="material-icons star-size-1 " style="margin-top: 3px;">    star   </span>  
                                                                                            <span class="material-icons star-size-1 " style="margin-top: 3px;">    star   </span>  
                                                                                            <span class="material-icons star-size-1 " style="margin-top: 3px;">    star   </span>  
                                                                                            <span class="material-icons star-size-1 " style="margin-top: 3px;">    star   </span>  
                                                                                            <p class="rating-text text-muted"><span class="bg-primary">6.0</span><span class="font13"> -1,2547      </span></p> 
                                                                                        </div>
                                                                                    </div>
                                                                                </div> 
                                                                            </div>
                                                                            <a href="<?php echo URL ?>rent_car_companies/view/<?php echo base64_encode($rent_car_company['id']) ?>">
                                                                                <h6 class="mt-5"><?php echo $rent_car_company['title'] ?></h6>
                                                                            </a>
                                                                        </div>


                                                                        <div class="price">

                                                                            <div class="float-right">
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


                                                                        <div class = "content-bottom mt-auto mt-10"  >

                                                                            <div class = "d-flex align-items-center">
                                                                                <div>
                                                                                    <ul class = "list-icon-absolute list-inline-block">
                                                                                        <a href ="<?php echo URL ?>rent_car_companies/view/<?php echo base64_encode($rent_car_company['id']) ?>" class = "btn btn-primary btn-sm btn-wide " style="color: white;padding-right: 25px;padding-left: 25px;">View More</a>     
                                                                                    </ul>
                                                                                </div>
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
                                </div> 
                            </div> 
                        </section>
                        <div class="fullwidth-horizon-sticky border-0">&#032;</div> <!-- is used to stop the above stick menu -->
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