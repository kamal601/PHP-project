<?php 
session_start();
	//include'db.php';
	$page_menu = $_POST["titlemenu"];
	$page_menutwo = $_POST["titlemenutwo"];
	$page_menuthree = $_POST["titlemenuthree"];
	$page_menufour = $_POST["titlemenufour"];
	$description = $_POST["description"];
	$title = $_POST["title"];
	$titleurl = $_POST["titleurl"];
	
	$conn = mysqli_connect('localhost','root','','akash');
	$sql="INSERT INTO pricingpagetitle(titlemenu,titlemenutwo,titlemenuthree,titlemenufour,description, title, titleurl) VALUES ('$page_menu','$page_menutwo','$page_menuthree','$page_menufour', '$description', '$title', '$titleurl')";

	if(mysqli_query($conn,$sql)==true){
		$_SESSION["success"]="<h1 style='text-align:center;color:green'>Data Insert Successfull</h1>";
		header("location:../Pricing page Title.php");
	} else{
		$_SESSION["success"]="<h1 style='text-align:center;color:red'>Data Insert Unsuccessfull</h1>";
		header("location:../Pricing page Title.php");
	}
 ?>