<?php
	session_start();
	$db = mysqli_connect("localhost" , "universityform" , "123456mahdi" , "universityform");
    mysqli_set_charset($db , "utf8");
?>

<!DOCTYPE html>
<html dir="rtl" lang="fa">
<head>
	<title>خبرنامه</title>
	<meta charset="utf-8">
	<style type="text/css">
		*{
			text-align: center;
		}
		body{
			margin: 0;
			padding: 0;
			margin-top: 80px;
		}
		#logoutBtn{
			background-color: red;
			color: white;
			padding: 10px 20px;
			border-radius: 5px;
			transition: 0.25s;
			border:1px red solid;
			float: left;
			margin: 7px 0px 0px 7px; 
		}
		a#logoutBtn:hover{
			background-color: white;
			color: red;
			transition: 0.25s;
			box-shadow: 0px 3px 3px red;
		}
		header{
			position: fixed;
			background-color: pink;
			width: 100%;
			height: 60px;
			top: 0;
		}
		h1{
			display: inline;
			float: right;
			margin: 7px 7px 0px 0px; 
		}
		form{
			position: fixed;
			top: 20px;
			right: 420px;
		}
	</style>
</head>
<body>

	<header>
		
		<?php 
			$getUsername = $_SESSION['signin_username'];
			$query = "SELECT * FROM user WHERE username = '$getUsername'";
			$result=mysqli_query($db,$query);
	    	$row = $result->fetch_assoc();
	    	$Username = $row['user_name'];
		?>
		<h1>سلام <?php echo $Username; ?></h1>

		<form method="post">
			<input type="submit" name="myField" value="رشته خودم">
			<input type="submit" name="uni" value="دانشگاه">
			<input type="submit" name="khabgah" value="خوابگاه">
			<input type="submit" name="fanni" value="فنی">
			<input type="submit" name="math" value="ریاضی">
			<input type="submit" name="ensani" value="انسانی">
			<input type="submit" name="olum" value="علوم">
			<input type="submit" name="meca" value="مکانیک">
		</form>

	    <a id="logoutBtn" href="login_register/logout.php">خارج می شوید؟</a>

	</header>
	

	<?php 
		if (isset($_POST['myField'])) {
			$group = $row['groupId'];
			$query = "SELECT * FROM news WHERE depId='$group'";
			$result=mysqli_query($db,$query);
	    	while($row = $result->fetch_assoc()){
	    		echo $row['title']."<br><br>".$row['contex']."<hr>";
	    	}
			die();
		}
		if (isset($_POST['uni'])) {
			$query = "SELECT * FROM news WHERE depId='دانشگاه'";
			$result=mysqli_query($db,$query);
	    	while($row = $result->fetch_assoc()){
	    		echo $row['title']."<br><br>".$row['contex']."<hr>";
	    	}
			die();
		}
		if (isset($_POST['khabgah'])) {
			$query = "SELECT * FROM news WHERE depId='خوابگاه'";
			$result=mysqli_query($db,$query);
	    	while($row = $result->fetch_assoc()){
	    		echo $row['title']."<br><br>".$row['contex']."<hr>";
	    	}
			die();
		}
		if (isset($_POST['fanni'])) {
			$query = "SELECT * FROM news WHERE depId='فنی مهندسی'";
			$result=mysqli_query($db,$query);
	    	while($row = $result->fetch_assoc()){
	    		echo $row['title']."<br><br>".$row['contex']."<hr>";
	    	}
			die();
		}
		if (isset($_POST['math'])) {
			$query = "SELECT * FROM news WHERE depId='ریاضی'";
			$result=mysqli_query($db,$query);
	    	while($row = $result->fetch_assoc()){
	    		echo $row['title']."<br><br>".$row['contex']."<hr>";
	    	}
			die();
		}
		if (isset($_POST['ensani'])) {
			$query = "SELECT * FROM news WHERE depId='انسانی'";
			$result=mysqli_query($db,$query);
	    	while($row = $result->fetch_assoc()){
	    		echo $row['title']."<br><br>".$row['contex']."<hr>";
	    	}
			die();
		}
		if (isset($_POST['olum'])) {
			$query = "SELECT * FROM news WHERE depId='علوم پایه'";
			$result=mysqli_query($db,$query);
	    	while($row = $result->fetch_assoc()){
	    		echo $row['title']."<br><br>".$row['contex']."<hr>";
	    	}
			die();
		}
		if (isset($_POST['meca'])) {
			$query = "SELECT * FROM news WHERE depId='مکانیک'";
			$result=mysqli_query($db,$query);
	    	while($row = $result->fetch_assoc()){
	    		echo $row['title']."<br><br>".$row['contex']."<hr>";
	    	}
			die();
		}

	?>
	<br>
	<?php
		
		$group = $row['groupId'];
		
		$query = "SELECT * FROM news WHERE depId='$group'";
		$result=mysqli_query($db,$query);
    	while($row = $result->fetch_assoc()){
    		echo $row['title']."<br><br>".$row['contex']."<hr>";
    	}
	?>
</body>
</html>