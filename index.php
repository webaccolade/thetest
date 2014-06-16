<?php
/**
 * main template file
 */
?><!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="assets/css/bootstrap.css" rel="stylesheet">
        <link rel='stylesheet' id='bootstrap-css'  href='//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css?ver=7b10204' type='text/css' media='all' />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/reset.css" type="text/css" />
	<link rel="stylesheet" href="css/style.css" type="text/css" />
     <link rel="stylesheet" href="js/carousel/flexslider.css" type="text/css" media="screen" />
 	<link rel="stylesheet" type="text/css" href="js/carousel/skin.css" />
    
    <!-- accordion -->
    <link rel="stylesheet" href="js/accordion/accordion.css" type="text/css" media="all">
       
    </head>

    <body>
    <div class="site_wrapper">

<header id="header">
<div id="trueHeader">
    
	<div class="wrapper">
    
     <div class="container">
    
		<!-- Logo -->
		<div class="logo"><?php include 'inc/logo.php'; ?></div>
		
        <!-- Menu -->
        <div class="menu_main">
        
          <nav class="navbar navbar-default fhmm" role="navigation">
             <div class="navbar-header">
          		<button type="button" data-toggle="collapse" data-target="#defaultmenu" class="navbar-toggle">Navigation <i class="fa fa-bars tbars"></i></button>
			 </div><!-- end navbar-header -->
        
            <div id="defaultmenu" class="navbar-collapse collapse">
                <!--<ul class="nav navbar-nav">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="index.html">About Me</a></li>
                    <li><a href="index.html">Contact</a></li>
                    
                </ul><--><!-- end nav navbar-nav -->
          <?php include 'inc/navigation.php'; ?>
              
          
                
		</div><!-- end #navbar-collapse-1 -->
            
		</nav>
            
		</div>
        
        </div>
		
	</div>
    
	</div>
    
</header>

<div class="clearfix"></div>

<!-- Slider
======================================= -->  

<div class="container_full">
    
    <div class="tp-banner-container">
		<div class="tp-banner" >
          <?php include 'inc/banner.php'; ?>
        </div>
</div>


<div class="clearfix"></div>

<div class="features_sec1">
<div class="container">

<?php include 'inc/content.php'; ?>
 
    
       

</div>
</div>    



<script type="text/javascript">
	// Menu drop down effect
	$('.dropdown-toggle').dropdownHover().dropdown();
	$(document).on('click', '.fhmm .dropdown-menu', function(e) {
	  e.stopPropagation()
	})
</script>    

        

        <script type='text/javascript' src='//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js?ver=7b10204'></script>
    </body>
</html>
