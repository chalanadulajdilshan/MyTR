<!DOCTYPE html>
<?php
include_once(dirname(__FILE__) . '/../class/include.php');
include_once(dirname(__FILE__) . '/auth.php');

$id = '';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$USER = new User(1);
?> 
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <title>Profile - Admin Panel</title>
        <!-- Favicon-->
        <link rel="icon" href="assets/images/loading.png" type="image/x-icon">
        <!-- Plugins Core Css -->
        <link href="assets/css/app.min.css" rel="stylesheet">
        <!-- Custom Css -->
        <link href="assets/css/style.css" rel="stylesheet" />
        <!-- You can choose a theme from css/styles instead of get all themes -->
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
                <div class="block-header">
                    <div class="row">
                        <div class="col-xl-6 col-lg-5 col-md-4 col-sm-12">
                            <ul class="breadcrumb breadcrumb-style">
                                <li class="breadcrumb-item 	bcrumb-1">
                                    <a href="index.php">
                                        <i class="material-icons">home</i> Home</a>
                                </li>
                                <li class="breadcrumb-item active">Profile Details</li>
                            </ul>
                        </div>

                    </div>
                </div>

                <!-- Your content goes here  -->
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="m-b-20">
                                <div class="contact-grid">
                                    <div class="profile-header bg-dark">
                                        <div class="user-name"><?php echo $USER->name ?></div>
                                        <div class="name-center">Administrator</div>
                                    </div>
                                    <img src="../upload/user/<?php echo $USER->image_name ?>" class="user-img" alt="">
                                    <div class="name-center"><h5>User Name: <?php echo $USER->username ?> </h5></div>

                                    <div class="row">
                                        <div class="col-4">
                                            <h5>564</h5>
                                            <small>Following</small>
                                        </div>
                                        <div class="col-4">
                                            <h5>18k</h5>
                                            <small>Followers</small>
                                        </div>
                                        <div class="col-4">
                                            <h5>565</h5>
                                            <small>Post</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="card">
                            <div class="profile-tab-box">
                                <div class="p-l-20">
                                    <ul class="nav ">
                                        <li class="nav-item tab-all">
                                            <a class="nav-link active show" href="#project" data-toggle="tab">About Me</a>
                                        </li>
                                        <li class="nav-item tab-all p-l-20">
                                            <a class="nav-link" href="#user_settings" data-toggle="tab">Settings</a>
                                        </li>
                                        <li class="nav-item tab-all p-l-20">
                                            <a class="nav-link" href="#change_password" data-toggle="tab">Change Password</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="project" aria-expanded="true">
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="card project_widget">
                                            <div class="header">
                                                <h2>Admini Details : </h2>
                                            </div>
                                            <div class="body">
                                                <div class="row">
                                                    <div class="col-md-2 col-6 b-r"> 
                                                        <strong>User Name</strong>
                                                        <br>
                                                        <p class="text-muted"><?php echo $USER->username ?></p>
                                                    </div>
                                                    <div class="col-md-3 col-6">
                                                        <strong>Name</strong>
                                                        <br>
                                                        <p class="text-muted"><?php echo $USER->name ?></p>
                                                    </div>
                                                    <div class="col-md-4  col-6 b-r">
                                                        <strong>Email</strong>
                                                        <br>
                                                        <p class="text-muted"><?php echo $USER->email ?></p>
                                                    </div>
                                                    <div class="col-md-3 col-6 b-r">
                                                        <strong>Last Login</strong>
                                                        <br>
                                                        <p class="text-muted"><?php echo $USER->lastLogin ?></p>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="user_settings" aria-expanded="false">
                                <form method="POST" id="change-details" >
                                    <div class="card">
                                        <div class="header">
                                            <h2>
                                                <strong>Admin</strong> Details Change</h2>
                                        </div>
                                        <div class="body">
                                            <div class="form-group row">
                                                <div class="col-md-2 lable-paddds">
                                                    <label class="lable-color">Name :</label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $USER->name ?>" >
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-2 " id="lable-paddd">
                                                    <label class="lable-color">User Name :</label>                                                </div>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="username" name="username" value="<?php echo $USER->username ?>" >
                                                </div>
                                            </div>
                                            <div class="form-group row ">

                                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                    <label for="image_name "  class="lable-color">Image :</label>
                                                </div>
                                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                    <div class="file-field input-field">
                                                        <div class="btn">
                                                            <span>Brows</span>                                                  
                                                            <input type="file" name="image_name"   value="<?php echo $USER->image_name ?>" >
                                                        </div>
                                                        <div class="file-path-wrapper">
                                                            <input class="file-path validate" id="image_name" name="image_name"   value=" <?php echo $USER->image_name ?> ">
                                                        </div>
                                                        <img src="../upload/user/<?php echo $USER->image_name ?>" class="img-thumbnail " width="112px" height="112px"/> 
                                                    </div>
                                                </div>

                                            </div> 
                                            <div class="form-group row ">
                                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                </div>
                                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">

                                                    <input type="hidden" id="id" value="<?php echo $USER->id ?>" name="id">
                                                    <input type="hidden"  value="<?php echo $USER->image_name; ?>" name="oldImageName"/> 
                                                    <button type="submit" class="btn btn-info btn-round" id="update">Save Changes</button>
                                                </div>

                                            </div>


                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="change_password" aria-expanded="false">
                                <form method="POST" id="change-password_data">
                                    <div class="card">
                                        <div class="header">
                                            <h2>
                                                <strong>Security Settings</strong> Change Password </h2>
                                        </div>
                                        <div class="body">
                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder="Old Password" id="oldPass" name="oldPass">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder="New Password" id="newPass" name="newPass">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder="Confirm New Password" id="confPass" name="confPass">
                                            </div>

                                            <input type="hidden"   id="id" name="id" value="<?php echo $USER->id ?>">
                                            <button class="btn btn-info btn-round" type="submit" id="change">Changes</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <script src="assets/js/app.min.js"></script>
        <!-- Custom Js -->
        <script src="assets/js/admin.js"></script>
        <script src="assets/js/demo.js"></script>
        <script src="plugin/sweetalert/sweetalert.min.js" type="text/javascript"></script>
        <script src="js/main-js/user/edit-user.js" type="text/javascript"></script>
        <script src="js/main-js/password/change-password.js" type="text/javascript"></script>
    </body>

</html>