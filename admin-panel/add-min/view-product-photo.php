<!DOCTYPE html>
<?php
include '../class/include.php';
include_once(dirname(__FILE__) . '/auth.php');
$id = '';
$id = $_GET['id'];
$PRODUCT = new Product($id);
?>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <title>Product Photo - <?php echo $PRODUCT->title; ?> - Admin Panel</title>
        <!-- Favicon-->
        <link rel="icon" href="assets/images/loading.png" type="image/x-icon">
        <!-- Plugins Core Css -->
        <link href="assets/css/app.min.css" rel="stylesheet">
        <!-- Custom Css -->
        <link href="assets/css/style.css" rel="stylesheet">
        <!-- You can choose a theme from css/styles instead of get all themes -->
        <link href="assets/css/styles/all-themes.css" rel="stylesheet" />
        <link href="plugin/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
        <link href="plugin/node-waves/waves.min.css" rel="stylesheet" type="text/css"/>

        <!-- thinymc text editoe -->        
        <link href="assets/css/styles/all-themes.css" rel="stylesheet" />
        <link href="plugin/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
        <link href="plugin/node-waves/waves.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">      
        <link rel="stylesheet" href="../thinymy/css/froala_editor.css">
    </head>

    <body>
        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="m-t-30">
                    <img class="loading-img-spin" src="assets/images/loading.png" width="20" height="20"  >
                </div>
                <p>Please wait...</p>
            </div>
        </div>
        <!-- #END# Page Loader -->
        <!-- Overlay For Sidebars -->
        <div class="overlay"></div>
        <!-- Top Bar -->
        <?php include './top-bar.php'; ?>
        <!-- #Top Bar -->
        <div>
            <!-- Left Sidebar -->
            <?php include './navigation-header.php'; ?>
            <!-- #END# Left Sidebar -->

            <!-- Right Sidebar -->
            <?php include './right-slider-bar.php'; ?>
            <!-- #END# Right Sidebar -->
        </div>



        <section class="content">
            <div class="container-fluid">
                <!-- Image Gallery -->
                <div class="block-header">
                    <div class="row">
                        <div class="col-xl-6 col-lg-5 col-md-4 col-sm-12">
                            <ul class="breadcrumb breadcrumb-style">
                                <li class="breadcrumb-item 	bcrumb-1">
                                    <a href="index.php">
                                        <i class="material-icons">home</i> Home</a>
                                </li>                                
                                <li class="breadcrumb-item active">Product Photo </li>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="row">                     

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    <strong>Create</strong> Product Photos - " <?php echo $PRODUCT->title; ?> " </h2>

                            </div>

                            <div class="body">
                                <form class="form-horizontal" method="POST" enctype="multipart/form-data" id="form-data" autocomplete="off">

                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="caption">Title</label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="title" class="form-control" name="title" placeholder="Enter Title">
                                                </div>
                                            </div>
                                        </div>
                                    </div> 

                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="image_name">Image</label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="file-field input-field">
                                                <div class="btn">
                                                    <span>Brows</span>
                                                    <input type="file" id="image_name" name="image_name">
                                                </div>
                                                <div class="file-path-wrapper">
                                                    <input class="file-path validate" type="text" id="image_name" name="image_name">
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5">
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <input type="checkbox" id="remember_me_4" class="filled-in">
                                            <input type="hidden"  name="create"/>
                                            <input type="hidden" value="<?php echo $id ?>" name="product"/>
                                            <button type="button" class="btn btn-primary m-t-15 waves-effect" id="create" name="create">SAVE</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">  
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    <strong>Manage</strong> Product Photo - " <?php echo $PRODUCT->title; ?> "</h2> 
                            </div>
                            <div class="body">
                                <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                                    <?php
                                    $PRODUCT_PHOTO = new ProductPhoto(NULL);
                                    if (count($PRODUCT_PHOTO) > 0) {
                                        foreach ($PRODUCT_PHOTO->getProductPhotosById($id) as $key => $product_photo) {
                                            ?>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" id="div<?php echo $product_photo['id'] ?>">                                       
                                                <img class="img-responsive thumbnail" src="../upload/product/gallery/thumb/<?php echo $product_photo['image_name'] ?>" alt="">
                                                <div class="margin-top1"> 
                                                    <a href="edit-product-photo.php?id=<?php echo $product_photo['id'] ?>" class="btn btn-tbl-edit m-right btn-primary"  title="Edit"><i class="material-icons">edit</i></a> |   
                                                    <a href="arrange-album-photo.php" class="btn btn-tbl-edit m-right btn-warning"><i class="material-icons" title="Arrange"> swap_horiz</i>  </a> | 

                                                    <a href="#" class="btn btn-tbl-delete delete-product-photo" data-id="<?php echo $product_photo['id'] ?>"  title="Delete"><i class="material-icons">delete_forever</i>  </a>
                                                </div>
                                            </div>    
                                            <?php
                                        }
                                    } else {
                                        ?>
                                        <div style="padding-left: 20px;">
                                            <p>No product  Images in database..</p>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- Plugins Js -->
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="assets/js/app.min.js"></script>
        <script src="assets/js/admin.js"></script>      
        <script src="assets/js/demo.js"></script> 
        <script src="plugin/sweetalert/sweetalert.min.js" type="text/javascript"></script>
        <script src="plugin/bootstrap-notify/bootstrap-notify.min.js" type="text/javascript"></script>  

        <!-- Create Comment-->
        <script src="js/main-js/product-photo/product-photo.js" type="text/javascript"></script>
        <script src="delete/js/product-photo.js" type="text/javascript"></script>
        <script src="js/tinymce/js/tinymce/tinymce.min.js" type="text/javascript"></script> 
        <script>
            tinymce.init({
                selector: '#description'
            });
        </script>
    </body>

</html>