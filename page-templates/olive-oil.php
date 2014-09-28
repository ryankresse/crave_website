<?php
/**
 * Template Name: Olive Oils And Basalmics
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

		<div class = "products-header">
			<img src="<?php the_field('header_image'); ?>" class = "header-image" alt="linkedin icon" >
		</div><!--products-header-->	
		<!--<h1 class = "page-headline">Olive Oils & Balsamics</h1>-->
		
		<main class = "products-main">
			<!--<h2 class = "page-sub-head">Overview</h2>-->
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>
		</main>
		<aside class = "products-right">
			<h3 class = "sidebar-header"><?php the_field('sidebar_section_one_headline'); ?></h3>
			<p class = "sidebar-copy"><?php the_field('sidebar_section_one_copy'); ?></p>
			
			<h3 class = "sidebar-header"><?php the_field('sidebar_section_two_headline'); ?></h3>
			<p class = "sidebar-copy"><?php the_field('sidebar_section_two_copy'); ?></p>

			<h3 class = "sidebar-header"><?php the_field('sidebar_section_three_headline'); ?></h3>
			<?php the_field('sidebar_section_three_copy'); ?>
		</aside>


<?php get_footer(); ?>