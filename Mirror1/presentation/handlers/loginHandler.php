<!DOCTYPE html>
<?php

 /*
 * loginHandler.php
 * Kacey Morris
 * December 19, 2021
 * CST 451 Code Drop 1 - Login / Register / Home
 *
 * The login handler accesses the database to check if the login credentials are registered through the security service.
 *
 * This is my own work, as influenced by class time and videos.
 */
 
?>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Login Handler</title>
</head>
<body>

<?php
// required files
require_once '../../header.php';

// save the attempted information
$attemptedLoginName = $_POST['username'];
$attemptedPassword = $_POST['password'];

echo "Got the username and password [" . $attemptedLoginName . " " . $attemptedPassword . "]";

// create a security service with the passed information
$service = new SecurityService($attemptedLoginName, $attemptedPassword);
echo "after security service creation with credentials";

// session variables for userid and username should be set
// check over database
$loggedIn = $service->authenticate();
echo "after authenticate in security service";

// if it was authenticated
if ($loggedIn) {
    // set the principal to true
    $_SESSION['principal'] = true;
    
    // update for testing
    echo "executed the query and got the id " . $userArray[0]['ID'] . " and username " . $userArray[0]['USERNAME'];
    
    // redirect to home page
    header("Location: ../views/home.php");
}
else {
    // set principal to false
    $_SESSION['principal'] = false;
    // redirect to login
    header("Location: ../views/login.php");
}
?>
</body>
</html>
