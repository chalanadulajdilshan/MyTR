<?php
if (!isset($_SESSION)) {
    session_start();

    if (isset($_SESSION['status_customer'])) {

        if ($_SESSION['status_customer'] == TRUE) {
            if (isset($_SESSION['id'])) {
                $CUSTOMER = new Customer($_SESSION['id']);
            }
        }
    }
    if (isset($_SESSION['status_visitor'])) {

        if ($_SESSION['status_visitor'] == TRUE) {
            if (isset($_SESSION['id'])) {
                $VISITOR = new Visitor($_SESSION['id']);
            }
        }
    }
}

//globle variables
$MOBILE_NUMBER = new Page(1);
$EMAIL = new Page(2);
?>

<header id="header-waypoint-sticky" class="header-main header-mobile-menu with-absolute-navbar">

    <div class="header-top">

        <div class="container">
            <div class="row align-items-center ">
                <div class="col-4">
                    <div class="header-logo" style="margin-top: 7px;width: 40%">
                        <a href=""><img src="<?php echo URL ?>images/logo-white.png" alt="mytravelpartner.lk"  /></a>
                    </div>
                </div>
                <div class="col-8">
                    <div class="mini-menu">
                        <ul>

                            <li class="d-none d-md-block">
                                <div class="dropdown dropdown-language">
                                    <a href="#" class="btn btn-text-inherit btn-interactive" id="dropdownLangauge" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="image"><img src="<?php echo URL ?>font-icons/img-flaticon-flags-4/png/260-united-kingdom.png" alt="image"  /></span> English
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownLangauge">
                                        <div class="dropdown-menu-inner">
                                            <a class="dropdown-item active" href="#"><span class="image"><img src="<?php echo URL ?>font-icons/img-flaticon-flags-4/png/260-united-kingdom.png" alt="image" /></span> English</a>
                                            <a class="dropdown-item" href="#"><span class="image"><img src="<?php echo URL ?>font-icons/img-flaticon-flags-4/png/013-italy.png" alt="image" /></span> Italiano</a>
                                            <a class="dropdown-item" href="#"><span class="image"><img src="<?php echo URL ?>font-icons/img-flaticon-flags-4/png/063-japan.png" alt="image" /></span> 日本語</a>
                                            <a class="dropdown-item" href="#"><span class="image"><img src="<?php echo URL ?>font-icons/img-flaticon-flags-4/png/162-germany.png" alt="image" /></span> Deutsch</a>
                                            <a class="dropdown-item" href="#"><span class="image"><img src="<?php echo URL ?>font-icons/img-flaticon-flags-4/png/118-malasya.png" alt="image" /></span> Bahasa Malaysia</a>
                                            <a class="dropdown-item" href="#"><span class="image"><img src="<?php echo URL ?>font-icons/img-flaticon-flags-4/png/238-thailand.png" alt="image" /></span> ภาษาไทย</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <?php
                                if (isset($CUSTOMER->id)) {
                                    ?>
                                <li class="dropdown dropdown-login dropdown-tab">
                                    <div class="  dropdown-language btn btn-text-inherit ">
                                        <?php
                                        if (empty($CUSTOMER->image_name)) {
                                            ?>
                                            <a href="#" class="btn btn-text-inherit btn-interactive " id="dropdownLangauge" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="image"><img src="<?php echo URL ?>images/member.jpg" class="img-circle" alt="image" style="width: 20px"/>Hi, <?php echo $CUSTOMER->full_name ?></span> 
                                            </a>
                                        <?php } else { ?>
                                            <a href="#" class="btn btn-text-inherit btn-interactive " id="dropdownLangauge" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="image"><img src="<?php echo URL ?>upload/customer/profile/<?php echo $CUSTOMER->image_name ?>" class="img-circle" alt="image" style="width: 20px;"/>Hi, <?php echo $CUSTOMER->full_name ?></span> 
                                            </a>
                                        <?php } ?>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownLangauge"  >
                                            <div class="dropdown-menu-inner">
                                                <a class="dropdown-item" href="<?php echo URL ?>customer/index.php"><i class="bx bx-dashboard  "></i> My Dashboard</a>
                                                <a class="dropdown-item  " href="<?php echo URL ?>customer/profile.php"><span class="image"> <i class="bx bx-user"></i></span> My Profile</a>
                                                <a class="dropdown-item  " href="<?php echo URL ?>customer/view-booking-calendar.php"><span class="image"> <i class="bx bx-envelope  "></i> </span> My Bookings</a> 
                                                <a class="dropdown-item  " href="<?php echo URL ?>customer/log-out.php"><span class="image"> <i class="bx bx-power-off "></i> </span> Log Out</a>

                                            </div>
                                        </div>
                                    </div>
                                </li>

                            <?php } else { ?>
                                <div class="dropdown dropdown-login dropdown-tab">
                                    <a href="<?php echo URL ?>customer/login.php" class="btn btn-text-inherit  "  >
                                        Add Your Business
                                    </a> 
                                </div>
                            <?php } ?>


                            </li>
                            <?php
                            if (isset($VISITOR->id)) {
                                ?>
                                <li class="dropdown dropdown-login dropdown-tab">
                                    <div class="  dropdown-language btn btn-text-inherit ">
                                        <?php
                                        if (empty($VISITOR->image_name)) {
                                            ?>
                                            <a href="#" class="btn btn-text-inherit btn-interactive " id="dropdownLangauge" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="image"><img src="<?php echo URL ?>images/member.jpg" class="img-circle" alt="image" style="width: 20px"/>Hi, <?php echo $VISITOR->full_name ?></span> 
                                            </a>
                                        <?php } else { ?>
                                            <a href="#" class="btn btn-text-inherit btn-interactive " id="dropdownLangauge" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="image"><img src="<?php echo URL ?>upload/visitor/profile/<?php echo $VISITOR->image_name ?>" class="img-circle" alt="image" style="width: 20px;"/>Hi, <?php echo $VISITOR->full_name ?></span> 
                                            </a>
                                        <?php } ?>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownLangauge"  >
                                            <div class="dropdown-menu-inner">
                                                <a class="dropdown-item" href="<?php echo URL ?>visitor/index.php"><i class="bx bx-dashboard "></i> My Dashboard</a>
                                                <a class="dropdown-item" href="<?php echo URL ?>visitor/profile.php"><span class="image"> <i class="bx bx-user"></i></span> My Profile</a>
                                                <a class="dropdown-item" href="#"><span class="image"> <i class="bx bx-envelope  "></i> </span> My Bookings</a>
                                                <a class="dropdown-item" href="#"><span class="image"> <i class="bx bx-cog "></i> </span> Setting</a>
                                                <a class="dropdown-item" href="<?php echo URL ?>visitor/log-out.php"><span class="image"> <i class="bx bx-power-off "></i> </span> Log Out</a>

                                            </div>
                                        </div>
                                    </div>
                                </li>

                            <?php } else { ?>
                                <li>
                                    <div class="dropdown dropdown-login dropdown-tab">
                                        <a href="<?php echo URL ?>visitor/login.php" class="btn btn-text-inherit  "    >
                                            Login / Register
                                        </a>
                                    </div>
                                </li>

                            <?php } ?>
                            <li class="d-lg-none">
                                <button class="btn btn-toggle collapsed" data-toggle="collapse" data-target="#mobileMenuMain"></button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="header-nav">

        <div class="container">

            <div class="navbar-wrapper">

                <div class="navbar navbar-expand-lg">

                    <div id="mobileMenuMain" class="collapse navbar-collapse"> 

                        <nav class="main-nav-menu main-menu-nav navbar-arrow">

                            <ul class="main-nav">

                                <li><a href="<?php echo URL ?>">Home</a>

                                </li>
                                <li><a href="<?php echo URL ?>accommodations">Accommodations</a></li>
                                <li><a href="<?php echo URL ?>tour">Tours</a></li>

                                <!--                                <li><a href="">Tours</a>
                                                                    <ul>
                                                                        <li><a href="tour-packages.php">Day Tours</a></li>
                                                                        <li><a href="">Round Tours</a></li>
                                                                        <li><a href="plan-your-tour.php">Plan Tours</a></li>
                                                                    </ul>
                                                                </li>-->


                                <li><a href="<?php echo URL ?>rent_car_companies">Rent A Vehicles</a></li>  
                                <li><a href="<?php echo URL ?>destinations">Destinations</a>  </li>
                                <li><a href="<?php echo URL ?>activitie">Things to do</a></li>
                                <!--                                <li><a href="service.php">Services</a></li>-->
                                <li><a href="<?php echo URL ?>restaurants">Restaurants</a></li>
                                <li><a href="<?php echo URL ?>contact">Contact</a></li> 

                            </ul>
                        </nav> 
                    </div>

                    <div class="navbar-phone d-none d-lg-block  " >
                        <a href="tel:<?php echo $MOBILE_NUMBER->short_description ?>" target="_blank" style="color: white">  <i class="material-icons">phone</i> Hotline: <?php echo $MOBILE_NUMBER->short_description ?></a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>