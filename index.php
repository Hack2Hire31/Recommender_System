<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Recommender System</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" id="camera-css"  href="css/camera.css" type="text/css" media="all">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/theme.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/skins/tango/skin.css" />
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->    
</head>
<body>
	<!--header-->
    <div class="header">
    	<div class="wrap">
        	<div class="navbar navbar_ clearfix">
            	<div class="container">
                    <div class="row">
                        <div class="span4">
                        	<div class="logo"><a href="index.php"><img src="img/re.png" alt="" style="height: 100px; width: 100px"/></a></div>                        
                        </div>
                        <div class="span8">
                            <nav id="main_menu">
                                <div class="menu_wrap">
                                    <ul class="nav sf-menu">
                                      <li class="current"><a href="index.php">Home</a></li>
                                      <li><a href="entertainment.php">Entertainment</a></li>
                                      <li><a href="food.php">Food</a></li>
									  <li><a href="shopping.php">Shopping</a></li>
                                      <li><a href="others.php">Others</a></li> 
                                    </ul>
                                </div>
                             </nav>                            
                        </div>
                    </div>                
                </div>
             </div>
        </div>    
    </div>
    <!--//header-->    
     
    <!--page_container-->
    <div class="page_container">
        <!--slider-->
        <div id="main_slider">
            <div class="camera_wrap" id="camera_wrap_1">
                <div data-src="img/slider/1.jpg"></div>
                <div data-src="img/slider/2.jpg"></div>
                <div data-src="img/slider/3.jpg"></div>                                        
            </div><!-- #camera_wrap_1 -->
            <div class="clear"></div>	
        </div>        
        <!--//slider-->
                       
        <!--planning-->
        <div class="wrap planning">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <a href="entertainment.php">
                        	<span class="img_icon icon1"></span>
                            <span class="link_title">Entertainment</span>
                        	Look for the best places for entertainment like Movies or Music.
                        </a>
                    </div>
                    <div class="span3">
                        <a href="food.php">
                        	<span class="img_icon icon2"></span>
                            <span class="link_title">Food</span>
                        	Look for places around to eat something delicious.
                    </div>
                    <div class="span3">
                        <a href="shopping.php">
                        	<span class="img_icon icon3"></span>
                            <span class="link_title">Shopping</span>
                        	Look for general stores or malls around the place. Buy the best that you can.
                        </a>
                    </div>
                    <div class="span3">
                        <a href="others.php">
                        	<span class="img_icon icon4"></span>
                            <span class="link_title">Other</span>
                        	See other categories where you can explore other things.
                        </a>
                    </div>                           	
                </div>
            </div>
        </div>    
    </div>
    <!--//page_container-->
    <!--footer-->
    <div id="footer">
    	<div class="wrap">
    		<div class="container">         
        </div>
        
        <div class="footer_bottom">
            <div class="wrap">
            	<div class="container">
                	<div class="row">
                		<div class="span5">
                        	<div class="foot_logo"><a href="index.php"></a></div>    
                        	<div class="copyright">&copy; DBS Team 31. All Rights Reserved.</div>                        
                        </div>
                        <div class="span7">
                        	<div class="foot_right_block">
                            	<div class="fright">
                                	<form action="#" method="post">
                                        <input class="inp_search" name="name" type="text" value="Search the Site" onfocus="if (this.value == 'Search the Site') this.value = '';" onblur="if (this.value == '') this.value = 'Search the Site';" />                                        
                                    </form>
                                </div>
                                <div class="follow_us">
                                	<ul>
                                        <li><a rel="tooltip" href="#" title="Facebook" class="facebook">Facebook</a></li>
                                        <li><a rel="tooltip" href="#" title="Twitter" class="twitter">Twitter</a></li>
                                        <li><a rel="tooltip" href="#" title="Tumbrl" class="tumbrl">Tumbrl</a></li>
                                        <li><a rel="tooltip" href="#" title="Vimeo" class="vimeo">Vimeo</a></li>
                                        <li><a rel="tooltip" href="#" title="Delicious" class="delicious">Delicious</a></li>
                                    </ul>
                                </div>
                                <div class="clear"></div>
                            
                            	<div class="clear"></div>
                            	<div class="foot_menu">
                            		<ul>
                                        <li><a href="index.html" class="current">Home</a></li>
                                        <li><a href="about.html">Entertainment</a></li>
                                        <li><a href="food.html">Food</a></li>
                                        <li><a href="shopping.html">Shopping</a></li>
                                        <li><a href="others.html">Others</a></li>
                                    </ul>
                            	</div>
                            </div>                            
                        </div>
                    </div>	
                </div>
            </div>
        </div>
    </div>
    <!--//footer-->    

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/jquery.mobile.customized.min.js"></script>
    <script type="text/javascript" src="js/camera.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/superfish.js"></script>
    <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="js/jquery.jcarousel.js"></script>
    <script type="text/javascript" src="js/jquery.tweet.js"></script>
    <script type="text/javascript" src="js/myscript.js"></script>
    <script type="text/javascript">
		$(document).ready(function(){	
			//Slider
			$('#camera_wrap_1').camera();
			
			//Featured works & latest posts
			$('#mycarousel, #mycarousel2, #newscarousel').jcarousel();													
		});		
	</script>
</body>
</html>
