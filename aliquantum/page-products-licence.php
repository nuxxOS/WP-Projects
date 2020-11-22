<?php 

/* Template name: Products Template - Licence */

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

	<!-- licence content -->
	<div class="licenceContentSection">
		<div class="wrapper clearfix">
			<div class="licenceContent">
				<h2><?php the_title(); ?></h2>
				<div class="licenceContentBefore">

					<?php the_field('licence_text_prije'); ?>
					
				</div>
				<div class="clearfix licenceContentList">

					<?php if( have_rows('licence_lista') ) : while( have_rows('licence_lista') ) : the_row() ?>
						
						<div class="floatL licenceListItem">
							<div class="licenceListImage">
								
								<img src="<?php the_sub_field('licence_lista_slika'); ?>" />

							</div>
							<div class="licenceListText">

								<?php the_sub_field('licence_lista_text'); ?>
								
							</div>
						</div>

					<?php endwhile; endif; ?>
					
				</div>
				<div class="licenceContentAfter">

					<?php the_field('licence_text_poslije'); ?>

				</div>
			</div><!-- end licence content -->
		</div>
	</div>
	<!-- end licence content -->
	

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