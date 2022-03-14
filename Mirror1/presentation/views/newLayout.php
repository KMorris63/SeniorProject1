<!DOCTYPE html>
<?php

 /*
 * newLayout.php
 * Kacey Morris
 * January 30, 2021
 * CST 452 Code Drop 1 - Layouts
 *
 * This page displays a form to create a new layout.
 *
 * This is my own work, as influenced by class time and videos.
 */

// required files
require_once '../../header.php';

?>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Add a New Layout</title>
</head>
<body>
<div class="hero">
	<h1 class="heroTxt">New Layout</h1>
</div>
<div class="container">
<form action="../handlers/processNewLayout.php" method="post">
  <div class="form-group">
    <label for="label">Label</label>
    <input type="text" class="form-control" id="label" name="label">
  </div>
  <div class="form-group">
    <label for="image">Image</label>
    <input type="text" class="form-control" id="image" name="image">
  </div>
  <div class="layoutDropdowns">
  <div class="form-group">
  	<label for="topleft">Top Left</label><br>
		<select name="topleft" id="topleft" class="layoutDrop">
		<option value="" class="layoutDropItem">Choose a display</option>
		<option value="Clock" class="layoutDropItem">Clock</option>
		<option value="Calendar" class="layoutDropItem">Calendar</option>
		<option value="Compliments" class="layoutDropItem">Compliments</option>
		<option value="Weather" class="layoutDropItem">Weather</option>
		<option value="Forecast" class="layoutDropItem">Forecast</option>
		<option value="News" class="layoutDropItem">News</option>
		<option value="Text" class="layoutDropItem">Text</option>
		<option value="Moon" class="layoutDropItem">Moon</option>
		<option value="Globe" class="layoutDropItem">Globe</option>
		<option value="Bible" class="layoutDropItem">Bible</option>
		<option value="Insults" class="layoutDropItem">Insults</option>
		<option value="Sports" class="layoutDropItem">Sports</option>
		</select>
  </div>
    <div class="form-group">
  	<label for="topright">Top Right</label><br>
		<select name="topright" id="topright" class="layoutDrop">
		<option value="" class="layoutDropItem">Choose a display</option>
		<option value="Clock" class="layoutDropItem">Clock</option>
		<option value="Calendar" class="layoutDropItem">Calendar</option>
		<option value="Compliments" class="layoutDropItem">Compliments</option>
		<option value="Weather" class="layoutDropItem">Weather</option>
		<option value="Forecast" class="layoutDropItem">Forecast</option>
		<option value="News" class="layoutDropItem">News</option>
		<option value="Text" class="layoutDropItem">Text</option>
		<option value="Moon" class="layoutDropItem">Moon</option>
		<option value="Globe" class="layoutDropItem">Globe</option>
		<option value="Bible" class="layoutDropItem">Bible</option>
		<option value="Insults" class="layoutDropItem">Insults</option>
		<option value="Sports" class="layoutDropItem">Sports</option>
		</select>
  </div>
  <div class="form-group">
  	<label for="bottomleft">Bottom Left</label><br>
		<select name="bottomleft" id="bottomleft" class="layoutDrop">
		<option value="" class="layoutDropItem">Choose a display</option>
		<option value="Clock" class="layoutDropItem">Clock</option>
		<option value="Calendar" class="layoutDropItem">Calendar</option>
		<option value="Compliments" class="layoutDropItem">Compliments</option>
		<option value="Weather" class="layoutDropItem">Weather</option>
		<option value="Forecast" class="layoutDropItem">Forecast</option>
		<option value="News" class="layoutDropItem">News</option>
		<option value="Text" class="layoutDropItem">Text</option>
		<option value="Moon" class="layoutDropItem">Moon</option>
		<option value="Globe" class="layoutDropItem">Globe</option>
		<option value="Bible" class="layoutDropItem">Bible</option>
		<option value="Insults" class="layoutDropItem">Insults</option>
		<option value="Sports" class="layoutDropItem">Sports</option>
		</select>
  </div>
  <div class="form-group">
  	<label for="bottomright">Bottom Right</label><br>
		<select name="bottomright" id="bottomright" class="layoutDrop">
		<option value="" class="layoutDropItem">Choose a display</option>
		<option value="Clock" class="layoutDropItem">Clock</option>
		<option value="Calendar" class="layoutDropItem">Calendar</option>
		<option value="Compliments" class="layoutDropItem">Compliments</option>
		<option value="Weather" class="layoutDropItem">Weather</option>
		<option value="Forecast" class="layoutDropItem">Forecast</option>
		<option value="News" class="layoutDropItem">News</option>
		<option value="Text" class="layoutDropItem">Text</option>
		<option value="Moon" class="layoutDropItem">Moon</option>
		<option value="Globe" class="layoutDropItem">Globe</option>
		<option value="Bible" class="layoutDropItem">Bible</option>
		<option value="Insults" class="layoutDropItem">Insults</option>
		<option value="Sports" class="layoutDropItem">Sports</option>
		</select>
  </div>
  </div>
  <!-- "Alert", "Clock", "Calendar", "Compliments", "Weather", "Forecast", "News", "Text", "Moon", "Globe", "Bible", "Alarm", "Insults", "Sports" -->
  <button type="submit" class="buttonLogin">Create</button>
</form>
	</div>
</body>
</html>