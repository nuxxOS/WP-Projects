<?php 

/* Template name: Products Template - Cjenik */

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
	<div class="cjenikContentSection">
		<div class="wrapper clearfix">
			<div class="cjenikContent">
				<div class="cjenikContentBefore">

					<?php the_field('cjenik_content_before'); ?>
					
				</div>
				<div class="clearfix cjenikContentList">

					<h2><?php the_field('cjenik_list_title'); ?></h2>

					<table class="cjenikTabela">
						<tr>
							<td class="licTabBold">Sistem</td>
							<td class="licTabBold">Licenca</td>
							<td class="kupLic licTabBold">Kupovina Licence</td>
							<td class="licTabBold">Najam Licence - Hosting</td>
						</tr>

						<?php if( have_rows('cjenik_list') ) : while( have_rows('cjenik_list') ) : the_row() ?>

							<tr>
							    <th><img src="<?php the_sub_field('cjenik__sistem'); ?>" /></th>
							    <th class="licTabBold"><?php the_sub_field('cjenik__licenca'); ?></th>
							    <th><?php the_sub_field('cjenik__kupovina_licence'); ?></th>
							    <th><?php the_sub_field('cjenik__najam_licence__hosting'); ?></th>
							</tr>

						<?php endwhile; endif; ?>

					</table>
					
				</div>
				<div class="cjenikContentAfter">

					<?php the_field('cjenik_content_after'); ?>

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