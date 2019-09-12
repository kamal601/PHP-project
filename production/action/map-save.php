<?php 
session_start();
	//include'db.php';
	$map_url = $_POST["maplink"]; 
	
	$conn = mysqli_connect('localhost','root','','akash');
	$sql="INSERT INTO googlemap( mapurl) VALUEs ('$map_url')";

	if(mysqli_query($conn,$sql)==true){
		$_SESSION["success"]="<h1 style='text-align:center;color:green'>Data Insert Successfull</h1>";
		header("location:../map section.php");
	} else{
		$_SESSION["success"]="<h1 style='text-align:center;color:red'>Data Insert Unsuccessfull</h1>";
		header("location:../map section.php");
	}
	mysqli_close($conn);
 ?>
 ?>