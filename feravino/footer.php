	<!--================================
    =            NEWSLETTER            =
    =================================-->
    
    <div class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/newsletter.png" alt="">
                    <h3><?php _e( 'Prijavi se na newsletter', 'feravino' ) ?></h3>


                     <?php if(ICL_LANGUAGE_CODE=='hr'){  

                     	$formID = 'd3dd8dc185';  }



                     else { 

                     	$formID = '7520bab380'; } ?>



                    <!-- Begin MailChimp Signup Form -->

						<div id="mc_embed_signup">
						<form action="//feravino.us12.list-manage.com/subscribe/post?u=8d178c75bac1270ae567632a9&amp;id=<?php echo $formID ?>" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						    <div id="mc_embed_signup_scroll">
							
						<div class="mc-field-group">
							<input placeholder="<?php _e('Unesite Vašu email adresu', 'feravino') ?>" type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
						</div>
							<div id="mce-responses" class="clear">
								<div class="response" id="mce-error-response" style="display:none"></div>
								<div class="response" id="mce-success-response" style="display:none"></div>
							</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
						    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_8d178c75bac1270ae567632a9_<?php echo $formID ?>" tabindex="-1" value=""></div>
						    <div class="clear"><input type="submit" value="<?php _e('Prijavi se', 'feravino') ?>" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
						    </div>
						</form>
						</div>
						

						<!--End mc_embed_signup-->

			

                    
                </div>
            </div>
        </div>
    </div>
    
    <!--====  End of NEWSLETTER  ====-->
	

	<!--============================
	=            FOOTER            =
	=============================-->
	
	<div class="footer">
		<div class="main-footer">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-4">
						<?php if ( is_active_sidebar( 'footer-left-sidebar' ) ) : ?>
							<div class="widget-area">
								<?php dynamic_sidebar( 'footer-left-sidebar' ); ?>
							</div>
						<?php endif; ?>
					</div>

					<div class="col-xs-12 col-sm-4">
						<?php if ( is_active_sidebar( 'footer-center-sidebar' ) ) : ?>
							<div class="widget-area">
								<?php dynamic_sidebar( 'footer-center-sidebar' ); ?>
							</div>
						<?php endif; ?>
					</div>

					<div class="col-xs-12 col-sm-4">
						<h3 class="widget-title"> <?php _e('Galerija','feravino_footer'); ?> </h3>
						<div class="footer-gallery clearfix">

							<?php
								$args = array();
								$args['post_type'] = 'gallery';
								$args['order'] = 'DESC';
								$args['posts_per_page'] = 8;
								$query = new WP_Query($args);

								

								while($query->have_posts() ) : $query->the_post(); ?>


									<div class="gallery-image clearfix">

										  <?php if ( has_post_thumbnail() ) : ?>
									       <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail('gallery-thumb'); ?></a>
									    <?php else : ?>
									        <img src="http://placehold.it/85x85" />
									    <?php endif; ?>

									</div>



								<?php 

								endwhile ; wp_reset_postdata(); ?>


						</div>

					</div>
				</div>
			</div>
		</div>
		<div class="copyright">
			<div class="container full-height">
				<div class="row full-height">
					<div class="col-xs-12 full-height animate">
						<span><?php _e( 'Copyright © 2016 feravino. Sva prava pridržana.', 'feravino' ) ?></span>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>


	<?php wp_head(); ?>

    <?php if(ICL_LANGUAGE_CODE=='hr'):

    $proizvodiLink = '/proizvodi/';
    $proizvodiNaziv = 'Proizvodi';
    


    else: 

        $proizvodiLink = '/en/proizvodi/';
        $proizvodiNaziv = 'Products';



     endif; ?>

    <script type="text/javascript">

        jQuery(document).ready(function($) {
        jQuery('.tax-product-type #breadcrumbs .breadcrumb_last').before('<a href="<?php echo $proizvodiLink ?>"><?php echo $proizvodiNaziv ?></a> >');


       jQuery('.single-products #breadcrumbs>span>span>span>a').text('<?php echo $proizvodiNaziv ?>');



    });
    </script>



	
	
	<!--====  End of FOOTER  ====-->
	
	<?php wp_footer(); ?>
</body>
</html>