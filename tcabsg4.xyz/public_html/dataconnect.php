<?php
    $host = "localhost";
    $dbname = "u420747415_tcabs";
    $username = "u420747415_trevin";
    $password = "Dataimple123";


    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
   
if (mysqli_connect_errno()) 
{	
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
echo "Connected successfully";
?>