<?php/* * To change this license header, choose License Headers in Project Properties. * To change this template file, choose Tools | Templates * and open the template in the editor. *//** * Description of Room_photo * * @author Chalana  */class RoomPhoto {        public $id;     public $acc_id;     public $room;     public $image_name;     public $queue;    public function __construct($id) {        if ($id) {             $query = "SELECT * FROM `room_photo` WHERE `id`=" . $id;             $db = new Database();             $result = mysqli_fetch_array($db->readQuery($query));              $this->id = $result['id'];             $this->acc_id = $result['acc_id'];            $this->room = $result['room'];             $this->image_name = $result['image_name'];             $this->queue = $result['queue'];             return $this;        }    }    public function create() {        $query = "INSERT INTO `room_photo` (`acc_id`,`room`,`image_name`, `queue`) VALUES  ('"                . $this->acc_id . "','"                . $this->room . "','"                . $this->image_name . "', '"                 . $this->queue . "')";              $db = new Database();        $result = $db->readQuery($query);        if ($result) {             return TRUE;        } else {            return FALSE;        }    }    public function all() {        $query = "SELECT * FROM `room_photo` ORDER BY queue ASC";        $db = new Database();        $result = $db->readQuery($query);        $array_res = array();        while ($row = mysqli_fetch_array($result)) {            array_push($array_res, $row);        }        return $array_res;    }    public function update() {        $query = "UPDATE  `room_photo` SET "                . "`room` ='" . $this->room . "', "                . "`image_name` ='" . $this->image_name . "', "                 . "`queue` ='" . $this->queue . "' "                . "WHERE `id` = '" . $this->id . "'";        $db = new Database();        $result = $db->readQuery($query);        if ($result) {            return $this->__construct($this->id);        } else {            return FALSE;        }    }    public function delete() {        $query = 'DELETE FROM `room_photo` WHERE id="' . $this->id . '"';        $db = new Database();        return $db->readQuery($query);    }     public function getRoomPhotosById($room) {        $query = "SELECT * FROM `room_photo` WHERE `room`= $room ORDER BY queue ASC";        $db = new Database();        $result = $db->readQuery($query);        $array_res = array();        while ($row = mysqli_fetch_array($result)) {            array_push($array_res, $row);        }        return $array_res;    }     public function getRoomPhotosByAccId($acc_id) {        $query = "SELECT * FROM `room_photo` WHERE `acc_id`= $acc_id ORDER BY queue ASC";        $db = new Database();        $result = $db->readQuery($query);        $array_res = array();        while ($row = mysqli_fetch_array($result)) {            array_push($array_res, $row);        }        return $array_res;    }            public function arrange($key, $img) {        $query = "UPDATE `room_photo` SET `queue` = '" . $key . "'  WHERE id = '" . $img . "'";        $db = new Database();        $result = $db->readQuery($query);        return $result;    }}