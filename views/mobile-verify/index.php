<!DOCTYPE html>
<?php
if (!isset($_SESSION)) {
    session_start();
}
if (!Customer::authenticate()) {
    redirect('login.php');
}

$CUSTOMER = new Customer($_SESSION['id']);
?>
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
    <div class="login_register_wrap section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-md-10">
                    <div class="login_wrap">
                        <div class="padding_eight_all bg-white">
                            <div class="heading_s1">
                                <h3>Verify Your Mobile Number</h3>
                                <div class="text-muted text-cente mt-2">  <small class="text-danger text-bold-600">Please Check your Mobile Number <a href="" class="text-bold-700  "><b><?php echo $CUSTOMER->phone_number ?></b></a>   and enter  the verification code for active your account ..!       

                                        <button class="btn-trns"  data-toggle="modal" data-target="#responsive-modal"><b class="text-warning">Change Number</b></button>

                                    </small>
                                </div>

                            </div>
                            <form  id="form">
                                <div class="form-group">
                                    <input type="text"  class="form-control" name="code" placeholder="Enter Verification Code" id="code" data-field="code">
                                    <div class="valid-message"></div>
                                </div> 
                                <div class="form-group">
                                    <button type="submit" class="btn btn-fill-out btn-block" id="verify" >Verified Now</button>
                                </div>
                                <div class="text-center" >
                                    <small class="mr-25">Don't have an received code?</small>
                                    <button class="btn-trns" id="send_phone_verification" disabled=""><small><B>RESEND AGAIN CODE <span class="text-danger" id="countdown_p"></span></b></small></button>
                                </div>
                                <input type="hidden" value="<?php echo $CUSTOMER->id ?>" id="customer">
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


    <div class="col-md-4"> 
        <!-- sample modal content -->
        <div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="p-t-10" style="margin-top: 20px;">
                        <h4 class="text-center">Change Phone Number</h4>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <input type="text" value="<?php echo $CUSTOMER->phone_number ?>" class="form-control phone-inputmask phone_number" customer-id="<?php echo $CUSTOMER->id ?>" id="phone_number" inputmode="numeric">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger waves-effect waves-light" id="change">Save changes</button>
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
<script src="<?php echo URL ?>assets/js/sweetalert.min.js" type="text/javascript"></script>
<script src="<?php echo URL ?>assets/js/jquery.preloader.min.js" type="text/javascript"></script>

<script src="<?php echo URL ?>assets/js/scripts.js"></script>
<script src="<?php echo URL ?>assets/js/jquery.formValid.js" type="text/javascript"></script>

<script src="<?php echo URL ?>ajax/js/mobile-verify.js" type="text/javascript"></script> 
<script src="<?php echo URL ?>ajax/js/change-mobile-no.js" type="text/javascript"></script>

</body>
</html>