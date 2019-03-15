<?php 
$image_url = get_template_directory_uri() . '/src/img/';

$main_slider_slides = [
    'slide1' => $image_url . 'slide1.jpg',
    'slide2' => $image_url . 'slide1.jpg',
    'slide3' => $image_url . 'slide1.jpg',
    'slide4' => $image_url . 'slide1.jpg',
];

$bottom_slider_slides = [
    'slide1' => $image_url . 'photo-slide1.jpg',
    'slide2' => $image_url . 'photo-slide2.jpg',
    'slide3' => $image_url . 'photo-slide3.jpg',
    'slide4' => $image_url . 'photo-slide4.jpg',
    'slide5' => $image_url . 'photo-slide5.jpg',
    'slide6' => $image_url . 'photo-slide6.jpg',
    'slide7' => $image_url . 'photo-slide7.jpg',
    'slide8' => $image_url . 'photo-slide8.jpg',
    'slide9' => $image_url . 'photo-slide9.jpg',
    'slide10' => $image_url . 'photo-slide10.jpg',
    'slide11' => $image_url . 'photo-slide11.jpg',
    'slide12' => $image_url . 'photo-slide12.jpg',
    'slide13' => $image_url . 'photo-slide13.jpg',
    'slide14' => $image_url . 'photo-slide14.jpg',
];

get_header(); ?>

<section class="first-section-slider">
    <div class="slider-wrapper">


    <?php
    // check if the repeater field has rows of data
    if( have_rows('images') ):

       $link = get_category_link(the_sub_field('link'));
        // loop through the rows of data
        while ( have_rows('images') ) : the_row();  ?>

        <?= $link; ?>
        <a href="#"><img src="<?php the_sub_field('image'); ?>" alt="clothes"></a>
       <?php endwhile;

    else :

        // no rows found

    endif;

    ?>



    </div>
</section>

<section class="products-categories">
    <div class="product-category">
        <a href="<?= get_category_link(61); ?>" class="product-category-link">
            <img src="<?= $image_url . 'cat1.jpg' ?>" alt="cat">
        </a>
        <a href="<?= get_category_link(61); ?>" class="product-category-bottom-link">Shop dresses</a>
    </div>
    <div class="product-category">
        <a href="<?= get_category_link(60); ?>" class="product-category-link">
            <img src="<?= $image_url . 'cat2.jpg' ?>" alt="cat">
        </a>
        <a href="<?= get_category_link(60); ?>" class="product-category-bottom-link">Shop pants</a>
    </div>
    <div class="product-category">
        <a href="<?= get_category_link(59); ?>" class="product-category-link">
            <img src="<?= $image_url . 'cat3.jpg' ?>" alt="cat">
        </a>
        <a href="<?= get_category_link(59); ?>" class="product-category-bottom-link">Shop tops</a>
    </div>
    <div class="product-category">
        <a href="<?= get_category_link(62); ?>" class="product-category-link">
            <img src="<?= $image_url . 'cat4.jpg' ?>" alt="cat">
        </a>
        <a href="<?= get_category_link(62); ?>" class="product-category-bottom-link">Shop sweaters</a>
    </div>
</section>

<section class="shop-lookbook content-wrap">
    <a href="<?= get_category_link(54); ?>">Shop lookbook <i class="fa fa-angle-right"></i></a>
</section>

<section class="single-image-category">
    <a href="#" class="single-image-category-wrap">
        <img src="<?= $image_url . 'summer.jpg' ?>" alt="summer">
    </a>
</section>

<section class="rules-for-design">
    <div class="rules-info">
        <h3>Meet Ruti</h3>
        <p>Lorem, ipsum dolor sit amet repellendus magni, doloribus ut molestiae corrupti velit non nam ipsa culpa. Eligendi reiciendis est et laudantium.</p>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi reiciendis est et laudantium.</p>
    </div>
    <div class="rules-img">
        <img src="<?= $image_url . 'rules.jpg' ?>" alt="woman">
    </div>
</section>

<section class="follow-us content-wrap">
    <h3>Follow us</h3>
    <p>Keep up on your Ruti news and get an inside scoop of what’s new, what’s exciting, and what’s to come!</p>
    <h3>@Ruti</h3>

    <div class="follow-us-slider">
        <?php foreach($bottom_slider_slides as $slide) : ?>
        <div class="follow-us-slider-item">
            <a href="#">
                <img src="<?= $slide?>" alt="photo">
            </a>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<?php get_footer(); ?>