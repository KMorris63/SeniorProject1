<?php

 /*
 * header.php
 * Kacey Morris
 * December 19, 2021
 * CST 451 Code Drop 1 - Login / Register / Home
 *
 * Includes all important links and stylesheets as well as the nav bar.
 *
 * This is my own work, as influenced by class time and videos.
 */

session_start();
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<link rel="stylesheet" href="/SeniorProject1/Mirror1/utility/styling.css">

<?php 
// include the nav bar
require_once '_navbar.php';
require_once 'Autoloader.php';
