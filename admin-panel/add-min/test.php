<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from radixtouch.in/templates/templatemonster/spinzhr/source/light/pages/forms/advanced-form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Oct 2018 01:06:44 GMT -->
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>SpinzHR - Human Resource Management Admin Template</title>

    <!-- Favicon-->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- Colorpicker Css -->
    <link href="assets/js/bundles/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.css" rel="stylesheet" />

    <!-- Multi Select Css -->
    <link href="assets/js/bundles/multiselect/css/multi-select.css" rel="stylesheet">

    <!-- Plugins Core Css -->
    <link href="assets/css/app.min.css" rel="stylesheet">
    <link href="assets/css/form.min.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- You can choose a theme from css/styles instead of get all themes -->
    <link href="assets/css/styles/all-themes.css" rel="stylesheet" />
</head>

<body>
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30">
                <img class="loading-img-spin" src="assets/images/loading.png" width="20" height="20" alt="admin">
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->

 
    <div>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="sidebar-user-panel active">
                        <div class="user-panel">
                            <div class=" image">
                                <img src="assets/images/usrbig.jpg" class="img-circle user-img-circle" alt="User Image" />
                            </div>
                        </div>
                        <div class="profile-usertitle">
                            <div class="sidebar-userpic-name"> John Deo </div>
                            <div class="profile-usertitle-job ">HR Manager </div>
                        </div>
                        <div class="sidebar-userpic-btn">
                            <a class="tooltips" href="../examples/profile.html" data-toggle="tooltip" title="Profile">
                                <i class="far fa-user sidebarQuickIcon"></i>
                            </a>
                            <a class="tooltips" href="../email/inbox.html" data-toggle="tooltip" title="Mail">
                                <i class="far fa-envelope sidebarQuickIcon"></i>
                            </a>
                            <a class="tooltips" href="../apps/chat.html" data-toggle="tooltip" title="Chat">
                                <i class="far fa-comment-alt sidebarQuickIcon"></i>
                            </a>
                            <a class="tooltips" href="../examples/sign-in.html" data-toggle="tooltip" title="Logout">
                                <i class="fas fa-sign-out-alt sidebarQuickIcon"></i>
                            </a>
                        </div>
                    </li>
                    <li class="header">-- Main</li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fas fa-tachometer-alt"></i>
                            <span>Home</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="index.html">Dashboard 1</a>
                            </li>
                            <li>
                                <a href="../dashboard/dashboard2.html">Dashboard 2</a>
                            </li>
                            <li>
                                <a href="../dashboard/dashboard3.html">Dashboard 3</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="../apps/calendar.html">
                            <i class="far fa-calendar"></i>
                            <span>Events</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fas fa-user-tie"></i>
                            <span>Employees</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../employee/all-employees.html">All Employee</a>
                            </li>
                            <li>
                                <a href="../employee/add-employee.html">Add Employee</a>
                            </li>
                            <li>
                                <a href="../employee/edit-employee.html">Edit Employee</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fas fa-clipboard-list"></i>
                            <span>Projects</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../projects/all-projects.html">All Projects</a>
                            </li>
                            <li>
                                <a href="../projects/add-project.html">Add Project</a>
                            </li>
                            <li>
                                <a href="../projects/edit-project.html">Edit Project</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fas fa-user-alt"></i>
                            <span>Clients</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../clients/all-clients.html">All Clients</a>
                            </li>
                            <li>
                                <a href="../clients/add-client.html">Add Client</a>
                            </li>
                            <li>
                                <a href="../clients/edit-client.html">Edit Client</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fab fa-wpforms"></i>
                            <span>Leave Applications</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../leave/all-leave.html">All Leave Request</a>
                            </li>
                            <li>
                                <a href="../leave/add-leave.html">New Leave Request</a>
                            </li>
                            <li>
                                <a href="../leave/edit-leave.html">Edit Leave Request</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fas fa-bed"></i>
                            <span>Holidays</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../holiday/all-holidays.html">All Holidays</a>
                            </li>
                            <li>
                                <a href="../holiday/add-holiday.html">Add Holiday</a>
                            </li>
                            <li>
                                <a href="../holiday/edit-holiday.html">Edit Holiday</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fas fa-book"></i>
                            <span>Accounts</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../accounts/income.html">Income</a>
                            </li>
                            <li>
                                <a href="../accounts/expense.html">Expenses</a>
                            </li>
                            <li>
                                <a href="../accounts/invoice.html">Invoices</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fas fa-sitemap"></i>
                            <span>Departments</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../departments/all-departments.html">All Departments</a>
                            </li>
                            <li>
                                <a href="../departments/add-department.html">Add Department</a>
                            </li>
                            <li>
                                <a href="../departments/edit-department.html">Edit Departments</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="far fa-id-card"></i>
                            <span>Payroll</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../payroll/payslip.html">Payslip</a>
                            </li>
                            <li>
                                <a href="../payroll/employee-salary.html">Employee Salary</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fas fa-landmark"></i>
                            <span>Consultancy</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../consultancy/all-consultancy.html">All Consultancy</a>
                            </li>
                            <li>
                                <a href="../consultancy/add-consultancy.html">Add Consultancy</a>
                            </li>
                            <li>
                                <a href="../consultancy/edit-consultancy.html">Edit Consultancy</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fas fa-mail-bulk"></i>
                            <span>Email</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../email/inbox.html">Inbox</a>
                            </li>
                            <li>
                                <a href="../email/compose.html">Compose</a>
                            </li>
                            <li>
                                <a href="../email/view-mail.html">Read Email</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fab fa-google-play"></i>
                            <span>Apps</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../apps/chat.html">Chat</a>
                            </li>
                            <li>
                                <a href="../apps/contact_list.html">Contact List</a>
                            </li>
                            <li>
                                <a href="../apps/contact_grid.html">Contact Grid</a>
                            </li>
                            <li>
                                <a href="../apps/support.html">Support</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="../widgets/widget.html">
                            <i class="fas fa-braille"></i>
                            <span>Widgets</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fas fa-drafting-compass"></i>
                            <span>User Interface (UI)</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../ui/alerts.html">Alerts</a>
                            </li>
                            <li>
                                <a href="../ui/animations.html">Animations</a>
                            </li>
                            <li>
                                <a href="../ui/badges.html">Badges</a>
                            </li>


                            <li>
                                <a href="../ui/buttons.html">Buttons</a>
                            </li>
                            <li>
                                <a href="../ui/collapse.html">Collapse</a>
                            </li>
                            <li>
                                <a href="../ui/dialogs.html">Dialogs</a>
                            </li>
                            <li>
                                <a href="../ui/cards.html">Cards</a>
                            </li>
                            <li>
                                <a href="../ui/icons.html">Icons</a>
                            </li>
                            <li>
                                <a href="../ui/labels.html">Labels</a>
                            </li>
                            <li>
                                <a href="../ui/list-group.html">List Group</a>
                            </li>
                            <li>
                                <a href="../ui/media-object.html">Media Object</a>
                            </li>
                            <li>
                                <a href="../ui/notifications.html">Notifications</a>
                            </li>
                            <li>
                                <a href="../ui/preloaders.html">Preloaders</a>
                            </li>
                            <li>
                                <a href="../ui/progressbars.html">Progress Bars</a>
                            </li>
                            <li>
                                <a href="../ui/range-sliders.html">Range Sliders</a>
                            </li>
                            <li>
                                <a href="../ui/sortable-nestable.html">Sortable &amp; Nestable</a>
                            </li>
                            <li>
                                <a href="../ui/tabs.html">Tabs</a>
                            </li>
                            <li>
                                <a href="../ui/waves.html">Waves</a>
                            </li>
                            <li>
                                <a href="../ui/typography.html">Typography</a>
                            </li>
                            <li>
                                <a href="../ui/helper-classes.html">Helper Classes</a>
                            </li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fab fa-wpforms"></i>
                            <span>Forms</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="basic-form-elements.html">Basic Form Elements</a>
                            </li>
                            <li class="active">
                                <a href="advanced-form-elements.html">Advanced Form Elements</a>
                            </li>
                            <li>
                                <a href="form-examples.html">Form Examples</a>
                            </li>
                            <li>
                                <a href="form-validation.html">Form Validation</a>
                            </li>
                            <li>
                                <a href="form-wizard.html">Form Wizard</a>
                            </li>
                            <li>
                                <a href="editors.html">Editors</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fas fa-table"></i>
                            <span>Tables</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../tables/normal-tables.html">Normal Tables</a>
                            </li>
                            <li>
                                <a href="../tables/jquery-datatable.html">Advance Datatables</a>
                            </li>
                            <li>
                                <a href="../tables/group-table.html">Grouping</a>
                            </li>
                            <li>
                                <a href="../tables/editable-table.html">Editable Tables</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="far fa-images"></i>
                            <span>Medias</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../medias/image-gallery.html">Image Gallery</a>
                            </li>
                            <li>
                                <a href="../medias/carousel.html">Carousel</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fas fa-chart-line"></i>
                            <span>Charts</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../charts/morris.html">Morris</a>
                            </li>
                            <li>
                                <a href="../charts/flot.html">Flot</a>
                            </li>
                            <li>
                                <a href="../charts/chartjs.html">ChartJS</a>
                            </li>
                            <li>
                                <a href="../charts/sparkline.html">Sparkline</a>
                            </li>
                            <li>
                                <a href="../charts/jquery-knob.html">Jquery Knob</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="far fa-file-alt"></i>
                            <span>Example Pages</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../examples/timeline.html">Timeline</a>
                            </li>
                            <li>
                                <a href="../examples/sign-in.html">Sign In</a>
                            </li>
                            <li>
                                <a href="../examples/sign-up.html">Sign Up</a>
                            </li>
                            <li>
                                <a href="../examples/forgot-password.html">Forgot Password</a>
                            </li>
                            <li>
                                <a href="../examples/profile.html">Profile</a>
                            </li>
                            <li>
                                <a href="../examples/pricing.html">Pricing</a>
                            </li>
                            <li>
                                <a href="../examples/invoice.html">Invoice</a>
                            </li>
                            <li>
                                <a href="../examples/faqs.html">Faqs</a>
                            </li>
                            <li>
                                <a href="../examples/blank.html">Blank Page</a>
                            </li>
                            <li>
                                <a href="../examples/locked.html">Locked</a>
                            </li>
                            <li>
                                <a href="../examples/404.html">404 - Not Found</a>
                            </li>
                            <li>
                                <a href="../examples/500.html">500 - Server Error</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fas fa-globe-americas"></i>
                            <span>Maps</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../maps/google.html">Google Map</a>
                            </li>
                            <li>
                                <a href="../maps/jqvmap.html">Vector Map</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fas fa-angle-double-down"></i>
                            <span>Multi Level Menu</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="javascript:void(0);">
                                    <span>Menu Item</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <span>Menu Item - 2</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Level - 2</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <span>Menu Item</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="menu-toggle">
                                            <span>Level - 3</span>
                                        </a>
                                        <ul class="ml-menu">
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <span>Level - 4</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
         
    </div>

    <section class="content">
        <div class="container-fluid">
          
       
            <!-- Advanced Select -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Advance</strong> Select</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="javascript:void(0);">Action</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Another action</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Something else here</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-md-3">
                                    <p>
                                        <b>Basic</b>
                                    </p>
                                    <div class="form-group">
                                        <select class="col-10">
                                            <option value="">select</option>
                                            <option value="10">10</option>
                                            <option value="20">20</option>
                                            <option value="30">30</option>
                                            <option value="40">40</option>
                                            <option value="50">50</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <p>
                                        <b>With OptGroups</b>
                                    </p>
                                    <select class="form-group col-10">
                                        <optgroup label="Picnic">
                                            <option>Mustard</option>
                                            <option>Ketchup</option>
                                            <option>Relish</option>
                                        </optgroup>
                                        <optgroup label="Camping">
                                            <option>Tent</option>
                                            <option>Flashlight</option>
                                            <option>Toilet Paper</option>
                                        </optgroup>
                                    </select>

                                </div>
                                <div class="col-md-3">
                                    <p>
                                        <b>Multiple Select</b>
                                    </p>
                                    <select class="form-group col-10" multiple>
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                    </select>

                                </div>
                                <div class="col-md-3">
                                    <p>
                                        <b>With Search Bar</b>
                                    </p>
                                    <select class="form-group col-10" data-live-search="true">
                                        <option>Hot Dog, Fries and a Soda</option>
                                        <option>Burger, Shake and a Smile</option>
                                        <option>Sugar, Spice and all things nice</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-3">
                                    <p>
                                        <b>Max Selection Limit: 2</b>
                                    </p>
                                    <select class="form-group col-10" multiple>
                                        <optgroup label="Condiments" data-max-options="2">
                                            <option>Mustard</option>
                                            <option>Ketchup</option>
                                            <option>Relish</option>
                                        </optgroup>
                                        <optgroup label="Breads" data-max-options="2">
                                            <option>Plain</option>
                                            <option>Steamed</option>
                                            <option>Toasted</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <p>
                                        <b>Display Count</b>
                                    </p>
                                    <select class="form-group col-10" multiple data-selected-text-format="count">
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                        <option>Onions</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <p>
                                        <b>With SubText</b>
                                    </p>
                                    <select class="form-group col-10" data-show-subtext="true">
                                        <option data-subtext="French's">Mustard</option>
                                        <option data-subtext="Heinz">Ketchup</option>
                                        <option data-subtext="Sweet">Relish</option>
                                        <option data-subtext="Miracle Whip">Mayonnaise</option>
                                        <option data-subtext="Honey">Barbecue Sauce</option>
                                        <option data-subtext="Ranch">Salad Dressing</option>
                                        <option data-subtext="Sweet &amp; Spicy">Tabasco</option>
                                        <option data-subtext="Chunky">Salsa</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <p>
                                        <b>Disabled Option</b>
                                    </p>
                                    <select class="form-group col-10">
                                        <option>Mustard</option>
                                        <option disabled>Ketchup</option>
                                        <option>Relish</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Advanced Select -->
        </div>
    </section>




    <!-- Plugins Js -->

    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/form.min.js"></script>

    <script src="assets/js/bundles/multiselect/js/jquery.multi-select.js"></script>
    <script src="assets/js/bundles/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.js"></script>

    <!-- Custom Js -->
    <script src="assets/js/admin.js"></script>
    <script src="assets/js/pages/forms/advanced-form-elements.js"></script>

    <!-- Demo Js -->
    <script src="assets/js/demo.js"></script>
</body>


<!-- Mirrored from radixtouch.in/templates/templatemonster/spinzhr/source/light/pages/forms/advanced-form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Oct 2018 01:06:48 GMT -->
</html>