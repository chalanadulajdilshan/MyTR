<!DOCTYPE html>
<?php
include '../class/include.php';
include './auth.php';
$id = '';
$id = $_GET['id'];
$ROOM_TYPE = new RoomType(NULL);
$AMENITIES_TYPE = new AmenitiesType(NULL);
$AMENITIES = new Amenities(NULL);
?>
<html class="loading" lang="en" data-textdirection="ltr">
    <!-- BEGIN: Head-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="author" content="Mytravelpartner.lk">
        <title>Create Room - MyTravelPartner.LK</title>
        <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
        <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/logo-favicon.png">

        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
        <!-- END: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css">
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
        <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.min.css"> 
        <link rel="stylesheet" type="text/css" href="assets/css/style.css"> 

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
                                <h5 class="content-header-title float-left pr-1 mb-0">Accommodation</h5>
                                <div class="breadcrumb-wrapper col-12">
                                    <ol class="breadcrumb p-0 mb-0">
                                        <li class="breadcrumb-item"><a href="index.php"><i class="bx bx-home-alt"></i></a>
                                        </li>

                                        <li class="breadcrumb-item active">Create Rooms
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-body"> 

                    <!-- Form wizard with icon tabs section start -->
                    <section id="info-tabs-">
                        <div class="row">
                            <div class="col-12">

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
                                            <form action="#" class="wizard-horizontal form repeater-default" id="form-data">
                                                <!-- Step 1 --> 

                                                <fieldset>
                                                    <div class="br">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <h5>Fill Your Room Details - <small class="text-success">Start by telling us your Room type,layout and Price.

                                                                    </small>
                                                                </h5>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label>Please select Room type? </label>
                                                                    <fieldset class="form-group">
                                                                        <select class="form-control" id="room_type" name="room_type">
                                                                            <option selected="" value=""> Select the room type </option>
                                                                            <?php foreach ($ROOM_TYPE->all() as $aroom_type) { ?>
                                                                                <option value="<?php echo $aroom_type['id'] ?>"><?php echo $aroom_type['title'] ?></option>
                                                                            <?php } ?>
                                                                        </select>
                                                                    </fieldset> 
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-5">
                                                                <div class="form-group">
                                                                    <label>Room name</label>
                                                                    <input type="text" class="form-control" placeholder="Enter room name" id="title" name="title">
                                                                </div>
                                                            </div>                                       
                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <label>   Number of rooms <span class="text-danger">(of this type)</span> </label>
                                                                    <div class="d-inline-block mb-1 mr-1">
                                                                        <input type="number" class="touchspin"  name="num_of_rooms" id="num_of_rooms" placeholder="0">
                                                                    </div>
                                                                </div>
                                                            </div>                                       
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label>Smoking policy?</label>
                                                                    <fieldset class="form-group">
                                                                        <select class="form-control" id="smoking_policy" name="smoking_policy">
                                                                            <option value="0">Non Smoking</option>
                                                                            <option value="1">Smoking</option>
                                                                            <option value="2">I have both Smoking and non-smoking options for this room type</option>
                                                                        </select>
                                                                    </fieldset> 
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <div class="form-group">
                                                                    <label>Max Persons</label>
                                                                    <div class="d-inline-block mb-1 mr-1">
                                                                        <input type="number" class="touchspin" id="max_person" name="max" placeholder="0">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <label>Base price  <span class="text-danger">(per night)</span></label>
                                                                    <fieldset class="form-group">
                                                                        <input type="text" class="touchspin"   data-bts-prefix="US$" name="price" id="price" placeholder="0">
                                                                    </fieldset> 
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <label>Discount <span class="text-danger">( Room Discount % )</span> </label>
                                                                    <div class="d-inline-block mb-1 mr-1">
                                                                        <input type="number" class="touchspin"  data-bts-prefix="%" value="0" min="0"name="discount" >
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label>  Bed Name <span class="text-danger">(bed name for this room)</span> </label>                                                                 
                                                                    <input type="text" class="form-control" placeholder="Enter bed name" id="bed_name" name="bed_name">                                                                   
                                                                </div>
                                                            </div> 

                                                            <div class="col-sm-2">
                                                                <div class="form-group">
                                                                    <label>max of one bed</label>
                                                                    <div class="d-inline-block mb-1 mr-1">
                                                                        <input type="number" class="touchspin" id="num_bed" name="num_bed" placeholder="0">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label>Extra Beds?</label>
                                                                    <fieldset class="form-group">
                                                                        <select class="form-control" id="extra_bed" name="extra_bed">
                                                                            <option value="0">Non Extra Beds</option>
                                                                            <option value="1">Available Extra Beds</option>
                                                                            <option value="2">if you can manage with us.7</option>
                                                                        </select>
                                                                    </fieldset> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>


                                                    <!--                                                    <div class="br">
                                                                                                            <div class="row">
                                                                                                                <div class="col-12">
                                                                                                                    <h5>Bed Options - <small class="text-success">Fill your Room Bed details</small> </h5>
                                                                                                                </div>
                                                                                                                <div class="col-12">
                                                                                                                    <div class="card" style="margin-bottom: 0px;"> 
                                                                                                                        <div class="card-content">                                                                                  
                                                                                                                            <div data-repeater-list="group-a"  >
                                                                                                                                <div >
                                                                                                                                    <div class="row justify-content-between">
                                                                                                                                        <div class="col-md-4 col-sm-12 form-group">
                                                                                                                                            <label for="Email">What kind of beds room?  </label>
                                                                                                                                            <input type="text" class="form-control" placeholder="What kind of beds room" name="bed_name[]">
                                                                                                                                        </div>
                                                                                                                                        <div class="col-md-2 col-sm-12 form-group">
                                                                                                                                            <label for="password">Number Of Beds</label>
                                                                                                                                            <input type="number"  class="form-control" value="1" name="num_bed[]" min="1">
                                                                                                                                        </div>
                                                                                                                                        <div class="col-md-2 col-sm-12 form-group">
                                                                                                                                            <label for="gender">No of guests can stay </label>
                                                                                                                                            <input type="number" class="form-control"  value="1" name="guest_stay[]" min="1">
                                                                                                                                        </div>
                                                                                                                                        <div class="col-md-2 col-sm-12 form-group" style="margin-top: 30px;">
                                                                                                                                            <center>
                                                                                                                                                <fieldset>
                                                                                                                                                    <div class="checkbox checkbox-primary">
                                                                                                                                                        <input type="checkbox" id="colorCheckboxfe1"   name="extra_bed[]" value="1">
                                                                                                                                                        <label for="colorCheckboxfe1">Extra Beds Option</label>
                                                                                                                                                    </div>
                                                                                                                                                </fieldset>
                                                                                                                                            </center> 
                                                                                                                                        </div>
                                                    
                                                                                                                                        <div class="col-md-2 col-sm-12 form-group d-flex align-items-center pt-2">
                                                                                                                                            <button class="btn btn-danger text-nowrap px-1" data-repeater-delete type="button" disabled=""> <i
                                                                                                                                                    class="bx bx-x"></i>
                                                                                                                                                Delete
                                                                                                                                            </button>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <hr>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div  id="add-room-append" >
                                                    
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="form-group">
                                                                                                                            <div class="col p-0">
                                                                                                                                <button class="btn btn-primary"  type="button" id="add-room" data-id="1" ><i class="bx bx-plus"></i>
                                                                                                                                    Add
                                                                                                                                </button>
                                                                                                                            </div>
                                                                                                                        </div> 
                                                                                                                    </div>
                                                                                                                </div> 
                                                                                                            </div>
                                                                                                        </div>
                                                    
                                                                                                        <hr> -->

                                                    <div class="br">
                                                        <div class="row">
                                                            <div class="col-12 mb-1">
                                                                <h5>Amenities  - <small class="text-success">Tell us about your amenities</small> </h5>
                                                            </div>
                                                            <?php
                                                            foreach ($AMENITIES->getAmenitiesById(1) as $key => $amenitie) {
                                                                ?>
                                                                <div class="col-md-3 mb-1">
                                                                    <div class="checkbox checkbox-primary">

                                                                        <input type="checkbox" id="colorCheckboxm<?php echo $key ?>"   name="amenities[]" value="<?php echo $amenitie['id'] ?>" >
                                                                        <label for="colorCheckboxm<?php echo $key ?>"><?php echo $amenitie['title'] ?></label>

                                                                    </div>
                                                                </div>
                                                            <?php } ?>
                                                            <div class="col-12 mt-2">

                                                                <h5>All Amenities by Category  </h5>

                                                                <div class="collapsible collapse-icon accordion-icon-rotate">
                                                                    <?php
                                                                    foreach ($AMENITIES_TYPE->all() as $key => $amenities_type) {

                                                                        if ($amenities_type['id'] != 1) {
                                                                            ?>
                                                                            <div class="card collapse-header">
                                                                                <div id="headingCollapse5" class="card-header" data-toggle="collapse" role="button" data-target="#collapse<?php echo $key ?>" aria-expanded="false" aria-controls="collapse5">
                                                                                    <span class="collapse-title"> 
                                                                                        <span class="align-middle"><?php echo $amenities_type['title'] ?></span>
                                                                                    </span>
                                                                                </div>
                                                                                <div id="collapse<?php echo $key ?>" role="tabpanel" aria-labelledby="headingCollapse5" class="collapse">
                                                                                    <div class="card-content">
                                                                                        <div class="card-body">

                                                                                            <div class="row">
                                                                                                <?php
                                                                                                foreach ($AMENITIES->getAmenitiesById($amenities_type['id']) as $key => $amenitie) {
                                                                                                    ?>
                                                                                                    <div class="col-md-3 mb-1">
                                                                                                        <div class="checkbox checkbox-primary">
                                                                                                            <input type="checkbox" id="main<?php echo $amenitie['id'] ?>"   name="amenities[]" value="<?php echo $amenitie['id'] ?>" >
                                                                                                            <label for="main<?php echo $amenitie['id'] ?>"><?php echo $amenitie['title'] ?></label>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                <?php } ?>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <?php
                                                                        }
                                                                    }
                                                                    ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr> 

                                                    <div class="br mb-2"  >
                                                        <div class="row"> 
                                                            <div class="col-12">
                                                                <h5>Add Your Room Images <span class="text-danger">(Please add more than 10 Images)</span></h5>
                                                            </div>
                                                        </div>
                                                        <div class="row"> 
                                                            <div class="col-sm-4">
                                                                <div class="">
                                                                    <label>Your Room Images</label>
                                                                    <div class="custom-file">
                                                                        <input type="file" class="custom-file-input" id="add-room-img" name="image_name">
                                                                        <label class="custom-file-label" for="add-room-img">Add Your Room images</label>
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                        </div>
                                                        <div class="row" id="image-list">

                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-12"> 
                                                            <div class="br">
                                                                <h5> Room Description  </h5>

                                                                <textarea id="description" name="description"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-warning mb-1 mt-2" type="button" id="create" style="float: right;color: white">
                                                        <span class=" spinner-border-sm" role="status" aria-hidden="true"></span>
                                                        Add Room
                                                    </button>
                                                    <input type="hidden" name="action" value="upload-add-image">
                                                    <input type="hidden" name="create"  >
                                                    <input type="hidden" name="id"  value="<?php echo $id ?>" >
                                                </fieldset> 
                                            </form> 
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


        <!-- BEGIN: Footer-->
        <?php include './footer.php'; ?>
        <!-- END: Footer-->
        <script src="../js/jquery-2.2.4.min.js" type="text/javascript"></script> 

        <script src="app-assets/vendors/js/vendors.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>

        <!-- BEGIN: Theme JS-->
        <script src="app-assets/js/scripts/configs/vertical-menu-dark.min.js"></script>
        <script src="app-assets/js/core/app-menu.min.js"></script>
        <script src="app-assets/js/core/app.min.js"></script>
        <script src="app-assets/js/scripts/components.min.js"></script>
        <script src="app-assets/js/scripts/footer.min.js"></script>
        <script src="app-assets/js/scripts/customizer.min.js"></script> 
        <script src="app-assets/js/scripts/forms/form-repeater.min.js"></script>

        <script src="app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js"></script>
        <script src="app-assets/js/scripts/forms/number-input.min.js"></script>
        <script src="../admin-panel/js/tinymce/js/tinymce/tinymce.min.js" type="text/javascript"></script>  
        <script src="app-assets/vendors/js/forms/repeater/jquery.repeater.min.js"></script>
        <script src="plugin/sweetalert/sweetalert.min.js" type="text/javascript"></script>
        <script src="js/jquery.preloader.min.js" type="text/javascript"></script>

        <!-- END: Page Vendor JS-->
        <script src="js/ajax/room-photo.js" type="text/javascript"></script>
        <script src="js/ajax/room.js" type="text/javascript"></script>


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

</html>