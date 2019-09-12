<?php 
 session_start();
	//include'db.php';
$titleone = $_POST["titleone"]; 
$titleOnedes = $_POST["titleonedes"];
$titletwo = $_POST["titletwo"];
$titletwodes = $_POST["titletwodes"];
$titlethree = $_POST["titlethree"];
$titlethreedes = $_POST["titlethreedes"];
	 
//image start//
	if(!empty($_FILES['photo']['name'])){
					//script for upload file
				$filename = $_FILES['photo']['name']; // File name
				$filesize = $_FILES['photo']['size']; // File size
				$filesize = $_FILES['photo']['type']; // File type 
					
				$type = explode(".",$filename);
				$type = $type[count($type)-1];
				$fileName = uniqid(rand()).".".$type; // file direction with uqid name //
				 $dir = "upload/".$fileName; // file direction with uqid name 
					
	
					 $tmpName = $_FILES['photo']['tmp_name']; //File Tmp name;
					
					if(in_array($type,array('jpg','JPG','PNG','png'))){ // check file extension//
					
						if(is_uploaded_file($tmpName)){ // check if file uploaded
							if(move_uploaded_file($_FILES['photo']['tmp_name'],$dir)){ // move and upload file to folder//
								$file = $fileName;
							}
							
						}
						 
					} 
					else{
						$error = "File Extension Does Not Match";
					}
					}

//image end


	$conn = mysqli_connect('localhost','root','','akash');
	$sql="INSERT INTO project(firsttile, fistdescription, titletwo, titletwodescription, titlethree, titlethreedescription, photourl) VALUES ('$titleone','$titleOnedes','$titletwo','$titletwodes','$titlethree','$titlethreedes','$dir')";

	
	if(mysqli_query($conn,$sql)==true){
		$_SESSION["success"]="<h1 style='text-align:center;color:green'>Data Insert Successfull</h1>";
		header("location:../home-project-section.php");
	} else{
		$_SESSION["success"]="<h1 style='text-align:center;color:red'>Data Insert Unsuccessfull</h1>";
		header("location:../home-project-section.php");
	}
 ?>