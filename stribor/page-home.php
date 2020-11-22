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
								<div class="sign-up-background"></div> 
								<a class="vise" href="<?php echo get_permalink( 114 ); ?>"><?php _e('Vidi Proizvode', 'stribor_home') ?></a>
							</div>

						</div>

							<div class="kids-left clearfix">
								<div class="kids green clearfix"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/kid-green.png"></div>
								<div class="kids kids-white clearfix"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/kid-white.png"></div>
							</div>

							<div class="kids-right clearfix">
								<div class="kids orange clearfix"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/kid-orange.png"></div>
								<div class="kids kids-red clearfix"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/kid-red.png"></div>
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
        =============== CATEGORY LIST ======================
        ====================================================     -->


<?php get_template_part('template_parts/cat-list'); ?>





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

								<?php

								$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(), 'post-thumbnail');
			   					$full = wp_get_attachment_image_src( get_post_thumbnail_id(), 'reference-popup');
			   					 ?>

			   					 <div class="view-more clearfix"><a href="<?php echo $full ['0']; ?>"><span class="icon-search border"></span></a>
	                        	</div>

							       <img src="<?php echo $thumbnail['0']; ?>" alt="<?php echo $thumbnail['0']; ?>"/>
								   <?php else : ?>
								        <img src="http://placehold.it/350x260" />

						   	<?php endif; ?>

						  </div>


						  <div class="reference-title clearfix">

						  <h5><?php the_title(); ?></h5>

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


				/*$meta_query   = WC()->query->get_meta_query();
				$meta_query[] = array(
				    'key'   => '_featured',
				    'value' => 'yes'
				);*/
				$args = array();
					$args['post_type'] = 'product'; 
					$args['orderby'] = 'date';
					$args['meta_key'] = '_featured';
					$args['meta_value'] = 'yes';
					$args['posts_per_page'] = 9;
					$featured_query = new WP_Query($args);
					while($featured_query->have_posts() ) : $featured_query->the_post(); ?>

				<?php

				$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>


				<li class="single-related clearfix">

					<div class="featured-item clearfix">	

						<div class="featured-image clearfix" style="background: url('<?php echo $feat_image; ?>') no-repeat center center; background-size: contain;">

						</div>

						<div class="item-description clearfix">

							<a href="<?php echo get_permalink(); ?>" class="clearfix"><h5 class="bold related-title"><?php the_title(); ?></h5></a>

							<a href="<?php echo get_permalink(); ?>" class="clearfix"><h5 class="view-details single-link bold"><?php _e('Detaljnije','stribor_home'); ?></h5></a>

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

			<?php 

			$bg_image = get_field('video_background');

			if( !empty($image) ):

			?>

				<div class="video-play clearfix" style="background: rgba(20, 20, 20, 0.3) url('<?php echo $bg_image ?>') no-repeat center center;">
					<a id="play-video" href="#"><span class="icon-triangle-right border"></span></a>
				</div>

			


		
			 	<?php

				$iframe = get_field('featured_video');


					// use preg_match to find iframe src
					preg_match('/src="(.+?)"/', $iframe, $matches);
					$src = $matches[1];


					// add extra params to iframe src
					$params = array(
					    'controls'    => 1,
					    'hd'        => 1,
					    'autohide'    => 1,
					    'showinfo' => 0
					);

					$new_src = add_query_arg($params, $src);

					$iframe = str_replace($src, $new_src, $iframe);


					// add extra attributes to iframe html
					$attributes = 'frameborder="0" id="video"';

					$iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);


					// echo $iframe
					echo $iframe; ?>

				<?php endif; ?>

		</div>


</div>











<?php get_footer(); ?>




