<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo" class = "clear">
		<ul>
			<li class = "footer-widget odd">
				<ul>
					<li>2801 Ryan Street, Suite 100, Lake Charles, LA</li>
					<li>(337) 421-0040</li>
					<li>Mon - Fri: 10am - 6pm</li>
					<li>Sat: 11am - 4pm</li>
				</ul>
			</li>
			<li class = "footer-widget even">
				<ul>
					<li><a href = "<?php echo get_site_url(); ?>/about-crave">About</a></li>
					<li><a href = "<?php echo get_site_url(); ?>/category/recipes/">Recipes</a></li>
					<li><a href = "<?php echo get_site_url(); ?>/category/news-and-resources">News & Resources</a></li>
				</ul>
			</li>
			<li class = "footer-widget odd">
				<ul>
					<li><a href = "<?php echo get_site_url(); ?>/olive-oils-basalmics">Olive Oils & Balsamics</a></li>
					<li><a href = "<?php echo get_site_url(); ?>/specialty-foods">Speciality Foods</a></li>
					<li><a href = "<?php echo get_site_url(); ?>/wines-spirits">Wines & Spirits</a></li>
					<li><a href = "<?php echo get_site_url(); ?>/gifts-decor">Gifts & Decor</a></li>
					<li><a href = "<?php echo get_site_url(); ?>/gift-baskets">Gift Baskets</a></li>
				</ul>
			</li>
			<li class = "footer-widget widget-last even">
				<ul>
					<li><a href = "https://www.facebook.com/CraveLakeCharles" target = "_blank">Like us on Facebook</a></li>
					<li><a href = "http://www.yelp.com/biz/crave-gourmet-baskets-and-gifts-lake-charles-2" target = "_blank" >Find us on Yelp</a></li>
					<li><a href = "https://plus.google.com/u/0/104193551844420844441/about" target = "_blank">Add us on Google+</a></li>
				</ul>
			</li>
			
		</ul>


	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>