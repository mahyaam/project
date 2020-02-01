<?php
	session_start();
	$db = mysqli_connect("localhost" , "universityform" , "123456mahdi" , "universityform");
	mysqli_set_charset($db , "utf8");
	$signin_admin_username = mysqli_real_escape_string($db , $_POST['adminLoginUsername']);
	$signin_admin_password = md5(mysqli_real_escape_string($db , $_POST['adminLoginPassword']));

	$query="SELECT * From user where username='$signin_admin_username' and userpassword='$signin_admin_password' and (role='0' or role='1')";
    
    $result=mysqli_query($db,$query);
	
	if (mysqli_num_rows($result)==1) {
		$_SESSION['signin_admin_username'] = $signin_admin_username;
		header("location: ../admin/entryForm.php");
	}else{
		echo "<span style='color:red;'>شما اجازه دسترسی به صفحه مدیران را ندارید!</span>";
		echo "<p> </p>";
	}

?>