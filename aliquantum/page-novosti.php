<?php 

/* Template name: News */

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
	<div class="floatLFull">
		<div class="clearfix aboutNews">
			<div class="clearfix wrapper">
			<?php

				$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
				// set query for posts
				$args = array();
				$args['post_type'] = 'post';
				$args['paged'] = $paged;
				$args['posts_per_page'] = 12;
				$args['order'] = 'ASC';

				$newsQuery = new WP_Query ( $args );

			?>
			<?php $count=0; if($newsQuery->have_posts()) : while($newsQuery->have_posts()) : $newsQuery->the_post(); ?>
				<div class="contHalf floatL <?php if($count>=4) {echo 'smallNews';}else {echo 'newsPosts';} ?>">
					<a href="<?php the_permalink(); ?>">
						<?php

							if($count<=4){

								if( has_post_thumbnail() ) { the_post_thumbnail('about-image-larger-image'); }// show larger image for first 4 posts ( news )

							}else {

								if( has_post_thumbnail() ) { the_post_thumbnail('about-image-smaller-image'); }// show smaller image for the rest of the posts

							}

						?>

						<div class="newsContent">
							<?php if(get_the_content()!= "") { //check if there is any content ?>

								<?php

									// get content and make it smaller for first 4 posts ( larger ones )
									$largerContent = wp_trim_words( get_the_content(), $num_words = 30, $more = null);
									// get content and make it smaller for other posts
									$smallerContent = wp_trim_words( get_the_content(), $num_words = 10, $more = null );
								?>
								<span><?php echo get_the_date('j.n.Y.'); ?></span>
								
								<?php

									// show different content based on posts
									if ($count<4) {
										echo '<p>'.$largerContent.'</p>';
									}else {
										echo '<p>'.$smallerContent.'</p>';
									}
									
								?>

							<?php } ?>

						</div>
					</a>
				</div><!-- end of each element -->
				
			<?php $count++; endwhile; endif; wp_reset_postdata(); ?>
				<!-- pagination -->
				<div class="floatLFull pagination">
					<?php

						$big = 999999999; // need an unlikely integer
						// code for showing number of posts on page and total posts
						$page  = max( 1, get_query_var( 'paged' ) );
						$ppp = get_query_var('posts_per_page');
						$start = $ppp * ( $page - 1 ) + 1;
						$end = $start + $newsQuery->post_count - 1;
						$total = $newsQuery->found_posts;

					?>

					<?php $args = array(
						'base'               => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
						'format'             => '?paged=%#%',
						'total'              => $newsQuery->max_num_pages,
						'current'            => max( 1, get_query_var('paged') ),
						'show_all'           => false,
						'end_size'           => 1,
						'mid_size'           => 2,
						'prev_next'          => true,
						'prev_text'          => '<span class="icon-chevron-down"><span>',
						'next_text'          => '<span class="icon-chevron-down"><span>',
						'type'               => 'plain',
						'add_args'           => false,
						'add_fragment'       => '',
						'before_page_number' => '',
						'after_page_number'  => ''
					); ?>
					<div class="floatL pagNumOfPosts">
						<?php echo $end."/ ".$total." rezultata"; ?>	
					</div>
					<div class="floatR pagNumbers">
						<?php echo paginate_links( $args ); ?>	
					</div>
				</div>
				<!-- end pagination -->
			</div><!-- end wrapper for each element -->
		</div><!-- end about news part -->
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