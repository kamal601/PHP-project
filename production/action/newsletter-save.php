<?php 
 session_start();
	//include'db.php';
	$sec_title = $_POST["title"]; 
	$sec_desc = $_POST["sec_desc"];
	$button_url = $_POST["btnurl"];
	$button_text = $_POST["button_title"];
	

		$conn = mysqli_connect('localhost','root','','akash');
		$sql="INSERT INTO newsletter(sectiontitle, sectiondescription, button_url, button_text) VALUES ('$sec_title','$sec_desc','$button_url','$button_text')";

		
		if(mysqli_query($conn,$sql)==true){
			$_SESSION["success"]="<h1 style='text-align:center;color:green'>Data Insert Successfull</h1>";
		header("location:../newsletter section.php");
	} else{
		$_SESSION["success"]="<h1 style='text-align:center;color:red'>Data Insert Unsuccessfull</h1>";
		header("location:../newsletter section.php");
	}
 ?>