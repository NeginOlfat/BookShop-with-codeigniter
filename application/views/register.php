<!DOCTYPE html>
<html>
<head>
	<title>کتاب</title>
	<meta charset="utf-8"  content="text/html">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/style.css">

	
</head>
<body>
<?php
if(validation_errors())
echo "<div class='errorbox'>".validation_errors()."</div>";
?>
<div class="loginbox" id="reg">
	<p>صفحه ثبت نام</p>
		<form method="post" id="myform1" action="<?php echo base_url()?>index.php/c_account/c_check" onclick="return validateform1()">
			<label>نام کاربردی</label>
			<input type="text" name="username"  placeholder="UserName">
			<label>رمز عبور</label>
			<input type="password" name="password" placeholder="Password">
			<label>تایید رمز عبور</label>
			<input type="password" name="repassword" placeholder="Password Confirmation">
			<label>راه ارتباطی</label>
			<textarea name="_link" cols="38" rows="4"></textarea>
			<input type="submit" value="ثبت" name="btnlogon">
		</form>
		<a href="<?php echo base_url() ?>index.php/">بازگشت به صفحه اصلی</a>

		
</div>
<script type="text/javascript">
	function validateform1()
	{
		var x=document.forms["myform1"]["username"].value;
		var y=document.forms["myform1"]["_link"].value;
		if (x==" ") {
			alert("لطفا نام کاربری را وارد کنید.");
			myform.username.value="";
			return false;
		}if (x=="/" || x=="*" || x=="!" || x=="<" || x==">" || x=="@" || x=="$") {
           alert("لطفا مقدار معتبر وارد کنید.");
           myform.username.value="";
           return false;
		}if (y==" ") {
			alert("لطفا راه ارتباطی را وارد کنید.");
			myform._link.value="";
			return false;
		}
	}
</script>

</body>
</html>