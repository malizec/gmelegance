
      <div class="imgLinksBody">
      <div class="conteiner-content-stenci">
      <div class="h1"><h1>Naši Stenci</h1></div><br />
    <div class="">    		<!-- START DIV: conteiner-content -->
    <?php 
	$pic_array = array("tm_1.jpg", "tm_2.jpg", "tm_3.jpg", "tm_4.jpg", "tm_5.jpg", "tm_6.jpg");
	$pic_count = count($pic_array);
	for($i=1; $i<$pic_count; $i++){
      echo "  <div class=\"galery-img\"><a href=\"../images/images/velike/stenci/" . $i .  ".JPG\" rel=\"lightbox[roadtrip]\"><img src=\"../images/images/male/stenci/tm_" . $i .  ".JPG\" width=\"150\" height=\"120\" alt=\"GM Elegance Galerija\" /></a></div>";
	}
	?>
    	        
        
        <div class="clear"></div>
    </div>									<!-- END DIV: conteiner-content -->
      <div class="clear"></div>
      </div>
       </div>
