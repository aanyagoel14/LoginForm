<?php
session_start();
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