<?php
include '../class/include.php';
//----------------------Company Information---------------------



$comany_name = "Apple Vacations (Pvt) Ltd";
$website_name = "www.applevacations.com.co";
$comConNumber = "+94 (76) 281 6641 | +94 (11) 433 8831";

$comEmail = "info@applevacations.com.co";
$comEmail2 = "info@applevacations.com.co";
$from = 'info@applevacations.com.co';



//----------------------CAPTCHACODE---------------------

session_start();



$response = array();

if ($_SESSION['CAPTCHACODE'] != $_POST['captchacode']) {

    $response['status'] = 'incorrect';

    $response['msg'] = 'Security Code is invalid';

    echo json_encode($response);

    exit();
}



//----------------------Visitor Information---------------------


$visitor_name = $_POST['visitor_name'];
$visitor_email = $_POST['visitor_email'];
$visitor_booking = $_POST['visitor_booking'];
$visitor_travel_date = $_POST['visitor_travel_date'];
$visitor_mobile = $_POST['visitor_mobile'];
$subject = $visitor_name . ' - Contact Message - Apple Vacation';
$subject2 = 'Thank you - Apple Vacation';
$message = $_POST['message'];

$EMAIL_DETAILS = new EmailDetails(NULL);
$EMAIL_DETAILS->email = $visitor_email;
$EMAIL_DETAILS->name =$visitor_name;
$EMAIL_DETAILS->mobile_number =$visitor_mobile; 

$EMAIL_DETAILS->create();

date_default_timezone_set('Asia/Colombo');



$todayis = date("l, F j, Y, g:i a");



$site_link = "https://" . $_SERVER['HTTP_HOST'];



include("mail-template.php");



// mandatory headers for email message, change if you need something different in your setting.

$headers = "From: " . $from . "\r\n";

$headers .= "Reply-To: " . $visitor_email . "\r\n";

$headers .= "MIME-Version: 1.0\r\n";

$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";



$headers1 = "From: " . $from . "\r\n";

$headers1 .= "Reply-To: " . $comEmail . "\r\n";

$headers1 .= "MIME-Version: 1.0\r\n";

$headers1 .= "Content-Type: text/html; charset=ISO-8859-1\r\n";



// Sending mail



if (
        mail($visitor_email, $subject, $visitor_message, $headers1) &&
        mail($comEmail, $subject, $company_message, $headers)
) {

    $response['status'] = 'correct';

    $response['msg'] = "Your message has been sent successfully";

//"Your message has been sent successfully"

    echo json_encode($response);

    exit();
} else {

    $response['status'] = 'correct';

    $response['msg'] = "Could nod be sent your message";

    echo json_encode($response);

    exit();
} 
 