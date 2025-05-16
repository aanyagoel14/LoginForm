<?php

$valid_username = "aanya";
$valid_password = "password";

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

if ($valid_username == $username && $valid_password == $password) {
    echo "Success";
} else
    echo "Failure";
  

?>