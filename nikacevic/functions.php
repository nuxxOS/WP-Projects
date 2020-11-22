<?php

/*  Register Scripts and Style */

function theme_register_scripts() {
    wp_enqueue_style( 'reset', get_template_directory_uri() . '/css/reset.css' );
    wp_enqueue_style( 'slick1', get_template_directory_uri() . '/css/slick.css' );
    wp_enqueue_style( 'slick2', get_template_directory_uri() . '/css/slick-theme.css' );
    wp_enqueue_style( 'icomoon', get_template_directory_uri() . '/icomoon/style.css' );
    wp_enqueue_style( 'flex', get_template_directory_uri() . '/css/flexslider.css' );
    wp_enqueue_style( 'magnific', get_template_directory_uri() . '/magnific/magnific-popup.css' );

    wp_enqueue_style( 'style.css', get_stylesheet_uri() );


    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'slick.js', esc_url( trailingslashit( get_template_directory_uri() ) . '/slick/slick.min.js' ), array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'main.js', esc_url( trailingslashit( get_template_directory_uri() ) . '/js/main.js' ), array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'flex.js', esc_url( trailingslashit( get_template_directory_uri() ) . '/flex/jquery.flexslider.js' ), array( 'jquery' ), '1.0', true );
     wp_enqueue_script( 'magnific.js', esc_url( trailingslashit( get_template_directory_uri() ) . '/magnific/jquery.magnific-popup.js' ), array( 'jquery' ), '1.0', true );
/*  wp_enqueue_script( 'magnific.js', esc_url( trailingslashit( get_template_directory_uri() ) . '/magnific/magnific.js' ), array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'magnific.js', esc_url( trailingslashit( get_template_directory_uri() ) . '/magnific/jquery.magnific-popup.js' ), array( 'jquery' ), '1.0', true ); */
}
add_action( 'wp_enqueue_scripts', 'theme_register_scripts',  1 );


/* Add menu support */
if (function_exists('add_theme_support')) {
    add_theme_support('menus');
    acf_add_options_sub_page('Footer');
}

/* Add post image support */
add_theme_support( 'post-thumbnails' );



/* Add custom thumbnail sizes */
if ( function_exists( 'add_image_size' ) ) {
    add_image_size( 'custom-thumbnail', 390, 290, true );
    add_image_size( 'banner-image', 1920, 850, true );
    add_image_size( 'slider-image', 690, 515, true );
    add_image_size( 'kontakt-image', 585, 400, true );
    add_image_size( 'slider-thumbnail', 160, 120, true );
    add_image_size( 'home-objekti', 60, 54, true );

    //add_image_size( 'custom-image-size', 500, 500, true );
}

/* Add widget support */
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => 'SidebarOne',
	    'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widgettitle">',
        'after_title' => '</h4>',
    ));
    
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => 'SidebarTwo',
	    'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widgettitle">',
        'after_title' => '</h4>',
    ));


/*  EXCERPT 
    Usage:
    
    <?php echo excerpt(100); ?>
*/

function excerpt($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
    } else {
    $excerpt = implode(" ",$excerpt);
    } 
    $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
    return $excerpt;
}
