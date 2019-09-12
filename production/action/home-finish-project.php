<?php 
 session_start();
	//include'db.php';
$firsttitle = $_POST["firsttitle"]; 
$firstdes = $_POST["firstdescription"];
$secondtitle = $_POST["secondtitle"];
$secdescription = $_POST["seconddescription"];
$thirdtitle = $_POST["thirdtitle"];
$thirddes = $_POST["thirddescription"];
$button = $_POST["button"];
$btntextlink = $_POST["btn_link"];
	 

	$conn = mysqli_connect('localhost','root','','akash');
	$sql="INSERT INTO finishprojectlast(firsttile, firstdescription, secontitle, secondescription, thirdtitle, thirddescription, button, buttonurl) VALUES ('$firsttitle','$firstdes','$secondtitle','$secdescription','$thirdtitle','$thirddes','$button','$btntextlink')";

	
	if(mysqli_query($conn,$sql)==true){
		$_SESSION["success"]="<h1 style='text-align:center;color:green'>Data Insert Successfull</h1>";
		header("location:../Home page finish project.php");
	} else{
		$_SESSION["success"]="<h1 style='text-align:center;color:red'>Data Insert Unsuccessfull</h1>";
		header("location:../Home page finish project.php");
	}
 ?>