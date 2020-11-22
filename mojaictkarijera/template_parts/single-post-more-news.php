<div class="novosti-wrap clearfix">

	<?php
					if ( is_single() ) {
					  $categories = get_the_category();
					  if ($categories) {
					    foreach ($categories as $category) {
					      $cat = $category->cat_ID;
					      $args=array(
					        'cat' => $cat,
					        'post__not_in' => array($post->ID),
					        'posts_per_page'=>2,
					        'caller_get_posts'=>1
					      );
					      $my_query = null;
					      $my_query = new WP_Query($args);
					      if( $my_query->have_posts() ) {
					        echo '<h2>Više novosti iz kategorije '. $category->category_description . '</h2>'; echo '<hr>'; ?>



		<div class="novosti-post-wrap clearfix">

				<?php
				
					        while ($my_query->have_posts()) : $my_query->the_post(); ?>
					         
					        <div class="novosti-post clearfix">

								<div class="gray-filter"></div>

								<div class="post-image clearfix">
									 <?php if ( has_post_thumbnail() ) : ?>
								       <?php the_post_thumbnail('post-thumbnail'); ?>
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
									<a href="<?php echo get_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><h4><?php the_title(); ?></h4></a>

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
					        endwhile; ?> </div> 

					        <?php
					        
					      } //if ($my_query)


					    } //foreach ($categories
					  } //if ($categories)
					  wp_reset_query();  // Restore global post data stomped by the_post().
					} //if (is_single())
					?>



	</div>