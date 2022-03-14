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

require_once '../../Autoloader.php';

class UserDataService {
	/**
	 * creates a new user with the properties of the user passed
	 *
	 * @param User $user
	 * @return boolean
	 */
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
    /**
     * get all users in an array from the database
     *
     * @return User
     */
    function getAllUsers() {
        // connect to database
        $db = new Database();
        $connection = $db->getConnection();
        $stmt = $connection->prepare("SELECT * FROM USERS");
        
        if (!$stmt) {
            echo "Something wrong in the binding process. sql error?";
            exit;
        }
        
        // execute query
        $stmt->execute();
        
        // get results
        $result = $stmt->get_result();
        
        if (!$result) {
            echo "assume SQL statment has an error";
            return null;
            exit;
        }
        
        if ($result->num_rows == 0) {
            return null;
        }
        else {
            // add users to array
            $userArray = Array();
            
            while ($user = $result->fetch_assoc()) {
                array_push($userArray, $user);
            }
            
            // return array
            return $userArray;
        }
    }
    
    /**
     * returns a user array containing a single user with this id
     *
     * @param int $id
     * @return User[]
     */
    function findByID($id) {
        // should return a user object
        $db = new Database();
        $connection = $db->getConnection();
        // select with this ID exactly
        $stmt = $connection->prepare("SELECT * FROM USERS WHERE ID = ? LIMIT 1");
        
        if (!$stmt) {
            echo "Something wrong in the binding process. sql error?";
            exit;
        }
        // bind parameters for markers
        $stmt->bind_param("i", $id);
        
        // execute query
        $stmt->execute();
        
        // get results
        $result = $stmt->get_result();
        
        if (!$result) {
            echo "assume SQL statment has an error";
            return null;
            exit;
        }
        
        if ($result->num_rows == 0) {
            return null;
        }
        else {
            // add to array
            $userArray = array();
            
            while ($user = $result->fetch_assoc()) {
                array_push($userArray, $user);
            }
            
            // create a new user
            $newUser = new User($userArray[0]['ID'], $userArray[0]['USERNAME'], $userArray[0]['PASSWORD'],
                $userArray[0]['EMAIL']);
            
            // return the user object
            return $newUser;
        }
    }
    
    /**
     * deletes the user from the database with this ID
     *
     * @param int $id
     * @return boolean
     */
    function deleteItem($id) {
        // return true for success, false for failure
        // access database
        $db = new Database();
        
        $connection = $db->getConnection();
        
        // delete item
        $stmt = $connection->prepare("DELETE FROM USERS WHERE ID = ? LIMIT 1");
        
        if (!$stmt) {
            echo "something went wrong in the binding process";
            exit;
        }
        
        // bind parameters
        $stmt->bind_param("s", $id);
        
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
    
    /**
     * updates this id with the data from the passed user object
     *
     * @param int $id
     * @param User $user
     * @return boolean
     */
    function updateOne($id, $user) {
        // id is the user to update, returns true for success, user is object used to change
        // access database
        $db = new Database();
        
        $connection = $db->getConnection();
        
        // update item
        $stmt = $connection->prepare("UPDATE USERS SET USERNAME = ?, PASSWORD = ?, EMAIL = ? WHERE ID = ? LIMIT 1");
        
        // if the statement wasn't prepared
        if (!$stmt) {
            echo "something went wrong in the binding process";
            exit;
        }
        
        // get parameters
        $username = $user->getUsername();
        $password = $user->getPassword();
        $email = $user->getEmail();
        
        // bind parameters
        $stmt->bind_param("sssi", $username, $password, $email, $id);
        
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
