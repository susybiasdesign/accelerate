<?php
/**
 * The template for displaying all pages
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

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>

				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>

			<?php endwhile; // end of the loop. ?>


<section class="page-not-found">

		<h1>Page not found!</h1>
		<p>Enjoy this gif of a cat eating pizza instead.</p>
		<img src="https://media.tenor.com/images/b7c7efc7e11a6eaf663c607c2e1153f0/tenor.gif"/>
</section>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>