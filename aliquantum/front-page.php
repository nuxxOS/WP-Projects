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
	<div id="homeContBoxTwo" class="boxFull">
		<div class="boxContentSection">
			<div class="wrapper clearfix">
				<div class="sectionTop marginB20">
					<h2 class="borderBotLight paddingB20"><?php the_field('home__prvi_slider_title'); ?></h2>
				</div>
				<div class="sectionMiddle clearfix">
					
					<!-- Slider main container -->
					<div class="swiper-container">
					    <!-- Additional required wrapper -->
					    <div class="swiper-wrapper">
					        <!-- Slides -->
					        <?php

					        	$args = array (

					        		'post_type' => 'product',
					        		'post_per_page' => -1

					        		);

					        	$productQuery = new WP_Query( $args );

					        ?>

					        <?php if( $productQuery->have_posts() ) : while ( $productQuery->have_posts() ) : $productQuery->the_post() ?>

					        <div class="swiper-slide">
					        	<div class="sliderItem">
					        		<a href="<?php the_permalink(); ?>">
						        		<img src="<?php bloginfo('template_url'); ?>/images/sliderImage.jpg" alt="">
						        		<h3><?php the_title() ;?></h3>
						        		<span><?php echo $product->get_price_html(); ?></span>
						        	</a>
					        	</div><!-- end slider item -->
					        </div><!-- end swiper slide -->

					        <?php endwhile; endif; wp_reset_query(); ?>
					    </div>
					    
					    <!-- If we need navigation buttons -->
					    <div class="swiper-button-prev icon-chevron-down"></div>
					    <div class="swiper-button-next icon-chevron-down"></div>
					</div><!-- end swipe container -->
				</div>
			</div>
		</div>
	</div><!-- end #homeContBoxTwo -->
	<div class="entryHeader">
		<div class="wrapper">
			<h2><?php the_field('home__drugi_slider_title'); ?></h2>
		</div>
	</div>
	<div id="homeContBoxThree" class="boxFull">
		<div class="swiper-container">
			<div class="swiper-wrapper">

			<?php if( have_rows('home__proizvodi_list') ) : while( have_rows('home__proizvodi_list') ) : the_row() ?>
				
				<?php
					
					// get product background image
					$productBgImage = get_sub_field('home__proizvod_background');
					// get product link
					$proizvodLink = get_sub_field('home__proizvod_link');

				?>

				<div class="swiper-slide sectionMiddle" style="background: url(<?php echo $productBgImage; ?>) no-repeat center left;">
					<div class="wrapper clearfix">
						<div class="contHalf floatR boxContent">

							<h1 class="marginB40"><?php the_sub_field('home__proizvod_title'); ?></h1>

							<?php the_sub_field('home__proizvod_content'); ?>

							<?php if( $proizvodLink ) { ?>

							<a class="buttonMore" href="<?php echo $proizvodLink->guid; ?>"><?php _e('Saznaj više', 'tema'); ?></a>

							<?php } ?>

						</div>
					</div>
				</div>

			<?php endwhile; endif; ?>

			</div><!-- end swiper-wrapper -->
			<div class="swiper-pagination"></div>
		</div><!-- end swiper-container -->
	</div><!-- end #homeContBoxThree -->
	<div id="homeContBoxFour" class="boxFull">
		<div class="boxContentSection">
			<div class="wrapper">
				<div class="sectionTop marginB20">
					<h2 class="borderBotLight paddingB20">Novosti</h2>
				</div>
				<div class="sectionMiddle cleafix">
					<!-- Slider main container -->
					<div class="swiper-container boxFour">
					    <!-- Additional required wrapper -->
					    <div class="swiper-wrapper">
					        <!-- Slides -->
					        <?php

					        $newsArgs = array(

					        	'post_type' => 'post',
					        	'post_per_page' => 10

					        );

					        $newsQuery = new WP_Query( $newsArgs );

					        if( $newsQuery->have_posts() ) : while( $newsQuery->have_posts() ) : $newsQuery->the_post()

					        ?>

					        <div class="swiper-slide">
					        	<div class="sliderItem">
					        		<a href="<?php the_permalink(); ?>">
						        		<?php the_post_thumbnail(); ?>
						        		<div class="newsContent">
						        			<span>6.5.2016.</span>
							        		<p>
							        			<?php the_content(); ?>
							        		</p>
							        	</div>
						        	</a>
					        	</div>
					        </div><!-- end swiper slide -->

					    	<?php endwhile; endif; wp_reset_query(); ?>
					    </div>
					    
					    <!-- If we need navigation buttons -->
					    <div class="swiper-button-prev icon-chevron-down"></div>
					    <div class="swiper-button-next icon-chevron-down"></div>
					</div><!-- end swipe container -->
				</div>
			</div>
		</div>
	</div><!-- end #homeContBoxFour -->
	<div id="homeContBoxFive" class="boxFull">
		<div class="boxContentSection">
			<div class="wrapper">
				<div class="sectionMiddle">
					<span class="sizeIcon icon-right-quote"></span>
					<!-- Slider main container -->
					<div class="swiper-container">
					    <!-- Additional required wrapper -->
					    <div class="swiper-wrapper">

					        <!-- Slides -->
							<?php if( have_rows('home__quote_slider') ) : while( have_rows('home__quote_slider') ) : the_row() ?>

					        <div class="swiper-slide">
					        
								<span>
									<?php the_sub_field('home__quote_slider_author'); ?>
								</span>
								
								<?php the_sub_field('home__quote_slider_quote_text'); ?>

					        </div><!-- end swiper slide -->

					    	<?php endwhile; endif; ?>

					    </div>
					    <div class="swiper-pagination"></div>
					    
					</div><!-- end swiper container -->
				</div><!-- end section middle -->
			</div>
		</div><!-- end box content section -->
	</div><!-- end #homeContBoxFive -->
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