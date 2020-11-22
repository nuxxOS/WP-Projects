<?php get_header(); ?>


<?php get_template_part('template_parts/breadcrumps-usluge'); ?>


<!--	=========================================================
     	================= USLUGE SINGLE CONTENT =================
        =========================================================     -->


<div class="single-usluge-wrap container clearfix">

	<div class="single-usluge-content-wrap container-small clearfix">
		<a href="<?php echo get_permalink(); ?>"><h2 class="page-title"><?php the_title(); ?></h2></a>

			<div class="usluge-content-image clearfix">

				<?php if ( has_post_thumbnail() ) : ?>

				       <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail('thumbnail-big'); ?></a>
					   <?php else : ?>
					        <img src="http://placehold.it/1200x425" />

			   <?php endif; ?>

			</div>



			<div class="usluge-content-text wysywig clearfix">
				<?php the_content () ?>
			</div>


	</div>


	<div class="other-services-wrap container-small clearfix">
		<?php get_template_part('template_parts/single-ostale-usluge'); ?>
	</div>

</div>




<!-- 	====================================================
        =============== CATEGORY LIST ======================
        ====================================================     -->


<?php get_template_part('template_parts/cat-list'); ?>















<?php get_footer(); ?>