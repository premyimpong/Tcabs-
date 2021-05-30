<?php

	include_once 'mysqliconnect.php';
	
	$pid = $_POST['dpid'];
	
	 if(isset($_POST['delproj'])){
	$sql = "CALL Delete_Project('".$_POST["dpid"]."');";
	mysqli_query($conn, $sql);
	
	header("Location: Projects.html?register=success");
	 }
	
	
	?>