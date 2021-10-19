<!DOCTYPE html>
<?php
include '../class/include.php';
include_once(dirname(__FILE__) . '/auth.php');

$id = '';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$ALBUM_PHOTO = new AlbumPhoto($id);
?>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <title>Edit Album Photo - Admin Panel</title>
        <!-- Favicon-->
        <link rel="icon" href="assets/images/loading.png" type="image/x-icon">
        <!-- Plugins Core Css -->
        <link href="assets/css/app.min.css" rel="stylesheet">
        <!-- Custom Css -->
        <link href="assets/css/style.css" rel="stylesheet">

        <!-- thinymc text editoe -->        
        <link href="assets/css/styles/all-themes.css" rel="stylesheet" />
        <link href="plugin/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>


    </head>

    <body>
        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="m-t-30">
                    <img class="loading-img-spin" src="assets/images/loading.png" width="20" height="20" >
                </div>
                <p>Please wait...</p>
            </div>
        </div>

        <!-- #END# Page Loader -->
        <!-- Overlay For Sidebars -->
        <div class="overlay"></div>
        <!-- #END# Overlay For Sidebars -->

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
                <div >
                    <div class="row">
                        <div class="col-xl-6 col-lg-5 col-md-4 col-sm-12">
                            <ul class="breadcrumb breadcrumb-style">
                                <li class="breadcrumb-item bcrumb-1">
                                    <a href="index.php">
                                        <i class="material-icons">home</i>
                                        Dashboard
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">Edit Album Photo</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    <strong>Edit</strong> <?php echo $ALBUM_PHOTO->caption ?></h2>
                                <ul class="header-dropdown m-r--5">
                                    <li class="dropdown">
                                        <a href="create-album-photo.php?id=1"    role="button" aria-haspopup="true" aria-expanded="false">
                                            <i class="material-icons">
                                                list
                                            </i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <form class="form-horizontal" method="POST" enctype="multipart/form-data" id="form-data"  >
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="caption">Caption</label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="caption" class="form-control" name="caption" value="<?php echo $ALBUM_PHOTO->caption ?>">
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
                                                    <input type="file" name="image_name"   value="<?php echo $ALBUM_PHOTO->image_name ?>" >
                                                </div>
                                                <div class="file-path-wrapper">
                                                    <input class="file-path validate" id="image_name" name="image_name"   value="<?php echo $ALBUM_PHOTO->image_name ?>">
                                                </div>
                                                <img src="../upload/photo-album/gallery/thumb/<?php echo $ALBUM_PHOTO->image_name ?>" class="img-thumbnail"/> 
                                            </div>
                                        </div>
                                    </div>
                             


                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5">
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <input type="checkbox" id="remember_me_4" class="filled-in">
                                            <input type="hidden" id="id" value="<?php echo $id ?>" name="id"> 
                                            <input type="hidden"   name="update"> 
                                            <input type="hidden"  value="<?php echo $ALBUM_PHOTO->image_name; ?>" name="oldImageName"/>
                                            <button type="button" class="btn btn-primary m-t-15 waves-effect" id="update" name="update">UPDATE</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="assets/js/app.min.js"></script>
        <script src="assets/js/admin.js"></script>      
        <script src="assets/js/demo.js"></script> 
        <script src="plugin/sweetalert/sweetalert.min.js" type="text/javascript"></script>
        <script src="plugin/bootstrap-notify/bootstrap-notify.min.js" type="text/javascript"></script>

        <script src="plugin/node-waves/waves.min.js" type="text/javascript"></script>
        <script src="js/main-js/album-photo/album-photo.js" type="text/javascript"></script>
        <script src="js/tinymce/js/tinymce/tinymce.min.js" type="text/javascript"></script> 
        <script>
            tinymce.init({
                selector: '#description'
            });
        </script>
        


    </body>

</html>