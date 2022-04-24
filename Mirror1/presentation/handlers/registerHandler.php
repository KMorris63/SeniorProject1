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
require_once '../../header.php';

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

    // create a security service with the passed information
    $service = new SecurityService($userUsername, $userPassword);
    echo "after security service creation with credentials";

    // session variables for userid and username should be set
    // check over database
    $loggedIn = $service->authenticate();
    
    // create preference 
    $preferencebs = new PreferenceBusinessService();
    $preferencebs->createPreference($_SESSION['userid']);
    
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
        header("Location: ../views/register.php");
    }
}
else {
    echo "<h3>Nothing inserted</h3><br>";
}
?>
</body>
</html>
