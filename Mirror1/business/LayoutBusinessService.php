<?php

 /*
 * LayoutBusinessService.php
 * Kacey Morris
 * January 23, 2021
 * CST 452 Code Drop 1 - Layouts
 *
 * The layout business service conducts all business logic for layout functions.
 *
 * This is my own work, as influenced by class time and videos.
 */

// error reporting
error_reporting(E_ALL);
ini_set("display_errors", 1);

// required files
require_once '../../Autoloader.php';

class LayoutBusinessService {
	/**
	 * creates a new layout with the properties of the layout passed
	 *
	 * @param Layout $layout
	 * @return boolean
	 */
    function createLayout($layout) {
        // call data service method
        $dbService = new LayoutDataService();
        $success = $dbService->createLayout($layout);
        
        // returns true or false
        return $success;
    }
    
    /**
     * get all layouts in an array from the database
     *
     * @return Layout[]
     */
    function getAllLayouts() {
        // call data service method
        $dbService = new LayoutDataService();
        $layouts = $dbService->getAllLayouts();
        
        // return the array of layouts
        return $layouts;
    }
    
    /**
     * returns a layout array containing a single layout with this id
     *
     * @param int $id
     * @return Layout[]
     */
    function findByID($id) {
        $layouts = array();
        
        // access data service
        $dbService = new LayoutDataService();
        $layouts = $dbService->findByID($id);
        
        // return layouts
        return $layouts;
    }
    
    /**
     * deletes the layout from the database with this ID
     *
     * @param int $id
     * @return boolean
     */
    function deleteItem($id) {
        $dbService = new LayoutDataService();
        $success = $dbService->deleteItem($id);
        
        // returns true or false
        return $success;
    }
    
    /**
     * updates this id with the data from the passed layout object
     *
     * @param int $id
     * @param Layout $layout
     * @return boolean
     */
    function updateOne($id, $layout) {
        $dbService = new LayoutDataService();
        $success = $dbService->updateOne($id, $layout);
        
        // returns true or false
        return $success;
    }
}

?>
