<?php 
session_start();
	//include'db.php';
	$title = $_POST["title"]; 
	$description = $_POST["section_description"];
	
	$conn = mysqli_connect('localhost','root','','akash');
	$sql="INSERT INTO projecttitle( title, description) VALUES ('$title','$description')";

	if(mysqli_query($conn,$sql)==true){
		$_SESSION["success"]="<h1 style='text-align:center;color:green'>Data Insert Successfull</h1>";
		header("location:../Home page finish project.php");
	} else{
		$_SESSION["success"]="<h1 style='text-align:center;color:red'>Data Insert Unsuccessfull</h1>";
		header("location:../Home page finish project.php");
	}
	mysqli_close($conn);
 ?>
 ?>