<?php

 /*
 * PreferenceBusinessService.php
 * Kacey Morris
 * March 13, 2021
 * CST 452 Code Drop 3 - Preferences
 *
 * The preference business service conducts all business logic for preferences functions.
 *
 * This is my own work, as influenced by class time and videos.
 */

// error reporting
error_reporting(E_ALL);
ini_set("display_errors", 1);

// required files
require_once '../../Autoloader.php';

class PreferenceBusinessService {
	// **************** this will be called when a user is created, all users should begin with default preferences
	/**
	 * creates a new preference with the properties of the preference passed
	 *
	 * @return boolean
	 */
    function createPreference() {
        // call data service method
        $dbService = new PreferenceDataService();
        $success = $dbService->createPreference();
        
        // returns true or false
        return $success;
    }
    
    /**
     * returns a preference array containing a single preference associated with this user
     *
     * @param int $userid
     * @return Preference
     */
    function getPreference($userid) {
        $preferences = array();
        
        // access data service
        $dbService = new PreferenceDataService();
        $preferences = $dbService->getPreference($userid);
        
        // return preference
        return $preferences;
    }
    
    /**
     * updates this id with the data from the passed preference object
     *
     * @param int $id
     * @param Preference $preference
     * @return boolean
     */
    function updateOne($id, $preference) {
        $dbService = new PreferenceDataService();
        $success = $dbService->updateOne($id, $preference);
        
        // returns true or false
        return $success;
    }
}

?>
