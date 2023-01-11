import menuActivator from "./lib/menu";
import Typed from "typed.js";
import generate from "./lib/generate";
import { translatePage } from "./lib/translator";

const typeText = document.getElementById('type-source').innerHTML;
const isLooped = JSON.parse(document.getElementById('type-loop').innerHTML);
let typeAnimation;
let animationCanStart = true;

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
if (document.documentElement.clientWidth > 830) {
    typeAnimation = initTypeAnimation(typeText, isLooped)
    typeAnimation.start();
    animationCanStart = false;
} else {
    if(typeAnimation) {
        typeAnimation.destroy();
    }
}

// start/destroy animation when browser resized to desktop/mobile width
window.addEventListener('resize', () => {
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
});

//generate random teammate from sample after reload
//menu activate
menuActivator('menu-button', 'header');

//language switchers 

const uaButton = document.getElementById('ua');
const engButton = document.getElementById('eng');
const currentLang = localStorage.getItem('lang') || 'eng';

const langButton = document.getElementById(currentLang);

const resetActiveClass = (buttons,activeClass) => {
    buttons.forEach((elem) => {
        elem.classList.remove(activeClass);
	});
}

const changeLang = (e) => {
    const activeClass = 'language__elem--current';
    const itemClass = '.language__elem';
    
    if( e.target.classList.contains(activeClass) ) {
        return;
    }
    
    resetActiveClass([...document.querySelectorAll(itemClass)], activeClass);
    e.target.closest(itemClass).classList.add(activeClass);
    localStorage.setItem('lang', e.target.id);
    translatePage('home', e.target.id)
    console.log(currentLang)
}

uaButton.onclick = changeLang;
engButton.onclick = changeLang;

const getRandomInt = (max) => {
    return Math.floor(Math.random() * max);
}
const insertTeamItem = () => {
    // debugger
    const text = document.getElementById('team-source').innerHTML;
    const textArr = text.split(`\\`);
    const randomPairToShow = textArr[getRandomInt(textArr.length)] || textArr;
    const dividedPair = randomPairToShow.split('+');
    const imgUrl = dividedPair[0]
    const textToShow = [dividedPair[1], dividedPair[2]]

    textToShow.forEach((e) => {
        e.split('|');
    })

    const eng = textToShow[0].split('|');
    const ua = textToShow[1].split('|');

    const inner =  `
                <div class="team__media"><img src="${imgUrl}" alt="teamgif"></div>
                <div class="team__message" id="team-message">
                    <div class="team__text" data-lang="eng">
                        ${eng[0]}
                    </div>
                    <div class="team__text" data-lang="ua">
                        ${ua[0]}
                    </div>
                    <div class="team__container">
                        <div class="team__picture">
                            <svg viewBox="0 0 56 56" fill="none">
                                <path d="M3.02702 36.3244V20.4325V19.6757H6.05405V12.1082H9.08108V9.08115H12.1081V6.05413H19.6757V3.0271H36.3243V6.05413H43.8919V9.08115H46.9189V12.1082H49.9459V19.6757H52.973V36.3244H49.9459V43.892H46.9189V46.919H43.8919V49.946H36.3243V52.973H19.6757V49.946H12.1081V46.919H9.08108V43.892H6.05405V36.3244H3.02702Z" fill="#FFFE54"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M36.3243 0H19.6757V3.02703L12.1081 3.02703V6.05405H9.08108L9.08108 9.08108H6.05405L6.05405 12.1081L3.02703 12.1081L3.02703 19.6757H0V36.3243H3.02703L3.02703 19.6757H6.05405V12.1081L9.08108 12.1081V9.08108L12.1081 9.08108V6.05405L19.6757 6.05405L19.6757 3.02703H36.3243V6.05405H43.8919V9.08108H46.9189V12.1081H49.9459V19.6757H52.973L52.973 36.3243L49.9459 36.3243V43.8919H46.9189V46.9189H43.8919V49.9459H36.3243V52.973H19.6757V49.9459H12.1081V46.9189H9.08108V43.8919H6.05406L6.05406 36.3243H3.02703L3.02703 43.8919H6.05406V46.9189H9.08108V49.9459H12.1081L12.1081 52.973H19.6757V56H36.3243L36.3243 52.973H43.8919V49.9459H46.9189V46.9189H49.9459V43.8919H52.973V36.3243L56 36.3243V19.6757L52.973 19.6757V12.1081H49.9459V9.08108H46.9189V6.05405H43.8919V3.02703H36.3243V0Z" fill="black"/>
                                <rect x="15.1351" y="19.6758" width="6.05406" height="6.05405" fill="black"/>
                                <rect x="34.8108" y="19.6758" width="6.05405" height="6.05405" fill="black"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M36.3243 43.8918L19.6757 43.8918L19.6757 40.8648L36.3243 40.8648L36.3243 43.8918ZM16.6487 37.8378L19.6757 37.8378L19.6757 40.8648L16.6487 40.8648L16.6487 37.8378ZM16.6487 37.8378L13.6216 37.8378L13.6216 34.8108L16.6487 34.8108L16.6487 37.8378ZM42.3784 37.8378L39.3514 37.8378L39.3514 34.8108L42.3784 34.8108L42.3784 37.8378ZM39.3514 37.8378L39.3514 40.8648L36.3243 40.8648L36.3243 37.8378L39.3514 37.8378Z" fill="black"/>
                            </svg>
                        </div>
                        <div class="team__media"><img src="${imgUrl}" alt="teamgif"></div>
                        <div class="team__picture">
                            <svg viewBox="0 0 56 56" fill="none">
                                <path d="M3.02702 36.3244V20.4325V19.6757H6.05405V12.1082H9.08108V9.08115H12.1081V6.05413H19.6757V3.0271H36.3243V6.05413H43.8919V9.08115H46.9189V12.1082H49.9459V19.6757H52.973V36.3244H49.9459V43.892H46.9189V46.919H43.8919V49.946H36.3243V52.973H19.6757V49.946H12.1081V46.919H9.08108V43.892H6.05405V36.3244H3.02702Z" fill="#FFFE54"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M36.3243 0H19.6757V3.02703L12.1081 3.02703V6.05405H9.08108L9.08108 9.08108H6.05405L6.05405 12.1081L3.02703 12.1081L3.02703 19.6757H0V36.3243H3.02703L3.02703 19.6757H6.05405V12.1081L9.08108 12.1081V9.08108L12.1081 9.08108V6.05405L19.6757 6.05405L19.6757 3.02703H36.3243V6.05405H43.8919V9.08108H46.9189V12.1081H49.9459V19.6757H52.973L52.973 36.3243L49.9459 36.3243V43.8919H46.9189V46.9189H43.8919V49.9459H36.3243V52.973H19.6757V49.9459H12.1081V46.9189H9.08108V43.8919H6.05406L6.05406 36.3243H3.02703L3.02703 43.8919H6.05406V46.9189H9.08108V49.9459H12.1081L12.1081 52.973H19.6757V56H36.3243L36.3243 52.973H43.8919V49.9459H46.9189V46.9189H49.9459V43.8919H52.973V36.3243L56 36.3243V19.6757L52.973 19.6757V12.1081H49.9459V9.08108H46.9189V6.05405H43.8919V3.02703H36.3243V0Z" fill="black"/>
                                <rect x="15.1351" y="19.6758" width="6.05406" height="6.05405" fill="black"/>
                                <rect x="34.8108" y="19.6758" width="6.05405" height="6.05405" fill="black"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M36.3243 43.8918L19.6757 43.8918L19.6757 40.8648L36.3243 40.8648L36.3243 43.8918ZM16.6487 37.8378L19.6757 37.8378L19.6757 40.8648L16.6487 40.8648L16.6487 37.8378ZM16.6487 37.8378L13.6216 37.8378L13.6216 34.8108L16.6487 34.8108L16.6487 37.8378ZM42.3784 37.8378L39.3514 37.8378L39.3514 34.8108L42.3784 34.8108L42.3784 37.8378ZM39.3514 37.8378L39.3514 40.8648L36.3243 40.8648L36.3243 37.8378L39.3514 37.8378Z" fill="black"/>
                            </svg>
                        </div>
                    </div>
                    <div class="team__text" data-lang="eng">
                    ${eng[1]}
                    </div>
                    <div class="team__text" data-lang="ua">
                    ${ua[1]}
                    </div>
                    
    
    `;
    document.getElementById('team').insertAdjacentHTML('afterbegin', inner);
}

window.onload = () => {
    insertTeamItem();
    langButton.closest('.language__elem').classList.add('language__elem--current');

    if(currentLang !== 'eng') {
        translatePage('home', currentLang);
    }
    
}