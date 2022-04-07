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

class LayoutDataService {
	/**
	 * creates a new layout with the properties of the layout passed
	 *
	 * @param Layout $layout
	 * @return boolean
	 */
    function createLayout($layout) {
        // accepts layout object and inserts into layout table
        // access database
        $db = new Database();
        
        $connection = $db->getConnection();
        
        // update item
        $stmt = $connection->prepare("INSERT INTO layouts (LABEL, IMAGE, TOP_LEFT, TOP_RIGHT, BOTTOM_LEFT, BOTTOM_RIGHT, IS_ACTIVE) VALUES (?, ?, ?, ?, ?, ?, ?)");
        
        // if the statement wasn't prepared
        if (!$stmt) {
            echo "something went wrong in the binding process";
            exit;
        }
        
        // get parameters
        $label = $layout->getLabel();
        $image = $layout->getImage();
        $tleft = $layout->getTopLeft();
        $tright = $layout->getTopRight();
        $bleft = $layout->getBottomLeft();
        $bright = $layout->getBottomRight();
        $active = 0;
        
        // bind parameters s means string, i means int, d means decimal
        $stmt->bind_param("ssssssi", $label, $image, $tleft, $tright, $bleft, $bright, $active);
        
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
     * get all layouts in an array from the database
     *
     * @return Layout[]
     */
    function getAllLayouts() {
        // connect to database
        $db = new Database();
        $connection = $db->getConnection();
        $stmt = $connection->prepare("SELECT * FROM layouts");
        
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
            // add layouts to array
            $layoutArray = Array();
            
            while ($layout = $result->fetch_assoc()) {
                array_push($layoutArray, $layout);
            }
            
            // return array
            return $layoutArray;
        }
    }
    
    /**
     * returns a layout array containing a single layout with this id
     *
     * @param int $id
     * @return Layout[]
     */
    function findByID($id) {
        // should return a layout object
        $db = new Database();
        $connection = $db->getConnection();
        // select with this ID exactly
        $stmt = $connection->prepare("SELECT * FROM layouts WHERE ID = ? LIMIT 1");
        
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
                $layoutArray[0]['TOP_LEFT'], $layoutArray[0]['TOP_RIGHT'], $layoutArray[0]['BOTTOM_LEFT'], $layoutArray[0]['BOTTOM_RIGHT'], $layoutArray[0]['IS_ACTIVE']);
            
            // return the layout object
            return $newLayout;
        }
    }
    
    /**
     * deletes the layout from the database with this ID
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
        $stmt = $connection->prepare("DELETE FROM layouts WHERE ID = ? LIMIT 1");
        
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
     * updates this id with the data from the passed layout object
     *
     * @param int $id
     * @param Layout $layout
     * @return boolean
     */
    function updateOne($id, $layout) {
        // id is the layout to update, returns true for success, layout is object used to change
        // access database
        $db = new Database();
        
        $connection = $db->getConnection();
        
        // update item
        $stmt = $connection->prepare("UPDATE layouts SET LABEL = ?, IMAGE = ?, TOP_LEFT = ?,
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
    
     /**
     * updates this id with to be active
     *
     * @param int $id
     * @return boolean
     */
    function setActive($id) {
        // id is the layout to update, returns true for success, layout is object used to change
        // access database
        $db = new Database();
        
        $connection = $db->getConnection();
        
        // update item
        $stmt2 = $connection->prepare("UPDATE layouts SET IS_ACTIVE = 0 WHERE IS_ACTIVE = 1 LIMIT 1");
        
        // execute query
        $stmt2->execute();
        
        // update item
        $stmt = $connection->prepare("UPDATE layouts SET IS_ACTIVE = 1 WHERE ID = ? LIMIT 1");
        
        // if the statement wasn't prepared
        if (!$stmt) {
            echo "something went wrong in the binding process";
            exit;
        }
        
        // bind parameters
        $stmt->bind_param("i", $id);
        
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
