<?php
/**
 * Template Name: Products
 */

get_header(); ?>

		<div class = "about-products-header">
			<img src="<?php the_field('header_image'); ?>" alt="linkedin icon" >
		</div><!--products-header-->			
		<main class = "about-products-main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>
		</main>
		<aside class = "products-sidebar">
			<?php the_field('products_pages_sidebar'); ?>


			<!--<h3 class = "sidebar-header"><?php the_field('sidebar_section_one_headline'); ?></h3>
			<p class = "sidebar-copy"><?php the_field('sidebar_section_one_copy'); ?></p>
			
			<h3 class = "sidebar-header"><?php the_field('sidebar_section_two_headline'); ?></h3>
			<p class = "sidebar-copy"><?php the_field('sidebar_section_two_copy'); ?></p>

			<h3 class = "sidebar-header"><?php the_field('sidebar_section_three_headline'); ?></h3>
			<?php the_field('sidebar_section_three_copy'); ?>-->
		</aside>


<?php get_footer(); ?>