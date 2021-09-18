<?php   include ("header.php");?>


<?php foreach ($info as $key) {?>
  <div class="content"> 
                <div class="content-thumb">
                      <?php if(empty($key['picture']))
                           $key['picture']="default.jpg";
                          ?>
                        <img src="<?php echo base_url()?>images/uploads/<?php echo $key['picture']?> ">
                </div><!-- content-thumb -->
                <div class="content-txt">
                    <p>عنوان:<?php echo $key['title'] ?></p>
                    <p>سال:<?php echo $key['year'] ?></p>
                    <p>قیمت:<?php echo $key['price'] ?></p>
                    <p>دانشگاه:<?php echo $key['university'] ?></p>
                    <p>راه ارتباطی:  </p><p><?php echo $key['link'] ?></p>
                </div><!-- content-txt -->
        </div><!-- content -->
<?php  } include ("footer.php");?>