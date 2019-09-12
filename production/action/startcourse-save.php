<?php 
 session_start();
	//include'db.php';
	$sec_title = $_POST["title"]; 
	$sec_desc = $_POST["sec_desc"];
	$step = $_POST["step"];
	$course_title = $_POST["course_title"];
	$dot_url = $_POST["doturl"];
	$status = $_POST["status"];

		$conn = mysqli_connect('localhost','root','','akash');
		$sql="INSERT INTO startcourse(sectiontitle, sectiondescription, coursestep, coursetitle, doturl,status) VALUES ('$sec_title','$sec_desc','$step','$course_title','$dot_url','$status')";

		
		if(mysqli_query($conn,$sql)==true){
			$_SESSION["success"]="<h1 style='text-align:center;color:green'>Data Insert Successfull</h1>";
		header("location:../start course section.php");
	} else{
		$_SESSION["success"]="<h1 style='text-align:center;color:red'>Data Insert Unsuccessfull</h1>";
		header("location:../start course section.php");
	}
 ?>