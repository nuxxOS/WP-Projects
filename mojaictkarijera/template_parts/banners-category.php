<div class="page-banner container-full clearfix" style="background: url(<?php the_field('banner_background', 9); ?>) center; background-size: cover;">
			

		<div id="header-green" class="container-full clearfix"></div>
		<div id="header-yellow" class="banner-yellow container-full clearfix"></div>
					
			<div class="banner container clearfix">

				<div class="banner-title clearfix">
					<a href="<?php echo get_permalink( 9 ); ?>"><h1 class="white"> <?php
							$pageID = 9;
							$page = get_post($pageID);
							echo $page->post_title;
							?> </h1></a>
				</div>

				<div class="cornered"></div>

				<div class="banner-title-icon clearfix"> 
					<span class="icon-home"></span>
					
					<span class="icon-chevron-right"></span>
						<a href="<?php echo get_permalink( 9 ); ?>"><h5> <?php

										$categories = get_the_category();
										$separator = ' ';
										$output = '';
										if ( ! empty( $categories ) ) {
										    foreach( $categories as $category ) {
										        $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
										    }
										    echo trim( $output, $separator );
										}


									?> </h5></a>
				</div>

			</div>

	</div>