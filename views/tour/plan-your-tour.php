<!doctype html>
<?php
$id = '';
$id = base64_decode($this->id);
?>
<html lang="en">


    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Title Of Site -->
        <title>Plan Your Tour</title>
        <meta name="description" content="Resposnive HTML Template for Travel Booking Based on Bootstrap 4.x.x" />
        <meta name="keywords" content="accommodation, booking, holiday, hostel, hotel, motel, reservation, resort, tour, tourism, travel, travel agency, trip, vacation, flight, guide, journey, rental, destination, travel booking" />
        <meta name="author" content="crenoveative">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo URL ?>images/logo-favicon.png">

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
                                <li class="breadcrumb-item"><a href="plan-your-tour.php">Tour Plans</a></li>

                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="page-wrapper page-payment bg-light">

                    <div class="container">

                        <div class="row gap-30">



                            <div class="col-12 col-lg-12">

                                <div class="content-wrapper"> 
                                    <form class="payment-form-wrapper"> 
                                        <h3 class="heading-title"><span>Plan Your Tour</span></h3>
                                        <p class="post-heading">Two before narrow not relied how except moment myself.</p>

                                        <div class="bg-white-shadow pt-25 ph-30">

                                            <div class="form-inner"> 
                                                <div class="row gap-10 mb-15 align-items-end">  
                                                    <div class="col-12">
                                                        <div class="col-inner">
                                                            <div id="airDatepickerRange-hotel" class="row gap-10 mb-15">

                                                                <div class="col-6">
                                                                    <div class="form-group">
                                                                        <label class="">Check-in</label>
                                                                        <div class="form-icon-left">
                                                                            <span class="icon-font text-muted"><i class="bx bx-calendar"></i></span>
                                                                            <input type="text" id="dateStart-hotel" class="form-control form-readonly-control" placeholder="dd/mm/yyyy">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-6">
                                                                    <div class="form-group">
                                                                        <label class="">Check-out</label>
                                                                        <div class="form-icon-left">
                                                                            <span class="icon-font text-muted"><i class="bx bx-calendar"></i></span>
                                                                            <input type="text" id="dateEnd-hotel" class="form-control form-readonly-control" placeholder="dd/mm/yyyy">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 "> 
                                                        <div class="col-inner"> 
                                                            <div class="row gap-10 mb-15"> 
                                                                <div class="col-12 col-sm-6 col-md-12">

                                                                    <div class="form-people-thread">
                                                                        <div class="row gap-5 align-items-center">
                                                                            <div class="col">
                                                                                <div class="form-group form-spin-group">
                                                                                    <label for="room-amount" class="">Adults <small class=" text-muted font10 line-1">(12-75)</small></label>
                                                                                    <div class="form-icon-left">
                                                                                        <span class="icon-font text-muted"><i class="bx bx-user"></i></span>
                                                                                        <input type="text" class="form-control touch-spin-03 form-readonly-control" placeholder="0" readonly />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col">
                                                                                <div class="form-group form-spin-group">
                                                                                    <label for="room-amount" class="">Children <small class="text-muted font10 line-1" >(2-12)</small></label>
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
                                                        </div>
                                                    </div>

                                                    <div class="col-12 "> 
                                                        <div class="col-inner"> 
                                                            <div class="row gap-10 mb-15"> 
                                                                <div class="col-12 col-sm-6 col-md-12">

                                                                    <div class="form-people-thread">
                                                                        <div class="row gap-5 align-items-center">
                                                                            <div class="col">
                                                                                <div class="form-group form-spin-group">
                                                                                    <label for="room-amount" class="">Rooms</label>
                                                                                    <div class="form-icon-left">
                                                                                        <span class="icon-font text-muted"><i class="bx bx-home-alt"></i></span>
                                                                                        <input type="text" class="form-control touch-spin-03 form-readonly-control" placeholder="0" readonly />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col">
                                                                                <div class="form-group form-spin-group">
                                                                                    <label for="room-amount" class="">phone</label>
                                                                                    <div class="form-icon-left">
                                                                                        <span class="icon-font"><i class="bx bx-phone"></i></span>
                                                                                        <input type="text" class="form-control " placeholder="000-0000000"  />
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
                                                        <h3>What kind of Holiday do you prefer?</h3>
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="createAccountCheckBox">
                                                                        <label class="custom-control-label" for="createAccountCheckBox">Beach Stays</label>
                                                                    </div>
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="createAccountCheckBox1">
                                                                        <label class="custom-control-label" for="createAccountCheckBox1">I am on Honeymoon</label>
                                                                    </div>
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="createAccountCheckBox2">
                                                                        <label class="custom-control-label" for="createAccountCheckBox2">Diving and Snorkeling</label>
                                                                    </div>
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="createAccountCheckBox3">
                                                                        <label class="custom-control-label" for="createAccountCheckBox3">Train Journeys</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="createAccountCheckBox4">
                                                                        <label class="custom-control-label" for="createAccountCheckBox4"> Wildlife Safari</label>
                                                                    </div>
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="createAccountCheckBox5">
                                                                        <label class="custom-control-label" for="createAccountCheckBox5">Hot Air Ballooning</label>
                                                                    </div>
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="createAccountCheckBox6">
                                                                        <label class="custom-control-label" for="createAccountCheckBox6">Sea Sailing</label>
                                                                    </div>
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="createAccountCheckBox7">
                                                                        <label class="custom-control-label" for="createAccountCheckBox7">Adventure Activities</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="createAccountCheckBox8">
                                                                        <label class="custom-control-label" for="createAccountCheckBox8">Visiting Cultural sights</label>
                                                                    </div>
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="createAccountCheckBox9">
                                                                        <label class="custom-control-label" for="createAccountCheckBox9">Whale and Dolphin Watching</label>
                                                                    </div>
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="createAccountCheckBox10">
                                                                        <label class="custom-control-label" for="createAccountCheckBox10">Tea Estate Stays</label>
                                                                    </div>
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="createAccountCheckBox11">
                                                                        <label class="custom-control-label" for="createAccountCheckBox11">Nature and Scenic Explorations</label>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <h3>What is the Most Important Facility you need?</h3>
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="createAccountCheckBox20">
                                                                        <label class="custom-control-label" for="createAccountCheckBox20"> Accommodation</label>
                                                                    </div>
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="createAccountCheckBox21">
                                                                        <label class="custom-control-label" for="createAccountCheckBox21"> Transportation</label>
                                                                    </div> 
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="createAccountCheckBox22">
                                                                        <label class="custom-control-label" for="createAccountCheckBox22"> Communication</label>
                                                                    </div>
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="createAccountCheckBox23">
                                                                        <label class="custom-control-label" for="createAccountCheckBox23"> Guide Assistance</label>
                                                                    </div>

                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="createAccountCheckBox24">
                                                                        <label class="custom-control-label" for="createAccountCheckBox24">Excellent Food</label>
                                                                    </div>
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="createAccountCheckBox25">
                                                                        <label class="custom-control-label" for="createAccountCheckBox25"> Informations</label>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <h3>What Kind of Accommodation pleases you need?</h3>
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="createAccountCheckBox30">
                                                                        <label class="custom-control-label" for="createAccountCheckBox30"> Budget Guest Houses</label>
                                                                    </div>
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="createAccountCheckBox31">
                                                                        <label class="custom-control-label" for="createAccountCheckBox31"> Guide Assistance</label>
                                                                    </div> 
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="createAccountCheckBox32">
                                                                        <label class="custom-control-label" for="createAccountCheckBox32">  2-3 Star Hotels</label>
                                                                    </div>                                                                                                
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="createAccountCheckBox33">
                                                                        <label class="custom-control-label" for="createAccountCheckBox33">4-5 Star Hotels</label>
                                                                    </div> 
                                                                </div> 
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12 "> 
                                                        <h3>Personal Details.</h3>
                                                        <div class="col-inner"> 
                                                            <div class="row gap-10 mb-15"> 
                                                                <div class="col-12 col-sm-6 col-md-12">

                                                                    <div class="form-people-thread">
                                                                        <div class="row gap-5 align-items-center">
                                                                            <div class="col">
                                                                                <div class="form-group form-spin-group">
                                                                                    <label for="room-amount"  >Your Name</label>
                                                                                    <div class="form-icon-left">
                                                                                        <span class="icon-font text-muted"><i class="bx bx-user"></i></span>
                                                                                        <input type="text" class="form-control   form-readonly-control"    />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col">
                                                                                <div class="form-group form-spin-group">
                                                                                    <label for="room-amount" class="">Your Email</label>
                                                                                    <div class="form-icon-left">
                                                                                        <span class="icon-font"><i class="bx bx-envelope"></i></span>
                                                                                        <input type="text" class="form-control "   />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <label for="room-amount" class="">Message</label>
                                                                                <textarea rows="8" cols="15" class=" form-control" ></textarea>


                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-2">
                                                        <a href="#" class="btn btn-primary btn-block">Submit Plan</a>
                                                    </div> 
                                                </div> 
                                            </div>  

                                        </div> 
                                    </form> 
                                </div> 
                            </div> 
                        </div>

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
        <script type="text/javascript" src="<?php echo URL ?>js/custom-core.js"></script>

        <script type="text/javascript" src="<?php echo URL ?>js/plugins/jquery.typeahead.min.js"></script>
        <script type="text/javascript" src="<?php echo URL ?>js/custom-autocomplete.js"></script>



    </body>


</html>