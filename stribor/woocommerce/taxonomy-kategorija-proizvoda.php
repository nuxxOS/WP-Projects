/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>



	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

		<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>

			<?php if (is_shop()): ?> 
				<div class="prod-breadcrump clearfix">

					<div class="cat-title clearfix">
						<h4><?php _e('Kategorije','stribor_proizvodi'); ?></h4>

						<div class="cat-menu clearfix">

							<?php 
				               	$taxonomyName = "product_cat";
								$parent_terms = get_terms($taxonomyName, array('parent' => 0, 'orderby' => 'slug', 'hide_empty' => false));

								echo '<ul class="menu">';

									foreach ($parent_terms as $pterm) {

									$terms = get_terms($taxonomyName, array('parent' => $pterm->term_id, 'orderby' => 'slug', 'hide_empty' => false));
									$image = get_field('cat_image', $pterm);
									$term_link_cat = get_term_link( $pterm ); ?>


									<li class="main-menu-item">

										<?php echo '<a href="' . esc_url( $term_link_cat ) . '">' . $pterm->name . '</a>'; ?>

										<ul class="sub-menu">
											<ul class="sub-menu-list">

											<?php 

											foreach ($terms as $term) {

												$child_link = get_term_link($term, $taxonomyName);
												
												echo '<li>' . '<a href="' . $child_link . '" . class="main-cat-link">' . $term->name . '</a></li>'; 
											} 

											?> 

											</ul>

										<div class="cat-menu-image clearfix">

											<?php 

												if( !empty($image) ): ?>

												<?php

												$size = 'menu-image';
												$thumb = $image['sizes'][ $size ]; ?>

													<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>"/>

											<?php endif; ?>

										</div>

										

										</ul> 

									</li>
									
										<?php

										} 

								echo '</ul>'; ?>
						</div>

					</div>


					<div class="product-title clearfix">
						<h4><?php _e('Proizvodi','stribor_proizvodi'); ?></h4>
					</div>

				</div>
			



				<?php else : ?>


				<div class="prod-breadcrump clearfix">

					<div class="cat-title clearfix">
						<h4><?php _e('Kategorije','stribor_proizvodi'); ?></h4>

							<div class="cat-menu clearfix">

							<?php 
				               	$taxonomyName = "product_cat";
								$parent_terms = get_terms($taxonomyName, array('parent' => 0, 'orderby' => 'slug', 'hide_empty' => false));

								echo '<ul class="menu">';

									foreach ($parent_terms as $pterm) {

									$terms = get_terms($taxonomyName, array('parent' => $pterm->term_id, 'orderby' => 'slug', 'hide_empty' => false));
									$image = get_field('cat_image', $pterm);
									$term_link_cat = get_term_link( $pterm ); ?>


									<li class="main-menu-item">

										<?php echo '<a href="' . esc_url( $term_link_cat ) . '">' . $pterm->name . '</a>'; ?>

										<ul class="sub-menu">
											<ul class="sub-menu-list">

											<?php 

											foreach ($terms as $term) {

												$child_link = get_term_link($term, $taxonomyName);
												
												echo '<li>' . '<a href="' . $child_link . '" . class="main-cat-link">' . $term->name . '</a></li>'; 
											} 

											?> 

											</ul>

										<div class="cat-menu-image clearfix">

											<?php 

												if( !empty($image) ): ?>

												<?php

												$size = 'menu-image';
												$thumb = $image['sizes'][ $size ]; ?>

													<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>"/>

											<?php endif; ?>

										</div>

										

										</ul> 

									</li>
									
										<?php

										} 

								echo '</ul>'; ?>
						</div>
										
					</div>
	

					<div class="product-title clearfix">
						<h4 class="product-title"><?php woocommerce_page_title(); ?></h4>
					</div>

				</div>

				<div class="cat-menu-list container clearfix">
							

	               	<?php
	               		$taxonomy_name = 'product_cat';			               			         							
						$current_term = get_queried_object()->term_id;
						$term_children = get_term_children($current_term, $taxonomy_name); ?>
						
							<?php 

								foreach ($term_children as $child) {
									
									$term = get_term_by('id', $child, $taxonomy_name); ?>

									<li class="sub-cat-menu">
										
										<span class="icon-chevron-right"></span><a href="<?php echo get_term_link( $term->slug, $taxonomy_name );?>"><?php echo $term->name;?></a>

									</li> <?php
								}

							?>								

		            </div>

			 		
			 
			<?php endif; ?>



		<?php endif; ?>



			

		<div class="before-list-content clearfix">
		
			<?php
				/**
				 * woocommerce_archive_description hook.
				 *
				 * @hooked woocommerce_taxonomy_archive_description - 10
				 * @hooked woocommerce_product_archive_description - 10
				 */
				do_action( 'woocommerce_archive_description' );
			?>



			<?php if ( have_posts() ) : ?>

				<?php
					/**
					 * woocommerce_before_shop_loop hook.
					 *
					 * @hooked woocommerce_result_count - 20
					 * @hooked woocommerce_catalog_ordering - 30
					 */
					do_action( 'woocommerce_before_shop_loop' );
				?>

		</div>

			<?php woocommerce_product_loop_start(); ?>

				<?php woocommerce_product_subcategories(); ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php wc_get_template_part( 'content', 'product' ); ?>

				<?php endwhile; // end of the loop. ?>

			<?php woocommerce_product_loop_end(); ?>



		<div class="before-list-content clearfix">

			<?php
				/**
				 * woocommerce_after_shop_loop hook.
				 *
				 * @hooked woocommerce_pagination - 10
				 */
				do_action( 'woocommerce_after_shop_loop' );
			?>

		</div>

		<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

			<?php wc_get_template( 'loop/no-products-found.php' ); ?>

		<?php endif; ?>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

	

<?php get_footer( 'shop' ); ?>
