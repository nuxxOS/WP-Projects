<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product, $woocommerce_loop;

if ( empty( $product ) || ! $product->exists() ) {
	return;
}

$related = $product->get_related( $posts_per_page );

if ( sizeof( $related ) === 0 ) return;

$args = apply_filters( 'woocommerce_related_products_args', array(
	'post_type'            => 'product',
	'ignore_sticky_posts'  => 1,
	'no_found_rows'        => 1,
	'posts_per_page'       => $posts_per_page,
	'orderby'              => $orderby,
	'post__in'             => $related,
	'post__not_in'         => array( $product->id )
) );

$products = new WP_Query( $args );

$woocommerce_loop['columns'] = $columns;

if ( $products->have_posts() ) : ?>

	<div class="related-products clearfix">

		<h3 class="page-subtitle bold"> <span class="red"><?php _e('Slični', 'stribor_single_product') ?></span> <?php _e('proizvodi', 'stribor_single_product'); ?></h3>


		<?php woocommerce_product_loop_start(); ?>

			<div id="related-slider" class="flexslider clearfix">

					<ul class="slides">

						<?php while ( $products->have_posts() ) : $products->the_post(); ?>

							<li class="single-related">	

								<?php wc_get_template_part( 'content', 'product' ); ?>

							</li>

						
						<?php endwhile; // end of the loop. ?>

					</ul>
			</div>

		<?php woocommerce_product_loop_end(); ?>

	</div>

<?php endif;

wp_reset_postdata();
