<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Processing New Layout</title>
</head>
<body>
<?php
 /*
 * processNewLayout.php
 * Kacey Morris
 * January 30, 2021
 * CST 452 Code Drop 1 - Layouts
 *
 * This page processes the information supplied by the form to create a new layout.
 *
 * This is my own work, as influenced by class time and videos.
 */

// required files
require_once '../../header.php';
// require_once 'LayoutBusinessService.php';
// require_once 'Layout.php';

// did they actually submit the form
if(isset($_POST)) {
    // get the posted properties
    $label = trim($_POST['label']);
    $image = trim($_POST['image']);
    $topleft = trim($_POST['topleft']);
    $topright = trim($_POST['topright']);
    $bottomleft = trim($_POST['bottomleft']);
    $bottomright = trim($_POST['bottomright']);
}
else {
    die("Submission failed, no data");
}

// send user object to business service 
$bs = new LayoutBusinessService();
$newLayout = new Layout(0, $label, $image, $topleft, $topright, $bottomleft, $bottomright, 0);

// if this worked
if ($bs->createLayout($newLayout)) {
    echo "<h3>Item inserted</h3><br>";
    // redirect to the flowers page
    header("Location: ../views/displayAllLayouts.php");
}
else {
    echo "<h3>Nothing inserted</h3><br>";
    echo "layout info: " . $label . " " . $image . " " . $topleft . " " . $topright . " " . $bottomleft . " " . $bottomright;
}
?>
<br>
</body>
</html>
