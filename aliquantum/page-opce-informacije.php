<?php 

/* Template name: About Information */

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
			<div class="suppImg">
				<?php if(have_rows('about_information')) : while(have_rows('about_information')) : the_row(); ?>
					<div class="floatL aboutInfoPart">
						<h2><?php the_sub_field('info_ime'); ?></h2>
						<div class="floatLFull">
							<p>Adresa: <?php the_sub_field('info_adresa'); ?></p>
							<p>Tel: <?php the_sub_field('info_tel'); ?></p>
							<p>Fax: <?php the_sub_field('info_fax'); ?></p>
							<p>Mob: <?php the_sub_field('info_mob'); ?></p>
							<p>Email: <span class="infoMail"><?php the_sub_field('info_email'); ?></span></p>
						</div>
					</div>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</div><!-- end support cont -->
	<div class="floatLFull supportCont aboutInfoContent">
		<div class="wrapper">
			<div class="suppImg">
				<?php the_content(); ?>
			</div>
		</div>
	</div><!-- end support cont -->
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