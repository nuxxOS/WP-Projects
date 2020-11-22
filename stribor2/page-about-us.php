<?php
    
    /* Template name: About us */

?>




<?php get_header(); ?>




<!--	===============================================
     	================== ABOUT US ===================
        ===============================================     -->


<div class="about-us-wrap container clearfix">

	<div class="about-us-content-wrap container-small clearfix">
		<h2 class="page-title"><?php _e('O nama','stribor_o_nama')?></h2>

			<div class="about-us-content clearfix">
				<?php the_content() ?>
			</div>

			<div class="about-us-list clearfix">

				<?php


				$args = array();
				$args['post_type'] = 'objava-o-nama';
				$args['order'] = 'DESC';
				$args['posts_per_page'] = 6;
				$query = new WP_Query($args);
				while($query->have_posts() ) : $query->the_post(); ?>



					<div class="about-item clearfix">

						<div class="about-image clearfix">

							<?php if ( has_post_thumbnail() ) : ?>

							       <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail('thumbnail-small'); ?></a>
								   <?php else : ?>
								        <img src="http://placehold.it/380x260" />

						   <?php endif; ?>

						  </div>


						  <div class="about-title clearfix">

						  	<a href="<?php echo get_permalink(); ?>"><h5><?php the_title(); ?></h5></a>

						  </div>

					</div>

					<?php 

					endwhile ; wp_reset_postdata(); ?>


			</div>


			<div class="about-us-info clearfix">
				<?php the_field('o_nama_wysi') ?>
			</div>


	</div>

</div>





<!-- 	====================================================
        =============== PRODUCTS LIST ======================
        ====================================================     -->


<?php get_template_part('template_parts/product-list'); ?>





<?php get_footer(); ?>

