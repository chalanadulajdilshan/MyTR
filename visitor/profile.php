<!DOCTYPE html>
<?php
include '../class/include.php';
include './auth.php';

$VISITOR = new Visitor($_SESSION['id']);
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
        <title>Account Settings - Frest - Bootstrap HTML admin template</title>
        <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
        <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/select/select2.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/pickers/pickadate/pickadate.css">
        <!-- END: Vendor CSS-->

        <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/colors.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/components.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.min.css">
        <!-- END: Theme CSS-->

        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/validation/form-validation.css">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <!-- END: Custom CSS-->
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link href="../css/sweetalert.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </head>
    <!-- END: Head-->

    <!-- BEGIN: Body-->
    <body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">

        <!-- BEGIN: Header-->
        <?php
        include 'header.php';
        ?>
        <!-- END: Main Menu-->




        <!-- BEGIN: Content-->
        <div class="app-content content">
            <div class="content-overlay"></div>
            <div class="content-wrapper">
                <div class="content-header row">
                    <div class="content-header-left col-12 mb-2 mt-1">
                        <div class="row breadcrumbs-top">
                            <div class="col-12">
                                <h5 class="content-header-title float-left pr-1 mb-0">Account Settings</h5>
                                <div class="breadcrumb-wrapper col-12">
                                    <ol class="breadcrumb p-0 mb-0">
                                        <li class="breadcrumb-item"><a href="index.html"><i class="bx bx-home-alt"></i></a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#">Pages</a>
                                        </li>
                                        <li class="breadcrumb-item active"> Account Settings
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-body"><!-- account setting page start -->
                    <section id="page-account-settings">
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <!-- left menu section -->
                                    <div class="col-md-2 mb-2 mb-md-0 pills-stacked">
                                        <ul class="nav nav-pills flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link d-flex align-items-center active" id="account-pill-general" data-toggle="pill"
                                                   href="#account-vertical-general" aria-expanded="true">
                                                    <i class="bx bx-cog"></i>
                                                    <span>General</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link d-flex align-items-center" id="account-pill-password" data-toggle="pill"
                                                   href="#account-vertical-password" aria-expanded="false" style="padding-left: 15px!important;">
                                                    <i class="bx bx-lock"></i>
                                                    <span>New Password</span>
                                                </a>
                                            </li>
<!--                                            <li class="nav-item">
                                                <a class="nav-link d-flex align-items-center" id="account-pill-info" data-toggle="pill"
                                                   href="#account-vertical-info" aria-expanded="false">
                                                    <i class="bx bx-info-circle"></i>
                                                    <span>Info</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link d-flex align-items-center" id="account-pill-social" data-toggle="pill"
                                                   href="#account-vertical-social" aria-expanded="false">
                                                    <i class="bx bxl-twitch"></i>
                                                    <span>Social links</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link d-flex align-items-center" id="account-pill-connections" data-toggle="pill"
                                                   href="#account-vertical-connections" aria-expanded="false">
                                                    <i class="bx bx-link"></i>
                                                    <span>Connections</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link d-flex align-items-center" id="account-pill-notifications" data-toggle="pill"
                                                   href="#account-vertical-notifications" aria-expanded="false">
                                                    <i class="bx bx-bell"></i>
                                                    <span>Notifications</span>
                                                </a>
                                            </li>-->
                                        </ul>
                                    </div>
                                    <!-- right content section -->
                                    <div class="col-md-10">
                                        <div class="card">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="tab-content">
                                                        <div role="tabpanel" class="tab-pane active" id="account-vertical-general"
                                                             aria-labelledby="account-pill-general" aria-expanded="true">
                                                            <form id="form-data" >
                                                                <div class="media">
                                                                    <a href="javascript: void(0);">
                                                                        <?php
                                                                        if (empty($VISITOR->image_name)) {
                                                                            ?>
                                                                            <img src="../images/member.jpg"   class="rounded mr-75 main-img" alt="profile image" width="150px" height="150px" >
                                                                        <?php } else { ?>
                                                                            <img src="../upload/visitor/profile/<?php echo $VISITOR->image_name ?>"   class="rounded mr-75 main-img" alt="profile image"  >

                                                                        <?php } ?>
                                                                    </a>
                                                                    <div class="media-body mt-25">
                                                                        <div
                                                                            class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">
                                                                            <label for="select-files" class="btn btn-sm btn-light-primary ml-50 mb-50 mb-sm-0 main_img">
                                                                                <span>Upload new photo</span>
                                                                                <input   id="select-files" type="file"  class="pro_img" hidden="" name="pro-picture">
                                                                            </label>

                                                                        </div>
                                                                        <p class="text-muted ml-1 mt-50"><small>Allowed JPG, GIF or PNG. Max    size of  800kB</small></p>
                                                                    </div>
                                                                    <input type="hidden" name="action" value="upload-add-image">
                                                                    <input type="hidden" name="id" value="<?php echo $VISITOR->id ?>">
                                                                </div>
                                                            </form>
                                                            <hr>
                                                            <form   id="form-data-info" >
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <div class="controls">
                                                                                <label>Full Name</label>
                                                                                <input type="text" class="form-control"  name="full_name"  value="<?php echo $VISITOR->full_name ?>"  >
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <div class="controls">
                                                                                <label>E-mail</label>
                                                                                <input type="email" class="form-control" name="email"value="<?php echo $VISITOR->email ?>">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--                                                                    <div class="col-12">
                                                                                                                                            <div class="alert bg-rgba-warning alert-dismissible mb-2"
                                                                                                                                                 role="alert">
                                                                                                                                                <button type="button" class="close" data-dismiss="alert"
                                                                                                                                                        aria-label="Close">
                                                                                                                                                    <span aria-hidden="true">×</span>
                                                                                                                                                </button>
                                                                                                                                                <p class="mb-0">
                                                                                                                                                    Your email is not confirmed. Please check your inbox.
                                                                                                                                                </p>
                                                                                                                                                <a href="javascript: void(0);">Resend confirmation</a>
                                                                                                                                            </div>
                                                                                                                                        </div>-->
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <label>Mobile Number</label>
                                                                            <input type="text" class="form-control" name="phone_number" value="<?php echo $VISITOR->phone_number ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <label>Your address</label>
                                                                            <input type="text" class="form-control" name="address" value="<?php echo $VISITOR->address ?>" name="address" placeholder="Enter Your address">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <label>Your City</label>
                                                                            <input type="text" class="form-control"  value="<?php echo $VISITOR->city ?>"  name="city" placeholder="Enter your city">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">

                                                                        <button type="submit" class="btn btn-primary glow mr-sm-1 mb-1"  id="update-info">Save
                                                                            changes</button> 
                                                                        <input type="hidden" name="action" value="update-info">
                                                                        <input type="hidden" name="id" value="<?php echo $VISITOR->id ?>">
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="tab-pane fade " id="account-vertical-password" role="tabpanel"
                                                             aria-labelledby="account-pill-password" aria-expanded="false">
                                                            <form id="form-data-pw">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <div class="controls">
                                                                                <label>Old Password</label>
                                                                                <input type="password" class="form-control"     placeholder="Old Password" id="old_password" name="old_password" >
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <div class="controls">
                                                                                <label>New Password</label>
                                                                                <input type="password"  class="form-control" placeholder="New Password"  minlength="6" id="new_password" name="new_password" >
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <div class="controls">
                                                                                <label>Retype new Password</label>
                                                                                <input type="password" id="con-password" name="con-password"    class="form-control"     placeholder="New Password"  minlength="6"> 
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                                        <button type="submit" class="btn btn-primary glow mr-sm-1 mb-1" id="change_password">Save
                                                                            changes</button>
                                                                        <button type="reset" class="btn btn-light mb-1">Cancel</button>
                                                                    </div>
                                                                </div>
                                                                <input type="hidden" name="action" value="change_pw">
                                                                <input type="hidden" name="id" value="<?php echo $VISITOR->id ?>">
                                                            </form>
                                                        </div>
<!--                                                        <div class="tab-pane fade" id="account-vertical-info" role="tabpanel"
                                                             aria-labelledby="account-pill-info" aria-expanded="false">
                                                            <form novalidate>
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <label>Bio</label>
                                                                            <textarea class="form-control" id="accountTextarea" rows="3"
                                                                                      placeholder="Your Bio data here..."></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <div class="controls">
                                                                                <label>Birth date</label>
                                                                                <input type="text" class="form-control birthdate-picker"
                                                                                       required placeholder="Birth date"
                                                                                       data-validation-required-message="This birthdate field is required">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <label>Country</label>
                                                                            <select class="form-control" id="accountSelect">
                                                                                <option>USA</option>
                                                                                <option>India</option>
                                                                                <option>Canada</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <label>Languages</label>
                                                                            <select class="form-control" id="languageselect2"
                                                                                    multiple="multiple">
                                                                                <option value="English" selected>English</option>
                                                                                <option value="Spanish">Spanish</option>
                                                                                <option value="French">French</option>
                                                                                <option value="Russian">Russian</option>
                                                                                <option value="German">German</option>
                                                                                <option value="Arabic" selected>Arabic</option>
                                                                                <option value="Sanskrit">Sanskrit</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <div class="controls">
                                                                                <label>Phone</label>
                                                                                <input type="text" class="form-control" required
                                                                                       placeholder="Phone number" value="(+656) 254 2568"
                                                                                       data-validation-required-message="This phone number field is required">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <label>Website</label>
                                                                            <input type="text" class="form-control"
                                                                                   placeholder="Website address">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <label>Favourite Music</label>
                                                                            <select class="form-control" id="musicselect2"
                                                                                    multiple="multiple">
                                                                                <option value="Rock">Rock</option>
                                                                                <option value="Jazz" selected>Jazz</option>
                                                                                <option value="Disco">Disco</option>
                                                                                <option value="Pop">Pop</option>
                                                                                <option value="Techno">Techno</option>
                                                                                <option value="Folk" selected>Folk</option>
                                                                                <option value="Hip hop">Hip hop</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <label>Favourite movies</label>
                                                                            <select class="form-control" id="moviesselect2"
                                                                                    multiple="multiple">
                                                                                <option value="The Dark Knight" selected>The Dark Knight
                                                                                </option>
                                                                                <option value="Harry Potter" selected>Harry Potter</option>
                                                                                <option value="Airplane!">Airplane!</option>
                                                                                <option value="Perl Harbour">Perl Harbour</option>
                                                                                <option value="Spider Man">Spider Man</option>
                                                                                <option value="Iron Man" selected>Iron Man</option>
                                                                                <option value="Avatar">Avatar</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                                        <button type="submit" class="btn btn-primary glow mr-sm-1 mb-1">Save
                                                                            changes</button>
                                                                        <button type="reset" class="btn btn-light mb-1">Cancel</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="tab-pane fade " id="account-vertical-social" role="tabpanel"
                                                             aria-labelledby="account-pill-social" aria-expanded="false">
                                                            <form>
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <label>Twitter</label>
                                                                            <input type="text" class="form-control" placeholder="Add link"
                                                                                   value="https://www.twitter.com">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <label>Facebook</label>
                                                                            <input type="text" class="form-control" placeholder="Add link">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <label>Google+</label>
                                                                            <input type="text" class="form-control" placeholder="Add link">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <label>LinkedIn</label>
                                                                            <input type="text" class="form-control" placeholder="Add link"
                                                                                   value="https://www.linkedin.com">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <label>Instagram</label>
                                                                            <input type="text" class="form-control" placeholder="Add link">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <label>Quora</label>
                                                                            <input type="text" class="form-control" placeholder="Add link">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                                        <button type="submit" class="btn btn-primary glow mr-sm-1 mb-1">Save
                                                                            changes</button>
                                                                        <button type="reset" class="btn btn-light mb-1">Cancel</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="tab-pane fade" id="account-vertical-connections" role="tabpanel"
                                                             aria-labelledby="account-pill-connections" aria-expanded="false">
                                                            <div class="row">
                                                                <div class="col-12 my-2">
                                                                    <a href="javascript: void(0);" class="btn btn-info">Connect to
                                                                        <strong>Twitter</strong></a>
                                                                </div>
                                                                <hr>
                                                                <div class="col-12 my-2">
                                                                    <button
                                                                        class=" btn btn-sm btn-light-secondary float-right">edit</button>
                                                                    <h6>You are connected to facebook.</h6>
                                                                    <p>Johndoe@gmail.com</p>
                                                                </div>
                                                                <hr>
                                                                <div class="col-12 my-2">
                                                                    <a href="javascript: void(0);" class="btn btn-danger">Connect to
                                                                        <strong>Google</strong>
                                                                    </a>
                                                                </div>
                                                                <hr>
                                                                <div class="col-12 my-2">
                                                                    <button
                                                                        class=" btn btn-sm btn-light-secondary float-right">edit</button>
                                                                    <h6>You are connected to Instagram.</h6>
                                                                    <p>Johndoe@gmail.com</p>
                                                                </div>
                                                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                                    <button type="submit" class="btn btn-primary glow mr-sm-1 mb-1">Save
                                                                        changes</button>
                                                                    <button type="reset" class="btn btn-light mb-1">Cancel</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="account-vertical-notifications" role="tabpanel"
                                                             aria-labelledby="account-pill-notifications" aria-expanded="false">
                                                            <div class="row">
                                                                <h6 class="m-1">Activity</h6>
                                                                <div class="col-12 mb-1">
                                                                    <div class="custom-control custom-switch custom-control-inline">
                                                                        <input type="checkbox" class="custom-control-input" checked
                                                                               id="accountSwitch1">
                                                                        <label class="custom-control-label mr-1"
                                                                               for="accountSwitch1"></label>
                                                                        <span class="switch-label w-100">Email me when someone comments
                                                                            onmy
                                                                            article</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 mb-1">
                                                                    <div class="custom-control custom-switch custom-control-inline">
                                                                        <input type="checkbox" class="custom-control-input" checked
                                                                               id="accountSwitch2">
                                                                        <label class="custom-control-label mr-1"
                                                                               for="accountSwitch2"></label>
                                                                        <span class="switch-label w-100">Email me when someone answers on
                                                                            my
                                                                            form</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 mb-1">
                                                                    <div class="custom-control custom-switch custom-control-inline">
                                                                        <input type="checkbox" class="custom-control-input"
                                                                               id="accountSwitch3">
                                                                        <label class="custom-control-label mr-1"
                                                                               for="accountSwitch3"></label>
                                                                        <span class="switch-label w-100">Email me hen someone follows
                                                                            me</span>
                                                                    </div>
                                                                </div>
                                                                <h6 class="m-1">Application</h6>
                                                                <div class="col-12 mb-1">
                                                                    <div class="custom-control custom-switch custom-control-inline">
                                                                        <input type="checkbox" class="custom-control-input" checked
                                                                               id="accountSwitch4">
                                                                        <label class="custom-control-label mr-1"
                                                                               for="accountSwitch4"></label>
                                                                        <span class="switch-label w-100">News and announcements</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 mb-1">
                                                                    <div class="custom-control custom-switch custom-control-inline">
                                                                        <input type="checkbox" class="custom-control-input"
                                                                               id="accountSwitch5">
                                                                        <label class="custom-control-label mr-1"
                                                                               for="accountSwitch5"></label>
                                                                        <span class="switch-label w-100">Weekly product updates</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 mb-1">
                                                                    <div class="custom-control custom-switch custom-control-inline">
                                                                        <input type="checkbox" class="custom-control-input" checked
                                                                               id="accountSwitch6">
                                                                        <label class="custom-control-label mr-1"
                                                                               for="accountSwitch6"></label>
                                                                        <span class="switch-label w-100">Weekly blog digest</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                                    <button type="submit" class="btn btn-primary glow mr-sm-1 mb-1">Save
                                                                        changes</button>
                                                                    <button type="reset" class="btn btn-light mb-1">Cancel</button>
                                                                </div>
                                                            </div>
                                                        </div>-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- account setting page ends -->
                </div>
            </div>
        </div>
        <!-- END: Content-->


        <!-- BEGIN: Customizer-->
        <div class="customizer d-none d-md-block"><a class="customizer-close" href="#"><i class="bx bx-x"></i></a><a class="customizer-toggle" href="#"><i class="bx bx-cog bx bx-spin white"></i></a><div class="customizer-content p-2">
                <h4 class="text-uppercase mb-0">Theme Customizer</h4>
                <small>Customize & Preview in Real Time</small>
                <hr>
                <!-- Theme options starts -->
                <h5 class="mt-1">Theme Layout</h5>
                <div class="theme-layouts">
                    <div class="d-flex justify-content-start">
                        <div class="mx-50">
                            <fieldset>
                                <div class="radio">
                                    <input type="radio" name="layoutOptions" value="false" id="radio-light" class="layout-name" data-layout=""
                                           checked>
                                    <label for="radio-light">Light</label>
                                </div>
                            </fieldset>
                        </div>
                        <div class="mx-50">
                            <fieldset>
                                <div class="radio">
                                    <input type="radio" name="layoutOptions" value="false" id="radio-dark" class="layout-name"
                                           data-layout="dark-layout">
                                    <label for="radio-dark">Dark</label>
                                </div>
                            </fieldset>
                        </div>
                        <div class="mx-50">
                            <fieldset>
                                <div class="radio">
                                    <input type="radio" name="layoutOptions" value="false" id="radio-semi-dark" class="layout-name"
                                           data-layout="semi-dark-layout">
                                    <label for="radio-semi-dark">Semi Dark</label>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
                <!-- Theme options starts -->
                <hr>

                <!-- Menu Colors Starts -->
                <div id="customizer-theme-colors">
                    <h5>Menu Colors</h5>
                    <ul class="list-inline unstyled-list">
                        <li class="color-box bg-primary selected" data-color="theme-primary"></li>
                        <li class="color-box bg-success" data-color="theme-success"></li>
                        <li class="color-box bg-danger" data-color="theme-danger"></li>
                        <li class="color-box bg-info" data-color="theme-info"></li>
                        <li class="color-box bg-warning" data-color="theme-warning"></li>
                        <li class="color-box bg-dark" data-color="theme-dark"></li>
                    </ul>
                    <hr>
                </div>
                <!-- Menu Colors Ends -->
                <!-- Menu Icon Animation Starts -->
                <div id="menu-icon-animation">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="icon-animation-title">
                            <h5 class="pt-25">Icon Animation</h5>
                        </div>
                        <div class="icon-animation-switch">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" checked id="icon-animation-switch">
                                <label class="custom-control-label" for="icon-animation-switch"></label>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
                <!-- Menu Icon Animation Ends -->
                <!-- Collapse sidebar switch starts -->
                <div class="collapse-sidebar d-flex justify-content-between align-items-center">
                    <div class="collapse-option-title">
                        <h5 class="pt-25">Collapse Menu</h5>
                    </div>
                    <div class="collapse-option-switch">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="collapse-sidebar-switch">
                            <label class="custom-control-label" for="collapse-sidebar-switch"></label>
                        </div>
                    </div>
                </div>
                <!-- Collapse sidebar switch Ends -->
                <hr>

                <!-- Navbar colors starts -->
                <div id="customizer-navbar-colors">
                    <h5>Navbar Colors</h5>
                    <ul class="list-inline unstyled-list">
                        <li class="color-box bg-white border selected" data-navbar-default=""></li>
                        <li class="color-box bg-primary" data-navbar-color="bg-primary"></li>
                        <li class="color-box bg-success" data-navbar-color="bg-success"></li>
                        <li class="color-box bg-danger" data-navbar-color="bg-danger"></li>
                        <li class="color-box bg-info" data-navbar-color="bg-info"></li>
                        <li class="color-box bg-warning" data-navbar-color="bg-warning"></li>
                        <li class="color-box bg-dark" data-navbar-color="bg-dark"></li>
                    </ul>
                    <small><strong>Note :</strong> This option with work only on sticky navbar when you scroll page.</small>
                    <hr>
                </div>
                <!-- Navbar colors starts -->
                <!-- Navbar Type Starts -->
                <h5>Navbar Type</h5>
                <div class="navbar-type d-flex justify-content-start">
                    <div class="hidden-ele mx-50">
                        <fieldset>
                            <div class="radio">
                                <input type="radio" name="navbarType" value="false" id="navbar-hidden">
                                <label for="navbar-hidden">Hidden</label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="mx-50">
                        <fieldset>
                            <div class="radio">
                                <input type="radio" name="navbarType" value="false" id="navbar-static">
                                <label for="navbar-static">Static</label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="mx-50">
                        <fieldset>
                            <div class="radio">
                                <input type="radio" name="navbarType" value="false" id="navbar-sticky" checked>
                                <label for="navbar-sticky">Fixed</label>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <hr>
                <!-- Navbar Type Starts -->

                <!-- Footer Type Starts -->
                <h5>Footer Type</h5>
                <div class="footer-type d-flex justify-content-start">
                    <div class="mx-50">
                        <fieldset>
                            <div class="radio">
                                <input type="radio" name="footerType" value="false" id="footer-hidden">
                                <label for="footer-hidden">Hidden</label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="mx-50">
                        <fieldset>
                            <div class="radio">
                                <input type="radio" name="footerType" value="false" id="footer-static" checked>
                                <label for="footer-static">Static</label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="mx-50">
                        <fieldset>
                            <div class="radio">
                                <input type="radio" name="footerType" value="false" id="footer-sticky">
                                <label for="footer-sticky" class="">Sticky</label>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <!-- Footer Type Ends -->
                <hr>

                <!-- Card Shadow Starts-->
                <div class="card-shadow d-flex justify-content-between align-items-center py-25">
                    <div class="hide-scroll-title">
                        <h5 class="pt-25">Card Shadow</h5>
                    </div>
                    <div class="card-shadow-switch">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" checked id="card-shadow-switch">
                            <label class="custom-control-label" for="card-shadow-switch"></label>
                        </div>
                    </div>
                </div>
                <!-- Card Shadow Ends-->
                <hr>

                <!-- Hide Scroll To Top Starts-->
                <div class="hide-scroll-to-top d-flex justify-content-between align-items-center py-25">
                    <div class="hide-scroll-title">
                        <h5 class="pt-25">Hide Scroll To Top</h5>
                    </div>
                    <div class="hide-scroll-top-switch">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="hide-scroll-top-switch">
                            <label class="custom-control-label" for="hide-scroll-top-switch"></label>
                        </div>
                    </div>
                </div>
                <!-- Hide Scroll To Top Ends-->
            </div>
        </div>
        <!-- End: Customizer-->

        <!-- Buynow Button-->
        <div class="buy-now"><a href="https://1.envato.market/frest_admin" target="_blank" class="btn btn-danger">Buy Now</a>

        </div>
        <!-- demo chat-->
        <div class="widget-chat-demo"><!-- widget chat demo footer button start -->
            <button class="btn btn-primary chat-demo-button glow px-1"><i class="livicon-evo"
                                                                          data-options="name: comments.svg; style: lines; size: 24px; strokeColor: #fff; autoPlay: true; repeat: loop;"></i></button>
            <!-- widget chat demo footer button ends -->
            <!-- widget chat demo start -->
            <div class="widget-chat widget-chat-demo d-none">
                <div class="card mb-0">
                    <div class="card-header border-bottom p-0">
                        <div class="media m-75">
                            <a href="JavaScript:void(0);">
                                <div class="avatar mr-75">
                                    <img src="app-assets/images/portrait/small/avatar-s-2.jpg" alt="avtar images" width="32"
                                         height="32">
                                    <span class="avatar-status-online"></span>
                                </div>
                            </a>
                            <div class="media-body">
                                <h6 class="media-heading mb-0 pt-25"><a href="javaScript:void(0);">Kiara Cruiser</a></h6>
                                <span class="text-muted font-small-3">Active</span>
                            </div>
                            <i class="bx bx-x widget-chat-close float-right my-auto cursor-pointer"></i>
                        </div>
                    </div>
                    <div class="card-body widget-chat-container widget-chat-demo-scroll">
                        <div class="chat-content">
                            <div class="badge badge-pill badge-light-secondary my-1">today</div>
                            <div class="chat">
                                <div class="chat-body">
                                    <div class="chat-message">
                                        <p>How can we help? 😄</p>
                                        <span class="chat-time">7:45 AM</span>
                                    </div>
                                </div>
                            </div>
                            <div class="chat chat-left">
                                <div class="chat-body">
                                    <div class="chat-message">
                                        <p>Hey John, I am looking for the best admin template.</p>
                                        <p>Could you please help me to find it out? 🤔</p>
                                        <span class="chat-time">7:50 AM</span>
                                    </div>
                                </div>
                            </div>
                            <div class="chat">
                                <div class="chat-body">
                                    <div class="chat-message">
                                        <p>Stack admin is the responsive bootstrap 4 admin template.</p>
                                        <span class="chat-time">8:01 AM</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer border-top p-1">
                        <form class="d-flex" onsubmit="widgetChatMessageDemo();" action="javascript:void(0);">
                            <input type="text" class="form-control chat-message-demo mr-75" placeholder="Type here...">
                            <button type="submit" class="btn btn-primary glow px-1"><i class="bx bx-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
       




        <!-- BEGIN: Vendor JS-->

        <script src="../js/jquery-2.2.4.min.js" type="text/javascript"></script> 
        <script src="js/ajax/profile.js" type="text/javascript"></script>
        <script src="../js/sweetalert.min.js" type="text/javascript"></script>
        <script src="app-assets/vendors/js/vendors.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
        <!-- BEGIN Vendor JS-->





    </body>

</html>