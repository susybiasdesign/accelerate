<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */
?>

</div><!-- #main -->

<footer id="colophon" class="site-footer" role="contentinfo">
			
	<div class="site-info">


			<div id="footer-sidebar" class="secondary">
				<div id="footer-sidebar1">
					<?php
					if(is_active_sidebar('footer-sidebar-1')){dynamic_sidebar('footer-sidebar-1');}
					?>
				</div>
			</div>


			<div class="site-description">
				<p><?php bloginfo('description'); ?></p>
				<p>&copy; <?php bloginfo('title'); ?>, LLC
			</div>
			

	</div><!-- .site-info -->


</footer><!-- #colophon -->

</div><!-- #page -->

	<?php wp_footer(); ?>

	
</body>
</html>