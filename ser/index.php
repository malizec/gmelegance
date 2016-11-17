<?php require_once("header.php"); ?>

<div class="conteiner-top">			<!-- START DIV: conteiner-top -->
</div>								<!-- END DIV: conteiner-top -->

<div class="conteiner">    		<!-- START DIV: conteiner -->
	
	<?php include("conteiner_nav.php"); ?>           
    <div class="conteiner-content">    		<!-- START DIV: conteiner-content -->
            
          <div class="conteiner-content-top"><!-- slide -->
                <iframe src="../slide/slide.html" width="685" height="290">
                    <p>Your browser does not support iframes.</p>
                </iframe>
          </div><!-- end slide -->
          
          		<br /><br />
          
          <div class="conteiner-left">
          	
            	<?php //include("vazno.php"); ?>
          	
          <br/><br/>
                <?php
                
                $adress=$_GET['page'];
                include("include/".$adress.".php");
                
                ?>
         </div>
         
         <div class="conteiner-right-all">
                <?php require_once("conteiner_right_all.php"); ?>
         </div>
         
     </div><!-- END DIV: conteiner-content -->
    
    <div class="conteiner-side"><!-- START DIV: conteiner-side -->
			<!-- nije u upotrebi -->
	</div>    					<!-- END DIV: conteiner-side -->

	<div class="clear"></div>


</div>    						<!-- END DIV: conteiner -->

<?php require_once("footer.php"); ?>
