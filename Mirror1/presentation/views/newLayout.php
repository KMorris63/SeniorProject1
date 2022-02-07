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
<div class="container">
<h1>Add a New Layout</h1>
<form action="../handlers/processNewLayout.php" method="post">
  <div class="form-group">
    <label for="type">Label</label>
    <input type="text" class="form-control" id="label" name="label">
  </div>
  <div class="form-group">
    <label for="color">Image</label>
    <input type="text" class="form-control" id="image" name="image">
  </div>
  <div class="form-group">
    <label for="price">Top Left</label>
    <input type="text" class="form-control" id="topleft" name="topleft">
  </div>
  <div class="form-group">
    <label for="price">Top Right</label>
    <input type="text" class="form-control" id="topright" name="topright">
  </div>
  <div class="form-group">
    <label for="price">Bottom Left</label>
    <input type="text" class="form-control" id="bottomleft" name="bottomleft">
  </div>
  <div class="form-group">
    <label for="price">Bottom Right</label>
    <input type="text" class="form-control" id="bottomright" name="bottomright">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
	</div>
</body>
</html>