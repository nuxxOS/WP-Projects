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
								$pageID = 9;
								$page = get_post($pageID);
								echo $page->post_title;
								?> </h5></a>
					<span class="icon-chevron-right"></span>
					<h5 class="white"> <?php echo get_the_title();?> </h5>
				</div>

			</div>

	</div>