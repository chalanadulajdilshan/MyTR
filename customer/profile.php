<!DOCTYPE html>
<?php
include '../class/include.php';
include './auth.php';

$CUSTOMER = new Customer($_SESSION['id']);
?>
<html class="loading" lang="en" data-textdirection="ltr">
    <!-- BEGIN: Head-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="author" content="MyTravelPartner.lk">
        <title>Edit Profile || MyTravelPartner.lk</title>
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
        <!-- END: Theme CSS-->

        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/wizard.min.css">
        <link href="plugin/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <!-- END: Custom CSS-->
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    </head>
    <!-- END: Head-->

    <!-- BEGIN: Body-->
    <body class=" someBlock vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">
        <div class="box"></div>
        <!-- BEGIN: Header-->
        <?php
        include './header.php';
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
                                        <li class="breadcrumb-item"><a href="index.php"><i class="bx bx-home-alt"></i> Home</a>
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
                                                    <span>Profile</span>
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
                                                                        if (empty($CUSTOMER->image_name)) {
                                                                            ?>
                                                                            <img src="../images/member.jpg"   class="rounded mr-75 main-img" alt="profile image" width="150px" height="150px" >
                                                                        <?php } else { ?>
                                                                            <img src="../upload/customer/profile/<?php echo $CUSTOMER->image_name ?>"   class="rounded mr-75 main-img" alt="profile image"  >

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
                                                                    <input type="hidden" name="id" value="<?php echo $CUSTOMER->id ?>">
                                                                </div>
                                                            </form>
                                                            <hr>
                                                            <form   id="form-data-info" >
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <div class="controls">
                                                                                <label>Full Name</label>
                                                                                <input type="text" class="form-control"  name="full_name"  value="<?php echo $CUSTOMER->full_name ?>"  >
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <div class="controls">
                                                                                <label>E-mail</label>
                                                                                <input type="email" class="form-control" name="email"value="<?php echo $CUSTOMER->email ?>">
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
                                                                            <input type="text" class="form-control" name="phone_number" value="<?php echo $CUSTOMER->phone_number ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <label>Your address</label>
                                                                            <input type="text" class="form-control" name="address" value="<?php echo $CUSTOMER->address ?>" name="address" placeholder="Enter Your address">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">

                                                                        <button type="submit" class="btn btn-primary glow mr-sm-1 mb-1"  id="update-info">Save
                                                                            changes</button> 
                                                                        <input type="hidden" name="action" value="update-info">
                                                                        <input type="hidden" name="id" value="<?php echo $CUSTOMER->id ?>">
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
                                                                <input type="hidden" name="id" value="<?php echo $CUSTOMER->id ?>">
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


        <!-- BEGIN: Vendor JS-->

        <script src="../js/jquery-2.2.4.min.js" type="text/javascript"></script>
        <!-- BEGIN: Vendor JS-->
        <script src="app-assets/vendors/js/vendors.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>

        <script src="js/ajax/profile.js" type="text/javascript"></script>

        <script src="plugin/sweetalert/sweetalert.min.js" type="text/javascript"></script>
        <script src="app-assets/vendors/js/vendors.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
        <script src="js/jquery.preloader.min.js" type="text/javascript"></script>

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
        <script src="app-assets/vendors/js/forms/select/select2.full.min.js"></script>
        <script src="app-assets/js/scripts/forms/select/form-select2.min.js"></script>
        <script src="app-assets/js/scripts/navs/navs.min.js"></script>
        <!-- END: Page JS-->

        
         



    </body>

</html>