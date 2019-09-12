<?php 
	session_start();
	// include'db.php';
	$username = $_POST['username'];
	$password = $_POST['password'];

	$conn = mysqli_connect('localhost','root','','akash');
	$sql = "SELECT * FROM akashvalue WHERE username='$username' AND password='$password'";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0) {
		$_SESSION['password']=$password;
		$_SESSION['username']=$username;

		header("location:../index.php");
	}else {
		echo "username or password incorrect";
	}

 ?>