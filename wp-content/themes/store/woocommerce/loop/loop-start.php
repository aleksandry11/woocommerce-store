<?php
/**
 * Product Loop Start
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/loop-start.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<div class="products container-loop columns-<?php echo esc_attr( wc_get_loop_prop( 'columns' ) ); ?>">
	<!-- <div class="toolbar-top-container">
		<div class="amount-per-page">
			<select name="" id="">
				<option value="9">Show: 9</option>
				<option value="18">Show: 18</option>
				<option value="36">Show: 36</option>
				<option value="72">Show: 72</option>
				<option value="all">Show: All</option>						
			</select>
			<div class="arrow-down"></div>
		</div>
	</div> -->

		
