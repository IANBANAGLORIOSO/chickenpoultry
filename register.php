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
</head>
<body>
<div id="main">
			<nav>
			
				<ul>

					<image src="Image chicken/as.png" height="40px">
					<li><a href="front1.php">home</a></li>
					<li><a href="register.php">Sign up</a></li>
					<li><a href="login.php">Sign in</a></li>
					<li>Contact Me: 0946-816-2149</li>
					
				</ul>
		
		
	</div>
	<div class="header">
		<h2>Register</h2>
	</div>
	<form method="post" action="register.php">
	<?php include('errors.php');?>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username;?>"required>
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email" value="<?php echo $email;?>"required>
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1"required>
		</div>
		<div class="input-group">
			<label>Confirm Password</label>
			<input type="password" name="password_2"required>
		</div>
		<div class="input-group">
			<button type="submit" name="register" class="btn">Register</button>
		</div>
		<p>
			Already a member?<a href="login.php">sign in</a>
		</p>
	</form>
	<br><br><br>

</body>
</html>