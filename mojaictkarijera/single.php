<?php get_header(); ?>


<?php
    
    /*Template name: single */

?>

			<div class="banner-post-single clearfix">
				<?php get_template_part('template_parts/banners-post-single'); ?>
			</div>


	
			<div class="single-post-wrap container clearfix">

				<div class="post-content-wrap clearfix">
					<?php 

						while ( have_posts() ) : the_post(); ?>

						<div class="single-post-image clearfix">   							 	
					 		 <?php if ( has_post_thumbnail() ) : ?>
								       <?php the_post_thumbnail('post-thumbnail-big'); ?>
								    <?php else : ?>
								        <img src="http://placehold.it/790x445" />
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

					 	<div class="single-post-text clearfix">
							<a href="<?php echo get_permalink(); ?>"><h2 class="no-before"><?php the_title(); ?></h2></a>

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
							<div class="post-content-style clearfix">
								<?php the_content () ?>
							</div>
				

							<?php 
							endwhile;	?>

						</div>

						<div class="icon-wrap clearfix">

							<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" target="_blank"><span class="icon-facebook border"></span></a>

							<a href="https://twitter.com/share?url=[post-url]&text=<?php the_title(); ?> <?php the_permalink(); ?>&via=mojaICTkarijera&hashtags=[hashtags]" target="_blank"><span class="icon-twitter border"></span></a>

							<a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" target="_blank"><span class="icon-google border"></span></a>

							<a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink() ?>&title=<?php the_title(); ?>&summary=&source=<?php bloginfo('name'); ?>" target="_new"><span class="icon-linkedin2 border"></span></a>

						</div>


						<?php get_template_part('template_parts/single-post-more-news'); ?>
							
						
				</div>

				<div class="widget-wrap clearfix">
					<?php get_sidebar('SidebaTwo'); ?>
				</div>
	

				<div class="cal-img">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/calendar-small.png">
				</div>
     
		</div>


<?php get_footer(); ?>	