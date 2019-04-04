import { menuOverlay, mobileMenuButton, mobileMenuButtonHandler, closeMenuHandler, closeMenu, node, subscribeOverlay, titleLetters} from './components/front-page';
import { productGalleryItem, productClickHandler } from './components/single-product';
import { setInitialBorder, colorLabel, colorSelectionHandler} from './components/color-pick';
import { sizeSelectionHandler, sizeItems} from './components/size-pick';
import { closeSubscribe, closeSubscribeHandler} from './components/subscribe';


let logo = document.getElementsByClassName('logo');
let cartImage = document.getElementsByClassName('bag-img');

let header = document.getElementById('header');
let videoTitle = document.getElementsByClassName('video-content-title')[0];
let videoSlogan = document.getElementsByClassName('video-content-slogan')[0];

let  noThanksBtn = document.getElementById('no-thanks');

const convertTitleToSpans = (title, spanClass) => {
    if (title) {
        let newTitle = title.innerText.replace(/./g, `<span class="${spanClass}">$&</span>`);
        return newTitle;
    } else return;
}

const animateTitle = (initialDuration, step) => {
    let letters = document.getElementsByClassName('video-content-title-letter');
    let opacity = 0.5;

    Array.from(letters).forEach((letter) => {
        letter.style.transitionDuration = initialDuration + 'ms';
        letter.style.transitionDelay = initialDuration / 3 + 'ms';
        letter.style.opacity += opacity;
        initialDuration += step;
        opacity += 0.1;
    });
}

if (videoTitle) {
    videoTitle.innerHTML = convertTitleToSpans(videoTitle, 'video-content-title-letter');
}

window.onload = (e) => {
    /**
     * display video content title & slogan with animations
     */
    if(videoTitle) videoTitle.classList.add('loaded');
    animateTitle(500, 500);
    if (videoSlogan) videoSlogan.style.opacity = .7;


    /**
    * Open subscribe window
    */
    if (document.body.classList.contains('front-page')) {
        setTimeout(() => {
            document.body.classList.add('subscribe-opened');
        }, 8000);
    }
    /** */

    // Single product gallery events
    Array.from(productGalleryItem).forEach((item) => {
        item.addEventListener('click', (e) => productClickHandler(e, item))
    });

    //sets border to the first product gallery item
    setInitialBorder();
    
    //change product gallery regarding on chosen color
    Array.from(colorLabel).forEach((item) => {
        item.addEventListener('click', (e) => colorSelectionHandler(e));
    });

    //Selecting size event handler
    Array.from(sizeItems).forEach((item) => {
        item.addEventListener('click', (e) => sizeSelectionHandler(e));
    })

    //Menu state handler
    mobileMenuButton.addEventListener('click', (e) => mobileMenuButtonHandler(e));

    //Menu items handler
    Array.from(node).forEach((item)=> {
        item.addEventListener('click', (e) => {
            if(item.children.length > 1) {
                item.classList.toggle('active');
            }
        })
    })
    

    //close subscribe window
    if (closeSubscribe !== undefined) {
        closeSubscribe.addEventListener('click', (e) => closeSubscribeHandler(e));
        subscribeOverlay.addEventListener('click', (e) => closeSubscribeHandler(e));
        noThanksBtn.addEventListener('click', (e) => closeSubscribeHandler(e));
    }

    //close menu button event 
    closeMenu.addEventListener('click', (e) => closeMenuHandler(e));
    menuOverlay.addEventListener('click', (e) => closeMenuHandler(e));
    //
}

window.onscroll = (e) => {
//     //header appearance
    if(document.body.classList.contains('front-page')) {
        if(pageYOffset > window.outerHeight - 100) {
            header.style.backgroundColor = '#fff';
            header.style.boxShadow = '0 2px 3px #3b3b3b13';
            header.classList.remove('on-video');
            logo[0].style.opacity = 1;
            logo[1].style.opacity = 0;
            cartImage[0].style.opacity = 1;
            cartImage[1].style.opacity = 0;
        } else {
            header.style.background = 'transparent';
            header.style.boxShadow = 'none';
            header.classList.add('on-video');
            logo[1].style.opacity = 1;
            logo[0].style.opacity = 0;
            cartImage[1].style.opacity = 1;
            cartImage[0].style.opacity = 0;
        }
    }
}

(function($) {
    $(document).ready(function() {
        //update cart event
        $('body').on('click', '.qty-btn', (e) => {
            $( '.shop_table.cart' ).closest( 'form' ).find( 'button[name="update_cart"]' ).removeProp( 'disabled');
        });

        //header slider
        $(".slider-wrapper").slick({
            autoplay: true,
            arrows: false,
            autoplaySpeed: 3000,
            speed: 1000,
            waitForAnimate: false
        });

        //bottom slider
        $('.follow-us-slider').slick({
            autoplay: true,
            slidesToShow: 5,
            autoplaySpeed: 3000,
            arrows: false,
            swipeToSlide: true,
            speed: 500,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 478,
                    settings: {
                        slidesToShow: 2
                    }
                }
            ]
        });

        // //latest products slider
        // $('.latest-products-wrap').slick({
        //     autoplay: false,
        //     slidesToShow: 4,
        //     slidesToScroll: 4
        // })
        
        
        //subscribe modal slider
            // $('#subscribe-images').slick({
            //     autoplay: true,
            //     arrows: false,
            //     slidesToShow: 1,
            //     fade: true
            // });
    })
})(jQuery);