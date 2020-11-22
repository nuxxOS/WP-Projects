<?php get_header(); ?>



<?php get_template_part('template_parts/breadcrumps-search'); ?>


<div class="product-wrap container clearfix">

		<ul>

		<?php
			if ( have_posts() ): ?>

				<h2 class="search-result"><?php _e('Rezultati pretrage za','stribor'); ?> "<?php echo esc_html( get_search_query( false ) ); ?>"</h2>

				<?php
			
		        while ( have_posts() ) : the_post(); ?>



		        <li class="single-related">

					<div class="product clearfix">	

						<div class="product-image clearfix">
							<?php if ( has_post_thumbnail() ) : ?>

						       <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail('thumbnail-small'); ?></a>
							   <?php else : ?>
							        <img src="http://placehold.it/380x260" />

					   		<?php endif; ?>
						</div>

						<div class="item-description clearfix">

							<a href="<?php echo get_permalink(); ?>"><h5 class="bold"><?php the_title(); ?></h5></a>

							<?php

							$terms = get_the_terms( $product_id, 'product_cat' );
								foreach ($terms as $term) {
								   $product_cat = $term->name;
								}
								echo '<span class="posted_in product-cat-name">' . $product_cat . '</span>'; ?>
									  

							<a href="<?php echo get_permalink(); ?>"><h5 class="single-link bold"><?php _e('Detaljnije','stribor_home'); ?></h5></a>

						</div>


					</div>

				</li>

				         
				         


				         <?php 

				    	endwhile; ?>

				    	<?php 

				    	else:

				    		echo '<h2> Nema rezultata pretrage </h2>';  



					endif; ?>

			</ul>

</div>


<?php get_footer(); ?>