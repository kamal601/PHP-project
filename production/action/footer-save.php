<?php 
 session_start();
	//include'db.php';
$firstcollumntitle = $_POST["fclmntitle"]; 
$firstcollumndesc = $_POST["description"];
$title = $_POST["title"];
$firstfield = $_POST["ffield"];
$firstfieldurl = $_POST["ffieldlink"];
$secondfield = $_POST["sectext"];
$secondfieldurl = $_POST["sectextlink"];
$thirdfield = $_POST["thirdtext"];
$thirdfieldurl = $_POST["thirdtextlink"];
$fourthfield = $_POST["fourtext"];
$fourthfieldurl = $_POST["fourtextlink"];
$fifthfield = $_POST["fifthtext"];
$fifthfieldurl = $_POST["fifthtextlink"];


	$conn = mysqli_connect('localhost','root','','akash');
	$sql="INSERT INTO `footerfirst`(firstcullumntitle, firstcullumntitledesc, title, firstfield, firstfieldurl, secondfield, secondfieldurl, thirdfield, thirdfieldurl, forthfield, forthfieldurl, fifthfield, fifthfieldurl) VALUES ('$firstcollumntitle','$firstcollumndesc','$title','$firstfield','$firstfieldurl','$secondfield','$secondfieldurl','$thirdfield','$thirdfieldurl','$fourthfield','$fourthfieldurl','$fifthfield','$fifthfieldurl')";

	
	if(mysqli_query($conn,$sql)==true){
		$_SESSION["success"]="<h1 style='text-align:center;color:green'>Data Insert Successfull</h1>";
		header("location:../footer section.php");
	} else{
		$_SESSION["success"]="<h1 style='text-align:center;color:red'>Data Insert Unsuccessfull</h1>";
		header("location:../footer section.php");
	}
 ?>