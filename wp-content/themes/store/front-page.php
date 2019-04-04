<?php 

$image_url = get_template_directory_uri() . '/src/img/';
$images = get_field('subscribe_images');
get_header(); ?>



<section class="first-section-slider">
    <div class="video-wrapper position_relative">
        <div class="video-overlay"></div>
        <div class="video-content">
            <h3 class="video-content-title"><?= get_bloginfo('name'); ?></h3>
            <p class="video-content-slogan"><?= get_bloginfo('description'); ?></p>
        </div>
        <video src="<?= get_template_directory_uri() . '/src/video/video2.mp4'?>" poster="<?= get_template_directory_uri() . '/src/video/placeholder.jpg'?>" autoplay loop muted></video>
    </div>

    <!-- <div class="slider-wrapper">
        <?php
            // check if the repeater field has rows of data
            if ( have_rows('images') ):
                // loop through the rows of data
                while ( have_rows('images') ) : the_row();  ?>
                    <a href="<?= get_term_link((int)get_sub_field('link')[0]); ?>"><img src="<?php the_sub_field('image'); ?>" class="slick-slider-image" alt="clothes"></a>
                <?php endwhile;
            else :
            // no rows found
            endif;?>
    </div> -->
</section>

<section class="products-categories">
    <?php
    // check if the repeater field has rows of data
    if( have_rows('category') ):
        // loop through the rows of data
        while ( have_rows('category') ) : the_row();

            //vars
            $cat_image = get_sub_field('category_image');
            $cat_id = (int)get_sub_field('category_link')[0];
            $cat_link = get_term_link($cat_id);
            $cat_title = get_term_by('id', $cat_id, 'product_cat')->name;
            ?>
            <div class="product-category">
                <a href="<?= $cat_link?>" class="product-category-link">
                    <img src="<?=$cat_image?>" alt="cat">
                </a>
                <a href="<?=$cat_link?>" class="product-category-bottom-link"><?=$cat_title?></a>
            </div>
        <?endwhile;
    else :
        // no rows found
    endif;
    ?>
</section>



<section class="rules-for-design">
    <div class="rules-info">
        <h3>Meet Cheron</h3>
        <p>"I have three rules for design:</p>
        <p>It must be COOL. You don't need to sacrifice the cool factor to achieve a look that is classic and sophisticated. Our clothes lend a smart end effortless touch to the woman on the go.</p>
        <p>It must be FLATTERING. Our clothes are designed to flatter a woman over the age of 35 without making her look like she's trying too hard.</p>
        <p>It must be PRACTICAL. 80% of my collection are clothes that i wear everyday. 20% of my collection is aspirational - it's for the woman I daydream of being."</p>
    </div>
    <div class="rules-img">
        <img src="<?= $image_url . 'rules.jpg' ?>" alt="woman">
    </div>
</section>

<section class="follow-us content-wrap">
    <h3>Follow us</h3>
    <p>Keep up on your <?= get_bloginfo('name');?> news and get an inside scoop of what’s new, what’s exciting, and what’s to come!</p>
    <ul class="share-us">
        <li><i class="fab fa-facebook"></i></li>
        <li><i class="fab fa-twitter"></i></li>
        <li><i class="fab fa-instagram"></i></li>
    </ul>
    <h3>@ <img src="<?= $image_url . 'charen2.svg' ?>" alt="fashion"></h3>
    <div class="follow-us-slider">
        <?php
            // check if the repeater field has rows of data
            if( have_rows('follow_us_slider') ):
                // loop through the rows of data
                while ( have_rows('follow_us_slider') ) : the_row(); ?>

                    <div class="follow-us-slider-item">
                        <img src="<?= get_sub_field('follow_us_image')?>" alt="photo">
                    </div>

                <?php endwhile;
            else :
            // no rows found
            endif;?>
    </div>
</section>

<div class="subscribe-wrap">
    <div class="subscribe-overlay"></div>
    <div class="subscribe">
        <div class="subscribe-img">
            
            <img src="<?= $images[rand(0, count($images) -1)]['url']; ?>" alt="fashion">
        </div>
        <div class="subscribe-info">
            <div class="subscribe-close"></div>
            <div class="subscribe-logo">
                <img src="<?= $image_url . 'charen3.svg' ?>" alt="logo">
            </div>
            <p class="subscribe-text">Get the latest from our editors</p>
            <h4 class="subscribe-text-accent">Exclusive Style, Beauty and Culture News</h4>
            <p class="subscribe-text">Directly to your inbox</p>
            <form action="#" class="subscribe-form">
                <input type="email" placeholder="Email Adress">
                <button class="btn cta" type="submit">Sign up</button>
                <button class="btn" id="no-thanks">No thanks</button>
            </form>
            <div class="subscribe-privacy">
                <span class="subscribe-privacy-text">Will be used in accordance with our <a href="#">Privacy Policy</a></span>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>