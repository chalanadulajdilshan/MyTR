<?php

/**

 * Description of User

 *

 * @author sublime holdings

 * @web www.sublime.lk

 * */
class Database {

//  private $host = 'localhost';
//    private $name = 'suhatdux_mytravelpartner';
//  private $user = 'suhatdux_mytravelpartner';
//   private $password = '[?1rSW[(%(g~';


    private $host = 'localhost';
    private $name = 'mytravelpartner';
    private $user = 'root';
    private $password = '';
    public $DB_CON = NULL;

    public function __construct() {

        $this->DB_CON = mysqli_connect($this->host, $this->user, $this->password, $this->name);
    }

    public function readQuery($query) {
        $result = mysqli_query($this->DB_CON, $query) or die(mysqli_error());

        return $result;
    }

}
