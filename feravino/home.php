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

    <div class="container">
        <div class="row">
            <div class="col-xs-12">
    
                <div class="post-content row">

                    <h1 class="page-headline animate"><?php _e('Vijesti', 'feravino'); ?></h1>
                    <!-- Loop -->
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <div class="post-item animate col-xs-12 col-sm-4" id="post-<?php the_ID(); ?>">
                            <div class="post-image">
                                <?php the_post_thumbnail('news-thumb'); ?>
                            </div>
                            <div class="post-title">
                                <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
                            
                            <p><?php echo excerpt(20); ?></p>
                            <a href="<?php the_permalink(); ?>" class="read-more menu__link"><?php _e('Više', 'feravino') ?></a>

                            </div>
                        </div>

                    <?php endwhile; ?>

                        <div class="navigation col-xs-12 animate">
                            <?php wp_pagenavi(); ?>
                        </div>

                    <?php else : ?>

                        <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                            <h1>Not Found</h1>
                        </div>

                    <?php endif; ?>
                </div>
                
            </div>
        </div>
        
    </div>
	

    
<?php get_footer(); ?>