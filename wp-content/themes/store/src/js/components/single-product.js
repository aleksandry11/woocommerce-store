import './color-pick';

//single product selections
let productGalleryItem = document.getElementsByClassName('product-gallery-item'),
    productImage = document.getElementsByClassName('product-image');

const productClickHandler = (e, item) => {   
    Array.from(productGalleryItem).forEach((foo) => {
        foo.classList.remove('selected');
    });

    if (document.querySelector('[data-name="simple-product"]')) {
        let currentProductImage = document.querySelector('[data-name="simple-product"]');
        currentProductImage.src = e.target.src;
        e.target.parentNode.classList.add('selected');
    } else {
        let currentProductImage = document.querySelectorAll(`[data-name='product-variation-${e.target.dataset.galleryColor}']`)[0];
        currentProductImage.src = e.target.src;
        e.target.parentNode.classList.add('selected');
    }
}
export {productGalleryItem, productClickHandler, productImage}