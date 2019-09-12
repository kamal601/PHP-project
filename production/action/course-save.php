<?php 
 session_start();
	//include'db.php';
$maintitle = $_POST["heading"]; 
$titledes = $_POST["small_text"];
$title = $_POST["title"];
$description = $_POST["des"];
$firstext = $_POST["firsttext"];
$secondtext = $_POST["secondtext"];
$thirdtext = $_POST["thirdtext"];
$btntext = $_POST["btntext"];
$btntextlink = $_POST["btn_link"];
	 
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
	$sql="INSERT INTO `course`(`heading`, `smalltitle`, `title`, `description`, `firsttext`, `secondtext`, `thirdtext`, `button`, `buttonlink`, `photourl`) VALUES ('$maintitle','$titledes','$title','$description','$firstext','$secondtext','$thirdtext','$btntext','$btntextlink','$dir')";

	
	if(mysqli_query($conn,$sql)==true){
		$_SESSION["success"]="<h1 style='text-align:center;color:green'>Data Insert Successfull</h1>";
		header("location:../home-course-section.php");
	} else{
		$_SESSION["success"]="<h1 style='text-align:center;color:red'>Data Insert Unsuccessfull</h1>";
		header("location:../home-course-section.php");
	}
	mysqli_close($conn);
 ?>
 ?>