
<?php get_header(); ?>

    <!--=================================
    =            BREADCRUMBS            =
    ==================================-->
    
    <div class="breadcrumbs-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <?php if ( function_exists('yoast_breadcrumb') ) 
{yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
                </div>
            </div>
        </div>
    </div>
    
    <!--====  End of BREADCRUMBS  ====-->

    <!--==================================
    =            PAGE CONTENT            =
    ===================================-->
    
    <div class="container">
        <div class="row">
            <div class="col-xs-12 page-content">

                <h1 class="page-headline"><?php echo single_cat_title( '', false ); ?></h1>
                <!-- Loop -->
                <?php echo do_shortcode(term_description()); ?>
            </div>
        </div>
    </div>
    
    <!--====  End of PAGE CONTENT  ====-->
    

    <!--==============================
    =            PRODUCTS            =
    ===============================-->
    
    <div class="products">
        <div class="container">
            <div class="row">
                <?php
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post(); 
                    $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                    <div class="col-xs-12 col-sm-3">
                        <div class="product-item animate" style="background: url('<?php echo $feat_image; ?>') no-repeat center center;">
                            <div class="product-content menu__link">
                                <div class="vertical">
                                    <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
    
    <!--====  End of PRODUCTS  ====-->


    <!--================================
    =            WINE LINES            =
    =================================-->
    
    <div class="wine-lines">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="animate"><?php _e('Ostale linije vina', 'feravino') ?></h1>
                </div>
            </div>
            <div class="row">
                <div class="wine-lines-slider animate">
                <?php $categories = get_categories('taxonomy=product-type&post_type=products'); ?>
                    <?php foreach ($categories as $category) : ?>
                        <div class="col-xs-12 col-sm-4">
                            <div class="wine-item">

                            <?php 

                                $image = get_field('featured_image', $category);
                                $size = 'news-thumb';
                                $thumb = $image['sizes'][$size]; ?>


                                    <img src="<?php echo $thumb; ?>" alt="<?php echo $image['alt']; ?>" />

                                <a href="<?php echo get_category_link($category->cat_ID); ?>">
                                    <div class="wine-title">
                                        <h1><?php echo $category->name; ?></h1>
                                    </div>
                                </a>
                            </div>
                        </div>
                <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    
    <!--====  End of WINE LINES  ====-->
    
    

    
<?php get_footer(); ?>