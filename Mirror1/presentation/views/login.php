<?php
 /*
 * login.php
 * Kacey Morris
 * December 19, 2021
 * CST 451 Code Drop 1 - Login / Register / Home
 *
 * The login page retrieves login credentials in a form and sends them to the handler.
 *
 * This is my own work, as influenced by class time and videos.
 */

require_once '../../header.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Login</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.33" />
</head>

<body>
	<div class="hero">
		<h1 class="heroTxt">Login</h1>
	</div>
	<div class="container">
		<!-- method post. get is in url -->
		<form action="../handlers/loginHandler.php" method="post">
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" class="form-control" id="username" name="username">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" class="form-control" id="password" name="password">
			</div>
			<input name="login" value="Login" type="submit" class="buttonLogin">
		</form>
	</div>
</body>
</html>
