<?php include('process5.php');?>
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
	<form action="process5.php" method="POST">
	<input type="hidden" name="id" value="<?php echo $id; ?>"/>
		<div class="form-group">
		<br><br>
		<div class="form-group">
			<label>Item_id</label>
			<input type="number" name="id" class="form-control" value="<?php echo $id;?>"placeholder="Enter Unit"required>
		</div>
		<div class="form-group">
			<label>Description</label>
			<input type="text" name="description" class="form-control" value="<?php echo $description;?>"placeholder="Enter description"required>
		</div>
		<div class="form-group">
			<label>Unit</label>
			<input type="number" name="unit" class="form-control" value="<?php echo $unit;?>"placeholder="Enter Unit"required>
		</div>
		<div class="form-group">
			<label>Quality</label>
			<input type="number" name="quality" class="form-control" value="<?php echo $quality;?>"placeholder="Enter Quality"required>
		</div>
		<div class="form-group">
			<label>Price</label>
			<input type="number" name="price" class="form-control" value="<?php echo $price;?>"placeholder="Enter Price"required>
		</div>	
		<div>
		
		<div class="form-group">
		<?php 
			if($update==true):
		?>
		<button type="submit" class="btn btn-info" name="update">Update</button>
		<a href="itemcrud.php"class="btn btn-info">back</a>
		<?php else: ?>
			<button type="submit" class="btn btn-primary" name="save">save</button>
			<a href="itemcrud.php"class="btn btn-primary">back</a>
		<?php endif;?>
		</div>
	</form>
	</div>

</body>
</html>