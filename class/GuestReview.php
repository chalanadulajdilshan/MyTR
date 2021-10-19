<?php

/**
 * Description of Post
 *
 * 
 */
class GuestReview {

    public $id;
    public $booking_id;
    public $visitor;
    public $acc_id;
    public $type;
    public $title;
    public $starts;
    public $createdAt;
    public $review;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT *  FROM `guest_reviews` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->booking_id = $result['booking_id'];
            $this->visitor = $result['visitor'];
            $this->acc_id = $result['acc_id'];
            $this->type = $result['type'];
            $this->title = $result['title'];
            $this->starts = $result['starts'];
            $this->create_at = $result['create_at'];
            $this->review = $result['review'];


            return $this;
        }
    }

    public function create() {

        date_default_timezone_set('Asia/Colombo');
        $createdAt = date('Y-m-d H:i:s');

        $query = "INSERT INTO `guest_reviews` (" . "`visitor`," . "`acc_id`," . "`type`," . "`booking_id`," . "`title`," . "`starts`," . "`create_at`," . "`review`) "
                . "VALUES  ("
                . "'" . $this->visitor . "',"
                . "'" . $this->acc_id . "',"
                . "'" . $this->type . "',"
                . "'" . $this->booking_id . "',"
                . "'" . $this->title . "',"
                . "'" . $this->starts . "',"
                . "'" . $createdAt . "',"
                . "'" . $this->review . "'"
                . ")";


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

        $query = "SELECT * FROM `guest_reviews` ORDER BY `id` DESC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function getReviewsByVisitorIdAndAccType($id) {



        $query = "SELECT * FROM `guest_reviews` WHERE `visitor`= $id AND `type`=1 ORDER BY id ASC";

        $db = new Database();

        $result = $db->readQuery($query);

        $array_res = array();



        while ($row = mysqli_fetch_array($result)) {

            array_push($array_res, $row);
        }



        return $array_res;
    }

    public function getReviewsByVisitorIdAndTourCompany($id) {



        $query = "SELECT * FROM `guest_reviews` WHERE `visitor`= $id AND `type`=2 ORDER BY id ASC";

        $db = new Database();

        $result = $db->readQuery($query);

        $array_res = array();



        while ($row = mysqli_fetch_array($result)) {

            array_push($array_res, $row);
        }



        return $array_res;
    }

    public function getReviewsByVisitorIdAndRentVehicle($id) {


        $query = "SELECT * FROM `guest_reviews` WHERE `visitor`= $id AND `type`=3 ORDER BY id ASC";

        $db = new Database();

        $result = $db->readQuery($query);

        $array_res = array();



        while ($row = mysqli_fetch_array($result)) {

            array_push($array_res, $row);
        }



        return $array_res;
    }

    public function getReviewsByVisitorIdAndRestaurant($id) {



        $query = "SELECT * FROM `guest_reviews` WHERE `visitor`= $id AND `type`=4 ORDER BY id ASC";

        $db = new Database();

        $result = $db->readQuery($query);

        $array_res = array();



        while ($row = mysqli_fetch_array($result)) {

            array_push($array_res, $row);
        }



        return $array_res;
    }

    public function guestReviewsByAccId($id) {

        $query = "SELECT * FROM `guest_reviews` WHERE `acc_id`= $id ORDER BY id ASC";

        $db = new Database();

        $result = $db->readQuery($query);

        $array_res = array();



        while ($row = mysqli_fetch_array($result)) {

            array_push($array_res, $row);
        }



        return $array_res;
    }

    public function update() {

        $query = "UPDATE  `guest_reviews` SET "
                . "`title` ='" . $this->title . "', "
                . "`starts` ='" . $this->starts . "', "
                . "`review` ='" . $this->review . "' "
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

        $query = 'DELETE FROM `guest_reviews` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }

    public function totalRows() {

        $query = "SELECT count(*) 'total_rows' FROM `guest_reviews`";
        $db = new Database();
        $result = mysqli_fetch_array($db->readQuery($query));

        return $result;
    }
    

}
