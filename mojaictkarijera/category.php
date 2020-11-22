<?php get_header(); ?>







		<?php get_template_part('template_parts/banners-category'); ?>


		<div class="novosti-list-wrap container clearfix">

		
			
			
	

			<div class="novosti-list clearfix">	

				<?php 
					if ( have_posts() ) {
					while ( have_posts() ) {
					the_post(); ?>			 

					<div class="novosti-post clearfix">
						<div class="gray-filter"></div>

						<div class="post-image clearfix">
							  <?php if ( has_post_thumbnail() ) : ?>
								       <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail('post-thumbnail-small'); ?></a>
								    <?php else : ?>
								        <img src="http://placehold.it/380x270" />
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

						
						}
						}
						?>

					<div class="blog-navigation">
						<?php wp_pagenavi(); ?>
					</div>

			</div>


			<div class="widget-wrap clearfix">
				<?php get_sidebar('SidebaTwo'); ?>
			</div>


			
		</div>
							 

	</div>

	<div class="cal-img">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/calendar-small.png">
	</div>
							






<?php get_footer(); ?>	