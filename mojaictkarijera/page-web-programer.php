<?php get_header(); ?>


<?php
    
    /*Template name: Web programer */

?>




		<div class="banner-program-single">
		<?php get_template_part('template_parts/banners-program-single'); ?></div>

		<div class="program-single-wrap container clearfix">
			<h2> <?php the_field('program_naslov') ?></h2>
			<hr>


					<?php get_template_part('template_parts/program-single-info'); ?>

						

					<div class="sidebar-wrap clearfix">

							<?php get_template_part('template_parts/program-single-sidebar'); ?>


							<div class="category-single-wrap clearfix">
								<div class="cat-image-ict clearfix">
									<?php 

										$image = get_field('voditelj_image', 11);

										if( !empty($image) ): ?>

											<img src="<?php echo $image['sizes']['programi-image-sidebar']; ?>" alt="<?php echo $image['alt']; ?>" />

									<?php endif; ?>
								</div>

								<div class="cat-text clearfix">
									<a href="<?php echo get_permalink( 221 ); ?>"><h2><?php the_field('voditelj_naslov', 11) ?></h2></a>

									<?php if( have_rows('voditelj_repeater', 11) ):  ?>

										<ul>
										
											<?php while( have_rows('voditelj_repeater', 11) ): the_row(); 
											$image = get_sub_field('voditelj_repeater_image', 11); ?>

											<li>
												<img src="<?php echo $image['url']; ?>" />
												<?php the_sub_field('voditelj_repeater_text', 11); ?>
											</li>

											<?php 
				   						endwhile; ?>

				   						</ul>

				   						<?php

				   						endif;
									?>	

									<?php the_field('voditelj_text', 11) ?>
								</div>

								<div class="prijava-button container clearfix"> 
									<a href="<?php echo get_permalink( 221 ); ?>">Vidi program</a>
								</div>

							</div>


					</div>

			</div>

			<div class="cal-img">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/calendar-small.png">
			</div>

		








<?php get_footer(); ?>	