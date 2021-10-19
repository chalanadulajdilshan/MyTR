<!DOCTYPE html>
<?php
include '../class/include.php ';
date_default_timezone_set('Asia/Colombo');


$id = '';
$id = $_GET['id'];
$INVOICE = new Invoice(NULL);
$LAST_ID = $INVOICE->getCountByAccommodationId($id) + 1;
$ACCOMMODATION = new Accommodation($id);
$start_date = date("Y-m-d", strtotime("first day of this month"));
$end_date = date("Y-m-d", strtotime("last day of this month"));
?>
<html class="loading" lang="en" data-textdirection="ltr">
    <!-- BEGIN: Head-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Frest admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Frest admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="PIXINVENT">
        <title>Invoice for - <?php echo $ACCOMMODATION->title ?> - mytravelpartner.lk</title>
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
        <link rel="stylesheet" type="text/css" href="app-assets/css/pages/app-invoice.min.css">
        <!-- END: Page CSS-->

        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <!-- END: Custom CSS-->

    </head>
    <!-- END: Head-->

    <!-- BEGIN: Body-->
    <body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">

        <!-- BEGIN: Header-->
        <div class="header-navbar-shadow"></div>

        <?php include './header.php'; ?>
        <!-- END: Main Menu-->

        <!-- BEGIN: Content-->
        <div class="app-content content">
            <div class="content-overlay"></div>
            <div class="content-wrapper">
                <div class="content-header row">
                </div>
                <div class="content-body"><!-- app invoice View Page -->
                    <section class="invoice-view-wrapper">
                        <div class="row">
                            <!-- invoice view page -->
                            <div class="col-xl-9 col-md-8 col-12">
                                <div class="card invoice-print-area">
                                    <div class="card-content">
                                        <div class="card-body pb-0 mx-25">
                                            <!-- header section -->
                                            <div class="row">
                                                <div class="col-xl-4 col-md-12">
                                                    <span class="invoice-number mr-50">Invoice#</span>
                                                    <span><a href="#">INV-00<?php echo $LAST_ID ?></a></span>
                                                </div>
                                                <div class="col-xl-8 col-md-12">
                                                    <div class="d-flex align-items-center justify-content-xl-end flex-wrap">
                                                        <div class="mr-3">
                                                            <small class="text-muted">Start Date:</small>
                                                            <span><?php echo date("d/m/Y", strtotime("first day of this month")) ?></span>
                                                        </div>
                                                        <div>
                                                            <small class="text-muted">Due Date:</small>
                                                            <span><?php echo date("d/m/Y", strtotime("last day of this month")) ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- logo and title -->
                                            <div class="row my-3">
                                                <div class="col-8">
                                                    <h4 class="text-danger font-weight-bold" > INVOICE for Monthly Booking Commission </h4>
                                                    <span>Hikka fnr Villa</span>
                                                </div>
                                                <div class="col-4 d-flex justify-content-end">
                                                    <h1><em><span style="color: #5a8dee"><b>MyTravel</b></span><span style="color:#ffb71a"><b>Partner.lk</b></span></em></h1>
                                                </div>
                                            </div>
                                            <hr>
                                            <!-- invoice address and contact -->
                                            <div class="row invoice-info">
                                                <div class="col-6 mt-1">
                                                    <h6 class="invoice-from">Bill From</h6>
                                                    <div class="mb-1">
                                                        <span style="color: #5a8dee"><b>MyTravel</b></span><span style="color:#ffb71a"><b>Partner PVT. LTD.</b></span> 
                                                    </div>
                                                    <div class="mb-1">
                                                        <span>NO 03 Sri Dewamiththa Road, Galle 80000</span>
                                                    </div>
                                                    <div class="mb-1">
                                                        <span>support@mytravelpartner.lk</span>
                                                    </div>
                                                    <div class="mb-1">
                                                        <span>601-678-8022</span>
                                                    </div>
                                                </div>
                                                <div class="col-6 mt-1">
                                                    <h6 class="invoice-to">Bill To</h6>
                                                    <div class="mb-1">
                                                        <span><?php echo $ACCOMMODATION->title ?></span>
                                                    </div>
                                                    <div class="mb-1">
                                                        <span><?php
                                                            $CITY = new City($ACCOMMODATION->city);
                                                            echo $ACCOMMODATION->address_1 . ' ' . $ACCOMMODATION->address_2 . ', ' . $CITY->name . ' ' . $ACCOMMODATION->zip_code
                                                            ?> </span>
                                                    </div>
                                                    <div class="mb-1">
                                                        <span><?php echo $ACCOMMODATION->email ?></span>
                                                    </div>
                                                    <div class="mb-1">
                                                        <span><?php echo $ACCOMMODATION->mobile_number_1 ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <p class="text-left invoice-from font-weight-bold"><?php echo $ACCOMMODATION->invoice_name ?>,</p>
                                            <p class="text-justify">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book. It usually begins with: </p>
                                        </div>

                                        <div class="invoice-product-details table-responsive mx-md-25">

                                            <table class="table table-borderless mb-0">
                                                <thead>
                                                    <tr class="border-0">
                                                        <th scope="col">Booking Id</th>
                                                        <th scope="col">Room Name</th>
                                                        <th scope="col">Check In / Out</th>
                                                        <th scope="col">R / Price</th> 
                                                        <th scope="col" class="text-right">Total Price</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $HOTEL_BOOKING = new HotelBooking(NULL);
                                                    foreach ($HOTEL_BOOKING->getBookingdByAccIdAndDiffDate($id, $start_date, $end_date) as $hotel_booking) {
                                                        $ROOM = new Room($hotel_booking['room_id']);
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $hotel_booking['booking_id'] ?></td>
                                                            <td><?php echo $ROOM->title ?></td>
                                                            <td><?php
                                                                $check_in = new DateTime($hotel_booking['check_in']);
                                                                $check_out = new DateTime($hotel_booking['check_out']);
                                                                echo $check_in->format('m-d') . ' / ' . $check_out->format('m-d')
                                                                ?></td>
                                                            <td>
                                                                <?php
                                                                if ($ROOM->discount != 0) {
                                                                    $dis_count = ($ROOM->price * $ROOM->discount / 100);
                                                                    $dis_price = $ROOM->price - $dis_count;
                                                                    echo $dis_price;
                                                                } else {
                                                                    echo $ROOM->price;
                                                                }
                                                                ?>
                                                                x (<?php echo $hotel_booking['rooms'] ?>)</td>

                                                            <td class="text-primary text-right font-weight-bold">$<?php echo $hotel_booking['price'] ?></td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>


                                        <div class="card-body pt-0 mx-25 ">
                                            <hr>
                                            <div class="row">
                                                <div class="col-4 col-sm-6 mt-75">
                                                    <p>Thanks for your business.</p>
                                                </div>
                                                <div class="col-8 col-sm-6 d-flex justify-content-end mt-75">
                                                    <div class="invoice-subtotal">
                                                        <div class="invoice-calc d-flex justify-content-between">
                                                            <span class="invoice-title">Invoice Total</span>
                                                            <span class="invoice-value">$ <?php echo $HOTEL_BOOKING->getTotalPriceByAccommodationIdDateDiff($id, $start_date, $end_date); ?></span>
                                                        </div>
                                                        <div class="invoice-calc d-flex justify-content-between">
                                                            <span class="invoice-title">Subtotal</span>
                                                            <span class="invoice-value">$ 76.00</span>
                                                        </div>
                                                        <div class="invoice-calc d-flex justify-content-between">
                                                            <span class="invoice-title">Discount</span>
                                                            <span class="invoice-value">- $ 09.60</span>
                                                        </div>
                                                        <div class="invoice-calc d-flex justify-content-between">
                                                            <span class="invoice-title">Tax</span>
                                                            <span class="invoice-value">21%</span>
                                                        </div>
                                                        <hr>
                                                        <div class="invoice-calc d-flex justify-content-between">
                                                            <span class="invoice-title">Invoice Total</span>
                                                            <span class="invoice-value">$ 66.40</span>
                                                        </div>
                                                        <div class="invoice-calc d-flex justify-content-between">
                                                            <span class="invoice-title">Paid to date</span>
                                                            <span class="invoice-value">- $ 00.00</span>
                                                        </div>
                                                        <div class="invoice-calc d-flex justify-content-between">
                                                            <span class="invoice-title">Balance (USD)</span>
                                                            <span class="invoice-value">$ 10,953</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <!-- invoice action  -->
                            <div class="col-xl-3 col-md-4 col-12">
                                <div class="card invoice-action-wrapper shadow-none border">
                                    <div class="card-body">
                                        <div class="invoice-action-btn">
                                            <button class="btn btn-primary btn-block invoice-send-btn" >
                                                <i class="bx bx-send"></i>
                                                <span>Send Invoice</span>
                                            </button>
                                        </div>
                                        <div class="invoice-action-btn">
                                            <button class="btn btn-light-primary btn-block invoice-print">
                                                <span>print</span>
                                            </button>
                                        </div>
                                        <div class="invoice-action-btn">
                                            <a href="app-invoice-edit.html" class="btn btn-light-primary btn-block" type="button" id="create_pdf">
                                                <span>PDF Invoice</span>
                                            </a>
                                        </div>
                                        <div class="invoice-action-btn">
                                            <button class="btn btn-success btn-block">
                                                <i class='bx bx-dollar'></i>
                                                <span>Add Payment</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <!-- END: Content-->





        <!-- BEGIN: Footer-->
        <?php include './footer.php'; ?>
        <!-- END: Footer-->

        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>  
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>    

        <!-- BEGIN: Vendor JS-->
        <script>

            (function () {
                var
                        form = $('.content1'),
                        cache_width = form.width(1200);


                $('#create_pdf').on('click', function () {
                    $('body').scrollTop(0);
                    createPDF();
                });
                //create pdf  
                function createPDF() {
                    getCanvas().then(function (canvas) {
                        var
                                img = canvas.toDataURL("image/png"),
                                doc = new jsPDF({
                                    unit: 'px',
                                    width: 100,
                                });
                        doc.addImage(img, 'JPEG', 0, 0);
                        doc.save('Bhavdip-html-to-pdf.pdf');
                        form.width(cache_width);
                    });
                }

                // create canvas object  
                function getCanvas() {

                    return html2canvas(form, {
                        imageTimeout: 2000,
                        removeContainer: true
                    });
                }

            }());
        </script>  

    </script>
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.min.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.min.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>

    <script src="app-assets/js/scripts/configs/vertical-menu-dark.min.js"></script>
    <script src="app-assets/js/core/app-menu.min.js"></script>
    <script src="app-assets/js/core/app.min.js"></script>
    <script src="app-assets/js/scripts/components.min.js"></script>
    <script src="app-assets/js/scripts/footer.min.js"></script>
    <script src="app-assets/js/scripts/customizer.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/pages/app-invoice.min.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->
</html>