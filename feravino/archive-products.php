<?php 

    /* Template name: Products page template */

 ?>


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
            <div class="col-xs-12">
                <!-- Loop -->
                <div class="products row">
                <?php
                        $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
                        query_posts( array( 'post_type' => 'products', 'posts_per_page' => 12, 'caller_get_posts' => 12, 'paged' => $paged ) );
                    ?>
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <?php  $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                        <div class="col-xs-12 col-sm-3">
                            <div class="product-item" style="background: url('<?php echo $feat_image; ?>') no-repeat center center;  background-size: contain;">
                                <a href="<?php the_permalink(); ?>" class="product-content">
                                    <div class="vertical">
                                        <span><?php the_title(); ?></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                <?php endwhile; ?>

                    <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
                    
                <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    
    <!--====  End of PAGE CONTENT  ====-->
    
    
	
<?php get_footer(); ?>