<!DOCTYPE html>
<?php
include '../class/include.php';
include_once(dirname(__FILE__) . '/auth.php');
?>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <title>Create Pages - Admin Panel</title>
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
                <div >
                    <div class="row">
                        <div class="col-xl-6 col-lg-5 col-md-4 col-sm-12">
                            <ul class="breadcrumb breadcrumb-style">
                                <li class="breadcrumb-item 	bcrumb-1">
                                    <a href="index.php">
                                        <i class="material-icons">home</i>
                                        Dashboard
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">Create Pages</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    <strong>Create </strong>Pages</h2>

                            </div>
                            <div class="body">
                                <form class="form-horizontal" method="POST" enctype="multipart/form-data" id="pages-form" autocomplete="off">
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="title">Title</label>
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
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="description">Description</label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <textarea  id="edit" name="description">  </textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5">
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <input type="checkbox" id="remember_me_4" class="filled-in">
                                            <input type="hidden" name="create">
                                            <button type="button" class="btn btn-primary m-t-15 waves-effect" id="save" name="save">SAVE</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    <strong>Manage </strong>Pages</h2>

                            </div>
                            <div class="body">

                                <div class="table-responsive">
                                    <table class="table table-hover js-basic-example contact_list">
                                        <thead>
                                            <tr>
                                                <th class="center">#id</th> 
                                                <th class="center"> Title </th>
                                                <th class="center"> Description </th> 
                                                <th class="center"> Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $PAGES = new Page(NULL);
                                            foreach ($PAGES->all() as $key => $pages) {
                                                $key++;
                                                ?>
                                                <tr class="odd gradeX">
                                                    <td class="center"><?php echo $key; ?></td> 
                                                    <td class="center"><?php echo $pages['title'] ?></td>
                                                    <td class="text-justify"><?php echo substr($pages['description'], 0, 60) ?>...</td>
                                                    <td class="center">
                                                        <a href="edit-pages.php?id=<?php echo $pages['id'] ?>" class="btn btn-tbl-edit">   
                                                            <i class="material-icons">create</i>
                                                        </a> 
                                                    </td>
                                                </tr>

                                            <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th class="center">#id</th> 
                                                <th class="center"> Title </th>
                                                <th class="center"> Description </th> 
                                                <th class="center"> Action </th>
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


        <!-- Plugins Js -->
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="assets/js/app.min.js"></script>
        <script src="assets/js/admin.js"></script>      
        <script src="assets/js/demo.js"></script> 
        <script src="assets/js/table.min.js"></script>
        <script src="assets/js/pages/tables/jquery-datatable.js"></script>
        <script src="plugin/sweetalert/sweetalert.min.js" type="text/javascript"></script>
        <script src="plugin/bootstrap-notify/bootstrap-notify.min.js" type="text/javascript"></script>

        <script src="js/main-js/pages/pages.js" type="text/javascript"></script>
        <script src="plugin/node-waves/waves.min.js" type="text/javascript"></script>
        <script src="js/tinymce/js/tinymce/tinymce.min.js" type="text/javascript"></script> 
        <script>
            tinymce.init({
                selector: '#edit'
            });
        </script>

    </body>
</html>