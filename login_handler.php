<?php
// starting a session
session_start();

require_once 'KLogger.php';
$logger = new KLogger ("log.txt" , KLogger::WARN);


$username = $_POST['username'];
$password = $_POST['password'];
$logger->LogDebug("User [{$username}] attempting to log in");

//TODO:  Validate username and password
// for now check if exact name and password

if ($username == 'tywas' && $password == 'abc123') {
    $_SESSION['auth'] = true;
    
} else {
    $logger->LogWarn("User [{$username}] invalid username or password");
    $_SESSION['message'] = 'Invalid Username or Password';
    // header("Location: login.php");
    // exit();
}



//TODO:  Authenticate Username and password


echo "<pre>" . print_r($_POST,1) . "</pre";

echo "<pre>" . print_r($username, 1) . "   and... " . print_r($password, 1) . "</pre";

// echo "i'm a comment handler";




// header("Location:login.php");
// exit();