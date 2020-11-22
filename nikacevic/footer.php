<?php wp_footer(); ?>


	<div id="footer-wrap" class="container-full clearfix">
		<div class="footer-partneri clearfix">
			<ul>
		
				</div>

				<div class="footer-img-all clearfix">
					<div class="footer-clan left">	
						<h3><?php the_field('clanovi', 'options'); ?></h3>

						<?php if( have_rows('repeater_clan', 'options') ):  ?>

						
							<?php while( have_rows('repeater_clan','options') ): the_row(); 
							$image = get_sub_field('clan_image','options'); ?>

							<div class="footer-img">
								<img src="<?php echo $image['url']; ?>" />
							</div>

							<?php 
   						endwhile;

   						endif;
					?>	

					</div>

					<div class="footer-partner left">

							<h3><?php the_field('partneri', 'options'); ?></h3>

							<?php if( have_rows('footer_repeater', 'options') ):  ?>

						
							<?php while( have_rows('footer_repeater','options') ): the_row(); 
							$image = get_sub_field('repeater_image','options'); ?>

							<div class="footer-img">
								<img src="<?php echo $image['url']; ?>" />
							</div>

							<?php 
   						endwhile;

   						endif;
					?>	

					</div>
		</div>

			<div class="footer-copyright clearfix">
				<div class=" footer-elements container-full clearfix">

					<div class="logo left">
				    	<a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo2.png"></a>
				    </div>

				    <div class="date">
				    	<p> 1992 - <?php echo the_time('Y') ?> &#169; Nikačević d.o.o. </p>
				    </div>	

				    <div class="gauss-icon">
				    	<a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/gauss-icon.png"></a>
				    </div>

			    </div>
			</div>








	
</body>
</html>


