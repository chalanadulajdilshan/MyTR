<!DOCTYPE html>
<!--
Template Name: Frest HTML Admin Template
Author: :Pixinvent
Website: http://www.pixinvent.com/
Contact: hello@pixinvent.com
Follow: www.twitter.com/pixinvents
Like: www.facebook.com/pixinvents
Purchase: https://1.envato.market/pixinvent_portfolio
Renew Support: https://1.envato.market/pixinvent_portfolio
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.

-->
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  
<!-- Mirrored from www.pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/html/ltr/vertical-menu-template-semi-dark/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Feb 2020 00:16:23 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Frest admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Frest admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Dashboard Ecommerce - Frest - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.html">
    <link rel="shortcut icon" type="image/x-icon" href="https://www.pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/charts/apexcharts.css">
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
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/dashboard-ecommerce.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">

    <!-- BEGIN: Header-->
    <?php
    include 'includes/header.php';
    ?>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- Dashboard Ecommerce Starts -->
        <div class="row">
          <h4>Update Transport Rate</h4>
    <div class="col-sm-12">
      <div class="card">
        
        <div class="card-content">
          <div class="card-body">
            
            <ul class="nav nav-tabs justify-content-center" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="home-tab-center" data-toggle="tab" href="#home-center"
                  aria-controls="home-center" role="tab" aria-selected="true">
                  Transport Rate
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " id="service-tab-center" data-toggle="tab" href="#service-center"
                  aria-controls="service-center" role="tab" aria-selected="false">
                  Self Drive Rate
                </a>
              </li>
               
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="home-center" aria-labelledby="home-tab-center" role="tabpanel">
                 <div class="row">
                  <div class="col-sm-6">
                  <div class="form-group">
                    <label>Location From</label>
                    <input type="text" class="form-control" placeholder="Enter Location">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Location To</label>
                    <input type="text" class="form-control" placeholder="Enter Location">
                  </div>
                </div>
                 </div>
                 <div class="row">
                  <div class="col-sm-6">
                  <div class="form-group">
                    <label>Distance(Km)</label>
                    <input type="text" class="form-control" placeholder="Distance">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Price(USD)</label>
                    <input type="text" class="form-control" placeholder="Price">
                  </div>
                </div>
                 </div>
                 <div class="col-sm-12">
                <div class="table-responsive">
          <table class="table mb-0">
            <thead class="thead-dark">
              <tr>
                <th>ID</th>
                <th>From</th>
                <th>To</th>
                <th>Distance</th>
                <th>Price</th>
                <th>ACTION</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-bold-500">001</td>
                <td>Colombo</td>
                <td class="text-bold-500">Galle</td>
                <td>109Km</td>
                <td>$29</td>
                <td><a href="#"><i
                      class="badge-circle badge-circle-light-secondary bx bx-envelope font-medium-1"></i></a>
                      
                    </td>
              </tr>
              <tr>
                <td class="text-bold-500">001</td>
                <td>Colombo</td>
                <td class="text-bold-500">Galle</td>
                <td>109Km</td>
                <td>$29</td>
                <td><a href="#"><i
                      class="badge-circle badge-circle-light-secondary bx bx-envelope font-medium-1"></i></a>
                      
                    </td>
              </tr>
              <tr>
                <td class="text-bold-500">001</td>
                <td>Colombo</td>
                <td class="text-bold-500">Galle</td>
                <td>109Km</td>
                <td>$29</td>
                <td><a href="#"><i
                      class="badge-circle badge-circle-light-secondary bx bx-envelope font-medium-1"></i></a>
                      
                    </td>
              </tr> 
            </tbody>
          </table>
        </div>
                 </div>
              </div>
              <div class="tab-pane" id="service-center" aria-labelledby="service-tab-center" role="tabpanel">
                 <div class="row">
                  <div class="col-sm-6">
                  <div class="form-group">
                    <label>Price per Day(USD)</label>
                    <input type="text" class="form-control" placeholder="Enter Amount">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Price per Excess Milage</label>
                    <input type="text" class="form-control" placeholder="Enter Milage">
                  </div>
                </div>
                <div class="col-sm-6">
                <button class="btn btn-primary" type="button">submit</button>
                </div>
                 </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 
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
  <div class="collapse-sidebar d-flex justify-content-between">
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
   
  <!-- Footer Type Ends -->
  <hr>

  <!-- Card Shadow Starts-->
  <div class="card-shadow d-flex justify-content-between py-25">
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
  <div class="hide-scroll-to-top d-flex justify-content-between py-25">
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
     
    <!-- demo chat-->
    <div class="widget-chat-demo"><!-- widget chat demo footer button start -->
 
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
    <script src="app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <script src="app-assets/vendors/js/extensions/swiper.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/scripts/configs/vertical-menu-dark.min.js"></script>
    <script src="app-assets/js/core/app-menu.min.js"></script>
    <script src="app-assets/js/core/app.min.js"></script>
    <script src="app-assets/js/scripts/components.min.js"></script>
    <script src="app-assets/js/scripts/footer.min.js"></script>
    <script src="app-assets/js/scripts/customizer.min.js"></script>
    <script src="includes/dash.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/pages/dashboard-ecommerce.min.js"></script>
    <!-- END: Page JS-->

  </body>
  <!-- END: Body-->

<!-- Mirrored from www.pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/html/ltr/vertical-menu-template-semi-dark/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Feb 2020 00:17:02 GMT -->
</html>