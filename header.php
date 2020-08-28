<?php
function active($currect_page){
  $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
  $url = end($url_array);  
  //echo $url;
  if($currect_page == $url){
      echo 'active'; //class name in css 
  }
  elseif ($currect_page == 'service') 
  {
    if ($url == 'shotcreting.php') 
    {
        echo 'active'; //class name in css 
    }
    elseif ($url == 'guniting.php') 
    {
        echo 'active'; //class name in css 
    }
    elseif ($url == 'soil-nailing.php') 
    {
        echo 'active'; //class name in css 
    }
    elseif ($url == 'swimming-pool.php') 
    {
        echo 'active'; //class name in css 
    }
    elseif ($url == 'water-proofing.php') 
    {
        echo 'active'; //class name in css 
    }
    elseif ($url == 'civil-works.php') 
    {
        echo 'active'; //class name in css 
    }
    elseif ($url == '3d-wallpanel.php') 
    {
        echo 'active'; //class name in css 
    }
    elseif ($url == 'rigpiling.php') 
    {
        echo 'active'; //class name in css 
    }
    elseif ($url == 'groutingnails.php') 
    {
        echo 'active'; //class name in css 
    }
     elseif ($url == 'rockanchoring.php') 
    {
        echo 'active'; //class name in css 
    }
	
    else
    {
        echo "noactive";
    }
  } 
}
?>

<header>
    <div class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="" width="100%" height="72" /></a>
            </div>
            <div class="navbar-collapse collapse ">
                <ul class="nav navbar-nav">
                    <li class="<?php active('index.php'); ?>">
    					<a href="index.php">Home</a>
    				</li>
                    <li class="<?php active('aboutus.php'); ?>"><a href="aboutus.php">About Us</a></li>
                    <li class="dropdown <?php active('service'); ?>">
                        <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Services <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="shotcreting.php">3D Panel Shotcreting</a></li>
                            <li><a href="guniting.php">Guniting</a></li>
                            <li><a href="soil-nailing.php">Soil Nailing</a></li>
                            <li><a href="swimming-pool.php">Swimming Pool Construction</a></li>
                            <li><a href="water-proofing.php">Water Proofing</a></li>
                            <li><a href="civil-works.php">Civil Works</a></li>
    						<li><a href="3d-wallpanel.php">3D Wallpanel Fixing</a></li>
			<li><a href="rigpiling.php">Rig Piling</a></li>
			<li><a href="groutingnails.php">Grouting Nails</a></li>
			<li><a href="rockanchoring.php">Rock anchoring</a></li>
                        </ul>
                    </li>
                    <li class="<?php active('portfolio.php'); ?>"><a href="portfolio.php">Portfolio</a></li>
                    <li class="<?php active('contact.php'); ?>"><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>