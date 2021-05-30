<?php

	include_once 'mysqliconnect.php';
	
	$dteamid = $_POST['dteamid'];
	
	 if(isset($_POST['delteam'])){
	$sql = "CALL u420747415_tcabs.Delete_Team('".$_POST["dteamid"]."');";
	mysqli_query($mysqli, $sql);
	
	header("Location: Teams.html?register=success");
	 }
	
	
	?>