<?php

 /*
 * updateUser.php
 * Kacey Morris
 * January 30, 2021
 * CST 452 Code Drop 1 - Layouts
 *
 * This page updates a user and redirects back to the all users table.
 *
 * This is my own work, as influenced by class time and videos.
 */

require_once '../../header.php';

$id = $_GET['id'];
// These variables are taking information posted from the form and saving it to be used later
$userUsername = trim($_GET['Username']);
$password = trim($_GET['Password']);
$email = trim($_GET['Email']);

$bs = new UserBusinessService();
// create a new user with the updated information
$newUser = new User($id, $userUsername, $password, $email);

// call the business service method for update
$success = $bs->updateOne($id, $newUser);

if ($success) {
    echo "User was updated<br>";
    // redirect to the users list
    header("Location: ../views/displayAllUsers.php");
}
else {
    echo "<h3>Nothing updated.</h3>";
}
?>