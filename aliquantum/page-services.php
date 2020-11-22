<?php 

/* Template name: Services */

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
	<div class="floatLFull supportCont">
		<div class="wrapper">
			<div class="suppText">
				<?php the_content(); ?>
			</div>
		</div>
	</div><!-- end support cont -->
	<div class="floatLFull servicesSection" style="background: url(<?php bloginfo('template_url'); ?>/images/usluge-bg.jpg) no-repeat center center; background-size:cover;">
		<div class="wrapper clearfix">
			<?php if( have_rows('usluge_list') ) : while( have_rows('usluge_list') ) : the_row() ?>
				
				<div class="serviceItem">
					
					<div class="serviceImage">
						<img src="<?php the_sub_field('usluge_image'); ?>">
					</div>
					<div class="serviceTitle">
						<h2><?php the_sub_field('usluge_title'); ?></h2>
					</div>
					<div class="serviceContent">
						<?php the_sub_field('usluge_content'); ?>
					</div>

				</div>

			<?php endwhile; endif; ?>
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