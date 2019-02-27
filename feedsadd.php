<?php include('process3.php');?>
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
	<form action="process3.php" method="POST">
	<input type="hidden" name="id" value="<?php echo $id; ?>"/>
		<div class="form-group">
		<br><br>
			<label><h3>Flocks_id</h3></label>
				<?php
						$sql = "SELECT * FROM `flocks`";
						$result = mysqli_query($mysqli, $sql);

				?>
				<select name="flocks_id">
                      <?php
                          
						  
                          $resultCheck = mysqli_num_rows($records);

                            while ($row = mysqli_fetch_array($result)) {
                      ?>
                           <option value="<?php echo $row['id'];?>"><?php echo $row['id'];?></option>   
                           <?php   
                          }
                          ?>
            </select>
		<div>
		<div class="form-group">
			<label>Types_of_feeds</label>
			<input type="text" name="type_of_feeds" class="form-control" value="<?php echo $type_of_feeds;?>"placeholder="Enter type of feeds"required>
		</div>
		<div class="form-group">
			<label>Quantity</label>
			<input type="number" name="quantity" class="form-control" value="<?php echo $quantity;?>"placeholder="Enter Quantity"required>
		</div>
		<div class="form-group">
			<label>Unit</label>
			<input type="number" name="unit" class="form-control" value="<?php echo $unit;?>"placeholder="Enter Unit"required>
		</div>
		<div class="form-group">
			<label>Timestampt</label>
			<input type="date" name="timestampt" class="form-control" value="<?php echo $timestampt;?>"placeholder="Enter timestamp"required>
		</div>
		<div class="form-group">
			<label>Amount</label>
			<input type="amount" name="amount" class="form-control" value="<?php echo $amount;?>"placeholder="Enter amount"required>
		</div>
		
		<div class="form-group">
		<?php 
			if($update==true):
		?>
		<button type="submit" class="btn btn-info" name="update">Update</button>
		<a href="feedscrud.php"class="btn btn-info">back</a>
		<?php else: ?>
			<button type="submit" class="btn btn-primary" name="save">save</button>
			<a href="feedscrud.php"class="btn btn-primary">back</a>
		<?php endif;?>
		</div>
	</form>
	</div>

</body>
</html>