<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Processing Preferences</title>
</head>
<body>
<?php
 /*
 * processPreferences.php
 * Kacey Morris
 * April 23, 2022
 * CST 452 Code Drop Final - Preferences
 *
 * This page processes the information supplied by the form to alter the preferences.
 *
 * This is my own work, as influenced by class time and videos.
 */

// required files
require_once '../../header.php';

// did they actually submit the form
if(isset($_POST)) {
    // get the posted properties
    $alarm = 0;
    if (isset($_POST['alarmActive'])) {
        $alarm = 1;
    }
    $alarmTime = trim($_POST['alarmTime']);
    // dont set the alarm if they didnt provide a time
    if ($alarmTime == "") {$alarm = 0;}
    $alarmLabel = trim($_POST['alarmLabel']);
    $alarmMessage = trim($_POST['alarmMessage']);
    $alarmSound = trim($_POST['alarmSound']);
    $days = "";
    if (isset($_POST['flexCheckSunday'])) {$days = $days . "0";}
    echo $days;
    if (isset($_POST['flexCheckMonday'])) { 
        if ($days  != "") {$days = $days . ",";} 
        $days = $days . "1";
    }
    if (isset($_POST['flexCheckTuesday'])) { 
        if ($days  != "") {$days = $days . ",";} 
        $days = $days . "2";
    }
    if (isset($_POST['flexCheckWednesday'])) { 
        if ($days  != "") {$days = $days . ",";} 
        $days = $days . "3";
    }
    if (isset($_POST['flexCheckThursday'])) { 
        if ($days  != "") {$days = $days . ",";} 
        $days = $days . "4";
    }
    if (isset($_POST['flexCheckFriday'])) { 
        if ($days  != "") {$days = $days . ",";} 
        $days = $days . "5";
    }
    if (isset($_POST['flexCheckSaturday'])) { 
        if ($days  != "") {$days = $days . ",";} 
        $days = $days . "6";
    }
    echo "days " . $days;
    $timezone = $_POST['timezone'];
    $location = $_POST['location'];
    $text = $_POST['helloText'];
    $league = $_POST['league'];
    $team = $_POST['team'];
}
else {
    die("Submission failed, no data");
}

// send preferences object to business service
$bs = new PreferenceBusinessService();
$userid = $_SESSION['userid'];
$preference = new Preference(0, $alarm, $alarmTime, $alarmLabel, $alarmMessage, $alarmSound, $days, 
$timezone, $location, $text, $league, $team);

// if this worked
if ($bs->updateOne($userid, $preference)) {
    echo "<h3>Item inserted</h3><br>";
    // redirect to the update display with new preferences
    $layoutbs = new LayoutBusinessService();
    $activeLayout = $layoutbs->getActiveLayout();
    $url = "selectLayout.php?id=" . $activeLayout->getId();
    header("Location: " . $url);
}
else {
    echo "<h3>Nothing inserted</h3><br>";
}
?>
<br>
</body>
</html>
