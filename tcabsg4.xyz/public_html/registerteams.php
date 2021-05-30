<?php

 include_once 'mysqliconnect.php';
	
    $teamid = $_POST['teamid'];
	$teamname = $_POST['teamname'];
	$teammembers = $_POST['teammembers'];
	
	$sql = "CALL u420747415_tcabs.Register_Team('".$_POST["teamid"]."','".$_POST["teamname"]."', '".$_POST["teammembers"]."');";
	mysqli_query($mysqli, $sql);
	
	header("Location: Teams.html?register=success");
	
	
	?>