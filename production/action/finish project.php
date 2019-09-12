<?php 
session_start();
	//include'db.php';
	 $heading = $_POST["firsttitle"]; 
	 $smheading = $_POST["firstdescription"];
	 $textlink = $_POST["secondtitle"];
	 $linktext = $_POST["seconddescription"];
	 $firstbtn = $_POST["thirdtitle"];
	 $fbtnlink = $_POST["thirddescription"];
	 $secdbtn = $_POST["button"];
	 $secndbtnlink = $_POST["btn_link"];

	$conn = mysqli_connect('localhost','root','','akash');
	$sql="INSERT INTO finishprojectlastt(firsttile,firstdescription, secontitle, secondescription, thirdtitle, thirddescription, button, buttonurl) VALUES ('$heading', '$smheading', '$textlink', '$linktext', '$firstbtn', '$fbtnlink', '$secdbtn', '$secndbtnlink')";

	if(mysqli_query($conn,$sql)==true){

		$_SESSION["success"]="<h1 style='text-align:center;color:green'>Data Insert Successfull</h1>";
		header("location:../home-finish project last section.php");
	} else{
		$_SESSION["success"]="<h1 style='text-align:center;color:red'>Data Insert Unsuccessfull</h1>";
		header("location:../home-finish project last section.php");
	}
 ?>