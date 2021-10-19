<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Page
 *
 * @author chalana
 */
class Facility {

    public $id;
    public $title;
    public $type;
    public $icion;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT *  FROM `facility` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->title = $result['title'];
            $this->type = $result['type'];
            $this->icion = $result['icion'];


            return $this;
        }
    }

    public function create() {


        $query = "INSERT INTO `facility` (`title`,`type`,`icion`) VALUES  ('"
                . $this->title . "','" 
                . $this->type . "','" 
                . $this->icion . "')";
 
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

        $query = "SELECT * FROM `facility`";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {

        $query = "UPDATE  `facility` SET "
                . "`type` ='" . $this->type . "', "
                . "`title` ='" . $this->title . "', "
                . "`icion` ='" . $this->icion . "' "
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

        $query = 'DELETE FROM `facility` WHERE id="' . $this->id . '"';
 
        $db = new Database();

        return $db->readQuery($query);
    }

}
