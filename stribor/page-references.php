<?php
    
    /* Template name: References */

?>




<?php get_header(); ?>





<?php get_template_part('template_parts/breadcrumps'); ?>




<!-- 	====================================================
        =================== REFERENCES =====================
        ====================================================     -->


<div class="reference-page-wrap container clearfix">
	<h4 class="reference-page-title bold"><?php _e('Reference','stribor_reference')?></h4>

		<div class="reference-list clearfix">

		<?php
			$page = get_query_var( 'paged' );
			$args = array();
			$args['post_type'] = 'referenca';
			$args['order'] = 'DESC';
			$args['posts_per_page'] = 20;
			$args['paged'] = $page;
			//$args['istaknuto'] = 'da';
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

			<div class="blog-navigation clearfix">
				<?php wp_pagenavi(array('query' => $query)); ?>
			</div>

		</div>



</div>

<!--  ========== END OF REFERENCES ============    -->





<?php get_footer(); ?>