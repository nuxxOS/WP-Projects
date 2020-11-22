<?php
    
    /*Template name: O Nama */

?>

<?php get_header(); ?>



		<div class="about-banner-wrapper container-full clearfix">
			<div class="banner-text container">
				<h5> <?php echo get_the_title(); ?> </h5>
			</div>
		</div>

		<div class="about-wrap container clearfix">

			<div class="about-picture clearfix">
				<?php 

				$image = get_field('about_image');

				if( !empty($image) ): ?>

					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

				<?php endif; ?>

			</div>

			<div class="about-text clearfix">
				<?php the_field('about_sidetext'); ?>
			</div>

		</div>


		<div class="about-years-wrap container clearfix">
			<div class="about-checkmark">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/check.png">
			</div>

			<div class="about-years-text">
				<p><?php the_field('about_text'); ?></p>
			</div>
		</div>


		<div class="radovi-wrap2 container-full clearfix">
			<h3><?php the_field('about_objekti_naslov'); ?></h3>

			<div class="hr-tags container clearfix">
				<div class="hr-tag left">
					<hr>
				</div>

				<div class="title-h2 left">
					<h2><?php the_field('about_objekti_podnaslov'); ?></h2>
				</div>

				<div class="hr-tag left">
					<hr>
				</div>
			</div>

			<div class="gradnja container clearfix">

					<?php if( have_rows('about_repeater') ):   ?>


					<?php while( have_rows('about_repeater') ): the_row(); 
					$image = get_sub_field('repeater_image'); ?>

					<div class="gradnja-radovi">
						<img src="<?php echo $image['sizes']['home-objekti']; ?>" alt="<?php echo $image['alt'] ?>" />
						<h4><?php the_sub_field('repeater_text')?> </h4>	
						<p><?php the_sub_field('repeater_textarea')?></p>
					</div>

					<?php 
   						endwhile;

   						endif;
					?>	
			
			</div>

		</div>






<?php get_footer(); ?>