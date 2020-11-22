<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see     http://docs.woothemes.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.3.8
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

wc_print_notices();

get_template_part('template_parts/breadcrumps');


do_action( 'woocommerce_before_cart' ); ?>


<div class="cart-background-wrap container clearfix">

	<div class="cart-wrapper container-small clearfix">
		<h2 class="page-title"><?php the_title(); ?></h2>
		<h5 class="cart-added-products"><?php _e('Dodani proizvodi','stribor_woocommerce')?></h5>

		<form action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">

		<?php do_action( 'woocommerce_before_cart_table' ); ?>

		<table class="shop_table shop_table_responsive cart" cellspacing="0">
			<thead>
				<tr>
					<th class="product-remove">&nbsp;</th>
					<th class="product-thumbnail">&nbsp;</th>
					<th class="product-name"><?php _e( 'Product', 'woocommerce' ); ?></th>
					<th class="product-price"><?php _e( 'Price', 'woocommerce' ); ?></th>
					<th class="product-quantity"><?php _e( 'Quantity', 'woocommerce' ); ?></th>
					<th class="product-subtotal"><?php _e( 'Total', 'woocommerce' ); ?></th>
				</tr>
			</thead>
			<tbody>
				<?php do_action( 'woocommerce_before_cart_contents' ); ?>

				<?php
				foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
					$_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
					$product_id   = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

					if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
						?>
						<tr class="<?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">


							<td class="product-thumbnail">
								<?php
									$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

									if ( ! $_product->is_visible() ) {
										echo $thumbnail;
									} else {
										printf( '<a href="%s">%s</a>', esc_url( $_product->get_permalink( $cart_item ) ), $thumbnail );
									}
								?>
							

								<div class="product-name" data-title="<?php _e( 'Product', 'woocommerce' ); ?>">
									<?php
										if ( ! $_product->is_visible() ) {
											echo apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key ) . '&nbsp;';
										} else {
											echo apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $_product->get_permalink( $cart_item ) ), $_product->get_title() ), $cart_item, $cart_item_key );
										}

										// Meta data
										echo WC()->cart->get_item_data( $cart_item );

										// Backorder notification
										if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
											echo '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>';
										}
									?>

									<?php

									$terms = get_the_terms( $product_id, 'product_cat' );
										foreach ($terms as $term) {
										   $product_cat = $term->name;
										}
										echo '<span class="posted_in product-cat-name">' . $product_cat . '</span>'; ?>
									  

										<span class="sku_wrapper"><span class="sku bold" itemprop="sku"><?php echo $_product->get_sku(); ?></span></span>
								</div>

							</td>

							<td class="product-remove">
								<?php
									echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf(
										'<a href="%s" class="icon-bin" title="%s" data-product_id="%s" data-product_sku="%s"></a>',
										esc_url( WC()->cart->get_remove_url( $cart_item_key ) ),
										__( 'Remove this item', 'woocommerce' ),
										esc_attr( $product_id ),
										esc_attr( $_product->get_sku() )
									), $cart_item_key );
								?>
							</td>


							<td class="price-request bold">
								<p>Cijena na upit</p>
							</td>
						</tr>
						<?php
					}
				}

				do_action( 'woocommerce_cart_contents' );
				?>
				<tr>
					<td colspan="6" class="actions">

						<?php if ( wc_coupons_enabled() ) { ?>
							<div class="coupon">

								<label for="coupon_code"><?php _e( 'Coupon', 'woocommerce' ); ?>:</label> <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="<?php esc_attr_e( 'Coupon code', 'woocommerce' ); ?>" /> <input type="submit" class="button" name="apply_coupon" value="<?php esc_attr_e( 'Apply Coupon', 'woocommerce' ); ?>" />

								<?php do_action( 'woocommerce_cart_coupon' ); ?>
							</div>
						<?php } ?>

						<input type="submit" class="button" name="update_cart" value="<?php esc_attr_e( 'Update Cart', 'woocommerce' ); ?>" />

						<?php do_action( 'woocommerce_cart_actions' ); ?>

						<?php wp_nonce_field( 'woocommerce-cart' ); ?>
					</td>
				</tr>

				<?php do_action( 'woocommerce_after_cart_contents' ); ?>
			</tbody>
		</table>

		<?php do_action( 'woocommerce_after_cart_table' ); ?>

		</form>


		<div class="checkout-link clearfix">
			<a href="<?php  if(ICL_LANGUAGE_CODE=='hr'): echo get_permalink( 168 ); else: echo get_permalink( 116 ); endif; ?>" class="submit button checkout wc-forward clearfix">Nastavi dalje</a>
		</div>

	</div>

	<div class="cart-collaterals">

		<?php do_action( 'woocommerce_cart_collaterals' ); ?>

	</div>

</div>


<?php do_action( 'woocommerce_after_cart' ); ?>
