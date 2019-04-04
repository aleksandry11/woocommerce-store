<?php
/**
 * Variable product add to cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/add-to-cart/variable.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.5
 */

defined( 'ABSPATH' ) || exit;
// var_dump($variations);
global $product;

$variations = $product->get_available_variations();
$attribute_keys  = array_keys( $attributes );
$variations_json = wp_json_encode( $available_variations );
$variations_attr = function_exists( 'wc_esc_json' ) ? wc_esc_json( $variations_json ) : _wp_specialchars( $variations_json, ENT_QUOTES, 'UTF-8', true );
$term_arr = array();

$vars = $product->get_available_variations();
$default_size = $product->get_default_attributes();

?>

<?php

foreach( $product->get_variation_attributes() as $taxonomy => $terms_slug ){
    // To get the attribute label (in WooCommerce 3+)
    $taxonomy_label = wc_attribute_label( $taxonomy, $product );

    // Setting some data in an array
    $variations_attributes_and_values[$taxonomy] = ['label' => $taxonomy_label];
    foreach($terms_slug as $term){
        // Getting the term object from the slug
        $term_obj  = get_term_by('slug', $term, $taxonomy);
		$term_id   = $term_obj->term_id;
		$term_slug = $term_obj->slug;
		$term_name = $term_obj->name;
		if (!empty($vars[0]['attributes']['attribute_pa_color'])) {

			foreach($vars as $key => $var) {
				if ($var['attributes']['attribute_pa_color'] === $term_slug) {
					$variation_id = $var['variation_id'];
	
					$term_arr_color[] = [
						'variation_id' 	=> $variation_id,
						'term_id'		=> $term_id,
						'hex_color'		=> get_field('color', 'term_' . $term_id),
						'color'			=> $term_name,
						'term_slug'		=> $term_slug
					];
	
				}
			}		
		}

	}
}
// echo '<pre>'; print_r($term_arr); echo '</pre>';
do_action( 'woocommerce_before_add_to_cart_form' ); 

?>

<form class="variations_form cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data' data-product_id="<?php echo absint( $product->get_id() ); ?>" data-product_variations="<?php echo $variations_attr; // WPCS: XSS ok. ?>">
	<?php do_action( 'woocommerce_before_variations_form' ); ?>

	<?php if ( empty( $available_variations ) && false !== $available_variations ) : ?>
		<p class="stock out-of-stock"><?php esc_html_e( 'This product is currently out of stock and unavailable.', 'woocommerce' ); ?></p>
	<?php else : ?>
		<table class="variations" cellspacing="0">
			<tbody>
				<?php foreach ( $attributes as $attribute_name => $options ) : ?>
					<tr>
						<td class="label"><label for="<?php echo esc_attr( sanitize_title( $attribute_name ) ); ?>"><?php echo wc_attribute_label( $attribute_name ); // WPCS: XSS ok. ?></label></td>
						<td class="value" style="display: none;">
							<?php
								wc_dropdown_variation_attribute_options( array(
									'options'   => $options,
									'attribute' => $attribute_name,
									'product'   => $product,
								) );
								echo end( $attribute_keys ) === $attribute_name ? wp_kses_post( apply_filters( 'woocommerce_reset_variations_link', '<a class="reset_variations" href="#">' . esc_html__( 'Clear', 'woocommerce' ) . '</a>' ) ) : '';
							?>
						</td>
						<td class="custom-labels">
							<ul class="variations-wrapper">
								<?php if ($attribute_name === 'pa_color') :
									foreach($term_arr_color as $color) : ?>
										<?php $defaultc = strtolower($color['color']) == $default_size['pa_color'] ? 'selected' : ''; ?>
										<li class="color-variable-label <?= $defaultc; ?>" 
											data-color="<?= $color['term_slug']; ?>" 
											data-value="<?= $color['hex_color']; ?>" 
											data-variation-id="<?= $color['variation_id']; ?>" 
											style="background-color: <?=$color['hex_color']; ?>"
										></li>
									<?php endforeach; 
								endif;

								if ($attribute_name == 'pa_sizes') :
									foreach($options as $option) : ?>
									<?php $default = $option == $default_size['pa_sizes'] ? 'selected' : '';?>
										<li class="size-variable-item <?= $default; ?>" 
											data-value="<?= $option;?>" 
										><?= $option; ?></li>
								<?php endforeach; 
								endif; ?>
							</ul>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>

		<div class="single_variation_wrap">
			<?php
				/**
				 * Hook: woocommerce_before_single_variation.
				 */
				do_action( 'woocommerce_before_single_variation' );

				/**
				 * Hook: woocommerce_single_variation. Used to output the cart button and placeholder for variation data.
				 *
				 * @since 2.4.0
				 * @hooked woocommerce_single_variation - 10 Empty div for variation data.
				 * @hooked woocommerce_single_variation_add_to_cart_button - 20 Qty and cart button.
				 */
				do_action( 'woocommerce_single_variation' );

				/**
				 * Hook: woocommerce_after_single_variation.
				 */
				do_action( 'woocommerce_after_single_variation' );
			?>
		</div>
	<?php endif; ?>

	<?php do_action( 'woocommerce_after_variations_form' ); ?>
</form>

<?php
do_action( 'woocommerce_after_add_to_cart_form' );
