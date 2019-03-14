<?php 
$image_url = get_template_directory_uri() . '/src/img/';

$image_slides = [
    'slide1' => $image_url . 'photo-slide1',
    'slide2' => $image_url . 'photo-slide2',
    'slide3' => $image_url . 'photo-slide3',
    'slide4' => $image_url . 'photo-slide4',
    'slide5' => $image_url . 'photo-slide5',
    'slide6' => $image_url . 'photo-slide6',
    'slide7' => $image_url . 'photo-slide7',
    'slide8' => $image_url . 'photo-slide8',
    'slide9' => $image_url . 'photo-slide9',
    'slide10' => $image_url . 'photo-slide10',
    'slide11' => $image_url . 'photo-slide11',
    'slide12' => $image_url . 'photo-slide12',
    'slide13' => $image_url . 'photo-slide13',
    'slide14' => $image_url . 'photo-slide14',
];

get_header(); ?>

<section class="first-section-slider">
    <div class="slider-wrapper">
        <a href="#"><img src="<?= $image_url . 'slide1.jpg'?>" alt="clothes"></a>
        <a href="#"><img src="<?= $image_url . 'slide1.jpg'?>" alt="clothes"></a>
        <a href="#"><img src="<?= $image_url . 'slide1.jpg'?>" alt="clothes"></a>
    </div>
</section>

<section class="products-categories">
    <div class="product-category">
        <a href="#" class="product-category-link">
            <img src="<?= $image_url . 'cat1.jpg' ?>" alt="cat">
        </a>
        <a href="#" class="product-category-bottom-link">Shop dresses</a>
    </div>
    <div class="product-category">
        <a href="#" class="product-category-link">
            <img src="<?= $image_url . 'cat2.jpg' ?>" alt="cat">
        </a>
        <a href="#" class="product-category-bottom-link">Shop pants</a>
    </div>
    <div class="product-category">
        <a href="#" class="product-category-link">
            <img src="<?= $image_url . 'cat3.jpg' ?>" alt="cat">
        </a>
        <a href="#" class="product-category-bottom-link">Shop tops</a>
    </div>
    <div class="product-category">
        <a href="#" class="product-category-link">
            <img src="<?= $image_url . 'cat4.jpg' ?>" alt="cat">
        </a>
        <a href="#" class="product-category-bottom-link">Shop sweaters</a>
    </div>
</section>

<section class="shop-lookbook content-wrap">
    <a href="#">Shop lookbook <i class="fa fa-angle-right"></i></a>
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
        <?php foreach($image_slides as $slide) : ?>
        <div class="follow-us-slider-item">
            <a href="#">
                <img src="<?= $slide . '.jpg' ?>" alt="photo">
            </a>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<?php get_footer(); ?>