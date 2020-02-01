<?php
	if (isset($_POST['sendNews'])) {
		include("checkRegNews.php");
	}
?>

<!DOCTYPE html>
<html dir="rtl" lang="fa">
<head>
	<title>ثبت اعلان</title>
	<meta charset="utf-8">
	<style type="text/css">
		body{
			padding: 0;
			margin: 50px 0px 0px 0px;
		}
		textarea{
			width: 200px;
		}
		select,input{
			width: 207px;
		}
		#dep{
			margin-right: 580px;
		}
		*{
			text-align: center;
			border-radius: 5px;
		}
	</style>
</head>
<body>

<h1>ثبت خبر</h1>
<h2>مدیر محترم خوش آمدید!</h2>
<br><br>

<form method="post" onsubmit="return checkFormEntries();">
	<input type="text" name="newsTitle" placeholder="عنوان"><br><br>
	
	<textarea name="newsContext" placeholder="متن خبر شما..."></textarea><br><br>

	<input type="number" name="sentTimes" placeholder="تعداد انتشارهای این خبر"><br><br>

	<input type="date" name="pubDate"><br><br>
	
	<select name="level">
		<option onclick="hideDepartments();">دانشگاه و خوابگاه</option>
		<option onclick="hideDepartments();">دانشگاه</option>
		<option onclick="hideDepartments();">خوابگاه</option>
		<option onclick="displayDepartments();">دانشکده</option>
	</select><br><br>
	
	<select style="display: none;" id="dep" name="group">
		<option>...</option>
		<option>هنر</option>
		<option>فنی مهندسی</option>
		<option>ریاضی</option>
	</select><br><br>

	<input type="submit" name="sendNews" value="ثبت خبر">
</form>

<script type="text/javascript">
	function displayDepartments(){
		var depClasses = document.getElementById('dep');
		depClasses.style.display = "block";
	}
	function hideDepartments(){
		var depClasses = document.getElementById('dep');
		depClasses.style.display = "none";
	}
	function checkFormEntries(){
		var x = document.getElementsByName("newsTitle")[0];
		var c = document.getElementsByName("newsContext")[0];
		var z = document.getElementsByName("sentTimes")[0];
		var v = document.getElementsByName("pubDate")[0];
		var b = document.getElementsByName("group")[0];
		if (x.value.length < 3) {
			alert("عنوان باید حداقل شامل 3 کارامتر باشد!");
			x.focus();
			return false;
		}else if(c.value.length < 3){
			alert("متن خبر حداقل باید 3 کاراکتر باشد!");
			c.focus();
			return false;
		}else if(z.value.length == 0){
			alert("تعداد انتشار های این خبر را وارد نمایید!");
			z.focus();
			return false;
		}else if(v.value.length == 0){
			alert("دو رمز ورودی یکسان نیستند!");
			v.focus();
			return false;
		}else if (!confirm("آیا از ارسال اطلاعات اطمینان کافی را دارید؟")) {
			return false;
		}else return true;

	}
</script>
</body>
</html>