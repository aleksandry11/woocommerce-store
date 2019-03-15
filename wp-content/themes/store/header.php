<?php 
    $image_url = get_template_directory_uri() . '/src/img/';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body>
    <header id="header">
        <div class="header-top-link">
            <a href="#">Shop new arrivals for spring - free us shipping</a>
        </div>
        <div class="header-main content-wrap">
            <div class="header-main-first-screen">
                <div class="head-nav">
                    <?php wp_nav_menu(); ?>
                </div>
                <div class="head-logo">
                    <a href="<?= home_url(); ?>">
                        <img src="<?= $image_url . 'logo.png' ?>" alt="logo">
                    </a>
                </div>
                <div class="head-actions">
                    <a href="#" class="show-search-form"><i class="fas fa-search"></i> Search</a>
                    <a href="#"><i class="fas fa-user"></i> Sign in</a>
                    <a href="<?= wc_get_cart_url(); ?>"><i class="fas fa-shopping-bag"></i> Tote</a>
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