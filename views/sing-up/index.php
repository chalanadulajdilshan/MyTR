<!DOCTYPE html>

<!-- START SECTION BREADCRUMB -->
<div class="breadcrumb_section bg_gray page-title-mini">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="page-title">
                    <h1>Register</h1>
                </div>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active">Register</li>
                </ol>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>
<!-- END SECTION BREADCRUMB -->

<!-- START MAIN CONTENT -->
<div class="main_content">

    <!-- START LOGIN SECTION -->
    <div class="login_register_wrap p-d-t">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-md-10">
                    <div class="login_wrap">
                        <div class="padding_eight_all bg-white">
                            <div class="heading_s1">
                                <h3>Create an Account</h3>
                            </div>
                            <form method="post" id="form">
                                <div class="form-group">
                                    <input type="text"  class="form-control" name="name" placeholder="Enter Your Name" id="name" data-field="name">
                                    <div class="valid-message"></div>
                                </div>
                                <div class="form-group">
                                    <input type="email"  class="form-control" name="email" placeholder="Enter Your Email" id="email" data-field="email">
                                    <div class="valid-message"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text"   class="form-control" name="phone_number" placeholder="Enter Your Mobile Number" id="mobile" data-field="mobile">
                                    <div class="valid-message"></div>
                                </div>
                                <div class="form-group">
                                    <input class="form-control"   type="password" name="password" placeholder="Password" id="password" data-field="password">
                                    <div class="valid-message"></div>
                                </div>
                                <div class="form-group">
                                    <input class="form-control"   type="password" name="password" placeholder="Confirm Password" id="confirm-password">
                                    <div class="valid-message"></div>
                                </div>
                                <div class="login_footer form-group">
                                    <div class="chek-form">
                                        <div class="custome-checkbox">
                                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox2" value="">
                                            <label class="form-check-label" for="exampleCheckbox2"><span>I agree to <a href="<?php echo URL ?>termCondition/" target="_blank" style="color: red"> Terms &amp; Policy</a>.</span></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-fill-out btn-block" >Register</button>
                                    <div class="text-center text-danger btn-padding font-size-new" id="message" style="margin-top: 5px;"></div>
                                </div>
                            </form>
                            <div class="different_login">
                                <span> or</span>
                            </div>
                            <ul class="btn-login list_none text-center">
                                <li><a href="#" class="btn btn-facebook"><i class="ion-social-facebook"></i>Facebook</a></li>
                                <li><a href="#" class="btn btn-google"><i class="ion-social-googleplus"></i>Google</a></li>
                            </ul>
                            <div class="form-note text-center">Already have an account? <a href="<?php echo URL ?>Member">Log in</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>   
</div>
<!-- END MAIN CONTENT -->


<a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a> 

<!-- Latest jQuery --> 
<script src="<?php echo URL ?>assets/js/jquery-1.12.4.min.js"></script> 
<!-- popper min js -->
<script src="<?php echo URL ?>assets/js/popper.min.js"></script>
<!-- Latest compiled and minified Bootstrap --> 
<script src="<?php echo URL ?>assets/bootstrap/js/bootstrap.min.js"></script> 
<!-- owl-carousel min js  --> 
<script src="<?php echo URL ?>assets/owlcarousel/js/owl.carousel.min.js"></script> 
<!-- magnific-popup min js  --> 
<script src="<?php echo URL ?>assets/js/magnific-popup.min.js"></script> 
<!-- waypoints min js  --> 
<script src="<?php echo URL ?>assets/js/waypoints.min.js"></script> 
<!-- parallax js  --> 
<script src="<?php echo URL ?>assets/js/parallax.js"></script> 
<!-- countdown js  --> 
<script src="<?php echo URL ?>assets/js/jquery.countdown.min.js"></script> 
<!-- imagesloaded js --> 
<script src="<?php echo URL ?>assets/js/imagesloaded.pkgd.min.js"></script>
<!-- isotope min js --> 
<script src="<?php echo URL ?>assets/js/isotope.min.js"></script>
<!-- jquery.dd.min js -->
<script src="<?php echo URL ?>assets/js/jquery.dd.min.js"></script>
<!-- slick js -->
<script src="<?php echo URL ?>assets/js/slick.min.js"></script>
<!-- elevatezoom js -->
<script src="<?php echo URL ?>assets/js/jquery.elevatezoom.js"></script>
<!-- scripts js --> 
<script src="<?php echo URL ?>assets/js/scripts.js"></script>
<script src="<?php echo URL ?>assets/js/jquery.formValid.js" type="text/javascript"></script>
<script src="<?php echo URL ?>ajax/js/registration.js" type="text/javascript"></script>
<script src="<?php echo URL ?>assets/js/sweetalert.min.js" type="text/javascript"></script>
<script src="<?php echo URL ?>assets/js/jquery.preloader.min.js" type="text/javascript"></script>
<script src="<?php echo URL ?>ajax/js/add_to_cart.js" type="text/javascript"></script>

</body>
</html>