<?php 
if(!isset($_COOKIE['user']))
  header("location:http://localhost:81/CI_book/index.php/c_menu/login");

include("userheader.php");?>

  
<div class="insert">
  <div class="title">
      <p>ویرایش وحذف آگهی</p>
    </div>
<form action="" method="post">
  <p>
  	<label >عنوان:</label>
    <input type="text" name="title"  />
    
  </p>
  <p>
  	<label >سال انتشار:</label>
    <input type="text" name="year" />
    
  </p>
  <p> 
  	<label >قیمت:</label>
    <input type="text" name="price"/>
  </p>
  <p>
  	<label >دانشگاه:</label>
    <input type="text" name="university"  />
  </p>
    <p>
     <label >گروه:</label>
     <select name="jumpMenu" id="select" onchange="MM_jumpMenu('parent',this,0)">
      <option>عمومی</option>
      <option>حسابداری و اموراداری</option>
      <option>فنی مهندسی</option>
      <option>هنر ومعماری</option>
    </select>
  </p>
  <p>
  	<label > عکس:</label>
    <input type="file" name="image" />
 </p>
 <p>
    <input type="submit" name="uploade" value="ثبت" />
 </p><p>
    <input type="button" name="uploade" value="حذف" />
    </p>
</form>
</div>
</body>
</html>