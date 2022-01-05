<?php
session_start();
$host = "127.0.0.1";
$username ="root";
$password = "";
$db_name = "users_log";
$conn = mysqli_connect($host, $username, $password, $db_name) or die("cannot connect something went wrong");
?>