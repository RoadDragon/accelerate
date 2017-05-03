<?php
/*
* Template Name: Full Width Page
* Description: Page Template That is the full width of the screen
*
*/


get_header(); ?>

<div id="content" role="main">

	<section class="about-page">
		<?php $bigimage = get_field('upload_the_big_image'); ?>

		<div class="homepage-hero">
			<img class="bigimage" src="<?php the_field('upload_the_big_image'); ?>" >
			<p id="bigimage-text"> <?php the_field('sub_heading'); ?> </p>
		</div>
	</section>

</div>

<!-- <div class="fullwidth-hero">

      <img src="<?php the_field('upload_the_big_image'); ?>" />
      
      <p id="bigimage-text"><?php the_field('sub_heading'); ?></p>

</div>
 -->


<?php get_footer(); ?>