<?php
	$db = mysqli_connect("localhost" , "universityform" , "123456mahdi" , "universityform");
    mysqli_set_charset($db , "utf8");
	$user_name = mysqli_real_escape_string($db , $_POST['user_name']);
	$regUsername = mysqli_real_escape_string($db , $_POST['regUsername']);
	$regEmail = mysqli_real_escape_string($db , $_POST['regEmail']);
	$regPassword = md5(mysqli_real_escape_string($db , $_POST['regPassword']));
	$group = mysqli_real_escape_string($db , $_POST['group']);

	$query = "SELECT * FROM user";
	$result=mysqli_query($db,$query);
    	while($row = $result->fetch_assoc()){
    		if (strcmp($row['username'] , $regUsername) == 0) {
			
    			header("location: register.php");
    			die();
    		}
    	}

			$sql = "INSERT INTO user(user_name , userEmail , username , userpassword , groupId) VALUES('$user_name' , '$regEmail' , '$regUsername' , '$regPassword' , '$group')";
			mysqli_query($db , $sql);

?>