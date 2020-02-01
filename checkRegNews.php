<?php

	$db = mysqli_connect("localhost" , "universityform" , "123456mahdi" , "universityform");
    mysqli_set_charset($db , "utf8");
	$newsTitle = mysqli_real_escape_string($db , $_POST['newsTitle']);
	$newsContext = mysqli_real_escape_string($db , $_POST['newsContext']);
	
	// set default timezone
	date_default_timezone_set('Asia/Tehran'); // CDT
	$current_date = (string)date('d/m/Y-H:i:s');
	$group = mysqli_real_escape_string($db , $_POST['group']);
	$sentTimes = mysqli_real_escape_string($db , $_POST['sentTimes']);
	$level = mysqli_real_escape_string($db , $_POST['level']);
	$pubDate = (string)mysqli_real_escape_string($db , $_POST['pubDate']);



	$sql = "INSERT INTO news(title , contex , reg_date , author , depId , sentTimes , level , pubDate) VALUES($newsTitle , $newsContext , $current_date , 26 , 'ریاضی' , $sentTimes , $level , $pubDate)";
	mysqli_query($db , $sql);

?>