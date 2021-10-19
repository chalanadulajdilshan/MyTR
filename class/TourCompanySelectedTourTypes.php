<?php

/**
 * Description of Product
 *
 * 
 *  
 */
class TourCompanySelectedTourTypes {

    public $id;
    public $tour_company;
    public $tour_type;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT  * FROM `tour_company_selected_tour_type` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->tour_company = $result['tour_company'];
            $this->tour_type = $result['tour_type'];
            return $this;
        }
    }

    public function create() {

        $query = "INSERT INTO `tour_company_selected_tour_type` (`tour_company`, `tour_type` ) VALUES  ('"
                . $this->tour_company . "', '"
                . $this->tour_type . "')";

        $db = new Database();

        $result = $db->readQuery($query);
        if ($result) {

            $last_id = mysqli_insert_id();



            return $this->__construct($last_id);
        } else {

            return FALSE;
        }
    }

    public function getTourTypesByCompany($id) {

        $query = "SELECT * FROM `tour_company_selected_tour_type` WHERE `tour_company`= $id ORDER BY tour_type ASC";

        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {

        $query = "UPDATE  `tour_company_selected_tour_type` SET "
                . "`tour_company` ='" . $this->tour_company . "',"
                . "`tour_type` ='" . $this->tour_type . "' "
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

        $query = "SELECT * FROM `tour_company_selected_tour_type` ORDER BY `tour_type` ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function getTourPackagesByCompany($id) {

        $query = "SELECT * FROM `tour_company_selected_tour_type`  WHERE `tour_company`= '" . $id . "'";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function arrange($key, $img) {
        $query = "UPDATE `tour_company_selected_tour_type` SET `sort` = '" . $key . "'  WHERE id = '" . $img . "'";
        $db = new Database();
        $result = $db->readQuery($query);
        return $result;
    }

    public function delete() {

        $this->deletePhotos();



        $query = 'DELETE FROM `tour_company_selected_tour_type` WHERE id="' . $this->id . '"';



        $db = new Database();



        return $db->readQuery($query);
    }

    public function deleteSelected() {


        $query = 'DELETE FROM `tour_company_selected_tour_type` WHERE id="' . $this->id . '"';



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

    public function countTourCompanyByType($tour_type) {

        $query = "SELECT count(DISTINCT(tour_company)) as `price` FROM `tour_company_selected_tour_type` WHERE `tour_type` = '" . $tour_type . "' ";

        $db = new Database();
        $result = mysqli_fetch_array($db->readQuery($query));

        return $result['price'];
    }
   

    public function getCountCompanyPackages($id) {

        $query = "SELECT count(*) FROM `tour_company_selected_tour_type` WHERE `tour_company` = '" . $id . "' ";

        $db = new Database();
        $result = mysqli_fetch_array($db->readQuery($query));

        return $result;
    }

    public function getPackageById($id) {

        $query = "SELECT `id` FROM `tour_company_selected_tour_type` WHERE `customer_id`= '" . $id . "' AND `is_selected`= 1";

        $db = new Database();
        $result = mysqli_fetch_array($db->readQuery($query));
        return $result['id'];
    }

}
