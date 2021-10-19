<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <title>Forget password - Admin Panel</title>
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
                    <form class="login100-form validate-form" method="POST" id="forget-password" autocomplete="off">
                        <span class="login100-form-logo">
                            <img alt="" src=" assets/images/loading.png">
                        </span>
                        <span class="login100-form-title p-t-b">
                            Reset Password
                        </span>
                        <div class="text-center">
                            <p class="txt1 p-b-20">
                                Enter your registered email address.
                            </p>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Enter email">
                            <input class="input100" type="email" name="email" id="email" placeholder="Email">
                            <i class="material-icons focus-input1001">email</i>
                        </div>
                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn" type="submit" id="create">
                                Send
                            </button>
                        </div>
                        <div class="text-center p-t-b">
                            <a class="txt1" href="login.php">
                                Login?
                            </a>
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
        <script src="js/main-js/password/forget_password.js" type="text/javascript"></script>

    </body>

</html>