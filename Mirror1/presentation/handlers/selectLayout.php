<!DOCTYPE html>
<?php

 /*
 * selectLayout.php
 * Kacey Morris
 * December 19, 2021
 * CST 451 Code Drop 3 - Preferences and File Construction
 *
 * This creates a new configuration file based on what layout was selected.
 *
 * This is my own work, as influenced by class time and videos.
 */
 
?>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Create Configuration</title>
</head>
<body>

<?php
// required files
require_once '../../header.php';

// save the selected layout ID
$layoutID = $_GET['id'];

// echo "Got the layout ID of [ " . $layoutID . " ]";

// create a business service to get the layout
$service = new LayoutBusinessService();

// get the selected layout from the DB
$layout = $service->findByID($layoutID);

// set previously active layout inactive using bs
// only for visual purposes (showing active on UI)

$content = $service->createConfig($layout);
$configFile = "config.js";

// for managing where the file should be saved later
$old_path = getcwd();
chdir('/');
chdir('var/www/html/MagicMirror/config');

// create the file if it doesnt exist and put the content in it
file_put_contents($configFile, $content);

// change back to this directory
chdir($old_path);

$success = $service->setActive($layoutID);

if ($success) {
// refresh mirror by running bash script
header("Location: refreshMirror.php");
}

?>
</body>
</html>
