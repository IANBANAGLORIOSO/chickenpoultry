<?php

session_start();
$mysqli = new mysqli('localhost','root','','registration') or die(mysqli_error($mysqli));

$id='';
$update = false;
$description ="";
$unit="";
$quality="";
$price="";

if(isset($_POST['save'])){
	$description = $_POST['description'];
	$unit = $_POST['unit'];
	$quality = $_POST['quality'];
	$price = $_POST['price'];
	$username= $_SESSION["username"];
	$result=$mysqli->query("select id from users where username='$username'") or die($mysqli->error);
	if(@count($result)==1)
	{
		$row=$result->fetch_array();
		$userid=$row['id'];

	}
	$mysqli->query("INSERT INTO item (userid,id,description,unit,quality,price) VALUES ('$userid','$id','$description','$unit','$quality','$price')") or
			die($mysqli->error);
	$_SESSION['message'] = "Record has been saved!";
	$_SESSION['msg_type'] = "success";
	
	
	header("location:itemcrud.php");
}
if(isset($_GET['delete'])){
	$id =$_GET['delete'];
	$mysqli->query("DELETE FROM sales WHERE id=$id") or die($mysqli->error());
	
	$_SESSION['message'] = "Record has been deleted!";
	$_SESSION['msg_type'] = "danger";
	
	header("location:salescrud.php");
	
	
}
if(isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update =true;
	$result = $mysqli->query("SELECT * FROM sales WHERE id=$id") or die($mysqli->error);
	if(@count($result)==1){
		$row=$result->fetch_array();
		$timestamp = $row['timestamp'];
		$customer_id = $row['customer_id'];
		
		
	}
}
if(isset($_POST['update'])){
	$id = $_POST['id'];
	$timestamp = $_POST['timestamp'];
	$customer_id= $_POST['customer_id'];
	
	
	$mysqli->query("UPDATE sales SET id='$id',timestamp='$timestamp',customer_id ='$customer_id' WHERE id=$id") or die($mysqli->error);
	$_SESSION['message'] = "Record has been updated!";
	$_SESSION['msg_type'] = "warning";
	
	header('location:salescrud.php');
}


?>