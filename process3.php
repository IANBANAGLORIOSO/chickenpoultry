<?php

session_start();
$mysqli = new mysqli('localhost','root','','registration') or die(mysqli_error($mysqli));

$id='';
$update = false;
$type_of_feeds ="";
$quantity ="";
$unit ="";
$timestampt ="";
$amount="";
$flocks_id="";

if(isset($_POST['save'])){
	$flocks_id= $_POST['flocks_id'];
	$type_of_feeds = $_POST['type_of_feeds'];
	$quantity = $_POST['quantity'];
	$unit = $_POST['unit'];
	$timestampt = $_POST['timestampt'];
	$amount = $_POST['amount'];
	$username= $_SESSION["username"];
	$result=$mysqli->query("select id from users where username='$username'") or die($mysqli->error);
	if(@count($result)==1)
	{
		$row=$result->fetch_array();
		$userid=$row['id'];

	}
	$mysqli->query("INSERT INTO feeds (userid,flocks_id,type_of_feeds,quantity,unit,timestampt,amount) VALUES ('$userid','$flocks_id','$type_of_feeds','$quantity','$unit','$timestampt','$amount')") or
			die($mysqli->error);
	$_SESSION['message'] = "Record has been saved!";
	$_SESSION['msg_type'] = "success";
	
	
	header("location:feedscrud.php");
}
if(isset($_GET['delete'])){
	$id =$_GET['delete'];
	$mysqli->query("DELETE FROM feeds WHERE id=$id") or die($mysqli->error());
	
	$_SESSION['message'] = "Record has been deleted!";
	$_SESSION['msg_type'] = "danger";
	
	header("location:feedscrud.php");
	
	
}
if(isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update =true;
	$result = $mysqli->query("SELECT * FROM feeds WHERE id=$id") or die($mysqli->error);
	if(@count($result)==1){
		$row=$result->fetch_array();
		$flocks_id = $row['flocks_id'];
		$type_of_feeds = $row['type_of_feeds'];
		$quantity = $row['quantity'];
		$unit = $row['unit'];
		$timestampt = $row['timestampt'];
		$amount = $row['amount'];
		
		
	}
}
if(isset($_POST['update'])){
	$id = $_POST['id'];
	$flocks_id = $_POST['flocks_id'];
	$type_of_feeds = $_POST['type_of_feeds'];
	$quantity = $_POST['quantity'];
	$unit = $_POST['unit'];
	$timestampt = $_POST['timestampt'];
	$amount = $_POST['amount'];
	
	
	$mysqli->query("UPDATE feeds SET flocks_id='$flocks_id',type_of_feeds='$type_of_feeds',quantity='$quantity',unit='$unit',timestampt='$timestampt',amount ='$amount' WHERE id=$id") or die($mysqli->error);
	$_SESSION['message'] = "Record has been updated!";
	$_SESSION['msg_type'] = "warning";
	
	header('location:feedscrud.php');
}


?>