<?php

/**
 * Description of Product
 *
 * 
 *  
 */
class TourCompany {

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

            $query = "SELECT  * FROM `tour_company` WHERE `id`=" . $id;

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

        $query = "INSERT INTO `tour_company` (`customer_id`,`title`,`address_1`,`address_2`,`district`,`city`,`zip_code`,`contact_name`,`email`,`contact_number_1`,`contact_number_2`,`image_name`,`description`,`agree`,`queue`) VALUES  ('"
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

    public function getToursByCustomer($id) {

        $query = "SELECT * FROM `tour_company` WHERE `customer_id`= $id ORDER BY queue ASC";

        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {

        $query = "UPDATE  `tour_company` SET "
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

    public function updateActive() {

        $query = "UPDATE  `tour_company` SET "
                . "`is_publish` ='" . $this->is_publish . "',"
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

        $query = "SELECT * FROM `tour_company` ORDER BY `queue` ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function getTourCompanyByPublished() {


        $query = "SELECT * FROM `tour_company` WHERE `is_publish`= 1 ORDER BY queue ASC";

        $db = new Database();

        $result = $db->readQuery($query);

        $array_res = array();



        while ($row = mysqli_fetch_array($result)) {

            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function getTourCompanyByNotPublished() {



        $query = "SELECT * FROM `tour_company` WHERE `is_publish`= 0 ORDER BY queue ASC";



        $db = new Database();



        $result = $db->readQuery($query);

        $array_res = array();



        while ($row = mysqli_fetch_array($result)) {

            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function getAllByFilter($tour_type, $start_rate, $district, $pageLimit, $setLimit) {


        $query = "SELECT distinct(tour_company.id),tour_company.image_name,tour_company.title,tour_company.description    FROM `tour_company` INNER JOIN tour_company_selected_tour_type ON  tour_company_selected_tour_type.tour_company = tour_company.id WHERE ";

        if (!empty($tour_type)) {
            $tour_type_filter = implode(",", $tour_type);
            $query .= " tour_company_selected_tour_type.tour_type in( " . $tour_type_filter . ") AND  ";
        }

        if (!empty($start_rate)) {
            $start_rate_filter = implode(",", $start_rate);
            $query .= "tour_company.star_rating in( " . $start_rate_filter . ")  AND ";
        }
        if (!empty($district)) {
            $district_filter = implode(",", $district);

            $query .= "tour_company.district in( " . $district_filter . ")  AND ";
        }

        $query .= " tour_company.is_publish= 1  ORDER BY tour_company.queue ASC LIMIT " . $pageLimit . " , " . $setLimit;


        $db = new Database();
        $result = $db->readQuery($query);
        $out_put = '';

        while ($row = mysqli_fetch_array($result)) {


            $TOUR_COMPANY_PACKAGES = new TourCompanyPackage(NULL);
            $TOUR_COMPANY_PACKAGES_SELECT = new TourCompanyPackageSelected(NULL);
            $count_company_package = count($TOUR_COMPANY_PACKAGES->getTourPackagesByCompany($row['id']));
            $count_company_package_select = count($TOUR_COMPANY_PACKAGES_SELECT->getTourPackagesByCompany($row['id']));
            $count_packages = $count_company_package + $count_company_package_select;
            $min_price_1 = $TOUR_COMPANY_PACKAGES_SELECT->getMinPriceByTour($row['id']);
            $min_price_2 = $TOUR_COMPANY_PACKAGES->getMinPriceByTour($row['id']);

            $out_put .= ' <div class="col">
                <div class="product-grid-item">
                                                <a href="tour/view/' . base64_encode($row['id']) . '">
                                                    <div class="image">
                                                        <img src="upload/tour-package/main/gallery/thumb/' . $row['image_name'] . '" alt="' . $row['title'] . '">
                                                    </div>
                                                </a>

                                                <div class="content pt-10 clearfix"> 
                                                    <div class="short-info mr-0 mb-15">
                                                        <div class="rating-item rating-sm mt-3">
                                                            <div class="d-flex"> 
                                                                <div> 
                                                                    <div class="rating-item rating-sm rating-inline">
                                                                        <div class="rating-icons">
                                                                            <span class="material-icons star-size-1 m-t-3">    star   </span>  
                                                                            <span class="material-icons star-size-1 m-t-3">    star   </span>  
                                                                            <span class="material-icons star-size-1 m-t-3">    star   </span>  
                                                                            <span class="material-icons star-size-1 m-t-3">    star   </span>  
                                                                            <span class="material-icons star-size-1 m-t-3">    star   </span>  
                                                                            <p class="rating-text text-muted"><span class="bg-primary">6.0</span><span class="font13">-1,2547 reviews</span></p> 
                                                                        </div>
                                                                    </div>
                                                                </div> 
                                                            </div>
                                                            <a href="tour/view/' . base64_encode($row['id']) . '">
                                                                <h6 class="mt-5">' . $row['title'] . '</h6>
                                                            </a>
                                                        </div>

                                                        <p class="mb-10"><i class="far fa-clock"></i>  5 hours - 20 Hours | <i class="material-icons star-size-2"> directions_bike</i> ' . $count_packages . ' Tours </p>';

            $out_put .= substr($row['description'], 0, 60);
            foreach ($TOUR_COMPANY_PACKAGES_SELECT->getTourPackagesByCompany($row['id']) as $company_package_select) {

                $TOUR_PACKAGES = new TourPackage($company_package_select['selected_package']);
                $TOUR_TYPE = new TourType($TOUR_PACKAGES->tour_type);
                $out_put .= ' <p class="mb-10 mt-5"><i class="fas fa-map-marker-alt  "></i> ' . $TOUR_TYPE->title . ' & etc </p>';
                break;
            }



            $out_put .= ' <div class="price">

                                                            <div class="float-right">
                                                                start from
                                                                <span class="text-secondary">';

            if ($min_price_1 < $min_price_2) {
                $out_put .= '$' . $min_price_2;
            } else {
                $out_put .='$' . $min_price_1;
            }
            $out_put .= '</span>
                                                                per person
                                                            </div>
                                                        </div>


                                                        <div class = "content-bottom mt-auto mt-10"  >

                                                            <div class = "d-flex align-items-center">
                                                                <div>
                                                                    <ul class = "list-icon-absolute list-inline-block">
                                                                        <a href = "tour/view/' . base64_encode($row['id']) . '" class = "btn btn-primary btn-sm btn-wide" style="color: white;">View Tours</a>     
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                  </div>';
        }

        if (!empty($out_put)) {
            echo $out_put;
        } else {
            echo $out_put = '<p style = "color: red;font-weight: 600;">No Data Found..!</p>';
        }
    }

    public function showPagination($tour_type, $start_rate, $per_page, $page) {

        $query = "SELECT COUNT(distinct(tour_company.id)) as totalCount FROM `tour_company` INNER JOIN tour_company_selected_tour_type ON  tour_company_selected_tour_type.tour_company = tour_company.id WHERE  ";

        if (!empty($tour_type)) {
            $tour_type_filter = implode(",", $tour_type);
            $query .= " tour_company_selected_tour_type.tour_type in( " . $tour_type_filter . ") AND   ";
        }

        if (!empty($start_rate)) {
            $start_rate_filter = implode(",", $start_rate);
            $query .= " AND `star_rating` in( " . $start_rate_filter . ")  AND ";
        }

        $query .= " tour_company.is_publish=1  ORDER BY tour_company.queue asc";
      
        $db = new Database();

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

    public function countTourCompanyByDistrict($id) {

        $query = "SELECT count(id) as `price` FROM `tour_company` WHERE `district` = '" . $id . "' ";

        $db = new Database();
        $result = mysqli_fetch_array($db->readQuery($query));

        return $result['price'];
    }

    public function arrange($key, $img) {
        $query = "UPDATE `tour_company` SET `sort` = '" . $key . "'  WHERE id = '" . $img . "'";
        $db = new Database();
        $result = $db->readQuery($query);
        return $result;
    }

    public function delete() {

        $this->deletePhotos();

        unlink(Helper::getSitePath() . "upload/tour-package/main/gallery/" . $this->image_name);
        unlink(Helper::getSitePath() . "upload/tour-package/main/gallery/thumb/" . $this->image_name);

        $query = 'DELETE FROM `tour_company` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }

    public function deletePhotos() {

        $PRODUCT_PHOTO = new TourDate(NULL);

        $allPhotos = $PRODUCT_PHOTO->getTourDatesById($this->id);
        return TRUE;
    }

}
