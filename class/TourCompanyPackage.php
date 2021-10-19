<?php

/**
 * Description of Product
 *
 * 
 *  
 */
class TourCompanyPackage {

    public $id;
    public $customer_id;
    public $title;
    public $tour_company;
    public $type;
    public $days;
    public $price;
    public $image_name;
    public $include_exclude;
    public $description;
    public $queue;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT  * FROM `tour_company_packages` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->customer_id = $result['customer_id'];
            $this->title = $result['title'];
            $this->tour_company = $result['tour_company'];
            $this->type = $result['type'];
            $this->days = $result['days'];
            $this->price = $result['price'];
            $this->image_name = $result['image_name'];
            $this->include_exclude = $result['include_exclude'];
            $this->description = $result['description'];
            $this->queue = $result['queue'];
            return $this;
        }
    }

    public function create() {



        $query = "INSERT INTO `tour_company_packages` (`customer_id`,`title`,`tour_company`, `type`,`days`,`price`,`image_name`, `include_exclude`, `description`) VALUES  ('"
                . $this->customer_id . "', '"
                . $this->title . "', '"
                . $this->tour_company . "', '"
                . $this->type . "', '"
                . $this->days . "', '"
                . $this->price . "', '"
                . $this->image_name . "', '"
                . $this->include_exclude . "', '"
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

    public function getToursByCustomer($id) {

        $query = "SELECT * FROM `tour_company_packages` WHERE `customer_id`= $id ORDER BY queue ASC";

        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {

        $query = "UPDATE  `tour_company_packages` SET "
                . "`title` ='" . $this->title . "',"
                . "`type` ='" . $this->type . "',"
                . "`days` ='" . $this->days . "',"
                . "`price` ='" . $this->price . "',"
                . "`image_name` ='" . $this->image_name . "',"
                . "`include_exclude` ='" . $this->include_exclude . "',"
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

    public function all() {

        $query = "SELECT * FROM `tour_company_packages` ORDER BY `queue` ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function getTourPackagesByCompany($id) {

        $query = "SELECT * FROM `tour_company_packages`  WHERE `tour_company`= '" . $id . "'";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function arrange($key, $img) {
        $query = "UPDATE `tour_company_packages` SET `sort` = '" . $key . "'  WHERE id = '" . $img . "'";
        $db = new Database();
        $result = $db->readQuery($query);
        return $result;
    }

    public function delete() {

        $this->deletePhotos();

        $query = 'DELETE FROM `tour_company_packages` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }

    public function deletePhotos() {
        $TOUR_DATE = new TourDate(NULL);

        $TOUR_DATE_ID = $TOUR_DATE->getTourDatesById($this->id);

        foreach ($TOUR_DATE_ID as $photo) {

            $TOUR_DATES = new TourDate($photo['id']);

            $TOUR_DATES->delete();
        }
    }

    public function getMinPriceByTour($id) {

        $query = "SELECT min(price) as `price` FROM `tour_company_packages` WHERE `tour_company` = '" . $id . "' ";

        $db = new Database();
        $result = mysqli_fetch_array($db->readQuery($query));

        return $result['price'];
    }

    public function getCountCompanyPackages($id) {

        $query = "SELECT count(*) FROM `tour_company_packages` WHERE `tour_company` = '" . $id . "' ";

        $db = new Database();
        $result = mysqli_fetch_array($db->readQuery($query));

        return $result;
    }

    public function countTourType($id) {

        $query = "SELECT count(id) as 'count' FROM `tour_company_packages` WHERE `type` = '" . $id . "' ";

        $db = new Database();
        $result = mysqli_fetch_array($db->readQuery($query));

        return $result['count'];
    }

    public function getPackageById($id) {

        $query = "SELECT `id` FROM `tour_company_packages` WHERE `customer_id`= '" . $id . "'";

        $db = new Database();
        $result = mysqli_fetch_array($db->readQuery($query));
        return $result['id'];
    }

}
