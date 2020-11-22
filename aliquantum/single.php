<?php get_header(); ?>

	<?php

	$sectionBgImage = get_field('page_intro_image', 103);
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
							$pageIntroContent = get_field('page_intro_content', 103);
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
	<div class="singleNewsPost clearfix">
		<div class="wrapper clearfix">
			<div class="floatL singleNewsContent">
				<?php the_post_thumbnail(); ?>
				<span><?php echo get_the_date('j.n.Y.'); ?></span>
				<h2><?php the_title(); ?></h2>
				<div class="singleNewsText">
					<?php the_content(); ?>
				</div>
			</div>
			<div class="floatR singleNewsSidebar">

				<div class="singleSideTitle">
					<h2><?php _e('Izdvojene novosti', 'tema'); ?></h2> 
				</div>
				<?php

					// set query for posts
					$args = array();
					$args['post_type'] = 'post';
					$args['showposts'] = 3;
					$args['order'] = 'ASC';

					$singleSidebarQuery = new WP_Query ( $args );

				?>
				<?php
					if( $singleSidebarQuery->have_posts() ) : while( $singleSidebarQuery->have_posts() ) : $singleSidebarQuery->the_post();
				?>
				
				<a class="singleSidebarPostItemList" href="<?php the_permalink(); ?>">
					<div class="singleSidebarPostList">
						<div class="singleSideImage">
							<?php the_post_thumbnail('singleSidebarSmall'); ?>
						</div>
						<div class="singleSideText">
							<span><?php echo get_the_date('j.n.Y.'); ?></span>
							<p><?php echo wp_trim_words( get_the_content(), 12 ); ?></p>
						</div>
					</div>
				</a>

				<?php endwhile; endif; ?>
			</div>
		</div>
	</div><!-- end single news post -->
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