<?php
/**
 * Template name: Početna
 */

   get_header(); ?>
  <?php if (have_posts()) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
		<header>
			<div class="row">
				<div class="span6">
					<a href="<?php echo icl_get_home_url() ?>" class="home">h</a>
				</div>
				<div class="span6 last tr">
					<div class="languages">
            <?php
            $langArray = icl_get_languages('skip_missing=1&orderby=KEY&order=DIR&link_empty_to=str'); 
                sort($langArray);
                foreach ($langArray as $key => $lang) {?>
              <a class="active<?php echo $lang['active'] ?>" href="<?php echo $lang['url']; ?>"><?php echo $lang['language_code']; ?></a>
            <?php } ?>
					</div>
				</div>
			</div>
		</header>
		
		<div class="homemain">
			<div class="row title clearfix">
				<div class="span3">&nbsp;</div>
				<div class="span6 tc"><h1><?php the_title(); ?></h1></div>
				<div class="span3 last tr temperatura">
				
					<?php 
					$connected = @fsockopen("www.google.com", 80);
					if($connected) {
						$json = file_get_contents('http://api.wunderground.com/api/3d22f27c5022eb78/conditions/forecast/lang:HR/q/Croatia/Vukovar.json');
						$obj = json_decode($json);  ?>
					<a href="<?php echo get_permalink(icl_object_id(994, 'page', true)) ?>" class="prognoza-vremena clearfix">
						<img src="<?php bloginfo('template_url'); ?>/prognoza/<?php echo $obj->current_observation->icon ?>.png" alt="<?php echo $obj->current_observation->icon; ?>">
						<span class="tcel">
							<?php echo $obj->current_observation->temp_c; ?>°
						</span>      
					</a><!--/prognoza-vremena-->
				 <?php } else {echo "&nbsp"; } ?>
				</div><!--temperatura-->
			</div>
			
			<div class="links">
			<?php global $sitepress; ?>
				<div class="link"><a href="<?php echo get_permalink(icl_object_id(992, 'page', true)) ?>"><img src="<?php bloginfo('template_url'); ?>/images/map-pointer2.png" alt="<?php _e("Interactive map", "ilium"); ?>"><span><?php _e("Interactive map", "ilium"); ?></span></a></div>
				<div class="link"><a href="<?php echo $sitepress->convert_url(get_post_type_archive_link('o-gradu')); ?>/"><img src="<?php bloginfo('template_url'); ?>/images/o-gradu.png" alt="<?php _e("About Vukovar", "ilium"); ?>"><span><?php _e("About Vukovar", "ilium"); ?></span></a></div>
				<div class="link"><a href="<?php echo $sitepress->convert_url(get_post_type_archive_link('znamenitost')); ?>"><img src="<?php bloginfo('template_url'); ?>/images/znamenitost.png" alt="<?php _e("Discover Vukovar", "ilium"); ?>"><span><?php _e("Discover Vukovar", "ilium"); ?></span></a></div>
				<div class="link"><a href="<?php echo $sitepress->convert_url(get_post_type_archive_link('kalendar-dogadanja')); ?>"><img src="<?php bloginfo('template_url'); ?>/images/kalendar-dogadanja.png" alt="<?php _e("Event calendar", "ilium"); ?>"><span><?php _e("Event calendar", "ilium"); ?></span></a></div>
				<div class="link last"><a href="<?php echo $sitepress->convert_url(get_post_type_archive_link('smjestaj')); ?>"><img src="<?php bloginfo('template_url'); ?>/images/smjestaj.png" alt="<?php _e("Accommodation", "ilium"); ?>"><span><?php _e("Accommodation", "ilium"); ?></span></a></div>
				<div class="link"><a href="<?php echo $sitepress->convert_url(get_post_type_archive_link('ugostiteljstvo')); ?>"><img src="<?php bloginfo('template_url'); ?>/images/ugostiteljstvo.png" alt="<?php _e("Gastronomy", "ilium"); ?>"><span><?php _e("Gastronomy", "ilium"); ?></span></a></div>
				<div class="link"><a href="<?php echo $sitepress->convert_url(get_post_type_archive_link('servis-i-ostalo')); ?>"><img src="<?php bloginfo('template_url'); ?>/images/servis-i-ostalo.png" alt="<?php _e("Services", "ilium"); ?>"><span><?php _e("Services", "ilium"); ?></span></a></div>
				<div class="link"><a href="<?php echo $sitepress->convert_url(get_post_type_archive_link('turist-info')); ?>"><img src="<?php bloginfo('template_url'); ?>/images/turist-info.png" alt="<?php _e("Tourist info", "ilium"); ?>"><span><?php _e("Tourist info", "ilium"); ?></span></a></div>
				<div class="link"><a href="<?php echo $sitepress->convert_url(get_post_type_archive_link('multimedija')); ?>"><img src="<?php bloginfo('template_url'); ?>/images/multimedija.png" alt="<?php _e("Multimedia", "ilium"); ?>"><span><?php _e("Multimedia", "ilium"); ?></span></a></div>
				<div class="link last"><a href="<?php echo $sitepress->convert_url(get_post_type_archive_link('sport-i-rekreacija')); ?>"><img src="<?php bloginfo('template_url'); ?>/images/sport-i-rekreacija.png" alt="<?php _e("Sports and Recreation", "ilium"); ?>"><span><?php _e("Sports and Recreation", "ilium"); ?></span></a></div>
			</div>
		<div class="logo tc"><img src="<?php bloginfo('template_url'); ?>/images/gauss.png" alt="Gauss Development"></div>
			
		</div>
		
			
			

		<?php endwhile;  ?>
	<?php endif; ?> 

<?php get_footer(); ?>