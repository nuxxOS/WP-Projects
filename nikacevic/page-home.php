<?php get_header(); ?>


<?php
    
    /*Template name: Home */

?>




			
		<div class="slider-banner-wrapper container-full clearfix">
			<div class="slider-text">
				<div class="banner-text">
					<h5><?php the_field('ime_tvrtke'); ?></h5>
				</div>

				<div class="banner-text">
					<p><?php the_field('tvrtka_usluge_home'); ?></p>
				</div>
				<div class="banner-text">
					<span class="bold"><p><?php the_field('godina'); ?></p></span>
				</div>
			</div>

			<div id="banner-slider" class="flexslider">
				<?php if( have_rows('banner-repeater') ):  ?>
					<ul class="slides">

						<?php while( have_rows('banner-repeater') ): the_row(); 
						$image = get_sub_field('banner-img'); ?>

					    <li>
					     	<img src="<?php echo $image['sizes'] ['banner-image']; ?>" alt="<?php echo $image['alt'] ?>" />
					    </li>

						<?php endwhile; ?>

					</ul>			  		
				
					
				<?php endif; ?>		
				
			</div>
		</div>





		<div class="radovi-wrap1 container clearfix">
			<h2><?php the_field('home_objekti_naslov'); ?></h2>


				<div class="gradnja clearfix">

				<?php if( have_rows('home_repeater') ):   ?>


					<?php while( have_rows('home_repeater') ): the_row(); 
					$image = get_sub_field('repeater_image'); ?>

					<div class="gradnja-radovi">
						<img src="<?php echo $image['sizes']['home-objekti']; ?>" alt="<?php echo $image['alt'] ?>" />
						<h3><?php the_sub_field('repeater_text')?> </h5>	
						<p><?php the_sub_field('repeater_textarea')?></p>
					</div>

					<?php 
   						endwhile;

   						endif;
					?>	
					
				</div>

		</div>

		<div class="projekti-wrap container-full clearfix">
			<h2><?php the_field('projekti'); ?></h2>
				<div class="projekt-post container clearfix">

					<?php
								query_posts( array ( 'posts_per_page' => 9 , 'post_type' => 'objekt', 'tip-objekta' => 'naslovna' ) ) ;

		   						if ( have_posts() ) : ?>

			   					<?php while ( have_posts() ) : the_post();
			   					$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(), 'custom-thumbnail');
			   					$full = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
			   					 ?>   						
								 
								<div class="projekt">

									 <a href="<?php echo $full ['0']; ?>"><img src="<?php echo $thumbnail['0']; ?>" alt="<?php echo $thumbnail['0']; ?>"/></a>
								</div>	

							<?php 
   								endwhile; wp_reset_query();

   						endif;
						 ?>		

				</div>
				<div class="vise container"><a href="<?php echo get_permalink( 8 ); ?>"><?php the_field('vidi_sve'); ?></a></div>
		</div>






<?php get_footer(); ?>		