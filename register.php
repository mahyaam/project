<?php
	if (isset($_POST['regSubmit'])) {
		include("checkReg.php");
	}
?>

<!DOCTYPE html>
<html dir="rtl" lang="fa">
<head>
	<title>ثبت نام</title>
	<meta charset="utf-8">
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
		select{
			width: 213px;
		}
	</style>
</head>
<body>

<h1>ثبت نام</h1><br><br>

<form method="post" onsubmit="return checkFormEntries();">
	<input type="text" name="user_name" placeholder="نام شما"><br><br>
	<input type="text" name="regUsername" placeholder="نام کاربری"><br><br>
	<input type="email" name="regEmail" placeholder="ایمیل" required><br><br>
	<input type="password" name="regPassword" placeholder="رمز ورود"><br><br>
	<input type="password" name="regPassword2" placeholder="تکرار رمز ورود"><br><br>
	<select name="group">
		<option>گروه آموزشی</option>
		<option>ریاضی</option>
		<option>فنی مهندسی</option>
		<option>انسانی</option>
		<option>علوم پایه</option>
		<option>مکانیک</option>
	</select><br><br>
	<input type="submit" name="regSubmit" value="ثبت نام">
</form>


<script type="text/javascript">
	function checkFormEntries(){
		var x = document.getElementsByName("user_name")[0];
		var c = document.getElementsByName("regUsername")[0];
		var z = document.getElementsByName("regPassword")[0];
		var v = document.getElementsByName("regPassword2")[0];
		var b = document.getElementsByName("group")[0];
		if (x.value.length < 3) {
			alert("نام خود را به درستی وارد نمایید!");
			x.focus();
			return false;
		}else if(c.value.length < 6){
			alert("نام کاربری باید حداقل شامل 6 کاراکتر باشد!");
			c.focus();
			return false;
		}else if(z.value.length < 6){
			alert("رمز ورود باید حداقل شامل 6 کاراکتر باشد!");
			z.focus();
			return false;
		}else if(z.value != v.value){
			alert("دو رمز ورودی یکسان نیستند!");
			b.focus();
			return false;
		}else if (b.value === "گروه آموزشی") {
			alert("یک گروه انتخاب نمایدد!");
			b.focus();
			return false;
		}else if (!confirm("آیا از ارسال اطلاعات اطمینان کافی را دارید؟")) {
			return false;
		}else return true;

	}
</script>

<br><br>

اگر ثبت نام کرده اید، <a href="login.php">وارد</a> وارد شوید.

</body>
</html>