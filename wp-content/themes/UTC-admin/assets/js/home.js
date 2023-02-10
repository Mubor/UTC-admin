import menuActivator from "./lib/menu";
import Typed from "typed.js";

const initTypeAnimation = (typeText, isLooped = true) => {
    return new Typed('#type-container', {
        strings: [typeText],
        loop: isLooped,
        loopCount: Infinity,
        typeSpeed: 200,
        backSpeed: 60,
        backDelay: 6000,
    });
}

// start/destroy animation when browser size is desktop/mobile width
const typeAnimationOnPageLoad = () => {
    if (document.documentElement.clientWidth > 830) {
        typeAnimation = initTypeAnimation(typeText, isLooped)
        typeAnimation.start();
        animationCanStart = false;
    } else {
        if(typeAnimation) {
            typeAnimation.destroy();
        }
    }
}

// start/destroy animation when browser resized to desktop/mobile width
const typeAnimationOnPageResize = () => {
    if(document.documentElement.clientWidth <= 831 && typeAnimation) {
        if(typeAnimation) {
            typeAnimation.destroy();
            animationCanStart = true;
        }
    }
    else if (animationCanStart) {
        typeAnimation = initTypeAnimation(typeText, isLooped);
        typeAnimation.start();
        animationCanStart = false;
    }
}

// LANGUAGE BUTTON FUNCTIONS
const resetActiveClass = (buttons,activeClass) => {
    buttons.forEach((elem) => {
        elem.classList.remove(activeClass);
	});
}

const changeLang = (e) => {
    localStorage.setItem('lang', e.target.id);
    document.cookie = 'lang=' + localStorage.getItem('lang');
    const activeClass = 'language__elem--current';
    const itemClass = '.language__elem';
    
    if( e.target.classList.contains(activeClass) ) {
        return;
    }
    
    resetActiveClass([...document.querySelectorAll(itemClass)], activeClass);
    e.target.closest(itemClass).classList.add(activeClass);
    setTimeout(()=>location.reload(), 100);
}

const typeText = document.getElementById('type-source').innerHTML;
const isLooped = JSON.parse(document.getElementById('type-loop').innerHTML);
let typeAnimation;
let animationCanStart = true;

const team = document.getElementById('team');
const uaButton = document.getElementById('ua');
const engButton = document.getElementById('eng');
const currentLang = localStorage.getItem('lang') || 'eng';
document.cookie = 'lang=' + currentLang;
const langButton = document.getElementById(currentLang);


const jsLoad = () => {
    langButton.closest('.language__elem').classList.add('language__elem--current');
    typeAnimationOnPageLoad();
    menuActivator('menu-button', 'header');
    
    engButton.addEventListener('click', changeLang);
    uaButton.addEventListener('click', changeLang);
    window.addEventListener('resize', () => {
        typeAnimationOnPageResize();

        if( window.innerWidth > 830 && currentLang === 'ua' ) {
            team.classList.add('team--ua');
        }
        else if (window.innerWidth <= 830) {
            team.classList.remove('team--ua');
        }
    });
}

window.onload = () => {
    jsLoad();
}

