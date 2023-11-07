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
    echo "Connected successfully";

    $query = "SELECT user_id, Fname, username, pwd FROM users WHERE username = :username;";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(":username", $username);
    // $stmt->bindParam(":pwd", $pwd);
    $stmt->execute();
    $result = $stmt->get_result();
    echo "statement executed";
    if ($result) {
        $row = $result->fetch_assoc();
        echo "results have been found";
        if(isset($row)){
            echo "inside rows";
            echo $row['user_id'];
            echo $row['Fname'];
            echo $row['username'];
            echo $row['pwd'];
            if($password == $row['pwd']){
                echo "ding ding ding ding!!!!";
            }
        }
        echo "after data showing";
    } else {
        print_r($result,1);
        echo "i dont think anything was taken from the database";
    //call error recovery routine
    }
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    // die("Connection failed: " . $e->getMessage());
}

// if ($username == 'tywas' && $password == 'abc123') {
//     $_SESSION['authenticated'] = true;
//     header("Location: user.php");
//     exit();
// } else {
//     $logger->LogWarn("User [{$username}] invalid username or password");
//     $_SESSION['authenticated'] = false;
//     $_SESSION['message'] = 'Invalid Username or Password';
//     // header("Location: login.php");
//     // exit();
// }



//TODO:  Authenticate Username and password


echo "<pre>" . print_r($_POST,1) . "</pre";

echo "<pre>" . print_r($username, 1) . "   and... " . print_r($password, 1) . "</pre";

echo "<pre>" . print_r($_SESSION,1) . "</pre";

// echo "i'm a comment handler";




// header("Location:login.php");
// exit();