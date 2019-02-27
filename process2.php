<?php

session_start();
$mysqli = new mysqli('localhost','root','','registration') or die(mysqli_error($mysqli));

$id='';
$update = false;
$type_of_vaccine ="";
$timestamp ="";
$amount="";
$flocks_id="";

if(isset($_POST['save'])){
	$flocks_id= $_POST['flocks_id'];
	$type_of_vaccine = $_POST['type_of_vaccine'];
	$timestamp = $_POST['timestamp'];
	$amount = $_POST['amount'];
	$username= $_SESSION["username"];
	$result=$mysqli->query("select id from users where username='$username'") or die($mysqli->error);
	if(@count($result)==1)
	{
		$row=$result->fetch_array();
		$userid=$row['id'];

	}
	$mysqli->query("INSERT INTO medication (userid,flocks_id,type_of_vaccine,timestamp,amount) VALUES ('$userid','$flocks_id','$type_of_vaccine','$timestamp','$amount')") or
			die($mysqli->error);
	$_SESSION['message'] = "Record has been saved!";
	$_SESSION['msg_type'] = "success";
	
	
	header("location:medicationcrud.php");
}
if(isset($_GET['delete'])){
	$id =$_GET['delete'];
	$mysqli->query("DELETE FROM medication WHERE id=$id") or die($mysqli->error());
	
	$_SESSION['message'] = "Record has been deleted!";
	$_SESSION['msg_type'] = "danger";
	
	header("location:medicationcrud.php");
	
	
}
if(isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update =true;
	$result = $mysqli->query("SELECT * FROM medication WHERE id=$id") or die($mysqli->error);
	if(@count($result)==1){
		$row=$result->fetch_array();
		$flocks_id = $row['flocks_id'];
		$type_of_vaccine = $row['type_of_vaccine'];
		$timestamp = $row['timestamp'];
		$amount = $row['amount'];
		
		
	}
}
if(isset($_POST['update'])){
	$id = $_POST['id'];
	$flocks_id = $_POST['flocks_id'];
	$type_of_vaccine = $_POST['type_of_vaccine'];
	$timestamp = $_POST['timestamp'];
	$amount = $_POST['amount'];
	
	
	$mysqli->query("UPDATE medication SET flocks_id='$flocks_id',type_of_vaccine='$type_of_vaccine',timestamp='$timestamp',amount ='$amount' WHERE id=$id") or die($mysqli->error);
	$_SESSION['message'] = "Record has been updated!";
	$_SESSION['msg_type'] = "warning";
	
	header('location:medicationcrud.php');
}


?>