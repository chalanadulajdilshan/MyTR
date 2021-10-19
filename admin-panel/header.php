<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$USER = new User(1);
?>
<div class="header-navbar-shadow"></div>
<nav class="header-navbar main-header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top ">
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="navbar-collapse" id="navbar-mobile">
                <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                    <ul class="nav navbar-nav">
                        <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon bx bx-menu"></i></a></li>
                    </ul>
                    <ul class="nav navbar-nav bookmark-icons">
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-email.html" data-toggle="tooltip" data-placement="top" title="Email"><i class="ficon bx bx-envelope"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-chat.html" data-toggle="tooltip" data-placement="top" title="Chat"><i class="ficon bx bx-chat"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-todo.html" data-toggle="tooltip" data-placement="top" title="Todo"><i class="ficon bx bx-check-circle"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-calendar.html" data-toggle="tooltip" data-placement="top" title="Calendar"><i class="ficon bx bx-calendar-alt"></i></a></li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i class="ficon bx bx-star warning"></i></a>
                            <div class="bookmark-input search-input">
                                <div class="bookmark-input-icon"><i class="bx bx-search primary"></i></div>
                                <input class="form-control input" type="text" placeholder="Explore Frest..." tabindex="0" data-search="template-list">
                                <ul class="search-list"></ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <ul class="nav navbar-nav float-right">

                    <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon bx bx-fullscreen"></i></a></li>
                    <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon bx bx-search"></i></a>
                        <div class="search-input">
                            <div class="search-input-icon"><i class="bx bx-search primary"></i></div>
                            <input class="input" type="text" placeholder="Explore Frest..." tabindex="-1" data-search="template-list">
                            <div class="search-input-close"><i class="bx bx-x"></i></div>
                            <ul class="search-list"></ul>
                        </div>
                    </li>
                    <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon bx bx-bell bx-tada bx-flip-horizontal"></i><span class="badge badge-pill badge-danger badge-up">5</span></a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <li class="dropdown-menu-header">
                                <div class="dropdown-header px-1 py-75 d-flex justify-content-between"><span class="notification-title">7 new Notification</span><span class="text-bold-400 cursor-pointer">Mark all as read</span></div>
                            </li>
                            <li class="scrollable-container media-list"><a class="d-flex justify-content-between" href="javascript:void(0)">
                                    <div class="media d-flex align-items-center">
                                        <div class="media-left pr-0">
                                            <div class="avatar mr-1 m-0"><div class="avatar bg-warning mr-1">
                                                    <div class="avatar-content">
                                                        W
                                                    </div>
                                                </div></div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading"><span class="text-bold-500">Congratulate Socrates Itumay</span> for work anniversaries</h6><small class="notification-text">Mar 15 12:32pm</small>
                                        </div>
                                    </div></a>
                                <div class="d-flex justify-content-between read-notification cursor-pointer">
                                    <div class="media d-flex align-items-center">
                                        <div class="media-left pr-0">
                                            <div class="avatar mr-1 m-0"><div class="avatar bg-warning mr-1">
                                                    <div class="avatar-content">
                                                        W
                                                    </div>
                                                </div></div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading"><span class="text-bold-500">New Message</span> received</h6><small class="notification-text">You have 18 unread messages</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between cursor-pointer">
                                    <div class="media d-flex align-items-center py-0">
                                        <div class="media-left pr-0"><div class="avatar bg-warning mr-1">
                                                <div class="avatar-content">
                                                    W
                                                </div>
                                            </div></div>
                                        <div class="media-body">
                                            <h6 class="media-heading"><span class="text-bold-500">Updates Available</span></h6><small class="notification-text">Sketch 50.2 is currently newly added</small>
                                        </div>
                                        <div class="media-right pl-0">
                                            <div class="row border-left text-center">
                                                <div class="col-12 px-50 py-75 border-bottom">
                                                    <h6 class="media-heading text-bold-500 mb-0">Update</h6>
                                                </div>
                                                <div class="col-12 px-50 py-75">
                                                    <h6 class="media-heading mb-0">Close</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between cursor-pointer">
                                    <div class="media d-flex align-items-center">
                                        <div class="media-left pr-0">
                                            <div class="avatar bg-primary bg-lighten-5 mr-1 m-0 p-25"><span class="avatar-content text-primary font-medium-2">LD</span></div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading"><span class="text-bold-500">New customer</span> is registered</h6><small class="notification-text">1 hrs ago</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="cursor-pointer">
                                    <div class="media d-flex align-items-center justify-content-between">
                                        <div class="media-left pr-0">
                                            <div class="media-body">
                                                <h6 class="media-heading">New Offers</h6>
                                            </div>
                                        </div>
                                        <div class="media-right">
                                            <div class="custom-control custom-switch">
                                                <input class="custom-control-input" type="checkbox" checked id="notificationSwtich">
                                                <label class="custom-control-label" for="notificationSwtich"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between cursor-pointer">
                                    <div class="media d-flex align-items-center">
                                        <div class="media-left pr-0">
                                            <div class="avatar bg-danger bg-lighten-5 mr-1 m-0 p-25"><span class="avatar-content"><i class="bx bxs-heart text-danger"></i></span></div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading"><span class="text-bold-500">Application</span> has been approved</h6><small class="notification-text">6 hrs ago</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between read-notification cursor-pointer">
                                    <div class="media d-flex align-items-center">
                                        <div class="media-left pr-0">
                                            <div class="avatar mr-1 m-0"><div class="avatar bg-warning mr-1">
                                                    <div class="avatar-content">
                                                        W
                                                    </div>
                                                </div></div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading"><span class="text-bold-500">New file</span> has been uploaded</h6><small class="notification-text">4 hrs ago</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between cursor-pointer">
                                    <div class="media d-flex align-items-center">
                                        <div class="media-left pr-0">
                                            <div class="avatar bg-rgba-danger m-0 mr-1 p-25">
                                                <div class="avatar-content"><i class="bx bx-detail text-danger"></i></div>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading"><span class="text-bold-500">Finance report</span> has been generated</h6><small class="notification-text">25 hrs ago</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between cursor-pointer">
                                    <div class="media d-flex align-items-center border-0">
                                        <div class="media-left pr-0">
                                            <div class="avatar mr-1 m-0">
                                                <div class="avatar bg-warning mr-1">
                                                    <div class="avatar-content">
                                                        W
                                                    </div>
                                                </div></div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading"><span class="text-bold-500">New customer</span> comment recieved</h6><small class="notification-text">2 days ago</small>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown-menu-footer"><a class="dropdown-item p-50 text-primary justify-content-center" href="javascript:void(0)">Read all notifications</a></li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">

                            <div class="avatar">
                                <img   src="../images/member.jpg" alt="avatar" class="main-img round" width="40" height="40">
                                <span class="avatar-status-online"></span>
                            </div> 


                        </a>
                        <div class="dropdown-menu dropdown-menu-right pb-0">
                            <a class="dropdown-item" href="page-user-profile.html"><i class="bx bx-crosshair   mr-50"></i> My Dashboard</a>
                            <a class="dropdown-item" href="profile.php"><i class="bx bx-user mr-50"></i> Edit Profile</a>
                            <a class="dropdown-item" href="app-email.html"><i class="bx bx-envelope mr-50"></i> Booking</a>
                            <a class="dropdown-item" href="app-todo.html"><i class="bx bx-check-square mr-50"></i> My Reviews</a><a class="dropdown-item" href="app-chat.html"><i class="bx bx-message mr-50"></i> Settings</a>
                            <div class="dropdown-divider mb-0"></div><a class="dropdown-item" href="log-out.php"><i class="bx bx-power-off mr-50"></i> Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- END: Header-->


<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header  " style="margin-bottom: 30px">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <a class="navbar-brand" href="index.php">
                    <img src="app-assets/images/logo.png" width="100%">
                </a >
            </li> 
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="lines">

            <li class=" nav-item p-a-15" style="margin-top: 20px;"> 
                <a href="index.php">  
                    <span class="bx bx-crosshair">    Dashboard</span>   
                </a> 

            </li>

            <li class=" nav-item  p-a-15">                                                                                                                                             
                <a href="create-slider.php">  <span class="bx  bxs-image   ">    Slider</span>  </a>

            </li>



            <li class=" nav-item p-a-15 ">                                                                                                                                             
                <a href="#"> <span class="bx  bxs-bookmark   "> Offers</span>   </a>
                <ul class="menu-content">
                    <li ><a href="create-offer-duration.php"><i class="bx bx-right-arrow-alt"></i> Offer Duration </a>
                    </li>
                    <li><a href="create-offer.php"><i class="bx bx-right-arrow-alt"></i>  Add Offers </a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item p-a-15 ">                                                                                                                                             
                <a href="#"> <span class="bx bx-user-check"> Manage Customers</span>   </a>
                <ul class="menu-content">
                    <li ><a href="manage-active-customers.php"><i class="bx bx-right-arrow-alt"></i> Active Customers  </a> </li>
                    <li><a href="manage-inactive-customers.php"><i class="bx bx-right-arrow-alt"></i>  InActive Customers </a> </li>
                    <li><a href="manage-all-customers.php"><i class="bx bx-right-arrow-alt"></i>  All Customers </a> </li>
                </ul>
            </li>
            <li class=" nav-item p-a-15 ">                                                                                                                                             
                <a href="#"> <span class="bx bx-user-circle"> Manage Visitors</span>   </a>
                <ul class="menu-content">
                    <li ><a href="manage-active-visitors.php"><i class="bx bx-right-arrow-alt"></i> Active Visitors  </a> </li>
                    <li><a href="manage-inactive-visitor.php"><i class="bx bx-right-arrow-alt"></i>  InActive Visitors </a> </li>
                    <li><a href="manage-all-visitor.php"><i class="bx bx-right-arrow-alt"></i>  All Visitors </a> </li>
                </ul>
            </li>
            <li class=" nav-item p-a-15 ">                                                                                                                                             
                <a href="#"> <span class="bx bx-building-house "> Accommodation</span>   </a>
                <ul class="menu-content">
                    <li ><a href="manage-active-accommodation.php"><i class="bx bx-right-arrow-alt"></i>Active Accommodation </a> </li>
                    <li><a href="manage-inactive-accommodation.php"><i class="bx bx-right-arrow-alt"></i> Inactive Accommodation </a> </li>
                    <li><a href="manage-all-accommodation.php"><i class="bx bx-right-arrow-alt"></i> All Accommodation </a> </li>
                    <li><a href="create-accommodation-type.php"><i class="bx bx-right-arrow-alt"></i>   Types</a> </li>
                    <li><a href="create-accommodation-facility.php"><i class="bx bx-right-arrow-alt"></i>   Facilities</a> </li>
                    <li><a href="create-room-type.php"><i class="bx bx-right-arrow-alt"></i>   Room Type</a> </li>
                    <li><a href="create-amenities-type.php"><i class="bx bx-right-arrow-alt"></i>  Amenities Type</a> </li>
                </ul>
            </li>
            <li class=" nav-item p-a-15 ">                                                                                                                                             
                <a href="#"> <span class="bx bxs-taxi"> Rent a car</span>   </a>
                <ul class="menu-content">
                    <li ><a href="manage-active-rent-car-company.php"><i class="bx bx-right-arrow-alt"></i> Active  Companies </a> </li>
                    <li ><a href="manage-inactive-rent-car-company.php"><i class="bx bx-right-arrow-alt"></i> Inactive Companies </a> </li>
                    <li ><a href="manage-all-rent-car-company.php"><i class="bx bx-right-arrow-alt"></i> All Companies </a> </li>
                    <li ><a href="create-rent-car-features.php"><i class="bx bx-right-arrow-alt"></i> Car features </a> </li>
                    <li><a href="create-vehicle-type.php"><i class="bx bx-right-arrow-alt"></i> Vehicle Type </a> </li>
                    <li><a href="create-vehicle-brand.php"><i class="bx bx-right-arrow-alt"></i>   Vehicle Brands</a> </li> 
                </ul>
            </li>
             <li class=" nav-item p-a-15 ">                                                                                                                                             
                <a href="#"> <span class="bx bx-run  "> Tour Companies </span>   </a>
                <ul class="menu-content">
                    <li ><a href="manage-active-tour-company.php"><i class="bx bx-right-arrow-alt"></i>Active Tour Companies </a> </li>
                    <li><a href="manage-inactive-tour-company.php"><i class="bx bx-right-arrow-alt"></i> Inactive Tour Companies </a> </li>
                    <li><a href="manage-all-tour-company.php"><i class="bx bx-right-arrow-alt"></i> All Tour Companies </a> </li>

                </ul>
            </li>
             <li class=" nav-item p-a-15 ">                                                                                                                                             
                <a href="#"> <span class="bx bx-run  "> Restaurant </span>   </a>
                <ul class="menu-content">
                    <li ><a href="manage-active-restaurant.php"><i class="bx bx-right-arrow-alt"></i>Active Restaurants </a> </li>
                    <li><a href="manage-inactive-restaurant.php"><i class="bx bx-right-arrow-alt"></i> Inactive Restaurants </a> </li>
                    <li><a href="manage-all-restaurant.php"><i class="bx bx-right-arrow-alt"></i> All Restaurants </a> </li>

                </ul>
            </li>
            <li class=" nav-item p-a-15 ">                                                                                                                                             
                <a href="#"> <span class="bx bx-analyse"> Service</span>   </a>
                <ul class="menu-content">
                    <li ><a href="create-services.php"><i class="bx bx-right-arrow-alt"></i> Add New </a> </li>
                    <li><a href="manage-service.php"><i class="bx bx-right-arrow-alt"></i> Manage  </a> </li>
                    <li><a href="arrange-services.php"><i class="bx bx-right-arrow-alt"></i>   Arrange</a> </li> 
                </ul>
            </li>
           
            <li class=" nav-item p-a-15"> 
                <a href="create-tour-type.php">  
                    <span class="bx bxs-direction-right"> Tour Types</span>   
                </a>  
            </li>
            <li class=" nav-item p-a-15 ">                                                                                                                                             
                <a href="#"> <span class="bx bxs-map-alt   "> Tour Packages </span>   </a>
                <ul class="menu-content">  
                    <li><a href="create-tour-package.php"><i class="bx bx-right-arrow-alt"></i>   Add New  </a> </li>
                    <li><a href="create-tour-type.php"><i class="bx bx-right-arrow-alt"></i>   Manage  </a> </li>
                  
                </ul>
            </li>
            <li class=" nav-item p-a-15 ">                                                                                                                                             
                <a href="#"> <span class="bx  bxs-sun   "> Activity </span>   </a>
                <ul class="menu-content">  
                    <li><a href="create-activity.php"><i class="bx bx-right-arrow-alt"></i>   Add New  </a> </li>
                    <li><a href="manage-activity.php"><i class="bx bx-right-arrow-alt"></i>   Manage  </a> </li>
                    <li><a href="arrange-activity.php"><i class="bx bx-right-arrow-alt"></i>   Arrange  </a> </li>
                </ul>
            </li>
            <li class=" nav-item p-a-15 ">                                                                                                                                             
                <a href="#"> <span class="bx bx-map-pin"> Destination </span>   </a>
                <ul class="menu-content">  
                    <li><a href="create-destination.php"><i class="bx bx-right-arrow-alt"></i>   Add New  </a> </li>
                    <li><a href="manage-destination.php"><i class="bx bx-right-arrow-alt"></i>   Manage  </a> </li>
                    <li><a href="arrange-destination.php"><i class="bx bx-right-arrow-alt"></i>   Arrange  </a> </li>
                </ul>
            </li>
            <li class=" nav-item p-a-15 ">                                                                                                                                             
                <a href="#"> <span class="bx bxs-contact "> Blog </span>   </a>
                <ul class="menu-content">  
                    <li><a href="create-blog.php"><i class="bx bx-right-arrow-alt"></i>   Add New  </a> </li>
                    <li><a href="#"><i class="bx bx-right-arrow-alt"></i>   Manage  </a> </li>
                    <li><a href="#"><i class="bx bx-right-arrow-alt"></i>   Arrange </a> </li>
                </ul>
            </li>
           
            <li class=" nav-item p-a-15"> 
                <a href="create-comment.php">  
                    <span class="bx  bx-user-pin "> Comment</span>   
                </a> 

            </li>
            <li class=" nav-item p-a-15"> 
                <a href="create-pages.php">  
                    <span class="bx   bx-add-to-queue  "> Pages</span>   
                </a> 

            </li>
            <li class=" nav-item p-a-15"> 
                <a href="manage-district.php">  
                    <span class="bx  bx-compass  "> Districts</span>   
                </a> 

            </li>


            <li class=" nav-item  p-a-15">                                                                                                                                             
                <a href="manage-invoices.php"><span class="bx bx-calendar-event  "> <span class="menu-title" data-i18n="Dashboard">My Bookings</span>    <span class="badge badge-danger badge-pill badge-round">2</span>   </a>
                 
            </li>
<!--            <li class=" nav-item p-a-15"> 
                <a href="view-booking-calendar.php">  
                    <span class="bx bx-calendar  "> Booking Calendar</span>   
                </a> 

            </li>-->
            <li class=" nav-item p-a-15"> 
<!--                <a href="create-messenger.php">  
                    <span class="bx bx-comment-dots  "> Messenger</span>   
                </a> -->

            </li>
        </ul>
    </div>
</div>