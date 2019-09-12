<?php 
session_start();
	//include'db.php';
	$heading = $_POST["heading"]; 
	$countnumber = $_POST["countnumber"];
	
	$conn = mysqli_connect('localhost','root','','akash');
	$sql="INSERT INTO cuntdown (title, `countnumber`) VALUES ('$heading', '$countnumber')";

	if(mysqli_query($conn,$sql)==true){
		$_SESSION["success"]="<h1 style='text-align:center;color:green'>Data Insert Successfull</h1>";
		header("location:../Home Counter section.php");
	} else{
		$_SESSION["success"]="<h1 style='text-align:center;color:red'>Data Insert Unsuccessfull</h1>";
		header("location:../Home Counter section.php");
	}
 ?>