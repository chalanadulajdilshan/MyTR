<?php

/**
 * Description of StudentMessage
 *
 * @author W j K n ¨
 */
class VisitorMessage {

    public $id;
    public $createdAt;
    public $customer;
    public $visitor;
    public $message;
    public $type;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT * FROM `visitor_message` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->createdAt = $result['created_at'];
            $this->customer = $result['customer'];
            $this->visitor = $result['visitor'];
            $this->message = $result['message'];
            $this->type = $result['type'];


            return $this;
        }
    }

    public function create() {

        date_default_timezone_set('Asia/Colombo');
        $createdAt = date('Y-m-d H:i:s');

        $query = "INSERT INTO `visitor_message` (`created_at`,`customer`,`visitor`,`message`,`type` ) VALUES  ('"
                . $createdAt . "', '"
                . $this->customer . "', '"
                . $this->visitor . "', '"
                . $this->message . "', '"
                . $this->type . "')";
        
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

        $query = "SELECT * FROM `visitor_message` ORDER BY `created_at` DESC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function getMessagesByVisitor($customer, $visitor) {

        $query = "SELECT * FROM `visitor_message` WHERE `customer`= $customer AND `visitor` = $visitor ORDER BY created_at ASC";
       
        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }
        return $array_res;
    }
 

    public function update() {

        $query = "UPDATE  `visitor_message` SET "
                . "`customer` ='" . $this->customer . "', "
                . "`visitor` ='" . $this->visitor . "', "
                . "`message` ='" . $this->message . "' "
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

        $query = 'DELETE FROM `visitor_message` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }

    public function getDistinctStudents($student) {
        $query = "SELECT distinct(`visitor`) AS students FROM (SELECT `visitor` FROM `visitor_message` WHERE `customer` = $student GROUP BY `visitor` UNION ALL SELECT `customer` FROM `visitor_message` WHERE `visitor` = $student GROUP BY `customer`) t1";

        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }
        return $array_res;
    }

    public function getLatestChatId($customer, $visitor) {

        $query = "SELECT * FROM `visitor_message` WHERE `customer`= $customer and `visitor`= $visitor ORDER BY `id` DESC LIMIT 1";

        $db = new Database();

        $result = mysqli_fetch_array($db->readQuery($query));
        return $result;
    }
    public function getLatestChatIdVisitor($visitor,$customer) {

        $query = "SELECT * FROM `visitor_message` WHERE `visitor`= $visitor and `customer`= $customer ORDER BY `id` DESC LIMIT 1";

        $db = new Database();

        $result = mysqli_fetch_array($db->readQuery($query));
        return $result;
    }

    public function getMessagesByMemberOwnerAndAdASC($member, $owner, $ad) {

        $query = "SELECT * FROM `visitor_message` WHERE `member`= $member AND `owner` = $owner AND `advertisement`= $ad ORDER BY created_at ASC";

        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }
        return $array_res;
    }

    public function getMessagesByStudent($student, $friend) {

        $query = "SELECT * FROM `visitor_message` WHERE (`customer`= $student AND `visitor` = $friend) OR (`visitor`= $student AND `customer` = $friend) ORDER BY created_at ASC";

        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }
        return $array_res;
    }

    public function getMessagesByParent($parent) {

        $query = "SELECT * FROM `visitor_message` WHERE `parent` = $parent OR `id` = $parent ORDER BY created_at ASC";
        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }
        return $array_res;
    }

    public function getParentMessage($id) {

        $query = "SELECT * FROM `visitor_message` WHERE `id` = $id";
        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }
        return $array_res;
    }

    public function updateViewingStatus($id) {

        $query = "UPDATE  `visitor_message` SET "
                . "`is_viewed` = 1 "
                . "WHERE `id` = '" . $id . "'";


        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function countUnreadMessages($id) {

        $query = "SELECT count(`id`) AS `count` FROM `visitor_message` WHERE (`owner`= $id AND `sender` LIKE 'member' AND `is_viewed`=0) OR (`member`= $id AND `sender` LIKE 'owner' AND `is_viewed`=0) ORDER BY `created_at` DESC";

        $db = new Database();

        $result = mysqli_fetch_array($db->readQuery($query));
        return $result['count'];
    }

    public function getUnreadMessages($id) {

        $query = "SELECT max(`id`) AS `max` FROM `visitor_message` WHERE (`owner`= $id AND `sender` LIKE 'member' AND `is_viewed`=0) OR (`member`= $id AND `sender` LIKE 'owner' AND `is_viewed`=0) GROUP BY `advertisement` ORDER BY `created_at` DESC";

        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }
        return $array_res;
    }

    public function getDistinctVisitor($customer) {
//        $query = "SELECT distinct(`visitor`) AS visitor FROM (SELECT `visitor` FROM `visitor_message` WHERE `customer` = $customer    GROUP BY `visitor` UNION ALL SELECT `customer` FROM `visitor_message` WHERE `visitor` = $customer   GROUP BY `customer`) t1";
        $query = "SELECT distinct(`visitor`) AS visitor FROM `visitor_message` WHERE `customer` = $customer ORDER BY `id` DESC";

        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }
        return $array_res;
    }

    public function getDistinctCustomer($visitor) {
       $query = "SELECT distinct(`customer`) AS customer FROM `visitor_message` WHERE `visitor` = $visitor ORDER BY `id` DESC";
 
        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }
        return $array_res;
    }

//    public function getLatestChatIdFromVisitor($customer, $visitor) {
//
//        $query = "SELECT * FROM `visitor_message` WHERE (`customer`= $customer and `visitor`= $visitor) OR (`visitor`= $customer and `customer`= $visitor) ORDER BY `id` DESC LIMIT 1";
//
//        $db = new Database();
//
//        $result = mysqli_fetch_array($db->readQuery($query));
//        return $result;
//    }

}
