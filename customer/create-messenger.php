<!DOCTYPE html>
<?php
include '../class/include.php';
include './auth.php';

$id = '';
$visitor = '';

if ($_SESSION['id']) {
    $id = $_SESSION['id'];
    $CUSTOMERS = new Customer($id);
}

if (isset($_GET['id'])) {
    $visitor = $_GET['id'];
    $VISITOR = new Visitor($visitor);
}
?>
<html class="loading" lang="en" data-textdirection="ltr">
    <!-- BEGIN: Head-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Frest admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Frest admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="MyTravelPartner.lk">
        <title>Messenger -  MyTravelPartner.lk</title>
        <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
        <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
        <!-- END: Vendor CSS-->

        <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/colors.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/components.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.min.css">
        <!-- END: Theme CSS-->

        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/pages/app-chat.min.css">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <!-- END: Custom CSS-->
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    </head>
    <!-- END: Head-->

    <!-- BEGIN: Body-->
    <body class="vertical-layout vertical-menu-modern semi-dark-layout content-left-sidebar chat-application navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="content-left-sidebar" data-layout="semi-dark-layout">

        <!-- BEGIN: Header-->
        <div class="header-navbar-shadow"></div>
        <?php include './header.php'; ?>
        <!-- END: Header-->



        <!-- BEGIN: Content-->
        <div class="app-content content">
            <div class="content-area-wrapper">
                <div class="sidebar-left">
                    <div class="sidebar"><!-- app chat user profile left sidebar start -->

                        <!-- app chat sidebar start -->
                        <div class="chat-sidebar card">
                            <span class="chat-sidebar-close">
                                <i class="bx bx-x"></i>
                            </span>
                            <div class="chat-sidebar-search">
                                <div class="d-flex align-items-center">
                                    <div class="chat-sidebar-profile-toggle">
                                        <div class="avatar">
                                            <?php
                                            if (empty($CUSTOMERS->image_name)) {
                                                ?>
                                                <img src="../images/member.jpg" alt="<?php echo $CUSTOMERS->full_name ?>" height="36" width="36">


                                            <?php } else { ?>
                                                <img src="../upload/customer/profile/<?php echo $CUSTOMERS->image_name ?>" alt="<?php echo $CUSTOMERS->full_name ?>" height="36" width="36">

                                            <?php } ?>
                                        </div>
                                    </div>
                                    <fieldset class="form-group position-relative has-icon-left mx-75 mb-0">
                                        <input type="text" class="form-control round" id="chat-search" placeholder="Search">
                                        <div class="form-control-position">
                                            <i class="bx bx-search-alt text-dark"></i>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="chat-sidebar-list-wrapper pt-2">

                                <ul class="chat-sidebar-list">
                                    <?php
                                    $allparticipants = VisitorMessage::getDistinctVisitor($CUSTOMERS->id);
                                    if ($allparticipants) {
                                        $maxids = array();
                                        foreach ($allparticipants as $participant) {
                                            $result = VisitorMessage::getLatestChatId($CUSTOMERS->id, $participant['visitor']);
                                            array_push($maxids, $result['id']);
                                        }
                                        rsort($maxids);
                                        foreach ($maxids as $maxid) {
                                            $MSG = new VisitorMessage($maxid);
                                            $VISI = new Visitor($MSG->visitor);
                                            ?>
                                            <li  visitor="<?php echo $VISI->id ?>" customer="<?php echo $CUSTOMERS->id; ?>" class="data chat-participant">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar m-0 mr-50">
                                                        <?php
                                                        if (empty($VISI->image_name)) {
                                                            ?>
                                                            <img src="../images/member.jpg" height="36"   width="36" alt="<?php echo $VISITOR->full_name ?>">
                                                        <?php } else { ?>
                                                            <img src="../upload/visitor/profile/<?php echo $VISI->image_name ?>" height="36"   width="36" alt="<?php echo $VISI->full_name ?>">
                                                            <?php
                                                        }

                                                        if (Helper::checkIsOnline($VISI->lastLogin)) {
                                                            ?>
                                                            <span class="avatar-status-online"></span>
                                                        <?php } else { ?>
                                                            <span class="avatar-status-away"></span>
                                                        <?php } ?>
                                                    </div>
                                                    <div class="chat-sidebar-name">
                                                        <h6 class="mb-0"><?php echo $VISI->full_name ?></h6><span class="text-muted"><?php echo date_format(date_create($VISI->lastLogin), "M/d - h:i A") ?></span>
                                                    </div>
                                                </div>
                                            </li>  
                                            <?php
                                        }
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>  
                    </div>
                </div>
                <div class="content-right">
                    <div class="content-overlay"></div>
                    <div class="content-wrapper">
                        <div class="content-header row">
                        </div>
                        <div class="content-body"><!-- app chat overlay -->
                            <div class="chat-overlay"></div>
                            <!-- app chat window start -->
                            <section class="chat-window-wrapper">
                                <div class="chat-start " id="chat-start" style="display: none">
                                    <span class="bx bx-message chat-sidebar-toggle chat-start-icon font-large-3 p-3 mb-1"></span>
                                    <h4 class="d-none d-lg-block py-50 text-bold-500">Select a contact to start a chat!</h4>
                                    <button class="btn btn-light-primary chat-start-text chat-sidebar-toggle d-block d-lg-none py-50 px-1">Start
                                        Conversation!</button>
                                </div>
                                <?php
                                $allparticipants = VisitorMessage::getDistinctVisitor($CUSTOMERS->id);

                                if ($allparticipants) {
                                    foreach ($allparticipants as $participant) {
                                        $VISITORS = new Visitor($participant['visitor']);
                                        ?>
                                        <div class="chat-area  " id="div<?php echo $VISITORS->id ?>">
                                            <div class="chat-header">
                                                <header class="d-flex justify-content-between align-items-center border-bottom px-1 py-75">
                                                    <div class="d-flex align-items-center">
                                                        <div class="chat-sidebar-toggle d-block d-lg-none mr-1"><i class="bx bx-menu font-large-1 cursor-pointer"></i>
                                                        </div>
                                                        <div class="avatar chat-profile-toggle m-0 mr-1">
                                                            <?php
                                                            if (empty($VISITORS->image_name)) {
                                                                ?>
                                                                <img src="../images/member.jpg" height="36"   width="36" alt="<?php echo $VISITORS->full_name ?>">
                                                            <?php } else { ?>
                                                                <img src="../upload/visitor/profile/<?php echo $VISITORS->image_name ?>" height="36"   width="36" alt="<?php echo $VISITORS->full_name ?>">
                                                            <?php }
                                                            ?>
                                                            <span class="avatar-status-busy"></span>
                                                        </div>
                                                        <h6 class="mb-0 chat-visitor-name"><?php echo $VISITORS->full_name ?></h6>
                                                    </div>
                                                    <div class="chat-header-icons">
                                                        <span class="chat-icon-favorite">
                                                            <i class="bx bx-star font-medium-5 cursor-pointer"></i>
                                                        </span>
                                                        <span class="dropdown">
                                                            <i class="bx bx-dots-vertical-rounded font-medium-4 ml-25 cursor-pointer dropdown-toggle nav-hide-arrow cursor-pointer"
                                                               id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                            </i>
                                                            <span class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">                                                        
                                                                <a class="dropdown-item" href="JavaScript:void(0);"><i class="bx bx-trash mr-25"></i> Delete chat</a>                                                        
                                                            </span>
                                                        </span>
                                                    </div>
                                                </header>
                                            </div>
                                            <!-- chat card start -->
                                            <div class="chat-wrapper shadow-none">
                                                <div class="card-content">
                                                    <div class="card-body chat-container" id="div<?php echo $VISITORS->id ?>">
                                                        <div class="chat-content " id="chat-list">
                                                            <div class="chat">

                                                                <div class="chat-body" id="chat-body">

                                                                </div>
                                                            </div>


                                                        </div>

                                                        <span id="type<?php echo $VISITORS->id ?>" class="empty-chat"></span>

                                                    </div>
                                                </div>
                                                <div class="card-footer chat-footer border-top px-2 pt-1 pb-0 mb-1">

                                                    <form class="d-flex align-items-center" onsubmit="chatMessagesSend();" action="javascript:void(0);">
                                                        <input type="hidden" value="<?php echo $CUSTOMERS->id ?>" id="customer">
                                                        <input type="hidden" value="<?php echo $visitor; ?>" id="visitor">
                                                        <input type="text" class="form-control chat-message-send mx-1 place-emj chat_message" placeholder="Type your message here...">
                                                        <button type="submit" class="btn btn-primary glow send d-lg-flex"><i class="bx bx-paper-plane"></i>
                                                            <span class="d-none d-lg-block ml-1">Send</span></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                }
                                ?>
                            </section>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include './footer.php'; ?>
        <!-- BEGIN: Vendor JS-->
        <script src="app-assets/vendors/js/vendors.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
        <script src="js/inputEmoji.js" type="text/javascript"></script>
        <!-- END: Page Vendor JS-->

        <!-- BEGIN: Theme JS-->
        <script src="app-assets/js/scripts/configs/vertical-menu-dark.min.js"></script>
        <script src="app-assets/js/core/app-menu.min.js"></script>
        <script src="app-assets/js/core/app.min.js"></script>
        <script src="app-assets/js/scripts/components.min.js"></script>
        <script src="app-assets/js/scripts/footer.min.js"></script>
        <script src="app-assets/js/scripts/customizer.min.js"></script>
        <!-- END: Theme JS-->
        <script src="../js/jquery-2.2.4.min.js" type="text/javascript"></script>
        <script src="js/ajax/chat.js" type="text/javascript"></script>
        <script src="app-assets/js/scripts/pages/app-chat.min.js"></script>
        <script src="js/inputEmoji.js" type="text/javascript"></script>
        <script>
                                                $(function () {

                                                    $('.place-emj').emoji({place: 'before'});
                                                })
        </script>
        <script>

            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-36251023-1']);
            _gaq.push(['_setDomainName', 'jqueryscript.net']);
            _gaq.push(['_trackPageview']);

            (function () {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();

        </script>

    </body>
    <!-- END: Body-->
</html>
