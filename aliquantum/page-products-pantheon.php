<?php 

/* Template name: Products Template - Pantheon */

?>

<?php get_header(); ?>
	<?php

	$sectionBgImage = get_field('page_intro_image');
	$sectionBgImageFull = $sectionBgImage['url'];

	?>
	<div id="homeContBoxOne" class="boxFull" style="background: url(<?php echo $sectionBgImageFull; ?>) no-repeat center right">
		<div class="boxContentSection">
			<div class="wrapper">
				<div class="contHalf boxContent introCont">
					<h1 class="marginB40">
						<?php the_title(); ?>
					</h1>
					<div class="marginB40">
						<?php
							$pageIntroContent = get_field('page_intro_content');
							if ($pageIntroContent) {
								echo $pageIntroContent;
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</div><!-- end #homeContBoxOne -->
	<div class="entryHeader">
		<div class="wrapper">
			<?php if ( function_exists('yoast_breadcrumb') )  {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
		</div>
	</div><!-- end entry header -->
	<!-- submenu -->
	<div class="clearfix productSubMenu">
		<div class="wrapper">
			<?php wp_nav_menu( array( 'menu' => 'product-menu' ) ); ?>
		</div>
	</div>
	<!-- end submenu -->
	<!-- content intro -->
	<div class="productChildIntroCont">
		<div class="wrapper">
			<h2 class="procudtChildIntroTitle"><?php the_field('intro_content__title'); ?></h2>
			<div class="productChildIntroContent"><?php the_field('intro_content__intro'); ?></div>
			<div class="productChildContent clearfix">
				<div class="productChildContentImage">
					<img src="<?php the_field('intro_content__content_image'); ?>" />
				</div>
				<div class="productChildContentText">
					<?php the_field('intro_content__content'); ?>
				</div>
			</div>
		</div>
	</div>
	<!-- end content intro -->

	<!-- start entry header of another section -->
	<div class="entryHeader">
		<div class="wrapper">
			<h2 class="alignL"><?php the_field('kvaliteta__title'); ?></h2>
		</div>
	</div>
	<!-- end entry header -->

	<!-- kvaliteta -->
	<?php $kvalitetaBgImage = get_field('kvaliteta__background_image'); ?>
	<div class="kvalitetaIntro" style="background: url(<?php echo $kvalitetaBgImage['url']; ?>) no-repeat center center;">
		<div class="wrapper clearfix">
			<?php if( have_rows('kvaliteta__intro') ) : while( have_rows('kvaliteta__intro') ) : the_row() ?>
				
					<div class="contHalf floatL kvalitetaIntroSection">
						<img src="<?php the_sub_field('kvaliteta__intro_slika'); ?>" />
						<?php the_sub_field('kvaliteta__intro_text'); ?>
					</div>
				
			<?php endwhile; endif; ?>
		</div>
	</div>

	<!-- kvaliteta content -->
	<div class="kvalitetaContent">
		<div class="wrapper clearfix fixBorder">
			<?php if( have_rows('kvaliteta__content') ) : while( have_rows('kvaliteta__content') ) : the_row() ?>
				
					<div class="contThird floatL kvalitetaContentSection">
						<h2><?php the_sub_field('kvaliteta__content_naslov'); ?></h2>
						<?php the_sub_field('kvaliteta__content_text'); ?>
					</div>
				
			<?php endwhile; endif; ?>
		</div>
	</div>
	<!-- end kvaliteta content -->

	<!-- kvaliteta programi -->
	<div class="kvalitetaPrograms">
		<div class="wrapper clearfix">
			<?php if( have_rows('kvaliteta__programi') ) : while( have_rows('kvaliteta__programi') ) : the_row() ?>
				
					<div class="floatL clearfix kvalitetaProgramSection">
						<img src="<?php the_sub_field('kvaliteta__programi_slika'); ?>" />
						<?php the_sub_field('kvaliteta__programi_text'); ?>
					</div>
				
			<?php endwhile; endif; ?>
		</div>
	</div>
	<!-- end kvaliteta programi -->

	<!-- end kvaiteta -->

	<!-- podrska -->

	<div class="supportSection" style="background-image: url(<?php the_field('podrska__slika'); ?>);background-repeat: no-repeat;">
		<div class="wrapper clearfix">
			<div class="contHalf floatR supportContent">
				<h2><?php the_field('podrska__title'); ?></h2>
				<?php the_field('podrska__text'); ?>
			</div>
		</div>
	</div>

	<!-- end podrska -->

	<!-- start entry header of another section -->
	<div class="entryHeader">
		<div class="wrapper">
			<h2 class="alignL"><?php the_field('spec_rjesenja__title'); ?></h2>
		</div>
	</div>
	<!-- end entry header -->

	<!-- specificna rjesenja content -->
	<div class="speciSection">
		<div class="wrapper clearfix">
			<div class="speciImage">
				<img src="<?php the_field('spec_rjesenja__slika'); ?>" />
			</div>
			<div class="speciText">
				<?php the_field('spec_rjesenja__text'); ?>
			</div>
			<div class="speciContent">
				<?php

					$speciContent = get_field('spec_rjesenja__content');

				?>
				<?php echo $speciContent; ?>
			</div>
		</div>
	</div>
	<!-- end specificina rjesenja content -->

	<div id="homeContBoxLogos" class="boxFull clr">
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