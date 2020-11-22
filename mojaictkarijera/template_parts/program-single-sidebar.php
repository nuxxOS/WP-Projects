							<div class="info-table clearfix">
								<?php if( have_rows('sidebar_repeater') ):  ?>

									<?php while( have_rows('sidebar_repeater') ): the_row(); ?>
										

											<div class="table-row clearfix">

											    <div class="table-block block-left clearfix">
											     	<?php the_sub_field('repeater_stavka'); ?>
											    </div>

											    <div class="table-block block-right clearfix">
											    	<?php the_sub_field('opis_stavke'); ?>
											    </div>

											</div>


									<?php endwhile; ?>			  		
							
								<?php endif; ?>

								<div class="prijava-button clearfix"> 
									<a href="<?php echo get_permalink( 335 ); ?>">Prijavi se na edukaciju</a>
								</div>

							</div>

							<div class="widget-wrap clearfix">

								<?php dynamic_sidebar('SidebarTwo'); ?>

							</div>