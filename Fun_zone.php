<?php
/**
 * Template Name: Fun_zone
 */

get_header(); ?>
<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

query_posts('category_name=fun zone&paged=' . $paged); 
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<article class="one_cat_article cat_height_set">
<header class="cat_header_header">
<h2 class="cat_header"><a target="blank_" href="<?php the_permalink();?>"><?php $ntt_the_title=$post->post_title;echo $ntt_the_title; ?></a></h2>
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
										echo substr($content, 0, 500)."...";
                                      ?>
</p>
<p class="read_more_cat read_more"> <i class="fa fa-long-arrow-right fa-2x"></i>&nbsp;&nbsp;<a href="<?php the_permalink();?>">Read more</a> </p>
</article>
<?php endwhile; endif; ?>
<?php twentyeleven_content_nav( 'nav-below' ); ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>