<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Room
 *
 * @author chalana
 */
class Room {

    public $id;
    public $acc_id;
    public $title;
    public $room_type;
    public $num_of_rooms;
    public $smoking_policy;
    public $image_name;
    public $description;
    public $no_of_rooms;
    public $price;
    public $max;
    public $discount;
    public $bed_name;
    public $num_bed;
    public $guest_stay;
    public $extra_bed;
    public $amenities;
    public $queue;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT * FROM `room` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->acc_id = $result['acc_id'];
            $this->title = $result['title'];
            $this->room_type = $result['room_type'];
            $this->num_of_rooms = $result['num_of_rooms'];
            $this->smoking_policy = $result['smoking_policy'];
            $this->price = $result['price'];
            $this->max = $result['max'];
            $this->discount = $result['discount'];
            $this->num_bed = $result['num_bed'];
            $this->bed_name = $result['bed_name'];
            $this->guest_stay = $result['guest_stay'];
            $this->extra_bed = $result['extra_bed'];
            $this->amenities = $result['amenities'];
            $this->description = $result['description']; 
            $this->queue = $result['queue'];

            return $this;
        }
    }

    public function create() {

        $query = "INSERT INTO `room` (`acc_id`,`title`,`room_type`,`num_of_rooms`,`smoking_policy`,`price`,`max`,`discount`,`bed_name`,`num_bed`,`guest_stay`,`extra_bed`,`amenities`,`description`,`queue`) VALUES  ('"
                . $this->acc_id . "','"
                . $this->title . "','"
                . $this->room_type . "','"
                . $this->num_of_rooms . "','"
                . $this->smoking_policy . "','"
                . $this->price . "','"
                . $this->max . "','"
                . $this->discount . "','"
                . $this->bed_name . "','"
                . $this->num_bed . "', '"
                . $this->guest_stay . "', '"
                . $this->extra_bed . "', '"
                . $this->amenities . "', '"
                . $this->description . "', '"
                . $this->queue . "')";
        var_dump($query);
        exit();
        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return mysqli_insert_id($db->DB_CON);
        } else {
            return FALSE;
        }
    }

    public function all() {

        $query = "SELECT * FROM `room` ORDER BY queue ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {

        $query = "UPDATE  `room` SET "
                . "`title` ='" . $this->title . "', "
                . "`num_of_rooms` ='" . $this->num_of_rooms . "', "
                . "`smoking_policy` ='" . $this->smoking_policy . "', "
                . "`price` ='" . $this->price . "', "
                . "`max` ='" . $this->max . "', "
                . "`amenities` ='" . $this->amenities . "', "
                . "`description` ='" . $this->description . "', "
                . "`bed_name` ='" . $this->bed_name . "', "
                . "`num_bed` ='" . $this->num_bed . "', "
                . "`extra_bed` ='" . $this->extra_bed . "', "
                . "`discount` ='" . $this->discount . "' "
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

        $query = 'DELETE FROM `room` WHERE `id`="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }

    public function deletePhotos() {

        $ROOM_PHOTOS = new RoomPhoto(NULL);

        $allPhotos = $ROOM_PHOTOS->getRoomPhotosByAccId($this->id);

        foreach ($allPhotos as $photo) {

            $IMG = $ROOM_PHOTOS->image_name = $photo["image_name"];
            unlink(Helper::getSitePath() . "upload/accommodation/gallery/room/" . $IMG);
            unlink(Helper::getSitePath() . "upload/accommodation/gallery/room/thumb/" . $IMG);

            $ROOM_PHOTOS->id = $photo["id"];
            $ROOM_PHOTOS->delete();
        }
    }

    public function arrange($key, $img) {
        $query = "UPDATE `room` SET `queue` = '" . $key . "'  WHERE id = '" . $img . "'";
        $db = new Database();
        $result = $db->readQuery($query);
        return $result;
    }

    public function getAccommodationByRoom($id) {



        $query = "SELECT * FROM `room` WHERE `acc_id`= $id ORDER BY queue ASC";



        $db = new Database();



        $result = $db->readQuery($query);

        $array_res = array();



        while ($row = mysqli_fetch_array($result)) {

            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function getRoomsByAccommodation($id) {



        $query = "SELECT * FROM `room` WHERE `acc_id`= $id ORDER BY queue ASC";



        $db = new Database();



        $result = $db->readQuery($query);

        $array_res = array();



        while ($row = mysqli_fetch_array($result)) {

            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function getRoomsByAccommodationType($id) {



        $query = "SELECT * FROM `room` WHERE `acc_id`= $id ORDER BY queue ASC";



        $db = new Database();



        $result = $db->readQuery($query);

        $array_res = array();



        while ($row = mysqli_fetch_array($result)) {

            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function getMinPriceByAccommodation($id) {

        $query = "SELECT min(price) as 'min_prce' FROM `room` WHERE `acc_id` = '" . $id . "' ";

        $db = new Database();
        $result = mysqli_fetch_array($db->readQuery($query));

        return $result['min_prce'];
    }

    public function getRoomAmenitiesById($id) {

        $query = "SELECT `amenities` as 'min_prce' FROM `room` WHERE `acc_id` = '" . $id . "' ";
        dd($query);
        $db = new Database();
        $result = mysqli_fetch_array($db->readQuery($query));

        return $result;
    }

}
