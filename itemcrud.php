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
	<?php require_once 'process5.php';?>
	
	<?php
	
	if(isset($_SESSION['message'])):?>
	
	<div class="alert alert-<?=$_SESSION['msg_type']?>">
	
	<?php 
		echo $_SESSION['message'];
		unset($_SESSION['message']);
	?>
	</div>
	<?php endif ?>
	<div class="container">
	<?php
		$mysqli = new mysqli('localhost','root','','registration') or die(mysqli_error($mysqli));
		$username= $_SESSION["username"];
		$result=$mysqli->query("select id from users where username='$username'") or die($mysqli->error);
		if(@count($result)==1)
		{
			$row=$result->fetch_array();
			$userid=$row['id'];

		}
		
		$result = $mysqli->query("SELECT * FROM item where userid='$userid'") or die($mysqli->error);
		//pre_r($result);
		
		?>
		<a href="itemadd.php"class="btn btn-warning">Create info</a>
		<a href="index1.php"class="btn btn-info">Back</a>
		<div class="row justify-content-center">
		<br><br><br>
			<table class="table">
			
				<thead>
					<tr class="text-white">
						<th>Item_id</th>
						<th>Description</th>
						<th>Unit</th>
						<th>Quality</th>
						<th>Price</th>
						
						<th colspan="2">Action</th>
					</tr>
				</thead>
				
				<?php
					while($row=$result->fetch_assoc()):?>
					
						<tr class="text-white">
							<td><?php echo $row['id']?></td>
							<td><?php echo $row['description']?></td>
							<td><?php echo $row['unit']?></td>
							<td><?php echo $row['quality']?></td>
							<td><?php echo $row['price']?></td>
							
							
							<td>
								<a href="itemadd.php?edit=<?php echo $row['id'];?>"
									class="btn btn-success">Edit</a>
								<a href="process5.php?delete=<?php echo $row['id'];?>"
									class="btn btn-danger">Delete</a>
									
							</td>
						</tr>
						<?php endwhile;?>
			</table>
		</div>
		<?php
		function pre_r($array){
			echo'<pre>';
			print_r($array);
			echo'</pre>';
		}
	
	?>
	
</div>
</body>
</html>