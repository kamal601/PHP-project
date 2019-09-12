<?php 
 session_start();
	//include'db.php';
$copyright = $_POST["fcopyright"]; 
$design = $_POST["design"];
$name = $_POST["designname"];
$designerurl = $_POST["designurl"];
$demo_image = $_POST["demoimg"];
$imge_name = $_POST["imgename"];
$img_link = $_POST["imglink"];
$icon_name = $_POST["icon"];
$icon_url = $_POST["iconurl"];

	$conn = mysqli_connect('localhost','root','','akash');
	$sql="INSERT INTO `copyright`(copyright, designheading, designername, Designerurl, demoimageheading, imagename, imageurl, iconname, iconurl) VALUES ('$copyright','$design','$name','$designerurl','$demo_image','$imge_name','$img_link','$icon_name','$icon_url')";

	
	if(mysqli_query($conn,$sql)==true){
		$_SESSION["success"]="<h1 style='text-align:center;color:green'>Data Insert Successfull</h1>";
		header("location:../footer copyright section.php");
	} else{
		$_SESSION["success"]="<h1 style='text-align:center;color:red'>Data Insert Unsuccessfull</h1>";
		header("location:../footer copyright section.php");
	}
 ?>