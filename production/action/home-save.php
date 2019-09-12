<?php 
session_start();
	//include'db.php';

	 $heading = $_POST["heading"]; 
	 $smheading = $_POST["small_text"];
	 $textlink = $_POST["text_link"];
	 $linktext = $_POST["link_text"];
	 $firstbtn = $_POST["first_btn"];
	 $fbtnlink = $_POST["first_btn_link"];
	 $secdbtn = $_POST["sec_btn"];
	 $secndbtnlink = $_POST["sec_btn_link"];

	$conn = mysqli_connect('localhost','root','','akash');
	$sql="INSERT INTO homeheading (title, smalltitle, textlink, linktext, firstbtntext, firstbtnlink, secbtntext, secbtnlink) VALUES ('$heading', '$smheading', '$textlink', '$linktext', '$firstbtn', '$fbtnlink', '$secdbtn', '$secndbtnlink')";

	if(mysqli_query($conn,$sql)==true){

		$_SESSION["success"]="<h1 style='text-align:center;color:green'>Data Insert Successfull</h1>";
		header("location:../Home Header section.php");
	} else{
		$_SESSION["success"]="<h1 style='text-align:center;color:red'>Data Insert Unsuccessfull</h1>";
		header("location:../Home Header section.php");
	}


 ?>