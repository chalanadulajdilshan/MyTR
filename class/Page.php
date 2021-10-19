<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Page
 *
 * @author Suharshana DsW
 */
class Page {

    public $id;
    public $title;
    public $short_description;
    public $description;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT *  FROM `pages` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->title = $result['title'];
            $this->short_description = $result['short_description'];
            $this->description = $result['description'];



            return $this;
        }
    }

    public function create() {

        $query = "INSERT INTO `pages` (`title`,`short_description`,`description`) VALUES  ('"
                . $this->title . "', '"
                . $this->short_description . "', '"
                . $this->description . "')";


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

        $query = "SELECT * FROM `pages`";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {

        $query = "UPDATE  `pages` SET "
                . "`title` ='" . $this->title . "', "
                . "`short_description` ='" . $this->short_description . "', "
                . "`description` ='" . $this->description . "' "
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

        $query = 'DELETE FROM `pages` WHERE id="' . $this->id . '"';
        
        $db = new Database();

        return $db->readQuery($query);
    }

}
