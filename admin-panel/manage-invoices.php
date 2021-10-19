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
        <title>Manage Hotel Invoice - MyTravelPartner.lk</title>
        <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
        <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/datatables.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css">
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/responsive.bootstrap.min.css">
        <!-- END: Vendor CSS-->

        <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/colors.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/components.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.min.css">
        <!-- END: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/pickers/pickadate/pickadate.css">
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/pickers/daterange/daterangepicker.css">
        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/pages/app-invoice.min.css">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link href="assets/css/preloader.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <style>
            .invoice-list-wrapper .dataTables_wrapper .top .action-filters .dataTables_filter label::after {

                content: '\eb9e'!important;

            }
        </style>
    </head>
    <!-- END: Head-->

    <!-- BEGIN: Body-->
    <body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">

        <!-- BEGIN: Header-->
        <div class="header-navbar-shadow"></div>
        <?php include './header.php'; ?>
        <!-- END: Header-->


        <!-- BEGIN: Content-->
        <div class="app-content content">
            <div class="content-overlay"></div>
            <div class="content-wrapper">
                <div class="content-header row">
                    <div class="content-header-left col-12 mb-2 mt-1">
                        <div class="row breadcrumbs-top">
                            <div class="col-12">
                                <h5 class="content-header-title float-left pr-1 mb-0">Dashboard</h5>
                                <div class="breadcrumb-wrapper col-12">
                                    <ol class="breadcrumb p-0 mb-0">
                                        <li class="breadcrumb-item"><a href="index.php"><i class="bx bx-home-alt"></i></a>
                                        </li>

                                        <li class="breadcrumb-item active">Manage Active Customers
                                        </li>
                                        <li class="breadcrumb-item" >   
                                            <span class="bullet bullet-primary bullet-sm"></span> Hotels | 
                                            <span class="bullet bullet-danger bullet-sm"></span> Villas | 
                                            <span class="bullet bullet-dark bullet-sm"></span> Guest Houses |
                                            <span class="bullet bullet-success bullet-sm"></span> Apartments | 
                                            <span class="bullet bullet-warning bullet-sm"></span> Home Stays |
                                            <span class="bullet bullet-info bullet-sm"></span> Vacation Homes |
                                            <span class="bullet bullet-light bullet-sm"></span> Resorts
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 

                <div class="content-body"><!-- invoice list -->
                    <section class="invoice-list-wrapper">

                        <!-- Options and filter dropdown button-->
                        <div class="action-dropdown-btn d-none">
                            <div class="dropdown invoice-filter-action">
<!--
                                <fieldset class="has-icon-left" style="width: 95%">
                                    <input type="text" class="form-control single-daterange  monthly_date"  />
                                    <div class="form-control-position">
                                        <i class="bx bx-calendar font-medium-1"></i>
                                    </div>
                                </fieldset> -->


                            </div>
                            <div class="dropdown invoice-options">
                                <fieldset class="has-icon-left" style="width: 95%">
                                    <input type="text" class="form-control showCalRanges   date_range" />
                                    <div class="form-control-position f">
                                        <i class="bx bx-calendar font-medium-1"></i>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table invoice-data-table dt-responsive nowraps" style="width:100%">
                                <thead>
                                    <tr>
                                      
                                        <th></th>
                                        <th></th> 
                                        <th style="padding-left: 10px;">Invoice Id</th>
                                        <th>Property</th>
                                        <th>Customer</th> 
                                        <th>Amount</th>
                                        <th>Pay Status</th>
                                        <th>Inv Status</th>
                                        <th> </th>
                                    </tr>
                                </thead>
                                <tbody class="filter_data">
                                    
                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <!-- END: Content-->
 

    </div>
    <!-- demo chat-->
    <?php include './footer.php'; ?>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.min.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.min.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/responsive.bootstrap.min.js"></script>
    <script src="app-assets/vendors/js/pickers/pickadate/picker.js"></script>
    <script src="app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
    <script src="app-assets/vendors/js/pickers/pickadate/picker.time.js"></script>
    <script src="app-assets/vendors/js/pickers/pickadate/legacy.js"></script>
    <script src="app-assets/vendors/js/pickers/daterange/moment.min.js"></script>
    <script src="app-assets/vendors/js/pickers/daterange/daterangepicker.js"></script>
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
    <script src="js/ajax/featch-hotel-invoice.js" type="text/javascript"></script>
    <script src="app-assets/js/scripts/pickers/dateTime/pick-a-datetime.min.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->
</html>