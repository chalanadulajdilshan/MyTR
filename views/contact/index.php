<!doctype html>

<html lang="en">


    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Title Of Site -->
        <title>Contact Us</title>
        <meta name="description" content="Resposnive HTML Template for Travel Booking Based on Bootstrap 4.x.x" />
        <meta name="keywords" content="accommodation, booking, holiday, hostel, hotel, motel, reservation, resort, tour, tourism, travel, travel agency, trip, vacation, flight, guide, journey, rental, destination, travel booking" />
        <meta name="author" content="crenoveative">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="images/logo-favicon.png">

        <!-- Fav and Touch Icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.html">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.html">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.html">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.html">
        <link rel="shortcut icon" href="images/ico/favicon.html">

        <!-- Font face -->
        <link href="https://fonts.googleapis.com/css?family=Aleo:300,300i,400,400i,700,700i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet"> 

        <!-- CSS -->
        <link href="css/font-icons.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="screen">	
        <link href="css/animate.html" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/plugin.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/your-style.css" rel="stylesheet">
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
                                <li class="breadcrumb-item"><a href="contact.php">Contact Us</a></li>

                            </ol>
                        </nav>
                    </div>
                </div>


                <div class="map-contact-wrapper">

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31712.76387203282!2d79.97741683447127!3d6.509596998636381!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae231979e0bfff1%3A0xe0986f310b9a8abf!2sMaggona!5e0!3m2!1sen!2slk!4v1583868199154!5m2!1sen!2slk" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

                    <div class="infobox-wrapper contact-infobox">
                        <div id="infobox">
                            <div class="infobox-address">
                                <h6>We Are Here</h6>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="page-wrapper bg-light pv-80">

                    <div class="container">

                        <div class="row gap-40">

                            <div class="col-12 col-lg-8">

                                <div class="section-title">
                                    <h3>Get in Touch</h3>
                                </div>

                                <form id="contact-form" method="post" action="http://crenoveative.com/envato/travel-material/contact.php">

                                    <div class="contact-successful-messages"></div>

                                    <div class="contact-inner">

                                        <div class="row gap-20 gap-lg-30 mb-20">
                                            <div class="col-6">
                                                <div class="form-group mb-0">
                                                    <label for="form_name">Firstname *</label>
                                                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your full name *" required="required" data-error="Name is required.">
                                                    <div class="help-block with-errors text-danger"></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group mb-0">
                                                    <label for="form_email">Email *</label>
                                                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                                                    <div class="help-block with-errors text-danger"></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group mb-0">
                                                    <label for="form_phone">Phone</label>
                                                    <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
                                                    <div class="help-block with-errors text-danger"></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group mb-0">
                                                    <label for="form_subject">Subject *</label>
                                                    <input id="form_subject" type="text" name="subject" class="form-control" placeholder="Subject is required *" required="required" data-error="Subject is required.">
                                                    <div class="help-block with-errors text-danger"></div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group mb-0">
                                                    <label for="form_message">Message *</label>
                                                    <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="6" required="required" data-error="Please,leave us a message."></textarea>
                                                    <div class="help-block with-errors text-danger"></div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary btn-send">Send message</button>
                                            </div>
                                        </div>

                                    </div>

                                </form>

                            </div>

                            <div class="col-12 col-lg-4">

                                <div class="section-title">
                                    <h3>Contact Details</h3>
                                </div>

                                <ul class="contact-list">

                                    <li class="clearfix">
                                        <div class="icon-font"><i class="bx bx-map-pin"></i></div>
                                        <div class="content">
                                            <h6>Location:</h6>
                                            <p>545, Marina Rd., <br/>Mohammed Bin Rashid Boulevard, <br/>Dubai 123234</p>
                                        </div>
                                    </li>

                                    <li class="clearfix">
                                        <div class="icon-font"><i class="bx bx-phone-call"></i></div>
                                        <div class="content">
                                            <h6>Line Phone:</h6>
                                            <p>+254 20 271043</p>
                                        </div>
                                    </li>

                                    <li class="clearfix">
                                        <div class="icon-font"><i class="bx bx-mobile"></i></div>
                                        <div class="content">
                                            <h6>Mobile Phone:</h6>
                                            <p>+254 722 225591</p>
                                        </div>

                                    </li>

                                    <li class="clearfix">
                                        <div class="icon-font"><i class="bx bx-envelope"></i></div>
                                        <div class="content">
                                            <h6>Email:</h6>
                                            <p><a href="#">sales@roomspoint.com</a></p>
                                        </div>

                                    </li>

                                </ul>

                            </div>

                        </div>

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
        <script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/custom-core.js"></script>

        <script type="text/javascript" src="js/plugins/jquery.typeahead.min.js"></script>
        <script type="text/javascript" src="js/custom-autocomplete.js"></script>



    </body>
    <!-- end Body -->




    <!-- Mirrored from crenoveative.com/envato/travel-material/index-header-02.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Mar 2020 21:14:01 GMT -->
</html>