let menu = document.querySelector('#menu-icon');
let navlist = document.querySelector('.navlist');

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navlist.classList.toggle('open');
};

const sr = ScrollReveal ({
    distance: '65px',
    duration: 2600,
    delay: 450,
    reset: true
});

sr.reveal('.main-text', {delay:200, origin:'top'});
sr.reveal('.main-img', {delay:400, origin:'top'});
sr.reveal('.icons', {delay:500, origin:'left'});
sr.reveal('.scroll-down', {delay:500, origin:'bottom'});
sr.reveal('.article-block', {delay: 500, origin: 'botton'});

$(document).click(function (e) {
    if ($(e.target).is('.modal')) {
        closeModal()
    }
});

$(document).click(function (e) {
    if ($(e.target).is('.login')) {
        closeModal()
    }
});

$(document).click(function (e) {
    if ($(e.target).is('.login')) {
        closeModal()
    }
});