<!---footer-->
    <div class="footer"> 
        <div class="footermnu">  
            <ul>
            <li><a href="<?php echo base_url()?>index.php/c_menu/generic">عمومی</a></li>
            <li><a href="<?php echo base_url()?>index.php/c_menu/base">پایه</a></li>
            <li><a href="<?php echo base_url()?>index.php/c_menu/accountancy">حسابداری و امور اداری</a></li>
            <li><a href="<?php echo base_url()?>index.php/c_menu/engineering">فنی مهندسی</a></li>  
            <li><a href="<?php echo base_url()?>index.php/c_menu/art">هنر و معماری</a></li>  
            <li><a href="<?php echo base_url()?>index.php/c_menu/sport">تربیت بدنی </a></li>  
            </ul> 
        </div><!-- footermnu -->
            <div id='design'>
               
                <p>طراحی شده توسط نگین الفت</p>
            </div>

    </div><!-- footer -->

    

          <script src="<?php echo base_url()?>js/vendor/jquery-1.11.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo base_url()?>js/vendor/jquery-1.11.0.min.js"></script></script>
        <script src="<?php echo base_url()?>js/bootstrap.js"></script>
        <script src="<?php echo base_url()?>js/plugins.js"></script>
        <script src="<?php echo base_url()?>js/main.js"></script>

        <!-- Google Map -->
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="<?php echo base_url()?>js/vendor/jquery.gmap3.min.js"></script>
        
        <!-- Google Map Init-->
        <script type="text/javascript">
            jQuery(function($){
                $('#map_canvas').gmap3({
                    marker:{
                        address: '37.769725, -122.462154' 
                    },
                        map:{
                        options:{
                        zoom: 15,
                        scrollwheel: false,
                        streetViewControl : true
                        }
                    }
                });

                /* Simulate hover on iPad
                 * http://stackoverflow.com/questions/2851663/how-do-i-simulate-a-hover-with-a-touch-in-touch-enabled-browsers
                 --------------------------------------------------------------------------------------------------------------*/ 
                $('body').bind('touchstart', function() {});
            });
        </script>
    </body>
</html>