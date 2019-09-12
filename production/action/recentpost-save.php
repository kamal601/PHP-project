<?php 
 session_start();
	//include'db.php';
	$sect_title = $_POST["title"]; 
	$sec_desc = $_POST["titledescription"];
	$title = $_POST["posttitle"];
	$content = $_POST["content"];
	$button = $_POST["button"];
	$buttonurl = $_POST["button"];
 
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
	$sql="INSERT INTO recentpost(sectiontitle, sectiondescription, title, description, button, buttonurl, photourl) VALUES ('$sect_title','$sec_desc','$title','$content','$button','$buttonurl','$dir')";

	
	if(mysqli_query($conn,$sql)==true){
		$_SESSION["success"]="<h1 style='text-align:center;color:green'>Data Insert Successfull</h1>";
		header("location:../recentpost section.php");
	} else{
		$_SESSION["success"]="<h1 style='text-align:center;color:red'>Data Insert Unsuccessfull</h1>";
		header("location:../recentpost section.php");
	}
 ?>