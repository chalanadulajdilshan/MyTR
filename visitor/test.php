<!DOCTYPE html>
<?php include '../class/include.php'; ?>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Frest admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Frest admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="PIXINVENT">
        <title>Search - Frest - Bootstrap HTML admin template</title>
        <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
        <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
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
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title text-success">Write your booking review here.</h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <form class="form form-vertical" id="form-data">
                                                <div class="form-body">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="first-name-vertical">Enter your Booking Id</label>
                                                                <input type="text" id="booking_id" class="form-control" name="booking_id"   placeholder="Enter your Booking Id">
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="first-name-vertical">Add your Review Star</label>
                                                                <div style="margin-top: 6px;">
                                                                    <input id="rating-input" type="text" title=""/>


                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="first-name-vertical">Review Title</label>
                                                                <input type="text" id="title" class="form-control" name="title"  placeholder="Enter your Review Title">
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="password-vertical">Add your Review</label>
                                                                <textarea rows="8" class="form-control"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 d-flex justify-content-end">
                                                            <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                                                            <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reset</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div id="searchResults" class="py-0 search-results">

                                    <div class="web-result">
                                        <ul class="list-unstyled">

                                            <li>
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4 class="card-title cursor-pointer">
                                                            <a href="https://dribbble.com/shots/6065222-vuexy-Vuejs-Vuejs-Admin-Dashboard-Template"
                                                               target="_blank">
                                                                Vuexy Vuejs - Vuejs Admin Dashboard Template by Anand on Dribbble
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="meta-data d-flex align-items-center mb-50">
                                                                <span class="rating warning">
                                                                    <i class="bx bxs-star"></i>
                                                                    <i class="bx bxs-star"></i>
                                                                    <i class="bx bxs-star"></i>
                                                                    <i class="bx bxs-star"></i>
                                                                    <i class="bx bxs-star-half"></i>
                                                                </span>
                                                                <small class="ml-50">Rating: 5 - ‎49 reviews - ‎Starting from US$ 28.00 - ‎In stock</small>
                                                            </div>
                                                            <p class="card-text">
                                                                Feb 22, 2019 - FREE SKETCH & ADOBE XD FILE INCLUDED Vuexy – Vuejs Admin Dashboard
                                                                Template – is the most developer friendly & highly customisable VueJS Admin Dashboard Template
                                                                based on Vue CLI, Vuex & Vuexy component framework. Vuexy provides unique features like fuzzy
                                                                search,
                                                                bookmarks ...
                                                            </p>
                                                            <span class="badge badge-light-primary mb-sm-0 mb-25 mr-50">Vuexy</span>
                                                            <span class="badge badge-light-primary mb-sm-0 mb-25 mr-50">Anand On Dribbble</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer border-top d-flex justify-content-between">
                                                        <small class="text-truncate">
                                                            <a href="https://dribbble.com/shots/6065222-vuexy-Vuejs-Vuejs-Admin-Dashboard-Template"
                                                               class="success darken-4 " target="_blank">
                                                                https://dribbble.com/shots/6065222-vuexy-Vuejs-Vuejs-Admin-Dashboard-Template
                                                            </a>
                                                        </small>
                                                        <i class="bx bx-dots-vertical-rounded font-medium-2 cursor-pointer"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4 class="card-title cursor-pointer">
                                                            <a href="https://dribbble.com/shots/6065222-vuexy-Vuejs-Vuejs-Admin-Dashboard-Template"
                                                               target="_blank">
                                                                Vuexy Vuejs - Vuejs Admin Dashboard Template by Anand on Dribbble
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="meta-data d-flex align-items-center mb-50">
                                                                <span class="rating warning">
                                                                    <i class="bx bxs-star"></i>
                                                                    <i class="bx bxs-star"></i>
                                                                    <i class="bx bxs-star"></i>
                                                                    <i class="bx bxs-star"></i>
                                                                    <i class="bx bxs-star-half"></i>
                                                                </span>
                                                                <small class="ml-50">Rating: 5 - ‎49 reviews - ‎Starting from US$ 28.00 - ‎In stock</small>
                                                            </div>
                                                            <p class="card-text">
                                                                Feb 22, 2019 - FREE SKETCH & ADOBE XD FILE INCLUDED Vuexy – Vuejs Admin Dashboard
                                                                Template – is the most developer friendly & highly customisable VueJS Admin Dashboard Template
                                                                based on Vue CLI, Vuex & Vuexy component framework. Vuexy provides unique features like fuzzy
                                                                search,
                                                                bookmarks ...
                                                            </p>
                                                            <span class="badge badge-light-primary mb-sm-0 mb-25 mr-50">Vuexy</span>
                                                            <span class="badge badge-light-primary mb-sm-0 mb-25 mr-50">Anand On Dribbble</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer border-top d-flex justify-content-between">
                                                        <small class="text-truncate">
                                                            <a href="https://dribbble.com/shots/6065222-vuexy-Vuejs-Vuejs-Admin-Dashboard-Template"
                                                               class="success darken-4 " target="_blank">
                                                                https://dribbble.com/shots/6065222-vuexy-Vuejs-Vuejs-Admin-Dashboard-Template
                                                            </a>
                                                        </small>
                                                        <i class="bx bx-dots-vertical-rounded font-medium-2 cursor-pointer"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4 class="card-title cursor-pointer">
                                                            <a href="https://dribbble.com/shots/6065222-vuexy-Vuejs-Vuejs-Admin-Dashboard-Template"
                                                               target="_blank">
                                                                Vuexy Vuejs - Vuejs Admin Dashboard Template by Anand on Dribbble
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="meta-data d-flex align-items-center mb-50">
                                                                <span class="rating warning">
                                                                    <i class="bx bxs-star"></i>
                                                                    <i class="bx bxs-star"></i>
                                                                    <i class="bx bxs-star"></i>
                                                                    <i class="bx bxs-star"></i>
                                                                    <i class="bx bxs-star-half"></i>
                                                                </span>
                                                                <small class="ml-50">Rating: 5 - ‎49 reviews - ‎Starting from US$ 28.00 - ‎In stock</small>
                                                            </div>
                                                            <p class="card-text">
                                                                Feb 22, 2019 - FREE SKETCH & ADOBE XD FILE INCLUDED Vuexy – Vuejs Admin Dashboard
                                                                Template – is the most developer friendly & highly customisable VueJS Admin Dashboard Template
                                                                based on Vue CLI, Vuex & Vuexy component framework. Vuexy provides unique features like fuzzy
                                                                search,
                                                                bookmarks ...
                                                            </p>
                                                            <span class="badge badge-light-primary mb-sm-0 mb-25 mr-50">Vuexy</span>
                                                            <span class="badge badge-light-primary mb-sm-0 mb-25 mr-50">Anand On Dribbble</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer border-top d-flex justify-content-between">
                                                        <small class="text-truncate">
                                                            <a href="https://dribbble.com/shots/6065222-vuexy-Vuejs-Vuejs-Admin-Dashboard-Template"
                                                               class="success darken-4 " target="_blank">
                                                                https://dribbble.com/shots/6065222-vuexy-Vuejs-Vuejs-Admin-Dashboard-Template
                                                            </a>
                                                        </small>
                                                        <i class="bx bx-dots-vertical-rounded font-medium-2 cursor-pointer"></i>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div> 
                                </div>
                            </div>
                            <!--/ Search content area -->
                            <!-- Search Sidebar area -->
                            <div class="col-lg-4 col-md-5 col-12 order-1 order-md-2">
                                <div class="card box-search">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <img class="img-fluid rounded" src="app-assets/images/pages/vuesax-banner.jpg" alt="logo">
                                        </div>
                                        <h5 class="mt-1">Vuexy – Vuejs + HTML Admin Dashboard Template</h5>
                                        <small>Clean Bootstrap 4 Dashboard HTML Template</small>
                                        <p class="mt-1">
                                            <i class="bx bx-link-external pr-1 align-middle"></i>
                                            <a href="https://pixinvent.com/demo/vuexy-html-admin-dashboard-template/landing/" class="align-middle"
                                               target="_blank">
                                                View on Themeforest
                                            </a>
                                        </p>
<!--                                        <p class="card-text">
                                            If you’re a developer looking for an admin dashboard that is made with you in mind,
                                            look no further than Vuexy. A powerful admin dashboard template built on Vue.js, Vuexy is
                                            developer-friendly, rich with features and highly customizable.
                                        </p>-->
                                        <div class="row knowledge-panel text-center py-1">
                                            <div class="col border-right">
                                                <p class="mb-0">1,367</p>
                                                <small>Sales</small>
                                            </div>
                                            <div class="col border-right">
                                                <p class="mb-0">74</p>
                                                <small>Comments</small>
                                            </div>
                                            <div class="col d-inline-block">
                                                <p class="mb-0">5</p>
                                                <small>Ratings</small>
                                            </div>
                                        </div>

                                        <h6>Connect With US</h6>
                                        <div class="knowledge-panel-suggestion">
                                            <div class="suggestion d-inline-block text-center mr-2">
                                                <a href="https://www.facebook.com/pixinvents" target="_blank">
                                                    <i class="bx bxl-facebook-square facebook font-large-1"></i>
                                                    <span class="font-small-2 d-block">Facebook</span>
                                                </a>
                                            </div>
                                            <div class="suggestion d-inline-block text-center mr-2">
                                                <a href="https://www.linkedin.com/in/pixinvent-creative-studio-561a4713b/" target="_blank">
                                                    <i class="bx bxl-linkedin-square linkedin font-large-1"></i>
                                                    <span class="font-small-2 d-block">Linkedin</span>
                                                </a>
                                            </div>
                                            <div class="suggestion d-inline-block text-center mr-2">
                                                <a href="https://twitter.com/pixinvents" target="_blank">
                                                    <i class="bx bxl-twitter twitter font-large-1"></i>
                                                    <span class="font-small-2 d-block">Twitter</span>
                                                </a>
                                            </div>
                                            <div class="suggestion d-inline-block text-center">
                                                <a href="https://www.youtube.com/channel/UClOcB3o1goJ293ri_Hxpklg" target="_blank">
                                                    <i class="bx bxl-youtube youtube font-large-1"></i>
                                                    <span class="font-small-2 d-block">Youtube</span>
                                                </a>
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
        <!-- END: Page Vendor JS-->

        <!-- BEGIN: Theme JS--> 
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
