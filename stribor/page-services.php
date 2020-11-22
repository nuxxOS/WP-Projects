<?php
    
    /* Template name: Services */

?>




<?php get_header(); ?>





<?php get_template_part('template_parts/breadcrumps'); ?>





<!--	=================================================
     	==================== USLUGE =====================
        =================================================     -->


<div class="usluge-page-wrap container clearfix">

<div class="usluge-list-wrap container-small clearfix">
	<h2 class="page-title"><?php _e('Usluge','stribor_usluge')?></h2>

		<div class="usluge-list container-small clearfix">

		<?php


				$args = array();
				$args['post_type'] = 'usluga';
				$args['order'] = 'DESC';
				$args['posts_per_page'] = 6;
				//$args['istaknuto'] = 'da';
				$query = new WP_Query($args);
				while($query->have_posts() ) : $query->the_post(); ?>



				<div class="usluge-item clearfix">

						<div class="usluge-image clearfix">
							<div class="view-more clearfix"><a href="<?php echo get_permalink(); ?>"><span class="icon-search border">
							</div>

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

				endwhile ; wp_reset_postdata(); ?>


			</div>


	</div>

</div>





<!-- 	====================================================
        =============== CATEGORY LIST ======================
        ====================================================     -->


<?php get_template_part('template_parts/cat-list'); ?>




<?php get_footer(); ?>