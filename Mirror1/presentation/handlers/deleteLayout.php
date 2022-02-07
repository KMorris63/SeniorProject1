<?php

 /*
 * deleteLayout.php
 * Kacey Morris
 * January 30, 2021
 * CST 452 Code Drop 1 - Layouts
 *
 * This page displays deletes a layout and redirects back to the layouts page.
 *
 * This is my own work, as influenced by class time and videos.
 */

require_once '../../header.php';

$id = $_GET['id'];

$bs = new LayoutBusinessService();

// call method to delete
$success = $bs->deleteItem($id);

if ($success) {
    echo "<h3>Item was deleted</h3><br>";
    // redirect to display all users page
    header("Location: ../views/displayAllLayouts.php");
}
else {
    echo "<h3>Nothing deleted.</h3>";
}

?>