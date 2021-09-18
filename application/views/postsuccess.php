<?php 
if(!isset($_COOKIE['user']))
  header("location:http://localhost:81/CI_book/index.php/c_menu/login");

include("userheader.php");?>

  
<div class="insert">
  <div class="title">
      <p>ارسال آگهی</p>
    </div>
     <p>
       اطلاعات شما با موفقیت ثبت گردید
     </p>
</div>