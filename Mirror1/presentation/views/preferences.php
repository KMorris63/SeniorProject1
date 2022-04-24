<!DOCTYPE html>
<?php

 /*
 * preferences.php
 * Kacey Morris
 * April 23, 2022
 * CST 452 Code Drop Final - Preferences
 *
 * This page displays a form to edit user preferences.
 *
 * This is my own work, as influenced by class time and videos.
 */

// required files
require_once '../../header.php';

?>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Preferences</title>
</head>
<body>
<div class="hero">
	<h1 class="heroTxt">Preferences</h1>
</div>
<div class="container">
<form action="../handlers/processPreferences.php" method="post">
  <div class="layoutDropdowns">
  <label for="image">Alarm</label>
  <div class="form-check form-switch alarmCheck">
    <input class="form-check-input" type="checkbox" role="switch" id="alarmActive" name="alarmActive" value="1">
    <label class="form-check-label" for="alarmActive">Activate</label>
  </div>
  <div class="form-group">
    <label for="alarmTime">Time (24HR)</label>
    <input type="text" class="form-control" id="alarmTime" name="alarmTime" placeholder="19:30">
  </div>
  <div class="form-group">
    <label for="alarmLabel">Label</label>
    <input type="text" class="form-control" id="alarmLabel" name="alarmLabel">
  </div>
  <div class="form-group">
    <label for="alarmMessage">Message</label>
    <input type="text" class="form-control" id="alarmMessage" name="alarmMessage">
  </div>
  <div class="form-group">
  	<label for="alarmSound">Sound</label><br>
		<select name="alarmSound" id="alarmSound" class="layoutDrop">
		<option value="alarm.mp3" class="layoutDropItem">Default</option>
		<option value="blackforest.mp3" class="layoutDropItem">Black Forest</option>
		</select>
  </div>
  <div>
  	<label for="alarmDays">Alarm Days</label><br>
		<div class="form-check">
		<input class="form-check-input" type="checkbox" value="" id="flexCheckSunday" name="flexCheckSunday" value="sunday">
		<label class="form-check-label" for="flexCheckSunday">
		Sunday
		</label>
		</div>
		<div class="form-check">
		<input class="form-check-input" type="checkbox" value="" id="flexCheckMonday" name="flexCheckMonday" value="monday">
		<label class="form-check-label" for="flexCheckMonday">
		Monday
		</label>
		</div>
		<div class="form-check">
		<input class="form-check-input" type="checkbox" value="" id="flexCheckTuesday" name="flexCheckTuesday" value="tuesday">
		<label class="form-check-label" for="flexCheckTuesday">
		Tuesday
		</label>
		</div>
		<div class="form-check">
		<input class="form-check-input" type="checkbox" value="" id="flexCheckWednesday" name="flexCheckWednesday" value="wednesday">
		<label class="form-check-label" for="flexCheckWednesday">
		Wednesday
		</label>
		</div>
		<div class="form-check">
		<input class="form-check-input" type="checkbox" value="" id="flexCheckThursday" name="flexCheckThursday" value="thursday">
		<label class="form-check-label" for="flexCheckThursday">
		Thursday
		</label>
		</div>
		<div class="form-check">
		<input class="form-check-input" type="checkbox" value="" id="flexCheckFriday" name="flexCheckFriday" value="friday">
		<label class="form-check-label" for="flexCheckFriday">
		Friday
		</label>
		</div>
		<div class="form-check">
		<input class="form-check-input" type="checkbox" value="" id="flexCheckSaturday" name="flexCheckSaturday" value="saturday">
		<label class="form-check-label" for="flexCheckSaturday">
		Saturday
		</label>
		</div>
  </div>
  </div>
  <div class="form-group">
  	<label for="timezone">Timezone</label><br>
		<select name="timezone" id="timezone" class="layoutDrop">
		<option value="EST" class="layoutDropItem">Eastern Standard Time</option>
		<option value="PST" class="layoutDropItem">Pacific Standard Time</option>
		<option value="PNT" class="layoutDropItem">Phoenix Standard Time</option>
		<option value="MST" class="layoutDropItem">Mountain Standard Time</option>
		<option value="CST" class="layoutDropItem">Central Standard Time</option>
		<option value="AST" class="layoutDropItem">Alaska Standard Time</option>
		<option value="HST" class="layoutDropItem">Hawaii Standard Time</option>
		</select>
  </div>
    <div class="form-group">
    <label for="location">Location</label>
    <input type="text" class="form-control" id="location" name="location" placeholder="Phoenix, Arizona">
  </div>
    <div class="form-group">
    <label for="helloText">Text</label>
    <input type="text" class="form-control" id="helloText" name="helloText" placeholder="Hello World!">
  </div>
  <div class="form-group">
  	<label for="league">League</label><br>
		<select name="league" id="league" class="layoutDrop">
		<option value="NHL" class="layoutDropItem">National Hockey League</option>
		<option value="NBA" class="layoutDropItem">National Basketball Association</option>
		<option value="MLB" class="layoutDropItem">Major League Baseball</option>
		<option value="NFL" class="layoutDropItem">National Football League</option>
		<option value="MLS" class="layoutDropItem">Major League Soccer</option>
		</select>
  </div>
  <div class="form-group">
    <label for="team">Team</label>
    <input type="text" class="form-control" id="team" name="team" placeholder="ARI">
  </div>
  <!-- "Alert", "Clock", "Calendar", "Compliments", "Weather", "Forecast", "News", "Text", "Moon", "Globe", "Bible", "Alarm", "Insults", "Sports" -->
  <button type="submit" class="buttonLogin">Save</button>
</form>
	</div>
</body>
</html>
