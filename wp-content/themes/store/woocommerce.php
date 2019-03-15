<?php get_header(); 

    if ( is_singular( 'product' ) ) {
        
    woocommerce_content();
    }else{
    //For ANY product archive.
    //Product taxonomy, product search or /shop landing
    wc_get_template( 'archive-product.php' );
    }

get_footer();
