<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<div class="container">
	<?php if((isset($_SESSION['status'])) && ($_SESSION['status'] == "loggedIn")): ?>
		<div class="container">
			<div class="title" style="color: #000;">
				<h2>Welcome to the Homepage <?php echo $_SESSION['user']; ?></h2>
				<h3>My Profile</h3>
			</div>
			<div class="form-group">
				<h3>Name: <?php echo $_SESSION['fullname']; ?></h3>
			</div>
			<div class="form-group">
				<h3>Email: <?php echo $_SESSION['email']; ?></h3>
			</div>
			<div class="form-group">
				<h3>hope you enjoyed our service. To log out your session, kindly click</h3>
				<p><a href="logout.php">Logout</a></p>
			</div>
		</div>
	<?php else: ?>
		
			<div class="title" style="color: #000;">
				<h2>Kindly Create an account or Sign In with your credentials.</h2>
			</div>
			<div class="form-group">
				<ul type="none">
					<li><a href="register.php">=> Register</a></li>
					<li><a href="login.php">=> Login</a></li>
				</ul>
			</div>
		
	<?php endif; ?>
	</div>
</body>
</html>