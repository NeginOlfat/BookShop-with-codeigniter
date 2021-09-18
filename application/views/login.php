
<!DOCTYPE html>
<html>
<head>
	<title>کتاب</title>
	<meta charset="utf-8"  content="text/html">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/style.css">

<?php
if(validation_errors())
echo "<div class='errorbox'>".validation_errors()."</div>";
if(isset($_GET['error']))
echo "<div class='errorbox'>اطلاعات وارد شده صحیح نیست</div>";
if(isset($_GET['exit']))
setcookie("user","user",time()-60,"/");
if(isset($_GET['usersucsse']))
echo "<div class='errorbox'>کاربر گرامی ثبت نام شما موفقیت آمیز بود لطفا وارد شوید</div>"; 
?>
	
</head>
<body>
<div class="loginbox">
	<p>صفحه ورود</p>

	
		<form method="post" name="myform" onclick="return validateform()" action="<?php echo base_url() ?>index.php/c_account/c_login">
			<label>نام کاربری</label>
			<input type="text"  name="username" placeholder="UserName">
			<label>رمز عبور</label>
			<input type="password" name="password" placeholder="Password">
			<input type="submit" value="ورود" name="btnlogin">
		</form>
		<a href="<?php echo base_url() ?>index.php">بازگشت به صفحه اصلی</a>
		<div id='p'><br/>
			<p >اگر ثبت نام نکرده اید جهت ثبت نام <a href="<?php echo base_url() ?>index.php/c_account/c_register"> کلیک </a> کنید</p></div>
</div>

</body>
<script type="text/javascript">
	function validateform()
	{
		var x=document.forms["myform"]["username"].value;
		if (x==" ") {
			alert("لطفا نام کاربری را وارد کنید.");
			myform.username.value="";
			return false;
		}if (x=="/" || x=="*" || x=="!" || x=="<" || x==">" || x=="@" || x=="$") {
           alert("لطفا مقدار معتبر وارد کنید.");
           myform.username.value="";
           return false;
		}
	}
</script>
</html>