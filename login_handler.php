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

try {
    $url = getenv('JAWSDB_URL');
    $dbparts = parse_url($url);
    $hostname = $dbparts['host'];
    $dbusername = $dbparts['user'];
    $dbpassword = $dbparts['pass'];
    $database = ltrim($dbparts['path'],'/');
    $conn = new PDO("mysql:host=$hostname;dbname=$database", $dbusername, $dbpassword);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully!   ";

    $query = "SELECT user_id, Fname, username, pwd FROM users WHERE username = :username;";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(":username", $username);
    // $stmt->bindParam(":pwd", $pwd);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo "statement executed";
    if (!empty($result)) {
        var_dump($result);
        echo "results have been found";
        foreach($result as $user){
            echo "MORE results ";
            $db_userid = $user['user_id'];
            $db_fname = $user['Fname'];
            $db_user = $user['username'];
            $db_pwd = $user['pwd'];
        }

        if ($db_pwd == $password){
            $_SESSION['authenticated'] = true;
            $_SESSION['fname'] = $db_fname;
            $_SESSION['user_id'] = $db_userid;
            header("Location: user.php");
            exit();
        }
        else {
            $logger->LogWarn("User [{$username}] invalid username or password");
            $_SESSION['authenticated'] = false;
            $_SESSION['username'] = $username; //used to repopulate form
            $_SESSION['message'] = 'Invalid Username or Password';
            header("Location: login.php");
            exit();
        }
        // echo "after data showing";
    } else {
        $_SESSION['authenticated'] = false;
        $_SESSION['username'] = $username; //used to repopulate form
        $_SESSION['message'] = 'Invalid Username or Password';
        header("Location: login.php");
        exit();
    }
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    // die("Connection failed: " . $e->getMessage());
}