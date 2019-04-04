<?php 
    $image_url = get_template_directory_uri() . '/src/img/';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="noindex">
    <link rel="apple-touch-icon" sizes="57x57" href="<?= get_template_directory_uri() . '/favicon'?>/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?= get_template_directory_uri() . '/favicon'?>/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= get_template_directory_uri() . '/favicon'?>/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= get_template_directory_uri() . '/favicon'?>/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= get_template_directory_uri() . '/favicon'?>/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= get_template_directory_uri() . '/favicon'?>/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= get_template_directory_uri() . '/favicon'?>/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= get_template_directory_uri() . '/favicon'?>/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= get_template_directory_uri() . '/favicon'?>/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?= get_template_directory_uri() . '/favicon'?>/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= get_template_directory_uri() . '/favicon'?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= get_template_directory_uri() . '/favicon'?>/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= get_template_directory_uri() . '/favicon'?>/favicon-16x16.png">
    <link rel="manifest" href="<?= get_template_directory_uri() . '/favicon'?>/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?= get_template_directory_uri() . '/favicon'?>/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title><?= single_cat_title(false, false) ?? get_the_title();?></title>
    <?php wp_head(); ?>
</head>
<body class="<?= is_front_page() ? 'front-page' : ''; ?>">
    <header id="header" class="<?= is_front_page() ? 'on-video' : '';?>">
        <div class="header-main content-wrap">
            <div class="header-main-first-screen">
                <div class="head-mobile-btn">
                    <div class="head-mobile-menu"></div>
                </div>
                <div class="head-nav">
                    <div class="close-menu"></div>
                    <div class="menu-overlay"></div>
                    <div class="menu-logo">
                        <img src="<?= $image_url . 'charen.svg' ?>" alt="fashion">
                    </div>
                    <?php wp_nav_menu(); ?>
                </div>
                <div class="head-logo">
                    <div class="head-logo-image-wrap">
                        <a href="<?= home_url(); ?>">
                            <img src="<?= $image_url . 'charen3.svg'?>" alt="logo" class="logo">
                            <img src="<?= $image_url . 'logo-white.svg'?>" alt="logo" class="logo logo-white">
                        </a>
                    </div>
                </div>
                <div class="head-actions">
                    <a href="<?= wc_get_cart_url(); ?>">
                        <span class="cart-bag">
                            <img src="<?= $image_url . 'bag.png' ?>" alt="shoping bag white" class="bag-img">
                            <img src="<?= $image_url . 'bag-white.png' ?>" alt="shoping bag" class="bag-img bag-img-white">
                            <span class="cart-quantity">
                            <?php
                                $count = (int)WC()->cart->get_cart_contents_count();
                                echo $count > 0 ? $count : '';
                            ?>
                            </span>
                        </span>
                        <span class="hide-on-mobile">Tote</span>
                    </a>
                </div>       
            </div>
            <div class="header-main-second-screen">
                <div class="head-search">
                    <form action="" class="head-search-form">
                        <input type="text" placeholder="Search Boutique">
                        <div class="head-search-close"></div>
                    </form>
                </div>
            </div>
        </div>
    </header>
    
    

    <main>