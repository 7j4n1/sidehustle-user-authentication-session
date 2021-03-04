<?php 
	session_start(); 
	$_SESSION['fullname'] = "";
	$_SESSION['email'] = "";
	$_SESSION['user'] = "";
	$_SESSION['pass'] = "";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	
</head>
<body>
	<?php
		if (isset($_POST['btnReg'])) {
			$fname = trim($_POST['fname']);
			$lname = trim($_POST['lname']);
			$email = trim($_POST['email']);
			$username = trim($_POST['username']);
			$password = md5(trim($_POST['password']));

			// Store Data in SESSION Variables
			$_SESSION['fullname'] = $fname." ".$lname;
			$_SESSION['email'] = $email;
			$_SESSION['user'] = $username;
			$_SESSION['pass'] = $password;

			echo 'User details registered successfully';
		}
	?>
	<div class="form">
		<form action="register.php" method="post">
			<div class="title">
				<h2>Register your details.</h2>
			</div>
			<div class="form-group input-group">
				<p>First Name:</p>
				<input type="text" name="fname" placeholder="First Name" required="">
			</div>
			<div class="form-group input-group">
				<p>Last Name:</p>
				<input type="text" name="lname" placeholder="Last Name" required="">
			</div>
			<div class="form-group">
				<p>Email Address:</p>
				<input type="email" name="email" placeholder="Email Address" required="">
			</div>
			<div class="form-group input-group">
				<p>Username:</p>
				<input type="text" name="username" placeholder="Username" required="">
			</div>
			<div class="form-group input-group">
				<p>Password:</p>
				<input type="password" name="password" placeholder="Password" required="">
			</div>
			<div class="form-group">
				<button type="submit" name="btnReg" class="btn btn-primary">Register</button>
			</div>
			<div class="form-group">
				<a href="login.php" class="btn btn-primary">Log In</a>
			</div>
		</form>
	</div>
</body>
</html>