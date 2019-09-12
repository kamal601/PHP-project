<?php 

	//include'db.php';
	$username = $_POST["username"];
	$email = $_POST["email"];
	$password = $_POST["password"];
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
	$sql="INSERT INTO akashvalue ( username, email, password, photourl) VALUES ( '$username', '$email', '$password','$dir')";

	if(mysqli_query($conn,$sql)==true){
		header("location:../login.php");
	} else{
		echo "Data not success";
	}

	mysqli_close($conn);
 ?>