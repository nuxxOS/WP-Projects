<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="Feravino" />
    <meta name="keywords" content="feravino, vino, dika, vinograd, miraz, nouveau, pjenusac, fericanci, osijek, vinarija, vinogradarstvo" />
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,300,600,700,900&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>
    <!-- <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script> -->
    <script>
      // Change <html> classes if JavaScript is enabled
      document.documentElement.classList.remove('no-js');
      document.documentElement.classList.add('js');
    </script>


    <?php wp_head(); ?>


    

    <meta name="viewport" content="width=device-width">
</head>
<body <?php body_class(); ?>>


    <!--=======================================
    =            MOBILE NAVIGATION            =
    ========================================-->


    <a href="#navigation" class="nav-trigger">Menu<span></span></a>

    <div class="lang-switcher">
        <?php do_action('wpml_add_language_selector'); ?>
    </div>
    
    <nav class="nav-container">


      <header>
        <h2><?php _e('Navigacija', 'feravino'); ?></h2>
      </header>
      <?php

        $defaults = array(
            'theme_location'  => 'mobile-menu',
            'menu'            => '',
            'container'       => 'ul',
            'container_class' => '',
            'container_id'    => '',
            'menu_class'      => 'nav',
            'menu_id'         => '',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth'           => 0,
            'walker'          => ''
        );

        wp_nav_menu( $defaults );

        ?>

    </nav>
    <div class="overlay"></div>
    
    <!--====  End of MOBILE NAVIGATION  ====-->


    <div class="main">        
        <div class="header">
            <!--==========================
            =            LOGO            =
            ===========================-->
            
            <div class="logo">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="logo-wrapper">
                                <a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--====  End of LOGO  ====-->
            

            <!--===============================
            =            MAIN MENU            =
            ================================-->
            
            <div class="menu-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 clearfix">

                            <div class="pull-left">
                                <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'div', 'menu_class' => 'main_menu' ) ); ?>
                            </div>
                            
                            <div class="pull-right">
                                <?php do_action('wpml_add_language_selector'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--====  End of MAIN MENU  ====-->
            
        </div>


