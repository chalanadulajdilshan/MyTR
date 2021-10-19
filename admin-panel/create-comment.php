<!DOCTYPE html>
<?php
include '../class/include.php';
include './auth.php';

?>
<html class="loading" lang="en" data-textdirection="ltr">
    <!-- BEGIN: Head-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="author" content="PIXINVENT">
        <title>Create Comment - MyTravelPartner.lk</title>
        <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
        <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/logo-favicon.png"> 
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

        <!-- END: Theme CSS-->

        <!-- BEGIN: Page CSS-->
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
        <link href="assets/css/jm.spinner.css" rel="stylesheet" type="text/css"/>
        <!-- END: Theme CSS-->

        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/wizard.min.css">
        <link href="plugin/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
        <!-- END: Theme CSS-->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <!-- BEGIN: Page CSS-->   
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

                                        <li class="breadcrumb-item active">Create Comment
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-body">  
                    <section id="info-tabs-">

                        <div class="card icon-tab"> 
                            <div class="card-content mt-2">
                                <div class="card-body">
                                    <form action="#" class="wizard-horizontal form repeater-default" id="form-data">
                                        <fieldset>
                                            <div class="br">
                                                <div class="row"> 
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label>Name</label>
                                                            <input type="text" class="form-control" placeholder="Enter Name" id="title" name="name">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label>Title</label>
                                                            <input type="text" class="form-control" placeholder="Enter Title" id="title" name="title">
                                                        </div>
                                                    </div>  

                                                    <div class="col-sm-12"  > 
                                                        <label>  Image Name</label>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="image_name" name="image_name">
                                                            <label class="custom-file-label" for="main_img_tour">select image</label>
                                                        </div> 
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label>Description</label>
                                                            <textarea  id="description" name="short_description" > </textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">  
                                                        <div class="checkbox checkbox-primary mt-1">
                                                            <input type="checkbox" id="is_publish"   name="is_publish" value="1" checked="">
                                                            <label for="is_publish">Is Publish.</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-sm-6"> 
                                                        <button class="btn btn-warning mb-1" type="button" id="create" style="float: right;color: white;margin-top: 20px">
                                                            <span class=" spinner-border-sm" role="status" aria-hidden="true"></span>
                                                            Create
                                                        </button>
                                                        <input type="hidden"   name="create"/>
                                                    </div>
                                                </div>
                                            </div>  

                                        </fieldset> 
                                    </form> 
                                </div>
                            </div>
                        </div> 
                    </section>
                </div>

                <div class="content-body"> 
                    <section id="info-tabs-">

                        <div class="card icon-tab">  
                            <div class="card-content mt-2">
                                <div class="card-body">

                                    <div class="br"> 
                                        <div class="row">
                                            <?php
                                            $COMMENT = new Comments(NULL);
                                            if (count($COMMENT) > 0) {
                                                foreach ($COMMENT->all() as $key => $comment) {
                                                    ?>
                                                    <div class="col-md-3 col-sm-6" id="div<?php echo $offer['id'] ?>">
                                                        <div   style="background-color: #f2f4f4;margin-bottom: 25px;">
                                                            <div class="card" >
                                                                <div class="card-content" > 
                                                                    <img class="card-img-top img-fluid" src="../upload/comment/<?php echo $comment['image_name'] ?>" alt="mytravelpartner.lk"  >

                                                                    <div class="card-body" style="padding: 10px; background-color: #f2f4f4;" >
                                                                        <h6 class=" text-left"><?php echo $comment['name'] ?></h6>
                                                                        <a href="edit-offer.php?id=<?php echo $comment['id'] ?>" data-toggle="tooltip" data-placement="bottom" title="Edit" ><i class=" bx bx-edit-alt edit-btn"></i></a> | 
                                                                        <a href="arrange-offer.php"  data-toggle="tooltip" data-placement="bottom" title="Arrange"><i class=" bx bx-transfer succes-btn"></i></a> | 
                                                                        <a href="#" class="delete-offer" data-id="<?php echo $comment['id'] ?>" data-toggle="tooltip" data-placement="bottom" title="Delete" ><i class="bx bxs-trash delete-btn"></i></a> 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php
                                                }
                                            } else {
                                                ?>
                                                <p class="text-danger text-bold-600 text-left">No Comments images.</p>
                                            <?php } ?>
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



        <div class="sidenav-overlay"></div>
        <div class="drag-target"></div>

        <!-- BEGIN: Footer-->

        <!-- END: Footer-->
        <script src="../js/jquery-2.2.4.min.js" type="text/javascript"></script> 

        <script src="app-assets/vendors/js/vendors.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>

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
        <!-- END: Page JS-->
        <script src="plugin/sweetalert/sweetalert.min.js" type="text/javascript"></script>


        <script src="js/jquery.preloader.min.js" type="text/javascript"></script>
        <script src="js/ajax/comment.js" type="text/javascript"></script>
        <script src="delete/js/comment.js" type="text/javascript"></script>

        <script src="js/tinymce/js/tinymce/tinymce.min.js" type="text/javascript"></script> 
        <script>
            tinymce.init({
                selector: '#description'
            });
        </script>
    </body>

</html>