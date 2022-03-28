<?php

 /*
 * LayoutDataService.php
 * Kacey Morris
 * January 23, 2021
 * CST 452 Code Drop 1 - Layouts
 *
 * The layout data service conducts all database interactions for layout functions.
 *
 * This is my own work, as influenced by class time and videos.
 */

// required files
require_once '../../Autoloader.php';

class PreferenceDataService {
	/**
	 * creates a new preference with the properties of the preference passed
	 *
	 * @return boolean
	 */
    function createPreference($preference) {
        // accepts preference object and inserts into preference table
        // access database
        $db = new Database();
        
        $connection = $db->getConnection();
        // $id, $alert, $alertTime, $alertLabel, $alarm, $alarmTime, $alarmLabel, $alarmMessage, $days, $timezone, $location, $text, $league, $team
        // insert item
        // ADD ALARM SOUND
        // for array of days, maybe save like 0|2|5|6 then split when retrieving from database or creating a module section for config file
        $stmt = $connection->prepare("INSERT INTO PREFERENCES (ALERT, ALERT_TIME, ALERT_LABEL, ALARM, ALARM_TIME, ALARM_LABEL, ALARM_MESSAGE, DAYS, TIMEZONE, LOCATION, TEXT, LEAGUE, TEAM) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        
        // if the statement wasn't prepared
        if (!$stmt) {
            echo "something went wrong in the binding process";
            exit;
        }
        
        // get parameters
        $alert = $preference->getAlert();
        $alertTime = $preference->getAlertTime();
        $alertLabel = $preference->getAlertLabel();
        $alarm = $preference->getAlarm();
        $alarmTime = $preference->getAlarmTime();
        $alarmLabel = $preference->getAlarmLabel();
        $alarmMessage = $preference->getAlarmMessage();
        $days = $preference->getDays();
        // CONVERT TO STRING FOR DATABASE SAVING?
        $timezone = $preference->getTimezone();
        $location = $preference->getLocation();
        $text = $preference->getText();
        $league = $preference->getLeague();
        $team = $preference->getTeam();
        
        // bind parameters s means string, i means int, d means decimal
        $stmt->bind_param("ississsssssss", $alert, $alertTime, $alertLabel, $alarm, $alarmTime, $alarmLabel, $alarmMessage, $days, $timezone, $location, $text, $league, $team);
        
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
     * returns a preference array containing a single preference associated with this user
     *
     * @param int $userid
     * @return Preference
     */
    // NEEDS DEVELOPMENT
    function getPreference($id) {
        // should return a preferences object
        $db = new Database();
        $connection = $db->getConnection();
        // select with this USER ID exactly
        $stmt = $connection->prepare("SELECT * FROM PREFERENCES WHERE USER_ID = ? LIMIT 1");
        
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
            $preferencesArray = array();
            
            while ($preferences = $result->fetch_assoc()) {
                array_push($preferencesArray, $preferences);
            }
            
            // create a new preferences object
            $newPreferences = new Preference($preferencesArray[0]['ID'], $preferencesArray[0]['ALERT'], 
            		$preferencesArray[0]['ALERT_TIME'], $preferencesArray[0]['ALERT_LABEL'], $preferencesArray[0]['ALARM'], 
            		$preferencesArray[0]['ALARM_TIME'], $preferencesArray[0]['ALARM_LABEL'], $preferencesArray[0]['ALARM_MESSAGE'], 
            		$preferencesArray[0]['DAYS'], $preferencesArray[0]['TIMEZONE'], $preferencesArray[0]['LOCATION'], 
            		$preferencesArray[0]['TEXT'], $preferencesArray[0]['LEAGUE'], $preferencesArray[0]['TEAM']);
            
            // return the layout object
            return $newPreferences;
        }
    }
    
    /**
     * updates this id with the data from the passed preference object
     *
     * @param int $id
     * @param Preference $preference
     * @return boolean
     */
    // NEEDS DEVELOPMENT
    function updateOne($id, $preference) {
        // id is the preferences to update, returns true for success, preferences is object used to change
        // access database
        $db = new Database();
        
        $connection = $db->getConnection();
        
        // update item
        $stmt = $connection->prepare("UPDATE LAYOUTS SET ALERT = ?, ALERT_TIME = ?, ALERT_LABEL = ?, ALARM = ?, ALARM_TIME = ?, 
									ALARM_LABEL = ?, ALARM_MESSAGE = ?, DAYS = ?, TIMEZONE = ?, LOCATION = ?, TEXT = ?, LEAGUE = ?, 
									TEAM = ? WHERE ID = ? LIMIT 1");
        
        // if the statement wasn't prepared
        if (!$stmt) {
            echo "something went wrong in the binding process";
            exit;
        }
        
        // get parameters
        $alert = $preference->getAlert();
        $alertTime = $preference->getAlertTime();
        $alertLabel = $preference->getAlertLabel();
        $alarm = $preference->getAlarm();
        $alarmTime = $preference->getAlarmTime();
        $alarmLabel = $preference->getAlarmLabel();
        $alarmMessage = $preference->getAlarmMessage();
        $days = $preference->getDays();
        // CONVERT TO STRING FOR DATABASE SAVING?
        $timezone = $preference->getTimezone();
        $location = $preference->getLocation();
        $text = $preference->getText();
        $league = $preference->getLeague();
        $team = $preference->getTeam();
        
        // bind parameters s means string, i means int, d means decimal
        $stmt->bind_param("ississsssssssi", $alert, $alertTime, $alertLabel, $alarm, $alarmTime, $alarmLabel, $alarmMessage, $days, $timezone, $location, $text, $league, $team, $id);
        
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
