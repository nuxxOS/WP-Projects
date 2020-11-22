<!--	=================================================
     	================= FOOTER CONTENT ================
        =================================================     -->



<?php wp_footer(); 

global $post;

?>


<footer class="container-full clearfix">

	<!-- FOOTER NEWSLETTER -->

	<div class="footer-newsletter-wrap clearfix">

		<div class="footer-newsletter container-small clearfix">
			<h2 class="newsletter-title"><?php _e('Pretplati se na','stribor_footer'); ?>  <span class="uppercase">Newsletter</span></h2>

			<?php if(ICL_LANGUAGE_CODE=='hr'){  

	             	$formID = 'dbcbb64028';  }

	             else { 

	             	$formID = 'f5b0e5c542'; } ?>



	             	<!-- Begin MailChimp Signup Form -->
	             	
						<div id="mc_embed_signup" class="newsletter-signup clearfix">
							<form action="//stribor-oprema.us13.list-manage.com/subscribe/post?u=be4f554840d65910aa6629229&amp;id=<?php echo $formID ?>" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						    
							    <div id="mc_embed_signup_scroll" class="clearfix">

									<div class="mc-field-group">
										<!--<label for="mce-EMAIL">Email Adresa </label> -->
										<input placeholder="<?php _e('Unesite Vaš email', 'stribor_footer') ?>" type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
									</div>

									<div id="mce-responses" class="clear">
										<div class="response" id="mce-error-response" style="display:none"></div>
										<div class="response" id="mce-success-response" style="display:none"></div>
									</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->

									<div style="position: absolute; left: -5000px;" aria-hidden="true">
										<input type="text" name="b_be4f554840d65910aa6629229_dbcbb64028" tabindex="-1" value="">
									</div>

									<div class="clear">
										<div class="sign-up-background"></div>
										<input type="submit" value="<?php _e('Pretplati se', 'stribor_footer') ?>" name="subscribe" id="mc-embedded-subscribe" class="button submit">
									</div>

							    </div>

							</form>
						</div>


		</div>

	</div>


	<div class="footer-main clearfix">


		<div class="footer-left left clearfix">
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

			<div class="footer-list footer-information right clearfix">
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

		</div>


		<!-- FOOTER LOGO -->

		<div class="footer-list-logo clearfix">
			<a href="<?php echo home_url(); ?>">
				<?php 

					$image = get_field('header_logo', 'options');

					if( !empty($image) ): ?>

						<img src="<?php echo $image ?>"/>

				<?php endif; ?>

			</a>
		</div>
            


		<!-- FOOTER CATEGORIES -->

		<div class="footer-right clearfix">

			<div class="footer-list footer-categories left clearfix">
				<h5 class="footer-title"> <?php _e('Kategorije','stribor_footer'); ?> </h5>

					<?php
						$args = array(
						'hide_empty' => false, // show all terms even if they have no posts
						'parent' => 0
						);
						$categories = get_terms('product_cat', $args); ?>

						<?php foreach ($categories as $category) : 

						$term_link = get_term_link( $category ); ?>

	                	<div class="product-item clearfix">

	                	<?php

	                		 echo '<li><span class="icon-chevron-right"></span><a href="' . esc_url( $term_link ) . '">' . $category->name . '</a></li>'; ?>
	                    </div>

	               	<?php endforeach; ?>


			</div>
		 


			<!-- FOOTER SOCIAL -->

			<div class="footer-list right clearfix">
				<h5 class="footer-title"> <?php _e('Pratite nas','stribor_footer'); ?> </h5>

				<a href="https://www.facebook.com/Stribor-oprema-doo-144425512420693/" target="_blank"><span class="icon-facebook border"></span></a>
				
			</div>

		</div>


	</div>


	<!-- FOOTER COPYRIGHT -->

	<div class="footer-copyright clearfix">
		<p> &#169; <?php echo the_time('Y') ?> Stribor oprema d.o.o. <a href="<?php echo get_permalink( 204 ); ?>"><span class="red"><?php _e('Pravila i uvijeti korištenja', 'stribor_footer'); ?></span></a> </p>




</div>

	<div class="sign-up-background bg-js"></div>
	<div class="sign-up-content-wrap clearfix">
	<div class="triangle"></div>

	<?php if (is_user_logged_in()) : ?>

		<a href="<?php echo wp_logout_url('$index.php'); ?>" class="wp-logout"><?php _e('Odjavi se','woocommerce'); ?></a>


	<?php else : ?>


		<div class="sign-up-content">

		<?php $args = array(
			'echo' => true,
			'remember' => true,	
			'form_id' => 'loginform',
			'id_username' => 'user_login',
			'placeholder_username' => 'user_login',
			'id_password' => 'user_pass',
			'id_submit' => 'wp-submit',
			'label_username' => __( '' ),
			'label_password' => __( '' ),
			'label_remember' => __( '' ),
			'label_log_in' => __( 'Prijavi se' ),
			'value_username' => '',
			'value_remember' => false,
			'class_submit' => 'submit',
			'redirect' => 'http://localhost/stribor/'
			); ?>

			<p><?php _e('Ova prijava je samo za projektante i arhitekte','stribor_home') ?></p>
			<hr>
			<?php wp_login_form($args); ?>		
			
			</div>	
				

		<?php endif; ?>

	</div>

	<div class="search-box"> 
		<form method="get" id="searchform" action="<?php echo home_url() ; ?>"> 		
			<input type="text" class="search-input" value="<?php echo esc_html($s, 1); ?>" name="s" id="s" maxlength="33" placeholder="<?php _e('Pretražite stribor opremu...','stribor_home'); ?>"> 		
			<button type="sumbit" class="search-button icon-search"></button> 		
			<input type="hidden" name="post_type" value="posts" />  	
		</form> 
	</div>


	<div class="quantity-menu border">
		<span>
		<?php  /* Display number of items in cart and total */  
			global $woocommerce;  

				echo sprintf(_n('%d item', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);  ?>
		<span>

	</div>


</footer>

<script>

jQuery(document).ready(function($) {

	var placeholderUser = "<?php _e('Korisničko ime','stribor_login'); ?>";
	var placeholderPass = "<?php _e('Lozinka','stribor_login'); ?>";

 	jQuery('#user_login').attr( 'placeholder', placeholderUser );

  	jQuery('#user_pass').attr( 'placeholder', placeholderPass );
  	
  });

</script>

</body>
</html>