<?php
$servername = "127.0.0.1";
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

$sql = 'SELECT * FROM students';

$result = mysqli_query($conn, $sql);

$students = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);

mysqli_close($conn);

print_r($students);

?>