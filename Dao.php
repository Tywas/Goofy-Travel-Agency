<?php
// Dao.php
// class for saving and getting users from MySQL

// require_once 'KLogger.php';
class Dao {

    public function getConnection () {
        // connect to database
        $url = getenv('JAWSDB_URL');
        $dbparts = parse_url($url);

        $hostname = $dbparts['host'];
        $dbusername = $dbparts['user'];
        $dbpassword = $dbparts['pass'];
        $database = ltrim($dbparts['path'],'/');
        try {
            $conn = new PDO("mysql:host=$hostname;dbname=$database", $dbusername, $dbpassword);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            // die("Connection failed: " . $e->getMessage());
        }
        return $conn
    }

    public function addUser ($fname, $lname, $username, $email, $password) {
        $conn = $this->getConnection();

        $query = "INSERT INTO users (Fname, Lname, username, email, pwd)
        VALUES (:Fname, :Lname, :username, :email, :pwd);";
        $stmt = $conn->prepare($query);
        
        $stmt->bindParam(":Fname", $fname);
        $stmt->bindParam(":Lname", $lname);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":pwd", $password);
        $stmt->execute();
    }

    public function deleteUser ($id) {
        $conn = $this->getConnection();
        $deleteComment =
            "DELETE FROM user
            WHERE user_id = :id";
        $q = $conn->prepare($deleteComment);
        $q->bindParam(":id", $id);
        $q->execute();
    }

  public function getUser ($username) {
    $conn = $this->getConnection();
    $query = "SELECT user_id, Fname, username, pwd FROM users WHERE username = :username;";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
    // return $conn->query("SELECT user_id, Fname, username, pwd FROM users WHERE username = :username;")->fetchAll(PDO::FETCH_ASSOC);
  }

} // end Dao
