<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of visitors
 *
 * @author User
 */
class Visitor {

    public $id;
    public $full_name;
    public $email;
    public $phone_number;
    public $address;
    public $city;
    public $password;
    public $authToken;
    public $lastLogin;
    public $status;
    public $image_name;
    public $resetcode;
    public $email_code;
    public $email_verification;
    public $is_type;
    public $is_active;
    public $queue;

    public function __construct($id) {

        if ($id) {

            $query = "SELECT * FROM `visitors` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->full_name = $result['full_name'];
            $this->email = $result['email'];
            $this->phone_number = $result['phone_number'];
            $this->address = $result['address'];
            $this->city = $result['city'];
            $this->password = $result['password'];
            $this->authToken = $result['authToken'];
            $this->lastLogin = $result['lastLogin'];
            $this->image_name = $result['image_name'];
            $this->resetcode = $result['resetcode'];
            $this->email_code = $result['email_code'];
            $this->email_verification = $result['email_verification'];
            $this->is_type = $result['is_type'];
            $this->is_active = $result['is_active'];
            $this->queue = $result['queue'];

            return $result;
        }
    }

    public function create() {

        $query = "INSERT INTO `visitors` (`full_name`, `email`,`phone_number`,`password`) VALUES  ('"
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

        $query = "SELECT * FROM `visitors`  ORDER BY queue ASC";

        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function getActiveVisitors() {

        $query = "SELECT * FROM `visitors` WHERE `is_active` = 1 ORDER BY queue ASC";
        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function getInActiveVisitors() {

        $query = "SELECT * FROM `visitors` WHERE `is_active` = 0 ORDER BY queue ASC";
        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function getAllMembersWithoutThis($visitors) {

        $query = "SELECT * FROM `visitors` WHERE `id` <> '" . $member . "' AND `status` = 1 AND `is_suspend` = 0";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function updateActive() {

        $query = "UPDATE  `visitors` SET "
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

    public function updatIsTypeing() {

        $query = "UPDATE  `visitors` SET "
                . "`is_type` ='" . $this->is_type . "' "
                . "WHERE `id` = '" . $this->id . "'";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return $this->__construct($this->id);
        } else {
            return FALSE;
        }
    }

    public function GenarateEmailCode() {

        $rand = rand(10000, 99999);

        $query = "UPDATE  `visitors` SET "
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
        $message .= '<body>';
        $message .= '<div  style="padding: 10px; max-width: 650px; background-color: #f2f1ff; border: 1px solid #d4d4d4;">';
        $message .= '<h4 style="text-align: center;">Welcome to the MyTravelPartner.lk!.</h4>';
        $message .= '<p>Dear sir/madam,<br/><br>Please use the following verification code to activate your account</p>';
        $message .= '<hr/>';
        $message .= '<h3>Verification Code :<span> ' . $this->email_code . '</span> </h3>';
        $message .= '<hr/>';
        $message .= '<p>Thanks & Best Regards!.. <br/> www.mytravelpartner.lk<p/>';
        $message .= '<small>*Please do not reply to this email. This is an automated email & you will not receive a response.</small><br/>';
        $message .= '<span>Hotline: +94 77 455 4141 </span><br/>';
        $message .= '<span>info@mytravelpartner.lk</span>';
        $message .= '</div>';
        $message .= '</body>';
        $message .= '</html>';



        if (mail($to, $subject, $message, $headers)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function checkEmailVerificationCode($code) {


        $query = "SELECT * FROM `visitors` WHERE `email_code` = '" . $code . "' AND `id`= '" . $this->id . "'";

        $db = new Database();

        $result = mysqli_fetch_array($db->readQuery($query));

        if (!$result) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function updateEmailVerification() {

        $query = "UPDATE  `visitors` SET "
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

    public function login($email, $password) {

        $enPass = md5($password);

        $query = "SELECT `id` FROM `visitors` WHERE `email`= '" . $email . "' AND `password`= '" . $enPass . "'";

        $db = new Database();

        $result = mysqli_fetch_array($db->readQuery($query));

        if (!$result) {

            return FALSE;
        } else {

            $this->id = $result['id'];
            $this->setAuthToken($result['id']);
            $this->setLastLogin($this->id);
            $visitors = $this->__construct($this->id);
            $this->setVisitorSession($visitors);

            return $visitors;
        }
    }

    public function checkOldPass($id, $password) {

        $enPass = md5($password);

        $query = "SELECT `id` FROM `visitors` WHERE `id`= '" . $id . "' AND `password`= '" . $enPass . "'";

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

        $query = "UPDATE  `visitors` SET "
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

    public function ChangeProPic($visitors, $file) {

        $query = "UPDATE  `visitors` SET "
                . "`image_name` ='" . $file . "' "
                . "WHERE `id` = '" . $visitors . "'";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function updateNicImagesBack($visitors, $nic_back) {

        $query = "UPDATE  `visitors` SET "
                . "`nic_back` ='" . $nic_back . "' "
                . "WHERE `id` = '" . $visitors . "'";


        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function updateNicImagesFront($visitors, $nic_front) {

        $query = "UPDATE  `visitors` SET "
                . "`nic_front` ='" . $nic_front . "' "
                . "WHERE `id` = '" . $visitors . "'";


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

        $query = "SELECT `id` FROM `visitors` WHERE `id`= '" . $id . "' AND `authToken`= '" . $authToken . "'";

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
        unset($_SESSION["status_visitor"]);

        return TRUE;
    }

    public function checkLogin($id) {

        $query = "SELECT * FROM `visitors` WHERE `id` ='" . $id . "'  AND `status` = 0 ";

        $db = new Database();
        $result = mysqli_fetch_array($db->readQuery($query));
        return $result['id'];
    }

    private function setVisitorSession($visitors) {

        if (!isset($_SESSION)) {

            session_start();
        }
        $_SESSION["id"] = $visitors['id'];
        $_SESSION["email"] = $visitors['email'];
        $_SESSION["full_name"] = $visitors['full_name'];
        $_SESSION["authToken"] = $visitors['authToken'];
        $_SESSION["lastLogin"] = $visitors['lastLogin'];
        $_SESSION['login_time'] = time();
        $_SESSION['image_name'] = $visitors['image_name'];
        $_SESSION['status_visitor'] = TRUE;
    }

    private function setAuthToken($id) {

        $authToken = md5(uniqid(rand(), true));

        $query = "UPDATE `visitors` SET `authToken` ='" . $authToken . "' WHERE `id`='" . $id . "'";

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

        $query = "UPDATE `visitors` SET `lastLogin` ='" . $now . "' WHERE `id`='" . $id . "'";

        $db = new Database();

        if ($db->readQuery($query)) {

            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function checkEmail($email) {

        $query = "SELECT `email`,`visitors_id` FROM `visitors` WHERE `email`= '" . $email . "'";

        $db = new Database();

        $result = mysqli_fetch_array($db->readQuery($query));

        if (!$result) {

            return FALSE;
        } else {

            return $result;
        }
    }

    public function checkRegistrationEmail($email) {


        $query = "SELECT `id` FROM `visitors` WHERE `email`= '" . $email . "'";

        $db = new Database();

        $result = mysqli_fetch_array($db->readQuery($query));

        if (!$result) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function checkRegistrationMobile($phone_number) {


        $query = "SELECT `id` FROM `visitors` WHERE `phone_number`= '" . $phone_number . "'";

        $db = new Database();

        $result = mysqli_fetch_array($db->readQuery($query));

        if (!$result) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function getLastCustomerId() {
        $query = " SELECT `id` FROM `visitors` ORDER BY `id` DESC LIMIT 1";
        $db = new Database();
        $result = mysqli_fetch_assoc($db->readQuery($query));

        return $result['id'];
    }

    public function GenarateCode($email) {

        $rand = rand(10000, 99999);

        $query = "UPDATE  `visitors` SET "
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

            $query = "SELECT `email`,`full_name`,`visitors_id`,`resetcode` FROM `visitors` WHERE `email`= '" . $email . "'";

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->full_name = $result['full_name'];
            $this->visitors_id = $result['visitors_id'];
            $this->email = $result['email'];
            $this->restCode = $result['resetcode'];
            return $result;
        }
    }

    public function SelectResetCode($code) {

        $query = "SELECT `id` FROM `visitors` WHERE `resetcode`= '" . $code . "'";

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

        $query = "UPDATE  `visitors` SET "
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

        $query = "UPDATE  `visitors` SET "
                . "`full_name` ='" . $this->full_name . "', "
                . "`email` ='" . $this->email . "', "
                . "`phone_number` ='" . $this->phone_number . "', "
                . "`address` ='" . $this->address . "', "
                . "`city` ='" . $this->city . "' "
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

        $query = "UPDATE  `visitors` SET "
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
            unlink(Helper::getSitePath() . "upload/visitors/profile/" . $this->image_name);
        } elseif ($this->nic_front || $this->image_name) {
            unlink(Helper::getSitePath() . "upload/visitors/nic_card/front/" . $this->nic_front);
            unlink(Helper::getSitePath() . "upload/visitors/nic_card/front/thumb/" . $this->nic_front);
            unlink(Helper::getSitePath() . "upload/visitors/nic_card/back/thumb/" . $this->nic_back);
            unlink(Helper::getSitePath() . "upload/visitors/nic_card/back/" . $this->nic_back);
        }


        $query = 'DELETE FROM `visitors` WHERE id="' . $this->id . '"';


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
