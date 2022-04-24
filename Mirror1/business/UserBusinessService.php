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
 * 
 * this is the user business service 
 */

// error reporting
error_reporting(E_ALL);
ini_set("display_errors", 1);

// required files
require_once '../../Autoloader.php';

class UserBusinessService {
	/**
	 * creates a new user with the properties of the user passed
	 *
	 * @param User $user
	 * @return boolean
	 */
    function createUser($user) {
        // call data service method
        $dbService = new UserDataService();
        $success = $dbService->createUser($user);
        
        // returns true if created
        return $success;
    }
    
    /**
     * get all users in an array from the database
     *
     * @return User
     */
    function getAllUsers() {
        // call data service method
        $dbService = new UserDataService();
        $users = $dbService->getAllUsers();
        
        // return the array of users
        return $users;
    }
    
    /**
     * returns a user array containing a single user with this id
     *
     * @param int $id
     * @return User[]
     */
    function findByID($id) {
        $users = array();
        
        // access data service
        $dbService = new UserDataService();
        $users = $dbService->findByID($id);
        
        return $users;
    }
    
    /**
     * deletes the user from the database with this ID
     *
     * @param int $id
     * @return boolean
     */
    function deleteItem($id) {
        $dbService = new UserDataService();
        $success = $dbService->deleteItem($id);
        
        // returns true or false
        return $success;
    }
    
    /**
     * updates this id with the data from the passed user object
     *
     * @param int $id
     * @param User $user
     * @return boolean
     */
    function updateOne($id, $user) {
        $dbService = new UserDataService();
        $success = $dbService->updateOne($id, $user);
        
        // returns true or false
        return $success;
    }
}

?>
