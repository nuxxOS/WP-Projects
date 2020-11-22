<?php 

    /* Template name: About us template */

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
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <div class="page-content pb0" id="post-<?php the_ID(); ?>">
                        <?php the_content(); ?>
                    </div>

                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
    
    <!--====  End of PAGE CONTENT  ====-->

    <!--===========================
    =            GOALS            =
    ============================-->
    
    <div class="goals">
        <div class="container">
            <div class="row">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?> 
                    <div class="col-xs-12 col-sm-6 animate">
                        <img src="<?php the_field('image_for_goals'); ?>" alt="">
                    </div>

                    <div class="col-xs-12 col-sm-6 animate">
                        <div class="goals-wrapper">
                            <h3><?php _e('Naši ciljevi', 'feravino') ?></h3>
                            <ul>
                            <?php if( have_rows('goals') ):
                                while ( have_rows('goals') ) : the_row(); ?>
                                    <li><?php the_sub_field('text'); ?></li>
                                <?php endwhile; endif; ?>
                            </ul>
                        </div>
                        
                    </div>
                <?php endwhile; endif; ?> 
            </div>
        </div>
    </div>
    
    <!--====  End of GOALS  ====-->
    


    <!--============================
    =            QUOTES            =
    =============================-->
    
    <div class="quotes">
        <div class="container full-height">
            <div class="row full-height">
                <div class="col-xs-12 full-height">
                     <?php 
                     if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="quote-item animate">
                        <?php the_field('quotes') ?>
                    </div>
                    <?php endwhile; endif; ?>
                </div>
            </div>
        </div>
    </div>
    
    <!--====  End of QUOTES  ====-->
    
    
    <!--======================================
    =            ADDITIONAL-PAGES            =
    =======================================-->
    
    <div class="additional-pages">
        <div class="container">
            <div class="row">
                <?php
                if( have_rows('additional_pages') ):
                    while ( have_rows('additional_pages') ) : the_row(); ?>
                        <div class="col-xs-12 col-sm-4">
                            <div class="page-item animate">

                                <?php 

                                $image = get_sub_field('page_image');
                                $size = 'news-thumb';
                                $thumb = $image['sizes'][$size]; ?>


                                    <img src="<?php echo $thumb; ?>" alt="<?php echo $image['alt']; ?>" />
                                <a href="<?php the_sub_field('page_url'); ?>">
                                    <div class="page-title">
                                        <h1><?php the_sub_field('page_title'); ?></h1>
                                    </div>
                                </a>
                            </div>            
                        </div>
                   <?php endwhile;
                 else : ?>
                    <p>Nothing found.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
    
    <!--====  End of ADDITIONAL-PAGES  ====-->


    <!--=====================================
    =            ADDITIONAL INFO            =
    ======================================-->
    
    <div class="additional-info section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 animate">
                    <p><?php _e('Osilovac d.o.o. za poljoprivrednu proizvodnju, Ferićeva 16, 31512 Feričanci, Hrvatska <br>
                    tel: +385 (0)31 603 213, +385 (0)31 603 019, fax: +385 (0)31 603 013, IBAN HR1023600001101340130 ZABA HR3625000091102141833 Hypo Alpe-Adria-bank, <br> MBS 050010119, OIB 54035700225, Trgovački sud u Osijeku, temeljni kapital (u cijelosti uplaćen): 81.929.100,00 kn, direktor: Dražen Babić, dipl.ing. ', 'feravino') ?></p>
                </div>
            </div>
        </div>
    </div>
    
    <!--====  End of ADDITIONAL INFO  ====-->
    
    
	
<?php get_footer(); ?>