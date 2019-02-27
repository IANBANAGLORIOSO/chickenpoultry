<?php include('server.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>User Registration system using PHP and MySQL</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script type = "text/javascript" src = "bootstrap/js/jquery-slim.min.js"></script>
	<script type = "text/javascript" src = "bootstrap/js/popper.min.js"></script>
	<script type = "text/javascript" src = "bootstrap/js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css"	href="Css1/side.css">
	<link rel="stylesheet" href="font-awesome icon/css/fontawesome.min.css">
</head>
<body>
<div id="main">
			<nav>
			
				<ul>

					<image src="Image chicken/as.png" height="40px">
					<li><a href="front1.php">Home</a></li>
					<li><a href="register.php">Sign up</a></li>
					<li><a href="login.php">Sign in</a></li>
					<li>Contact Me: 0946-816-2149</li>
				</ul>
		
		
	</div>
	<div class="header">
		<h2>Login</h2>
	</div>
	<form method="post" action="login.php">
	<?php include('errors.php');?>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" required>
		</div>
		
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password"required>
		</div>
		
		<div class="input-group">
			<button type="submit" name="login_user" class="btn">Login</button>
		</div>
		<p>
			Not yet a member?<a href="register.php">Sign up</a>
		</p>
	</form>
<br><br><br>

</body>
</html>