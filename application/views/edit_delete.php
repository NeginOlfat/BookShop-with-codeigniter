<?php
if(!isset($_COOKIE['user']))
  header("location:http://localhost:81/CI_book/index.php/c_menu/login");

 include("userheader.php");
 ?>
<div class='insert'>
	 <div class="title">
      <p>ویرایش و حذف اطلاعات</p>
    </div>
    <?php if(!empty($info)){ 
    	 ?>
	<table class="table" >
		<tr>
			<th>ردیف</th>
			<th>عنوان</th>
			<th>سال انشار</th>
			<th>قیمت</th>
			<th>دانشگاه</th>
			<th>گروه</th>
			<th>حذف</th>
			<th>ویرایش</th>
		</tr>

		<?php   
		$counter=1;
		foreach ($info as $key )
		{
			switch ($key['grouppost']) {
				case '1':
					$group="عمومی";
					break;
				case '2':
					$group="پایه";
					break;
				case '3':
					$group="حسابداری و اموراداری";
					break;
				case '4':
					$group="فنی مهندسی";
					break;
				case '5':
					$group="هنر ومعماری";
					break;
				case '6':
					$group="تربیت بدنی";
					break;
				default:
					$group="...";
					break;

			}
			echo '<tr>
			<td>'.$counter.'</td>
			<td>'.$key['title'].'</td>
			<td>'.$key['year'].'</td>
			<td>'.$key['price'].'</td>
			<td>'.$key['university'].'</td>
			<td>'.$group.'</td> 
			<td><a href="http://localhost:81/CI_book/index.php/c_menu/delete?delete='.$key['post_id'].'">حذف</a></td>
			<td><a  href="http://localhost:81/CI_book/index.php/c_menu/update?delete='.$key['post_id'].'">ویرایش</a></td>
		</tr>';
		$counter++;
		}
		 ?>
		
	</table>
	<?php }
	else 
		echo "هنوز پستی وجود ندارد"; ?>
</div>
</body>
</html>