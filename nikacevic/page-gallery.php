<?php
    
    /*Template name: Galerija */

?>

<?php get_header(); ?>




		<div class="gallery-banner-wrapper container-full clearfix">
			<div class="banner-text container">
				<h5> <?php echo get_the_title(); ?> </h5>
			</div>
		</div>


		<div class="slider-wrapper container-full clearfix">

			<div class="gallery-slider container clearfix">
				<div class="hr-tags container clearfix">

					<div class="hr-tag left"><hr></div>

					<div class="title-h2 left">
						<h2> 

						<?php the_field('podnaslov1'); ?>
						
						</h2>
					</div>

					<div class="hr-tag left"><hr></div>

				</div>
				
				<div class="container clearfix ">
					<div class="slider">
						<?php

						query_posts( array ( 'posts_per_page' => -1, 'post_type' => 'objekt', 'tip-objekta' => 'stambeni' ) ) ;
   						if ( have_posts() ) :

   							while ( have_posts() ) : the_post();   						
								$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(), 'custom-thumbnail');
			   					$full = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
			   					 ?>   				 						
				
						 
							<div class="slick-img">
								 <a href="<?php echo $full ['0']; ?>"><?php the_post_thumbnail('custom-thumbnail');?></a>
							</div>

							<?php 
   							endwhile;

   						endif; wp_reset_query(); ?>
						 
					</div>
				</div>
			</div>
		


			<div class="gallery-slider container clearfix">
				<div class="hr-tags container clearfix">

					<div class="hr-tag left"><hr></div>
					
					<div class="title-h2 left">
						<h2><?php the_field('podnaslov2'); ?> </h2>
					</div>

					<div class="hr-tag left"><hr></div>

				</div>


				<div class="container clearfix ">
					<div class="slider">
						<?php

						query_posts( array ( 'posts_per_page' => -1, 'post_type' => 'objekt', 'tip-objekta' => 'javni' ) ) ;
   						if ( have_posts() ) :

   							while ( have_posts() ) : the_post();   						
								$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(), 'custom-thumbnail');
			   					$full = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
			   					 ?>   				 						
				
						 
							<div class="slick-img">
								 <a href="<?php echo $full ['0']; ?>"><?php the_post_thumbnail('custom-thumbnail');?></a>
							</div>

							<?php 
   							endwhile;

   						endif; wp_reset_query(); ?>
						 
					</div>
				</div>
			</div>




			<div class="gallery-slider container clearfix">
				<div class="hr-tags container clearfix">

					<div class="hr-tag left"><hr></div>
					
					<div class="title-h2 left">
						<h2> <?php the_field('podnaslov3'); ?> </h2>
					</div>

					<div class="hr-tag left"><hr></div>

				</div>

				<div class="container clearfix ">
					<div class="slider">
						<?php

						query_posts( array ( 'posts_per_page' => -1, 'post_type' => 'objekt', 'tip-objekta' => 'gospodarski' ) ) ;
   						if ( have_posts() ) :

   							while ( have_posts() ) : the_post(); 

				
						 
							$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(), 'custom-thumbnail');
			   					$full = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
			   					 ?>   				 						
				
						 
							<div class="slick-img">
								 <a href="<?php echo $full ['0']; ?>"><?php the_post_thumbnail('custom-thumbnail');?></a>
							</div>


							<?php 
   							endwhile;

   						endif; wp_reset_query(); ?>
						 
					</div>
				</div>
			</div>




			<div class="gallery-slider container clearfix">
				<div class="hr-tags container clearfix">

					<div class="hr-tag left"><hr></div>
					
					<div class="title-h2 left">
						<h2><?php the_field('podnaslov4'); ?> </h2>
					</div>

					<div class="hr-tag left"><hr></div>

				</div>

				<div class="container clearfix ">
					<div class="slider">
						<?php

						query_posts( array ( 'posts_per_page' => -1, 'post_type' => 'objekt', 'tip-objekta' => 'ostali' ) ) ;
   						if ( have_posts() ) :

   							while ( have_posts() ) : the_post();   
   							$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(), 'custom-thumbnail');
			   					$full = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
			   					 ?> 						
							 						
				
						 
							<div class="slick-img">
								 <a href="<?php echo $full ['0']; ?>"><?php the_post_thumbnail('custom-thumbnail');?></a>
							</div>


							<?php 
   							endwhile;

   						endif; wp_reset_query(); ?>
						 
					</div>
				</div>

			</div>

		</div>















<?php get_footer(); ?>