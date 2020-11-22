<?php get_header(); ?>
  <?php if (have_posts()) : ?>

 	
  	<header>
			<div class="row">
				<div class="span3">
				
				<?php include(locate_template('cptnames.php')); ?> 
					<a href="<?php echo icl_get_home_url() ?>" class="home">h</a>
					<a href="javascript:history.back()" class="back">b</a>
				</div>
				<div class="span6 tc">
				
					<h1><img src="<?php bloginfo('template_url'); ?>/images/<?php echo $post_type_slug; ?>.png" alt="<?php _e("Interaktivna karta", "ilium"); ?>"> <?php echo $post_type_name; ?></h1>
				</div>
				<div class="span3 last tr">&nbsp;</div>
			</div>
		</header>
		<div class="main ugostiteljstvo kalendar">
				<div class="maincontent">
						<?php while ( have_posts() ) : the_post();
            $adresa = types_render_field("adresa", array("output"=>"raw"));
            $datum = types_render_field("datum-i-vrijeme-dogadanja", array("format"=>"l, d.m.Y. H:i"));
							?>	
							
							<h1><?php the_title(); ?></h1>
							<div class="row">
								<div class="span6 sadrzaj">
									<div class="slika"><?php if(has_post_thumbnail()) { the_post_thumbnail('srednje'); } ?></div>
								</div>
								<div class="span6 last info">
									<ul class="podaci">
									<?php if(!empty($datum)) {?> <li><?php _e("Starting time", "ilium"); ?>: <span class="podatak"><?php echo $datum; ?></span></li><?php } ?>
									<?php if(!empty($adresa)) {?> <li><?php _e("Address", "ilium"); ?>: <span class="podatak"><?php echo $adresa; ?></span></li><?php } ?>		
									</ul>
									<?php the_content(); ?>
								</div>
							</div>
						<?php endwhile;  wp_reset_postdata(); ?>
					
				</div><!--content-->
		</div><!--main-->
	<?php endif; ?> 

<?php get_footer(); ?>