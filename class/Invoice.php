<?php

/**
 * Description of Product
 *
 * @author sublime holdings
 * @web www.sublime.lk
 */
class Invoice {

    //put your code here
    public $id;
    public $acc_id;
    public $invoice_id;
    public $status;
    public $payment_status;
    public $sent_date;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT * FROM `invoice` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->acc_id = $result['acc_id'];
            $this->invoice_id = $result['invoice_id'];
            $this->sent_date = $result['sent_date'];
            $this->payment_status = $result['payment_status'];
            $this->status = $result['status'];

            return $this;
        }
    }

    public function create() {

        $query = "INSERT INTO `invoice` (`acc_id`, `invoice_id`, `sent_date`) VALUES  ('" . $this->acc_id . "', '" . $this->invoice_id . "','" . $this->sent_date . "')";

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

        $query = "SELECT * FROM `invoice` ORDER BY `acc_id` ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {

        $query = 'UPDATE `invoice` SET `acc_id`= "' . $this->acc_id . '" WHERE id="' . $this->id . '"';

        $db = new Database();
        $result = $db->readQuery($query);

        if ($result) {
            return $this->__construct($this->id);
        } else {
            return FALSE;
        }
    }

    public function delete() {

        $query = 'DELETE FROM `invoice` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }

    public function getCountByAccommodationId($acc_id) {

        $query = "SELECT count(id)   as 'count' FROM `invoice` WHERE `acc_id` = '" . $acc_id . "' ";

        $db = new Database();
        $result = mysqli_fetch_array($db->readQuery($query));

        return $result['count'];
    }

    public function getInvoiceStatusByAccId($acc_id) {

        $query = "SELECT id   as 'id' FROM `invoice` WHERE `acc_id` = '" . $acc_id . "' ";

        $db = new Database();
        $result = mysqli_fetch_array($db->readQuery($query));

        return $result['id'];
    }

    public function getInvoiceByAccommodationId($acc_id) {

        $query = "SELECT * FROM `invoice` WHERE `invoice` WHERE `acc_id` = '" . $acc_id . "' ORDER BY `sent_date` ASC";

        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

}
