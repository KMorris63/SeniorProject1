<?php
 /*
 * home.php
 * Kacey Morris
 * December 19, 2021
 * CST 451 Code Drop 1 - Login / Register / Home
 *
 * The home page displays the username of the user who is logged in.
 *
 * This is my own work, as influenced by class time and videos.
 */
 
require_once 'header.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Home</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.33" />
</head>

<body>
	<div class="container">
		<h1>Home</h1>
		<h3>You have been logged in, <?php echo $_SESSION['username']; ?></h3>
	</div>
</body>
</html>
