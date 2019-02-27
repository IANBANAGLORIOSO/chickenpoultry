<?php include('process.php');?>
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
	<form action="process.php" method="POST">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
		<div class="form-group">
			<label>Breed</label>
			<input type="text" name="breed" class="form-control" value="<?php echo $breed;?>"placeholder="Enter chicken Breed"required>
		</div>
		<div class="form-group">
			<label>Rooster</label>
			<input type="number" name="rooster" class="form-control" value="<?php echo $rooster;?>"placeholder="Enter Number of Rooster"required>
		</div>
		<div class="form-group">
			<label>Hen</label>
			<input type="number" name="hen" class="form-control" value="<?php echo $hen;?>"placeholder="Enter Number of Hen"required>
		</div>
		<div class="form-group">
		<?php 
			if($update==true):
		?>
		<button type="submit" class="btn btn-info" name="update">Update</button>
		<a href="flockscrud.php"class="btn btn-info">back</a>
		<?php else: ?>
			<button type="submit" class="btn btn-primary" name="save">save</button>
			<a href="flockscrud.php"class="btn btn-primary">back</a>
		<?php endif;?>
		</div>
	</form>
	</div>

</body>
</html>