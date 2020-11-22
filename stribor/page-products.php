<?php
    
    /* Template name: Products */

?>




<?php get_header(); ?>





<?php get_template_part('template_parts/breadcrumps'); ?>






<!-- 	====================================================
        ================== PRODUCTS PAGE ===================
        ====================================================     -->


<div class="product-list-wrap container clearfix">

	<div class="prod-breadcrump clearfix">

		<div class="cat-title clearfix">
			<h4><?php _e('Kategorije','stribor_proizvodi'); ?></h4>
		</div>

		<div class="product-title clearfix">
			<h4><?php _e('Proizvodi','stribor_proizvodi'); ?></h4>
		</div>

	</div>



	<div class="product-list clearfix">



	

		<?php

				$page = get_query_var( 'paged' );
				$args = array();
				$args['post_type'] = 'product';
				$args['posts_per_page'] = 4;
				$args['order'] = 'DESC';
				$args['paged'] = $page;
				//$args['istaknuto'] = 'da';
				$query = new WP_Query($args);
				while($query->have_posts() ) : $query->the_post(); ?>



				<?php

				 $img_url = $feat_image = wp_get_attachment_image_src( get_post_thumbnail_id( $query->post->ID ) );?>




					<div class="product-item clearfix">	

						<div class="product-image clearfix" style="background: url('<?php echo $feat_image[0]; ?>') no-repeat center center; background-size: contain;" data-id="<?php echo $query->post->ID; ?>">

						</div>

						<div class="item-description clearfix">

							<a href="<?php echo get_permalink(); ?>"><h5 class="bold"><?php the_title(); ?></h5></a>

							<a href=""><h5 class="single-link bold"><?php _e('Detaljnije','stribor_home'); ?></h5></a>

						</div>


					</div>


				<?php 

				endwhile ; wp_reset_postdata(); ?>

		
				<div class="blog-navigation">
					<?php wp_pagenavi(array('query' => $query)); ?>
				</div>


	</div>

</div>






<?php get_footer(); ?>