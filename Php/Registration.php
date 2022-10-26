<?php

$dbserver="localhost";
 	$user="root";
 	$dbpass="";
 	$dbname="easyleave";
 	
 	$link= mysqli_connect($dbserver,$user,$dbpass,$dbname);

if(isset($_POST['reg'])){
	$username = $_POST['username'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$con_pass = $_POST['con_pass'];
	$usertype = $_POST['usertype'];

	if($pass!=$con_pass){
		echo "Passwords don't match";
	}else{

	$insert="INSERT INTO users (Name,  Phone_no, Email, Password, JobDescription) VALUES ('$username','$phone','$email','$pass','$usertype')";

    $result= mysqli_query($link,$insert);
    if($result){
      header("Location: login.php");
  	}else{
  		echo "check query";
  	}

  }

}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="../Css/styles.css">
</head>
<body>

	<div class="container">
		<div class="heading">
			<img src="https://thumbs.dreamstime.com/b/default-avatar-profile-icon-vector-social-media-user-image-182145777.jpg" class="logo" alt="">
			<h2>CREATE NEW ACCOUNT</h2>

		<form method = "post" class="form">
			<div class="details_container">
				<label for="username">User's Name:</label>
				<input type="text" name="username" placeholder="Full Name" required>
			</div>
			<div class="details_container">
				<label for="phone">Phone Number:</label>
				<input type="text" name="phone" placeholder="2547********" required>
			</div>
			<div class="details_container">
				<label for="email">User's E-mail:</label>
				<input type="text" name="email" placeholder="example@host.com" required>
			</div>
			<div class="details_container">
				<label for="password">Password:</label>
				<input type="password" name="pass" placeholder="Enter your password" required>
			</div>
			<div class="details_container">
				<label for="con_pass">Confirm Password:</label>
				<input type="password" name="con_pass" placeholder="Confirm your password" required>
			</div>
			<div class="details_container">
				<label for="category">Job Category:</label>
				<select name="usertype">
					<option value="Employee">Employee</option>
					<option value="Admin">Admin</option>
					<option value="HR">HR</option>		
				</select>
			</div>
			<div class="details_container">
				<button type="submit" name="reg" value="Register">Register</button>
			</div>
			<div class="details_container">
				<p>Already have an account?</p>
					<a href="login.php" class="register">Login</a>
				</div>

		</form>
		
	</div>
</body>
</html>