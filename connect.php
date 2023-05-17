<?php
// Database configuration
$hostname = "localhost";
$username = "root";
$password = "";
$database = "wholesaleshoes";

// Establishing MySQL connection
$conn = mysqli_connect($hostname, $username, $password, $database);

// Checking for connection errors
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
