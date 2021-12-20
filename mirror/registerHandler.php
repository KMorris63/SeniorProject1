<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Registration Form</title>
</head>
<body>
<?php
 /*
 * registerHandler.php
 * Kacey Morris
 * December 19, 2021
 * CST 451 Code Drop 1 - Login / Register / Home
 *
 * The register handler saves to a database and redirects to the home page.
 *
 * This is my own work, as influenced by class time and videos.
 */

// required files
require_once 'header.php';
require_once 'UserBusinessService.php';
require_once 'User.php';

// trap no data submitted
// failure, no data
if (!isset($_GET)) {
    die("Submission failed, no data");
}
// success, got data
else {
    // These variables are taking information posted from the HTML file and saving it to be used later
    $userUsername = trim($_GET['Username']);
    $userPassword = trim($_GET['Password']);
    $email = trim($_GET['email']);
}

// send user object to business service 
$bs = new UserBusinessService();
$newUser = new User(0, $userUsername, $userPassword, $email);

// if this worked
if ($bs->createUser($newUser)) {
    echo "User created<br>";
    // set session variables so they are logged in after registering
    $_SESSION['principal'] = true;
    $_SESSION['userid'] = $newUser->getId();
    $_SESSION['username'] = $newUser->getUsername();
    
    // direct user to the home page
    header("Location: /mirror/home.php");
}
else {
    echo "<h3>Nothing inserted</h3><br>";
}
?>
</body>
</html>
