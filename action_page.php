<?php
	session_start();
	include("db_connection.php");
	global $conn;
	// echo"<pre>";
	// 	print_r($_POST);
		// print_r($_FILES);
	// echo"</pre>";
	
	$file_name=$_FILES['image_file']['name'];
	$custom_name='';
	if(isset($file_name)){
		$file_tmp_name=$_FILES['image_file']['tmp_name'];
		$imageFileType = strtolower(pathinfo($file_name,PATHINFO_EXTENSION));
		$imgeTypeAllow=array("jpg",'png','bmp','gif','webp');
		$custom_name="student_name_".time().'.'.$imageFileType;
		if(!in_array($imageFileType, $imgeTypeAllow)){
			echo "File not Take";
		}
	}
	
	// die();
	// $email=$_POST['email'];
	// echo "<h1>Your Email ID is ".$email."</h1>";
	$first_name=$_POST['first_name'];
	$last_Name=$_POST['last_Name'];
	$email=$_POST['email'];
	$pswd=$_POST['pswd'];
	
	$sql_duplicate_check="SELECT * FROM `user1` where `email`='".$email."'";
	$check=mysqli_query($conn,$sql_duplicate_check);
	if(mysqli_num_rows($check)>0){
		echo "<script>
				alert('Email Already Exist else{.');
				window.location.href='index1.php';
			  </script>";
	}
	else{
	
		$sql="INSERT INTO user1(first_name,last_Name,email,password) VALUES('".$first_name."','".$last_Name."','".$email."','".$pswd."')";
			// echo $sql;
		$query=mysqli_query($conn,$sql);
		if($query){
	
	
			if(isset($custom_name)){
				$destination="assets/img/".$custom_name;
				move_uploaded_file($file_tmp_name,$destination);
			}
			// echo "Successfully Registered.";
	
			
			$_SESSION['username']=$name;
			echo "<script>
					alert('Successfully Registered.');
					window.location.href='login.php';
				  </script>";
		}
		else{
			// echo "Unsuccessful Registered";
			echo "<script>
					alert('Unsuccessful Registered.');
					window.location.href='index1.php';
				  </script>";
	
		}
	}
	
		
	?>
