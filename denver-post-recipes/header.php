<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml">
<head> 
  <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>          
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" title="no title" charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">   <meta name="apple-mobile-web-app-capable" content="yes">
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->        
  <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.3/jquery.min.js" type="text/javascript" charset="utf-8"></script>-->
  <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-1.6.1.min.js"></script>
  <?php wp_head(); ?>	<script type="text/javascript">	var addToHomeConfig = {		animationIn: 'fade',		animationOut: 'drop',		startDelay:500,		lifespan:5000,		expire:480,		touchIcon:true,		message:'Add the <strong>RecipeConnection</strong> web app to your %device: Touch %icon and select <strong>Add to Home Screen</strong>.'	};	</script>	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/add2home.css">	<script type="application/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/add2home.js"></script>      
</head>
<body>

<?php $shortname = "unique"; ?>
<div id="main_container">
    <div class="logo_cont">          <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/recipe-connection-banner-yours-800.jpg" class="logo" /></a>
    </div><!--//logo_cont-->
    <div id="menu_container">
        <?php wp_nav_menu('menu=header_menu&container=false'); ?>
        <div class="clear"></div>
    </div><!--//menu_container-->
    <div id="content">		<div id="main_content">