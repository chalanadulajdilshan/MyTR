<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <title>Reset password - Admin Panel</title>
        <!-- Favicon-->
        <link rel="icon" href="assets/images/loading.png" type="image/x-icon">

        <!-- Plugins Core Css -->
        <link href="assets/css/app.min.css" rel="stylesheet">

        <!-- Custom Css -->
        <link href="plugin/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/style.css" rel="stylesheet" />
        <link href="assets/css/pages/extra_pages.css" rel="stylesheet" />
    </head>

    <body class="login-page">
        <div class="limiter">
            <div class="container-login100" style="background-image: url(' assets/images/bg-01.jpg');">
                <div class="wrap-login100">
                    <form class="login100-form validate-form" autocomplete="off" id="reset-password" >
                        <span class="login100-form-logo">
                            <img alt="" src="assets/images/loading.png">
                        </span>
                        <span class="login100-form-title p-b-34 p-t-27">
                            Reset Password
                        </span>

                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="text" name="reset_code" id="reset_code" placeholder="Reset Code">
                            <i class="material-icons focus-input1001">keyboard</i>
                        </div>
                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="password" minlength="6" name="password" id="password" placeholder="New Password">
                            <i class="material-icons focus-input1001">lock</i>
                        </div>
                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="password" minlength="6" name="confirmpassword" id="confirmpassword" placeholder="Confirm New Password">
                            <i class="material-icons focus-input1001">lock</i>
                        </div>
                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn" type="submit" id="create">
                                Reset Password
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

        <!-- Plugins Js -->
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="assets/js/app.min.js"></script>
        <script src="plugin/sweetalert/sweetalert.min.js" type="text/javascript"></script> 
        <!-- Extra page Js -->
        <script src="assets/js/pages/examples/pages.js"></script>
        <script src="js/main-js/password/reset_password.js" type="text/javascript"></script>
    </body>

</html>