<?php

session_start();
$mysqli = new mysqli('localhost','root','','registration') or die(mysqli_error($mysqli));

$id='';
$update = false;
$firstname ="";
$lastname="";
$middlename="";
$contact_no="";
$address="";


if(isset($_POST['save'])){
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$middlename = $_POST['middlename'];
	$contact_no = $_POST['contact_no'];
	$address = $_POST['address'];
	$username= $_SESSION["username"];
	$result=$mysqli->query("select id from users where username='$username'") or die($mysqli->error);
	if(@count($result)==1)
	{
		$row=$result->fetch_array();
		$userid=$row['id'];

	}
	$mysqli->query("INSERT INTO customer (userid,firstname,lastname,middlename,contact_no,address) VALUES ('$userid','$firstname','$lastname','$middlename','$contact_no','$address')") or
			die($mysqli->error);
	$_SESSION['message'] = "Record has been saved!";
	$_SESSION['msg_type'] = "success";
	
	
	header("location:customercrud.php");
}
if(isset($_GET['delete'])){
	$id =$_GET['delete'];
	$mysqli->query("DELETE FROM customer WHERE id=$id") or die($mysqli->error());
	
	$_SESSION['message'] = "Record has been deleted!";
	$_SESSION['msg_type'] = "danger";
	
	header("location:customercrud.php");
	
	
}
if(isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update =true;
	$result = $mysqli->query("SELECT * FROM customer WHERE id=$id") or die($mysqli->error);
	if(@count($result)==1){
		$row=$result->fetch_array();
		$firstname = $row['firstname'];
		$lastname = $row['lastname'];
		$middlename = $row['middlename'];
		$contact_no = $row['contact_no'];
		$address = $row['address'];
		
	}
}
if(isset($_POST['update'])){
	$id = $_POST['id'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$middlename = $_POST['middlename'];
	$contact_no = $_POST['contact_no'];
	$address = $_POST['address'];
	
	$mysqli->query("UPDATE customer SET firstname='$firstname',lastname='$lastname',middlename='$middlename',contact_no='$contact_no',address='$address' WHERE id=$id") or die($mysqli->error);
	$_SESSION['message'] = "Record has been updated!";
	$_SESSION['msg_type'] = "warning";
	
	header('location:customercrud.php');
}


?>