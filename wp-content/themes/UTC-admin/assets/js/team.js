import menuActivator from "./lib/menu";
import { toggleDialogVisibility } from "./lib/modalWindowForm";

const cardOpeningEventSet = (buttons) => {
    const slide = (e) => {
        const item = e.target.closest('.team__item');
        const back = item.querySelector('.team__back');
        
        back.classList.toggle('team__open');
    };
    
    [...buttons].forEach(element => {
        element.addEventListener('click', slide)
    });
}

const teamRectWidthRounder = (rects) => {
    for (const elem of rects) {
        if(window.innerWidth > 830) {
            elem.setAttribute('style', 'width:' + Math.round(window.innerWidth/285,7) + 'px')
        }
        else {
            elem.setAttribute('style', 'width:' + Math.round(window.innerWidth/93,8) + 'px')
        }
    }
}

const appDialog = document.getElementById('dialog');
const openButton = document.getElementById('dialog-open-button');
const closeButton = document.getElementById('close-button');

const currentLang = localStorage.getItem('lang');
document.cookie = 'lang=' + currentLang;

const buttons = document.querySelectorAll('.team__button');
const rect = [...document.querySelectorAll('.team__params-item > .level > *')];

const jsLoad = () => {
    menuActivator('menu-button', 'header');

    appDialog.style.display = 'none';
    openButton.addEventListener('click', toggleDialogVisibility);
    closeButton.addEventListener('click', toggleDialogVisibility);

    cardOpeningEventSet(buttons);
    teamRectWidthRounder(rect);
}

window.onload = jsLoad;
window.onresize = () => {teamRectWidthRounder(rect);}


