<?php 
 session_start();
	//include'db.php';
$package = $_POST["name"]; 
$offer = $_POST["offer"]; 
$offerstatus = $_POST["offrstatus"]; 
$exchange = $_POST["exchange"];
$money = $_POST["money"];
$duration = $_POST["duration"];
$firstext = $_POST["firsttext"];
$secondtext = $_POST["secondtext"];
$thirdtext = $_POST["thirdtext"];
$forthtext = $_POST["forthtext"];
$fifthtext = $_POST["fifthtext"];
$sixthtext = $_POST["sixtext"];
$seventhtext = $_POST["seventext"];
$btntext = $_POST["btntext"];
$btntextlink = $_POST["btn_link"];
$status = $_POST["status"];
	 
	$conn = mysqli_connect('localhost','root','','akash');
	$sql="INSERT INTO pricing(package, offer, offerstatus, exchange, amount, duration, firstfield, secondfield,thirdfield , fourthfield, fifthfield, sixthfield, seventhfield, buttonlink, button, status) VALUES ('$package','$offer', '$offerstatus', '$exchange','$money','$duration','$firstext','$secondtext','$thirdtext','$forthtext','$fifthtext','$sixthtext','$seventhtext','$btntextlink','$btntext','$status')";

	
	if(mysqli_query($conn,$sql)==true){
				$_SESSION["success"]="<h1 style='text-align:center;color:green'>Data Insert Successfull</h1>";
		header("location:../pricing.php");
	} else{
		$_SESSION["success"]="<h1 style='text-align:center;color:red'>Data Insert Unsuccessfull</h1>";
		header("location:../pricing.php");
	}
 ?>