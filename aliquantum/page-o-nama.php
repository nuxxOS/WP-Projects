<?php 

/* Template name: About us */

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
		<div class="clearfix wrapper">
		<?php $i = 1; if(have_rows('about_section')) : while(have_rows('about_section')) : the_row(); ?>
			<div class="clearfix aboutSection">
				<div class="contHalf <?php if($i%2){echo 'floatR';}else{echo 'floatL';}; ?> aboutSectionImage">
				<?php
					$aboutSectionImageField = get_sub_field('about_section_image');
					$aboutSectionImageSize = 'about-image';
					$aboutSectionImage = $aboutSectionImageField['sizes'][$aboutSectionImageSize];
				?>
					<img src="<?php echo $aboutSectionImage; ?>" width="<?php echo $aboutSectionImageField['sizes']['about-image-width']; ?>" height="<?php echo $aboutSectionImageField['sizes']['about-image-height']; ?>">
				</div>
				<div class="contHalf <?php if($i%2){echo 'floatL';}else{echo 'floatR';}; ?> aboutSectionText">
					<?php the_sub_field('about_section_text'); ?>
				</div>
			</div>
		<?php $i++; endwhile; endif; ?>
		</div>
	</div><!-- end support cont -->
	<div class="entryHeader">
		<div class="wrapper">
			<h2><?php _e('Više o nama', 'theme'); ?></h2>
		</div>
	</div><!-- end entry header -->
	<div class="aboutChildPages">
		<div class="clearfix wrapper">
		<?php
			$pageID = get_the_ID();
			$args = array(
				'post_parent' => $pageID,
				'post_type'   => 'page',
				'order'		  => 'ASC',
				'numberposts' => -1,
				'post_status' => 'published' 
			);

			$pageChildren = get_children($args);
			//var_dump($pageChildren);

			foreach ($pageChildren as $pageChild) : ?>
				<div class="aboutChildPage">
					<a href="<?php echo $pageChild->guid; ?>">
						<?php echo get_the_post_thumbnail($pageChild->ID); ?>
						<h3><?php echo $pageChild->post_title; ?></h3>
					</a>
				</div>
		<?php endforeach; ?>
		</div>
	</div><!-- end about child pages -->
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