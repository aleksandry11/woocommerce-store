let sizeItems = document.getElementsByClassName('size-variable-item'),
    sizeSelect = document.getElementById('pa_sizes');

const sizeSelectionHandler = (e) => {
    Array.from(sizeItems).forEach((item) => {
        item.classList.remove('selected');
    });

    e.target.classList.add('selected');
    sizeSelect.value = e.target.dataset.value;
    sizeSelect.dispatchEvent(new Event('change'));
}

export {sizeSelectionHandler, sizeItems}