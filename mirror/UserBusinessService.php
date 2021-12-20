<?php

 /*
 * UserBusinessService.php
 * Kacey Morris
 * December 19, 2021
 * CST 451 Code Drop 1 - Login / Register / Home
 *
 * The user business service conducts all business logic for user functions.
 *
 * This is my own work, as influenced by class time and videos.
 */

// error reporting
error_reporting(E_ALL);
ini_set("display_errors", 1);

// required files
require_once 'UserDataService.php';

class UserBusinessService {
    // creates a new user with the properties of the user passed
    function createUser($user) {
        // call data service method
        $dbService = new UserDataService();
        $success = $dbService->createUser($user);
        
        // returns true or false
        return $success;
    }
}

?>
