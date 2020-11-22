<!-- 	====================================================
        =============== OTHER SERVICES =====================
        ====================================================     -->


<?php

	if ( is_single() ) {
	  
	      $args=array(
	      	'post_type' => 'usluga',
	        'post__not_in' => array($post->ID),
	        'order' => 'DESC',
	        'posts_per_page'=> 6,
	        'caller_get_posts'=>1
	      );
	      $my_query = null;
	      $my_query = new WP_Query($args);
	      if( $my_query->have_posts() ): ?>
	        <h2 class="page-title"><?php _e('Ostale usluge', 'stribor_usluge') ?></h2>; 



				<div class="usluge-list container-small clearfix">

					<?php
					
						while ($my_query->have_posts()) : $my_query->the_post(); ?>
						         
						    <div class="usluge-item clearfix">

								<div class="usluge-image clearfix">

									<?php if ( has_post_thumbnail() ) : ?>

								       <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail('thumbnail-small'); ?></a>

									   <?php else : ?>
									        <img src="http://placehold.it/380x260" />

							   		<?php endif; ?>

							    </div>


								<div class="usluge-title clearfix">

								  	<a href="<?php echo get_permalink(); ?>"><h5><?php the_title(); ?></h5></a>

								</div>

							</div>

						<?php 

						endwhile ; wp_reset_postdata(); 
					?>


				</div> 

	     
	        <?php

	        endif; ?>
	    

	<?php


	wp_reset_query();  // Restore global post data stomped by the_post().

	} //if (is_single())
?>

