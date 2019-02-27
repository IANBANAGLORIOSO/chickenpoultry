<?php include('server.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>Front page</title>
	
	<link rel="stylesheet" type="text/css" href="Css1/style.css">
	<link rel="stylesheet" type="text/css" href="Css1/side.css">
	<link rel="stylesheet" type="text/js" href="javascript/java.js">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script type = "text/javascript" src = "bootstrap/js/jquery-slim.min.js"></script>
	<script type = "text/javascript" src = "bootstrap/js/popper.min.js"></script>
	<script type = "text/javascript" src = "bootstrap/js/bootstrap.js"></script>
</head>
<body>
<div id="main">
			<nav>
			
				<ul>

					<image src="Image chicken/as.png" height="40px">
					<li><a href="front1.php">Home</a></li>
					<li>Contact Me: 0946-816-2149</li>
					
				</ul>
		
			</nav>
	</div>

<div id="wrapper">
		<!-- Sidebar -->
		<div id="sidebar-wrapper">
			<ul class="sidebar-nav">
				<div class="logo_container">
				<br><br>
					
					
				</div>
				<br><br><br>
				<div class="title">WELCOME</div>
				
				<li>
					<a href="flockscrud.php">Flocks Management</a>
				</li>
				<li>
					<a href="customercrud.php">Customer</a>
				</li>
				<li>
					<a href="medicationcrud.php">Medication</a>
				</li>
				<li>
					<a href="feedscrud.php">Feeds</a>
				</li>
				<li>
					<a href="salescrud.php">Sales</a>
				</li>
				<li>
					<a href="itemcrud.php">Items</a>
				</li>
				<li>
					<a href="#">Reports Eggs</a>
				</li>
				<li>
					<a href="#">Records Eggs</a>
				</li>
				<li>
				<a href="login.php">Exits</a>
				</li>
			</ul>
		</div>
		<!-- /#sidebar-wrapper -->

		<!-- Page Content -->
		<div id="page-content-wrapper">
			<div class="container" id="dot"> 
				
				<a href="#menu-toggle" class="btn btn-success" id="menu-toggle">Menu</a>
			</div>
		</div>

	</div>
		<!-- /#wrapper -->

		<!-- Bootstrap core JavaScript -->
		<script src="Menu/jquery/jquery.min.js"></script>
		<script src="Menu/bootstrap/js/bootstrap.bundle.min.js"></script>


<!-- Menu Toggle Script -->
<script>
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});

</script>
<div class="header">
	<h1>Welcome to chicken poultry application</h1><br><br>
	<p>The purpose of this Application is for poultry management. The poultry are domesticated birds kept by humans for their eggs, their meat or feathers. These birds are most
	typically members of the superorders galloanserea(fowl),especially the order Galliformes(which includes chickens,quails,and turkeys). The domestication of poultry took place
	several thousand years ago. This may have originally been as a result of people hatching and rearing young birds from eggs collected from the wild, but later involved keeping the birds
	 permanently in captivity.</p>
</div>	
<br><br><br><br>
</body>
</html>