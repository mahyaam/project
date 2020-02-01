<?php
	session_start();
	if (isset($_POST['login_'])) {
		include("adminCheckLogin.php");
	}
?>

<!DOCTYPE html>
<html dir="rtl" lang="fa">
<head>
	<script type="text/javascript">
        function preventBack() { window.history.forward(); }
        setTimeout("preventBack()", 0);
        window.onunload = function () {
            null;
        };

    </script>
	<meta charset="utf-8">
	<title>ورود</title>
	<style type="text/css">
		h1{
			background-color: aqua;
			width: 16%;
			margin: auto;
			padding-bottom: 12px;
		}
		body{
			padding: 0;
			margin: 100px 0px 0px 0px;
		}
		input{
			width: 207px;
		}
		*{
			text-align: center;
			border-radius: 5px;
		}
	</style>
</head>
<body>
	<h1>ورود مدیران</h1><br><br>

	<form method="post">
		<input type="text" name="adminLoginUsername" placeholder="نام کاربری"><br><br>
		<input type="password" name="adminLoginPassword" placeholder="رمز ورود"><br><br>
		<input type="submit" name="login_" value="ورود">
	</form><br><br>

</body>
</html>