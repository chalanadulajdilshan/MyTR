<?php

/**
 * Description of Product
 *
 * 
 *  
 */
class RentCarCompany {

    public $id;
    public $customer_id;
    public $title;
    public $address_1;
    public $address_2;
    public $district;
    public $city;
    public $zip_code;
    public $contact_name;
    public $email;
    public $contact_number_1;
    public $contact_number_2;
    public $image_name;
    public $is_publish;
    public $description;
    public $agree;
    public $queue;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT  * FROM `rent_car_company` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->customer_id = $result['customer_id'];
            $this->title = $result['title'];
            $this->address_1 = $result['address_1'];
            $this->address_2 = $result['address_2'];
            $this->district = $result['district'];
            $this->city = $result['city'];
            $this->zip_code = $result['zip_code'];
            $this->contact_name = $result['contact_name'];
            $this->email = $result['email'];
            $this->contact_number_1 = $result['contact_number_1'];
            $this->contact_number_2 = $result['contact_number_2'];
            $this->image_name = $result['image_name'];
            $this->is_publish = $result['is_publish'];
            $this->description = $result['description'];
            $this->agree = $result['agree'];
            $this->queue = $result['queue'];
            return $this;
        }
    }

    public function create() {



        $query = "INSERT INTO `rent_car_company` (`customer_id`,`title`,`address_1`,`address_2`,`district`,`city`,`zip_code`,`contact_name`,`email`,`contact_number_1`,`contact_number_2`,`image_name`,`description`,`agree`,`queue`) VALUES  ('"
                . $this->customer_id . "', '"
                . $this->title . "', '"
                . $this->address_1 . "', '"
                . $this->address_2 . "', '"
                . $this->district . "', '"
                . $this->city . "', '"
                . $this->zip_code . "', '"
                . $this->contact_name . "', '"
                . $this->email . "', '"
                . $this->contact_number_1 . "', '"
                . $this->contact_number_2 . "', '"
                . $this->image_name . "', '"
                . $this->description . "', '"
                . $this->agree . "', '"
                . $this->queue . "')";

        $db = new Database();

        $result = $db->readQuery($query);
        if ($result) {

            $last_id = mysqli_insert_id();



            return $this->__construct($last_id);
        } else {

            return FALSE;
        }
    }

    public function getCompanyByCustomer($id) {

        $query = "SELECT * FROM `rent_car_company` WHERE `customer_id`= $id ORDER BY queue ASC";

        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {

        $query = "UPDATE  `rent_car_company` SET "
                . "`title` ='" . $this->title . "',"
                . "`address_1` ='" . $this->address_1 . "',"
                . "`address_2` ='" . $this->address_2 . "',"
                . "`district` ='" . $this->district . "',"
                . "`city` ='" . $this->city . "',"
                . "`zip_code` ='" . $this->zip_code . "',"
                . "`contact_name` ='" . $this->contact_name . "',"
                . "`email` ='" . $this->email . "',"
                . "`contact_number_1` ='" . $this->contact_number_1 . "',"
                . "`contact_number_2` ='" . $this->contact_number_2 . "',"
                . "`image_name` ='" . $this->image_name . "',"
                . "`is_publish` ='" . $this->is_publish . "',"
                . "`agree` ='" . $this->agree . "', "
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

    public function updateCompanyActive() {

        $query = "UPDATE  `rent_car_company` SET "
                . "`description` ='" . $this->description . "', "
                . "`is_publish` ='" . $this->is_publish . "' "
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

        $query = "SELECT * FROM `rent_car_company` ORDER BY `queue` ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function allPublished() {

        $query = "SELECT * FROM `rent_car_company` WHERE `is_publish` = 1 ORDER BY queue ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function getCompanyByPublished() {

        $query = "SELECT * FROM `rent_car_company` WHERE `is_publish` = 1 ORDER BY queue ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function getCompanyByUnPublished() {

        $query = "SELECT * FROM `rent_car_company` WHERE `is_publish` = 0 ORDER BY queue ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function getAllByFilter($rent_car_type, $start_rate, $district, $pageLimit, $setLimit) {



        $query = "SELECT DISTINCT(rent_car_company.id),rent_car_company.image_name,rent_car_company.title ,rent_car_company.city,rent_car_company.description,rent_car_company.district   FROM `rent_car_company` INNER JOIN rent_car ON rent_car.company_id=rent_car_company.id WHERE";

        if (!empty($rent_car_type)) {
            $rent_car_type_filter = implode(",", $rent_car_type);
            $query .= " rent_car.type in( " . $rent_car_type_filter . ")  AND ";
        }

        if (!empty($start_rate)) {
            $start_rate_filter = implode(",", $start_rate);
            $query .= " rent_car_company.star_rating in( " . $start_rate_filter . ")  AND ";
        }
        if (!empty($districts)) {
            $district_filter = implode(",", $districts);
            $query .= "rent_car_company.district in( " . $district_filter . ")  AND ";
        }
        $query .= " rent_car_company.is_publish = 1  ORDER BY rent_car_company.queue ASC LIMIT " . $pageLimit . " , " . $setLimit;

        $db = new Database();
        $result = $db->readQuery($query);
        $out_put = '';
        $out_put .= '';

        while ($row = mysqli_fetch_array($result)) {
            $RENT_CARS = new RentCar(NULL);
            $RENT_CAR_PRICE = new RentCarPrice(NULL);
            $DEFULTDATA = new DefaultData(NULL);
            $CITY = new City($row['city']);
            $DISTRICT = new District($row['district']);

            $out_put .= ' <div class="product-long-item"> 
                                                <div class="row equal-height shrink-auto-md gap-15"> 
                                                    <div class="col-12 col-shrink">
                                                       <a href="rent_car_companies/view/' . base64_encode($row['id']) . '" >
                                                        <div class="image height-auto">
                                                            <img src="upload/rent-a-car/gallery/thumb/' . $row['image_name'] . '" alt="' . $row['title'] . '" />
                                                        </div>
                                                        </a>
                                                    </div>

                                                    <div class="col-12 col-auto">
                                                        <div class="col-inner d-flex flex-column">
                                                            <div   lass="mb-5">
                                                                <div class="d-flex">
                                                                    <div> 
                                                                        <div class="rating-item rating-sm">
                                                                            <div class="rating-icons">
                                                                                <p class="rating-text text-muted"> <span class="material-icons star-size-1">    star   </span> <span class="bg-primary">6.0</span> <strong class="text-dark">Good</strong> <span class="font13">- 1,2547 reviews</span></p>  
                                                                            </div>
                                                                        </div>
                                                                        <h5><a href="rent_car_companies/view/' . base64_encode($row['id']) . '">' . $row['title'] . '</a></h5>
                                                                        <p class = "location"><i class = "fas fa-map-marker-alt text-primary"></i>' . $DISTRICT->name . ' , ' . $CITY->name . '</p>

                                                                    </div>

                                                                    <div class="ml-auto">
                                                                        <div class="price">
                                                                            start from';
            foreach ($RENT_CARS->getCarsByCompany($row['id']) as $key => $rent_cars) {
                $min_price = $RENT_CAR_PRICE->getMinPriceByCompany($rent_cars['id']);
                foreach ($min_price as $min) {
                    foreach ($DEFULTDATA->GetCurrancyType() as $key => $curancy) {
                        if ($min['currency_type'] == $key) {
                            $out_put .= ' <span class="text-secondary f-14">' . $curancy . ' ' . $min['min_prce'] . '</span>';
                        }
                    }
                }
            }
            $out_put .= '  per package
                                                                        </div>
                                                                      </div>
                                                                </div>
                                                            </div>

                                                            <div class="mb-5 mt-5">
                                                               ' . substr($row['description'], 0, 115) . '... 
                                                            </div>

                                                            <div class="content-bottom mt-auto">
                                                                <div class="d-flex align-items-center">
                                                                    <div>
                                                                        <ul class="meta-list">';
            $COUNT_VEHICLES = $RENT_CARS->getCountRentCarsByCompany($row['id']);
            if ($COUNT_VEHICLES > 1) {
                $out_put .= $COUNT_VEHICLES . ' ' . 'Vehicles Available';
            } else {
                $out_put .= $COUNT_VEHICLES . ' ' . 'Vehicle Available';
            }

            $out_put .= ' </ul> 
                                </div>
                                     <div class="ml-auto">
                                            <a href="rent_car_companies/view/' . base64_encode($row['id']) . '" class="btn btn-primary btn-sm btn-wide">Details</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div> ';
        }
        $out_put .= '';

        if (!empty($out_put)) {
            echo $out_put;
        } else {
            echo $out_put = '<p style = "color: red;font-weight: 600;">No Rent vehicles Found..!</p>';
        }
    }

    public function showPagination($per_page, $page) {

        $query = "SELECT COUNT(*) as totalCount FROM `rent_car_company` WHERE   `is_publish` = 1  ORDER BY `queue` asc";


        $page_url = "?";

        $db = new Database();

        $result = $db->readQuery($query);

        $row = mysqli_fetch_array($result);

        $total = $row['totalCount'];

        $adjacents = "2";

        $page = ($page == 0 ? 1 : $page);
        $start = ($page - 1) * $per_page;
        $first = $start + 1;
        $last = $start + $per_page;
        $prev = $page - 1;
        $next = $page + 1;

        $setLastpage = ceil($total / $per_page);


        $lpm1 = $setLastpage - 1;
        $setPaginate = "";
        $setPaginate .= "<div class='setPage'>Showing result $first to $last from $total</div>";
        if ($setLastpage > 1) {
            $setPaginate .= "<ul class='setPaginate'>";


            if ($page > 1) {
                $setPaginate.= "<li><a href='#' class='page' page='$prev'>&laquo;</a></li>";
            } else {
                $setPaginate.= "<li><a class='current_page1 page'>&laquo;</a></li>";
            }
            if ($setLastpage < 7 + ($adjacents * 2)) {

                for ($counter = 1; $counter <= $setLastpage; $counter++) {

                    if ($counter == $page)
                        $setPaginate.= "<li><a class='current_page  '>$counter</a></li>";
                    else
                        $setPaginate.= "<li><a href='#' class='page' page='$counter'>$counter</a></li>";
                }
            }
            elseif ($setLastpage > 5 + ($adjacents * 2)) {
                if ($page < 1 + ($adjacents * 2)) {
                    for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++) {
                        if ($counter == $page)
                            $setPaginate.= "<li><a class='current_page page'>$counter</a></li>";
                        else
                            $setPaginate.= "<li><a href='#' class='page' page='$counter'>$counter</a></li>";
                    }
                    $setPaginate.= "<li class='dot'>...</li>";
                    $setPaginate.= "<li><a href='#' class='page' page='$lpm1'>$lpm1</a></li>";
                    $setPaginate.= "<li><a href='#' class='page' page='$setLastpage'>$setLastpage</a></li>";
                }
                elseif ($setLastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2)) {
                    $setPaginate.= "<li><a href='#' class='page' page='1'>1</a></li>";
                    $setPaginate.= "<li><a href='#' class='page' page='2'>2</a></li>";
                    $setPaginate.= "<li class='dot'>...</li>";
                    for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++) {
                        if ($counter == $page)
                            $setPaginate.= "<li><a class='current_page page'>$counter</a></li>";
                        else
                            $setPaginate.= "<li><a href='#' class='page' page='$counter'>$counter</a></li>";
                    }
                    $setPaginate.= "<li class='dot'>..</li>";
                    $setPaginate.= "<li><a href='#' class='page' page='$lpm1'>$lpm1</a></li>";
                    $setPaginate.= "<li><a href='#' class='page' page='$setLastpage'>$setLastpage</a></li>";
                }
                else {
                    $setPaginate.= "<li><a href='#' class='page' page='1>1</a></li>";
                    $setPaginate.= "<li><a href='#' class='page' page='2'>2</a></li>";
                    $setPaginate.= "<li class='dot'>..</li>";
                    for ($counter = $setLastpage - (2 + ($adjacents * 2)); $counter <= $setLastpage; $counter++) {
                        if ($counter == $page)
                            $setPaginate.= "<li><a class='current_page page'>$counter</a></li>";
                        else
                            $setPaginate.= "<li><a href='#' class='page' page='$counter'>$counter</a></li>";
                    }
                }
            }

            if ($page < $counter - 1) {
                $setPaginate.= "<li><a href='#' class='page' page='$next'>&raquo;</a></li>";
            } else {
                $setPaginate.= "<li><a class='current_page1 page'>&raquo;</a></li>";
            }

            $setPaginate.= "</ul>\n";
        }

        echo $setPaginate;
    }

    public function arrange($key, $img) {
        $query = "UPDATE `rent_car_company` SET `sort` = '" . $key . "'  WHERE id = '" . $img . "'";
        $db = new Database();
        $result = $db->readQuery($query);
        return $result;
    }

    public function getTourMinDate($id) {

        $query = " SELECT `rent_car_company_packages.id` FROM `rent_car_company`  INNER JOIN `rent_car_company_packages` ON rent_car_company_packages.rent_car_company = rent_car_company_selected_package.rent_car_company WHERE  `rent_car_company`= " . $id . " ";

        $db = new Database();
        $result = $db->readQuery($query);

        return $result;
    }

    public function getCountByCompanyByDistrict($id) {

        $query = "SELECT count(id) as 'count' FROM `rent_car_company` WHERE `district` = '" . $id . "' ";

        $db = new Database();
        $result = mysqli_fetch_array($db->readQuery($query));

        return $result['count'];
    }

    public function delete() {

        $RENT_CAR = new RentCar($this->id);
        $RENT_CAR->delete();
        unlink(Helper::getSitePath() . "upload/rent-a-car/gallery/" . $this->image_name);
        unlink(Helper::getSitePath() . "upload/rent-a-car/gallery/thumb/" . $this->image_name);

        $query = 'DELETE FROM `rent_car_company` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }

    public function deletePhotos() {

        $PRODUCT_PHOTO = new TourDate(NULL);

        $allPhotos = $PRODUCT_PHOTO->getTourDatesById($this->id);
        return TRUE;
    }

}
