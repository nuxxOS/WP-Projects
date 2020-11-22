<?php 

    /* Template name: Galleries templaet */

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
        <div class="row page-content">
            <div class="col-xs-12">
                <h1 class="page-headline animate">Galerija</h1>
            </div>
            <div class="row gallery">
                <div class="page-content" id="post-<?php the_ID(); ?>">
                <!-- Loop -->
                <?php
                $loop = new WP_Query( array( 'post_type' => 'gallery', 'post_per_page' => 10 ) );
                if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post(); ?>

                    <div class="col-xs-12 col-sm-4">
                        <a href="<?php the_permalink(); ?>" class="gallery-item">
                            <div class="gallery-image">
                                <?php the_post_thumbnail('galleries-thumb'); ?>
                            </div>  
                            <div class="gallery-caption">
                                <?php the_title(); ?>
                            </div>  
                            
                        </a>
                    </div>
                        

                <?php endwhile; endif; ?>
                </div>
            </div>
        </div>
    </div>
    
    <!--====  End of PAGE CONTENT  ====-->
    
    
	
<?php get_footer(); ?>