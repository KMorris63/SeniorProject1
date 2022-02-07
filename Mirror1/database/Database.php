<?php

/*
 * Database.php
 * Kacey Morris
 * December 19, 2021
 * CST 451 Code Drop 1 - Login / Register / Home
 *
 * This is the class which sets up a database connection.
 *
 * This is my own work, as influenced by class time and videos.
 */
 
require_once '../../header.php';

class Database {
    // properties
    private $dbservername = "localhost";
    // private $dbservername = "localhost:3306";
    private $dbusername = "root";
    private $dbpassword = "root";
    // private $dbusername = "username";
    // private $dbpassword = "password";
    private $dbname = "mirror";
    
    // connects to database
    function getConnection() {
        $conn = new mysqli($this->dbservername, $this->dbusername, $this->dbpassword, $this->dbname);
        
        if ($conn->connect_error) {
            echo "<h3>Connection failed " . $conn->connect_error . "</h3><br>";
        }
        else {
            return $conn;
        }
    }
}

?>
