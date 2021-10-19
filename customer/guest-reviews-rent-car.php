<!DOCTYPE html>
<?php
include '../class/include.php';
include './auth.php';
?>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Frest admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Frest admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="PIXINVENT">
        <title>Guest Review Rent a vehicle - MyTravelPartner.lk</title>
        <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
        <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/logo-favicon.png"> 
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/swiper.min.css">
        <!-- END: Vendor CSS-->

        <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/colors.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/components.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.min.css">
        <!-- END: Theme CSS-->

        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/extensions/swiper.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/pages/search.min.css">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <!-- END: Custom CSS-->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link href="assets/css/star-rating.min.css" rel="stylesheet" type="text/css"/>
        <!--suppress JSUnresolvedLibraryURL -->
        <link href="assets/css/sweetalert.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">



    <body>


        <!-- BEGIN: Body-->
    <body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">

        <!-- BEGIN: Header-->
        <div class="header-navbar-shadow"></div>
        <?php include './header.php'; ?>
        <!-- END: Header-->



        <!-- BEGIN: Content-->
        <div class="app-content content">

            <div class="content-wrapper" style="margin-top: 0px;">
                <div class="content-overlay"></div>

                <div class="content-header row">
                    <div class="content-header-left col-12 mb-2 mt-1">
                        <div class="row breadcrumbs-top">
                            <div class="col-12">
                                <h5 class="content-header-title float-left pr-1 mb-0">Dashboard</h5>
                                <div class="breadcrumb-wrapper col-12">
                                    <ol class="breadcrumb p-0 mb-0">
                                        <li class="breadcrumb-item"><a href="index.php"><i class="bx bx-home-alt"></i></a>
                                        </li> 
                                        <li class="breadcrumb-item active">Create Rent a car Company
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-body"><section class="search-bar-wrapper">

                        <!-- seach result section -->
                        <div class="row">
                            <div class="col-12">
                                <!-- search data searching speed -->
                                <div class="search-speed mb-1">
                                    <small class="text-muted">About 133,000,000 results (0.45seconds)</small>
                                </div>
                            </div>
                            <!--Search Result-->
                            <!-- Search content area -->
                            <div class="col-lg-8 col-md-7 col-12 order-2 order-md-1 " id="sc-bar">
                               
                                <div id="searchResults" class="py-0 search-results">
                                    <div class="web-result">
                                        <ul class="list-unstyled">
                                            <?php
                                            $GUEST_REVIEWS = new GuestReview(NULL);
                                            $HOTEL_BOOK = new HotelBooking(NULL);
                                            foreach ($GUEST_REVIEWS->getReviesByVisitorId($_SESSION['id']) as $guest_reviews) {
                                                $ACC_ID = $HOTEL_BOOK->getIdByBookingId($guest_reviews['booking_id']);
                                                $ACCOMMODATION = new Accommodation($ACC_ID);
                                                ?>
                                                <li id="div<?php echo $guest_reviews['id'] ?>">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h4 class="card-title cursor-pointer">
                                                                <a href="#" >
                                                                    <?php echo $guest_reviews['title'] ?>
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div class="card-content">
                                                            <div class="card-body">
                                                                <div class="meta-data d-flex align-items-center mb-50">

                                                                    <?php
                                                                    if ($guest_reviews['starts'] == 1) {
                                                                        ?>
                                                                        <span class="rating warning">
                                                                            <i class="bx bxs-star"></i>
                                                                            <i class="bx bx-star"></i>
                                                                            <i class="bx bx-star"></i>
                                                                            <i class="bx bx-star"></i>
                                                                            <i class="bx bx-star"></i>

                                                                        </span>
                                                                        <small class="ml-50">Rating: <span class="text-danger"><b> Terrible </b></span> - ‎ <?php echo $ACCOMMODATION->title ?> - Review Date: <?php echo $guest_reviews['create_at'] ?>  </small>
                                                                    <?php } ?>

                                                                    <?php
                                                                    if ($guest_reviews['starts'] == 2) {
                                                                        ?>
                                                                        <span class="rating warning">
                                                                            <i class="bx bxs-star"></i>
                                                                            <i class="bx bxs-star"></i>
                                                                            <i class="bx bx-star"></i>
                                                                            <i class="bx bx-star"></i>
                                                                            <i class="bx bx-star"></i>

                                                                        </span>
                                                                        <small class="ml-50">Rating: <span class="text-warning"><b> Poor </b></span> - ‎ <?php echo $ACCOMMODATION->title ?> - Review Date: <?php echo $guest_reviews['create_at'] ?>  </small>
                                                                    <?php } ?>

                                                                    <?php
                                                                    if ($guest_reviews['starts'] == 3) {
                                                                        ?>
                                                                        <span class="rating warning">
                                                                            <i class="bx bxs-star"></i>
                                                                            <i class="bx bxs-star"></i>
                                                                            <i class="bx bxs-star"></i>
                                                                            <i class="bx bx-star"></i>
                                                                            <i class="bx bx-star"></i>

                                                                        </span>
                                                                        <small class="ml-50">Rating: <span class="text-info"><b> Average </b></span> - ‎ <?php echo $ACCOMMODATION->title ?> - Review Date: <?php echo $guest_reviews['create_at'] ?>  </small>
                                                                    <?php } ?>
                                                                    <?php
                                                                    if ($guest_reviews['starts'] == 4) {
                                                                        ?>
                                                                        <span class="rating warning">
                                                                            <i class="bx bxs-star"></i>
                                                                            <i class="bx bxs-star"></i>
                                                                            <i class="bx bxs-star"></i>
                                                                            <i class="bx bxs-star"></i>
                                                                            <i class="bx bx-star"></i>

                                                                        </span>
                                                                        <small class="ml-50">Rating: <span class="text-primary"><b> Very Good </b></span> - ‎ <?php echo $ACCOMMODATION->title ?> - Review Date: <?php echo $guest_reviews['create_at'] ?>  </small>
                                                                    <?php } ?>
                                                                    <?php
                                                                    if ($guest_reviews['starts'] == 5) {
                                                                        ?>
                                                                        <span class="rating warning">
                                                                            <i class="bx bxs-star"></i>
                                                                            <i class="bx bxs-star"></i>
                                                                            <i class="bx bxs-star"></i>
                                                                            <i class="bx bxs-star"></i>
                                                                            <i class="bx bxs-star"></i>

                                                                        </span>
                                                                        <small class="ml-50">Rating: <span class="text-success"><b> Excellent </b></span> - ‎ <?php echo $ACCOMMODATION->title ?> - Review Date: <?php echo $guest_reviews['create_at'] ?>  </small>
                                                                    <?php } ?>
                                                                </div>
                                                                <p class="card-text text-justify">
                                                                    <?php echo $guest_reviews['review'] ?> ...
                                                                </p>

                                                            </div>
                                                        </div>
                                                        <div class="card-footer border-top d-flex justify-content-between">
                                                            <small class="text-truncate">
                                                                <span class="badge badge-light-primary mb-sm-0 mb-25 mr-50">Vuexy</span>
                                                                <span class="badge badge-light-primary mb-sm-0 mb-25 mr-50">Anand On Dribbble</span>
                                                            </small>
                                                            <div class="dropdown">
                                                                <span class="bx bx-dots-vertical-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu"></span>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item"  href="edit-guest-review.php?id=<?php echo $guest_reviews['id'] ?>"><i class="bx bx-edit-alt mr-1"></i> Edit Review</a>
                                                                    <a class="dropdown-item delete-review"  data-id="<?php echo $guest_reviews['id'] ?>" href="#" ><i class="bx bx-trash mr-1"></i> delete Review</a>
                                                                </div>
                                                            </div> 
                                                        </div>
                                                    </div>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </div> 
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-5 col-12 order-1 order-md-2">
                                <div class="card box-search">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <img class="img-fluid rounded" src="app-assets/images/award.jpg" alt="logo">
                                        </div>
                                        <h5 class="mt-1">Your Reviewed Award Section </h5>
                                        <small>If you complete the reviews and you can get a Award</small>

<!--                                        <p class="card-text">
     If you’re a developer looking for an admin dashboard that is made with you in mind,
     look no further than Vuexy. A powerful admin dashboard template built on Vue.js, Vuexy is
     developer-friendly, rich with features and highly customizable.
 </p>-->
                                        <div class="row knowledge-panel text-center py-1">
                                            <div class="col border-right">
                                                <p class="mb-0">1,367</p>
                                                <small>Award</small>
                                            </div>
                                            <div class="col border-right">
                                                <p class="mb-0">74</p>
                                                <small>Reviews</small>
                                            </div>
                                            <div class="col d-inline-block">
                                                <p class="mb-0">5</p>
                                                <small>Ratings</small>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <!--/ Search Sidebar area -->
                        </div>
                    </section>
                    <!--/ Search result section -->
                </div>
            </div>
        </div>





        <!-- BEGIN: Footer-->
        <?php include './footer.php'; ?>
        <!-- END: Footer-->


        <!-- BEGIN: Vendor JS-->
        <script src="app-assets/vendors/js/vendors.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>

        <!-- BEGIN: Page Vendor JS-->
        <script src="js/ajax/guest_reviews.js" type="text/javascript"></script>
        <script src="delete/js/guest-review.js" type="text/javascript"></script>
        <!-- END: Page Vendor JS-->

        <!-- BEGIN: Theme JS--> 
        <script src="js/sweetalert.min.js" type="text/javascript"></script>
        <script src="app-assets/vendors/js/extensions/swiper.min.js"></script>
        <script src="app-assets/js/scripts/configs/vertical-menu-dark.min.js"></script>
        <script src="app-assets/js/core/app-menu.min.js"></script>
        <script src="app-assets/js/core/app.min.js"></script>
        <script src="app-assets/js/scripts/components.min.js"></script>
        <script src="app-assets/js/scripts/footer.min.js"></script>
        <script src="app-assets/js/scripts/customizer.min.js"></script>

        <script src="app-assets/js/scripts/pages/page-search.min.js"></script>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="js/star-rating.min.js" type="text/javascript"></script>
        <script>
            jQuery(document).ready(function () {

                var $inp = $('#rating-input');

                $inp.rating({
                    min: 0,
                    max: 5,
                    step: 1,
                    size: 'lg',
                    showClear: false
                });

                $('#btn-rating-input').on('click', function () {
                    $inp.rating('refresh', {
                        showClear: true,
                        disabled: !$inp.attr('disabled')
                    });
                });

                $('.rb-rating').rating({
                    'showCaption': true,
                    'stars': '3',
                    'min': '0',
                    'max': '3',
                    'step': '1',
                    'size': 'xs',
                    'starCaptions': {0: 'status:nix', 1: 'status:wackelt', 2: 'status:geht', 3: 'status:laeuft'}
                });
                $("#input-21c").rating({
                    min: 0, max: 8, step: 0.5, size: "xl", stars: "8"
                });
            });
        </script>

    </body>
</html>
