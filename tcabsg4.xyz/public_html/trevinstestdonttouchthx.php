<?php

$servername = "localhost";
$database = "u420747415_testdb";
$username = "u420747415_trevintest";
$password = "Thisisatest123";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>