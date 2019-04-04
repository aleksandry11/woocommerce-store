<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
global $product;

$product_image_id = $product->get_image_id();
$product_image_src = wp_get_attachment_image_src($product_image_id, 'full')[0];

$product_gallery_ids = $product->get_gallery_image_ids();
foreach($product_gallery_ids as $id) {
	$product_gallery[] = [
		'src' => wp_get_attachment_image_src($id, 'full')[0],
	];
}
@array_unshift($product_gallery, array('src' => $product_image_src));
if ($product->is_type('variable')) {
	$variations = $product->get_available_variations();
}

?>

<section class="woocommerce single-product">

	<div class="single-product-breadcrumb"><?php woocommerce_breadcrumb() ?></div>

	<div id="product-<?php the_ID(); ?>" <?php wc_product_class("content-wrap"); ?>>
	<div class="container" style="margin-bottom: 100px;">
		<div class="row">
			<div class="product-img col-md-7">

				<?php if (!isset($variations)): ?>

					<div class="product-image-wrapper <?= $selected?>">
						<div class="product-image">
							<img src="<?= $product_image_src; ?>" alt="product" data-name="simple-product">
						</div>

						<?php if(!empty($product_gallery)) : ?>
							<div class="product-gallery">
								
								<?php foreach($product_gallery as $img): ?>
									<div class="product-gallery-item">
										<img src="<?= $img['src']; ?>" alt="gallery">
									</div>
								<?php endforeach;?>					
							
							</div>
						<?endif;?>
					</div>
					
				<?php else: ?>

					<?php foreach($variations as $key => $variation): ?>
						<?php 
							$selected = $key == 0 ? 'selected' : '';
							$var = new WC_Product_Variation($variation['variation_id']);
							$title = current($var->get_variation_attributes());
						?>

						<div class="product-image-wrapper <?= $selected?>" data-color="<?= $title; ?>">
							<div class="product-image">
								<img src="<?= $variation['image']['src']; ?>" alt="product" data-name="product-variation-<?= $title?>">
							</div>
							
							<div class="product-gallery">

								<?php foreach($variation['variation_gallery_images'] as $gal_imgs): ?>
									<div class="product-gallery-item">
										<img src="<?= $gal_imgs['src']; ?>" alt="gallery" data-gallery-color="<?= $title ?>">
									</div>
								<?php endforeach;?>
							
							</div>
						</div>
					<?php endforeach; ?>
				
				<?php endif;?>				

			</div>

			<div class="product-shop col-md-5">
				<?php do_action( 'woocommerce_single_product_summary' );?>
			</div>
			
		</div>
	</div>
		
		<?php
			/**
			 * Hook: woocommerce_before_single_product_summary.
			 *
			 * @hooked woocommerce_show_product_sale_flash - 10
			 * @hooked woocommerce_show_product_images - 20
			 */
			// do_action( 'woocommerce_before_single_product_summary' );
		?>

		<div class="summary entry-summary">
			<?php
				/**
				 * Hook: woocommerce_single_product_summary.
				 *
				 * @hooked woocommerce_template_single_title - 5
				 * @hooked woocommerce_template_single_rating - 10
				 * @hooked woocommerce_template_single_price - 10
				 * @hooked woocommerce_template_single_excerpt - 20
				 * @hooked woocommerce_template_single_add_to_cart - 30
				 * @hooked woocommerce_template_single_meta - 40
				 * @hooked woocommerce_template_single_sharing - 50
				 * @hooked WC_Structured_Data::generate_product_data() - 60
				 */
				// do_action( 'woocommerce_single_product_summary' );
			?>
		</div>

		<?php
			/**
			 * Hook: woocommerce_after_single_product_summary.
			 *
			 * @hooked woocommerce_output_product_data_tabs - 10
			 * @hooked woocommerce_upsell_display - 15
			 * @hooked woocommerce_output_related_products - 20
			 */
			do_action( 'woocommerce_after_single_product_summary' );
		?>
	</div>
</section>
<?php do_action( 'woocommerce_after_single_product' ); ?>
