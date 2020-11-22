<?php

//Making jQuery Google API
function modify_jquery() {
    if (!is_admin()) {
        // comment out the next two lines to load the local copy of jQuery
        wp_deregister_script('jquery');
        wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js', false, '1.9.1');
        wp_enqueue_script('jquery');
    }
}
add_action('init', 'modify_jquery');

/*  Register Scripts and Style */

function theme_register_scripts() {
    wp_enqueue_style( 'olympos-css', get_stylesheet_uri() );
    wp_register_script( 'olympos-js', esc_url( trailingslashit( get_template_directory_uri() ) . 'js/olympos.min.js'), array('jquery') );
    wp_enqueue_script( 'olympos-js' );

}
add_action( 'wp_enqueue_scripts', 'theme_register_scripts', 1 );




/* Add menu support */
if (function_exists('add_theme_support')) {
    add_theme_support('menus');
}

/* Add post image support */
add_theme_support( 'post-thumbnails' );


/* Add custom thumbnail sizes */
if ( function_exists( 'add_image_size' ) ) {
    //add_image_size( 'custom-image-size', 500, 500, true );
    add_image_size('about-image', 550, 200, true);
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


/**
 * Conditionally Override Yoast SEO Breadcrumb Trail
 * http://plugins.svn.wordpress.org/wordpress-seo/trunk/frontend/class-breadcrumbs.php
 * -----------------------------------------------------------------------------------
 */

/*add_filter( 'wpseo_breadcrumb_links', 'wpse_100012_override_yoast_breadcrumb_trail' );

function wpse_100012_override_yoast_breadcrumb_trail( $links ) {
    global $post;

    if ( is_single() ) {
        $breadcrumbCompl = array(
            $breadcrumb[] = array(
                'url' => get_permalink( 10 ),
                'text' => 'O nama',
            ),
            $breadcrumb2[] = array(
                'url' => get_permalink( 103 ),
                'text' => 'Novosti',
            ),
            // add two links of pages in yoast breadcrumb
        );

        array_splice( $links, 1, -1, $breadcrumbCompl );
    }

    return $links;
}*/

/**
 * Remove the href from empty links `<a href="#">` in the nav menus
 * @param string $menu the current menu HTML
 * @return string the modified menu HTML
 */
function wpse_remove_empty_links( $menu ) {
    return str_replace( '<a href="#">', '<a>', $menu );
}

add_filter( 'wp_nav_menu_items', 'wpse_remove_empty_links' );

/* Woocommerce integration */

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
  echo '<div class="wrapper">';
}

function my_theme_wrapper_end() {
  echo '</div>';
}

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_filter( 'loop_shop_columns', 'wc_loop_shop_columns', 1, 10 );

/*
 * Return a new number of maximum columns for shop archives
 * @param int Original value
 * @return int New number of columns
 */
function wc_loop_shop_columns( $number_columns ) {
 return 3;
}
