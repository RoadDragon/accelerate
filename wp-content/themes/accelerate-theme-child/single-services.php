<?php
/**
 * The template for displaying services
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate_Theme
 * @since Accelerate Theme 1.1
 */

get_header(); ?>


<section class="home-page about-page">
	<div class="site-content">
		<!-- <?php while ( have_posts() ) : the_post(); ?> -->
			<div class='homepage-hero aboutpage-header' id="about-taxi-photo">
				<div>
					<p id="about-head-text"><span id="color-green">Accelerate</span> is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.</p>
				</div>
			</div>
<!-- 		<?php endwhile; // end of the loop. ?> -->
	</div><!-- .container -->
</section><!-- .home-page -->

<!-- 
<section class="services-section">
	<div class="about-services">
		<h6 class="our-services">Our Services</h6>
		<p class="services-subtitle">We take pride in our clients and the content we create for them. Here's a brief overview of the offered services.</p>
	</div>

	<div class="one-service-container">
		<div class="single-service">
			<div class="service-icon" id="bullseye"><!--<img src="img/bullseye.png">--><!-- </div>
			<div class="service-text">
			<h2 class="service-title-text">Content Strategy</h2>
			<p class="service-description">Selfies ramps semiotics whatever beard, franzen gochujang iceland meggings pork belly. Cliche unicorn +1 stumptown roof party. Squid taxidermy leggings, fixie forage tattooed master cleanse edison bulb schlitz synth banjo gluten-free keytar. Raclette ennui woke everyday carry brooklyn. </p>
			</div>			
		</div>


	</div>


</section> -->



	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>

		</div> <!-- #content
	</div><!-- #primary --> 

	

<?php get_footer(); ?>