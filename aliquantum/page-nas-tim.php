<?php 

/* Template name: Team */

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
		<div class="floatL suppImg">
			<?php if(have_rows('about_team')) : while(have_rows('about_team')) : the_row(); ?>
				<div class="floatL aboutInfoPart">
					<div class="wrapper">
						<div class="floatLFull">
							<?php
								// get image object
								$memberImage = get_sub_field('team_member_image');
								$memberImageFinal = $memberImage['url'];
								// get link object
								$memberLink = get_sub_field('team_member_links');
							?>
							<div class="floatL memberInfoImage">
								<img src="<?php echo $memberImageFinal; ?>" >
							</div>
							<div class="floatL memberInfoContent">
								<h2><?php the_sub_field('team_member_name'); ?></h2>
								<div><?php the_sub_field('team_member_content'); ?></div>
								<div class="teamMemberLinks">
								<?php if($memberLink) { ?>
									<?php foreach ($memberLink as $memLinks): ?>
										<a href="<?php echo $memLinks->guid; ?>" target="_blank">
											<?php echo $memLinks->post_title; ?>
										</a>
									<?php endforeach; ?>
								<?php } ?>
								</div>
							</div>
						</div><!-- end of each element -->
					</div><!-- end wrapper for each element -->
				</div><!-- end about info part -->
			<?php endwhile; endif; ?>
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