<?php include("userheader.php");
if(!isset($_COOKIE['user']))
  header("location:http://localhost:81/CI_book/index.php/c_menu/login");
?>
<div class="insert">
	 <p>کاربر گرامی:<?php echo $infouser; ?> به پنل کاربری خوش آمدید</p>

	<div class="title">
      <p>اطلاعات</p>
    </div>
   

   

	<div class="info">
		<div class="last">
			<p>اطلاعات کاربر</p>
		</div><!-- last -->
			
				<div class="infoPropertis">
					<ul>
						<li><p>نام کاربری :<?php echo $infouser; ?>ا</p></li>
						<li><p></p></li>
						<li><p>راه ارتباطی : <?php echo $infolink; ?></p></li>
					</ul>
				</div>
	</div>

</div>
</body>
</html>
