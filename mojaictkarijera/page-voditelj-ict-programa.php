<?php get_header(); ?>


<?php
    
    /*Template name: Voditelj ICT programa */

?>

		<div class="banner-program-single">
			<?php get_template_part('template_parts/banners-program-single'); ?>
		</div>


		<div class="program-single-wrap container clearfix">
			<h2> <?php the_field('program_naslov') ?></h2>
			<hr>


					<div class="slider-color-ict">
						<?php get_template_part('template_parts/program-single-info'); ?>
					</div>

						

					<div class="sidebar-wrap clearfix">

							<?php get_template_part('template_parts/program-single-sidebar'); ?>

							<div class="category-single-wrap clearfix">
								<div class="cat-image-web clearfix">
									<?php 

										$image = get_field('web_developer_image', 11);

										if( !empty($image) ): ?>

											<img src="<?php echo $image['sizes']['programi-image']; ?>" alt="<?php echo $image['alt']; ?>" />

									<?php endif; ?>
								</div>

								<div class="cat-text clearfix">
								<a href="<?php echo get_permalink( 219 ); ?>"><h2><?php the_field('web_developer_naslov', 11) ?></h2></a>

								<?php if( have_rows('web_repeater', 11) ):  ?>

										<ul>
										
											<?php while( have_rows('web_repeater', 11) ): the_row(); 
											$image = get_sub_field('web_repeater_image', 11); ?>

											<li>
												<img src="<?php echo $image['sizes']['programi-image']; ?>" alt="<?php echo $image['alt'] ?>" />
												<?php the_sub_field('web_repeater_text', 11); ?>
											</li>

											<?php 
				   						endwhile; ?>

				   						</ul>

				   						<?php

				   						endif;
									?>	

									<?php the_field('web_developer_text', 11) ?>
								</div>
							</div>

					</div>

					<div class="cal-img">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/calendar-small.png">
					</div>

		</div>






<?php get_footer(); ?>	