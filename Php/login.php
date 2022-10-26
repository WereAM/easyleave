<?php

session_start();

$dbserver="localhost";
$user="root";
$dbpass="";
$dbname="easyleave";
 	
$link=mysqli_connect($dbserver,$user,$dbpass,$dbname);

if(isset($_POST['login'])){
	$username = $_POST['username'];
	$pass = $_POST['pass'];
	$usertype = $_POST['usertype'];

	$sql= "SELECT * FROM users WHERE Name='".$username."' AND Password='".$pass."'";
	$result = mysqli_query($link,$sql);
	
	while($row = mysqli_fetch_array($result)){
		if($row['Name']==$username && $row['Password']==$pass && $row['JobDescription']=='Admin'){
			$_SESSION['User'] = $userName;
			header("Location: adminportal.php");
		}elseif ($row['Name']==$username && $row['Password']==$pass && $row['JobDescription']=='Employee') {
			$_SESSION['User'] = $userName;
			header("Location: userportal.php");
		}
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Employee Login</title>
	<link rel="stylesheet" type="text/css" href="../Css/styles.css">
</head>
<body>
	<div class="container">
		<div class="heading">
			<img src="https://thumbs.dreamstime.com/b/default-avatar-profile-icon-vector-social-media-user-image-182145777.jpg" class="logo" alt="">
			<h2>EMPLOYEE LOGIN</h2>
		
			<form method="POST" class="form">
			<div class="details_container">
				<label for="username">User's Name:</label>
				<input type="text" name="username" placeholder="Full Name" required>
			</div>
			<div class="details_container">
				<label for="password">Password:</label>
				<input type="password" name="pass" placeholder="Enter your password" required>
			</div>
			<div class="details_container">
				<button type="submit" name="login" value="Login">Login</button>
			</div>
			<div class="details_container">
				<a href="forgot_password.html">Forgotten Password?</a>
				<a href="Registration.php" class="register">Sign Up</a>
			</div>
		</div>
	</div>
</form>
</body>
</html>