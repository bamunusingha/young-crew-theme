<?php
/**
 * Template Name: watch_us
 */

get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<article class="one_cat_article" style="min-height:250px">
<header>
<h2><a style="font-family:'Helvetica Neue','Helvetica',sans-serif" target="blank_" href="<?php the_permalink();?>"><?php $ntt_the_title=$post->post_title;echo $ntt_the_title; ?></a></h2>
</header>
<?php the_content('Read More...'); ?>
</article>
<?php endwhile; endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>