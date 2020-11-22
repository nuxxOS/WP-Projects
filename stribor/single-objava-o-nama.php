<?php get_header(); ?>


<?php get_template_part('template_parts/breadcrumps-o-nama'); ?>


<!--	======================================================
     	================== ABOUT US SINGLE ===================
        ======================================================     -->


<div class="about-us-wrap container clearfix">

	<div class="about-us-content-wrap container-small clearfix">
		<h2 class="page-title"><?php echo the_title(); ?></h2>

			<div class="about-us-content clearfix">

				<div class="about-image single-image clearfix">

					<?php if ( has_post_thumbnail() ) : ?>

					       <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail('thumbnail-big'); ?></a>
						   <?php else : ?>
						        <img src="http://placehold.it/1200x425" />

				    <?php endif; ?>

				</div>

				<div class="about-single-content wysywig clearfix">
					<?php the_content() ?>
				</div>

			</div>


	</div>

</div>





<!-- 	====================================================
        =============== CATEGORY LIST ======================
        ====================================================     -->


<?php get_template_part('template_parts/cat-list'); ?>




<?php get_footer(); ?>