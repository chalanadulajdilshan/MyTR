<?php

/**
 * Description of Product
 *
 * @author sublime holdings
 * @web chalana
 */
class AccommodationFacility {

    public $id;
    public $acc_id;
    public $facility_id;
    public $queue;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT * FROM `accommodation_facility` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->acc_id = $result['acc_id'];
            $this->facility_id = $result['facility_id'];

            return $this;
        }
    }

    public function create() {

        $query = "INSERT INTO `accommodation_facility` (`acc_id`, `facility_id`) VALUES  ('"
                . $this->acc_id . "', '"
                . $this->facility_id . "')";
        
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

        $query = "SELECT * FROM `accommodation_facility` ORDER BY `id` ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function getAcAccommodationFacilityById($acc_id) {


        $query = "SELECT * FROM `accommodation_facility` WHERE `acc_id`= $acc_id  ";

        $db = new Database();
        $result = $db->readQuery($query);

        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }
        return $array_res;
    }

    public function update() {

        $query = 'UPDATE `accommodation_facility` SET `name`= "' . $this->name . '" WHERE id="' . $this->id . '"';

        $db = new Database();
        $result = $db->readQuery($query);

        if ($result) {
            return $this->__construct($this->id);
        } else {
            return FALSE;
        }
    }

    public function delete($id, $acc_id) {

        $query = 'DELETE FROM `accommodation_facility` WHERE `facility_id`= "' . $id . '" AND acc_id="' . $acc_id. '"';

       
        $db = new Database();

        return $db->readQuery($query);
    }
    public function deleteAdmin($id) {

        $query = 'DELETE FROM `accommodation_facility` WHERE  id="' . $id . '"';

      
        $db = new Database();

        return $db->readQuery($query);
    }

}
