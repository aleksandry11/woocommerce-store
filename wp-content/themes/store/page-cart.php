<?php get_header(); ?>

<section class="cart">
    <!-- <div class="single-product-breadcrumb"><?php woocommerce_breadcrumb() ?></div> -->
    <!-- <div class="container"> -->
        <!-- <div class="row"> -->
            <?= do_shortcode('[woocommerce_cart]') ?>
        <!-- </div> -->
    <!-- </div> -->
</section>

<?php get_footer();