<?php
/**
 * Template Name: About Crave
 *
 */

get_header(); ?>

		<div class = "about-products-header">
			<img src="<?php the_field('about_header_image'); ?>" class = "header-image" alt="linkedin icon" >
		</div><!--products-header-->	
		<main class = "about-products-main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>
		</main>
		<aside class = "about-sidebar">
			<h3 class = "sidebar-header">Hours</h3>
				<ul class = "sidebar-ul">
					<li>Mon - Fri: 10:00 am - 6:00 pm</li>
					<li>Sat: 11:00 am - 4:00 pm</li>
				</ul>

			<h3 class = "sidebar-header">Contact</h3>
				<ul class = "sidebar-ul">
					<li class = "sidebar-li">(337) 421-0040</li>
					<li class = "sidebar-li">2801 Ryan Street, Suite 100, Lake Charles, Louisiana 70601</li>
				</ul>				
			<iframe width="229" height="180" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=2801%20Ryan%20Street%2C%20Suite%20100%20Lake%20Charles%2C%20Louisiana%2070601&key=AIzaSyCNGuKk3ogSq9e7U3GNY43yZG39BMw0MTg"></iframe>
			
		</aside>


<?php get_footer(); ?>