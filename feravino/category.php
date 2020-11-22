<?php get_header(); ?>

    <!--==================================
    =            PAGE CONTENT            =
    ===================================-->
    
    <div class="container">
        <div class="row">
            <div class="col-xs-12 page-content">

                <h1 class="page-title"><?php echo single_cat_title( '', false ); ?></h1>
                <!-- Loop -->
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <div id="post-<?php the_ID(); ?>">
                        <?php the_content(); ?>
                    </div>

                <?php endwhile; endif; ?>
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
                    <div class="col-xs-12 col-sm-4">
                        <div class="featured-item" style="background: url('<?php echo $feat_image; ?>') no-repeat center center;">
                            <div class="featured-content">
                                <div class="vertical">
                                    <span><?php the_category(', '); ?></span>
                                    <div class="separator"></div>
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
    

    
<?php get_footer(); ?>