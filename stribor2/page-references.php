<?php
    
    /* Template name: References */

?>




<?php get_header(); ?>





<!-- 	====================================================
        =================== REFERENCES =====================
        ====================================================     -->


<div class="reference-page-wrap container clearfix">
	<h4 class="reference-page-title bold"><?php _e('Reference','stribor_reference')?></h4>

		<div class="reference-list">

		<?php


				$args = array();
				$args['post_type'] = 'referenca';
				$args['order'] = 'DESC';
				$args['posts_per_page'] = 20;
				//$args['istaknuto'] = 'da';
				$query = new WP_Query($args);
				while($query->have_posts() ) : $query->the_post(); ?>



				<div class="reference-item clearfix">

						<div class="reference-image clearfix">

							<?php if ( has_post_thumbnail() ) : ?>

								<?php

								$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(), 'post-thumbnail');
			   					$full = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
			   					 ?>

							       <a href="<?php echo $full ['0']; ?>"><img src="<?php echo $thumbnail['0']; ?>" alt="<?php echo $thumbnail['0']; ?>"/></a>
								   <?php else : ?>
								        <img src="http://placehold.it/350x260" />

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

<!--  ========== END OF REFERENCES ============    -->





<?php get_footer(); ?>