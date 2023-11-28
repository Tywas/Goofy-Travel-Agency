<?php
// starting a session
session_start();

$_SESSION['countries'][] = $_GET['country'];

header("Location: user.php");
exit();
