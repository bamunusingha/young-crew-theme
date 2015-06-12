<?php
/**
 * Template Name: friend_club
 */

get_header(); ?>
<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
<?php the_content('Read More...'); ?>
</article>
<?php endwhile; else: ?>
<p><?php _e('No posts or pages were found. Sorry!..<br/><br/> '); ?></p>
<?php endif; ?>
<?php twentyeleven_content_nav( 'nav-below' ); ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>