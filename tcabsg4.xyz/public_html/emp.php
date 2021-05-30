<?php

 include_once 'mysqliconnect.php';

    $id = $_POST['uid'];
	$fname = $_POST['fname'];
    $lname = $_POST['sname'];
    $phoneno = $_POST['phonenumber'];
    $email = $_POST['email'];
    $password = $_POST['upassword'];
    $username = $_POST['username'];
    
if(empty($fname) ||empty($lname) ||empty($phoneno) ||empty($email) ||empty($password) ||empty($username) )
{
    exit('Plese complete the form');
}
	

	$sql = "CALL u420747415_tcabs.Register_employee('".$_POST["uid"]."','".$_POST["fname"]."', '".$_POST["sname"]."','".$_POST["phonenumber"]."','".$_POST["email"]."','".$_POST["upassword"]."','".$_POST["username"]."');";
	mysqli_query($mysqli, $sql)
	


	

?>