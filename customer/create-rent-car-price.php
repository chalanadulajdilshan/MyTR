<!DOCTYPE html>
<?php
include '../class/include.php';
include './auth.php';

$id = '';
$id = $_GET['id'];
$DEFAULTDATA = new DefaultData();
?>
<html class="loading" lang="en" data-textdirection="ltr">
    <!-- BEGIN: Head-->

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="author" content="MyTravelPartner.lk">
        <title>Create Rent a car - MyTravelPartner.lk </title>
        <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.html">
        <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/logo-favicon.png">
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/select/select2.min.css">
        <!-- END: Vendor CSS-->

        <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/colors.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/components.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.min.css">
        <link href="assets/css/preloader.css" rel="stylesheet" type="text/css"/>
        <link href="plugin/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
        <!-- END: Theme CSS-->

        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/wizard.min.css"> 

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <!-- END: Custom CSS-->
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    </head>
    <!-- END: Head-->

    <!-- BEGIN: Body-->
    <body class="someBlock vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">
        <div class="box"></div>
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
                                        <li class="breadcrumb-item active">Create Rent a car Price Lists
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-body">  
                    <?php
                    if (isset($_GET['message'])) {
                        $MESSAGE = new Message($_GET['message']);
                        ?>

                        <div class="alert alert-<?php echo $MESSAGE->status; ?> alert-dismissible mb-2" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div class="d-flex align-items-center"> 
                                <span>
                                    <?php echo $MESSAGE->description; ?>
                                </span>
                            </div>
                        </div>
                        <?php
                    }
                    ?> 
                    <div class="card icon-tab">

                        <div class="card-content mt-2">
                            <div class="card-body"> 
                                <div class="br mb-2"> 
                                    <form action="#" class="wizard-horizontal" id="form-data">

                                        <div class="row">  
                                            <div class="col-sm-4 col-md-2">
                                                <div class="form-group">
                                                    <label>Currency Type</label>
                                                    <select class="select2 form-control" id="currency_type" name="currency_type">
                                                        <?php
                                                        foreach ($DEFAULTDATA->GetCurrancyType() as $key => $curancy_type) {
                                                            ?>
                                                            <option value="<?php echo $key ?>"  ><?php echo $curancy_type ?></option>
                                                        <?php } ?>  

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-md-2">
                                                <div class="form-group">
                                                    <label>Select Type</label>
                                                    <select class="select2 form-control" id="type" name="type">

                                                        <?php
                                                        foreach ($DEFAULTDATA->getRentType() as $key => $rent_type) {
                                                            ?>
                                                            <option value="<?php echo $key ?>"  ><?php echo $rent_type ?></option>
                                                        <?php } ?>  
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-md-3" >
                                                <div class="form-group">
                                                    <label>Drivers</label>
                                                    <select class="select2 form-control" id="driver" name="driver">
                                                        <?php
                                                        foreach ($DEFAULTDATA->getResionForVehicle() as $key => $resion_vehicle) {
                                                            ?>
                                                            <option value="<?php echo $key ?>"  ><?php echo $resion_vehicle ?></option>
                                                        <?php } ?>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-4  col-md-2">
                                                <div class="form-group">
                                                    <label> Price</label>
                                                    <input type="number" class="form-control" placeholder="Enter Price "   id="price" name="price" min="1">
                                                </div>
                                            </div>
                                            <div class="col-sm-4  col-md-3">
                                                <div class="form-group">
                                                    <label> Price Per Excess Milage</label>
                                                    <input type="number" class="form-control" placeholder="Enter Price Excess Milage" min="1"    name="extra_price">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 ">
                                            </div>
                                            <div class="col-sm-6 col-md-4 ">
                                            </div>
                                            <div class="col-sm-6 col-md-4 ">
                                                <input type="hidden" name="create">
                                                <input type="hidden" name="id" value="<?php echo $id ?>">
                                                <button class="btn btn-primary pull-right " id="create" type="button" style="float: right">create</button>

                                            </div>
                                        </div> 
                                    </form>   
                                </div>   
                            </div> 
                        </div>
                    </div>  

                    <div class="card icon-tab">
                        <div class="card-content mt-2">
                            <div class="card-body"> 
                                <div class="br mb-2">   
                                    <div class="row">
                                        <div class="table-responsive">
                                            <table class="table mb-0  table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>C Type </th>
                                                        <th>Select Type</th>
                                                        <th>Drivers</th>
                                                        <th>Price</th>
                                                        <th>Ex Price</th>
                                                        <th>ACTION</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $RENT_CAR_PRICE = new RentCarPrice(NULL);
                                               
                                                    if (count($RENT_CAR_PRICE->getCarsPriceByCar($id) < 0)) {
                                                        foreach ($RENT_CAR_PRICE->getCarsPriceByCar($id) as $key => $rent_car_price) {
                                                            $key++;
                                                            ?>

                                                            <tr id="div<?php echo $rent_car_price['id'] ?>">
                                                                <td class="text-bold-500">00<?php echo $key ?></td>
                                                                <td> 
                                                                    <?php
                                                                    foreach ($DEFAULTDATA->GetCurrancyType() as $key => $curancy_type) {
                                                                        if ($key == $rent_car_price['currency_type']) {
                                                                            echo $curancy_type;
                                                                        }
                                                                    }
                                                                    ?>
                                                                </td>
                                                                <td> 
                                                                    <?php
                                                                    foreach ($DEFAULTDATA->getRentType() as $key => $rent_type) {
                                                                        if ($key == $rent_car_price['type']) {
                                                                            echo $rent_type;
                                                                        }
                                                                    }
                                                                    ?>
                                                                </td>
                                                                <td> 
                                                                    <?php
                                                                    foreach ($DEFAULTDATA->getResionForVehicle() as $key => $reson_type) {
                                                                        if ($key == $rent_car_price['driver']) {
                                                                            echo $reson_type;
                                                                        }
                                                                    }
                                                                    ?>
                                                                </td>


                                                                <td><?php echo number_format($rent_car_price['price'], 2) ?></td> 
                                                                <td><?php echo number_format($rent_car_price['extra_price'], 2) ?></td> 

                                                                <td>
                                                                    <a href="edit-rent-car-price.php?id=<?php echo $rent_car_price['id'] ?>" data-toggle="tooltip" data-placement="bottom" title="Edit" ><i class=" bx bx-edit-alt edit-btn"></i></a> | 
                                                                    <a href="#" class="delete-rent-car-price"  data-id="<?php echo $rent_car_price['id'] ?>"  data-toggle="tooltip" data-placement="bottom" title="Delete" ><i class="bx bxs-trash delete-btn"></i></a> 
                                                                </td>
                                                            </tr> 
                                                            <?php
                                                        }
                                                    } else {
                                                        ?>
                                                    <p>No Data Found ..!</p>
                                                <?php }
                                                ?>
                                                </tbody>
                                            </table>
                                        </div>  
                                    </div> 
                                </div>   
                            </div>
                        </div>
                    </div>                            
                </div>
            </div>
        </div>

        <?php include './footer.php'; ?>


        <script src="../js/jquery-2.2.4.min.js" type="text/javascript"></script> 
        <!-- BEGIN: Vendor JS-->
        <script src="app-assets/vendors/js/vendors.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>


        <!-- BEGIN Vendor JS-->   
        <script src="js/ajax/rent-car-price.js" type="text/javascript"></script>
        <script src="delete/js/rent-car-price.js" type="text/javascript"></script>

        <script src="js/jm.spinner.js" type="text/javascript"></script>
        <script src="app-assets/vendors/js/extensions/jquery.steps.min.js"></script>
        <script src="app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script> 
        <script src="app-assets/js/scripts/configs/vertical-menu-dark.min.js"></script>
        <script src="app-assets/js/core/app-menu.min.js"></script>
        <script src="app-assets/js/core/app.min.js"></script>
        <script src="app-assets/js/scripts/components.min.js"></script>
        <script src="app-assets/js/scripts/footer.min.js"></script>
        <script src="app-assets/js/scripts/customizer.min.js"></script>
        <script src="app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js"></script>
        <script src="app-assets/js/scripts/forms/number-input.min.js"></script>


        <script src="app-assets/vendors/js/forms/repeater/jquery.repeater.min.js"></script> 
        <script src="js/jquery.preloader.min.js" type="text/javascript"></script>
        <script src="app-assets/vendors/js/forms/select/select2.full.min.js"></script>
        <script src="app-assets/js/scripts/forms/select/form-select2.min.js"></script>
        <script src="app-assets/js/scripts/navs/navs.min.js"></script>
        <script src="plugin/sweetalert/sweetalert.min.js" type="text/javascript"></script>
        <script src="../admin-panel/js/tinymce/js/tinymce/tinymce.min.js" type="text/javascript"></script>

        <script>
            tinymce.init({
                selector: "#description",
                // ===========================================
                // INCLUDE THE PLUGIN
                // ===========================================

                plugins: [
                    "advlist autolink lists link image charmap print preview anchor",
                    "searchreplace visualblocks code fullscreen",
                    "insertdatetime media table contextmenu paste"
                ],
                // ===========================================
                // PUT PLUGIN'S BUTTON on the toolbar
                // ===========================================

                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
                // ===========================================
                // SET RELATIVE_URLS to FALSE (This is required for images to display properly)
                // ===========================================

                relative_urls: false

            });
        </script>
    </body>
    <!-- END: Body-->

</html>