    <div class="conteiner-nav">    		<!-- START DIV: conteiner-nav -->
    
 <?php
	$page=$_GET['page'];
    echo "<ul>";
    echo "<li class=\"nav-link\"><a  class=\"links\" href=\"index.php?page=about\">Home</a></li>";
    echo "<li id=\"nav-link-muzjaci\" class=\"nav-link"; if($page=='male'){echo"-active\"><a  class=\"links-active\"";}else{ echo"\"><a  class=\"links\"";
	}  echo" href=\"index.php?page=male\">Male</a>";
    echo "	<ul id=\"menu-ul-2-muzjaci\">";
    echo "          <li class=\"menu-ul-2-muzjaci\"><a href=\"index.php?page=baron_of_gm_elegance\" class=\"links\">Baron of GM Elegance</a></li>";
    echo "     </ul>";
    echo "</li>";
    echo "<li id=\"nav-link-zenke\" class=\"nav-link"; if($page=='female'){echo"-active\"><a  class=\"links-active\"";}else{ echo"\"><a  class=\"links\"";
	}  echo" href=\"index.php?page=female\">Female</a>";
    echo "     <ul id=\"menu-ul-2-zenke\">";
    echo "          <li class=\"menu-ul-2-zenke\"><a href=\"index.php?page=great_gattsbys_melody_pattern\" class=\"links\">Great Gattsby's Melody Pattern</a></li>";
    echo "          <li class=\"menu-ul-2-zenke\"><a href=\"index.php?page=vizantija_as-w_x_rebel\" class=\"links\">Vizantija AS-W X Rebel</a></li>";
    echo "     </ul>";
    echo "</li>";
    echo "<li id=\"nav-link-stenci\" class=\"nav-link"; if($page=='puppies'){echo"-active\"><a  class=\"links-active\"";}else{ echo"\"><a  class=\"links\"";
	}  echo" href=\"index.php?page=puppies\">Puppies</a>";
    echo "     <ul id=\"menu-ul-2-stenci\">";
    echo "          <li class=\"menu-ul-2-stenci\"><a href=\"index.php?page=puppies\" class=\"links\">Puppies</a></li>";
    echo "      </ul>";
    echo "</li>";
    echo "<li id=\"nav-link\" class=\"nav-link"; if($page=='gallery'){echo"-active\"><a  class=\"links-active\"";}else{ echo"\"><a  class=\"links\"";
	}  echo" href=\"index.php?page=gallery\">Gallery</a>";
    echo "</li>";
    echo "<li class=\"nav-link"; if($page=='about'){echo"-active\"><a  class=\"links-active\"";}else{ echo"\"><a  class=\"links\"";
	}  echo" href=\"index.php?page=about\">About Us</a></li>";
    echo "<li class=\"nav-link"; if($page=='contact'){echo"-active\"><a  class=\"links-active\"";}else{ echo"\"><a  class=\"links\"";
	} echo" href=\"index.php?page=contact\">Contact</a></li>";
    echo "</ul>";
?>
	
    	<!--
			<ul>
           	  <li class="nav-link"><a  class="links" href="index.php?page=about">Home</a></li>
           	  <li class="nav-link" id="nav-link-muzjaci"><a  class="links" href="index.php?page=male">Male</a>
          			<ul id="menu-ul-2-muzjaci">
                        <li class="menu-ul-2-muzjaci"><a href="baron_of_gm_elegance.html" class="links">Baron of GM Elegance</a></li>
                   </ul>
              </li>
           	  <li class="nav-link" id="nav-link-zenke"><a  class="links" href="index.php?page=female">Female</a>
                   <ul id="menu-ul-2-zenke">
                        <li class="menu-ul-2-zenke"><a href="great_gattsbys_melody_pattern.html" class="links">Great Gattsby's Melody Pattern</a></li>
                   </ul>
              </li>
              <li class="nav-link" id="nav-link-stenci"><a  class="links" href="index.php?page=puppies">Puppies</a>
                   <ul id="menu-ul-2-stenci">
                        <li class="menu-ul-2-stenci"><a href="index.php?page=puppies" class="links">Puppies</a></li>
                    </ul>
              </li>
           	  <li class="nav-link" id="nav-link"><a  class="links" href="index.php?page=gallery">Gallery</a>
              </li>
           	  <li class="nav-link-active"><a  class="links-active" href="index.php?page=about">About Us</a></li>
           	  <li class="nav-link"><a  class="links" href="index.php?page=contact">Contact</a></li>
            </ul>
            
            -->
            <div class="clear"></div>
            
            <br /><br /><br /><br />
            
            
<div class="underNav">  <!-- start of part under navigation -->
           </div>	
           
           <div class="news">
           	<?php include("include/news.php"); ?>
           </div>
           
           </div>  <!-- END DIV: conteiner-nav -->
           
           

