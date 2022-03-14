<?php

/*
 * SecurityService.php
 * Kacey Morris
 * December 19, 2021
 * CST 451 Code Drop 1 - Login / Register / Home
 *
 * This is the security service which authenticates a login and sets session variables.
 *
 * This is my own work, as influenced by class time and videos.
 */

// required files
require_once '../../header.php';

// error reporting
error_reporting(E_ALL);
ini_set("display_errors", 1);

// includes database
// require_once 'Database.php';

class SecurityService {
    // properties
    private $username = "";
    private $password = "";
    
    /**
     * data constructor for security service object
     *
     * @param string $username
     * @param string $password
     * @return void
     */
    function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }
    
    /**
     * authenticates a username and password through database and sets session variable for userid
     *
     * @return boolean
     */
    public function authenticate() {
        // return true;
        // return true if authenticated, false if not
        if ($this->password == "" || $this->username == "" || $this->password == NULL || $this->username == NULL) {
            return false;
        }
        
        // connect to database        
        $db = new Database();
        $connection = $db->getConnection();
        
        // select all users with this username and password
        $stmt = $connection->prepare("SELECT * FROM USERS WHERE USERNAME='" . $this->username . "'" .
            "AND PASSWORD='" . $this->password . "'");
        
        if (!$stmt) {
            echo "Something wrong in the binding process. sql error?";
            exit;
        }
        
        // execute query
        $stmt->execute();
        
        // get results
        $result = $stmt->get_result();
        
        // if no results, error 
        if (!$result) {
            echo "assumer SQL statment has an error";
            return null;
            exit;
        }
        
        // if no results, no user found
        if ($result->num_rows == 0) {
            return false;
        }
        // otherwise
        else {
            // save results into an array
            $userArray = Array();
            
            while ($user = $result->fetch_assoc()) {
                array_push($userArray, $user);
            }
            // set session variables
            $_SESSION['userid'] = $userArray[0]['ID'];
            $_SESSION['username'] = $userArray[0]['USERNAME'];
            
            // return positively
            return true;
        }
    }
}
?>
