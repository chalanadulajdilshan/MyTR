<?php
include_once(dirname(__FILE__) . '/auth.php');
$id = '';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$USER = new User(1);
?>
<aside id="leftsidebar" class="sidebar">
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="sidebar-user-panel active">
                <div class="user-panel">
                    <div class=" image">
                        <img src="../upload/user/<?php echo $USER->image_name ?>" class="img-circle user-img-circle" alt="User Image" />
                    </div>
                </div>
                <div class="profile-usertitle">
                    <div class="sidebar-userpic-name"><?php echo $USER->name ?> </div>
                    <div class="profile-usertitle-job ">Administrator </div>
                </div>
                <div class="sidebar-userpic-btn">
                    <a class="tooltips" href="profile.php" data-toggle="tooltip" title="Profile">
                        <i class="far fa-user sidebarQuickIcon"></i>
                    </a>
                    <a class="tooltips" href="index.php" data-toggle="tooltip" title="Dashboard">
                        <i class="fas fa-tachometer-alt sidebarQuickIcon"></i>
                    </a>
                    <a class="tooltips" href="pages/apps/chat.html" data-toggle="tooltip" title="Chat">
                        <i class="far fa-comment-alt sidebarQuickIcon"></i>
                    </a>
                    <a class="tooltips" href="post-and-get/log-out.php" data-toggle="tooltip" title="Logout">
                        <i class="fas fa-sign-out-alt sidebarQuickIcon"></i>
                    </a>
                </div>
            </li>

            <li class="header"></li>
            <li class="active">
                <a href="index.php">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>

            </li>
            <li>
                <a href="create-slider.php">
                    <i class="far fa-images"></i>
                    <span>Slider</span>
                </a>
            </li>
            <li  >
                <a href="create-banner.php"  >
                    <i class="material-icons">announcement</i> 
                    <span>Banners</span>
                </a>                 
            </li>
            <li>
                <a href="create-pages.php"  >
                    <i class="material-icons">description</i> 
                    <span>Pages</span>
                </a>                 
            </li>

            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">people</i> 
                    <span>Manage Customers</span>
                </a>
                <ul class="ml-menu">

                    <li>
                        <a href="manage-active-customers.php">  Active Customers</a>
                    </li>
                    <li>
                        <a href="manage-inactive-customers.php">  InActive Customers</a>
                    </li>
                    <li>
                        <a href="manage-customers.php">All Customers</a>
                    </li>


                </ul>
            </li> 
            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">mood</i> 
                    <span>Manage Visitors</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="manage-visitors.php">All Visitors</a>
                    </li>
                    <li>


                </ul>
            </li> 
            <li class="hidden "  >
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">business</i> 
                    <span>Accommodation</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="manage-active-accommodation.php">Active Accommodation</a>
                    </li>
                    <li>
                        <a href="manage-inactive-accommodation.php">Inactive Accommodation</a>
                    </li>
                    <li>
                        <a href="create-accommodation-type.php">Accommodation Type</a>
                    </li>
                    <li>
                        <a href="create-facility.php">Facility</a>
                    </li>

                    <li>
                        <a href="create-room-type.php">Room Type</a>
                    </li>
                    <li>
                        <a href="create-amenities-type.php">Amenities Type</a>
                    </li>

                </ul>
            </li> 



            <li class="hidden "  >
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">local_taxi</i> 
                    <span>Rent a car</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="create-rent-car-features.php">Car features</a>
                    </li>
                    <li>
                        <a href="create-vehicle-type.php">Vehicle Type</a>
                    </li>

                    <li>
                        <a href="create-vehicle-brand.php">Vehicle Brands</a>
                    </li>
                   

                </ul>
            </li> 
            <li class="hidden "  >
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">beenhere</i> 
                    <span>Services</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="create-service.php">Add New</a>
                    </li>
                    <li>
                        <a href="manage-service.php">Manage</a>
                    </li>
                    <li>
                        <a href="arrange-services.php">Arrange</a>
                    </li>
                </ul>
            </li> 
            <li  >
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">add_location</i> 
                    <span>Tour Companies</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="create-product.php">Active Tour Companies</a>
                    </li>
                    <li>
                        <a href="manage-product.php">Inactive Tour Companies</a>
                    </li>
                    <li>
                        <a href="create-tour-type.php">Tour Types</a>
                    </li>
                    <li>
                        <a href="create-tour-package.php">Add New Tour Packages</a>
                    </li>
                    <li>
                        <a href="manage-tour-packages.php">Manage Tour Packages</a>
                    </li>
                    <li>
                        <a href="arrange-tour-packages.php">Arrange Tour Packages</a>
                    </li>

                </ul>
            </li>


            <li >
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">directions_run</i> 
                    <span>Activity</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="create-activity.php">Add New</a>
                    </li>
                    <li>
                        <a href="manage-activity.php">Manage</a>
                    </li>
                    <li>
                        <a href="arrange-activities.php">Arrange</a>
                    </li>
                </ul>
            </li> 
            <li class="hidden"  >
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">map</i> 
                    <span>Destination</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="create-destinations.php">Add New</a>
                    </li>
                    <li>
                        <a href="manage-destination.php">Manage</a>
                    </li>
                    <li>
                        <a href="arrange-destination.php">Arrange</a>
                    </li>
                </ul>
            </li> 
            <li >
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">rate_review</i> 
                    <span>Blog</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="create-blog.php">Add New</a>
                    </li>
                    <li>
                        <a href="manage-blog.php">Manage</a>
                    </li>
                    <li>
                        <a href="arrange-blog.php">Arrange</a>
                    </li>
                </ul>
            </li> 
            <li class="hidden" style="display: none;">
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">beenhere</i> 
                    <span>Room</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="create-activity.php">Add New</a>
                    </li>
                    <li>
                        <a href="manage-activity.php">Manage</a>
                    </li>
                    <li>
                        <a href="arrange-activity.php">Arrange</a>
                    </li>
                </ul>
            </li> 




            <li  >
                <a href="create-album-photo.php?id=1"  >
                    <i class="material-icons">perm_media</i> 
                    <span>  Gallery</span>
                </a>                 
            </li>

            <li class="hidden" style="display: none;">
                <a href="create-offer.php" >
                    <i class="material-icons">turned_in_not</i> 
                    <span>Offers</span>
                </a> 


            <li style="display: none;">
                <a href="javascript:void(0);" class="menu-toggle hidden" style="display: none;">
                    <i class="material-icons">chat</i> 
                    <span>Project</span>
                </a>
                <ul class="ml-menu" style="display: none;">
                    <li>
                        <a href="create-Project.php">Add New</a>
                    </li>
                    <li>
                        <a href="manage-project.php">Manage</a>
                    </li>
                    <li>
                        <a href="arrange-project.php">Arrange</a>
                    </li>
                </ul>
            </li>

            <li style="display: none;">
                <a href="javascript:void(0);" class="menu-toggle" style="display: none;">
                    <i class="material-icons">assignment</i> 
                    <span>Album</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="create-album.php">Add New</a>
                    </li>
                    <li>
                        <a href="manage-album.php">Manage</a>
                    </li>
                    <li>
                        <a href="arrange-album.php">Arrange</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">date_range</i> 
                    <span style="color: red">Bookings</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="create-album.php" style="color: green">Accommodation Bookings</a>
                    </li>
                    <li>
                        <a href="manage-album.php">Manage</a>
                    </li>
                    <li>
                        <a href="arrange-activity.php">Arrange</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="create-comment.php" class="menu-toggle">
                    <i class="material-icons">comment</i> 
                    <span>Comment</span>
                </a>

            </li> 

        </ul>
    </div>
    <!-- #Menu -->
</aside>