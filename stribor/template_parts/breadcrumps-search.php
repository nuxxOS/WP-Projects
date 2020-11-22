<!--	=================================================
     	================== BREADCRUMPS ==================
        =================================================     -->


<div class="breadcrumps-wrap container clearfix">

	<div class="breadcrumps clearfix">

		<a href="<?php echo get_permalink( 6 ); ?>">
			<h5 class="breadcrumps-text dark-gray">

				<?php
					$pageID = 6;
					$page = get_post($pageID);
					echo $page->post_title;
					?> 

			</h5>
		</a>

		<div class="separator clearfix">
			/
		</div>

			<a href="<?php get_permalink(); ?>"><h5 class="breadcrumps-text black"><?php echo esc_html( get_search_query( false ) ); ?></h5></a>

	</div>

</div>