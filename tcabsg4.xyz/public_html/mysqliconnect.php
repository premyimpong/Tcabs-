<?php

session_start();
define('DB_SERVER', 'localhost:3306');
define('DB_USERNAME', 'u420747415_trevin');
define('DB_PASSWORD', 'Dataimple123');
define ('DB_DATABASENAME', 'u420747415_tcabs');
$mysqli = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASENAME);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
else {

}
?>