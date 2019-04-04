//color selection 
let imageGallery = document.getElementsByClassName('product-image-wrapper'),
    colorLabel = document.getElementsByClassName('color-variable-label'),
    colorSelect = document.getElementById('pa_color'),
    productGallery = document.getElementsByClassName('product-gallery');


const colorSelectionHandler = (e) => {
    colorSelect.value = e.target.dataset.color;
    let variationIdInput = document.getElementsByClassName('variation_id')[0];
    variationIdInput.value = e.target.dataset.variationId;

    //change selected class
    Array.from(colorLabel).forEach((label) => {
        label.classList.remove('selected');
        e.target.classList.add('selected');
    })


    colorSelect.dispatchEvent(new Event('change'));

    let colorValue = e.target.dataset.color;
    let img = document.querySelectorAll(`[data-color=${colorValue}]`)[0];

    setInitialBorder();

    Array.from(imageGallery).forEach((item) => {
        item.classList.remove('selected');
    });
    img.classList.add('selected');
}

const setInitialBorder = () => {
    //initial border for product gallery item
    Array.from(productGallery).forEach((gallery) => {
        gallery.childNodes[1].classList.add('selected');
    });
}

export {setInitialBorder, colorLabel, colorSelectionHandler}