<?php

session_start();

// require_once 'Dao.php';
require_once 'KLogger.php';
$logger = new KLogger ("log.txt", KLogger::WARN);

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$validation_errors = array();

// ----- Password Validation -----
// any if statements initiate then some field did not pass
$flag = 0; # validation flag

if(!empty($password) && $password == $confirm_password) {
    if(strlen($password) <= "8"){
        $flag = 1;
        $logger->LogWarn("User [{$username}] creation: invalid password length");
        $validation_errors['password'] = 'Password must be at least 8 characters.';
    }
    elseif(!preg_match('#[0-9]+#', $password)) {
        $flag = 1;
        $logger->LogWarn("User [{$username}] creation: invalid password; Must contain a number!");
        $validation_errors['password'] = 'Password must contain a number.';
    }
    elseif(!preg_match('#[A-Z]+#', $password)) {
        $flag = 1;
        $logger->LogWarn("User [{$username}] creation: invalid password; Must contain an uppercase character!");
        $validation_errors['password'] = 'Password must contain an uppercase character.';
    }
    elseif(!preg_match('#[A-Z]+#', $password)) {
        $flag = 1;
        $logger->LogWarn("User [{$username}] creation: invalid password; Must contain a lowercase character!");
        $validation_errors['password'] = 'Password must contain a lowercase character.';
    }
}
elseif(!empty($password)) { // confirm password is not the same
    $flag = 1;
    $logger->LogWarn("User [{$username}] creation: invalid password does not match confirming password!");
    $validation_errors['password'] = 'Passwords do not match, confirm again.';
} 
else {
    $flag = 1;
    $logger->LogWarn("User [{$username}] creation: invalid password empty!");
    $validation_errors['password'] = 'Enter a password.';
}

// ----- Email Validation -----
if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    $flag = 1;
    $logger->LogWarn("Regrestration: invalid email!");
    $validation_errors['email'] = 'Enter a valid email address.';
}

// ----- Username Validation -----
if(!preg_match("/^[a-zA-Z0-9]{5,}$/", $username)) {
    // username must be 5 characters long
    $flag = 1;
    $logger->LogWarn("Regrestration: invalid Username!");
    $validation_errors['username'] = 'Username must be at least 5 characters of letters or numbers only.';
}

// ----- First and Last Name Validation -----
if(!preg_match("/^[a-z ,.'-]+$/i", $fname)) {
    $flag = 1;
    $logger->LogWarn("Regrestration: invalid First Name!");
    $validation_errors['fname'] = 'First name must only be letters.';
}
if(!preg_match("/^[a-z ,.'-]+$/i", $lname)) {
    $flag = 1;
    $logger->LogWarn("Regrestration: invalid Last Name!");
    $validation_errors['lname'] = 'Last name must only be letters.';
}

if($flag == 0){
    header("Location: login.php");
    exit();
}
elseif($flag == 1){ # error in validation
    $_SESSION['messages'] = $validation_errors;
    // header("Location: register.php");
    // exit();
}

// would only need to connect to database if flag is 0
echo "hello";
// $dao = new Dao();
// $dao->getConnection();


// $hostname = "n4m3x5ti89xl6czh.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
// $database = "tjtep33stx0e3vfb";
// $username = "k2lbgig48opk9klc";
// $password = "ler3hqx86vf6xan6";


$url = getenv('mysql://k2lbgig48opk9klc:ler3hqx86vf6xan6@n4m3x5ti89xl6czh.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/tjtep33stx0e3vfb');
$dbparts = parse_url($url);

$hostname = $dbparts['host'];
$username = $dbparts['user'];
$password = $dbparts['pass'];
$database = ltrim($dbparts['path'],'/');

try {
    $conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }


// foreach($_SESSION['messages'] as $col_name => $string) {
//     echo $_SESSION['messages'][$col_name] . "   .   ";
// }
