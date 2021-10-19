<?php

/**
 * Description of Product
 *
 * 
 *  
 */
class TourCompanyPackageSelected {

    public $id;
    public $customer_id;
    public $tour_company;
    public $selected_package;
    public $price;
    public $include;
    public $exclude;
    public $queue;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT  * FROM `tour_company_selected_package` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->customer_id = $result['customer_id'];
            $this->tour_company = $result['tour_company'];
            $this->selected_package = $result['selected_package'];
            $this->price = $result['price'];
            $this->include = $result['include'];
            $this->exclude = $result['exclude'];
            $this->queue = $result['queue'];
            return $this;
        }
    }

    public function create() {



        $query = "INSERT INTO `tour_company_selected_package` (`customer_id`, `tour_company`, `selected_package`,`price`,`include`,`exclude`) VALUES  ('"
                . $this->customer_id . "', '"
                . $this->tour_company . "', '"
                . $this->selected_package . "', '"
                . $this->price . "', '"
                . $this->include . "', '"
                . $this->exclude . "')";

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

        $query = "SELECT * FROM `tour_company_selected_package` WHERE `customer_id`= $id ORDER BY queue ASC";

        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {

        $query = "UPDATE  `tour_company_selected_package` SET "
                . "`title` ='" . $this->title . "',"
                . "`selected_package` ='" . $this->selected_package . "',"
                . "`days` ='" . $this->days . "',"
                . "`price` ='" . $this->price . "',"
                . "`include` ='" . $this->include . "',"
                . "`exclude` ='" . $this->exclude . "' "
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

        $query = "SELECT * FROM `tour_company_selected_package` ORDER BY `queue` ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function getTourPackagesByCompany($id) {

        $query = "SELECT * FROM `tour_company_selected_package`  WHERE `tour_company`= '" . $id . "'";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function arrange($key, $img) {
        $query = "UPDATE `tour_company_selected_package` SET `sort` = '" . $key . "'  WHERE id = '" . $img . "'";
        $db = new Database();
        $result = $db->readQuery($query);
        return $result;
    }

    public function delete() {

        $this->deletePhotos();



        $query = 'DELETE FROM `tour_company_selected_package` WHERE id="' . $this->id . '"';



        $db = new Database();



        return $db->readQuery($query);
    }

    public function deleteSelected() {


        $query = 'DELETE FROM `tour_company_selected_package` WHERE id="' . $this->id . '"';



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

        $query = "SELECT min(price) as `price` FROM `tour_company_selected_package` WHERE `tour_company` = '" . $id . "' ";

        $db = new Database();
        $result = mysqli_fetch_array($db->readQuery($query));

        return $result['price'];
    }

    public function getCountCompanyPackages($id) {

        $query = "SELECT count(*) FROM `tour_company_selected_package` WHERE `tour_company` = '" . $id . "' ";

        $db = new Database();
        $result = mysqli_fetch_array($db->readQuery($query));

        return $result;
    }

    public function getPackageById($id) {

        $query = "SELECT `id` FROM `tour_company_selected_package` WHERE `customer_id`= '" . $id . "' AND `is_selected`= 1";

        $db = new Database();
        $result = mysqli_fetch_array($db->readQuery($query));
        return $result['id'];
    }

}
