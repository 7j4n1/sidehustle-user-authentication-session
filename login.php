<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<div class="container">
		<?php
			if(isset($_POST['btnLog'])){
				$user = trim($_POST['username']);
				$pass = md5(trim($_POST['password']));
				if ((isset($_SESSION['user'])) && (isset($_SESSION['pass']))) {
					if (($user == $_SESSION['user']) && ($pass == $_SESSION['pass'])) {
						$_SESSION['status'] = "loggedIn";
						header("Location: index.php");
					} else {
						echo "Wrong username or password. Try Again!";
					}
				}else {
					echo "Kindly Register before try signing in.";
				}
				
			}

		?>
		<form action="login.php" method="post">
			<div class="title">
				<h2>Sign In</h2>
			</div>
			<div class="form-group">
				<p>Username:</p>
				<input type="text" name="username" placeholder="Username" required="">
			</div>
			<div class="form-group">
				<p>Password:</p>
				<input type="password" name="password" placeholder="Password" required="">
			</div>
			<div class="form-group">
				<button type="submit" name="btnLog" class="btn btn-primary">Log In</button>
			</div>
			<div class="form-group">
				<a href="register.php" class="btn btn-primary">Create New Account</a>
			</div>
		</form>
	</div>
</body>
</html>