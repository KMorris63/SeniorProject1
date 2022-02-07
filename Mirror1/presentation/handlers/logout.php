<?php
// required files
require_once '../../header.php';
// destroy the session
session_destroy();
// redirect to the login page
header("Location: ../views/login.php");
?>
