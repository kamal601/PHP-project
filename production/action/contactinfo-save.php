<?php 
 session_start();
	//include'db.php';
	$sec_title = $_POST["title"]; 
	$iconname = $_POST["iconname"];
	$address = $_POST["add"];
	$icon_class = $_POST["iconclass"];
	$description = $_POST["desc"];
	$descriptionurl = $_POST["desclink"];
	

		$conn = mysqli_connect('localhost','root','','akash');
		$sql="INSERT INTO contactinfo(sectiontitle, iconname, address, icon_class,description,descripurl) VALUES ('$sec_title','$iconname','$address','$icon_class','$description','$descriptionurl')";

		
		if(mysqli_query($conn,$sql)==true){
			$_SESSION["success"]="<h1 style='text-align:center;color:green'>Data Insert Successfull</h1>";
		header("location:../contact info section.php");
	} else{
		$_SESSION["success"]="<h1 style='text-align:center;color:red'>Data Insert Unsuccessfull</h1>";
		header("location:../contact info section.php");
	}
 ?>