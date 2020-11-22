<?php get_header(); ?>


<?php
    
    /*Template name: Home */

?>




	<div class="home-slider-wrapper container-full clearfix">


		<div id="banner-slider" class="flexslider clearfix">
			<?php if( have_rows('banner_repeater') ):  ?>
				<ul class="slides">

					<?php while( have_rows('banner_repeater') ): the_row(); 
					$image = get_sub_field('banner_repeater_image'); 
					$size = 'banner-image';?>

				    <li>
				    	<div class="slider-text-wrap">
							<div class="banner-text"> 
								<h1 class="white"><?php the_sub_field('banner_naslov'); ?></h1>
							</div>
								
							<div class="banner-text"> 
								<p><?php the_sub_field('banner_text'); ?></p>
							</div>

							<div class="banner-prijava"> 
								<a href="<?php echo get_permalink( 335 ); ?>">prijavi se</a>
							</div>

						</div>

				     	<img src="<?php echo $image['sizes'][$size]; ?>" alt="<?php echo $image['alt'] ?>" />
				    </li>

					<?php endwhile; ?>

				</ul>			  		
			
				
			<?php endif; ?>

		</div>

		

	</div>


	<div class="ulazak-u-it container clearfix">

		<h2> <?php the_field('ulazak_naslov');?> </h2>
		<hr>

			<div class="ulazak-features clearfix">

				<?php if( have_rows('features_repeater') ):  ?>

						<?php while( have_rows('features_repeater') ): the_row(); 
						$image = get_sub_field('feature_repeater_image'); ?>

							<div class="link-wrap clearfix">

							    <div class="link-single clearfix" style="border-color: <?php the_sub_field('feature_border_colorpick'); ?>">
							     	<img src="<?php echo $image['sizes']['link-image']; ?>" alt="<?php echo $image['alt'] ?>" />
							    </div>

							    <div class="text-single clearfix">
							    	<?php the_sub_field('feature_naziv'); ?>
							    </div>

							</div>


						<?php endwhile; ?>			  		
			
				<?php endif; ?>

			</div>


			<div class="ulazak-slika clearfix">
				<?php 

				$image = get_field('features_single_image');

				if( !empty($image) ): ?>

					<img src="<?php echo $image['sizes']['single-home-image']; ?>" alt="<?php echo $image['alt']; ?>" />

				<?php endif; ?>
			</div>

	</div>


	<?php get_template_part('template_parts/saznaj-vise'); ?>


	<div class="novosti-wrap container clearfix">
		<h2> <?php the_field('novosti_naslov');?> </h2>
		<hr>
		<p> <?php the_field('novosti_novo'); ?> </p>


		<div class="novosti-post-wrap container clearfix">

			
				<?php
						$args = array();
						$args['post_type'] = 'post';
						$args['order'] = 'DESC';
						$args['posts_per_page'] = 3;
						//$args['istaknuto'] = 'da';
						$query = new WP_Query($args);
						while($query->have_posts() ) : $query->the_post(); ?>

				
							 
							<div class="novosti-post clearfix">
								<div class="gray-filter"></div>

								<div class="post-image clearfix">
									 <?php if ( has_post_thumbnail() ) : ?>
								       <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail('post-thumbnail'); ?></a>
								    <?php else : ?>
								        <img src="http://placehold.it/380x320" />
								    <?php endif; ?>
									 <div class="icon-date">

									 	<span class="blog-calendar"><?php 

											$image = get_field('calendar_image', 6);

											if( !empty($image) ): ?>

												<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
												<?php endif; ?>
										</span>

									 	<span class="blog-date"><?php echo get_the_date('j. F Y.' ); ?></span>
									 </div>
								</div>



								<div class="post-text clearfix">
									<a href="<?php echo get_permalink(); ?>"><h4><?php the_title(); ?></h4></a>

									<?php

										$categories = get_the_category();
										$separator = ' ';
										$output = '';
										if ( ! empty( $categories ) ) {
										    foreach( $categories as $category ) {
										        $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
										    }
										    echo trim( $output, $separator );
										}


									?>
									<?php get_cat_name( $post ) ?>
									<p><?php echo excerpt(20);?></p>
								</div>

							</div>	

						<?php 

						endwhile ; wp_reset_postdata(); ?>
				

		</div>

	</div>



<?php get_footer(); ?>		