					<div class="program-single clearfix">

						<div class="slider-wrap clearfix">

							<div class="main-slider left">
								<div id="slider" class="flexslider">
									<?php if( have_rows('program_single_repeater') ):  ?>
										<ul class="slides">

											<?php while( have_rows('program_single_repeater') ): the_row(); 
											$image = get_sub_field('program_single_image'); ?>

										    <li>
										     	<img src="<?php echo $image['sizes']['slider-image']; ?>" alt="<?php echo $image['alt'] ?>" />
										    </li>

											<?php endwhile; ?>

										</ul>			  		
									
										
									<?php endif; ?>		
									
								</div>
							</div>


							<div class="second-slider clearfix">
								<div id="carousel" class="flexslider left">
									<?php if( have_rows('program_single_repeater') ): ?>
										<ul class="slides">

											<?php while( have_rows('program_single_repeater') ): the_row(); 
											$image = get_sub_field('program_single_image'); ?>

										    <li>
										     	<img src="<?php echo $image['sizes']['slider-thumbnail']; ?>" alt="<?php echo $image['alt'] ?>" />
										    </li>

											<?php endwhile; ?>

										</ul>


									<?php endif; ?>	

								</div>
							</div>

						</div>


						<div class="program-single-predavac clearfix">
							<h2><?php the_field('predavac_naslov');?></h2>
							<hr>
								<div class="predavac-image">
									<?php 

									$image = get_field('predavac_image');

									if( !empty($image) ): ?>

										<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

									<?php endif; ?>
								</div>

								<div class="predavac-description">
									<?php the_field('predavac_sidetext'); ?>
								</div>

						</div>


						<div class="program-single-opcenito clearfix">
							<h2><?php the_field('opcenito_naslov')?></h2>
							<hr>
							<p><?php the_field('opcenito_textarea');?></p>
						</div>


						<div class="program-single-sazetak clearfix">
							<h2><?php the_field('sazetak_naslov'); ?></h2>
							<hr>
							<?php the_field('sazetak_text'); ?>
						</div>


						<div class="program-single-plan clearfix">
							<h2><?php the_field('plan_naslov'); ?></h2>
							<hr>

							<?php if( have_rows('plan_poglavlje_repeater') ):  ?>
								

								<?php while( have_rows('plan_poglavlje_repeater') ): the_row(); ?>
									<ul class="poglavlje">

									<div class="poglavlje-title clearfix">
										<h5><?php the_sub_field('poglavlje_naslov'); ?></h5>
									</div class="poglavlje-title clearfix">
									
										<?php if( have_rows('stavke_poglavlja_repeater') ): ?>

											<?php while( have_rows('stavke_poglavlja_repeater') ): the_row(); ?>

												<li>
													<p><?php the_sub_field('stavke_poglavlja'); ?>
												</li>

											<?php endwhile; ?>			  		
							
										<?php endif; ?>
									</ul>

								<?php endwhile; ?>
			  		
						
							<?php endif; ?>

						</div>

					</div>