<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header(); ?>

<?php

global $product;

$sectionBgImage = get_field('page_intro_image', 16);
$sectionBgImageFull = $sectionBgImage['url'];

?>
<div id="homeContBoxOne" class="boxFull" style="background: url(<?php echo $sectionBgImageFull; ?>) no-repeat center right">
	<div class="boxContentSection">
		<div class="wrapper">
			<div class="contHalf boxContent">
				<h1 class="marginB40"><?php echo get_the_title(16); ?></h1>
					<?php
						$pageIntroContent = get_field('page_intro_content', 16);
						if ($pageIntroContent) {
							echo $pageIntroContent;
						}
					?>
				<?php if( get_field('page_intro_link', 16) ) { ?>
					<a class="marginT40 buttonMore" href="<?php the_field('page_intro_link'); ?>"><?php _e('Saznaj više', 'theme'); ?></a>
				<?php } ?>
			</div>
		</div>
	</div>
</div><!-- end #homeContBoxOne -->
<div class="entryHeader">
	<div class="wrapper">
		<?php if ( function_exists('yoast_breadcrumb') )  {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
	</div>
</div><!-- end entry header -->
<div class="productListing">
	<div class="clearfix wrapper">
		<div class="productCategories">
			<span class="prodCatTitle"><?php _e('Kategorije', 'tema'); ?></span>
			<?php

				wp_nav_menu( array(
				'menu' => "Category Shop Menu",
				'depth' => 3,
				'container' => false,
				'items_wrap' => '<ul class="main-menu">%3$s</ul>',
				'after' => '<button class="plusMinus"><span class="minus"></span><span class="plus"></span></button>'
				));

			?>
		</div>
		<div class="productList">
			<h2 class="productCategoryName">
				<?php

					// get category name
					$cate = get_queried_object();
					$cateName = $cate->name;
					echo $cateName;

				?>
				
			</h2>
			<?php if ( have_posts() ) : ?>

				<div class="clearfix sortPagPrdCount">
					<span><?php _e('Sortiraj', 'tema')?></span>
					<script type="text/javascript">

						// variables for output php strings on custom select
						var prikazi = "<?php _e('Prikaži', 'tema'); ?>";
						var rezultata = "<?php _e('rezultata', 'tema'); ?>";
						// prepend and append php string ( translatable ) to custom select
						
						jQuery(document).ready(function(){
							jQuery('.prodPagination div form').prepend('<span class="countString">'+prikazi+'<span>');
						jQuery('.prodPagination div form').append('<span class="countString">'+rezultata+'<span>');
						});
						
					
					</script>
					<?php
						/**
						 * woocommerce_before_shop_loop hook.
						 *
						 * @hooked woocommerce_result_count - 20
						 * @hooked woocommerce_catalog_ordering - 30
						 */
						do_action( 'woocommerce_before_shop_loop' );

						
						/**
						 * woocommerce_after_shop_loop hook.
						 *
						 * @hooked woocommerce_pagination - 10
						 */
						echo '<div class="prodPagination">';
							do_action( 'woocommerce_after_shop_loop' );
						echo '</div>';
					
					?>

				</div>

				<?php woocommerce_product_loop_start(); ?>

					<?php woocommerce_product_subcategories(); ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<?php wc_get_template_part( 'content', 'product' ); ?>

					<?php endwhile; // end of the loop. ?>

				<?php woocommerce_product_loop_end(); ?>

				

			<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

				<?php wc_get_template( 'loop/no-products-found.php' ); ?>

			<?php endif; ?>

			<div class="clearfix sortPagPrdCount">
				<span><?php _e('Sortiraj', 'tema')?></span>
				<script type="text/javascript">

					// variables for output php strings on custom select
					var prikazi = "<?php _e('Prikaži', 'tema'); ?>";
					var rezultata = "<?php _e('rezultata', 'tema'); ?>";
				
				</script>
				<?php
					/**
					 * woocommerce_before_shop_loop hook.
					 *
					 * @hooked woocommerce_result_count - 20
					 * @hooked woocommerce_catalog_ordering - 30
					 */
					do_action( 'woocommerce_before_shop_loop' );

					
					/**
					 * woocommerce_after_shop_loop hook.
					 *
					 * @hooked woocommerce_pagination - 10
					 */
					echo '<div class="prodPagination">';
						do_action( 'woocommerce_after_shop_loop' );
					echo '</div>';
				
				?>

			</div>

		<?php

			/**
			 * woocommerce_after_main_content hook.
			 *
			 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
			 */
			do_action( 'woocommerce_after_main_content' );

		?>
	</div>
</div>
<div class="entryHeader">
	<div class="wrapper">
		<h2><?php the_field('home__drugi_slider_title', 48); ?></h2>
	</div>
</div>
	<div id="homeContBoxThree" class="boxFull">
		<div class="swiper-container">
			<div class="swiper-wrapper">

			<?php if( have_rows('home__proizvodi_list', 48) ) : while( have_rows('home__proizvodi_list', 48) ) : the_row() ?>
				
				<?php
					
					// get product background image
					$productBgImage = get_sub_field('home__proizvod_background', 48);
					// get product link
					$proizvodLink = get_sub_field('home__proizvod_link', 48);

				?>

				<div class="swiper-slide sectionMiddle" style="background: url(<?php echo $productBgImage; ?>) no-repeat center left;">
					<div class="wrapper">
						<div class="contHalf floatR boxContent">

							<h1 class="marginB40"><?php the_sub_field('home__proizvod_title', 48); ?></h1>

							<?php the_sub_field('home__proizvod_content', 48); ?>

							<?php if( $proizvodLink ) { ?>

							<a class="buttonMore" href="<?php echo $proizvodLink->guid; ?>"><?php _e('Saznaj više', 'tema'); ?></a>

							<?php } ?>

						</div>
					</div>
				</div>

			<?php endwhile; endif; ?>

			</div><!-- end swiper-wrapper -->
			<div class="swiper-pagination"></div>
		</div><!-- end swiper-container -->
	</div><!-- end #homeContBoxThree -->
	<div id="homeContBoxLogos" class="boxFull">
		<div class="boxContentSection">
			<div class="wrapper">
				<div class="sectionMiddle">
					<div class="clearfix footerLogos">
						<p class="contHalf floatL">
							<img src="<?php bloginfo('template_url'); ?>/images/pantheon.jpg" alt="pantheon">
						</p>
						<p class="contHalf floatR">
							<img src="<?php bloginfo('template_url'); ?>/images/datalab.jpg" alt="datalab">
						</p>
					</div>
				</div>
			</div>
		</div>
	</div><!-- end #homeContBoxFour -->
<?php get_footer(); ?>
