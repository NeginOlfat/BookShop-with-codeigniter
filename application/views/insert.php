<?php 
if(!isset($_COOKIE['user']))
  header("location:http://localhost:81/CI_book/index.php/c_menu/login");

include("userheader.php");

  if(validation_errors())
echo "<div class='errorbox'>".validation_errors()."</div>";
?>


<div class="insert">
  <div class="title">
      <p>ارسال آگهی</p>
    </div>
<form action="<?php echo base_url() ?>index.php/c_account/c_checkregister" method="post" enctype="multipart/form-data">
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
      <option value="1">عمومی</option>
      <option value="2">پایه</option>
      <option value="3">حسابداری و اموراداری</option>
      <option value="4">فنی مهندسی</option>
      <option value="5">هنر ومعماری</option>
      <option value="6">تربیت بدی</option>
    </select>
  </p>
  <p>
  	<label id="lbl" > عکس:</label>
    <input type="file" name="file" id="file" />
 </p><p>
    <input type="submit" name="uploade" value="ثبت" />
  </p>
</form>
</div>
</body>
</html>