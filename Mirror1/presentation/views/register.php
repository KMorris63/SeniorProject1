<!DOCTYPE html>
<?php

 /*
 * register.php
 * Kacey Morris
 * December 19, 2021
 * CST 451 Code Drop 1 - Login / Register / Home
 *
 * The register page displays a form for new user information.
 *
 * This is my own work, as influenced by class time and videos.
 */
// required files
require_once '../../header.php';
?>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Register User Form</title>
</head>
<body>
	<div class="hero">
		<h1 class="heroTxt">Register</h1>
	</div>
<div class="container">
<!-- method post. get is in url -->
<form action="../handlers/registerHandler.php">
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" name="Username">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="Password">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
  </div>
  <button type="submit" class="buttonLogin">Register</button>
</form>
</div>
</body>
</html>
