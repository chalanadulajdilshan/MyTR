<!doctype html>
<?php
if (isset($_GET["page"])) {
    $page = (int) $_GET["page"];
} else {
    $page = 1;
}
$setlimit = 4;

$pagelimit = ($page * $setlimit) - $setlimit;
?>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Title Of Site -->
        <title>Destinations</title>
        <meta name="description" content="Resposnive HTML Template for Travel Booking Based on Bootstrap 4.x.x" />
        <meta name="keywords" content="accommodation, booking, holiday, hostel, hotel, motel, reservation, resort, tour, tourism, travel, travel agency, trip, vacation, flight, guide, journey, rental, destination, travel booking" />
        <meta name="author" content="crenoveative">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo URL ?>images/logo-favicon.png">

        <!-- Font face -->
        <link href="https://fonts.googleapis.com/css?family=Aleo:300,300i,400,400i,700,700i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet"> 

        <!-- CSS -->
        <link href="<?php echo URL ?>css/font-icons.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo URL ?>bootstrap/css/bootstrap.min.css" media="screen">	
        <link href="<?php echo URL ?>css/animate.html" rel="stylesheet">
        <link href="<?php echo URL ?>css/main.css" rel="stylesheet">
        <link href="<?php echo URL ?>css/plugin.css" rel="stylesheet">
        <link href="<?php echo URL ?>css/style.css" rel="stylesheet">
        <link href=<?php echo URL ?>"css/your-style.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"  rel="stylesheet">

    </head>



    <!-- start Body -->
    <body class="with-waypoint-sticky">

        <div class="body-inner"> 

            <!-- start Header -->
            <?php
            include 'views/header.php';
            ?> 
            <!-- start Main Wrapper -->
            <div class="main-wrapper scrollspy-action">
                <div class="page-title breadcrumb-wrapper">
                    <div class="container">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="destinations.php">Destinations</a></li>

                            </ol>
                        </nav>
                    </div>
                </div>


                <div class="page-wrapper zero">  
                    <div class="container">
                        <section class="mt-40"> 

                            <div class="row  ">
                                <?php
                                $DECORATION = new Attraction(NULL);
                                foreach ($DECORATION->allShowPagination($pagelimit, $setlimit) as $key => $destination) {
                                    ?>
                                    <div class="  cols-1 cols-sm-2 cols-md-3 cols-lg-4 gap-10 gap-lg-20 col-md-3 mb-20"> 
                                        <figure class="image-caption-01">
                                            <a href="<?php echo URL ?>destinations/view/<?php echo base64_encode($destination['id']) ?>">
                                                <div class="image overlay-relative caption-relative">
                                                    <img src="upload/attraction/<?php echo $destination['image_name'] ?>" alt="<?php echo $destination['title'] ?>" />
                                                    <div class="overlay-holder opacity-2"></div>
                                                    <figcaption class="caption-holder">
                                                        <div class="caption-inner caption-middle text-center">
                                                            <h5><?php echo $destination['title'] ?></h5>
                                                            <span class="d-block">View More</span>
                                                        </div>
                                                    </figcaption>
                                                </div>
                                            </a>
                                        </figure> 
                                    </div>  
                                <?php } ?>
                            </div> 
                            <div class="pager-wrappper mt-40">

                                <div class="pager-innner">
                                    <div class="row align-items-center text-center text-md-left">
                                        <?php echo $DECORATION->showPagination($setlimit, $page) ?>

                                    </div>
                                </div>

                            </div>
                        </section>
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



        <!-- JS -->
        <script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/custom-core.js"></script>

        <script type="text/javascript" src="js/plugins/jquery.typeahead.min.js"></script>
        <script type="text/javascript" src="js/custom-autocomplete.js"></script>



    </body>

</html>