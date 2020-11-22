<div class="cat-wrap container clearfix">
	<h3 class="page-subtitle bold"> <span class="red"><?php _e('Proizvodimo', 'stribor_home') ?></span> <?php _e('za vas', 'stribor_home'); ?></h3>

		<div class="cat-list container clearfix">

			<?php 

            $args = array(); 
            $args['hide_empty'] = false; 
            $args['post_type'] = 'product';
            $args['parent'] = 0; ?>

			<?php $categories = get_terms('product_cat', $args); ?>
                <?php foreach ($categories as $category) : ?>



                	<?php 

        			$image = get_field('featured_image', $category);
                    $term_link = get_term_link( $category ); ?>


                	<div class="cat-item clearfix">
                        <div class="image-overlay clearfix">
                    		<div class="padding clearfix">
	                    		<div class="cat-image clearfix" style="background: url(<?php echo $image ?>) no-repeat center center; background-size: contain;">             
                    		    </div>
                            </div>
                            <div class="view-more clearfix"><?php echo '<a href="' . esc_url( $term_link ) . '" class="black">' . '<span class="icon-search border"></span>' . '</a>'; ?>
                            </div>
                    	</div>

                        <div class="cat-title">
                            <h5 class="bold"><?php echo '<a href="' . esc_url( $term_link ) . '" class="black">' . $category->name . '</a>'; ?></h5>
                        </div>



                    </div>

                <?php endforeach; ?>

        </div>

</div>