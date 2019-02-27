<?php include('process1.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>User Registration system using PHP and MySQL</title>
	<link rel="stylesheet" type="text/css"	href="Css1/side.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script type = "text/javascript" src = "bootstrap/js/jquery-slim.min.js"></script>
	<script type = "text/javascript" src = "bootstrap/js/popper.min.js"></script>
	<script type = "text/javascript" src = "bootstrap/js/bootstrap.js"></script>
</head>
<body>
<div id="main">
			<nav>
			
				<ul>

					
					
					<li><a href="front1.php">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
		
		
	</div>
	<br><br><br>
	<div class="row justify-content-center">
	<form action="process1.php" method="POST">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
		<div class="form-group">
			<label>firstname</label>
			<input type="text" name="firstname" class="form-control" value="<?php echo $firstname;?>"placeholder="Enter First name"required>
		</div>
		<div class="form-group">
			<label>lastname</label>
			<input type="text" name="lastname" class="form-control" value="<?php echo $lastname;?>"placeholder="Enter Last name"required>
		</div>
		<div class="form-group">
			<label>middlename</label>
			<input type="text" name="middlename" class="form-control" value="<?php echo $middlename;?>"placeholder="Enter Middle name"required>
		</div>
		<div class="form-group">
			<label>contact_no</label>
			<input type="text" name="contact_no" class="form-control" value="<?php echo $contact_no;?>"placeholder="Enter Contact number"required>
		</div>
		<div class="form-group">
			<label>address</label>
			<input type="text" name="address" class="form-control" value="<?php echo $address;?>"placeholder="Enter Address"required>
		</div>
		<div class="form-group">
		<?php 
			if($update==true):
		?>
		<button type="submit" class="btn btn-info" name="update">Update</button>
		<a href="customercrud.php"class="btn btn-info">back</a>
		<?php else: ?>
			<button type="submit" class="btn btn-primary" name="save">save</button>
			<a href="customercrud.php"class="btn btn-primary">back</a>
		<?php endif;?>
		</div>
	</form>
	</div>

</body>
</html>