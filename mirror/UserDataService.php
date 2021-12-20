<?php

 /*
 * UserDataService.php
 * Kacey Morris
 * December 19, 2021
 * CST 451 Code Drop 1 - Login / Register / Home
 *
 * The user data service conducts all database interactions for user functions.
 *
 * This is my own work, as influenced by class time and videos.
 */

require_once 'Database.php';

class UserDataService {
    // create a new user (register)
    function createUser($user) {
        // accepts user object and inserts into user table
        // access database
        $db = new Database();
        
        $connection = $db->getConnection();
        
        // update item
        $stmt = $connection->prepare("INSERT INTO USERS (USERNAME, PASSWORD, EMAIL) VALUES (?, ?, ?)");
        
        // if the statement wasn't prepared
        if (!$stmt) {
            echo "something went wrong in the binding process";
            exit;
        }
        
        // get parameters
        $un = $user->getUsername();
        $pw = $user->getPassword();
        $em = $user->getEmail();
        
        
        // bind parameters s means string, i means int, d means decimal
        $stmt->bind_param("sss", $un, $pw, $em);
        
        // execute query
        $stmt->execute();
        
        // did it work
        if ($stmt->affected_rows > 0) {
            return true;
        }
        else {
            return false;
        }
    }
}

?>
