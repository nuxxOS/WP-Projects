<?php

/*  Register Scripts and Style */

function theme_register_scripts() {
    wp_enqueue_style( 'olympos-css', get_stylesheet_uri() );   
    wp_enqueue_style( 'flex', get_template_directory_uri() . '/css/flexslider.css' );
    wp_enqueue_style( 'icomoon', get_template_directory_uri() . '/icomoon/style.css' );
    wp_enqueue_style( 'magnific', get_template_directory_uri() . '/magnific/magnific-popup.css' );
    wp_enqueue_style( 'selectbox', get_template_directory_uri() . '/jquery-selectbox/jquery.selectBox.css' );




    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'olympos-js', get_template_directory_uri(). '/js/olympos.min.js' );
    wp_enqueue_script( 'magnific.js', esc_url( trailingslashit( get_template_directory_uri() ) . '/magnific/jquery.magnific-popup.js' ), array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'selectbox.js', esc_url( trailingslashit( get_template_directory_uri() ) . '/jquery-selectbox/jquery.selectBox.js' ), array( 'jquery' ), '1.0', true );

    
}
add_action( 'wp_enqueue_scripts', 'theme_register_scripts', 1 );


/* Add menu support */
if (function_exists('add_theme_support')) {
    add_theme_support('menus');
    acf_add_options_sub_page('Header');
    acf_add_options_sub_page('Footer');
}

/* Add post image support */
add_theme_support( 'post-thumbnails' );
add_theme_support( 'woocommerce' );


/* Add custom thumbnail sizes */
if ( function_exists( 'add_image_size' ) ) {
    add_image_size( 'banner-image', 1920, 800, true );
    add_image_size( 'post-thumbnail', 350, 260, true );
    add_image_size( 'thumbnail-small', 380, 260, true );
    add_image_size( 'thumbnail-big', 1200, 425, true );
    add_image_size( 'reference-popup', 1180, 700, true );
    add_image_size( 'menu-image', 950, 200, true );
    add_image_size( 'single-gallery', 120, 120, true );




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


function my_myme_types($mime_types){
    $mime_types['dwg'] = 'dwg'; //Adding svg extension
    $mime_types['psd'] = 'image/vnd.adobe.photoshop'; //Adding photoshop files
    return $mime_types;
}
add_filter('upload_mimes', 'my_myme_types', 1, 1);











add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

function woocommerce_result_count() {
        return;
}

add_filter( 'woocommerce_breadcrumb_defaults', 'jk_change_breadcrumb_home_text' );      //  Home page text change
function jk_change_breadcrumb_home_text( $defaults ) {
    // Change the breadcrumb home text from 'Home' to 'Appartment'
    $defaults['home'] = 'Početna';
    return $defaults;
}



/*function wc_custom_shop_archive_title( $title ) {       // 
    if ( is_shop() ) {
        return str_replace( __( 'Products', 'woocommerce' ), 'Proizvodi', $title );
    }

    return $title;
}
add_filter( 'wp_title', 'wc_custom_shop_archive_title' );
*/


if ( ! function_exists( 'woocommerce_template_loop_product_thumbnail' ) ) {
    function woocommerce_template_loop_product_thumbnail() {
        echo woocommerce_get_product_thumbnail();
    } 
}
if ( ! function_exists( 'woocommerce_get_product_thumbnail' ) ) {   
    function woocommerce_get_product_thumbnail( $size = 'shop_catalog', $placeholder_width = 0, $placeholder_height = 0  ) {
        global $post, $woocommerce;
        $output = '<div class="product-image">';

        if ( has_post_thumbnail() ) {               
            $output .= get_the_post_thumbnail( $post->ID, $size );              
        }                       
        $output .= '</div>';
        return $output;
    }
}



if ( ! function_exists( 'woocommerce_template_loop_product_thumbnail' ) ) {
    function woocommerce_template_loop_product_thumbnail() {
        echo woocommerce_get_product_thumbnail();
    } 
}
if ( ! function_exists( 'woocommerce_get_product_thumbnail' ) ) {   
    function woocommerce_get_product_thumbnail( $size = 'shop_catalog', $placeholder_width = 0, $placeholder_height = 0  ) {
        global $post, $woocommerce;
        $output = '<div class="product-image">';

        if ( has_post_thumbnail() ) {               
            $output .= get_the_post_thumbnail( $post->ID, $size );              
        }                       
        $output .= '</div>';
        return $output;
    }
}





// Display 24 products per page. Goes in functions.php

add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 2;' ), 20 );




// SHOP PAGE CATEGORY NAME DISPLAY //

add_action( 'woocommerce_after_shop_loop_item_title', 'avia_add_product_cat', 1);
function avia_add_product_cat()
{
    global $product;
    $product_cats = wp_get_post_terms($product->id, 'product_cat');
    $count = count($product_cats);
    foreach($product_cats as $key => $cat) ?>

    <?php echo $product->get_categories( ', ', '<h5 class="posted_in product-cat-name">' . ' ', '</h5>' ); ?>
 
    <?php
}




// Replace WooCommerce Default Pagination with WP-PageNavi Pagination //

remove_action('woocommerce_pagination', 'woocommerce_pagination', 10);
function woocommerce_pagination() { ?>

<div class="blog-navigation clearfix">
      <?php    wp_pagenavi();  ?>  </div> <?php     
    }
add_action( 'woocommerce_pagination', 'woocommerce_pagination', 10);





// Translate for "Sorting" selectbox Woocommerce //

add_filter( 'gettext', 'theme_sort_change', 20, 3 );
function theme_sort_change( $translated_text, $text, $domain ) {

    if ( is_woocommerce() ) {

        switch ( $translated_text ) {

            case 'Default sorting' :

                $translated_text = __( 'Sortiraj', 'woocommerce' );
                break;

            
            case 'Sort by popularity' :

                $translated_text = __( 'Najpopularnije', 'woocommerce' );
                break;

            
            case 'Sort by newness' :

                $translated_text = __( 'Najnovije', 'woocommerce' );
                break;

            
            case 'Sort by price: low to high' :

                $translated_text = __( 'Cijena: Manja prema većoj', 'woocommerce' );
                break;


            case 'Sort by price: high to low' :

                $translated_text = __( 'Cijena: Veća prema manjoj', 'woocommerce' );
                break;
        }

    }

    return $translated_text;
}



function wc_custom_shop_archive_title( $title ) {       // 
    if ( is_cart() ) {
        return str_replace( __( 'Cart', 'woocommerce' ), 'Pošalji upit', $title );
    }

    return $title;
}
add_filter( 'wp_title', 'wc_custom_shop_archive_title' );




// Modify the default WooCommerce orderby dropdown
//
// Options: menu_order, popularity, rating, date, price, price-desc
// In this example I'm removing price & price-desc but you can remove any of the options

function patricks_woocommerce_catalog_orderby( $orderby ) {
    unset($orderby["rating"]);
    unset($orderby["menu_order"]);
    return $orderby;
}
add_filter( "woocommerce_catalog_orderby", "patricks_woocommerce_catalog_orderby", 20 );





/*add products to cart without price */
function custom_woocommerce_is_purchasable( $purchasable, $product ){
    if( $product->get_price() == 0 ||  $product->get_price() == '')
        $purchasable = true;
    return $purchasable;
}
add_filter( 'woocommerce_is_purchasable', 'custom_woocommerce_is_purchasable', 10, 2 );





/**
 * @desc Remove in all product type
 */
function wc_remove_all_quantity_fields( $return, $product ) {
    return true;
}
add_filter( 'woocommerce_is_sold_individually', 'wc_remove_all_quantity_fields', 10, 2 );




// Remove "Review" tab Woocommerce //

add_filter( 'woocommerce_product_tabs', 'wcs_woo_remove_reviews_tab', 98 );
function wcs_woo_remove_reviews_tab($tabs) {
 unset($tabs['reviews']);
 return $tabs;
}




// Remove "Product Description heading" Woocommerce //

add_filter( 'woocommerce_product_description_heading', 'remove_product_description_heading' );
function remove_product_description_heading() {
return '';
}


add_filter( 'woocommerce_product_add_to_cart_text', 'woo_archive_custom_cart_button_text' );    // 2.1 +
 
function woo_archive_custom_cart_button_text() {
 
        return __( 'Dodaj u košaricu', 'woocommerce' );
 
}



// Hook in
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

// Our hooked in function - $fields is passed via the filter!
function custom_override_checkout_fields( $fields ) {
     //unset($fields['order']['order_comments']);
     unset($fields['billing']['billing_city']);
     unset($fields['billing']['billing_country']);
     unset($fields['billing']['billing_state']);
     unset($fields['billing']['billing_postcode']);
     unset($fields['billing']['billing_address_1']);
     unset($fields['billing']['billing_address_2']);

     return $fields;
}



add_filter( 'get_the_archive_title', function ( $title ) {

    if ( is_shop() ) {

            $title = single_cat_title( '', false );

        } elseif ( is_product_category() ) {

            $title = single_tag_title( '', false );

        } 

    return $title;


});


add_filter( 'wppp_ppp_text', 'wppp_custom_text', 10, 2 );
function wppp_custom_text( $text, $value ) {

    return '%s';

}



// Hook in
add_filter( 'woocommerce_checkout_fields' , 'custom_override_comment_fields' );

// Our hooked in function - $fields is passed via the filter!
function custom_override_comment_fields( $fields ) {
     $fields['order']['order_comments']['placeholder'] = '';

     if ( ICL_LANGUAGE_CODE == 'en' ) {
        $fields['order']['order_comments']['label'] = 'Request';
        return $fields;
  
    } elseif ( ICL_LANGUAGE_CODE == 'hr' ) {
        $fields['order']['order_comments']['label'] = 'Upit';
        return $fields;
        
    }
     
}




// On failure, notify the custom form through a redirect with a new query variable
add_action( 'wp_login_failed', 'custom_login_failed', 10, 2 );
// When a user leaves a field blank, return that as an error that will fire wp_login_failed
add_filter( 'authenticate', 'custom_authenticate_username_password', 30, 3);

function custom_login_failed( $username )
{
$referrer = wp_get_referer();

if ( $referrer && ! strstr($referrer, 'wp-login') && ! strstr($referrer,'wp-admin') )
{
wp_redirect( add_query_arg('login', 'failed', $referrer) );
exit;
}
}

function custom_authenticate_username_password( $user, $username, $password )
{
if ( is_a($user, 'WP_User') ) { return $user; }

if ( empty($username) || empty($password) )
{
$error = new WP_Error();
$user = new WP_Error('authentication_failed', __('<strong>ERROR</strong>: Invalid username or incorrect password.'));

return $error;
}
}

add_action( 'login_form_bottom', 'add_lost_password_link' );
function add_lost_password_link() {
return '';
}

add_action( 'login_form_middle', 'failed_login_message' );
function failed_login_message() { 
$status = $_GET['login']; 
if (ICL_LANGUAGE_CODE=='en') {
$message = 'Wrong password or nonexisting user';
$password = 'Lost password?';
}
else {
$message = 'Kriva lozinka ili nepostojeći korisnik';
$password = 'Izgubili ste lozinku?';
} 
if ( $status == 'failed'){
$message_rtn = '<div class="clf-error">' . $message . '!</div><a class="clf-lostpass" href="/wp-login.php?action=lostpassword">' . $password . '</a>'; 
}
return $message_rtn;
}




// Remove tabs (Additional information) on single product page

add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

function woo_remove_product_tabs( $tabs ) {

    unset( $tabs['description'] );          // Remove the description tab
    unset( $tabs['reviews'] );          // Remove the reviews tab
    unset( $tabs['additional_information'] );   // Remove the additional information tab

    return $tabs;

}


// Show cart widget on all pages incluing cart and checkout page //

add_filter( 'woocommerce_widget_cart_is_hidden', 'always_show_cart', 40, 0 );
function always_show_cart() {
    return false;
}



// Limits exceprt on short description for single product //

// add_filter('woocommerce_short_description', 'reigel_woocommerce_short_description', 10, 1);
// function reigel_woocommerce_short_description($post_excerpt){
//     if (!is_product()) {
//         $post_excerpt = substr($post_excerpt, 0, 10);
//     }
//     return $post_excerpt;
// }



add_filter('woocommerce_short_description', 'limit_woocommerce_short_description', 10, 1);
    function limit_woocommerce_short_description($post_excerpt){
        if (!is_product()) {
            $pieces = explode(" ", $post_excerpt);
            $post_excerpt = implode(" ", array_splice($pieces, 0, 20));

        }
        return $post_excerpt;
    }









// Related products only by tags; not categories and tags //

add_filter( 'woocommerce_get_related_product_cat_terms', '__return_empty_array' );




// Removed excerpt from product summary and added content //

//remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );




// Removed data tabs from tabs content and added to item description //

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );

add_action( 'woocommerce_single_product_summary', 'woocommerce_output_product_data_tabs', 20 );




// Add to cart removed from product description and added to tabs content //

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );

add_action( 'woocommerce_after_single_product_summary', 'woocommerce_template_single_add_to_cart', 15 );




remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

add_action( 'woocommerce_after_single_product', 'woocommerce_output_related_products', 20 );




remove_action( 'woocommerce_cart_collaterals', 'woocommerce_cross_sell_display' );
remove_action( 'woocommerce_cart_collaterals', 'woocommerce_cart_totals', 10 );
remove_action( 'woocommerce_proceed_to_checkout', 'woocommerce_button_proceed_to_checkout', 20 );




remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );

add_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 30 );
add_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 20 );


remove_action( 'woocommerce_after_shop_loop', 'woocommerce_catalog_ordering', 30 );
add_action( 'woocommerce_after_shop_loop', 'woocommerce_catalog_ordering', 20 );
add_action( 'woocommerce_after_shop_loop', 'woocommerce_result_count', 30 );







// Remove price on archive page //

remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );
