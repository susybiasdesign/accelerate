<?php
/**
 * The template for displaying the homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<!-- starts HERO section -->
<section class="home-page"> 
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='homepage-hero'>
				<?php the_content(); ?>
				<a class="button" href="<?php echo home_url(); ?>/blog">View Our Work</a>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- ends .site-content -->
</section><!-- ends .home-page (hero section) -->



<!-- starts FEATURED WORK section -->
<section class="featured-work"> 
	<div class="site-content">

		<h4>Featured Work</h4>

		<ul class="homepage-featured-work">

			<?php query_posts('posts_per_page=3&post_type=case_studies'); ?>
				
				<?php while ( have_posts() ) : the_post(); 
					$image_1 = get_field("image_1");
					$size="medium"; ?> <!-- loop -->

					<li class="individual-featured-work">
					<figure><?php echo wp_get_attachment_image($image_1, $size); ?></figure>
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					</li>

				<?php endwhile; ?> 	<!-- end loop -->
				<?php wp_reset_query(); ?>

		</ul>

	</div><!-- ends .site-content -->
</section><!-- ends .featured-work -->




<!-- starts RECENT WORK section -->
<section class="recent-posts">
	<div class="site-content">

		<div class="blog-post">
			<h4>From the Blog</h4>

			<?php query_posts('posts_per_page=1'); ?>
				
				<?php while ( have_posts() ) : the_post(); ?> <!-- loop -->
					
					<h2><?php the_title(); ?></h2>
						<?php the_excerpt(); ?>

				<?php endwhile; ?> 	<!-- end loop -->
				<?php wp_reset_query(); ?>

<h4>Read More</h4>

		</div>
 
	</div>
</section>




<?php get_footer(); ?>