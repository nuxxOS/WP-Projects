<?php
    
    /* Template name: Home */

?>

<!--     =============== HOME PAGE CONENT ===============     -->


<?php get_header(); ?>







<!--	=================================================
     	================= BANNER SLIDER =================
        =================================================     -->


<div class="home-slider-wrapper container-full clearfix">


	<div id="home-slider" class="flexslider clearfix">

		<?php if( have_rows('banner_slider_repeater') ):  ?>
			<ul class="slides">

				<?php while( have_rows('banner_slider_repeater') ): the_row(); 
				$image = get_sub_field('banner_slider_image'); 
				$size = 'banner-image';?>

			    <li>

			    	<div class="gray-filter">

			    		<div class="slider-content">
			    			
							<h1 class="banner-title"><?php the_sub_field('banner_slider_naslov'); ?> </h1> 
								
							<p><?php the_sub_field('banner_slider_text'); ?></p>

							<div class="see-products clearfix"> 
								<a class="vise" href="<?php echo get_permalink(); ?>"><?php _e('Vidi Proizvode', 'stribor_home') ?></a>
							</div>

						</div>

					</div>

			     	<img src="<?php echo $image['sizes'][$size]; ?>" alt="<?php echo $image['alt'] ?>" />
			    </li>

				<?php endwhile; ?>

			</ul>			  		
		
			
		<?php endif; ?>

	</div>

</div>





<!-- 	====================================================
        =============== PRODUCTS LIST ======================
        ====================================================     -->


<?php get_template_part('template_parts/product-list'); ?>





<!-- 	====================================================
        =============== NEWEST REFERENCES ==================
        ====================================================     -->


<div class="reference-wrap container clearfix">
	<h3 class="page-subtitle bold"> <span class="red"><?php _e('Najnovije', 'stribor_home') ?></span> <?php _e('reference', 'stribor_home'); ?></h3>

		<div class="reference-list container clearfix">

			<?php


				$args = array();
				$args['post_type'] = 'referenca';
				$args['order'] = 'DESC';
				$args['posts_per_page'] = 5;
				$query = new WP_Query($args);
				while($query->have_posts() ) : $query->the_post(); ?>



					<div class="reference-item clearfix">

						<div class="reference-image clearfix">

							<?php if ( has_post_thumbnail() ) : ?>

							       <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail('post-thumbnail'); ?></a>
								   <?php else : ?>
								        <img src="http://placehold.it/380x320" />

						   <?php endif; ?>

						  </div>


						  <div class="reference-title clearfix">

						  	<a href="<?php echo get_permalink(); ?>"><h5><?php the_title(); ?></h5></a>

						  </div>

					</div>

					<?php 

					endwhile ; wp_reset_postdata(); ?>





		</div>

</div>





<!-- 	====================================================
        =============== FEATURED ITEMS =====================
        ====================================================     -->


<div class="featured-item-wrap container clearfix">
	<h3 class="page-subtitle bold"> <span class="red"><?php _e('Izdvojeni', 'stribor_home') ?></span> <?php _e('proizvodi', 'stribor_home'); ?></h3>

		<div id="featured-slider" class="flexslider container clearfix">

		<ul class="slides">

		<?php


				$args = array();
				$args['post_type'] = 'referenca';
				$args['posts_per_page'] = -1;
				//$args['istaknuto'] = 'da';
				$query = new WP_Query($args);
				while($query->have_posts() ) : $query->the_post(); ?>

				<?php

				$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>


				<li>

					<div class="featured-item clearfix">	

						<div class="featured-image clearfix" style="background: url('<?php echo $feat_image; ?>') no-repeat center center; background-size: contain;">

						</div>

						<div class="item-description clearfix">

							<a href="<?php echo get_permalink(); ?>"><h5 class="bold"><?php the_title(); ?></h5></a>

							<a href=""><h5 class="single-link bold"><?php _e('Detaljnije','stribor_home'); ?></h5></a>

						</div>


					</div>

				</li>


				<?php 

				endwhile ; wp_reset_postdata(); ?>

		</ul>

		</div>


</div>





<!-- 	====================================================
        =============== FEATURED VIDEO =====================
        ====================================================     -->


<div class="featured-video-wrap container clearfix">
	<h3 class="page-subtitle bold"> <span class="red"><?php _e('Video', 'stribor_home') ?></span> <?php _e('prezentacija','stribor_home'); ?></h3>

		<div class="featured-video clearfix">
		<a id="play-video" href="#">Play Video</a>
			 
			<iframe id="video" class="container" src="//www.youtube.com/embed/9B7te184ZpQ?rel=0" frameborder="0" allowfullscreen></iframe>
		</div>


</div>











<?php get_footer(); ?>




