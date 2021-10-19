<!DOCTYPE html>
<?php
include '../class/include.php';
include './auth.php';

$id = '';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$DISTRICTS = new District($id);
?>
<html class="loading" lang="en" data-textdirection="ltr">
    <!-- BEGIN: Head-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="author" content="PIXINVENT">
        <title>Create City - MyTravelPartner.lk</title>
        <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
        <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/logo-favicon.png"> 
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

        <!-- BEGIN: Vendor CSS-->
        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/select/select2.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/datatables.min.css">
        <!-- END: Vendor CSS-->

        <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/colors.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/components.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.min.css">
        <link href="assets/css/jm.spinner.css" rel="stylesheet" type="text/css"/>
        <!-- END: Theme CSS-->

        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/wizard.min.css">
        <link href="plugin/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
        <!-- END: Theme CSS-->

        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.min.css"> 
        <link rel="stylesheet" type="text/css" href="assets/css/style.css"> 
        <link href="assets/css/preloader.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    </head>
    <!-- END: Head-->

    <!-- BEGIN: Body-->
    <body class="someBlock vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">

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

                                        <li class="breadcrumb-item active">Create Cities By - <span class="text-danger">" <?php echo $DISTRICTS->name ?> " </span>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-body">  
                    <section id="info-tabs-">
                        <div class="row">
                            <div class="col-12">   
                                <div class="card icon-tab"> 
                                    <div class="card-content mt-2">
                                        <div class="card-body">
                                            <form action="#" class="wizard-horizontal form repeater-default" id="form-data">
                                                <fieldset>
                                                    <div class="br">
                                                        <div class="row">

                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Title</label>
                                                                    <input type="text" class="form-control" placeholder="Enter Title" id="title" name="title"   >
                                                                </div>
                                                            </div>  
                                                        </div> 
                                                    </div>  
                                                    <hr>

                                                    <button class="btn btn-warning mb-1" type="button" id="create"   style="float: right;color: white">
                                                        <span class=" spinner-border-sm" role="status" aria-hidden="true"></span>
                                                        Create
                                                    </button>
                                                    <input type="hidden" name="id" value="<?php echo $id ?>">
                                                    <input type="hidden" name="create"  >
                                                </fieldset> 
                                            </form> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="content-body"> 
                        <section id="basic-datatable">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-body card-dashboard">
                                                <div class="table-responsive">
                                                    <table class="table zero-configuration">
                                                        <thead>
                                                            <tr>
                                                                <th>#id</th>
                                                                <th>Name</th> 
                                                                <th>Action</th> 
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            $CITY = new City(NULL);
                                                            foreach ($CITY->GetCitiesByDistrict($id) as $key => $city) {
                                                                $key++;
                                                                ?>
                                                                <tr id="div<?php echo $city['id'] ?>">
                                                                    <td><?php echo $key ?></td>
                                                                    <td><?php echo $city['name'] ?></td>

                                                                    <td>
                                                                        <a href="create-cities.php?id=<?php echo $city['id'] ?>" data-toggle="tooltip" data-placement="bottom" title="Edit" ><i class=" bx bx-edit-alt edit-btn"></i></a> | 
                                                                        <a href="#" class="delete-offer-duration" data-id="<?php echo $city['id'] ?>" data-toggle="tooltip" data-placement="bottom" title="Delete" ><i class="bx bxs-trash delete-btn"></i></a> 

                                                                    </td> 
                                                                </tr>

                                                            <?php } ?>
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th>#id</th>
                                                                <th>Name</th> 
                                                                <th>Action</th> 
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section> 
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Content-->



        <div class="sidenav-overlay"></div>
        <div class="drag-target"></div>

        <!-- BEGIN: Footer-->

        <!-- END: Footer-->
        <script src="../js/jquery-2.2.4.min.js" type="text/javascript"></script> 

        <script src="app-assets/vendors/js/vendors.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
        <script src="app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script> 
        <script src="app-assets/js/scripts/configs/vertical-menu-dark.min.js"></script>
        <script src="app-assets/js/core/app-menu.min.js"></script>
        <script src="app-assets/js/core/app.min.js"></script>
        <script src="app-assets/js/scripts/components.min.js"></script>
        <script src="app-assets/js/scripts/customizer.min.js"></script>  
        <script src="app-assets/vendors/js/forms/select/select2.full.min.js"></script>
        <script src="app-assets/js/scripts/forms/select/form-select2.min.js"></script>
        <script src="app-assets/js/scripts/navs/navs.min.js"></script>
        <!-- END: Page JS-->
        <script src="app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
        <script src="app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js"></script>
        <script src="app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js"></script>
        <script src="app-assets/js/scripts/datatables/datatable.min.js"></script>
        <script src="plugin/sweetalert/sweetalert.min.js" type="text/javascript"></script>
        <!-- END: Page Vendor JS--> 
        <script src="js/jquery.preloader.min.js" type="text/javascript"></script>
        <script src="js/ajax/city.js" type="text/javascript"></script>

    </body>

</html>