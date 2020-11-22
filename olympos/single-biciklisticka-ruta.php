<?php get_header(); ?>
  <?php if (have_posts()) : ?>		<header>
			<div class="row">
				<div class="span3">
				<?php
					
				$post_type = "sport-i-rekreacija";
				
				if ( $post_type )
				{
						$post_type_data = get_post_type_object( $post_type );
						$post_type_slug = $post_type_data->rewrite['slug'];
						$post_type_nameor = $post_type_data->labels->name;
				}
				
				if(ICL_LANGUAGE_CODE=="hr") {
					$post_type_name = $post_type_nameor;
					
				} elseif(ICL_LANGUAGE_CODE=="en") {
					
					switch ($post_type_slug) {
							case "o-gradu":
									$post_type_name = "About Vukovar";
									break;
							case "znamenitost":
									$post_type_name = "Discover Vukovar";
									break;
							case "kalendar-dogadanja":
									$post_type_name = "Event calendar";
									break;
							case "smjestaj":
									$post_type_name = "Accommodation";
									break;
							case "ugostiteljstvo":
									$post_type_name = "Gastronomy";
									break;
							case "servis-i-ostalo":
									$post_type_name = "Services";
									break;
							case "turist-info":
									$post_type_name = "Tourist info";
									break;
							case "multimedija":
									$post_type_name = "Multimedia";
									break;
							case "sport-i-rekreacija":
									$post_type_name = "Sports and Recreation";
									break;
					}
				}
					?>
					<a href="<?php echo icl_get_home_url() ?>" class="home">h</a>
					<a href="javascript:history.back()" class="back">b</a>
				</div>
				<div class="span6 tc">
					<h1><img src="<?php bloginfo('template_url'); ?>/images/<?php echo $post_type_slug; ?>.png" alt="<?php _e("Interaktivna karta", "ilium"); ?>"> <?php echo $post_type_name; ?></h1>
				</div>
				<div class="span3 last tr">&nbsp;</div>
			</div>
		</header>

		<div class="main ugostiteljstvo biciklistickestaze">
				<div class="maincontent">
						<?php while ( have_posts() ) : the_post(); 
            $ruta = types_render_field("ruta", array("output"=>"raw"));
            $legenda = types_render_field("legenda", array("output"=>"raw"));
            $legende = get_post_meta($post->ID, "wpcf-legenda");  ?>	
							
							<h1><?php the_title(); ?></h1>
							
							<div class="row">
								<div class="slika"><img src="<?php echo $ruta; ?>" alt=""></div>
								<div class="legenda">
									<?php
									foreach($legende as $legenda){ ?>
										<img src="<?php echo $legenda; ?>" alt="Legenda">
									<?php } ?>
									
								</div>
							</div>
						<?php endwhile;  wp_reset_postdata(); ?>
					
				</div><!--content-->
		</div><!--main-->

	<?php endif; ?> 

<?php get_footer(); ?>