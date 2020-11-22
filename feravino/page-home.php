<?php 

    /* Template name: Home page template */

 ?>

<?php get_header(); ?>


    <!--============================
    =            SLIDER            =
    =============================-->

    <div class="slider" id="home-slider">
        <?php
        $loop = new WP_Query( array( 'post_type' => 'slider', 'post_per_page' => 3 ) );
        if ( $loop->have_posts() ) :
            while ( $loop->have_posts() ) : $loop->the_post(); 
            $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
            <!-- Slide -->
            <div class="slide" style="background: url('<?php echo $feat_image; ?>') no-repeat center center;">
                 
                <div class="slide_content">
                    <div class="banner-container">
                        <h1><?php the_title(); ?></h1>
                        <p><?php echo excerpt(125); ?></p>
                        <a href="<?php the_field('button_url') ?>" class="menu__link"><?php _e( 'Saznaj više', 'feravino' ) ?></a>
                    </div>
                </div>
            </div>
                
        <?php endwhile; endif; ?>
       
    </div>
    
    
    <!--====  End of SLIDER  ====-->
    

    <!--==============================
    =            FEATURES            =
    ===============================-->
    
    <div class="features section">
        <div class="container">
            <div class="row">

             <?php if(ICL_LANGUAGE_CODE=='hr'): 

                    $pageID = '7'; 


                else: 

                    $pageID = '214';

                endif; ?>

            <?php
                
                if( have_rows('additional_pages_repeater', $pageID) ):
                    while ( have_rows('additional_pages_repeater', $pageID) ) : the_row(); ?>


                 <?php 

                    $thumbnail = get_sub_field('additional_page_thumbnail', $pageID);
                    $image = get_sub_field('additional_page_image', $pageID);
                    $size = 'news-thumb';
                    $thumb = $image['sizes'][$size]; ?>

                     

                        <div class="col-xs-12 col-sm-4">
                            <div class="feature_item"> 

                                <img src="<?php echo $thumbnail['url']; ?>"/>                   

                                <h3 class="animate"><?php the_sub_field('additional_page_title', $pageID); ?></h3>

                                <img class="animate" src="<?php echo $thumb; ?>" />

                                <p class="animate"><?php the_sub_field('additional_page_textarea', $pageID); ?></p>

                                <a href="<?php the_sub_field('additional_page_url', 7); ?>" class="menu__link animate"><?php _e( 'Više', 'feravino' ) ?></a>
                            </div>
                        </div>

                    <?php endwhile; ?>

                <?php endif; ?>
   

            </div>
        </div>
    </div>
    
    
    <!-- 
    <div class="more-pages-thumb">
        <img class="animate" src="<?php echo $thumb; ?>" />

            <div class="more-pages">
                <a href="<?php the_sub_field('additional_page_url', 7); ?>" class="menu__link animate"><?php _e( 'Više', 'feravino' ) ?></a>
            </div>
    </div> -->

    <!--====  End of FEATURES  ====-->


    <!--====================================
    =            FEATURED WINES            =
    =====================================-->
    
    <div class="featured-wines">
        <div class="container">
            <div class="row">
                <h3><?php _e('Izdvajamo za vas', 'feravino' ); ?></h3>
                <div class="featured-wine-slider">
                    <?php
                    
                        $page = get_query_var( 'paged' );
                        $args = array();
                        $args['post_type'] = 'products';
                        $args['product-type'] = 'dika, miraz, poklon-paketi';
                        $args['posts_per_page'] = 12;
                        $args['paged'] = $page;
                        $loop = new WP_Query($args);


                    if ( $loop->have_posts() ) :
                        while ( $loop->have_posts() ) : $loop->the_post(); 
                        $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                        <div class="col-xs-12 col-sm-4">
                            <div class="featured-item" style="background: url('<?php echo $feat_image; ?>') no-repeat center center; background-size: contain;">
                                <div class="featured-content">
                                    <div class="vertical">
                                        <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>

                        <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(array('query' => $loop)); } ?>

                        <?php

                    endif; ?>
                </div>
            </div>
        </div>
    </div>
    
    <!--====  End of FEATURED WINES  ====-->
    
    
    
<?php get_footer(); ?>