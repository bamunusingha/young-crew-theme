<?php
/**
 *
 */

get_header(); ?>
<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

 
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php setPostViews(get_the_ID()); ?>
<article id="single_article_section" class="one_cat_article single_article arial_article" style="min-height:130px" class="sharing">
<div id="s_items">
<div class="fb-share-button sharing" data-href="<?php the_permalink(); ?>" data-type="button_count">
</div>
<div class="sharing" id="t_share">
<a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
<script>!function(f,a,g){var e,b=f.getElementsByTagName(a)[0],c=/^http:/.test(f.location)?"http":"https";if(!f.getElementById(g)){e=f.createElement(a);e.id=g;e.src=c+"://platform.twitter.com/widgets.js";b.parentNode.insertBefore(e,b)}}(document,"script","twitter-wjs");</script>
</div>
<div class="g-plus sharing" data-action="share" data-annotation="bubble"></div>
</div>
<header>
<h2><a target="blank_" href="<?php the_permalink();?>"><?php $ntt_the_title=$post->post_title;echo $ntt_the_title; ?></a></h2>
<?php $archive_year  = get_the_time('Y'); $archive_month = get_the_time('m'); $archive_day   = get_the_time('d'); ?> <p class="post_details"><i class="fa fa-pencil-square-o"></i> <?php $category = get_the_category(); if($category[0]){echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';
}
?> &nbsp;&nbsp;&nbsp;&nbsp;<span class="color_gray_line"><i class="fa fa-star"></i>&nbsp; <a href="<?php echo get_day_link( $archive_year, $archive_month, $archive_day); ?>"> <?php the_time('F jS, Y');?></a> &nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-comment-o"></i> <a href="<?php comments_link(); ?>"><?php comments_number( 'no Comments', 'one Comments', '% Comments' ); ?></a>&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-trophy"></i>&nbsp;&nbsp;<?php echo getPostViews(get_the_ID()); ?></span></p>
</header>
<p>
<?php
                                      $content = get_the_content();
                                      
                                       echo $content;
                                        
                                      ?>
</p>
<div class="fb-share-button" data-href="<?php the_permalink(); ?>" data-type="button_count"></div>
<div class="sharing">
<a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
<script>!function(f,a,g){var e,b=f.getElementsByTagName(a)[0],c=/^http:/.test(f.location)?"http":"https";if(!f.getElementById(g)){e=f.createElement(a);e.id=g;e.src=c+"://platform.twitter.com/widgets.js";b.parentNode.insertBefore(e,b)}}(document,"script","twitter-wjs");</script>
</div>
<div class="g-plus sharing" data-action="share" data-annotation="bubble"></div>
</article>
<div class="sharing" style="margin-bottom:10px;padding-bottom:10px" id="bottom_navigation_left"> <?php previous_post_link(); ?></div> <div id="bottom_navigation_right"><?php next_post_link(); ?></div>
<?php comments_template(); ?>
<?php endwhile; endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>