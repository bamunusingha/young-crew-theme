<?php
/**
 * Template Name: home
 */

get_header(); ?>
<div id="sliderTab">
<div id="mainFlexslider" class="slider_content flexslider">
<ul class="slides">
<li class="flex-active-slide" style="width:100%;float:left;margin-right:-100%;position:relative;opacity:0;display:block;z-index:2">
<article>
<div class="slider_title">
<div class="slider-post-meta"><span class="prl-post-rating">
<i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
</span> <a href="#"><i class="fa fa-comment-o"></i> 2</a>
</div>
<h2><a href="<?php echo get_option('home'); ?>/covers/july-2014-vol01-issue-02/"></a></h2>
</div>
<a href="<?php echo get_option('home'); ?>/covers/july-2014-vol01-issue-02/"><img src="<?php echo bloginfo('stylesheet_directory');?>/assets/images/_slider/PNG.jpg" alt="slider" draggable="false"></a>
</article>
</li>
<li class="" style="width:100%;float:left;margin-right:-100%;position:relative;opacity:0;display:block;z-index:1">
<article>
<div class="slider_title">
<div class="slider-post-meta"><span class="prl-post-rating">
<i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
</span> <a href="#"><i class="fa fa-comment-o"></i> 4</a>
</div>
<h2><a href="<?php echo get_option('home'); ?>/covers/july-2014-vol01-issue-02/"></a></h2>
</div>
<a href="<?php echo get_option('home'); ?>/covers/july-2014-vol01-issue-02/"><img src="<?php echo bloginfo('stylesheet_directory');?>/assets/images/_slider/DSC_0160.jpg" alt="slider" draggable="false"></a>
</article>
</li>
<li class="" style="width:100%;float:left;margin-right:-100%;position:relative;opacity:0;display:block;z-index:1">
<article>
<div class="slider_title">
<div class="slider-post-meta"><span class="prl-post-rating">
<i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
</span> <a href="#"><i class="fa fa-comment-o"></i> 6</a>
</div>
<h2><a href="<?php echo get_option('home'); ?>/covers/july-2014-vol01-issue-02/"></a></h2>
</div>
<a href="<?php echo get_option('home'); ?>/covers/july-2014-vol01-issue-02/"><img src="<?php echo bloginfo('stylesheet_directory');?>/assets/images/_slider/DSC_0061-Recovd.jpg" alt="slider" draggable="false"></a>
</article>
</li>
<li class="" style="width:100%;float:left;margin-right:-100%;position:relative;opacity:0;display:block;z-index:1">
<article>
<div class="slider_title">
<div class="slider-post-meta"><span class="prl-post-rating">
<i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
</span> <a href="#"><i class="fa fa-comment-o"></i> 8</a>
</div>
<h2><a href="<?php echo get_option('home'); ?>/covers/july-2014-vol01-issue-02//"></a></h2>
</div>
<a href="<?php echo get_option('home'); ?>/covers/july-2014-vol01-issue-02/"><img src="<?php echo bloginfo('stylesheet_directory');?>/assets/images/_slider/DSC_0030.jpg" alt="slider" draggable="false"></a>
</article>
</li>
</ul>
<script type="text/javascript">/*<![CDATA[*/$(function(){$("#mainFlexslider").flexslider({animation:"fade",prevText:'<i class="fa fa-angle-left icon-large"></i>',nextText:'<i class="fa fa-angle-right icon-large"></i>',manualControls:"#main-slider-control-nav li"})});/*]]>*/</script>
<ul class="flex-direction-nav"><li><a class="flex-prev" href="#"><i class="fa fa-angle-left icon-large"></i></a></li><li><a class="flex-next" href="#"><i class="fa fa-angle-right icon-large"></i></a></li></ul></div>
<div class="clear"></div>
</div>
<?php 
                            $tempWPQuery=$wp_query;
                            $wp_query=NULL;
                            $wp_query=new WP_Query();
                            
                            $wp_query->query('posts_per_page=1&category_name=artists');
                            
                            while($wp_query->have_posts()){
                                $wp_query->the_post();
                            }
                            
                            
                             while($wp_query->have_posts()):
                                            $wp_query->the_post();
                        ?>
<div class="image_frame">
<article class="one_cat_article cat_height_set">
<header class="cat_header_header">
<h2><a target="blank_" href="<?php the_permalink();?>"><?php $ntt_the_title=$post->post_title;echo $ntt_the_title; ?></a></h2>
<?php $archive_year  = get_the_time('Y'); $archive_month = get_the_time('m'); $archive_day   = get_the_time('d'); ?> <p class="post_details"><i class="fa fa-pencil-square-o"></i> <?php $category = get_the_category(); if($category[0]){echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';
}
?> &nbsp;&nbsp;&nbsp;&nbsp;<span class="color_gray_line"><i class="fa fa-star"></i>&nbsp; <a href="<?php echo get_day_link( $archive_year, $archive_month, $archive_day); ?>"> <?php the_time('F jS, Y');?></a> &nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-comment-o"></i> <a href="<?php comments_link(); ?>"><?php comments_number( 'no Comments', 'one Comments', '% Comments' ); ?></a>&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-trophy"></i>&nbsp;&nbsp;<?php echo getPostViews(get_the_ID()); ?></span></p>
</header>
<img src="<?php echo catch_that_image(); ?>" alt="<?php the_title();?>" class="small_cat_image" />
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
										echo substr($content, 0, 800)."...";
                                      ?>
</p>
</article>
</div>
<?php
					endwhile;
					$wp_query=null;
					$wp_query=$tempWPQuery;
					?>
<?php 
                            $tempWPQuery=$wp_query;
                            $wp_query=NULL;
                            $wp_query=new WP_Query();
                            
                            $wp_query->query('posts_per_page=1&category_name=fashion');
                            
                            while($wp_query->have_posts()){
                                $wp_query->the_post();
                            }
                            
                            
                             while($wp_query->have_posts()):
                                            $wp_query->the_post();
                        ?>
<div class="image_frame">
<article class="one_cat_article cat_height_set">
<header class="cat_header_header">
<h2><a target="blank_" href="<?php the_permalink();?>"><?php $ntt_the_title=$post->post_title;echo $ntt_the_title; ?></a></h2>
<?php $archive_year  = get_the_time('Y'); $archive_month = get_the_time('m'); $archive_day   = get_the_time('d'); ?> <p class="post_details"><i class="fa fa-pencil-square-o"></i> <?php $category = get_the_category(); if($category[0]){echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';
}
?> &nbsp;&nbsp;&nbsp;&nbsp;<span class="color_gray_line"><i class="fa fa-star"></i>&nbsp; <a href="<?php echo get_day_link( $archive_year, $archive_month, $archive_day); ?>"> <?php the_time('F jS, Y');?></a> &nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-comment-o"></i> <a href="<?php comments_link(); ?>"><?php comments_number( 'no Comments', 'one Comments', '% Comments' ); ?></a>&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-trophy"></i>&nbsp;&nbsp;<?php echo getPostViews(get_the_ID()); ?></span></p>
</header>
<img src="<?php echo catch_that_image(); ?>" alt="<?php the_title();?>" class="small_cat_image" />
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
										echo substr($content, 0, 800)."...";
                                      ?>
</p>
</article>
</div>
<?php
					endwhile;
					$wp_query=null;
					$wp_query=$tempWPQuery;
					?>
<?php 
                            $tempWPQuery=$wp_query;
                            $wp_query=NULL;
                            $wp_query=new WP_Query();
                            
                            $wp_query->query('posts_per_page=1&category_name=jobs');
                            
                            while($wp_query->have_posts()){
                                $wp_query->the_post();
                            }
                            
                            
                             while($wp_query->have_posts()):
                                            $wp_query->the_post();
                        ?>
<div class="image_frame">
<article class="one_cat_article cat_height_set">
<header class="cat_header_header">
<h2><a target="blank_" href="<?php the_permalink();?>"><?php $ntt_the_title=$post->post_title;echo $ntt_the_title; ?></a></h2>
<?php $archive_year  = get_the_time('Y'); $archive_month = get_the_time('m'); $archive_day   = get_the_time('d'); ?> <p class="post_details"><i class="fa fa-pencil-square-o"></i> <?php $category = get_the_category(); if($category[0]){echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';
}
?> &nbsp;&nbsp;&nbsp;&nbsp;<span class="color_gray_line"><i class="fa fa-star"></i>&nbsp; <a href="<?php echo get_day_link( $archive_year, $archive_month, $archive_day); ?>"> <?php the_time('F jS, Y');?></a> &nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-comment-o"></i> <a href="<?php comments_link(); ?>"><?php comments_number( 'no Comments', 'one Comments', '% Comments' ); ?></a>&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-trophy"></i>&nbsp;&nbsp;<?php echo getPostViews(get_the_ID()); ?></span></p>
</header>
<img src="<?php echo catch_that_image(); ?>" alt="<?php the_title();?>" class="small_cat_image" />
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
										echo substr($content, 0, 800)."...";
                                      ?>
</p>
</article>
</div>
<?php
					endwhile;
					$wp_query=null;
					$wp_query=$tempWPQuery;
					?>
<?php 
                            $tempWPQuery=$wp_query;
                            $wp_query=NULL;
                            $wp_query=new WP_Query();
                            
                            $wp_query->query('posts_per_page=1&category_name=lifeline');
                            
                            while($wp_query->have_posts()){
                                $wp_query->the_post();
                            }
                            
                            
                             while($wp_query->have_posts()):
                                            $wp_query->the_post();
                        ?>
<div class="image_frame">
<article class="one_cat_article cat_height_set">
<header class="cat_header_header">
<h2><a target="blank_" href="<?php the_permalink();?>"><?php $ntt_the_title=$post->post_title;echo $ntt_the_title; ?></a></h2>
<?php $archive_year  = get_the_time('Y'); $archive_month = get_the_time('m'); $archive_day   = get_the_time('d'); ?> <p class="post_details"><i class="fa fa-pencil-square-o"></i> <?php $category = get_the_category(); if($category[0]){echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';
}
?> &nbsp;&nbsp;&nbsp;&nbsp;<span class="color_gray_line"><i class="fa fa-star"></i>&nbsp; <a href="<?php echo get_day_link( $archive_year, $archive_month, $archive_day); ?>"> <?php the_time('F jS, Y');?></a> &nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-comment-o"></i> <a href="<?php comments_link(); ?>"><?php comments_number( 'no Comments', 'one Comments', '% Comments' ); ?></a>&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-trophy"></i>&nbsp;&nbsp;<?php echo getPostViews(get_the_ID()); ?></span></p>
</header>
<img src="<?php echo catch_that_image(); ?>" alt="<?php the_title();?>" class="small_cat_image" />
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
										echo substr($content, 0, 800)."...";
                                      ?>
</p>
</article>
</div>
<?php
					endwhile;
					$wp_query=null;
					$wp_query=$tempWPQuery;
					?>
<?php 
                            $tempWPQuery=$wp_query;
                            $wp_query=NULL;
                            $wp_query=new WP_Query();
                            
                            $wp_query->query('posts_per_page=1&category_name=sports');
                            
                            while($wp_query->have_posts()){
                                $wp_query->the_post();
                            }
                            
                            
                             while($wp_query->have_posts()):
                                            $wp_query->the_post();
                        ?>
<div class="image_frame">
<article class="one_cat_article cat_height_set">
<header class="cat_header_header">
<h2><a target="blank_" href="<?php the_permalink();?>"><?php $ntt_the_title=$post->post_title;echo $ntt_the_title; ?></a></h2>
<?php $archive_year  = get_the_time('Y'); $archive_month = get_the_time('m'); $archive_day   = get_the_time('d'); ?> <p class="post_details"><i class="fa fa-pencil-square-o"></i> <?php $category = get_the_category(); if($category[0]){echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';
}
?> &nbsp;&nbsp;&nbsp;&nbsp;<span class="color_gray_line"><i class="fa fa-star"></i>&nbsp; <a href="<?php echo get_day_link( $archive_year, $archive_month, $archive_day); ?>"> <?php the_time('F jS, Y');?></a> &nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-comment-o"></i> <a href="<?php comments_link(); ?>"><?php comments_number( 'no Comments', 'one Comments', '% Comments' ); ?></a>&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-trophy"></i>&nbsp;&nbsp;<?php echo getPostViews(get_the_ID()); ?></span></p>
</header>
<img src="<?php echo catch_that_image(); ?>" alt="<?php the_title();?>" class="small_cat_image" />
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
										echo substr($content, 0, 800)."...";
                                      ?>
</p>
</article>
</div>


<?php
					endwhile;
					$wp_query=null;
					$wp_query=$tempWPQuery;
					?>
					
					


<?php 
                            $tempWPQuery=$wp_query;
                            $wp_query=NULL;
                            $wp_query=new WP_Query();
                            
                            $wp_query->query('posts_per_page=1&category_name=kirana');
                            
                            while($wp_query->have_posts()){
                                $wp_query->the_post();
                            }
                            
                            
                             while($wp_query->have_posts()):
                                            $wp_query->the_post();
                        ?>
<div class="image_frame">
<article class="one_cat_article cat_height_set">
<header class="cat_header_header">
<h2><a target="blank_" href="<?php the_permalink();?>"><?php $ntt_the_title=$post->post_title;echo $ntt_the_title; ?></a></h2>
<?php $archive_year  = get_the_time('Y'); $archive_month = get_the_time('m'); $archive_day   = get_the_time('d'); ?> <p class="post_details"><i class="fa fa-pencil-square-o"></i> <?php $category = get_the_category(); if($category[0]){echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';
}
?> &nbsp;&nbsp;&nbsp;&nbsp;<span class="color_gray_line"><i class="fa fa-star"></i>&nbsp; <a href="<?php echo get_day_link( $archive_year, $archive_month, $archive_day); ?>"> <?php the_time('F jS, Y');?></a> &nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-comment-o"></i> <a href="<?php comments_link(); ?>"><?php comments_number( 'no Comments', 'one Comments', '% Comments' ); ?></a>&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-trophy"></i>&nbsp;&nbsp;<?php echo getPostViews(get_the_ID()); ?></span></p>
</header>
<img src="<?php echo catch_that_image(); ?>" alt="<?php the_title();?>" class="small_cat_image" />
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
										echo substr($content, 0, 800)."...";
                                      ?>
</p>
</article>
</div>

<?php
					endwhile;
					$wp_query=null;
					$wp_query=$tempWPQuery;
					?>
					
					
					
<table id="special___">
<tr>
<td>
<?php 
								/*GAME ARTICLE */
												$tempWPQuery=$wp_query;
												$wp_query=NULL;
												$wp_query=new WP_Query();
												
												$wp_query->query('posts_per_page=1&category_name=daily');
												
												while($wp_query->have_posts()){
													$wp_query->the_post();
												}
												
												
												 while($wp_query->have_posts()):
																$wp_query->the_post();
											?>
<div class="one_old_news">
<img src="<?php echo catch_that_image(); ?>" alt="<?php the_title();?>" />
<article>
<header>
<h4><a target="blank_" href="<?php  the_permalink();?>"><?php $ntt_the_title=$post->post_title;echo $ntt_the_title; ?></a></h4>
<?php $archive_year  = get_the_time('Y'); $archive_month = get_the_time('m'); $archive_day   = get_the_time('d'); ?> <p class="post_details_low"><i class="fa fa-pencil-square-o"></i> <?php $category = get_the_category(); if($category[0]){echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';}
?><br/> <span class="color_gray_line"><i class="fa fa-star"></i>&nbsp; <a href="<?php echo get_day_link( $archive_year, $archive_month, $archive_day); ?>"> <?php the_time('F jS, Y');?></a> <br/> <i class="fa fa-comment-o"></i> <a href="<?php comments_link(); ?>"><?php comments_number( 'no Comments', 'one Comments', '% Comments' ); ?></a><br/> <i class="fa fa-trophy"></i>&nbsp;&nbsp;<?php echo getPostViews(get_the_ID()); ?></span></p>
<p>
<?php
														  $content = get_the_content();
														   $content = strip_tags($content);
														   echo substr($content, 0, 200)."...";
															
														  ?>
</p>
</header>
</article>
</div>
<?php
											endwhile;
											$wp_query=null;
											$wp_query=$tempWPQuery;
											
											/* End of daily */
											
											?>
</td>
<td>
<?php 
								/*horascope ARTICLE */
												$tempWPQuery=$wp_query;
												$wp_query=NULL;
												$wp_query=new WP_Query();
												
												$wp_query->query('posts_per_page=1&category_name= Hiphop police');
												
												while($wp_query->have_posts()){
													$wp_query->the_post();
												}
												
												
												 while($wp_query->have_posts()):
																$wp_query->the_post();
											?>
<div class="one_old_news">
<img src="<?php echo catch_that_image(); ?>" alt="<?php the_title();?>" />
<article>
<header>
<h4><a target="blank_" href="<?php the_permalink();?>"><?php $ntt_the_title=$post->post_title;echo $ntt_the_title; ?></a></h4>
<?php $archive_year  = get_the_time('Y'); $archive_month = get_the_time('m'); $archive_day   = get_the_time('d'); ?> <p class="post_details_low"><i class="fa fa-pencil-square-o"></i> <?php $category = get_the_category(); if($category[0]){echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';}
?><br/> <span class="color_gray_line"><i class="fa fa-star"></i>&nbsp; <a href="<?php echo get_day_link( $archive_year, $archive_month, $archive_day); ?>"> <?php the_time('F jS, Y');?></a> <br/> <i class="fa fa-comment-o"></i> <a href="<?php comments_link(); ?>"><?php comments_number( 'no Comments', 'one Comments', '% Comments' ); ?></a><br/> <i class="fa fa-trophy"></i>&nbsp;&nbsp;<?php echo getPostViews(get_the_ID()); ?></span></p>
<p>
<?php
														  $content = get_the_content();
														   $content = strip_tags($content);
														   echo substr($content, 0, 200)."...";
															
														  ?>
</p>
</header>
</article>
</div>
<?php
										endwhile;
										$wp_query=null;
										$wp_query=$tempWPQuery;
										
										/* End of hiphop polices */
										
										?>
</td>
</tr>
<tr>
<td>
<?php 
							/*horascope ARTICLE */
											$tempWPQuery=$wp_query;
											$wp_query=NULL;
											$wp_query=new WP_Query();
											
											$wp_query->query('posts_per_page=1&category_name=biz buzz');
											
											while($wp_query->have_posts()){
												$wp_query->the_post();
											}
											
											
											 while($wp_query->have_posts()):
															$wp_query->the_post();
										?>
<div class="one_old_news">
<img src="<?php echo catch_that_image(); ?>" alt="<?php the_title();?>" />
<article>
<header>
<h4><a target="blank_" href="<?php the_permalink();?>"><?php $ntt_the_title=$post->post_title;echo $ntt_the_title; ?></a></h4>
<?php $archive_year  = get_the_time('Y'); $archive_month = get_the_time('m'); $archive_day   = get_the_time('d'); ?> <p class="post_details_low"><i class="fa fa-pencil-square-o"></i> <?php $category = get_the_category(); if($category[0]){echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';}
?><br/> <span class="color_gray_line"><i class="fa fa-star"></i>&nbsp; <a href="<?php echo get_day_link( $archive_year, $archive_month, $archive_day); ?>"> <?php the_time('F jS, Y');?></a> <br/> <i class="fa fa-comment-o"></i> <a href="<?php comments_link(); ?>"><?php comments_number( 'no Comments', 'one Comments', '% Comments' ); ?></a><br/> <i class="fa fa-trophy"></i>&nbsp;&nbsp;<?php echo getPostViews(get_the_ID()); ?></span></p>
<p>
<?php
													  $content = get_the_content();
													   $content = strip_tags($content);
													   echo substr($content, 0, 200)."...";
														
													  ?>
</p>
</header>
</article>
</div>
<?php
									endwhile;
									$wp_query=null;
									$wp_query=$tempWPQuery;
									
									/* End of biz buzz */
									
									?>
</td>
<td>
<?php 
									/*horascope ARTICLE */
													$tempWPQuery=$wp_query;
													$wp_query=NULL;
													$wp_query=new WP_Query();
													
													$wp_query->query('posts_per_page=1&category_name=fun zone');
													
													while($wp_query->have_posts()){
														$wp_query->the_post();
													}
													
													
													 while($wp_query->have_posts()):
																	$wp_query->the_post();
												?>
<div class="one_old_news">
<img src="<?php echo catch_that_image(); ?>" alt="<?php the_title();?>" />
<article>
<header>
<h4><a target="blank_" href="<?php the_permalink();?>"><?php $ntt_the_title=$post->post_title;echo $ntt_the_title; ?></a></h4>
<?php $archive_year  = get_the_time('Y'); $archive_month = get_the_time('m'); $archive_day   = get_the_time('d'); ?> <p class="post_details_low"><i class="fa fa-pencil-square-o"></i> <?php $category = get_the_category(); if($category[0]){echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';}
?><br/> <span class="color_gray_line"><i class="fa fa-star"></i>&nbsp; <a href="<?php echo get_day_link( $archive_year, $archive_month, $archive_day); ?>"> <?php the_time('F jS, Y');?></a> <br/> <i class="fa fa-comment-o"></i> <a href="<?php comments_link(); ?>"><?php comments_number( 'no Comments', 'one Comments', '% Comments' ); ?></a><br/> <i class="fa fa-trophy"></i>&nbsp;&nbsp;<?php echo getPostViews(get_the_ID()); ?></span></p>
<p>
<?php
															  $content = get_the_content();
															   $content = strip_tags($content);
															   echo substr($content, 0, 200)."...";
																
															  ?>
</p>
</header>
</article>
</div>
<?php
											endwhile;
											$wp_query=null;
											$wp_query=$tempWPQuery;
											
											/* End of fun zone */
											
											?>
</td>
</tr>
<tr>
<td>
<?php 
												/*horascope ARTICLE */
																$tempWPQuery=$wp_query;
																$wp_query=NULL;
																$wp_query=new WP_Query();
																
																$wp_query->query('posts_per_page=1&category_name=games');
																
																while($wp_query->have_posts()){
																	$wp_query->the_post();
																}
																
																
																 while($wp_query->have_posts()):
																				$wp_query->the_post();
															?>
<div class="one_old_news">
<img src="<?php echo catch_that_image(); ?>" alt="<?php the_title();?>" />
<article>
<header>
<h4><a target="blank_" href="<?php the_permalink();?>"><?php $ntt_the_title=$post->post_title;echo $ntt_the_title; ?></a></h4>
<?php $archive_year  = get_the_time('Y'); $archive_month = get_the_time('m'); $archive_day   = get_the_time('d'); ?> <p class="post_details_low"><i class="fa fa-pencil-square-o"></i> <?php $category = get_the_category(); if($category[0]){echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';}
?><br/> <span class="color_gray_line"><i class="fa fa-star"></i>&nbsp; <a href="<?php echo get_day_link( $archive_year, $archive_month, $archive_day); ?>"> <?php the_time('F jS, Y');?></a> <br/> <i class="fa fa-comment-o"></i> <a href="<?php comments_link(); ?>"><?php comments_number( 'no Comments', 'one Comments', '% Comments' ); ?></a><br/> <i class="fa fa-trophy"></i>&nbsp;&nbsp;<?php echo getPostViews(get_the_ID()); ?></span></p>
<p>
<?php
																		  $content = get_the_content();
																		   $content = strip_tags($content);
																		   echo substr($content, 0, 200)."...";
																			
																		  ?>
</p>
</header>
</article>
</div>
<?php
														endwhile;
														$wp_query=null;
														$wp_query=$tempWPQuery;
														
														/* End of game */
														
														?>
</td>
<td>
<?php 
							/*horascope ARTICLE */
											$tempWPQuery=$wp_query;
											$wp_query=NULL;
											$wp_query=new WP_Query();
											
											$wp_query->query('posts_per_page=1&category_name=hadhawathata');
											
											while($wp_query->have_posts()){
												$wp_query->the_post();
											}
											
											
											 while($wp_query->have_posts()):
															$wp_query->the_post();
										?>
<div class="one_old_news">
<img src="<?php echo catch_that_image(); ?>" alt="<?php the_title();?>" />
<article>
<header>
<h4><a target="blank_" href="<?php the_permalink();?>"><?php $ntt_the_title=$post->post_title;echo $ntt_the_title; ?></a></h4>
<?php $archive_year  = get_the_time('Y'); $archive_month = get_the_time('m'); $archive_day   = get_the_time('d'); ?> <p class="post_details_low"><i class="fa fa-pencil-square-o"></i> <?php $category = get_the_category(); if($category[0]){echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';}
?><br/> <span class="color_gray_line"><i class="fa fa-star"></i>&nbsp; <a href="<?php echo get_day_link( $archive_year, $archive_month, $archive_day); ?>"> <?php the_time('F jS, Y');?></a> <br/> <i class="fa fa-comment-o"></i> <a href="<?php comments_link(); ?>"><?php comments_number( 'no Comments', 'one Comments', '% Comments' ); ?></a><br/> <i class="fa fa-trophy"></i>&nbsp;&nbsp;<?php echo getPostViews(get_the_ID()); ?></span></p>
<p>
<?php
													  $content = get_the_content();
													   $content = strip_tags($content);
													   echo substr($content, 0, 200)."...";
														
													  ?>
</p>
</header>
</article>
</div>
<?php
									endwhile;
									$wp_query=null;
									$wp_query=$tempWPQuery;
									
									/* End of hadawathata */
									
									?>
</td>
</tr>
<tr>
<td>
<?php 
								/*horascope ARTICLE */
												$tempWPQuery=$wp_query;
												$wp_query=NULL;
												$wp_query=new WP_Query();
												
												$wp_query->query('posts_per_page=1&category_name=technology');
												
												while($wp_query->have_posts()){
													$wp_query->the_post();
												}
												
												
												 while($wp_query->have_posts()):
																$wp_query->the_post();
											?>
<div class="one_old_news">
<img src="<?php echo catch_that_image(); ?>" alt="<?php the_title();?>" />
<article>
<header>
<h4><a target="blank_" href="<?php the_permalink();?>"><?php $ntt_the_title=$post->post_title;echo $ntt_the_title; ?></a></h4>
<?php $archive_year  = get_the_time('Y'); $archive_month = get_the_time('m'); $archive_day   = get_the_time('d'); ?> <p class="post_details_low"><i class="fa fa-pencil-square-o"></i> <?php $category = get_the_category(); if($category[0]){echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';}
?><br/> <span class="color_gray_line"><i class="fa fa-star"></i>&nbsp; <a href="<?php echo get_day_link( $archive_year, $archive_month, $archive_day); ?>"> <?php the_time('F jS, Y');?></a> <br/> <i class="fa fa-comment-o"></i> <a href="<?php comments_link(); ?>"><?php comments_number( 'no Comments', 'one Comments', '% Comments' ); ?></a><br/> <i class="fa fa-trophy"></i>&nbsp;&nbsp;<?php echo getPostViews(get_the_ID()); ?></span></p>
<p>
<?php
														  $content = get_the_content();
														   $content = strip_tags($content);
														   echo substr($content, 0, 200)."...";
															
														  ?>
</p>
</header>
</article>
</div>
<?php
										endwhile;
										$wp_query=null;
										$wp_query=$tempWPQuery;
										
										/* End of technology */
										
										?>
</td>
<td>
<?php 
								/*horascope ARTICLE */
												$tempWPQuery=$wp_query;
												$wp_query=NULL;
												$wp_query=new WP_Query();
												
												$wp_query->query('posts_per_page=1&category_name=mega boot');
												
												while($wp_query->have_posts()){
													$wp_query->the_post();
												}
												
												
												 while($wp_query->have_posts()):
																$wp_query->the_post();
											?>
<div class="one_old_news">
<img src="<?php echo catch_that_image(); ?>" alt="<?php the_title();?>" />
<article>
<header>
<h4><a target="blank_" href="<?php the_permalink();?>"><?php $ntt_the_title=$post->post_title;echo $ntt_the_title; ?></a></h4>
<?php $archive_year  = get_the_time('Y'); $archive_month = get_the_time('m'); $archive_day   = get_the_time('d'); ?> <p class="post_details_low"><i class="fa fa-pencil-square-o"></i> <?php $category = get_the_category(); if($category[0]){echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';}
?><br/> <span class="color_gray_line"><i class="fa fa-star"></i>&nbsp; <a href="<?php echo get_day_link( $archive_year, $archive_month, $archive_day); ?>"> <?php the_time('F jS, Y');?></a> <br/> <i class="fa fa-comment-o"></i> <a href="<?php comments_link(); ?>"><?php comments_number( 'no Comments', 'one Comments', '% Comments' ); ?></a><br/> <i class="fa fa-trophy"></i>&nbsp;&nbsp;<?php echo getPostViews(get_the_ID()); ?></span></p>
<p>
<?php
														  $content = get_the_content();
														   $content = strip_tags($content);
														   echo substr($content, 0, 200)."...";
															
														  ?>
</p>
</header>
</article>
</div>
<?php
										endwhile;
										$wp_query=null;
										$wp_query=$tempWPQuery;
										
										/* End of mega boot */
										
										?>
</td>
</tr>
<tr>
<td>
<?php 
							/*horascope ARTICLE */
											$tempWPQuery=$wp_query;
											$wp_query=NULL;
											$wp_query=new WP_Query();
											
											$wp_query->query('posts_per_page=1&category_name=fantasy love');
											
											while($wp_query->have_posts()){
												$wp_query->the_post();
											}
											
											
											 while($wp_query->have_posts()):
															$wp_query->the_post();
										?>
<div class="one_old_news">
<img src="<?php echo catch_that_image(); ?>" alt="<?php the_title();?>" />
<article>
<header>
<h4><a target="blank_" href="<?php the_permalink();?>"><?php $ntt_the_title=$post->post_title;echo $ntt_the_title; ?></a></h4>
<?php $archive_year  = get_the_time('Y'); $archive_month = get_the_time('m'); $archive_day   = get_the_time('d'); ?> <p class="post_details_low"><i class="fa fa-pencil-square-o"></i> <?php $category = get_the_category(); if($category[0]){echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';}
?><br/> <span class="color_gray_line"><i class="fa fa-star"></i>&nbsp; <a href="<?php echo get_day_link( $archive_year, $archive_month, $archive_day); ?>"> <?php the_time('F jS, Y');?></a> <br/> <i class="fa fa-comment-o"></i> <a href="<?php comments_link(); ?>"><?php comments_number( 'no Comments', 'one Comments', '% Comments' ); ?></a><br/> <i class="fa fa-trophy"></i>&nbsp;&nbsp;<?php echo getPostViews(get_the_ID()); ?></span></p>
<p>
<?php
													  $content = get_the_content();
													   $content = strip_tags($content);
													   echo substr($content, 0, 200)."...";
														
													  ?>
</p>
</header>
</article>
</div>
<?php
									endwhile;
									$wp_query=null;
									$wp_query=$tempWPQuery;
									
									/* End of visekara */
									
									?>
</td>
<td>
<?php 
								/*horascope ARTICLE */
												$tempWPQuery=$wp_query;
												$wp_query=NULL;
												$wp_query=new WP_Query();
												
												$wp_query->query('posts_per_page=1&category_name=heenayak');
												
												while($wp_query->have_posts()){
													$wp_query->the_post();
												}
												
												
												 while($wp_query->have_posts()):
																$wp_query->the_post();
											?>
<div class="one_old_news">
<img src="<?php echo catch_that_image(); ?>" alt="<?php the_title();?>" />
<article>
<header>
<h4><a target="blank_" href="<?php the_permalink();?>"><?php $ntt_the_title=$post->post_title;echo $ntt_the_title; ?></a></h4>
<?php $archive_year  = get_the_time('Y'); $archive_month = get_the_time('m'); $archive_day   = get_the_time('d'); ?> <p class="post_details_low"><i class="fa fa-pencil-square-o"></i> <?php $category = get_the_category(); if($category[0]){echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';}
?><br/> <span class="color_gray_line"><i class="fa fa-star"></i>&nbsp; <a href="<?php echo get_day_link( $archive_year, $archive_month, $archive_day); ?>"> <?php the_time('F jS, Y');?></a> <br/> <i class="fa fa-comment-o"></i> <a href="<?php comments_link(); ?>"><?php comments_number( 'no Comments', 'one Comments', '% Comments' ); ?></a><br/> <i class="fa fa-trophy"></i>&nbsp;&nbsp;<?php echo getPostViews(get_the_ID()); ?></span></p>
<p>
<?php
														  $content = get_the_content();
														   $content = strip_tags($content);
														   echo substr($content, 0, 200)."...";
															
														  ?>
</p>
</header>
</article>
</div>
<?php
										endwhile;
										$wp_query=null;
										$wp_query=$tempWPQuery;
										
										/* End of kaviya */
										
										?>
</td>
</tr>
</table>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>