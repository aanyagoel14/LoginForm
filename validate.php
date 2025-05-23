<?php
session_start();

$valid_username = "aanya";
$valid_password = "password";

if (isset($_REQUEST['username']) && isset($_REQUEST['password'])) {
    $username = $_REQUEST['username'];
    $_SESSION['username'] = $username;
    $password = $_REQUEST['password'];

    if ($valid_username == $username && $valid_password == $password) {
      $_SESSION['authenticated'] = 1; 
      header("Location: index.php");
      exit();
    } else {
        if (!isset($_SESSION['failed_attempts'])) {
            $_SESSION['failed_attempts'] = 1;
        } else {
            $_SESSION['failed_attempts'] = $_SESSION['failed_attempts'] + 1;
        }
      //header- redirect to login.php
        header("Location: login.php?error=1&attempts=" . $_SESSION['failed_attempts']);
        exit();

    }
}
?>