<?php

 include_once 'mysqliconnect.php';
	
    $id = $_POST['unitid'];
	$name = $_POST['unitname'];
    $desc = $_POST['unitdesc'];

	
	$sql = "CALL u420747415_tcabs.Register_unit('".$_POST["unitid"]."','".$_POST["unitname"]."', '".$_POST["unitdesc"]."');";
	mysqli_query($mysqli, $sql);
	
	header("Location: unitofstudy.html?register=success");
	
	
?>