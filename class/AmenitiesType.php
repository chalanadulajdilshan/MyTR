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
class AmenitiesType {

    public $id;
    public $title;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT *  FROM `amenities_type` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->title = $result['title'];

            return $this;
        }
    }

    public function create() {


        $query = "INSERT INTO `amenities_type` (`title` ) VALUES  ('"
                . $this->title . "')";

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

        $query = "SELECT * FROM `amenities_type`";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {

        $query = "UPDATE  `amenities_type` SET "
                . "`title` ='" . $this->title . "' "
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

        $this->deleteAmenities();
        
        $query = 'DELETE FROM `amenities_type` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }

    public function deleteAmenities() {



        $AMENITIES = new Amenities(NULL);



        $allPhotos = $AMENITIES->getAmenitiesById($this->id);



        foreach ($allPhotos as $photo) {

  
            $AMENITIES->id = $photo["id"];

            $AMENITIES->delete();
        }
    }

}
