<?php
include_once(dirname(__FILE__) . '/../class/include.php');
$USER = new User(1);
$ACCOMMODATION = new Accommodation(NULL);
$COMMENTS = new Comments(NULL);
$COUNT_PENDING_ACCOMMODATION = count($ACCOMMODATION->pendingAccommodations());
$COUNT_ACTIVE_COMMENTS = count($COMMENTS->activeComments());
?>

<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="index.html">
                <img src="assets/images/loading.png" alt="" width="20%"/>
                <span class="logo-name"><strong>
                        Admin
                    </strong>
                </span>
            </a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="pull-left">
                <li>
                    <a href="javascript:void(0);" class="sidemenu-collapse">
                        <i class="fas fa-bars"></i>
                    </a>
                </li>
                <li>
                    <div class="search-box">
                        <input type="search" id="search" placeholder="Search..." />
                        <button class="icon">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <!-- Full Screen Button -->
                <li class="fullscreen">
                    <a href="javascript:;" class="fullscreen-btn">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <!-- #END# Full Screen Button -->

                <!-- Notifications -->
                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                        <i class="far fa-bell"></i>
                        <span class="label-count bg-orange"><?php echo $COUNT_PENDING_ACCOMMODATION ?></span>
                    </a>
                    <ul class="dropdown-menu pullDown" >
                        <li class="header">NOTIFICATIONS</li>
                        <li class="body">
                            <ul class="menu" >
                                <?php
                                foreach ($ACCOMMODATION->pendingAccommodations()as $accommodation) {
                                    ?>
                                    <li style="width: 325px!important;">
                                        <a href="edit-accommodation.php?id=<?php echo $accommodation['id'] ?>">
                                            <span class="table-img msg-user">
                                                <img src="../upload/accommodation/gallery/thumb/<?php echo $accommodation['image_name'] ?>" alt="" style="height: 44px;">
                                            </span>
                                            <span class="menu-info" style="margin-top: 6px;">
                                                <span class="menu-title"><?php echo $accommodation['title'] ?></span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">room</i><?php echo $accommodation['city'] ?>
                                                </span> 
                                            </span>
                                        </a>
                                    </li> 
                                <?php } ?>
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="create-comment.php">View All Notifications</a>
                        </li>
                    </ul>
                </li>
                <!-- #END# Notifications -->
                <!-- #START# Message-->
                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                        <i class="far fa-comments"></i>
                        <span class="label-count bg-green"><?php echo $COUNT_PENDING_ACCOMMODATION ?></span>
                    </a>
                    <ul class="dropdown-menu pullDown">
                        <li class="header">ACTIVE NOTIFICATIONS</li>
                        <li class="body">
                            <ul class="menu">
                                <?php
                                foreach ($COMMENTS->activeComments() as $comment) {
                                    ?>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <span class="table-img msg-user">
                                                <img src="../upload/comment/<?php echo $comment['image_name'] ?>" alt="" style="height: 44px;">
                                            </span>
                                            <span class="menu-info" style="margin-top: 6px;">
                                                <span class="menu-title"><?php echo $comment['name'] ?></span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i><?php echo $comment['create_at'] ?>
                                                </span> 
                                            </span>
                                        </a>
                                    </li> 
                                <?php } ?>
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="create-comment.php">View All Active Notification</a>
                        </li>
                    </ul>
                </li>
                <!-- #END# Message-->
                <li class="dropdown user_profile">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                        <img src="../upload/user/<?php echo $USER->image_name ?>" width="32" height="32" alt="User">
                    </a>
                    <ul class="dropdown-menu pullDown">
                        <li class="body">
                            <ul class="user_dw_menu">
                                <li>
                                    <a href="profile.php">
                                        <i class="material-icons">person</i>Profile
                                    </a>
                                </li>
                                <!--                                <li>
                                                                    <a href="javascript:void(0);">
                                                                        <i class="material-icons">feedback</i>Feedback
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0);">
                                                                        <i class="material-icons">help</i>Help
                                                                    </a>
                                                                </li>-->
                                <li>
                                    <a href="post-and-get/log-out.php">
                                        <i class="material-icons">power_settings_new</i>Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- #END# Tasks -->
                <li class="pull-right">
                    <a href="javascript:void(0);" class="js-right-sidebar" data-close="true">
                        <i class="fas fa-cog"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>