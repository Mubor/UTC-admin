import menuActivator from "./lib/menu";
import { translatePage } from "./lib/translator";

const currentLang = localStorage.getItem('lang');
document.cookie = 'lang=' + currentLang;

menuActivator('menu-button', 'header');

window.onload = () => {
    if(currentLang !== 'eng') {
        translatePage('services', currentLang);
    }
}