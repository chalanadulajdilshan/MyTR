<!doctype html>
<?php
include './class/include.php';


if (isset($_GET["page"])) {
    $page = (int) $_GET["page"];
} else {
    $page = 1;
}
$setlimit = 2;

$pagelimit = ($page * $setlimit) - $setlimit;
?>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Title Of Site -->
        <title>Travel Material - Resposnive HTML Template for Travel Booking Based on Bootstrap 4.x.x</title>
        <meta name="description" content="Resposnive HTML Template for Travel Booking Based on Bootstrap 4.x.x" />
        <meta name="keywords" content="accommodation, booking, holiday, hostel, hotel, motel, reservation, resort, tour, tourism, travel, travel agency, trip, vacation, flight, guide, journey, rental, destination, travel booking" />
        <meta name="author" content="crenoveative">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- Fav and Touch Icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="images/ico/favicon.png">

        <!-- Font face -->
        <link href="https://fonts.googleapis.com/css?family=Aleo:300,300i,400,400i,700,700i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet"> 

        <!-- CSS -->
        <link href="css/font-icons.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="screen">	
        <link href="css/animate.css" rel="stylesheet">
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
            <?php include './header.php'; ?>
            <!-- end Header --> 

            <!-- start Main Wrapper -->
            <div class="main-wrapper scrollspy-action">


                <div class="page-title breadcrumb-wrapper">
                    <div class="container">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li> 
                                <li class="breadcrumb-item active" aria-current="page">Blog</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="page-wrapper ">

                    <section>

                        <div class="container"> 
                            <div class="row equal-height cols-1 cols-sm-1 cols-md-2 cols-lg-3 gap-20 gap-lg-30 justify-content-center">

                                <?php
                                $BLOG = new Blog(NULL);
                                foreach ($BLOG->allShowPagination($pagelimit, $setlimit) as $blog) {
                                    ?>
                                    <div class="col"> 
                                        <div class="post-grid"> 
                                            <div class="post-header  "> 
                                                <h5><a href="view-blog.php?id=<?php echo $blog['id'] ?>"><?php echo $blog['title'] ?></a></h5>
                                            </div> 
                                            <div class="post-content">
                                                <a href="view-blog.php?id=<?php echo $blog['id'] ?>">
                                                    <img src="upload/blog/thumb/<?php echo $blog['image_name'] ?>" class="img-responsive" alt="<?php echo $blog['title'] ?>" /> 
                                                </a>
                                                <p class="text-justify">
                                                    <?php echo substr($blog['short_description'], 0, 150) ?> ......      
                                                </p>
                                            </div>

                                            <div class="post-meta">
                                                <span><i class="dripicons-calendar"></i> <a href="#">  <?php echo date("M d, Y", strtotime($blog['date'])); ?></a></span> 
                                                <span><a href="view-blog.php?id=<?php echo $blog['id'] ?>" class="btn-read-more">read more <i class="dripicons-arrow-thin-right"></i></a></span>
                                            </div> 
                                        </div> 
                                    </div>
                                <?php } ?>
                            </div>

                            <div class="pager-wrappper mt-40">

                                <div class="pager-innner">

                                    <div class="row align-items-center text-center text-md-left">

                                        <?php echo Blog::showPagination($setlimit, $page) ?>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </section>

                </div>

            </div>		
            <!-- end Main Wrapper -->



            <!-- start Footer Wrapper -->
            <?php include './footer.php'; ?>
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



</html>