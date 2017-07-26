<?php
/**
 * The template for displaying the about page
 *

 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<!-- starts HERO section -->
<section class="home-page about"> 
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>

			<div class='about-hero'>
				<?php the_content(); ?>

			</div>

	</div><!-- ends .site-content -->
</section><!-- ends .home-page (hero section) -->


<!-- OUR SERVICES section -->
<section class="site-content"> 
	<div class="our-services">

<?php 
				$our_services = get_field('our_services');
				$services_text = get_field('services_text'); 
?>
				<h4><?php echo $our_services; ?></h4>
				<p><?php echo $services_text; ?></p>

	</div> <!-- ends .our-services -->

</section> <!-- ends services intro -->


<!-- CONTENT STRATEGY section -->
<section class="site-content"> 
	<div class="service-div-left">
	<!-- custom fields -->	
			<?php 
				$icon_1 = get_field('icon_1'); 
				$size = "small";
				$text_1 = get_field('text_1');
				$title_1 = get_field('title_1');
			?>

	<!-- icon -->	
	<?php echo wp_get_attachment_image( $icon_1, $size); ?>
	<!-- text -->	
		<div class="service-text-part-left">
			<h3><?php echo $title_1; ?></h3>
			<p><?php echo $text_1; ?></p>
		</div>


	</div> <!-- ends content strategy div -->


<!-- INFLUENCER MAPPING section -->

	<div class="service-div-right">
	<!-- custom fields -->	
			<?php 
				$icon_2 = get_field('icon_2'); 
				$size = "small";
				$text_2 = get_field('text_2');
				$title_2 = get_field('title_2');
			?>
	<!-- icon -->	
		<?php echo wp_get_attachment_image( $icon_2, $size); ?>
	<!-- text -->	
		<div class="service-text-part-right">
			<h3><?php echo $title_2; ?></h3>
			<p><?php echo $text_2; ?></p>
		</div>

	</div> <!-- ends influencer mapping div -->



<!-- SOCIAL MEDIA section -->

	<div class="service-div-left">
	<!-- custom fields -->	
			<?php 
				$icon_3 = get_field('icon_3'); 
				$size = "small";
				$text_3 = get_field('text_3');
				$title_3 = get_field('title_3');
			?>
	<!-- icon -->	
		<?php echo wp_get_attachment_image( $icon_3, $size); ?>
	<!-- text -->	
		<div class="service-text-part-left">
			<h3><?php echo $title_3; ?></h3>
			<p><?php echo $text_3; ?></p>
		</div>

	</div>  <!-- ends social media div -->


<!-- DESIGN AND DEVELOPMENT section -->

	<div class="service-div-right">
	<!-- custom fields -->	
           	<?php 
				$icon_4 = get_field('icon_4'); 
				$size = "small";
				$text_4 = get_field('text_4');
				$title_4 = get_field('title_4');
			?>			
	<!-- icon -->	
			<?php echo wp_get_attachment_image( $icon_4, $size); ?>
	<!-- text -->	
		<div class="service-text-part-right">
			<h3><?php echo $title_4; ?></h3>
			<p><?php echo $text_4; ?></p>
		</div>

	</div> <!-- ends design and development div -->


</section> <!-- ends services divs section -->


<!-- Contact section -->
		<div class="contact-bug">
			<h4>Interested in working with us?      
			<a class="button" href="<?php echo home_url(); ?>/contact-us">Contact Us</a></h4>
		</div>


	<?php endwhile; ?> <!-- ends all loops -->


<?php get_footer(); ?>




