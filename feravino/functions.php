<?php

/*  Register Scripts and Style */

function theme_register_scripts() {


    wp_enqueue_style( 'feravino-css', get_stylesheet_uri() );
    wp_enqueue_style( 'feravino-fix-css', get_template_directory_uri() . '/style-fix.css' );
    wp_enqueue_script( 'feravino-js', esc_url( trailingslashit( get_template_directory_uri() ) . 'js/feravino.min.js' ), array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'bootstrap-js', esc_url( trailingslashit( get_template_directory_uri() ) . 'lib/bootstrap.min.js' ), array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'slick-js', esc_url( trailingslashit( get_template_directory_uri() ) . 'lib/slick.min.js' ), array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'parallax-js', esc_url( trailingslashit( get_template_directory_uri() ) . 'lib/parallax.min.js' ), array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'scrollreveal-js', esc_url( trailingslashit( get_template_directory_uri() ) . 'lib/scrollreveal.min.js' ), array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'lightbox-js', esc_url( trailingslashit( get_template_directory_uri() ) . 'lib/simple-lightbox.min.js' ), array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'custom-js', esc_url( trailingslashit( get_template_directory_uri() ) . 'js/custom.js' ), array( 'jquery' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'theme_register_scripts', 1 );


/* Add menu support */
if (function_exists('add_theme_support')) {
    add_theme_support('menus');
}

/* Menus */
function menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' ),
      'mobile-menu' => __( 'Mobile Menu' )
    )
  );
}
add_action( 'init', 'menus' );

/* Add post image support */
add_theme_support( 'post-thumbnails' );




/* Add custom thumbnail sizes */
if ( function_exists( 'add_image_size' ) ) {
    add_image_size( 'galleries-thumb', 340, 230, true );
    add_image_size( 'news-thumb', 360, 300, true );
    add_image_size( 'product-thumb', 260, 400, true );
    add_image_size( 'gallery-thumb', 80, 80, true );
    //add_image_size( 'custom-image-size', 500, 500, true );
}

/* Add widget support */
function wpb_widgets_init() {

    register_sidebar( array(
        'name' => __( 'Footer Left Sidebar', 'feravino' ),
        'id' => 'footer-left-sidebar',
        'description' => __( 'Left sidebar in footer area.', 'feravino' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer Center Sidebar', 'feravino' ),
        'id' => 'footer-center-sidebar',
        'description' => __( 'Center sidebar in footer area.', 'feravino' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer Right Sidebar', 'feravino' ),
        'id' => 'footer-right-sidebar',
        'description' => __( 'Right sidebar in footer area.', 'feravino' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}

add_action( 'widgets_init', 'wpb_widgets_init' );



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


// Breadcrumbs
function custom_breadcrumbs() {
      
    // Settings
    $separator          = '&gt;';
    $breadcrums_id      = 'breadcrumbs';
    $breadcrums_class   = 'breadcrumbs';
    $home_title         = 'Homepage';
     
    // If you have any custom post types with custom taxonomies, put the taxonomy name below (e.g. product_cat)
    $custom_taxonomy    = 'product_cat';
      
    // Get the query & post information
    global $post,$wp_query;
      
    // Do not display on the homepage
    if ( !is_front_page() ) {
      
        // Build the breadcrums
        echo '<ul id="' . $breadcrums_id . '" class="' . $breadcrums_class . '">';
          
        // Home page
        echo '<li class="item-home"><a class="bread-link bread-home" href="' . get_home_url() . '" title="' . $home_title . '">' . $home_title . '</a></li>';
        echo '<li class="separator separator-home"> ' . $separator . ' </li>';
          
        if ( is_archive() && !is_tax() && !is_category() && !is_tag() ) {
             
            echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . post_type_archive_title($prefix, false) . '</strong></li>';
             
        } else if ( is_archive() && is_tax() && !is_category() && !is_tag() ) {
             
            // If post is a custom post type
            $post_type = get_post_type();
             
            // If it is a custom post type display name and link
            if($post_type != 'post') {
                 
                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);
             
                echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
                echo '<li class="separator"> ' . $separator . ' </li>';
             
            }
             
            $custom_tax_name = get_queried_object()->name;
            echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . $custom_tax_name . '</strong></li>';
             
        } else if ( is_single() ) {
             
            // If post is a custom post type
            $post_type = get_post_type();
             
            // If it is a custom post type display name and link
            if($post_type != 'post') {
                 
                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);
             
                echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
                echo '<li class="separator"> ' . $separator . ' </li>';
             
            }
             
            // Get post category info
            $category = get_the_category();
            
            if(!empty($category)) {
             
                // Get last category post is in
                $last_category = end(array_values($category));
                 
                // Get parent any categories and create array
                $get_cat_parents = rtrim(get_category_parents($last_category->term_id, true, ','),',');
                $cat_parents = explode(',',$get_cat_parents);
                 
                // Loop through parent categories and store in variable $cat_display
                $cat_display = '';
                foreach($cat_parents as $parents) {
                    $cat_display .= '<li class="item-cat">'.$parents.'</li>';
                    $cat_display .= '<li class="separator"> ' . $separator . ' </li>';
                }
            
            }
             
            // If it's a custom post type within a custom taxonomy
            $taxonomy_exists = taxonomy_exists($custom_taxonomy);
            if(empty($last_category) && !empty($custom_taxonomy) && $taxonomy_exists) {
                  
                $taxonomy_terms = get_the_terms( $post->ID, $custom_taxonomy );
                $cat_id         = $taxonomy_terms[0]->term_id;
                $cat_nicename   = $taxonomy_terms[0]->slug;
                $cat_link       = get_term_link($taxonomy_terms[0]->term_id, $custom_taxonomy);
                $cat_name       = $taxonomy_terms[0]->name;
              
            }
             
            // Check if the post is in a category
            if(!empty($last_category)) {
                echo $cat_display;
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
                 
            // Else if post is in a custom taxonomy
            } else if(!empty($cat_id)) {
                 
                echo '<li class="item-cat item-cat-' . $cat_id . ' item-cat-' . $cat_nicename . '"><a class="bread-cat bread-cat-' . $cat_id . ' bread-cat-' . $cat_nicename . '" href="' . $cat_link . '" title="' . $cat_name . '">' . $cat_name . '</a></li>';
                echo '<li class="separator"> ' . $separator . ' </li>';
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
             
            } else {
                 
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
                 
            }
             
        } else if ( is_category() ) {
              
            // Category page
            echo '<li class="item-current item-cat"><strong class="bread-current bread-cat">' . single_cat_title('', false) . '</strong></li>';
              
        } else if ( is_page() ) {
              
            // Standard page
            if( $post->post_parent ){
                  
                // If child page, get parents 
                $anc = get_post_ancestors( $post->ID );
                  
                // Get parents in the right order
                $anc = array_reverse($anc);
                  
                // Parent page loop
                foreach ( $anc as $ancestor ) {
                    $parents .= '<li class="item-parent item-parent-' . $ancestor . '"><a class="bread-parent bread-parent-' . $ancestor . '" href="' . get_permalink($ancestor) . '" title="' . get_the_title($ancestor) . '">' . get_the_title($ancestor) . '</a></li>';
                    $parents .= '<li class="separator separator-' . $ancestor . '"> ' . $separator . ' </li>';
                }
                  
                // Display parent pages
                echo $parents;
                  
                // Current page
                echo '<li class="item-current item-' . $post->ID . '"><strong title="' . get_the_title() . '"> ' . get_the_title() . '</strong></li>';
                  
            } else {
                  
                // Just display current page if not parents
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '"> ' . get_the_title() . '</strong></li>';
                  
            }
              
        } else if ( is_tag() ) {
              
            // Tag page
              
            // Get tag information
            $term_id        = get_query_var('tag_id');
            $taxonomy       = 'post_tag';
            $args           = 'include=' . $term_id;
            $terms          = get_terms( $taxonomy, $args );
            $get_term_id    = $terms[0]->term_id;
            $get_term_slug  = $terms[0]->slug;
            $get_term_name  = $terms[0]->name;
              
            // Display the tag name
            echo '<li class="item-current item-tag-' . $get_term_id . ' item-tag-' . $get_term_slug . '"><strong class="bread-current bread-tag-' . $get_term_id . ' bread-tag-' . $get_term_slug . '">' . $get_term_name . '</strong></li>';
          
        } elseif ( is_day() ) {
              
            // Day archive
              
            // Year link
            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';
              
            // Month link
            echo '<li class="item-month item-month-' . get_the_time('m') . '"><a class="bread-month bread-month-' . get_the_time('m') . '" href="' . get_month_link( get_the_time('Y'), get_the_time('m') ) . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('m') . '"> ' . $separator . ' </li>';
              
            // Day display
            echo '<li class="item-current item-' . get_the_time('j') . '"><strong class="bread-current bread-' . get_the_time('j') . '"> ' . get_the_time('jS') . ' ' . get_the_time('M') . ' Archives</strong></li>';
              
        } else if ( is_month() ) {
              
            // Month Archive
              
            // Year link
            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';
              
            // Month display
            echo '<li class="item-month item-month-' . get_the_time('m') . '"><strong class="bread-month bread-month-' . get_the_time('m') . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</strong></li>';
              
        } else if ( is_year() ) {
              
            // Display year archive
            echo '<li class="item-current item-current-' . get_the_time('Y') . '"><strong class="bread-current bread-current-' . get_the_time('Y') . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</strong></li>';
              
        } else if ( is_author() ) {
              
            // Auhor archive
              
            // Get the author information
            global $author;
            $userdata = get_userdata( $author );
              
            // Display author name
            echo '<li class="item-current item-current-' . $userdata->user_nicename . '"><strong class="bread-current bread-current-' . $userdata->user_nicename . '" title="' . $userdata->display_name . '">' . 'Author: ' . $userdata->display_name . '</strong></li>';
          
        } else if ( get_query_var('paged') ) {
              
            // Paginated archives
            echo '<li class="item-current item-current-' . get_query_var('paged') . '"><strong class="bread-current bread-current-' . get_query_var('paged') . '" title="Page ' . get_query_var('paged') . '">'.__('Page') . ' ' . get_query_var('paged') . '</strong></li>';
              
        } else if ( is_search() ) {
          
            // Search results page
            echo '<li class="item-current item-current-' . get_search_query() . '"><strong class="bread-current bread-current-' . get_search_query() . '" title="Search results for: ' . get_search_query() . '">Search results for: ' . get_search_query() . '</strong></li>';
          
        } elseif ( is_404() ) {
              
            // 404 page
            echo '<li>' . 'Error 404' . '</li>';
        }
      
        echo '</ul>';
          
    }
      
}



function widget( $args, $instance ) {
  extract($args);
  $title = apply_filters( 'widget_title', empty($instance['title']) ? '' : $instance['title'], $instance );
}


add_filter( 'wpseo_breadcrumb_links', 'my_wpseo_breadcrumb_links' );
function my_wpseo_breadcrumb_links( $links ) {
 
    if ( is_single() ) {
        $cpt_object = get_post_type_object( get_post_type() );
        if ( ! $cpt_object->_builtin ) {
            $landing_page = get_page_by_path( $cpt_object->rewrite['slug'] );
            array_splice( $links, -1, 0, array(
                array(
                    'id'    => $landing_page->ID
                )
            ));
        }
    }
 
    return $links;
}



