<?php
    
    /* Template name:  Usluge */

?>

<?php get_header(); ?>





		<div class="usluge-banner-wrapper container-full clearfix">
			<div class="banner-text container">
				<h5><?php echo get_the_title(); ?></h5>
			</div>
		</div>



		
		<div class="usluge-wrap container clearfix">

			<div class="slider-wrap left clearfix">

					<div class="main-slider left">
						<div id="slider" class="flexslider">
							<?php if( have_rows('repeater') ):  ?>
								<ul class="slides">

									<?php while( have_rows('repeater') ): the_row(); 
									$image = get_sub_field('image'); ?>

								    <li>
								     	<img src="<?php echo $image['sizes'] ['slider-image']; ?>" alt="<?php echo $image['alt'] ?>" />
								    </li>

									<?php endwhile; ?>

								</ul>			  		
							
								
							<?php endif; ?>		
							
						</div>
					</div>



			

					<div class="second-slider">
						<div id="carousel" class="flexslider left">
							<?php if( have_rows('repeater') ): ?>
								<ul class="slides">

									<?php while( have_rows('repeater') ): the_row(); 
									$image = get_sub_field('image'); ?>

								    <li>
								     	<img src="<?php echo $image['sizes'] ['slider-thumbnail']; ?>" alt="<?php echo $image['alt'] ?>" />
								    </li>

									<?php endwhile; ?>

								</ul>


							<?php endif; ?>	

						</div>
					</div>

			</div>



			<div class="usluge-text-wrap left clearfix">

				<div class="usluge-text">
					<?php the_field('usluge_wysywig'); ?>
				</div>
				
			</div>
				

		</div>
	





<?php get_footer(); ?>