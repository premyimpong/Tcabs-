<?php

	include_once 'db.php';
	
	$pid = $_POST['pid'];
	$pname = $_POST['pname'];
	$projectdesc = $_POST['projectdesc'];
	
	$sql = "CALL u420747415_tcabs.Register_Project('".$_POST["pid"]."','".$_POST["pname"]."', '".$_POST["projectdesc"]."');";
	
	
	
	if(isset($_POST['projectdesc']))
{
$data=$_POST['projectdesc'];
$pid=$_POST['pid'];
$text = "Project ID :- " . $pid . "\n" . "Description :- " . $data . "\n";
$fp = fopen('data.txt', 'a+');
fwrite($fp, $text);
echo 'Description saved';
fclose($fp);
	header("Location: Projects.html?descriptionsaved=success");
}



	mysqli_query($conn, $sql);
	
	header("Location: Projects.html?register=success");
	
	 
	
	?>