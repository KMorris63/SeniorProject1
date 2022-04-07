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
<title>Refresh Mirror</title>
</head>
<body>

<?php
// required files
require_once '../../header.php';

// refresh mirror by running bash script
shell_exec('./restartDisplay.sh');

// success message
echo "<h2>Successfully refreshed layout!</h2>";

// but then redirect to layouts page
header("Location: ../views/displayAllLayouts.php");

?>
</body>
</html>
