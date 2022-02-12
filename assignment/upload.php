<?php
	require_once 'conn.php';
 
	if(!empty($_FILES['file'])){
		$file_name = $_FILES['file']['name'];
		$file_temp = $_FILES['file']['tmp_name'];
		$file_size = $_FILES['file']['size'];
 
		$exp = explode(".", $file_name);
		$ext = end($exp);
		$file = time().'.'.$ext;
		$location = "upload/".$file;
 
		if($file_size < 5242880){
			move_uploaded_file($file_temp, $location);
			mysqli_query($conn, "INSERT INTO `file` VALUES('', '$file', '$location')") or die(mysqli_error());
			echo "success";
		}else{
			echo "error2";
		}
	}else{
		echo "error1";
	}
	

?>