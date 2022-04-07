<?php

 /*
 * updateLayout.php
 * Kacey Morris
 * January 30, 2021
 * CST 452 Code Drop 1 - Layouts
 *
 * This page updates a layout and redirects back to the all layouts table.
 *
 * This is my own work, as influenced by class time and videos.
 */

require_once '../../header.php';

$id = $_GET['id'];
// These variables are taking information posted from the form and saving it to be used later
$label = trim($_GET['Label']);
$image = trim($_GET['Image']);
$topLeft = trim($_GET['TopLeft']);
$topRight = trim($_GET['TopRight']);
$bottomLeft = trim($_GET['BottomLeft']);
$bottomRight = trim($_GET['BottomRight']);

$bs = new LayoutBusinessService();
// create a new layout with the updated information
$newLayout = new Layout($id, $label, $image, $topLeft, $topRight, $bottomLeft, $bottomRight, 0);

// call the business service method for update
$success = $bs->updateOne($id, $newLayout);

if ($success) {
    echo "Layout was updated<br>";
    
    // after updating, grab from database to check for if active
    $newLayout = $bs->findByID($id);
    if ($newLayout->getIsActive() == 1) {
        // redirect to the update display with selected layout (create config)
        $url = "selectLayout.php?id=" . $id;
        header("Location: " . $url);
        // echo "Within is active " . $newLayout->getIsActive();
    }
    else {
    
        // redirect to the layouts list
        header("Location: ../views/displayAllLayouts.php");
        // echo "After is active " . $newLayout->getIsActive();
    } 
}
else {
    echo "<h3>Nothing updated.</h3>";
    // redirect to the layouts list
    header("Location: ../views/displayAllLayouts.php");
}
?>
