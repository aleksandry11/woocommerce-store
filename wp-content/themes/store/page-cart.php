<?php 
    get_header();
?>

<section class="cart content-wrap">
    <?= do_shortcode('[woocommerce_cart]') ?>
</section>

<?php get_footer();