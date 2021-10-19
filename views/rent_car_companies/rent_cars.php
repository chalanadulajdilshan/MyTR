<!doctype html>
<?php
$VEHICLE_TYPE = new VehicleType(NULL);
$DISTRICTS = new District(NULL);
$DEFAULTDATA = new DefaultData(NULL);
$FEATURE = new Features(NULL);
$RENT_CAR = new RentCar(NULL);

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
        <link href="<?php echo URL ?>css/jquery.datetimepicker.min.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"  rel="stylesheet">

    </head> 

    <!-- start Body -->
    <body class="with-waypoint-sticky">

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
                                                            <h4 class="text-white font-serif font400">Filter Results</h4>
                                                        </div>

                                                    </div>
                                                </div>



                                                <div class="sidebar-box"> 
                                                    <div class="box-title"><h5>Air Condition</h5></div> 
                                                    <div class="box-content"> 

                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input common_selector aircondition" id="air" name="filrerCarCategory"  value="1">
                                                            <label class="custom-control-label" for="air"> Air Condition <small class="text-muted font11">(1)</small></label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input common_selector aircondition" id="nonair" name="filrerCarCategory"  value="0">
                                                            <label class="custom-control-label" for="nonair">Non Air Condition<small class="text-muted font11">(1)</small></label>
                                                        </div>

                                                    </div> 
                                                </div> 
                                                <div class="sidebar-box">

                                                    <div class="box-title"><h5>Vehicle Features</h5></div>

                                                    <div class="box-content"> 
                                                        <?php
                                                        foreach ($FEATURE->all() as $key => $features) {
                                                            ?>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input common_selector feature" id="feature<?php echo $key ?>" name="filrerCarCategory"  value="<?php echo $features['id'] ?>">
                                                                <label class="custom-control-label" for="feature<?php echo $key ?>">  <?php echo $features['title'] ?></label>
                                                            </div>
                                                        <?php } ?>          

                                                    </div> 
                                                </div> 
                                                <div class="sidebar-box">

                                                    <div class="box-title"><h5>Vehicle Rent Bases</h5></div>

                                                    <div class="box-content"> 
                                                        <?php
                                                        foreach ($DEFAULTDATA->getRentType() as $key => $rent_type) {
                                                            ?>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input common_selector rent_type" id="rent<?php echo $key ?>" name="filrerCarCategory"  value="<?php echo $key ?>">
                                                                <label class="custom-control-label" for="rent<?php echo $key ?>">  <?php echo $rent_type ?></label>
                                                            </div>
                                                        <?php } ?>          

                                                    </div> 
                                                </div> 
                                                <div class="sidebar-box">

                                                    <div class="box-title"><h5>Vehicle Rent Types</h5></div>

                                                    <div class="box-content"> 
                                                        <?php
                                                        foreach ($DEFAULTDATA->getResionForVehicle() as $key => $rent_car_resion) {
                                                            ?>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input common_selector vehicle_type" id="resion<?php echo $key ?>" name="filrerCarCategory"  value="<?php echo $key ?>">
                                                                <label class="custom-control-label" for="resion<?php echo $key ?>">  <?php echo $rent_car_resion ?></label>
                                                            </div>
                                                        <?php } ?>          

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
                                                                <label class="custom-control-label" for="filrerCarCategory-v<?php echo $vehicle_type['id'] ?>"><?php echo $vehicle_type['title'] ?> <small class="text-muted font11">(<?php echo $RENT_CAR->getCountByVehicleType($vehicle_type['id']); ?>)</small></label>
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
                                                                    <input type="checkbox" class="custom-control-input common_selector district" id="filterDistrict<?php echo $key ?>" name="filterCarBarnd" >
                                                                    <label class="custom-control-label" for="filterDistrict<?php echo $key ?>"><?php echo $district['name'] ?></label>
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
                                                                            <input type="checkbox" class="custom-control-input" id="filterDistrict<?php echo $key ?>" name="filterCarBarnd" >
                                                                            <label class="custom-control-label" for="filterDistrict<?php echo $key ?>"><?php echo $district['name'] ?></label>
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
                                        <h6>Need help? Call us on</h6>
                                        <span class="phone-number"><i class="material-icons">phone</i> 1985 5524 145</span>
                                        It's free to call from anywhere
                                    </div>

                                    <div class=" d-none d-lg-block">

                                        <h6 class="text-uppercase letter-spacing-2 line-1 font500"><span>Why Book With Travel Material</span></h6>

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

                                    <div class="product-long-item-wrapper filter_data">



                                    </div>

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



        <!-- JS -->
        <script type="text/javascript" src="<?php echo URL ?>js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="<?php echo URL ?>js/plugins.js"></script> 
        <script type="text/javascript" src="<?php echo URL ?>js/plugins/jquery.typeahead.min.js"></script>
        <script type="text/javascript" src="<?php echo URL ?>js/custom-autocomplete.js"></script>

        <script src="<?php echo URL ?>js/ajax/rent-car-filter.js" type="text/javascript"></script>

        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="<?php echo URL ?>js/jquery.datetimepicker.full.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo URL ?>js/custom-core.js"></script>

        <script>

            $(".sticky-kit").stick_in_parent({
                offset_top: 105,
            });


            /**
             * Input Spinner
             */

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

    </body>
    <!-- end Body -->
</html>