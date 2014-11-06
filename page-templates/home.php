<?php
/**
 * Template Name: Crave Front Page
 *
 */

get_header(); ?>

		<div class = "slider">
			<?php echo do_shortcode("[metaslider id=37]"); ?>
		</div><!--slider-->	
		<div class = "mobile-logo-home">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"  title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri();?>/images/mobile_logo_home.png" alt="linkedin icon" ></a>
		</div><!--mobile-logo-home-->
		<h1 class = "welcome-message">
			<?php the_field('welcome_message'); ?>
		</h1>
		
		<section class = "widget-wrapper">
			<ul>
				<li class = "home-widget clear">
					<!--<span class = "widget-content">
						About Us
						
					</span>-->
					<h2 class = "page-sub-head"><?php the_field('left_widget_headline'); ?></h2>
						<p class = "page-copy"><?php the_field('left_widget_copy'); ?></p>
						<p class = "widget-link"><a href = "<?php echo get_site_url(); ?>/about-crave">Read More</a></p>
					
				</li>
				<li class = "home-widget">
					<h2 class = "page-sub-head"><?php the_field('middle_widget_headline'); ?></h2>
					<p class = "page-copy"><?php the_field('middle_widget_copy'); ?></p>
					<p class = "widget-link"><a href = "<?php echo get_site_url(); ?>/category/recipes/">Browse recipes</a></p>
				</li>
				<li class = "home-widget widget-last">
					<h2 class = "page-sub-head"><?php the_field('right_widget_headline'); ?></h2>
					<p class = "page-copy"><?php the_field('right_widget_copy'); ?></p>
					<p class = "widget-link"><a href = "<?php echo get_site_url(); ?>/category/news-and-resources/">Read More</a></p>
				</li>
			</ul>
		</section><!--widget-area-->

<?php get_footer(); ?>