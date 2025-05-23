<?php

session_start();
session_destroy();

header("Location: /login.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Logged Out</title>
</head>
<body>

<h1>You have been logged out.</h1>
<p><a href="/login.php">Click here to login again</a></p>

</body>
</html>