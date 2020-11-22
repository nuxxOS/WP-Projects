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
                        <?php the_content(); ?>
                    </div>

                <?php endwhile; endif; ?>                
            </div>
        </div>
    </div>
    
    <!--====  End of PAGE CONTENT  ====-->
    
    
	
<?php get_footer(); ?>