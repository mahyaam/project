<?php
	session_start();
	$db = mysqli_connect("localhost" , "universityform" , "123456mahdi" , "universityform");
	mysqli_set_charset($db , "utf8");
	$signin_username = mysqli_real_escape_string($db , $_POST['loginUsername']);
	$signin_password = md5(mysqli_real_escape_string($db , $_POST['loginPassword']));

	$query="SELECT * From user where username='$signin_username' and userpassword='$signin_password'";
    
    $result=mysqli_query($db,$query);
	
	if (mysqli_num_rows($result)==1) {
		$_SESSION['signin_username'] = $signin_username;
		header("location: ../home_.php");
	}else{
		header('location:login.php');
	}

?>