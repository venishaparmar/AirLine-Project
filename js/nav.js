selector(s, ".menu").addEventListener('click', function () {
    this.classList.toggle(token, 'open');
    selector(s, 'header').classList.toggle(token, 'open');
    selector(s, 'overlay').classList.toggle(token, 'open');

});




function selector(s) {
    return document.querySelector(s)
}