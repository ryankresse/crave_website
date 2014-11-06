<?php
/**
 * The Header template for our theme
 * Displays all of the <head> section and everything up till <div id="main">
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="icon" href="<?php echo get_template_directory_uri();?>/images/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/images/favicon.ico" type="image/x-icon" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
 
  ga('create', 'UA-55364996-1', 'auto');
  ga('send', 'pageview');
 
</script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
		<div class = "logo-secondary-container clear">
			<div class = "mobile-logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"  title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri();?>/images/mobile_nav_logo.png" class = "mobile-nav-logo" alt="linkedin icon" ></a>
			</div><!--mobile-logo-->
			<div class = "desktop-logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"  title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri();?>/images/crave_logo.jpg" class = "desktop-logo-image" alt="linkedin icon" ></a>
			</div><!--desktop-logo-->
			<nav class = "secondary-navigation" role = "navigation">
				<p class = "secondary-nav-contact">
					2801 Ryan Street, Suite 100, Lake Charles, LA
				</p>
				<p class = "secondary-nav-contact">
					(337) 421-0040
				</p>
				<ul>
					<li class = "secondary-nav-icons">
						<a href="https://plus.google.com/u/0/104193551844420844441/about" target = "_blank">
							<img src="<?php echo get_template_directory_uri();?>/images/google_plus_header.png"  alt="Add us to your Google Plus circles" >
						</a>
					</li>
					<li class = "secondary-nav-icons">
						<a href= "http://www.yelp.com/biz/crave-gourmet-baskets-and-gifts-lake-charles-2" target = "_blank"> 
							<img src="<?php echo get_template_directory_uri();?>/images/yelp-favicons.png"  alt="Find us on Yelp" >
						</a>
					</li>
					<li class = "secondary-nav-icons">
						<a href="https://www.facebook.com/CraveLakeCharles"  target = "_blank">
							<img src="<?php echo get_template_directory_uri();?>/images/FB-29.png" alt="Like us on Facebook">
						</a>
					</li>
				</ul>
			</nav><!--secondary nav-->
		</div><!--logo-secondary-container-->
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="main" class="wrapper">