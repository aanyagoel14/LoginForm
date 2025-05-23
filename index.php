<?php
session_start();

if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] != 1) {
    header("Location: login.php");
    exit;
}
$username = htmlspecialchars($_SESSION['username']);
?>

<!DOCTYPE html>
  <head>
    <title>PHP-01</title>
  </head>
  
  <body>

    <h1>Assignment 1</h1>

    <p>Welcome, <?=$_SESSION['username'] ?>!</p>

  </body>

  <footer>
    <p><a href= "/login.php">Cick here to login</a></p>
  </footer>
</html>