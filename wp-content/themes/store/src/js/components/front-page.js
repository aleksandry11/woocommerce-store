let mobileMenuButton = document.getElementsByClassName('head-mobile-btn')[0],
    mobileMenu = document.getElementById('menu-header-menu');
let node = document.querySelectorAll('.menu-header-menu-container > ul > li');
let closeMenu = document.getElementsByClassName('close-menu')[0];
let menuOverlay = document.getElementsByClassName('menu-overlay')[0];
let subscribeOverlay = document.getElementsByClassName('subscribe-overlay')[0];
let titleLetters = document.getElementsByClassName('video-content-title-letter');


//set transition delay to each letter of title
let transitionDelay = 250;
Array.from(titleLetters).forEach((letter) => {
    transitionDelay += transitionDelay;
    letter.style.transitionDelay = transitionDelay;
})

//show expand sign where it's available
Array.from(node).forEach((item) => {
    if(item.children.length > 1) {
        item.classList.add('expandable');
    }
})

const closeMenuHandler = (e) => {
    document.body.classList.remove('menu-expanded');
    mobileMenu.classList.remove('active');
    mobileMenuButton.classList.remove('active');
    Array.from(node).forEach((item) => {
        if (item.children.length > 1) item.classList.remove('active');
    });
}

    

const mobileMenuButtonHandler = (e) => {

    e.target.classList.toggle('active');
    if (e.target.classList.contains('active')) {
        mobileMenu.classList.add('active');
        document.body.classList.add('menu-expanded');
    } else {
        mobileMenu.classList.remove('active');
        document.body.classList.remove('menu-expanded');
    }
}

export {
    menuOverlay, 
    mobileMenuButton, 
    mobileMenuButtonHandler, 
    closeMenuHandler, 
    closeMenu, 
    mobileMenu, 
    node, 
    subscribeOverlay,
    titleLetters
}