<?php
	
	/*
	Template Name: Dodatna rješenja
	*/

?>

<?php get_header(); ?>

	<?php

	global $product;

	$sectionBgImage = get_field('page_intro_image');
	$sectionBgImageFull = $sectionBgImage['url'];

	?>
	<div id="homeContBoxOne" class="boxFull" style="background: url(<?php echo $sectionBgImageFull; ?>) no-repeat center right">
		<div class="boxContentSection">
			<div class="wrapper">
				<div class="contHalf boxContent">
					<h1 class="marginB40"><?php the_title(); ?></h1>
						<?php
							$pageIntroContent = get_field('page_intro_content');
							if ($pageIntroContent) {
								echo $pageIntroContent;
							}
						?>
					<?php if( get_field('page_intro_link') ) { ?>
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
	<div class="productCategoriesWrap">
		<div class="wrapper">
			<div class="productCategories">
				<?php echo do_shortcode('[product_categories]'); ?>
			</div>
			<div class="productList">
				<?php echo do_shortcode('[products]'); ?>
			</div>
		</div>
	</div>
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