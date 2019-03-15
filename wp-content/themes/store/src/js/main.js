let header = document.getElementById('header'),
    openSearchForm = document.getElementsByClassName('show-search-form')[0],
    headerFirstScreen = document.getElementsByClassName('header-main-first-screen')[0],
    headerSearchForm = document.getElementsByClassName('header-main-second-screen')[0],
    closeSearchForm = document.getElementsByClassName('head-search-close')[0];
    
openSearchForm.addEventListener('click', (e) => {
    e.preventDefault();
    headerFirstScreen.style.display = 'none';
    headerSearchForm.style.display = 'flex';
})

closeSearchForm.addEventListener('click', (e) => {
    e.preventDefault();
    headerFirstScreen.style.display = 'flex';
    headerSearchForm.style.display = 'none';
})

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
            slidesToShow: 5,
            autoplaySpeed: 3000,
            speed: 1000
        });
    })
})(jQuery);