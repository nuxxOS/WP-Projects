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
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <div class="post-content" id="post-<?php the_ID(); ?>">
                        <h1 class="page-headline animate"><?php the_title(); ?></h1>
                        <div class="animate">
                            <?php the_content(); ?>
                        </div>
                    </div>

                <?php endwhile; endif; ?>                
            </div>
        </div>
    </div>
    
    <!--====  End of PAGE CONTENT  ====-->


    <!--==================================
    =            PRODUCT INFO            =
    ===================================-->
    <?php if(have_rows('information')) { ?>
    <div class="product-info">
        <div class="container full-height">
            <div class="row full-height">
                <div class="col-xs-12 full-height">
                    <div class="product-content">
                        <h1 class="animate"><?php _e('Informacije o proizvodu', 'feravino'); ?></h1>
                        <div class="information-list row">
                            <ul class="col-xs-12 col-sm-4">
                            <?php
                            $counter = 0;
                            if( have_rows('information') ):
                                while ( have_rows('information') ) : the_row(); 
                                if($counter == 5) {
                                    $counter = 0;
                                    echo '</ul><ul class="col-xs-12 col-sm-4">';
                                }
                            ?>
                                    <li class="animate"><?php the_sub_field('info'); ?></li>     
                            <?php $counter++; endwhile; endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <!--====  End of PRODUCT INFO  ====-->
    
    
    <!--============================
    =            AWARDS            =
    =============================-->
    <?php if (have_rows('awards')) { ?>    
    <div class="awards">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="animate"><?php _e('Nagrade i priznanja', 'feravino'); ?></h1>
                    <ul>
                    <?php
                    if( have_rows('awards') ):
                        while ( have_rows('awards') ) : the_row(); ?>
                            <li class="animate"><?php the_sub_field('award'); ?></li>     
                    <?php endwhile; endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    
    <!--====  End of AWARDS  ====-->


    <!--==============================
    =            PRODUCTS            =
    ===============================-->


    
    <div class="products-list section border-top">
        <div class="container">
            <div class="row">
                <h1 class="page-headline animate"><?php _e('Ostale vina linije', 'feravino'); ?></h1>
                <?php
                $terms = wp_get_post_terms( $post->ID, 'product-type' );
                // concatenate the query
                $args = array(
                    'posts_per_page' => 10,
                    'post_type' => 'products',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'product-type',
                            'field' => 'slug',
                            'terms' => $terms[0]->name
                        )
                    )
                );
                $posts = new WP_Query( $args ); ?>
                <div class="products-slider animate">
                    <?php if ( $posts->have_posts() ) :
                        while ( $posts->have_posts() ) : $posts->the_post(); 
                        $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                        <div class="col-xs-12 col-sm-3">
                            <div class="product-item" style="background: url('<?php echo $feat_image; ?>') no-repeat center center;background-size: contain!important;">
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
    </div>
    
    <!--====  End of PRODUCTS  ====-->
    
	
<?php get_footer(); ?>