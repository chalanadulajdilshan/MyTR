<!doctype html>
<?php
if (isset($_GET["page"])) {
    $page = (int) $_GET["page"];
} else {
    $page = 1;
}
$setlimit = 3;

$pagelimit = ($page * $setlimit) - $setlimit;

$DEFAULTDATA = new DefaultData();
$DISTRICTS = new District(NULL);
$TOUR_PACKAGE = new TourPackage(NULL);
$TOUR_COMPANY_PACKAGE = new TourCompanyPackage(NULL);
$TOUR_COMPANY = new TourCompany(NULL);
$TOUR_COMPANY_SELECTED_TOUR_TYPE = new TourCompanySelectedTourTypes(NULL);
?>
<html lang="en">


    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Title Of Site -->
        <title>Restaurants Company || MyTravelPartner.lk</title>
        <meta name="description" content="Resposnive HTML Template for Travel Booking Based on Bootstrap 4.x.x" />
        <meta name="keywords" content="accommodation, booking, holiday, hostel, hotel, motel, reservation, resort, tour, tourism, travel, travel agency, trip, vacation, flight, guide, journey, rental, destination, travel booking" />
        <meta name="author" content="crenoveative">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo URL ?>images/logo-favicon.png">


        <!-- Font face -->
        <link href="https://fonts.googleapis.com/css?family=Aleo:300,300i,400,400i,700,700i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet"> 
        <link href="<?php echo URL ?>css/preloader.css" rel="stylesheet" type="text/css"/>
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
    <body class="someBlock with-waypoint-sticky"> 

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
                                <li class="breadcrumb-item"><a href="<?php echo URL ?>">Home</a></li>
                                <li class="breadcrumb-item"><a href=".">Best Restaurants</a></li>

                            </ol>
                        </nav>
                    </div>
                </div>


                <section class="page-wrapper bg-light-primary">

                    <div class="container">

                        <div class="row gap-20 gap-md-30 gap-xl-40">

                            <div class="col-12 col-lg-3">

                                <aside class="sidebar-wrapper filter-wrapper mb-10 mb-md-0">

                                    <div class="box-expand-lg"> 
                                        <div id="filterResultCallapseOnMobile" class="collapse box-collapse">  
                                            <div class="wrapper-inner"> 
                                                <div class="sidebar-title bg-primary">
                                                    <div class="d-flex align-items-end">
                                                        <div>
                                                            <h4 class="text-white font-serif font400">Filter Restaurants</h4>
                                                        </div> 
                                                    </div>
                                                </div>


                                                <div class="sidebar-box">

                                                    <div class="box-title"><h5>Reviews Ratings </h5></div>
                                                    <div class="box-content"> 

                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input common_selector start_rate" id="filerFacility-s1" name="filerFacility" value="1" >
                                                            <label class="custom-control-label" for="filerFacility-s1"> <span class="material-icons star-size">    star   </span>  <small class="text-muted font11">(1)</small></label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input common_selector start_rate" id="filerFacility-s2" name="filerFacility"  value="2">
                                                            <label class="custom-control-label" for="filerFacility-s2"> <span class="material-icons star-size">    star   </span> <span class="material-icons star-size">    star   </span>   <small class="text-muted font11">(2)  </small></label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input common_selector start_rate" id="filerFacility-s3" name="filerFacility"  value="3">
                                                            <label class="custom-control-label" for="filerFacility-s3"> <span class="material-icons star-size">    star   </span> <span class="material-icons star-size">    star   </span>  <span class="material-icons star-size">    star   </span>   <small class="text-muted font11">3)</small></label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input common_selector start_rate" id="filerFacility-s4" name="filerFacility"  value="4">
                                                            <label class="custom-control-label" for="filerFacility-s4"> <span class="material-icons star-size">    star   </span>  <span class="material-icons star-size">    star   </span>  <span class="material-icons star-size">    star   </span>  <span class="material-icons star-size">    star   </span>  <small class="text-muted font11">(4)</small></label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input common_selector start_rate" id="filerFacility-s5" name="filerFacility"  value="5">
                                                            <label class="custom-control-label" for="filerFacility-s5"> <span class="material-icons star-size">    star   </span> <span class="material-icons star-size">    star   </span>  <span class="material-icons star-size">    star   </span>  <span class="material-icons star-size">    star   </span>  <span class="material-icons star-size">    star   </span>   <small class="text-muted font11">(3)</small></label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input common_selector start_rate" id="filerFacility-s" name="filerFacility" value="0" >
                                                            <label class="custom-control-label" for="filerFacility-s"> Unrated <small class="text-muted font11">(1)</small></label>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="sidebar-box">

                                                    <div class="box-title"><h5>Serve Types</h5></div>

                                                    <div class="box-content">
                                                        <?php
                                                        foreach ($DEFAULTDATA->getServeTypes() as $key => $serve_type) {
                                                            ?>

                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input common_selector serve_type" id="filerTourType<?php echo $key ?>" name="filerTourType" value="<?php echo $serve_type ?>">
                                                                <label class="custom-control-label" for="filerTourType<?php echo $key ?>"><?php echo $serve_type ?><small class="text-muted font11">(<?php echo 1 ?>)</small></label>
                                                            </div>
                                                            <?php
                                                        }
                                                        ?> 

                                                        <div class="clear mb-5"></div> 
                                                    </div>
                                                </div>
                                                <div class="sidebar-box">

                                                    <div class="box-title"><h5>Destinations</h5></div>

                                                    <div class="box-content">
                                                        <?php
                                                        foreach ($DISTRICTS->all() as $key => $district) {
                                                            if ($key >= 5) {
                                                                ?>

                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input common_selector district" id="filerDistric<?php echo $district['id'] ?>" name="filerTourType" value="<?php echo $district['id'] ?>">
                                                                    <label class="custom-control-label" for="filerDistric<?php echo $district['id'] ?>"><?php echo $district['name'] ?><small class="text-muted font11"> (<?php echo $TOUR_COMPANY->countTourCompanyByDistrict($district['id']) ?>)</small></label>
                                                                </div>
                                                                <?php
                                                            }
                                                        }
                                                        ?>
                                                        <div id="filerTourTypeShowHide" class="collapse"> 

                                                            <div class="collapse-inner">
                                                                <?php
                                                                foreach ($DISTRICTS->all() as $key => $district) {

                                                                    if ($key < 5) {
                                                                        ?>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input common_selector district" id="filerDistric<?php echo $district['id'] ?>" name="filerTourType" value="<?php echo $district['id'] ?>">
                                                                            <label class="custom-control-label" for="filerDistric<?php echo $district['id'] ?>"> <?php echo $district['name'] ?><small class="text-muted font11"> (<?php echo $TOUR_COMPANY->countTourCompanyByDistrict($district['id']) ?>)</small></label>
                                                                        </div>
                                                                        <?php
                                                                    }
                                                                }
                                                                ?>
                                                            </div>
                                                        </div>

                                                        <div class="clear mb-5"></div>
                                                        <button class="btn btn-toggle btn-text-inherit text-secondary text-uppercase font10 letter-spacing-1 font600 collapsed collapsed-on" type="buttom" data-toggle="collapse" data-target="#filerTourTypeShowHide">Show more (+)</button>
                                                        <button class="btn btn-toggle btn-text-inherit text-secondary text-uppercase font10 letter-spacing-1 font600 collapsed collapsed-off" type="buttom" data-toggle="collapse" data-target="#filerTourTypeShowHide">Show less (-)</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="featured-contact-01 mt-40 mb-30 d-none d-md-block" >
                                        <h6>You Need help? Call us on</h6>
                                        <span class="phone-number" style="font-size: 24px;"><i class="material-icons">phone</i> <?php echo $MOBILE_NUMBER->short_description ?></span>
                                        It's free to call from anywhere
                                    </div>

                                    <div class=" d-none d-lg-block">

                                        <h6 class="text-uppercase letter-spacing-2 line-1 font500"><span>Why Travel With Us</span></h6>

                                        <ul class="list-icon-data-attr font-ionicons">
                                            <li data-content="&#xf383">Reserve Now & Pay Later.</li>
                                            <li data-content="&#xf383">Free Cancellation up to 24 hours in advance.</li>
                                            <li data-content="&#xf383">Low Price Guarantee / No Booking Fees.</li>

                                        </ul>
                                    </div>

                                    <div class="d-block d-lg-none">
                                        <button type="buttom" class="btn btn-toggle btn-outline-primary btn-block collapsed collapsed-disapear" data-toggle="collapse" data-target="#filterResultCallapseOnMobile">Show Filter</button>		
                                    </div>
                                </aside>
                            </div>

                            <input type="hidden" id="pagelimit" value="<?php echo $pagelimit ?>">
                            <input type="hidden" id="setlimit" value="<?php echo $setlimit ?>"> 
                            <input type="hidden" id="page" value="<?php echo $page ?>"> 

                            <div class="col-12 col-lg-9">
                                <div class="content-wrapper"> 
                                    <!--Show data -->
                                    <div class="row equal-height cols-1 cols-md-2 cols-lg-3 gap-10 gap-lg-20 filter_data">


                                    </div> 
                                    <div class="row">
                                        <!--show pagination-->
                                        <div class="col-12 pager-wrappper mt-40" id="show_pagination">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div> 
            <!-- start Footer Wrapper -->
            <?php
            include 'views/footer.php';
            ?>
            <!-- start Footer Wrapper -->  
        </div>


        <!-- JS -->
        <script type="text/javascript" src="<?php echo URL ?>js/jquery-2.2.4.min.js"></script>

        <!--tour company filter-->
        <script src="<?php echo URL ?>js/ajax/restaurants-filter.js" type="text/javascript"></script>

        <script src="<?php echo URL ?>js/jquery.preloader.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo URL ?>js/plugins.js"></script>
        <script type="text/javascript" src="<?php echo URL ?>js/custom-core.js"></script>
        <script type="text/javascript" src="<?php echo URL ?>js/plugins/jquery.typeahead.min.js"></script>
        <script type="text/javascript" src="<?php echo URL ?>js/custom-autocomplete.js"></script>


    </body> 


</html>