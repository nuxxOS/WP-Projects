<!--	=================================================
     	================= FOOTER CONTENT ================
        =================================================     -->



<?php wp_footer(); ?>


<footer class="container-full clearfix">

	<!-- FOOTER NEWSLETTER -->

	<div class="footer-newsletter-wrap clearfix">

		<div class="footer-newsletter container-small clearfix">
			<h2 class="newsletter-title"><?php _e('Pretplati se na','stribor_footer'); ?>  <span class="uppercase">Newsletter</span></h2>

			<?php if(ICL_LANGUAGE_CODE=='hr'){  

	             	$formID = '';  }

	             else { 

	             	$formID = ''; } ?>


	            <!-- Begin MailChimp Signup Form -->
<!--
					<div id="mc_embed_signup">

						<form action="//feravino.us12.list-manage.com/subscribe/post?u=8d178c75bac1270ae567632a9&amp;id=<?php echo $formID ?>" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>

							<div id="mc_embed_signup_scroll">
						
								<div class="mc-field-group">
									<input placeholder="<?php _e('Unesite Vaš email', 'stribor_footer') ?>" type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
								</div>

								<div id="mce-responses" class="clear">

									<div class="response" id="mce-error-response" style="display:none"></div>
									<div class="response" id="mce-success-response" style="display:none"></div>

								</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
<!--
					    		<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_8d178c75bac1270ae567632a9_<?php echo $formID ?>" tabindex="-1" value="">
					    		</div>

					    		<div class="clear"><input type="submit" value="<?php _e('Pretplati se', 'stribor_footer') ?>" name="subscribe" id="mc-embedded-subscribe" class="button">
					    		</div>

				    		</div>

						</form>
					</div>
						

						<!--End mc_embed_signup-->
		</div>

	</div>


	<div class="footer-main clearfix">


		<!-- FOOTER MENU -->

		<div class="footer-list clearfix">
			<h5 class="footer-title"> <?php _e('Sitemap','stribor_footer'); ?> </h5>
			<nav>

				<?php wp_nav_menu (

				array ('menu' => "Footer menu", 'container' => "false" )

				); ?>		
			</nav>
		</div>


		<!-- FOOTER CONTACT -->

		<div class="footer-list clearfix">
			<h5 class="footer-title"> <?php _e('Kontakt','stribor_footer'); ?> </h5>

			<?php if( have_rows('footer_contact_repeater', 'Options') ):  ?>	
				<?php while( have_rows('footer_contact_repeater', 'Options') ): the_row(); ?>

					<ul class="clearfix">

					<?php
					$thumbnail = get_sub_field('kontakt_image', 'Options'); ?>

						<div class="kontakt-info-image clearfix">
                			<img src="<?php echo $thumbnail['url']; ?>"/>
                		</div>

                		<div class="kontakt-info-text clearfix">
                			<?php the_sub_field('kontakt_footer', 'Options'); ?>
                		</div>          

					</ul>

				<?php endwhile; ?>
			<?php endif; ?>

		</div>


		<!-- FOOTER LOGO -->

		<div class="footer-list clearfix">
			<a href="<?php echo home_url(); ?>">
				<?php 

					$image = get_field('header_logo', 'options');

					if( !empty($image) ): ?>

						<img src="<?php echo $image ?>" alt="<?php echo $image['alt']; ?>" />

				<?php endif; ?>

			</a>
		</div>


		<!-- FOOTER CATEGORIES -->

		<div class="footer-list clearfix">
			<h5 class="footer-title"> <?php _e('Kategorije','stribor_footer'); ?> </h5>

			<?php $args = array ('hide_empty' => false); ?>
			<?php $categories = get_terms('kategorija-proizvoda', $args); ?>

                <?php foreach ($categories as $category) : ?>

                	<div class="product-item clearfix">

                		<?php
                            echo get_the_term_list( get_the_ID(), 'kategorija-proizvoda', '' ); 
                        ?>

                    </div>

                <?php endforeach; ?>
		</div>


		<!-- FOOTER SOCIAL -->

		<div class="footer-list clearfix">
			<h5 class="footer-title"> <?php _e('Pratite nas','stribor_footer'); ?> </h5>

			<span class="icon-facebook border"></span>
			
		</div>


	</div>


	<!-- FOOTER COPYRIGHT -->

	<div class="footer-copyright clearfix">
		<p> &#169; <?php echo the_time('Y') ?> Stribor oprema d.o.o. <span class="red"><?php _e('Pravila i uvijeti korištenja', 'stribor_footer'); ?></span> </p>
	</div>


</footer>


</body>
</html>