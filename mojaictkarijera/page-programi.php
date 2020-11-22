<?php get_header(); ?>


<?php
    
    /*Template name: Programi */

?>
		<?php get_template_part('template_parts/banners'); ?>


		<div class="programi-wrap container clearfix">

			<div class="category-single-wrap clearfix">
				<div class="cat-image-web clearfix">
					<?php 

						$image = get_field('web_developer_image');

						if( !empty($image) ): ?>

							<img src="<?php echo $image['sizes']['programi-image']; ?>" alt="<?php echo $image['alt']; ?>" />

					<?php endif; ?>
				</div>

				<div class="cat-text clearfix">
				<a href="<?php echo get_permalink( 219 ); ?>"><h2><?php the_field('web_developer_naslov') ?></h2></a>

				<?php if( have_rows('web_repeater') ):  ?>

						<ul>
						
							<?php while( have_rows('web_repeater') ): the_row(); 
							$image = get_sub_field('web_repeater_image'); ?>

							<li>
								<img src="<?php echo $image['sizes']['programi-image']; ?>" alt="<?php echo $image['alt'] ?>" />
								<?php the_sub_field('web_repeater_text'); ?>
							</li>

							<?php 
   						endwhile; ?>

   						</ul>

   						<?php

   						endif;
					?>	

					<?php the_field('web_developer_text') ?>
				</div>
			</div>

			<div class="category-single-wrap clearfix">
				<div class="cat-image-ict clearfix">
					<?php 

						$image = get_field('voditelj_image');

						if( !empty($image) ): ?>

							<img src="<?php echo $image['sizes']['programi-image']; ?>" alt="<?php echo $image['alt']; ?>" />

					<?php endif; ?>
				</div>

				<div class="cat-text clearfix">
					<a href="<?php echo get_permalink( 221 ); ?>"><h2><?php the_field('voditelj_naslov') ?></h2></a>

					<?php if( have_rows('voditelj_repeater') ):  ?>

						<ul>
						
							<?php while( have_rows('voditelj_repeater') ): the_row(); 
							$image = get_sub_field('voditelj_repeater_image'); ?>

							<li>
								<img src="<?php echo $image['url']; ?>" />
								<?php the_sub_field('voditelj_repeater_text'); ?>
							</li>

							<?php 
   						endwhile; ?>

   						</ul>

   						<?php

   						endif;
					?>	

					<?php the_field('voditelj_text') ?>
				</div>
			</div>


		</div>





		<div class="edukacija-wrap container-full clearfix" style="background: url(<?php the_field('edukacija_prijava_bg');?> ) center;">

			<div class="edukacija container clearfix">
				<div class="edukacija-text">
					<hr>
					 <p><?php the_field('edukacija_text'); ?></p>
				</div>

				<div class="prijava-button clearfix"> 
					<a href="<?php echo get_permalink( 335 ); ?>">prijavi se</a>
				</div>

			</div>

		</div>


		<div class="program-projekt-wrap container clearfix">
			<div class="o-projektu-text clearfix">
			<h2><?php the_field('projekt_naslov'); ?></h2>
			<hr>
			<?php the_field('projekt_text') ?>

				<div class="prijava-button clearfix"> 
					<a href="<?php echo get_permalink( 10 ); ?>">Više o projektu</a>
				</div>
		</div>

		<div class="o-projektu-slika clearfix">
			<?php 

				$image = get_field('programi_o_projektu_slika');

				if( !empty($image) ): ?>

					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

			<?php endif; ?>
		</div>

		</div>




<?php get_footer(); ?>	