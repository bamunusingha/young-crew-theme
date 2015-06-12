<?php
/**
 * The Sidebar containing the main widget area.
 */

$options = twentyeleven_get_theme_options();
$current_layout = $options['theme_layout'];

if ( 'content' != $current_layout ) :
?>
<div id="right_side">
<div id="comming_events">
<h3 id="the_side_head" style="color:#e74c3c">Upcomming Events</h3>
<?php do_action('slideshow_deploy', '553'); ?>
</div>
<hr/>

<div>
<a href="http://youngcrew.lk/model-bank/"><img src="<?php echo bloginfo('stylesheet_directory');?>/assets/images/mb.jpg" style="width:239px;margin-bottom:10px;margin-top:5px;" alt="logo"/></a>
</div>
<hr/>
<div>
<article>
<a href="http://youngcrew.lk/thananille-r-zone/"><img src="<?php echo bloginfo('stylesheet_directory');?>/assets/images/yc_.jpg" style="width:247px" alt="logo"/></a>
<iframe width="240" height="140" src="//www.youtube.com/embed/4YLQ8p2hPT4" frameborder="0" allowfullscreen></iframe>
</article>
<a href="http://youngcrew.lk/advertise-with-us/"><img src="<?php echo bloginfo('stylesheet_directory');?>/assets/images/Adviise.jpg" style="width:247px"></a>
</div>
<hr/>
<div id="adds_">


<a href="http://youngcrew.lk/wp-content/uploads/2014/07/600m.jpg" target="blank_"><img style="max-width:245px" src="<?php echo bloginfo('stylesheet_directory');?>/assets/images/600m.jpg" alt="add"/></a>
<a href="http://youngcrew.lk/wp-content/uploads/2014/07/90m.jpg" target="blank_"><img style="max-width:245px" src="<?php echo bloginfo('stylesheet_directory');?>/assets/images/90m.jpg" alt="add"/></a>
<a href="http://youngcrew.lk/wp-content/uploads/2014/07/45m.jpg" target="blank_"><img style="max-width:245px" src="<?php echo bloginfo('stylesheet_directory');?>/assets/images/45m.jpg" alt="add"/></a>
<a href="http://nordfx.com/?id=830645" target="blank_"><img style="max-width:245px" src="<?php echo bloginfo('stylesheet_directory');?>/assets/images/forex.jpg" alt="add"/></a>

<a href="https://www.facebook.com/rlabstudio" target="blank_"><img style="max-width:245px" src="<?php echo bloginfo('stylesheet_directory');?>/assets/images/R-Lab.jpg" alt="add"/></a>
<a href="https://www.facebook.com/FinalCutFilms0?ref=br_tf" target="blank_"><img style="max-width:245px" src="<?php echo bloginfo('stylesheet_directory');?>/assets/images/fc.jpg" alt="add"/></a>
<a href="https://www.facebook.com/rzoneofficial" target="blank_"><img style="max-width:245px;max-height:245px" src="<?php echo bloginfo('stylesheet_directory');?>/assets/images/10250037_833270476702083_1227548370800514818_n.jpg" alt="add"/></a>
</div>
<?php do_action('slideshow_deploy', '493'); ?>
<hr/>
<div id="the_populer">
<h2 id="the_populer_header">The Most Popular</h2>
<?php

							$popularpost = new WP_Query( array( 'posts_per_page' => 5, 'meta_key' => 'post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );

							while ( $popularpost->have_posts() ) : $popularpost->the_post();

							 
							//
							
							
							?>
<div class="the_populer_one">
<h4><a target="blank_" href="<?php the_permalink();?>"><?php $ntt_the_title=$post->post_title;echo $ntt_the_title; ?></a></h4>
<img src="<?php echo catch_that_image(); ?>" alt="<?php the_title();?>" style="max-width:60px;float:left"/>
<p>
<?php
									 $content = get_the_content();
                                      //$content = get_the_content();
                                       //$content = strip_tags($content);
									 $content = preg_replace("/<img[^>]+\>/i", "", $content);
									 $content = preg_replace("/<style[^>]+\>/i", "", $content);
                                      // echo $content."...";
                                        
										//$content=$post->post_excerpt;
										//$content=substr($content,0,100);
										//the_excerpt();
										echo substr($content, 0, 300)."...";
                                      ?>
</p>
</div>
<hr style="width:90%;margin-left:5%"/>
<?php	
									 

							endwhile;

							?>
</div>
<hr/>
<div id="login">
<article>
<?php if (!(current_user_can('level_0'))){ ?>
<header>
<h3>Login</h3>
</header>
<div id="login-3" class="widget widget-login prl-panel">
<div>
<form class="prl-form" action="<?php echo get_option('home'); ?>/wp-login.php" method="post">
<div class="prl-form-row prl-login-username">
<input type="text" id="log" name="log" placeholder="Username" value="<?php echo wp_specialchars(stripslashes($user_login), 1) ?>" size="20" class="prl-width-1-1">
</div>
<div class="prl-form-row prl-login-password">
<input type="password" name="pwd" id="pwd" size="20" placeholder="Password" class="prl-width-1-1">
</div>
<div class="prl-form-row">
<button class="prl-button prl-button-primary" type="submit">Login</button>
<label for="rememberme" class="prl-form-help-inline"><input name="rememberme" id="rememberme" type="checkbox" checked="checked" value="forever" /> Remember me</label>
<input type="hidden" name="redirect_to" value="<?php echo $_SERVER['REQUEST_URI']; ?>" />
</div>
<div class="prl-form-row">
<a href="<?php echo get_option('home'); ?>/wp-login.php?action=lostpassword">Recover your password</a>
</div>
</form>
</div>
</div>
<?php } else { ?>
<header>
<h3>Logout</h3>
</header>
<a class="prl-button" id="logout_button1" href="<?php echo wp_logout_url($_SERVER['REQUEST_URI']);?>">logout</a><br />
<br/>
<a class="prl-button" id="adminbutton1" href="<?php echo get_option('home'); ?>/wp-admin/">admin</a>
<?php }?>
</article>
</div>
<hr/>
<div id="latest_">
<img src="<?php echo bloginfo('stylesheet_directory');?>/assets/images/latest.png" alt="logo"/>
<section>
<?php 
                            $tempWPQuery=$wp_query;
                            $wp_query=NULL;
                            $wp_query=new WP_Query();
                            
                            $wp_query->query('posts_per_page=5');
                            
                            while($wp_query->have_posts()){
                                $wp_query->the_post();
                            }
                            
                            
                             while($wp_query->have_posts()):
                                            $wp_query->the_post();
                        ?>
<p><i class="fa fa-fighter-jet fa-2x"></i> <a href="<?php the_permalink();?>"><?php $ntt_the_title=$post->post_title;echo $ntt_the_title; ?></a></p>
<hr/>
<?php
					endwhile;
					$wp_query=null;
					$wp_query=$tempWPQuery;
					?>
</section>
</div>
<div id="fb_like">
<div class="fb-like-box" data-href="https://www.facebook.com/youngcrew.lk" data-width="250" data-show-faces="true" data-stream="true" data-header="true"></div>
</div>
<div id="fb_like" style="display:none">
<iframe id="settdecoder" name="settdecoder" src="http://sett-decoder.appspot.com/Widget.html?lang=si&width=150&colour=blue" frameborder="0" style="height:100px;width:160px" scrolling="no"></iframe><script type="text/javascript" src="http://sett-decoder.appspot.com/SettUnicodeDecoder.js"></script>
</div>
</div>
<?php endif; ?>