import menuActivator from "./lib/menu";
import Masonry from "masonry-layout";
import { getCookie } from "./lib/cookies";

// const currentLang = localStorage.getItem('lang');
// document.cookie = 'lang=' + currentLang;

menuActivator('menu-button', 'header');

const grid = document.querySelector('.grid');

window.onload = () => {
    const masonry = new Masonry(grid, {
        itemSelector: '.grid__item',
        columnWidth: '.grid__sizer',
        gutter: '.grid__gutter-sizer',
        percentPosition: true
    });

    // if(localStorage.getItem('lang') !== getCookie('lang')) {
    //     document.cookie = "lang=" + localStorage.getItem('lang');
    // }

}


