<?php

/**
 * Description of Product
 *
 * @author sublime holdings
 * @web www.sublime.lk
 */
class HelpCenter {

    //put your code here
    public $id;
    public $type;
    public $title;
    public $description;
    public $queue;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT * FROM `help_center` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->type = $result['type'];
            $this->title = $result['title'];
            $this->queue = $result['queue'];
            $this->description = $result['description'];

            return $this;
        }
    }

    public function create() {

        $query = "INSERT INTO `help_center` (`type`, `title`,`description`, `queue`) VALUES  ('" . $this->type . "', "
                . "'" . $this->title . "',"
                . "'" . $this->description . "',"
                . "'" . $this->queue . "')";

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

        $query = "SELECT * FROM `help_center` ORDER BY `type` ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {

        $query = 'UPDATE `help_center` SET '
                . "`type` ='" . $this->type . "', "
                . "`title` ='" . $this->title . "', "
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

        $query = 'DELETE FROM `help_center` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }

    public function GetCitiesByDistrict($title) {

        $query = "SELECT * FROM `help_center` WHERE `title` = '" . $title . "' ORDER BY `queue` ASC";

        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function getZipCodeById($id) {

        $query = "SELECT `description` FROM `help_center` WHERE `id` = '" . $id . "' ORDER BY `queue` ASC";

        $db = new Database();
        $result = mysqli_fetch_array($db->readQuery($query));
        return $result['description'];
    }

}
