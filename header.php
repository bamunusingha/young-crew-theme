<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id=ie6 <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id=ie7 <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id=ie8 <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset=<?php bloginfo( 'charset' ); ?> />
<meta name=viewport content="initial-scale=1.0, user-scalable=no" />
<link rel="shortcut icon" href=<?php echo bloginfo('stylesheet_directory');?>/assets/images/00.ico type=image/x-icon>
<link rel="shortcut icon" href=<?php echo bloginfo('stylesheet_directory');?>/assets/images/00.png type=image/x-icon>
<!--[if lt IE 9]>
<script src=<?php echo get_template_directory_uri(); ?>/js/html5.js></script>
<![endif]-->
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	

	// Add the blog name.
	bloginfo( 'name' );
	echo(" - ");
	echo get_the_title();
	//wp_title( '-', true, 'right' );

	// Add the blog description for the home/front page.
	//$site_description = get_bloginfo( 'description', 'display' );
	//if ( $site_description && ( is_home() || is_front_page() ) )
	//	echo " - $site_description";
//
	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' - ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>

	
	
<link rel=stylesheet type=text/css href=<?php echo bloginfo('stylesheet_directory');?>/assets/flexslider/flexslider-alt.css>
<link rel=stylesheet type=text/css href=<?php echo bloginfo('stylesheet_directory');?>/assets/flexslider/flexslider-tab.css>
<link rel=stylesheet type=text/css href=<?php echo bloginfo('stylesheet_directory');?>/assets/css/font-awesome.css>
<link href='http://fonts.googleapis.com/css?family=Bitter' rel=stylesheet type=text/css>
<link href='http://fonts.googleapis.com/css?family=Nunito' rel=stylesheet type=text/css>
<link rel=stylesheet type=text/css href=<?php bloginfo( 'stylesheet_url' ); ?> />
<script type=text/javascript src=http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js></script>
<script type=text/javascript src=<?php echo bloginfo('stylesheet_directory');?>/js/load.js></script>
<link rel=pingback href=<?php bloginfo( 'pingback_url' ); ?> />


<!--[if lt IE 9]>
<script src=<?php echo get_template_directory_uri(); ?>/js/html5.js type=text/javascript></script>
<![endif]-->
<!--[if lt IE 9]>
<style type=text/css>#sub_menu ul li{margin-left:3%}</style>
<![endif]-->
<script>(function(d,e,j,h,f,c,b){d.GoogleAnalyticsObject=f;d[f]=d[f]||function(){(d[f].q=d[f].q||[]).push(arguments)},d[f].l=1*new Date();c=e.createElement(j),b=e.getElementsByTagName(j)[0];c.async=1;c.src=h;b.parentNode.insertBefore(c,b)})(window,document,"script","//www.google-analytics.com/analytics.js","ga");ga("create","UA-51516992-1","youngcrew.lk");ga("send","pageview");</script>
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>
<body <?php //body_class(); ?>>
<div id=fb-root></div>
<script>window.fbAsyncInit=function(){FB.init({appId:"1395066904115077",channelUrl:"//testmysites.host22.com/channel.html",status:true,cookie:true,xfbml:true});FB.getLoginStatus(function(a){if(a.status==="connected"){}else{if(a.status==="not_authorized"){login()}else{login()}}})};function login(){FB.login(function(a){if(a.authResponse){testAPI()}else{}})}function testAPI(){console.log("Welcome!  Fetching your information.... ");FB.api("/me",function(a){console.log("Good to see you, "+a.name+".")})}(function(c){var b,e="facebook-jssdk",a=c.getElementsByTagName("script")[0];if(c.getElementById(e)){return}b=c.createElement("script");b.id=e;b.async=true;b.src="//connect.facebook.net/en_US/all.js";a.parentNode.insertBefore(b,a)}(document));</script>
<div class=scroll-top-wrapper>
<span class=scroll-top-inner>
<i class="fa fa-2x fa-arrow-circle-up"></i>
</span>
</div>
<div id=upper_navigation>
<ul id=upper_left_>
<li class=upper_left_> <a <?php
								if(is_page('about-us')){ 
								
									echo 'id=\'active_small_mob\'';
									
								} 
									
								?> href=<?php echo get_option('home'); ?>/about-us>ABOUT US</a> </li>
<li class=upper_left_><a <?php
								if(is_page('contact-us')){ 
								
									echo 'id=\'active_small_mob\'';
									
								} 
									
								?> href=<?php echo get_option('home'); ?>/contact-us>CONTACT US</a></li>
<li class=upper_left_><a id=jsbar><i class="fa fa-search fa-2x"></i></a></li>
</ul>
<ul id=upper_right_>
<li class=upper_right_><a href=https://www.facebook.com/youngcrew.lk><i class="fa fa-facebook fa-2x"></i></a></li>
<li class=upper_right_><a href=https://twitter.com/youngcrewlk><i class="fa fa-twitter fa-2x"></i></a></li>
<li class=upper_right_><a href=https://plus.google.com/u/0/107637905539730234316/about><i class="fa fa-google-plus fa-2x"></i></a></li>
<li class=upper_right_><a href=https://www.youtube.com/user/youngcrewlk><i class="fa fa-youtube fa-2x"></i></a></li>
<li class=upper_right_><a href=<?php bloginfo('rss2_url'); ?>><i class="fa fa-rss fa-2x"></i></a></li>
</ul>
<a id=very_very_small_nav><i class="fa fa-bars fa-2x"></i></a>
<div id=help_navigation_2>
<a href=https://www.facebook.com/youngcrew.lk><i class="fa fa-facebook fa-2x"></i></a>
<a href=https://twitter.com/youngcrewlk><i class="fa fa-twitter fa-2x"></i></a>
<a href=https://plus.google.com/u/0/107637905539730234316/about><i class="fa fa-google-plus fa-2x"></i></a>
<a href=https://www.youtube.com/user/youngcrewlk><i class="fa fa-youtube fa-2x"></i></a>
<a href=<?php bloginfo('rss2_url'); ?>><i class="fa fa-rss fa-2x"></i></a>
</div>
<div id=userch>
<?php get_search_form(); ?>
</div>
</div>
<div id=main_div>
<div id=header>
<div id=site_name>
<h1>YOUNG CREW</h1>
</div>
<div id=logo>
<a href=<?php bloginfo('url');?> alt=home id=header_name_link><img src=<?php echo bloginfo('stylesheet_directory');?>/assets/images/logo.jpg></a>
</div>
<div id=header_right_side>
<div id=small_nav>
<a <?php
								if(is_page('about-us')){ 
								
									echo 'class=\'active_small\'';
									
								} 
									
								?> href=<?php echo get_option('home'); ?>/about-us>About Us</a>
<a <?php
								if(is_page('contact-us')){ 
								
									echo 'class=\'active_small\'';
									
								} 
									
								?> href=<?php echo get_option('home'); ?>/contact-us>Contact Us</a>
</div>
<div id=search_bar>
<?php get_search_form(); ?>
<script type=text/javascript>$(function(){$("#the_populer hr:last-child").remove();$("a").attr("target","_blank");$("#header_name_link").attr("target","");$(".nav-previous a").attr("target","");$(".nav-next a").attr("target","");$("#bottom_navigation_left a").attr("target","");$("#bottom_navigation_right a").attr("target","");$("#mailto_").attr("target","");$("#logout_button1").attr("target","");$("#wpf-wrapper a").attr("target","");$(".wpf-alt").attr("width","10%");$(".thickbox").attr("display","none");$("#commentform a").attr("target","");$("#wp-admin-bar-wpseo-menu").attr("display","none");$("#xxx_xxx").attr("target","");$("#active_small_mob").attr("style","color:#FFF");$("#s").attr("placeholder","Search");$("#s ").after('<button class="search_submit" type="submit"><i class="fa fa-1x fa-search"></i></button>')});</script>
<script type=text/javascript>$("#s").focus(function(){$("#s").attr("placeholder","")});$("#s").focusout(function(){$("#s").attr("placeholder","Search")});</script>
</div>
<div id=social_icons>
<a href=https://www.facebook.com/youngcrew.lk alt=fb><img src=<?php echo bloginfo('stylesheet_directory');?>/assets/images/facebook_32.png alt="fb"/></a>
<a href=https://twitter.com/youngcrewlk alt=fb><img src=<?php echo bloginfo('stylesheet_directory');?>/assets/images/twitter_32.png alt="fb"/></a>
<a href=https://plus.google.com/u/0/107637905539730234316/about alt><img src=<?php echo bloginfo('stylesheet_directory');?>/assets/images/google_32.png alt="fb"/></a>
<a href=http://www.youtube.com/channel/UClvK-WQMSkx7hgImivbcOSA alt=fb><img src=<?php echo bloginfo('stylesheet_directory');?>/assets/images/youtube_32.png alt="fb"/></a>
<a href=<?php bloginfo('rss2_url'); ?> alt=fb><img src=<?php echo bloginfo('stylesheet_directory');?>/assets/images/rss.png alt="fb"/></a>
</div>
<script type=text/javascript>$("#social_icons a img").attr("width","20px");$("#social_icons a img").attr("height","20px");</script>
<div id=slogen>
<h3><?php echo get_bloginfo( 'description' );?></h3>
</div>
</div>
</div>
<div id=nav_menu>
<a class=mob_menu>MAIN MENU</a>
<a class=mob_menu2>SUB MENU</a>
<nav id=main_menu>
<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
</nav>
<div id=arrow1></div>
<nav id=sub_menu>
<ul>
<li><a <?php
				if(is_page('daily')){ 
				
					echo 'class=\'selected_small_nav\'';
					echo 'style=\'color:#000;\'';
				} 
					
				?> href=<?php echo get_option('home'); ?>/daily>&nbsp;Daily |</a></li>
<li><a <a <?php
				if(is_page('hiphop-police')){ 
				
					echo 'class=\'selected_small_nav\'';
					echo 'style=\'color:#000;\'';
				} 
					
				?> class=above href=<?php echo get_option('home'); ?>/hiphop-police>&nbsp;Hiphop police |</a></li>
<li><a <?php
				if(is_page('biz-buzz')){ 
				
					echo 'class=\'selected_small_nav\'';
					echo 'style=\'color:#000;\'';
				} 
					
				?> class=above href=<?php echo get_option('home'); ?>/biz-buzz>&nbsp;Biz Buzz |</a></li>
<li><a <?php
				if(is_page('fun-zone')){ 
				
					echo 'class=\'selected_small_nav\'';
					echo 'style=\'color:#000;\'';
				} 
					
				?> class=above href=<?php echo get_option('home'); ?>/fun-zone>&nbsp;Fun zone |</a></li>
<li><a <?php
				if(is_page('games')){ 
				
					echo 'class=\'selected_small_nav\'';
					echo 'style=\'color:#000;\'';
				} 
					
				?> class=above href=<?php echo get_option('home'); ?>/games>&nbsp;Games |</a></li>
<li><a <?php
				if(is_page('hadhawathata-tetuwak')){ 
				
					echo 'class=\'selected_small_nav\'';
					echo 'style=\'color:#000;\'';
				} 
					
				?> class=above href=<?php echo get_option('home'); ?>/hadhawathata-tetuwak>&nbsp;Hadhawathata tetuwak |</a></li>
<li><a <?php
				if(is_page('technology')){ 
				
					echo 'class=\'selected_small_nav\'';
					echo 'style=\'color:#000;\'';
				} 
					
				?> class=above href=<?php echo get_option('home'); ?>/technology>&nbsp;Technology |</a></li>
<li><a <?php
				if(is_page('mega-boot')){ 
				
					echo 'class=\'selected_small_nav\'';
					echo 'style=\'color:#000;\'';
				} 
					
				?> class=above href=<?php echo get_option('home'); ?>/mega-boot>&nbsp;Mega boot |</a></li>
<li><a <?php
				if(is_page('fantasy-love')){ 
				
					echo 'class=\'selected_small_nav\'';
					echo 'style=\'color:#000;\'';
				} 
					
				?> class=above href=<?php echo get_option('home'); ?>/fantasy-love>&nbsp;fantasy love |</a></li>
<li><a <?php
				if(is_page('heenayak')){ 
				
					echo 'class=\'selected_small_nav\'';
					echo 'style=\'color:#000;\'';
				} 
					
				?> class=above href=<?php echo get_option('home'); ?>/heenayak>&nbsp;Heenayak |</a></li>
</ul>
</nav>
<div id=arrow2></div>
</div>
<div id=left_side>