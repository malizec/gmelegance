    <?php 
	$pic_array = array("tm_1.jpg", "tm_2.jpg", "tm_3.jpg", "tm_4.jpg", "tm_5.jpg", "tm_6.jpg", "tm_7.jpg", "tm_7.jpg", "tm_8.jpg", "tm_9.jpg", "tm_10.jpg", "tm_11.jpg", "tm_12", "tm_13", "tm_14", "tm_15", "tm_16", "tm_17", "tm_18", "tm_19", "tm_20", "tm_21", "tm_22", "tm_23", "tm_24", "tm_25", "tm_26");
	$pic_count = count($pic_array);
	for($i=1; $i<$pic_count; $i++){
      echo "  <div class=\"galery-img\"><a href=\"../images/images/velike/galerija/" . $i .  ".JPG\" rel=\"lightbox[roadtrip]\"><img src=\"../images/images/male/galerija/tm_" . $i .  ".JPG\" width=\"150\" height=\"120\" alt=\"GM Elegance Galerija\" /></a></div>";
	}
	?>
    	        
