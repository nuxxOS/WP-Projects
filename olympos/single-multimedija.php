<?php get_header(); ?>
  <?php if (have_posts()) : ?>		<header>
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
		<div class="main ugostiteljstvo">
				<div class="maincontent">
						<?php while ( have_posts() ) : the_post(); 
						$galerija = get_field('galerija_slika_multimedija');
						if(!empty($galerija))	{ 
								echo '<div class="galerija row">';
								$i = 1;
								foreach($galerija as $slika) { ?>
									<div class="img span4 <?php if($i % 3 == 0) {echo "last";} ?>"><a href="<?php echo $slika['url']; ?>" class="zoomimg"><img src="<?php echo $slika['sizes']['galerija']; ?>" alt="Slika"></a></div>
								<?php $i++;
								}
								echo "</div>";
						} else { ?>	
							<iframe src="http://360vr.virtuabit.hr/vukovar" frameborder="0" width="100%" height="1045px"></iframe>
							
						<?php } ?>	
						<?php endwhile;  wp_reset_postdata(); ?>
					
				</div><!--content-->
		</div><!--main-->
	<?php endif; ?> 

<?php get_footer(); ?>