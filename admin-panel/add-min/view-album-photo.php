<!DOCTYPE html>
<?php
include '../class/include.php';
include_once(dirname(__FILE__) . '/auth.php');

$id = '';
$id = $_GET['id'];
$ALBUM = new Album($id);
?>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <title>Create Album Photo - Admin Panel</title>
        <!-- Favicon-->
        <link rel="icon" href="assets/images/loading.png" type="image/x-icon">
        <!-- Plugins Core Css -->
        <link href="assets/css/app.min.css" rel="stylesheet">
        <!-- Custom Css -->
        <link href="assets/css/style.css" rel="stylesheet">
        <!-- You can choose a theme from css/styles instead of get all themes -->

        <link href="assets/css/style.css" rel="stylesheet">
        <!-- You can choose a theme from css/styles instead of get all themes -->
        <link href="assets/css/styles/all-themes.css" rel="stylesheet" />
        <link href="plugin/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
        <link href="plugin/node-waves/waves.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/js/bundles/lightgallery/dist/css/lightgallery.css" rel="stylesheet">
    </head>

    <body>
        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="m-t-30">
                    <img class="loading-img-spin" src="assets/images/loading.png"  >
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
                <div class="row">
                    <div class="col-xl-6 col-lg-5 col-md-4 col-sm-12">
                        <ul class="breadcrumb breadcrumb-style">
                            <li class="breadcrumb-item 	bcrumb-1">
                                <a href="index.php">
                                    <i class="material-icons">home</i>
                                    Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item active">Create Album Photo</li>
                        </ul>
                    </div>
                </div>


                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    <strong>Album</strong> <?php echo $ALBUM->caption; ?></h2> 
                            </div>
                            <div class="body">
                                <form class="form-horizontal" method="POST" enctype="multipart/form-data"   id="form-data" autocomplete="off"  >
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="caption">Caption</label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="caption" class="form-control" name="caption" placeholder="Enter Caption">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="image_name">Image</label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
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
                                    </div> 
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5">
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <input type="hidden" name="id" value="<?php echo $id ?>"/>
                                            <button type="submit" class="btn btn-primary m-t-15 waves-effect" id="create"  >create</button>  
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="content" style="margin-top: 1px;">
            <div class="container-fluid"> 
                <div class="row">         
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    <strong>Album Photo </strong>
                                </h2> 
                            </div> 

                            <div class="body">
                                <div  class="list-unstyled row clearfix">
                                    <?php
                                    $ALBUM_PHOTO = new AlbumPhoto(NULL);
                                    foreach ($ALBUM_PHOTO->getAlbumPhotosById($id) as $album_photo) {
                                        ?>
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 " id="div<?php echo $album_photo['id'] ?>">
                                            <div class="aniimated-thumbnials">
                                                <a href="../upload/album/gallery/<?php echo $album_photo['image_name'] ?>" data-sub-html="Demo Description">
                                                    <img class="img-responsive img-thumbnail" src="../upload/album/gallery/thumb/<?php echo $album_photo['image_name'] ?>" alt="">
                                                </a>
                                            </div>

                                            <div class="margin-top1">
                                                <a href="edit-album-photo.php?id=<?php echo $album_photo['id'] ?>&album=<?php echo $id ?>" class="btn btn-tbl-edit m-right" title="Edit"><i class="material-icons">create</i>  </a> | 
                                                <a href="arrange-album-photo.php?id=<?php echo $id ?>" class="btn btn-tbl-edit m-right btn-warning"><i class="material-icons" title="Arrange"> swap_horiz</i> </a> |   
                                                <a href="#" class="btn btn-tbl-delete delete-album-photo" album-photo-id="<?php echo $album_photo['id'] ?>"><i class="material-icons" title="Delete">delete_forever</i></a> 
                                            </div>
                                        </div> 
                                    <?php } ?>
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
        <script src="plugin/node-waves/waves.min.js" type="text/javascript"></script>
        <script src="assets/js/bundles/lightgallery/dist/js/lightgallery-all.js"></script>
        <!-- Custom Js -->
        <script src="assets/js/pages/medias/image-gallery.js"></script>
        <script src="js/main-js/album-photo/album-photo.js" type="text/javascript"></script>
        <script src="delete/js/album-photo.js" type="text/javascript"></script>
    </body>

</html>