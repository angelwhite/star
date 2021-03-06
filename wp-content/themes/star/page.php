<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package star
 */

get_header(); ?>
	<div class="banner" style="background: url('<?php 
		$image = get_field('banner_image');
		if( !empty($image) ): ?><?php echo $image['url']; ?>
		<?php endif; ?>') no-repeat top center scroll;">
	</div>
	
	<div id="page" class="hfeed site">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'star' ); ?></a>
		<div id="content" class="site-content grid">

		<div id="primary" class="content-area page-wrap grid grid-pad">
			<main id="main" class="site-main" role="main">
				<?php while ( have_posts() ) : the_post(); ?> 
					<div class="content col-1-1">
			    		<?php the_content(); ?>
			   	 	</div>
				<?php endwhile; 
					wp_reset_query(); 
				?>
			</main><!-- #main -->
		</div>
<?php get_footer(); ?>
