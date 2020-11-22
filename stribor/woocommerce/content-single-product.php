<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
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

?>

<?php
	/**
	 * woocommerce_before_single_product hook.
	 *
	 * @hooked wc_print_notices - 10
	 */
	 do_action( 'woocommerce_before_single_product' );

	 if ( post_password_required() ) {
	 	echo get_the_password_form();
	 	return;
	 }
?>

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
		<h4 class="product-title"><?php the_title(); ?></h4>
	</div>

</div>


<div id="content" itemscope itemtype="<?php echo woocommerce_get_product_schema(); ?>" id="product-<?php the_ID(); ?>" <?php post_class('clearfix product-wrap'); ?>>


	<?php
		/**
		 * woocommerce_before_single_product_summary hook.
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
		do_action( 'woocommerce_before_single_product_summary' );
	?>

	<div class="product-description summary entry-summary clearfix">

		<?php
			/**
			 * woocommerce_single_product_summary hook.
			 *
			 * @hooked woocommerce_template_single_title - 5
			 * @hooked woocommerce_template_single_rating - 10
			 * @hooked woocommerce_template_single_price - 10
			 * @hooked woocommerce_template_single_excerpt - 20
			 * @hooked woocommerce_template_single_add_to_cart - 30
			 * @hooked woocommerce_template_single_meta - 40
			 * @hooked woocommerce_template_single_sharing - 50
			 */
			do_action( 'woocommerce_single_product_summary' );
		?>

		<?php if (is_user_logged_in()) : ?>

			<?php the_content(); ?>	

		<?php else : ?>	

			<?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ?>

		<?php endif; ?>

		<div class="price-request-single"><span class="red uppercase bold"><?php _e('Cijena na upit','stribor_single'); ?></span><span class="icon-info border"></span></div>

	</div><!-- .summary -->

	<div class="product-spec clearfix">
		<h5 class="product-cat-name"> <?php _e('Specifikacije','stribor_single_product'); ?> </h5>
		<hr>

	<?php 

		$height = get_field('visina');
		$dimensions = get_field('dimenzije');
		$lenght = get_field('duzina');
		$width = get_field('sirina');
		$material = get_field('materijal');

		if( !empty($height) )
			{ 
				echo '<p>' . 'Visina: &nbsp' . $height . '</p>'; 
			};


		if( !empty($dimensions) )
			{ 
				echo '<p>' . 'Dimenzije: &nbsp' . $dimensions . '</p>'; 
			};


		if( !empty($lenght) )
			{ 
				echo '<p>' . 'Dužina: &nbsp' . $lenght . '</p>'; 
			};


		if( !empty($width) )
			{ 
				echo '<p>' . 'Širina: &nbsp' . $width . '</p>'; 
			};


		if( !empty($material) )
			{ 
				echo '<p>' . 'Materijal: &nbsp' . $material . '</p>'; 
			};

		?>

	<?php
		/**
		 * woocommerce_after_single_product_summary hook.
		 *
		 * @hooked woocommerce_output_product_data_tabs - 10
		 * @hooked woocommerce_upsell_display - 15
		 * @hooked woocommerce_output_related_products - 20
		 */
		do_action( 'woocommerce_after_single_product_summary' );
	?>

	<meta itemprop="url" content="<?php the_permalink(); ?>" />

	<hr>

	<?php if (is_user_logged_in()) : ?>

		<div class="product-files clearfix">

			<?php if( have_rows('files_repeater') ):  ?>

				<ul>

					<?php while( have_rows('files_repeater') ): the_row(); 
					$file = get_sub_field('repeater_file'); ?>
					
					<li>
						<?php if( $file ): ?>
	
							<a href="<?php echo $file['url']; ?>"><?php echo $file['filename']; ?></a>

						<?php endif; ?>
					</li>

					<?php endwhile; ?>

				</ul>

			<?php endif; ?>


		</div>




		<?php else : ?>	

	<?php endif; ?>

		


	</div>


</div><!-- #product-<?php the_ID(); ?> -->


<?php do_action( 'woocommerce_after_single_product' ); ?>
