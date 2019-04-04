<?php 

/**
 * include options page
 */

 include_once(TEMPLATEPATH . '/functions/admin-menu.php');



function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    // add_theme_support( 'wc-product-gallery-lightbox' );
    // add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

/**
 * including styles & scripts
 */
include_once(get_template_directory() . '/functions/enqueue-assets.php');

/**
 * Custom header menu
 */
function header_menu() {
    register_nav_menu('header-menu', __( 'Header Menu'));
}
add_action('init', 'header_menu');

/**
 * Set image to the beginning of the category page
 */
add_action( 'woocommerce_before_main_content', 'woocommerce_category_image', 2 );
function woocommerce_category_image() {
    if ( is_product_category() ){
	    global $wp_query;
	    $cat = $wp_query->get_queried_object();
	    $thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
        $image = wp_get_attachment_url( $thumbnail_id );
        $cat_title = single_cat_title(false, false);
	    if ( $image ) {
		    echo '<div class="category-image"><div class="category-info"><p class="category-text">', $cat_title, '</p></div><img src="' . $image . '" alt="' . $cat->name . '" /></div>';
		}
	}
}

/**
 * Change the breadcrumb separator
 */
add_filter( 'woocommerce_breadcrumb_defaults', 'wcc_change_breadcrumb_delimiter' );
function wcc_change_breadcrumb_delimiter( $defaults ) {
	// Change the breadcrumb delimeter from '/' to '>'
	$defaults['delimiter'] = ' | ';
	return $defaults;
}

/**
 * Rename "home" in breadcrumb
 */
add_filter( 'woocommerce_breadcrumb_defaults', 'wcc_change_breadcrumb_home_text' );
function wcc_change_breadcrumb_home_text( $defaults ) {
    // Change the breadcrumb home text from 'Home' to 'Apartment'
	$defaults['home'] = 'Home';
	return $defaults;
}

/**
 * Remove the sorting dropdown from woocommerce
 */
remove_action( 'woocommerce_before_shop_loop' , 'woocommerce_catalog_ordering', 30 );

/**
 * Remove the result count from WooCommerce
 */
remove_action( 'woocommerce_before_shop_loop' , 'woocommerce_result_count', 20 );

/**
 * remove product thumbnail
 */
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );

/**
* Remove product title & add to cart button
*/
remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );


/**
 * Add proudct description
 */
add_action( 'woocommerce_before_add_to_cart_form', 'single_product_description', 5 );
 
function single_product_description() {
	global $product;
	$product_details = $product->get_data();
	$product_description = $product_details['description'];
	echo "<p class='product-description'> $product_description </p>";
}

/**
 * Adds a custom rule type
 */
add_filter( 'acf/location/rule_types', function( $choices ){
    $choices[ __("Other",'acf') ]['wc_prod_attr'] = 'WC Product Attribute';
    return $choices;
} );
/**
 * Adds custom rule values
 */
add_filter( 'acf/location/rule_values/wc_prod_attr', function( $choices ){
    foreach ( wc_get_attribute_taxonomies() as $attr ) {
        $pa_name = wc_attribute_taxonomy_name( $attr->attribute_name );
        $choices[ $pa_name ] = $attr->attribute_label;
    }
    return $choices;
} );

/**
 * Matching the custon rule.
 */
add_filter( 'acf/location/rule_match/wc_prod_attr', function( $match, $rule, $options ){
    if ( isset( $options['taxonomy'] ) ) {
        if ( '==' === $rule['operator'] ) {
            $match = $rule['value'] === $options['taxonomy'];
        } elseif ( '!=' === $rule['operator'] ) {
            $match = $rule['value'] !== $options['taxonomy'];
        }
    }
    return $match;
}, 10, 3 );

/**
 * Remove default value 'choose an option' form variation dropdown
 */
add_filter( 'woocommerce_dropdown_variation_attribute_options_html', 'filter_dropdown_option_html', 12, 2 );
function filter_dropdown_option_html( $html, $args ) {
    $show_option_none_text = $args['show_option_none'] ? $args['show_option_none'] : __( 'Choose an option', 'woocommerce' );
    $show_option_none_html = '<option value="">' . esc_html( $show_option_none_text ) . '</option>';

    $html = str_replace($show_option_none_html, '', $html);

    return $html;
}

/**
 * Remove default excerpt placement
 */
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
add_action( 'woocommerce_after_add_to_cart_form', 'woocommerce_template_single_excerpt', 5 );

/**
 * Remove product data tabs
 */
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );


/**
 * Change add to cart button text
 */
add_filter('single_add_to_cart_text', 'woo_custom_cart_button_text');
  
function woo_custom_cart_button_text() {
    return __('Add to tote', 'woocommerce');
}

/**
 *
 * Update cart quantity button after ajax
 *  
 * Ensure cart contents update when products are added to the cart via AJAX (place the following in functions.php)
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );
function woocommerce_header_add_to_cart_fragment( $fragments ) {
    ob_start();?>
    
    <span class="cart-quantity">
        <?php
            $count = (int)WC()->cart->get_cart_contents_count();
            echo $count > 0 ? $count : '';
        ?>
    </span>

	<?php
	$fragments['span.cart-quantity'] = ob_get_clean();
	return $fragments;
}

spl_autoload_register(function($className){
    $filePath = get_template_directory() . '/functions/classes/' . $className . '.php';
    $filePath = str_replace(['/', '\\'], DIRECTORY_SEPARATOR, $filePath);

    if (file_exists($filePath)) {
        require_once $filePath;
    } 
});



function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }
  add_filter('upload_mimes', 'cc_mime_types');