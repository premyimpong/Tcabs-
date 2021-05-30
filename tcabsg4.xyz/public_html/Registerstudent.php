<!DOCTYPE html>
<html>
<head>
	<title>Register New Employee</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div>
</div>
<div>
	<form action="Registeremployee.php" method="post">
		<div class="container">

			<div class="row">
				<div class="col-sm-3">
					<h1>Register New Employee</h1>
					<p>Fill the inforomation</p>
					<label for="fname"><b>First Name</b></label>
					<input class="form-control" type="text" name="fname">

					<label for="lname"><b>Last Name</b></label>
					<input class="form-control" type="text" name="lname">

					<label for="Password"><b>Password</b></label>
					<input class="form-control" type="text" name="Password">

					<label for="dob"><b>Date of Birth</b>  format(00/00/0000)</label>
					<input class="form-control" type="text" name="dob">

					<label for="email"><b>Email Address</b></label>
					<input class="form-control" type="text" name="email">

					<label for="gender"><b>Gender</b></label>
					<input class="form-control" type="text" name="gender">

					<label for="phonenumber"><b>Phone Number</b></label>
					<input class="form-control" type="text" name="phonenumber">

					<label for="mobilenumber"><b>Mobile Number</b></label>
					<input class="form-control" type="text" name="mobilenumber">

<p>Address information</p>
					<label for="streetNo"><b>Street Number</b></label>
					<input class="form-control" type="text" name="streetNo">

					<label for="adress1"><b>Adress1</b></label>
					<input class="form-control" type="text" name="adress1">

					<label for="suburb"><b>Suburb</b></label>
					<input class="form-control" type="text" name="suburb">

					<label for="postcode"><b>PostCode</b></label>
					<input class="form-control" type="text" name="postcode">

					<input type="submit" name="create" value="Sign Up">
				</div>
			</div>
		</div>
	</form>
</div>
</body>
<?php
	$servername = "localhost";
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

if(isset($_POST['create'])) {
	$fname = $_POST['fname'];
	$age = $_POST['dob'];

	$sql = "INSERT INTO students (Firstname, Age) VALUES ('$fname', '$age')";

	$result = mysqli_query($conn,$sql);
}
	?>
</html>