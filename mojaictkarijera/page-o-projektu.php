<?php get_header(); ?>


<?php
    
    /*Template name: O projektu */

?>



	<?php get_template_part('template_parts/banners'); ?>



	<div class="projekt-wrap container clearfix">
	
		<div class="o-projektu-text clearfix">
			<h2><?php the_field('projekt_naslov'); ?></h2>
			<hr>
			<?php the_field('projekt_text') ?>
		</div>

		<div class="o-projektu-slika clearfix">
			<?php 

				$image = get_field('mojaict_image');

				if( !empty($image) ): ?>

					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

			<?php endif; ?>
		</div>

	</div>


	<?php get_template_part('template_parts/saznaj-vise'); ?>


	<div class="projekt-wrap container clearfix">

		<div class="o-projektu-slika clearfix">
			<?php 

				$image = get_field('cilj_image');

				if( !empty($image) ): ?>

					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

			<?php endif; ?>
		</div>

		<div class="o-projektu-text clearfix">
			<h2><?php the_field('cilj_naslov'); ?></h2>
			<hr>
			<?php the_field('cilj_text') ?>
		</div>

	</div>












<?php get_footer(); ?>	