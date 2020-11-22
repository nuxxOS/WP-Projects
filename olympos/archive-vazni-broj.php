<?php get_header(); ?>		
  <header>
			<div class="row">
				<div class="span2">
				<?php
					
				$post_type = "servis-i-ostalo";
				
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
				</div>
				<div class="span8 tc">
					<h1><img src="<?php bloginfo('template_url'); ?>/images/<?php echo $post_type_slug; ?>.png" alt="<?php echo $post_type_name; ?>"> <?php echo $post_type_name; ?></h1>
				</div>
				<div class="span2 last tr">&nbsp;</div>
			</div>
		</header>
		<div class="main">
			<div class="sidebar">
				<?php 
					$tax=get_object_taxonomies( $post_type_slug, 'names' );
				?>
					<ul class="posts">
						<?php
						$terms = get_terms($tax[0]);
						foreach($terms as $term){ 
							$current = $wp_query->queried_object;
							$link = get_term_link( $term->slug, $tax[0] ); ?>
							<li><a <?php if($current->slug==$term->slug){echo 'class="active"'; } ?> href="<?php echo $link; ?>"><?php echo $term->name; ?></a></li>
						<?php } ?>
							
							<li class="active"><a href="<?php echo $sitepress->convert_url(get_post_type_archive_link('vazni-broj')); ?>"><?php _e("Important Numbers", "ilium"); ?></a></li>
					</ul>
			</div><!--sidebar-->
			<div class="maincontent brojevi">
					<?php
					if(empty($tax)):
						$args = array();
						$args['post_type'] = $post_type_slug;
						$args['order'] = ASC;
						$args['posts_per_page'] = 1;
						$query = new WP_Query($args);
						while($query->have_posts() ) : $query->the_post(); 
						$galerija = get_field('galerija_slika_multimedija');
				?>	
							<h1><?php the_title(); ?></h1>
							<div class="slika"><?php if(has_post_thumbnail()) { the_post_thumbnail('single', array( 'class' => 'aligncenter' )); } ?></div>
							<?php the_content(); 
							if(!empty($galerija)) {
								echo '<div class="galerija row">';
								$i = 1;
								foreach($galerija as $slika) { ?>
									<div class="img span6 <?php if($i % 2 == 0) {echo "last";} ?>"><a href="<?php echo $slika['url']; ?>" class="zoomimg"><img src="<?php echo $slika['sizes']['srednje']; ?>" alt="Slika"></a></div>
								<?php $i++;
								}
								echo "</div>";
							} ?>
						<?php endwhile;  wp_reset_postdata(); 
				
					else:	
				
					if(is_post_type_archive()) {
						$termsri= array_values($terms);
						$termname=$termsri[0]->name;
						$termslug=$termsri[0]->slug;;
					} else {
						$current = $wp_query->queried_object;
						$termname=$current->name;
						$termslug=$current->slug;
					}
				?>
					
						<h1 class="row"><?php if(!empty($termname)) {echo $termname; } else {echo $post_type_name; } ?></h1>
						<div class="row clanci">
							
				<?php
						$i = 1;
						$args = array();
						$args['post_type'] = "vazni-broj";
						$args['order'] = ASC;
						$args['posts_per_page'] = -1;
						$query = new WP_Query($args);
						while($query->have_posts() ) : $query->the_post();  
						$telefon = get_field("telefon"); ; ?>
						
							<div data-name="<?php echo get_the_slug(); ?>" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>" class="article span6<?php if($i % 2 == 0) {echo " last";} ?>">
							
								<?php if(has_post_thumbnail()) { the_post_thumbnail('male', array( 'class' => 'alignleft' )); } else { ?><img src="<?php bloginfo('template_url'); ?>/images/Rectangle-7-copy-19.png" alt="Vukovar" class="alignleft"> <?php } ?>
								<h4><?php the_title(); ?></h4>
								
								<div class="tel"><?php echo $telefon; ?></div> 
							</div>
							
						<?php $i++; endwhile;  wp_reset_postdata();?>
						</div>
					<?php 	endif; ?>
					
			</div><!--content-->
		</div><!--main-->

<?php get_footer(); ?>