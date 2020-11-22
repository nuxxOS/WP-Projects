<?php

/*  Register Scripts and Style */

function theme_register_scripts() {

    wp_enqueue_style( 'reset', get_template_directory_uri() . '/css/reset.css' );
    wp_enqueue_style( 'flex', get_template_directory_uri() . '/css/flexslider.css' );
    wp_enqueue_style( 'icomoon', get_template_directory_uri() . '/icomoon/style.css' );
    wp_enqueue_style( 'magnific', get_template_directory_uri() . '/magnific/magnific-popup.css' );


    wp_enqueue_style( 'style.css', get_stylesheet_uri() );


    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'main.js', esc_url( trailingslashit( get_template_directory_uri() ) . '/js/main.js' ), array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'flex.js', esc_url( trailingslashit( get_template_directory_uri() ) . '/flex/jquery.flexslider.js' ), array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'magnific.js', esc_url( trailingslashit( get_template_directory_uri() ) . '/magnific/jquery.magnific-popup.js' ), array( 'jquery' ), '1.0', true );
 
    
}
add_action( 'wp_enqueue_scripts', 'theme_register_scripts', 1 );


/* Add menu support */
if (function_exists('add_theme_support')) {
    add_theme_support('menus');
    acf_add_options_sub_page('Footer');
    acf_add_options_sub_page('Social-links');
}

/* Add post image support */
add_theme_support( 'post-thumbnails' );


/* Add custom thumbnail sizes */
if ( function_exists( 'add_image_size' ) ) {
    add_image_size( 'banner-image', 1920, 870, true );
    add_image_size( 'banner-page-image', 1920, 370, true );
    add_image_size( 'link-image', 45, 45, true );
    add_image_size( 'single-home-image', 400, 530, true );
    add_image_size( 'post-thumbnail', 380, 320, true );
    add_image_size( 'post-thumbnail-small', 380, 270, true );
    add_image_size( 'post-thumbnail-big', 790, 420, true );
    add_image_size( 'programi-image', 585, 330, true );
    add_image_size( 'programi-image-sidebar', 380, 215, true );
    add_image_size( 'slider-image', 790, 445, true );
    add_image_size( 'slider-thumbnail', 182, 110, true );



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



function categories_postcount_filter ($variable) {
   $variable = str_replace('(', '<span class="post_count"> ', $variable);
   $variable = str_replace(')', ' </span>', $variable);
   return $variable;
}
add_filter('wp_list_categories','categories_postcount_filter');


function SearchFilter($query) {
    if ($query->is_search) {
    $query->set('post_type', 'post');
    }
    return $query;
    }
 
add_filter('pre_get_posts','SearchFilter');


// First, create a function that includes the path to your favicon
function add_favicon() {
    $favicon_url = get_stylesheet_directory_uri() . '/images/ict-fav.png';
    echo '<link rel="shortcut icon" href="' . $favicon_url . '" />';
}
  
// Now, just make sure that function runs when you're on the login page and admin pages  
add_action('login_head', 'add_favicon');
add_action('admin_head', 'add_favicon');
