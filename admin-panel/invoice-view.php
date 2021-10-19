<!DOCTYPE html>
<?php
include '../class/include.php';
?>
<html class="loading" lang="en" data-textdirection="ltr">
    <!-- BEGIN: Head-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Frest admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Frest admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="PIXINVENT">
        <title>Invoice - Frest - Bootstrap HTML admin template</title>
        <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
        <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
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
        <link rel="stylesheet" type="text/css" href="app-assets/css/pages/app-invoice.min.css">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">


    </head>
    <!-- END: Head-->

    <!-- BEGIN: Body-->
    <body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">

        <!-- BEGIN: Header-->
        <div class="header-navbar-shadow"></div>
        <?php include './header.php'; ?>

        <!-- BEGIN: Content-->
        <div class="app-content content">
            <div class="content-overlay"></div>
            <div class="content-wrapper">
                <div class="content-header row">
                </div>
                <div class="content-body"><!-- app invoice View Page -->
                    <section class="invoice-view-wrapper">
                        <div class="row">
                            <!-- invoice view page -->
                            <div class="col-xl-9 col-md-8 col-12">
                                <div class="card invoice-print-area">
                                    <div class="card-content">
                                        <div class="card-body pb-0 mx-25">
                                            <!-- header section -->
                                            <div class="row">
                                                <div class="col-xl-4 col-md-12">
                                                    <span class="invoice-number mr-50">Invoice#</span>
                                                    <span>000756</span>
                                                </div>
                                                <div class="col-xl-8 col-md-12">
                                                    <div class="d-flex align-items-center justify-content-xl-end flex-wrap">
                                                        <div class="mr-3">
                                                            <small class="text-muted">Date Issue:</small>
                                                            <span>08/10/2019</span>
                                                        </div>
                                                        <div>
                                                            <small class="text-muted">Date Due:</small>
                                                            <span>08/10/2019</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- logo and title -->
                                            <div class="row my-3">
                                                <div class="col-6">
                                                    <h4 class="text-primary">Invoice</h4>
                                                    <span>Software Development</span>
                                                </div>
                                                <div class="col-6 d-flex justify-content-end">
                                                    <img src="app-assets/images/pages/pixinvent-logo.png" alt="logo" height="46" width="164">
                                                </div>
                                            </div>
                                            <hr>
                                            <!-- invoice address and contact -->
                                            <div class="row invoice-info">
                                                <div class="col-6 mt-1">
                                                    <h6 class="invoice-from">Bill From</h6>
                                                    <div class="mb-1">
                                                        <span>Clevision PVT. LTD.</span>
                                                    </div>
                                                    <div class="mb-1">
                                                        <span>9205 Whitemarsh Street New York, NY 10002</span>
                                                    </div>
                                                    <div class="mb-1">
                                                        <span>hello@clevision.net</span>
                                                    </div>
                                                    <div class="mb-1">
                                                        <span>601-678-8022</span>
                                                    </div>
                                                </div>
                                                <div class="col-6 mt-1">
                                                    <h6 class="invoice-to">Bill To</h6>
                                                    <div class="mb-1">
                                                        <span>Pixinvent PVT. LTD.</span>
                                                    </div>
                                                    <div class="mb-1">
                                                        <span>203 Sussex St. Suite B Waukegan, IL 60085</span>
                                                    </div>
                                                    <div class="mb-1">
                                                        <span>pixinvent@gmail.com</span>
                                                    </div>
                                                    <div class="mb-1">
                                                        <span>987-352-5603</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                        <!-- product details table-->
                                        <div class="invoice-product-details table-responsive mx-md-25">
                                            <table class="table table-borderless mb-0">
                                                <thead>
                                                    <tr class="border-0">
                                                        <th scope="col">Item</th>
                                                        <th scope="col">Description</th>
                                                        <th scope="col">Cost</th>
                                                        <th scope="col">Qty</th>
                                                        <th scope="col" class="text-right">Price</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Frest Admin</td>
                                                        <td>HTML Admin Template</td>
                                                        <td>28</td>
                                                        <td>1</td>
                                                        <td class="text-primary text-right font-weight-bold">$28.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Apex Admin</td>
                                                        <td>Anguler Admin Template</td>
                                                        <td>24</td>
                                                        <td>1</td>
                                                        <td class="text-primary text-right font-weight-bold">$24.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Stack Admin</td>
                                                        <td>HTML Admin Template</td>
                                                        <td>24</td>
                                                        <td>1</td>
                                                        <td class="text-primary text-right font-weight-bold">$24.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <!-- invoice subtotal -->
                                        <div class="card-body pt-0 mx-25">
                                            <hr>
                                            <div class="row">
                                                <div class="col-4 col-sm-6 mt-75">
                                                    <p>Thanks for your business.</p>
                                                </div>
                                                <div class="col-8 col-sm-6 d-flex justify-content-end mt-75">
                                                    <div class="invoice-subtotal">
                                                        <div class="invoice-calc d-flex justify-content-between">
                                                            <span class="invoice-title">Subtotal</span>
                                                            <span class="invoice-value">$ 76.00</span>
                                                        </div>
                                                        <div class="invoice-calc d-flex justify-content-between">
                                                            <span class="invoice-title">Discount</span>
                                                            <span class="invoice-value">- $ 09.60</span>
                                                        </div>
                                                        <div class="invoice-calc d-flex justify-content-between">
                                                            <span class="invoice-title">Tax</span>
                                                            <span class="invoice-value">21%</span>
                                                        </div>
                                                        <hr>
                                                        <div class="invoice-calc d-flex justify-content-between">
                                                            <span class="invoice-title">Invoice Total</span>
                                                            <span class="invoice-value">$ 66.40</span>
                                                        </div>
                                                        <div class="invoice-calc d-flex justify-content-between">
                                                            <span class="invoice-title">Paid to date</span>
                                                            <span class="invoice-value">- $ 00.00</span>
                                                        </div>
                                                        <div class="invoice-calc d-flex justify-content-between">
                                                            <span class="invoice-title">Balance (USD)</span>
                                                            <span class="invoice-value">$ 10,953</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- invoice action  -->
                            <div class="col-xl-3 col-md-4 col-12">
                                <div class="card invoice-action-wrapper shadow-none border">
                                    <div class="card-body">
                                        <div class="invoice-action-btn">
                                            <button class="btn btn-primary btn-block invoice-send-btn">
                                                <i class="bx bx-send"></i>
                                                <span>Send Invoice</span>
                                            </button>
                                        </div>
                                        <div class="invoice-action-btn">
                                            <button class="btn btn-light-primary btn-block invoice-print">
                                                <span>print</span>
                                            </button>
                                        </div>
                                        <div class="invoice-action-btn">
                                            <a href="app-invoice-edit.html" class="btn btn-light-primary btn-block">
                                                <span>Edit Invoice</span>
                                            </a>
                                        </div>
                                        <div class="invoice-action-btn">
                                            <button class="btn btn-success btn-block">
                                                <i class='bx bx-dollar'></i>
                                                <span>Add Payment</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <!-- END: Content-->


        <!-- BEGIN: Customizer-->
        <div class="customizer d-none d-md-block"><a class="customizer-close" href="#"><i class="bx bx-x"></i></a><a class="customizer-toggle" href="#"><i class="bx bx-cog bx bx-spin white"></i></a><div class="customizer-content p-2">
                <h4 class="text-uppercase mb-0">Theme Customizer</h4>
                <small>Customize & Preview in Real Time</small>
                <hr>
                <!-- Theme options starts -->
                <h5 class="mt-1">Theme Layout</h5>
                <div class="theme-layouts">
                    <div class="d-flex justify-content-start">
                        <div class="mx-50">
                            <fieldset>
                                <div class="radio">
                                    <input type="radio" name="layoutOptions" value="false" id="radio-light" class="layout-name" data-layout=""
                                           checked>
                                    <label for="radio-light">Light</label>
                                </div>
                            </fieldset>
                        </div>
                        <div class="mx-50">
                            <fieldset>
                                <div class="radio">
                                    <input type="radio" name="layoutOptions" value="false" id="radio-dark" class="layout-name"
                                           data-layout="dark-layout">
                                    <label for="radio-dark">Dark</label>
                                </div>
                            </fieldset>
                        </div>
                        <div class="mx-50">
                            <fieldset>
                                <div class="radio">
                                    <input type="radio" name="layoutOptions" value="false" id="radio-semi-dark" class="layout-name"
                                           data-layout="semi-dark-layout">
                                    <label for="radio-semi-dark">Semi Dark</label>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
                <!-- Theme options starts -->
                <hr>

                <!-- Menu Colors Starts -->
                <div id="customizer-theme-colors">
                    <h5>Menu Colors</h5>
                    <ul class="list-inline unstyled-list">
                        <li class="color-box bg-primary selected" data-color="theme-primary"></li>
                        <li class="color-box bg-success" data-color="theme-success"></li>
                        <li class="color-box bg-danger" data-color="theme-danger"></li>
                        <li class="color-box bg-info" data-color="theme-info"></li>
                        <li class="color-box bg-warning" data-color="theme-warning"></li>
                        <li class="color-box bg-dark" data-color="theme-dark"></li>
                    </ul>
                    <hr>
                </div>
                <!-- Menu Colors Ends -->
                <!-- Menu Icon Animation Starts -->
                <div id="menu-icon-animation">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="icon-animation-title">
                            <h5 class="pt-25">Icon Animation</h5>
                        </div>
                        <div class="icon-animation-switch">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" checked id="icon-animation-switch">
                                <label class="custom-control-label" for="icon-animation-switch"></label>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
                <!-- Menu Icon Animation Ends -->
                <!-- Collapse sidebar switch starts -->
                <div class="collapse-sidebar d-flex justify-content-between align-items-center">
                    <div class="collapse-option-title">
                        <h5 class="pt-25">Collapse Menu</h5>
                    </div>
                    <div class="collapse-option-switch">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="collapse-sidebar-switch">
                            <label class="custom-control-label" for="collapse-sidebar-switch"></label>
                        </div>
                    </div>
                </div>
                <!-- Collapse sidebar switch Ends -->
                <hr>

                <!-- Navbar colors starts -->
                <div id="customizer-navbar-colors">
                    <h5>Navbar Colors</h5>
                    <ul class="list-inline unstyled-list">
                        <li class="color-box bg-white border selected" data-navbar-default=""></li>
                        <li class="color-box bg-primary" data-navbar-color="bg-primary"></li>
                        <li class="color-box bg-success" data-navbar-color="bg-success"></li>
                        <li class="color-box bg-danger" data-navbar-color="bg-danger"></li>
                        <li class="color-box bg-info" data-navbar-color="bg-info"></li>
                        <li class="color-box bg-warning" data-navbar-color="bg-warning"></li>
                        <li class="color-box bg-dark" data-navbar-color="bg-dark"></li>
                    </ul>
                    <small><strong>Note :</strong> This option with work only on sticky navbar when you scroll page.</small>
                    <hr>
                </div>
                <!-- Navbar colors starts -->
                <!-- Navbar Type Starts -->
                <h5>Navbar Type</h5>
                <div class="navbar-type d-flex justify-content-start">
                    <div class="hidden-ele mx-50">
                        <fieldset>
                            <div class="radio">
                                <input type="radio" name="navbarType" value="false" id="navbar-hidden">
                                <label for="navbar-hidden">Hidden</label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="mx-50">
                        <fieldset>
                            <div class="radio">
                                <input type="radio" name="navbarType" value="false" id="navbar-static">
                                <label for="navbar-static">Static</label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="mx-50">
                        <fieldset>
                            <div class="radio">
                                <input type="radio" name="navbarType" value="false" id="navbar-sticky" checked>
                                <label for="navbar-sticky">Fixed</label>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <hr>
                <!-- Navbar Type Starts -->

                <!-- Footer Type Starts -->
                <h5>Footer Type</h5>
                <div class="footer-type d-flex justify-content-start">
                    <div class="mx-50">
                        <fieldset>
                            <div class="radio">
                                <input type="radio" name="footerType" value="false" id="footer-hidden">
                                <label for="footer-hidden">Hidden</label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="mx-50">
                        <fieldset>
                            <div class="radio">
                                <input type="radio" name="footerType" value="false" id="footer-static" checked>
                                <label for="footer-static">Static</label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="mx-50">
                        <fieldset>
                            <div class="radio">
                                <input type="radio" name="footerType" value="false" id="footer-sticky">
                                <label for="footer-sticky" class="">Sticky</label>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <!-- Footer Type Ends -->
                <hr>

                <!-- Card Shadow Starts-->
                <div class="card-shadow d-flex justify-content-between align-items-center py-25">
                    <div class="hide-scroll-title">
                        <h5 class="pt-25">Card Shadow</h5>
                    </div>
                    <div class="card-shadow-switch">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" checked id="card-shadow-switch">
                            <label class="custom-control-label" for="card-shadow-switch"></label>
                        </div>
                    </div>
                </div>
                <!-- Card Shadow Ends-->
                <hr>

                <!-- Hide Scroll To Top Starts-->
                <div class="hide-scroll-to-top d-flex justify-content-between align-items-center py-25">
                    <div class="hide-scroll-title">
                        <h5 class="pt-25">Hide Scroll To Top</h5>
                    </div>
                    <div class="hide-scroll-top-switch">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="hide-scroll-top-switch">
                            <label class="custom-control-label" for="hide-scroll-top-switch"></label>
                        </div>
                    </div>
                </div>
                <!-- Hide Scroll To Top Ends-->
            </div>
        </div>
        <!-- End: Customizer-->

        <!-- Buynow Button-->
        <div class="buy-now"><a href="https://1.envato.market/frest_admin" target="_blank" class="btn btn-danger">Buy Now</a>

        </div>
        <!-- demo chat-->
        <div class="widget-chat-demo"><!-- widget chat demo footer button start -->
            <button class="btn btn-primary chat-demo-button glow px-1"><i class="livicon-evo"
                                                                          data-options="name: comments.svg; style: lines; size: 24px; strokeColor: #fff; autoPlay: true; repeat: loop;"></i></button>
            <!-- widget chat demo footer button ends -->
            <!-- widget chat demo start -->
            <div class="widget-chat widget-chat-demo d-none">
                <div class="card mb-0">
                    <div class="card-header border-bottom p-0">
                        <div class="media m-75">
                            <a href="JavaScript:void(0);">
                                <div class="avatar mr-75">
                                    <img src="app-assets/images/portrait/small/avatar-s-2.jpg" alt="avtar images" width="32"
                                         height="32">
                                    <span class="avatar-status-online"></span>
                                </div>
                            </a>
                            <div class="media-body">
                                <h6 class="media-heading mb-0 pt-25"><a href="javaScript:void(0);">Kiara Cruiser</a></h6>
                                <span class="text-muted font-small-3">Active</span>
                            </div>
                            <i class="bx bx-x widget-chat-close float-right my-auto cursor-pointer"></i>
                        </div>
                    </div>
                    <div class="card-body widget-chat-container widget-chat-demo-scroll">
                        <div class="chat-content">
                            <div class="badge badge-pill badge-light-secondary my-1">today</div>
                            <div class="chat">
                                <div class="chat-body">
                                    <div class="chat-message">
                                        <p>How can we help? 😄</p>
                                        <span class="chat-time">7:45 AM</span>
                                    </div>
                                </div>
                            </div>
                            <div class="chat chat-left">
                                <div class="chat-body">
                                    <div class="chat-message">
                                        <p>Hey John, I am looking for the best admin template.</p>
                                        <p>Could you please help me to find it out? 🤔</p>
                                        <span class="chat-time">7:50 AM</span>
                                    </div>
                                </div>
                            </div>
                            <div class="chat">
                                <div class="chat-body">
                                    <div class="chat-message">
                                        <p>Stack admin is the responsive bootstrap 4 admin template.</p>
                                        <span class="chat-time">8:01 AM</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer border-top p-1">
                        <form class="d-flex" onsubmit="widgetChatMessageDemo();" action="javascript:void(0);">
                            <input type="text" class="form-control chat-message-demo mr-75" placeholder="Type here...">
                            <button type="submit" class="btn btn-primary glow px-1"><i class="bx bx-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- widget chat demo ends -->

        </div>
        <div class="sidenav-overlay"></div>
        <div class="drag-target"></div>

        <!-- BEGIN: Footer-->
    
        <!-- END: Footer-->


        <!-- BEGIN: Vendor JS-->
        <script src="app-assets/vendors/js/vendors.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
        <!-- BEGIN Vendor JS-->

        <!-- BEGIN: Page Vendor JS-->
        <!-- END: Page Vendor JS-->

        <!-- BEGIN: Theme JS-->
        <script src="app-assets/js/scripts/configs/vertical-menu-dark.min.js"></script>
        <script src="app-assets/js/core/app-menu.min.js"></script>
        <script src="app-assets/js/core/app.min.js"></script>
        <script src="app-assets/js/scripts/components.min.js"></script>
        <script src="app-assets/js/scripts/footer.min.js"></script>
        <script src="app-assets/js/scripts/customizer.min.js"></script>
        <!-- END: Theme JS-->

        <!-- BEGIN: Page JS-->
        <script src="app-assets/js/scripts/pages/app-invoice.min.js"></script>
        <!-- END: Page JS-->

    </body>
    <!-- END: Body-->
</html>