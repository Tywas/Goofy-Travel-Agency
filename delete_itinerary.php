<?php
// starting a session
session_start();

$elementToFind = $_GET['id'];
// echo $index;
// echo $_SESSION['countries'][$index];

$index = array_search($elementToFind, $_SESSION['countries']);

if ($index !== false) {
   unset($_SESSION['countries'][$index]);
}

header("Location: user.php");
exit();
