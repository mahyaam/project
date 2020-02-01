<?php
	session_start();
	if (isset($_POST['login_'])) {
		include("checkLogin.php");
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
	<h1>ورود</h1><br><br>

	<form method="post">
		<input type="text" name="loginUsername" placeholder="نام کاربری"><br><br>
		<input type="password" name="loginPassword" placeholder="رمز ورود"><br><br>
		<input type="submit" name="login_" value="ورود">
	</form><br><br>

	تا به حال <a href="register.php">ثبت نام</a> نکرده اید؟ چظور ثبت نام نکرده اید؟! خیلیا ثبت نام نکردند:)))
</body>
</html>