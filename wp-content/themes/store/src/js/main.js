let header = document.getElementById('header');

window.onscroll = (e) => {
    if(pageYOffset > 0) {
        header.style.top = '-26px';
        header.style.transitionDuration = '.3s';
    } else {
        header.style.top = 0;
        header.style.transitionDuration = '.1s';
    }
}

(function($) {
    $(document).ready(function() {
        $(".slider-wrapper").slick({
            autoplay: true,
            arrows: false,
            autoplaySpeed: 3000,
            speed: 1000
        });

        $('.follow-us-slider').slick({
            autoplay: true,
            slidesToShow: 5
        });
    })
})(jQuery);