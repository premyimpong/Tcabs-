<?php
$servername = "localhost";
$database = "u420747415_tcabs";
$username = "u420747415_trevin";
$password = "Dataimple123";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql = "INSERT INTO Team (Team_ID, T_Name, T_Members)
VALUES ('123', 'yaluwa' , 'gdyedgedyeyhuy')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);

?>