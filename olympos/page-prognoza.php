<?php
/**
 * Template name: Prognoza
 */

   get_header(); ?>
  <?php if (have_posts()) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
		<header>
			<div class="row">
				<div class="span2">
					<a href="<?php echo icl_get_home_url() ?>" class="home">h</a>
				</div>
				<div class="span8 tc"><h1><?php the_title(); ?></h1></div>
				<div class="span2 last">&nbsp;</div>
			</div>
		</header>
		<div class="homemain">
		<div class="prognoza">
				
					<?php 
						setlocale(LC_TIME, 'hr_HR','hrv_HRV', 'hr', 'hrv', 'croatian', 'hrvatski', 'Croatian', 'Hrvatski', 'hr_HR.utf8');
						$json = file_get_contents('http://api.wunderground.com/api/3d22f27c5022eb78/conditions/forecast/lang:HR/q/Croatia/Vukovar.json');
						$obj = json_decode($json);
						$day = $obj->forecast->simpleforecast->forecastday;
					?>
			<div class="row">
				<div class="span6 danas">
					<div class="datum"><?php echo strftime("%d.%m.%Y.", $day[0]->date->epoch); ?></div>
					<div class="row">
						<div class="span4 temperatura">
							<div class="najvisa"><?php echo $day[0]->high->celsius; ?>°C</div>
							<div class="najniza"><?php echo $day[0]->low->celsius; ?>°C</div>
							<div class="ostalo">
								<?php _e("Wind", "ilium"); ?>: <?php echo $day[0]->avewind->kph; ?> km/h <br>
								<?php _e("Humidity", "ilium"); ?>: <?php echo $day[0]->avehumidity; ?>%
							</div>
						</div>
						<div class="span8 ikonica last"><img src="<?php bloginfo('template_url'); ?>/prognoza/<?php echo $day[0]->icon; ?>.png" alt=""></div>
					</div>
				</div>
				
				<div class="span6 ostalidani last">
					<ul class="dani">
						<li class="sutra">
							<div class="datum"><?php echo strftime("%d.%m.%Y.", $day[1]->date->epoch); ?></div>
							<div class="row">
								<div class="span4 temperatura">									
									<div class="najvisa"><?php echo $day[1]->high->celsius; ?>°C</div>
									<div class="najniza"><?php echo $day[1]->low->celsius; ?>°C</div>
								</div>
						<div class="span4 ikonica"><img src="<?php bloginfo('template_url'); ?>/prognoza/<?php echo $day[1]->icon; ?>.png" alt=""></div>
								<div class="span4 last tr ostalo">
									<?php _e("Wind", "ilium"); ?>: <?php echo $day[1]->avewind->kph; ?> km/h <br>
									<?php _e("Humidity", "ilium"); ?>: <?php echo $day[1]->avehumidity; ?>%									
								</div>
							</div>
						</li>
						<li class="preksutra">
							<div class="datum"><?php echo strftime("%d.%m.%Y.", $day[2]->date->epoch); ?></div>
							<div class="row">
								<div class="span4 temperatura">									
									<div class="najvisa"><?php echo $day[2]->high->celsius; ?>°C</div>
									<div class="najniza"><?php echo $day[2]->low->celsius; ?>°C</div>
								</div>
						<div class="span4 ikonica"><img src="<?php bloginfo('template_url'); ?>/prognoza/<?php echo $day[2]->icon; ?>.png" alt=""></div>
								<div class="span4 last tr ostalo">
									<?php _e("Wind", "ilium"); ?>: <?php echo $day[2]->avewind->kph; ?> km/h <br>
									<?php _e("Humidity", "ilium"); ?>: <?php echo $day[2]->avehumidity; ?>%									
								</div>
							</div>
						</li>
						<li class="naksutra">
							<div class="datum"><?php echo strftime("%d.%m.%Y.", $day[3]->date->epoch); ?></div>
							<div class="row">
								<div class="span4 temperatura">									
									<div class="najvisa"><?php echo $day[3]->high->celsius; ?>°C</div>
									<div class="najniza"><?php echo $day[3]->low->celsius; ?>°C</div>
								</div>
						<div class="span4 ikonica"><img src="<?php bloginfo('template_url'); ?>/prognoza/<?php echo $day[3]->icon; ?>.png" alt=""></div>
								<div class="span4 last tr ostalo">
									<?php _e("Wind", "ilium"); ?>: <?php echo $day[3]->avewind->kph; ?> km/h <br>
									<?php _e("Humidity", "ilium"); ?>: <?php echo $day[3]->avehumidity; ?>%									
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
			
	
			
		</div>
			

		<?php endwhile;  ?>
	<?php endif; ?> 

<?php get_footer(); ?>