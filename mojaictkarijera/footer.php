		<div class="footer-wrapper container-full clearfix">

			<div class="footer-logo-wrap container-full clearfix">
				<div class="footer-logo container clearfix">
				<h3></h3>

					<?php if( have_rows('footer_repeater', 'options') ):  ?>

						
							<?php while( have_rows('footer_repeater','options') ): the_row(); 
							$image = get_sub_field('footer_image_repeater','options'); ?>

							<div class="footer-img">
								<img src="<?php echo $image['url']; ?>" />
							</div>

							<?php 
   						endwhile;

   						endif;
					?>

				</div>
			</div>


			<div class="footer-list-wrap container-full clearfix">
				<div class="footer-list-innerwrap container clearfix">

					<div class="footer-list">

						<div class="footer-logo">
						<?php 

							$image = get_field('footer_logo','options');

							if( !empty($image) ): ?>

								<img src="<?php echo $image['url']; ?>" />

						<?php endif; ?>
						</div>

						<a href="https://www.facebook.com/MojaICTkarijera"><?php the_field('footer_facebook','options'); ?></a>
					</div>


					<div class="footer-list">
						<nav>

							<?php wp_nav_menu (

							array ('menu' => "Footer menu", 'container' => "false" )

							); ?>		
						</nav>
					</div>


					<div class="footer-list">

						<h3><?php the_field('pucko_title','options'); ?></h3>

						<?php if( have_rows('pucko_uciliste', 'options') ):  ?>

							<?php while( have_rows('pucko_uciliste','options') ): the_row(); 

							$image = get_sub_field('pucko_image','options'); ?>

							<li>
								<img src="<?php echo $image['url']; ?>" />

								<?php the_sub_field('pucko_text','options'); ?>
							</li>

						<?php 
	   						endwhile;

	   						endif;
						?>
					</div>


					<div class="footer-list">

						<h3><?php the_field('poslovanje_title','options'); ?></h3>

						<?php if( have_rows('poslovanje2', 'options') ):  ?>

							<?php while( have_rows('poslovanje2','options') ): the_row(); 

							$image = get_sub_field('poslovanje_image','options'); ?>

							<li>
								<img src="<?php echo $image['url']; ?>" />

								<?php the_sub_field('poslovanje_text','options'); ?>
							</li>

						<?php 
	   						endwhile;

	   						endif;
						?>
					</div>

				</div>
			</div>


			<div class="footer-copyright-wrap container-full">

			<div class="date container">
				<p> <?php echo the_time('Y') ?> &#169; Moja ICT karijera </p>
			</div>




			</div>




	
	<?php wp_footer(); ?>
</body>
</html>