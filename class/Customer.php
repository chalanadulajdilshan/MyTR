<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of customer
 *
 * @author User
 */
class Customer {

    public $id;
    public $full_name;
    public $customer_id;
    public $email;
//    public $nic_number;
//    public $gender;
    public $phone_number;
    public $address;
    public $password;
    public $authToken;
    public $lastLogin;
    public $status;
    public $image_name;
    public $nic_front;
    public $nic_back;
    public $resetcode;
    public $email_verification;
    public $email_code;
    public $phone_code;
    public $phone_verification;
    public $is_type;
    public $is_active;
    public $queue;

    public function __construct($id) {

        if ($id) {

            $query = "SELECT * FROM `customer` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->full_name = $result['full_name'];
            $this->email = $result['email'];
//            $this->nic_number = $result['nic_number'];
            $this->address = $result['address'];
            $this->phone_number = $result['phone_number'];
            $this->password = $result['password'];
            $this->authToken = $result['authToken'];
            $this->lastLogin = $result['lastLogin'];
            $this->image_name = $result['image_name'];
            $this->email_verification = $result['email_verification'];
            $this->email_code = $result['email_code'];
            $this->resetcode = $result['resetcode'];
            $this->phone_code = $result['phone_code'];
            $this->phone_verification = $result['phone_verification'];
            $this->is_type = $result['is_type'];
            $this->is_active = $result['is_active'];
            $this->queue = $result['queue'];

            return $result;
        }
    }

    public function create() {

        $query = "INSERT INTO `customer` (`full_name`, `email`,`phone_number`,`password`) VALUES  ('"
                . $this->full_name . "','"
                . $this->email . "', '"
                . $this->phone_number . "', '"
                . $this->password . "')";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            $last_id = mysqli_insert_id();

            return $this->__construct($last_id);
        } else {
            return FALSE;
        }
    }

    public function all() {

        $query = "SELECT * FROM `customer`  ORDER BY queue ASC";

        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function getActiveCustomer() {

        $query = "SELECT * FROM `customer` WHERE `is_active` = 1 ORDER BY queue ASC";
        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function getInActiveCustomer() {

        $query = "SELECT * FROM `customer` WHERE `is_active` = 0 ORDER BY queue ASC";
        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function getAllMembersWithoutThis($customer) {

        $query = "SELECT * FROM `customer` WHERE `id` <> '" . $member . "' AND `status` = 1 AND `is_suspend` = 0";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function GenarateEmailCode() {

        $rand = rand(10000, 99999);

        $query = "UPDATE  `customer` SET "
                . "`email_code` ='" . $rand . "' "
                . "WHERE `id` = '" . $this->id . "'";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return $this->__construct($this->id);
        } else {
            return FALSE;
        }
    }

    public function sendVerificationCodeEmail() {


        $to = '<' . $this->email . '>';
        $subject = 'Verification Code -' . $this->email_code . '- MyTravelPartner.lk ';
        $from = 'MyTravelPartner.LK NOREPLY <noreply@mytravelpartner.lk>';

// To send HTML mail, the Content-type header must be set
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Create email headers
        $headers .= 'From: ' . $from . "\r\n" .
                'Reply-To: ' . $from . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

// Compose a simple HTML email message
        $message = '<html>';
        $message .= '<body>'
        . '<table width="100%" cellspacing="0" cellpadding="0" border="0"  >
    <tbody>
        <tr>
            <td align="center">
                <table style="max-width:660px;" width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#ffffff" align="center">
                    <tbody>
                        <tr>
                            <td bgcolor="#3b5998">
                                <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                                    <tbody>
                                                        <tr>
                                                            <td><h1 style="margin-top:20px;margin-bottom:0px;color: #fff;font-size: 38px;font-family: Arial,Helvetica,sans-serif;letter-spacing: 2px" align="center">MY TRAVEL PARTNER</h1>
                                                                <h2 style="text-align:center;color: #fff;margin: 5px 0px 15px 0px;font-size: 24px;font-family: Arial,Helvetica,sans-serif;letter-spacing: 2px"><span class="il">Travel With Us Today</span></h2>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <table style="max-width:660px;border: 1px solid #999;" width="100%" cellspacing="0" cellpadding="0" border="0">
                    <tbody>
                        <tr>
                            <td>
                                <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                    <tbody>
                                        <tr>
                                            <td style="color:#000;font-family:Arial,Helvetica,sans-serif;font-size:18px;font-style:normal;font-weight:500;line-height:28px;padding:25px 34px 0px 40px;font-family: Arial,Helvetica,sans-serif;" align="left">Thank Your For Join With Us..!</td>
                                        </tr>
                                        <tr>
                                            <td style="color:#6d6e70;font-family:Arial,Helvetica,sans-serif;font-size:16px;font-style:normal;font-weight:500;line-height:28px;padding:10px 40px 5px 40px" align="left">Hi,<span style="color:#3b5998"><b> Mohamed atheeb,</b></span></td>
                                        </tr>
                                        <tr>
                                            <td style="color:#6d6e70;font-family:Arial,Helvetica,sans-serif;font-size:14px;font-style:normal;font-weight:500;line-height:22px;padding:0px 40px 20px 40px;text-align:justify" align="left">Thank you for visiting <a href="http://www.vtabaddegama.com" target="_blank" data-saferedirecturl="https://www.google.com/url?q=http://www.vtabaddegama.com&amp;source=gmail&amp;ust=1594792970011000&amp;usg=AFQjCNFzdHU8oUdnLoC7HdloCE_SKVqqqQ">www.vtabaddegama.com</a> web site and contacting us. Your enquiry has been sent to Vocational Training Institute - <span class="il">Baddegama</span>. And one of representative will be contact you shortly. 	 
                                                The details of your enquiry are shown below.</td>
                                        </tr>
                                        <tr>
                                            <td style="color:#000;font-family:Arial,Helvetica,sans-serif;font-size:15px;font-style:normal;font-weight:500;line-height:22px;padding:0px 40px 20px 40px;text-align:justify" align="left">
                                                * Please use your email - ***<a href="otec@gmail.com" target="_blank">otec@gmail.com</a> and your password to login.Use this <a href="http://thaksalawa.lk/new/lecture" target="_blank" data-saferedirecturl="https://www.google.com/url?q=http://thaksalawa.lk/new/lecture&amp;source=gmail&amp;ust=1594796972390000&amp;usg=AFQjCNHFoucOm6AR4CzM8XIMWOc0p_mxbw"><span>link....! <span></span></span></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="color:#000;font-family:Arial,Helvetica,sans-serif;font-size:14px;font-style:normal;font-weight:600;line-height:28px;padding:0px 40px 0px 40px;text-align:justify" align="left"> NOTE: Please Do not reply to this email</td>
                                        </tr>
                                        <tr>
                                            <td style="color:#6d6e70;font-family:Arial,Helvetica,sans-serif;font-size:12px;font-style:normal;font-weight:500;line-height:18px;padding:0px 40px 25px 40px" align="left">This email was generated for notification purpose. You are receiving this email because you are a member of Calling.lk web Site. </td>
                                        </tr>

                                        <tr bgcolor="#3b5998">
                                            <td   align="center">
                                                <table style="max-width:660px;margin-bottom: 15px;margin-top: 15px;" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                    <tbody>
                                                        <tr>
                                                            <td style="color:#7f8c8d;font-family:Helvetica,Arial,sans-serif;font-size:12px;line-height:18px;"   align="left">
                                                                <table cellspacing="0" cellpadding="0" border="0" align="center">
                                                                    <tbody>
                                                                        <tr style="padding-bottom:10px;padding-top:10px;color:#fff">
                                                                            <td align="center">My Travel Partner Private Limited - <span class="il">Sri Lanka</span>. </td>
                                                                        </tr>
                                                                        <tr  >
                                                                            <td style="padding-bottom:10px;padding-top:10px"> 
                                                                                <a style="color:#fff" href="https://paidera.com/?utm_source=email_footer&amp;utm_medium=email" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://paidera.com/?utm_source%3Demail_footer%26utm_medium%3Demail&amp;source=gmail&amp;ust=1594794652476000&amp;usg=AFQjCNE2Eeo0vCvm-jZeZYWoOvpn7ANjdw"><span class="il">mytravelpartner</span>.lk</a> |
                                                                                <a style="color:#fff" href="https://paidera.com/dashboard/tickets?utm_source=email_footer&amp;utm_medium=email" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://paidera.com/dashboard/tickets?utm_source%3Demail_footer%26utm_medium%3Demail&amp;source=gmail&amp;ust=1594794652476000&amp;usg=AFQjCNFPDzomxLpw8Kh4TZnvv4CGcN2EfQ">Help &amp; Support</a> |
                                                                                <a style="color:#fff" href="https://paidera.com/policy?utm_source=email_footer&amp;utm_medium=email" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://paidera.com/policy?utm_source%3Demail_footer%26utm_medium%3Demail&amp;source=gmail&amp;ust=1594794652476000&amp;usg=AFQjCNF1y6JPOlUk9aAnkMK6fsrNzzJNFA">Privacy Policy</a> |
                                                                                <a style="color:#fff"  href="https://t.me/paidera" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://t.me/paidera&amp;source=gmail&amp;ust=1594794652476000&amp;usg=AFQjCNHFn1rQKnJdlBmETqBK7L9vOkKzAw">Term and Conditions</a>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td> 
                        </tr>
                    </tbody> 
                </table>  
            </td>
        </tr>
    </tbody>
</table><div class="yj6qo"></div><div class="adL">
</div>';

        $message .= '</body>';
        $message .= '</html>';



        if (mail($to, $subject, $message, $headers)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function checkEmailVerificationCode($code) {


        $query = "SELECT * FROM `customer` WHERE `email_code` = '" . $code . "' AND `id`= '" . $this->id . "'";

        $db = new Database();

        $result = mysqli_fetch_array($db->readQuery($query));

        if (!$result) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function updatIsTypeing() {

        $query = "UPDATE  `customer` SET "
                . "`is_type` ='" . $this->is_type . "' "
                . "WHERE `id` = '" . $this->id . "'";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function updateEmailVerification() {

        $query = "UPDATE  `customer` SET "
                . "`email_verification` ='" . $this->email_verification . "' "
                . "WHERE `id` = '" . $this->id . "'";


        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {

            return $this->__construct($this->id);
        } else {

            return FALSE;
        }
    }

    public function GenarateMobileCode() {

        $rand = rand(10000, 99999);

        $query = "UPDATE  `customer` SET "
                . "`phone_code` ='" . $rand . "' "
                . "WHERE `id` = '" . $this->id . "'";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return $this->__construct($this->id);
        } else {
            return FALSE;
        }
    }

    public function checkMobileVerificationCode($code) {


        $query = "SELECT * FROM `customer` WHERE `phone_code` = '" . $code . "' AND `id`= '" . $this->id . "'";

        $db = new Database();

        $result = mysqli_fetch_array($db->readQuery($query));

        if (!$result) {
            return FALSE;
        } else {
            return TRUE;
        }
    }
    public function checkMobileNumberVerifried($id) {


        $query = "SELECT `id` FROM `customer` WHERE `phone_verification` = 1 AND id= '" . $id . "'";
      
        $db = new Database(); 

        $result = mysqli_fetch_array($db->readQuery($query));

        if (!$result) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function updateMobileVerification() {

        $query = "UPDATE  `customer` SET "
                . "`phone_verification` ='" . $this->phone_verification . "' "
                . "WHERE `id` = '" . $this->id . "'";


        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {

            return $this->__construct($this->id);
        } else {

            return FALSE;
        }
    }

    public function login($email, $password) {

        $enPass = md5($password);

        $query = "SELECT `id` FROM `customer` WHERE `email`= '" . $email . "' AND `password`= '" . $enPass . "'";

        $db = new Database();

        $result = mysqli_fetch_array($db->readQuery($query));

        if (!$result) {

            return FALSE;
        } else {

            $this->id = $result['id'];
            $this->setAuthToken($result['id']);
            $this->setLastLogin($this->id);
            $customer = $this->__construct($this->id);
            $this->setUserSession($customer);

            return $customer;
        }
    }

    public function checkOldPass($id, $password) {

        $enPass = md5($password);

        $query = "SELECT `id` FROM `customer` WHERE `id`= '" . $id . "' AND `password`= '" . $enPass . "'";

        $db = new Database();

        $result = mysqli_fetch_array($db->readQuery($query));

        if (!$result) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function changePassword($id, $password) {

        $enPass = md5($password);

        $query = "UPDATE  `customer` SET "
                . "`password` ='" . $enPass . "' "
                . "WHERE `id` = '" . $id . "'";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function ChangeProPic($customer, $file) {

        $query = "UPDATE  `customer` SET "
                . "`image_name` ='" . $file . "' "
                . "WHERE `id` = '" . $customer . "'";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function updateNicImagesBack($customer, $nic_back) {

        $query = "UPDATE  `customer` SET "
                . "`nic_back` ='" . $nic_back . "' "
                . "WHERE `id` = '" . $customer . "'";


        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function checkRegistrationEmail($email) {


        $query = "SELECT `id` FROM `customer` WHERE `email`= '" . $email . "'";

        $db = new Database();

        $result = mysqli_fetch_array($db->readQuery($query));

        if (!$result) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function checkRegistrationMobile($phone_number) {


        $query = "SELECT `id` FROM `customer` WHERE `phone_number`= '" . $phone_number . "'";

        $db = new Database();

        $result = mysqli_fetch_array($db->readQuery($query));

        if (!$result) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function updateNicImagesFront($customer, $nic_front) {

        $query = "UPDATE  `customer` SET "
                . "`nic_front` ='" . $nic_front . "' "
                . "WHERE `id` = '" . $customer . "'";


        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function authenticate() {

        if (!isset($_SESSION)) {

            session_start();
        }

        $id = NULL;
        $authToken = NULL;

        if (isset($_SESSION["id"])) {

            $id = $_SESSION["id"];
        }

        if (isset($_SESSION["authToken"])) {

            $authToken = $_SESSION["authToken"];
        }

        $query = "SELECT `id` FROM `customer` WHERE `id`= '" . $id . "' AND `authToken`= '" . $authToken . "'";

        $db = new Database();

        $result = mysqli_fetch_array($db->readQuery($query));

        if (!$result) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function logOut() {

        if (!isset($_SESSION)) {

            session_start();
        }

        unset($_SESSION["id"]);
        unset($_SESSION["full_name"]);
        unset($_SESSION["email"]);
        unset($_SESSION["authToken"]);
        unset($_SESSION["image_name"]);
        unset($_SESSION["status_customer"]);

        return TRUE;
    }

    public function checkLogin($id) {

        $query = "SELECT * FROM `customer` WHERE `id` ='" . $id . "'  AND `status` = 0 ";

        $db = new Database();
        $result = mysqli_fetch_array($db->readQuery($query));
        return $result['id'];
    }

    private function setUserSession($customer) {

        if (!isset($_SESSION)) {

            session_start();
        }
        $_SESSION["id"] = $customer['id'];
        $_SESSION["email"] = $customer['email'];
        $_SESSION["full_name"] = $customer['full_name'];
        $_SESSION["authToken"] = $customer['authToken'];
        $_SESSION["lastLogin"] = $customer['lastLogin'];
        $_SESSION['login_time'] = time();
        $_SESSION['image_name'] = $customer['image_name'];
        $_SESSION['status_customer'] = TRUE;
    }

    private function setAuthToken($id) {

        $authToken = md5(uniqid(rand(), true));

        $query = "UPDATE `customer` SET `authToken` ='" . $authToken . "' WHERE `id`='" . $id . "'";

        $db = new Database();

        if ($db->readQuery($query)) {

            return $authToken;
        } else {
            return FALSE;
        }
    }

    private function setLastLogin($id) {

        date_default_timezone_set('Asia/Colombo');

        $now = date('Y-m-d H:i:s');

        $query = "UPDATE `customer` SET `lastLogin` ='" . $now . "' WHERE `id`='" . $id . "'";

        $db = new Database();

        if ($db->readQuery($query)) {

            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function checkEmail($email) {

        $query = "SELECT `email` FROM `customer` WHERE `email`= '" . $email . "'";

        $db = new Database();

        $result = mysqli_fetch_array($db->readQuery($query));

        if (!$result) {

            return FALSE;
        } else {

            return $result;
        }
    }

    public function getLastCustomerId() {
        $query = " SELECT `id` FROM `customer` ORDER BY `id` DESC LIMIT 1";
        $db = new Database();
        $result = mysqli_fetch_assoc($db->readQuery($query));

        return $result['id'];
    }

    public function GenarateCode($email) {

        $rand = rand(10000, 99999);

        $query = "UPDATE  `customer` SET "
                . "`resetcode` ='" . $rand . "' "
                . "WHERE `email` = '" . $email . "'";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function SelectForgetUser($email) {

        if ($email) {

            $query = "SELECT `email`,`full_name`,`resetcode` FROM `customer` WHERE `email`= '" . $email . "'";

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->full_name = $result['full_name'];
            $this->email = $result['email'];
            $this->restCode = $result['resetcode'];
            return $result;
        }
    }

    public function SelectResetCode($code) {

        $query = "SELECT `id` FROM `customer` WHERE `resetcode`= '" . $code . "'";

        $db = new Database();

        $result = mysqli_fetch_array($db->readQuery($query));

        if (!$result) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function updatePassword($password, $code) {

        $enPass = md5($password);

        $query = "UPDATE  `customer` SET "
                . "`password` ='" . $enPass . "' "
                . "WHERE `resetcode` = '" . $code . "'";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {

            return TRUE;
        } else {

            return FALSE;
        }
    }

    public function update() {

        $query = "UPDATE  `customer` SET "
                . "`full_name` ='" . $this->full_name . "', "
                . "`nic_number` ='" . $this->nic_number . "', "
                . "`gender` ='" . $this->gender . "', "
                . "`age` ='" . $this->age . "', "
                . "`phone_number` ='" . $this->phone_number . "', "
                . "`address` ='" . $this->address . "', "
                . "`education_level` ='" . $this->education_level . "', "
                . "`email` ='" . $this->email . "' "
                . "WHERE `id` = '" . $this->id . "'";


        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {

            return $this->__construct($this->id);
        } else {

            return FALSE;
        }
    }
    public function updateActive() {

        $query = "UPDATE  `customer` SET " 
                . "`is_active` ='" . $this->is_active . "' "
                . "WHERE `id` = '" . $this->id . "'";


        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {

            return $this->__construct($this->id);
        } else {

            return FALSE;
        }
    }

    public function updateActiveCustomer() {

        $query = "UPDATE  `customer` SET "
                . "`full_name` ='" . $this->full_name . "', "
                . "`nic_number` ='" . $this->nic_number . "', "
                . "`gender` ='" . $this->gender . "', "
                . "`age` ='" . $this->age . "', "
                . "`phone_number` ='" . $this->phone_number . "', "
                . "`address` ='" . $this->address . "', "
                . "`education_level` ='" . $this->education_level . "', "
                . "`email` ='" . $this->email . "', "
                . "`status` ='" . $this->status . "' "
                . "WHERE `id` = '" . $this->id . "'";


        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {

            return $this->__construct($this->id);
        } else {

            return FALSE;
        }
    }

    public function delete() {



        $this->deletePost();


        if ($this->image_name) {
            unlink(Helper::getSitePath() . "upload/customer/profile/" . $this->image_name);
        } elseif ($this->nic_front || $this->image_name) {
            unlink(Helper::getSitePath() . "upload/customer/nic_card/front/" . $this->nic_front);
            unlink(Helper::getSitePath() . "upload/customer/nic_card/front/thumb/" . $this->nic_front);
            unlink(Helper::getSitePath() . "upload/customer/nic_card/back/thumb/" . $this->nic_back);
            unlink(Helper::getSitePath() . "upload/customer/nic_card/back/" . $this->nic_back);
        }


        $query = 'DELETE FROM `customer` WHERE id="' . $this->id . '"';


        $db = new Database();



        return $db->readQuery($query);
    }

    public function deletePost() {



        $POST = new Post(NULL);
        $POST_IMAGES = new PostImage(NULL);

        foreach ($POST->getPostsByCustomer($this->id) as $post) {

            foreach ($POST_IMAGES->getPhotosByPostId($post['id']) as $post_images) {
                unlink(Helper::getSitePath() . "upload/post/" . $post_images['image_name']);

                unlink(Helper::getSitePath() . "upload/post/thumb/" . $post_images['image_name']);
                unlink(Helper::getSitePath() . "upload/post/thumb2/" . $post_images['image_name']);



                $POST_IMAGES->id = $post_images["id"];

                $POST_IMAGES->delete();
            }
            $POST->id = $post["id"];

            $POST->delete();
        }
    }

}
