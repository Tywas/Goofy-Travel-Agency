<?php

// require_once 'KLogger.php';

// class for saving and getting user information
class Dao{

    // $logger = new KLogger ("log.txt", KLogger::WARN);
    

    // private $hostname = "n4m3x5ti89xl6czh.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    // private $database = "tjtep33stx0e3vfb";
    // private $username = "k2lbgig48opk9klc";
    // private $password = "ler3hqx86vf6xan6";

    
    $url = "mysql://k2lbgig48opk9klc:ler3hqx86vf6xan6@n4m3x5ti89xl6czh.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/tjtep33stx0e3vfb";
    $dbparts = parse_url($url);
    
    $hostname = $dbparts['host'];
    $username = $dbparts['user'];
    $password = $dbparts['pass'];
    $database = ltrim($dbparts['path'],'/');




    // public function __construct () {
    //     $this->logger = new KLogger ( "log.txt" , KLogger::DEBUG);
    // }

    public function getConnection () {
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
    }

    public function saveComment ($name, $comment) {
        $conn = $this->getConnection();
        $saveQuery =
            "INSERT INTO comments
            (name, comment)
            VALUES
            (:name, :comment)";
        $q = $conn->prepare($saveQuery);
        $q->bindParam(":name", $name);
        $q->bindParam(":comment", $comment);
        $q->execute();
    }
}










