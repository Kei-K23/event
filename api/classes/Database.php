<?php

namespace api\classes;

use PDO;
use PDOException;

class Database
{
    public $dbhost;
    public $dbname;
    public $username;
    public $password;
    public $conn;

    public function __construct($dbhost = "localhost", $dbname = "event", $username = "root", $password = "")
    {
        $this->dbhost = $dbhost;
        $this->dbname = $dbname;
        $this->username = $username;
        $this->password = $password;
    }

    public function connect()
    {
        try {
            $this->conn = new PDO("mysql:host=$this->dbhost;dbname=$this->dbname", $this->username, $this->password);
            return $this->conn;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
