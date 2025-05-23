<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Login Form</title>
  </head>
<body>

<h2>Login</h2>

<?php
if (isset($_GET['error'])) {
  echo "<p style='color:red;'>Login failed. Attempt #" . htmlspecialchars($_GET['attempts']) . "</p>";
}
?>

<form action="/validate.php" method="post">
  <label for="username">Username:</label><br>
  <input type="text" id="username" name="username"><br><br>

  <label for="password">Password:</label><br>
  <input type="password" id="password" name="password"><br><br>

  <input type="submit" value="Login">
</form>

</body>
</html>