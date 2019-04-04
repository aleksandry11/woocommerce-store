let closeSubscribe = document.getElementsByClassName('subscribe-close')[0];

const closeSubscribeHandler = (e) => {
    e.preventDefault();
    document.body.classList.remove('subscribe-opened');
}
export {closeSubscribe, closeSubscribeHandler}