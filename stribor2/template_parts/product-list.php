<div class="products-wrap container clearfix">
	<h3 class="page-subtitle bold"> <span class="red"><?php _e('Proizvodimo', 'stribor_home') ?></span> <?php _e('za vas', 'stribor_home'); ?></h3>

		<div class="product-list container clearfix">

			<?php $args = array ('hide_empty' => false); ?>
			<?php $categories = get_terms('kategorija-proizvoda', $args); ?>
                    <?php foreach ($categories as $category) : ?>



                    	<?php 
            			$image = get_field('featured_image', $category); ?>

                    	<div class="product-item clearfix">

                    		<div class="padding clearfix">
	                    		<div class="product-image clearfix" style="background: url(<?php echo $image ?>) no-repeat center center; background-size: contain;">
	                    		</div>
	                    	</div>

                            <a href="<?php echo get_category_link($category->cat_ID); ?>">

                                <div class="product-title">
                                    <h5 class="bold black"><?php echo $category->name; ?></h5>
                                </div>

                            </a>

                        </div>

                    <?php endforeach; ?>

        </div>

</div>