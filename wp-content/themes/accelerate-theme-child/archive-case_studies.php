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
 * @since Accelerate Marketing 1.1
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); 
				$image_1 = get_field("image_1");
				$size = "full";
				$services = get_field('services');
			?>

			<article class="case-study">
				<aside class="case-study-sidebar">
					<h2 id="case-study-archive-title"><?php the_title(); ?></h2>
					<h5 id="no-top-margin"><span class="subtitle" id="case-study-archive-subtitle"><?php echo $services; ?></span></h5>
					<div id="case-study-archive-content">
						<?php the_content(); ?>
						<p><strong><a href="<?php echo $link; ?>">View Project </a>&rsaquo;</strong></p>
					<div>
				</aside>

				<div class="case-study-images">

					<?php if($image_1) { ?>
						<?php echo wp_get_attachment_image( $image_1, $size); ?>
					<?php } ?>

				</div>
					
			</article>

<!-- 				<?php the_excerpt(); ?>
				<?php the_content(); ?> -->
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>