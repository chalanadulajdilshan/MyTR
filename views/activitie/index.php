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
        <title>Fun Activities & Experiences</title>
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
            <div class="main-wrapper scrollspy-container">

                <div class="page-title breadcrumb-wrapper">
                    <div class="container">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="activity.php">Activities & Experiances</a></li>

                            </ol>
                        </nav>
                    </div>
                </div>

                <section class="page-wrapper bg-light-primary">

                    <div class="container">

                        <div class="row gap-20 gap-md-30 gap-xl-40"> 

                            <div class="col-12 col-lg-12">

                                <div class="content-wrapper"> 


                                    <div id="change-search" class="collapse"> 

                                        <div class="change-search-wrapper">

                                            <div class="row gap-10 gap-xl-20 align-items-end">

                                                <div class="col-12 col-lg-12">

                                                    <div class="form-group">
                                                        <label>Destination</label>
                                                        <div class="form-icon-left typeahead__container">
                                                            <span class="icon-font text-muted"><i class="bx bx-map"></i></span>
                                                            <input class="js-typeahead-country_v1 form-control" name="country_v1[query]" type="search" placeholder="Country or city" autocomplete="off">
                                                        </div>
                                                    </div>

                                                </div> 
                                            </div>

                                        </div>

                                    </div>



                                    <div class="row equal-height cols-1 cols-sm-2 cols-lg-4 gap-10 gap-lg-20">
                                        <?php
                                        $ACTIVITIES = new Activities(NULL);
                                        foreach ($ACTIVITIES->allShowPagination($pagelimit, $setlimit) as $activity) {
                                            ?>
                                            <div class="col">

                                                <div class="product-grid-item"> 

                                                    <div class="image">
                                                        <a href="<?php echo URL ?>activitie/view/<?php echo base64_encode($activity['id']) ?>">
                                                            <img src="<?php echo URL ?>upload/activity/<?php echo $activity['image_name'] ?>" alt="<?php echo $activity['title'] ?>">
                                                        </a>
                                                    </div>

                                                    <div class="content pt-10 clearfix">

                                                        <div class="short-info mr-0 mb-5"> 
                                                            <p class="location mb-0"><i class="fas fa-map-marker-alt text-primary"></i> <?php echo $activity['location'] ?></p>
                                                            <a href=<?php echo URL ?>activitie/view/<?php echo base64_encode($activity['id']) ?>">
                                                                <h5 class="mt-5"><?php echo $activity['title'] ?> </h5>
                                                            </a>

                                                        </div>

                                                        <p class="text-justify"> <?php echo substr($activity['short_description'], 0, 80) ?> ...  </p>
                                                        <div class="rating-item rating-sm mt-10">
                                                            <a href="<?php echo URL ?>activitie/view/<?php echo base64_encode($activity['id']) ?>" class="btn btn-primary btn-sm btn-wide color-white w-r"> View</a> 
                                                        </div> 
                                                    </div> 

                                                </div>

                                            </div> 
                                        <?php } ?>
                                    </div>

                                    <div class="pager-wrappper mt-40">

                                        <div class="pager-innner">

                                            <div class="row align-items-center text-center text-md-left">

                                                <?php echo $ACTIVITIES->showPagination($setlimit, $page) ?>

                                            </div>

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
    <!-- end Body -->

</html>