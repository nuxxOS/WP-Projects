<?php 

    /* Template name: Contact page template */

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
    
    <div class="container contact">
        <div class="row">
            <div class="col-xs-12">
                <!-- Loop -->
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <div class="page-content" id="post-<?php the_ID(); ?>">
                        <div class="row">
                            <div class="col-md-5 col-xs-12">
                                <?php the_content(); ?>
                            </div>

                            <div class="col-xs-12 col-md-7">
                                <h2><?php _e('Pošaljite upit', 'feravino'); ?></h2>
                                <?php if(ICL_LANGUAGE_CODE=='hr'): echo do_shortcode('[contact-form-7 id="98" title="Obrazac"]'); else: echo do_shortcode('[contact-form-7 id="280" title="Obrazac_en"]'); endif; ?>

                            </div>
                        </div>
                    </div>

                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
    
    <!--====  End of PAGE CONTENT  ====-->


    <!--============================
    =            STORES            =
    =============================-->
    
    <div class="stores">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="row">
                    <?php

                    $svitabovi = "";
                    $svinesto = "";
                    $first = true; 

                    // check if the repeater field has rows of data
                    if( have_rows('department') ):

                        // loop through the rows of data
                        while ( have_rows('department') ) : the_row(); ?>

                            
                            <?php 


                            $title = str_replace(' ', '_', strtolower(get_sub_field('title')));

                            $svitabovi .= '<li role="presentation" class="'. ($first ? 'active': '') .'"><a href="#'.$title.'" aria-controls="'. $title.'" role="tab" data-toggle="tab">'. get_sub_field('title') .'</a></li>';
                            $svinesto .= '<div role="tabpanel" class="tab-pane '. ($first ? 'active': '') .'" id="'. $title .'">'. get_sub_field('location_details') .'</div>';

                            $first = false;
                            ?>

                        <?php endwhile; 

                            echo '<ul id="stores" class="nav nav-tabs animate" role="tablist">';
                            echo $svitabovi;
                            echo '</ul>';

                            echo '<div class="tab-content animate">';
                            echo $svinesto;
                            echo '</div>';

                        else : ?>

                        no rows found

                    <?php endif;

                    ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--====  End of STORES  ====-->
    



    <!--================================
    =            GOOGLE MAP            =
    =================================-->
    
    <div class="google-map">
        <?php echo do_shortcode('[wpgmza id="1"]') ?>
    </div>
    
    <!--====  End of GOOGLE MAP  ====-->
    
    
    
	
<?php get_footer(); ?>