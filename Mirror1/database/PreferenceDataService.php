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
        // $id, $alert, $alertTime, $alertLabel, $alarm, $alarmTime, $alarmLabel, $days, $timezone, $location, $text, $league, $team
        // update item
        $stmt = $connection->prepare("INSERT INTO PREFERENCES (ALERT, ALERT_TIME, ALERT_LABEL, ALARM, ALARM_TIME, ALARM_LABEL, DAYS, TIMEZONE, LOCATION, TEXT, LEAGUE, TEAM) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        
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
        $days = $preference->getDays();
        $timezone = $preference->getTimezone();
        $location = $preference->getLocation();
        $text = $preference->getText();
        $league = $preference->getLeague();
        $team = $preference->getTeam();
        
        // bind parameters s means string, i means int, d means decimal
        $stmt->bind_param("ssssss", $label, $image, $tleft, $tright, $bleft, $bright);
        
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
        // should return a layout object
        $db = new Database();
        $connection = $db->getConnection();
        // select with this ID exactly
        $stmt = $connection->prepare("SELECT * FROM LAYOUTS WHERE ID = ? LIMIT 1");
        
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
            echo "assumer SQL statment has an error";
            return null;
            exit;
        }
        
        if ($result->num_rows == 0) {
            return null;
        }
        else {
            // add to array
            $layoutArray = array();
            
            while ($layout = $result->fetch_assoc()) {
                array_push($layoutArray, $layout);
            }
            
            // create a new layout
            $newLayout = new Layout($layoutArray[0]['ID'], $layoutArray[0]['LABEL'], $layoutArray[0]['IMAGE'],
                $layoutArray[0]['TOP_LEFT'], $layoutArray[0]['TOP_RIGHT'], $layoutArray[0]['BOTTOM_LEFT'], $layoutArray[0]['BOTTOM_RIGHT']);
            
            // return the layout object
            return $newLayout;
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
    function updateOne($id, $layout) {
        // id is the preferences to update, returns true for success, preferences is object used to change
        // access database
        $db = new Database();
        
        $connection = $db->getConnection();
        
        // update item
        $stmt = $connection->prepare("UPDATE LAYOUTS SET LABEL = ?, IMAGE = ?, TOP_LEFT = ?,
                                TOP_RIGHT = ?, BOTTOM_LEFT = ?, BOTTOM_RIGHT = ? WHERE ID = ? LIMIT 1");
        
        // if the statement wasn't prepared
        if (!$stmt) {
            echo "something went wrong in the binding process";
            exit;
        }
        
        // get parameters
        $label = $layout->getLabel();
        $image = $layout->getImage();
        $topLeft = $layout->getTopLeft();
        $topRight = $layout->getTopRight();
        $bottomLeft = $layout->getBottomLeft();
        $bottomRight = $layout->getBottomRight();
        // bind parameters
        $stmt->bind_param("ssssssi", $label, $image, $topLeft, $topRight, $bottomLeft, $bottomRight, $id);
        
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
