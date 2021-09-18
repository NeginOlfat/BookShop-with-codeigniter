<!DOCTYPE html>
<html dir='rtl'>
<head>
	<title></title>
	<meta charset="utf-8" content="text/html">	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/style.css">

</head>
<body>

<div class="menu">
	<ul>
		<li><a href="<?php echo base_url()?>index.php">صفحه اصلی</a></li>
		<li><a href="#">مدیریت آگهی ها</a>
			<ul>
				<li><a href="<?php echo base_url()?>index.php/c_menu/insert">درج آگهی</a></li>
				<li><a href="<?php echo base_url()?>index.php/c_menu/edit_delete">ویرایش و حذف آگهی</a></li>
			</ul>
		</li>
		<li><a href="<?php echo base_url()?>index.php/c_menu/c_success"> اطلاعات</a></li>
		<li><a href="<?php echo base_url()?>index.php/c_menu/login?exit=1"?> خروج</a></li>
	</ul>
</div><!-- menu -->