<?php 

/* Template name: Products Template - Funkcionalnosti */

?>

<?php get_header(); ?>
	<?php

	$sectionBgImage = get_field('page_intro_image', 196);
	$sectionBgImageFull = $sectionBgImage['url'];

	?>
	<div id="homeContBoxOne" class="boxFull" style="background: url(<?php echo $sectionBgImageFull; ?>) no-repeat center right">
		<div class="boxContentSection">
			<div class="wrapper">
				<div class="contHalf boxContent introCont">
					<h1 class="marginB40">
						<?php

							$pantheonPageTitle = get_the_title(196);
							echo $pantheonPageTitle;

						?>
					</h1>
					<div class="marginB40">
						<?php
							$pageIntroContent = get_field('page_intro_content', 196);
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
	<div class="funkcionalnostiSection">
		<div class="wrapper">
			<h2><?php the_title(); ?></h2>
			<?php echo do_shortcode('[table id=1 /]'); ?>
			<div class="funkcionalnostiAfterTable">
				<?php the_field('funkcionalnosti__content_poslije_tablice'); ?>
			</div>
		</div>
	</div>

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