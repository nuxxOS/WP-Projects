<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
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
 * @version     1.6.4
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
	<div class="singleProductWrap">
		<div class="wrapper clearfix">
			<div class="singleProductText">
				<h2 class="singleProductTitle">

					<?php the_title(); ?>
					
				</h2>
				<div class="singleProductContent">

					<?php the_content(); ?>

				</div>
				<div class="productPrice">
					<h3><?php _e('Cijena', 'tema'); ?></h3>
					<p><span><?php echo $product->get_price_html(); ?></span> <?php _e('za pojedinačnu banku', 'tema') ?></p>
					<span> (<?php _e('PDV nije uključen u cijenu', 'tema') ?>)</span>
				</div><!-- end product price -->
				<div class="productBanks">
					<h3>
						<?php _e('Banka', 'tema'); ?>
						<span>(<?php _e('odaberite jednu ili više banki', 'tema') ?>)</span>
					</h3>
					<p>
						<?php



							if( have_rows('banke') ) : while( have_rows('banke') ) : the_row()

						?>
							<p class="bankNameItem">
								<input name="ime_banke" type="checkbox">
								<label><?php the_sub_field('ime_banke'); ?></label>
							</p>

						<?php

							endwhile; endif;

						?>
					</p>
				</div><!-- end productBanks -->
				<div class="productLicence">
					<h3>
						<?php _e('Broj licenci', 'tema'); ?>
					</h3>
					<p>
						<?php

							if( have_rows('broj_licenci') ) : while( have_rows('broj_licenci') ) : the_row()

						?>
							<p class="licenceNameItem">
								<input name="naziv_licence" type="checkbox">
								<label><?php the_sub_field('naziv_licence'); ?></label>
							</p>

						<?php

							endwhile; endif;

						?>
					</p>
				</div><!-- end productlicence -->
				<div class="productSolution">
					<h3>
						<?php _e('Instalacija rješenja', 'tema'); ?>
					</h3>
					<p>
						<?php

							if( have_rows('instalacija_rjesenja') ) : while( have_rows('instalacija_rjesenja') ) : the_row()

						?>
							<p class="solutionNameItem">

								<input name="naziv_rjesenja" type="checkbox">
								<label><?php the_sub_field('naziv_rjesenja'); ?></label>

							</p>

						<?php

							endwhile; endif;

						?>
					</p>
				</div><!-- end prouct solution -->
				<div class="productRefresh">
					<h3>
						<?php _e('Osvježavanje', 'tema'); ?>
					</h3>
					<p>
						<?php

							if( have_rows('osvjezavanje') ) : while( have_rows('osvjezavanje') ) : the_row()

						?>
							<p class="refreshNameItem">
								<input name="naziv_osvjezavanja" type="checkbox">
								<label><?php the_sub_field('naziv_osvjezavanja'); ?></label>
							</p>

						<?php

							endwhile; endif;

						?>
					</p>
				</div><!-- end productRefresh -->
				<div class="productInfo">

					<div class="summary entry-summary">
					
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

						

					</div><!-- .summary -->

				</div><!-- end product info -->
			</div><!-- end single product text -->
			<div class="singleProductImages">
				<div class="singleProductContent">
					<!-- Swiper -->
				    <div class="swiper-container gallery-top">
				        <div class="swiper-wrapper">

				        	<?php

				        		$productGallImgs = $product->get_gallery_attachment_ids();


				        		foreach( $productGallImgs as $productGallImg ) 
				        		{

				        			$image_link = $image_link = wp_get_attachment_url( $productGallImg )

				        	?>
				        		 
				        		  <div class="swiper-slide"><img src="<?php echo $image_link; ?>"></div>

				        	<?php 

				        		}

				        	?>
				            
				        </div>
				    </div>
				    <div class="swiper-container gallery-thumbs">
				        <div class="swiper-wrapper">
				        	<?php

				        		$productGallImgs = $product->get_gallery_attachment_ids();


				        		foreach( $productGallImgs as $productGallImg ) 
				        		{

				        			$image_link = $image_link = wp_get_attachment_url( $productGallImg )

				        	?>
				        		 
				        		  <div class="swiper-slide"><img src="<?php echo $image_link; ?>"></div>

				        	<?php 

				        		}

				        	?>
				        </div>
				        <!-- Add Arrows -->
				        <div class="swiper-button-next icon-chevron-down"></div>
				        <div class="swiper-button-prev icon-chevron-down"></div>
				    </div><!-- end swiper-container gallery-top -->
				    <div class="productVideoContent">
				    	<p class="videoHeader">
				    		<span class="videoIco"></span>
				    		<span class="videoText">Video</span>
				    	</p>
				    	<?php

				    		$videoLink = get_field('product_video');
				    		$videoLinkid = explode("?v=", $videoLink);

				    	?>
				    	<a class="videoLink" href="<?php the_field('product_video'); ?>"><img src="http://img.youtube.com/vi/<?php echo $videoLinkid[1]; ?>/0.jpg" /></a>

				    	<p class="aboutProduct">
				    		<span>
				    			<span><?php _e('Kategorija', 'tema'); ?></span>
				    			<?php
					    			$prodCats = $product->get_categories();
					    			echo $prodCats;
					    			

				    			?>
				    		</span>
				    		<span>
				    			<?php _e('Vrsta proizvoda', 'tema'); ?>
				    			<?php ?>
				    		</span>
				    	</p>
				    	
				    </div>
				</div><!-- single product content -->
			</div><!-- single product images -->
		</div>
	</div><!-- single product wrap -->
	<div id="homeContBoxTwo" class="boxFull">
		<div class="boxContentSection">
			<div class="wrapper">
				<div class="sectionTop marginB20">
					<h2 class="borderBotLight paddingB20"><?php _e('Slična rješenja', 'tema'); ?></h2>
				</div>
				<div class="sectionMiddle clearfix">
					
					<!-- Slider main container -->
					<div class="swiper-container">
					    <!-- Additional required wrapper -->
					    <div class="swiper-wrapper">
					        <!-- Slides -->
					        <?php

					        	$args = array (

					        		'post_type' => 'product',
					        		'post_per_page' => -1

					        		);

					        	$productQuery = new WP_Query( $args );

					        ?>

					        <?php if( $productQuery->have_posts() ) : while ( $productQuery->have_posts() ) : $productQuery->the_post() ?>

					        <div class="swiper-slide">
					        	<div class="sliderItem">
					        		<a href="<?php the_permalink(); ?>">
						        		<img src="<?php bloginfo('template_url'); ?>/images/sliderImage.jpg" alt="">
						        		<h3><?php the_title() ;?></h3>
						        		<span><?php echo $product->get_price_html(); ?></span>
						        	</a>
					        	</div><!-- end slider item -->
					        </div><!-- end swiper slide -->

					        <?php endwhile; endif; wp_reset_query(); ?>
					    </div>
					    
					    <!-- If we need navigation buttons -->
					    <div class="swiper-button-prev icon-chevron-down"></div>
					    <div class="swiper-button-next icon-chevron-down"></div>
					</div><!-- end swipe container -->
				</div>
			</div>
		</div>
	</div><!-- end #homeContBoxTwo -->
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
