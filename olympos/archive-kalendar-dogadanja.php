<?php get_header(); ?>
  <?php if (have_posts()) : ?>
  		<header>
			<div class="row">
				<div class="span2">
				
				<?php include(locate_template('cptnames.php')); ?> 
				<?php
				if(ICL_LANGUAGE_CODE=="hr") {
					$sport = "sport";
					$kultura = "kultura";
					$manifestacije = "manifestacije";
					$sajmovi = "sajmovi";
					
				} elseif(ICL_LANGUAGE_CODE=="en") {
					$sport = "sport-en";
					$kultura = "culture";
					$manifestacije = "events";
					$sajmovi = "trade-shows";
				} 
					?>
					<a href="<?php echo icl_get_home_url() ?>" class="home">h</a>
				</div>
				<div class="span8 tc">
					<h1><img src="<?php bloginfo('template_url'); ?>/images/<?php echo $post_type_slug; ?>.png" alt="<?php _e("<?php echo $post_type_name; ?>", "ilium"); ?>"> <?php echo $post_type_name; ?></h1>
				</div>
				<div class="span2 last tr">&nbsp;</div>
			</div>
		</header>
		<div class="main">
			<div class="sidebar">
				<?php 
					$tax=get_object_taxonomies( $post_type_slug, 'names' );
				?>
					<ul class="dogadjaji">
						<?php
						$args = array();
						$args['post_type'] = $post_type_slug;
						$args['order'] = ASC;
						$args['posts_per_page'] = -1;
						$query = new WP_Query($args);
						while($query->have_posts() ) : $query->the_post(); 
            $lokacija = types_render_field("adresa", array("output"=>"raw"));
            $datum = types_render_field("datum-i-vrijeme-dogadanja", array("format"=>"l, d.m.Y. H:i"));
						$terms = wp_get_post_terms($post->ID, "tip-kalendar", array("fields" => "slugs"));
						?>	
							<li class="<?php echo $terms[0]; ?>"><a href="<?php the_permalink(); ?>">
								<div class="datum"><?php echo $datum; ?></div>
								<h4><?php the_title(); ?>, <?php echo $lokacija; ?></h4>
								</a>
							</li>
						<?php endwhile;  wp_reset_postdata();
						?>
					</ul>
			</div><!--sidebar-->
			<div class="maincontent">
			
				<div class="datepicker"></div>
	
			</div><!--maincontent-->
		</div><!--main-->
	<?php endif; ?> 
			
				
				<script>
					jQuery(document).ready(function($) {

						var sport = [<?php
						$args = array();
						$args['post_type'] = $post_type_slug;
						$args['order'] = ASC;
						$args['posts_per_page'] = -1;
						$args['tip-kalendar'] = $sport;
						$query = new WP_Query($args); 
						while($query->have_posts() ) : $query->the_post(); 
							$datum = types_render_field("datum-i-vrijeme-dogadanja", array("format"=>"m/d/Y"));
							echo '"'.$datum.'", ';
						endwhile;  wp_reset_postdata();
						?>]; 

                        var manifestacije = [<?php
						$args = array();
						$args['post_type'] = $post_type_slug;
						$args['order'] = ASC;
						$args['posts_per_page'] = -1;
						$args['tip-kalendar'] = $manifestacije;
						$query = new WP_Query($args); 
						while($query->have_posts() ) : $query->the_post(); 
							$datum = types_render_field("datum-i-vrijeme-dogadanja", array("format"=>"m/d/Y"));
							echo '"'.$datum.'", ';
						endwhile;  wp_reset_postdata();
						?>];  
						
						var sajmovi = [<?php
						$args = array();
						$args['post_type'] = $post_type_slug;
						$args['order'] = ASC;
						$args['posts_per_page'] = -1;
						$args['tip-kalendar'] = $sajmovi;
						$query = new WP_Query($args); 
						while($query->have_posts() ) : $query->the_post(); 
							$datum = types_render_field("datum-i-vrijeme-dogadanja", array("format"=>"m/d/Y"));
							echo '"'.$datum.'", ';
						endwhile;  wp_reset_postdata();
						?>];  
						
						var kultura = [<?php
						$args = array();
						$args['post_type'] = $post_type_slug;
						$args['order'] = ASC;
						$args['posts_per_page'] = -1;
						$args['tip-kalendar'] = $kultura;
						$query = new WP_Query($args); 
						while($query->have_posts() ) : $query->the_post(); 
							$datum = types_render_field("datum-i-vrijeme-dogadanja", array("format"=>"m/d/Y"));
							echo '"'.$datum.'", ';
						endwhile;  wp_reset_postdata();
						?>];  

						$('.datepicker').datepicker({  
								inline: true,
								minDate: 0,
								dateFormat: "dd/mm/yy",
								numberOfMonths: [6,1],
								showOtherMonths: true,  
								beforeShowDay: highlightDays,
						});

						function highlightDays(date) {
								for (var i = 0; i < sport.length; i++) {
										if (new Date(sport[i]).toString() == date.toString()) {              
												return [true, 'sport', 'dbdf'];
										}
								}
								for (var i = 0; i < kultura.length; i++) {
										if (new Date(kultura[i]).toString() == date.toString()) {              
												return [true, 'kultura', 'dbdf'];
										}
								}
								for (var i = 0; i < sajmovi.length; i++) {
										if (new Date(sajmovi[i]).toString() == date.toString()) {              
												return [true, 'sajmovi', 'dbdf'];
										}
								}
								for (var i = 0; i < manifestacije.length; i++) {
										if (new Date(manifestacije[i]).toString() == date.toString()) {              
												return [true, 'manifestacije', 'dbdf'];
										}
								}
								return [true, ''];
						 } 

				});
			</script>
					
<?php get_footer(); ?>