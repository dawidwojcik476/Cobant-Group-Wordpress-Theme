const menuBtn = document.querySelector('.burger');
const mainMenu = document.querySelector('.menu');


let menuOpen = false;

const menu = () => {
    if (!menuOpen) {
        menuBtn.classList.add('open');
        mainMenu.classList.add('open');

        menuOpen = true;
    } else {
        menuBtn.classList.remove('open');
        mainMenu.classList.remove('open');

        menuOpen = false;
    }
}

menuBtn.addEventListener('click', menu);
