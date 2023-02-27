import Splide from '@splidejs/splide';
import menuActivator from "./lib/menu";

menuActivator('menu-button', 'header');

document.addEventListener( 'DOMContentLoaded', function () {

    var splides = document.querySelectorAll('#splide');
    if(splides.length){
        for(let i=0; i<splides.length; i++){
            const splideElement = splides[i];
            const splideDefaultOptions = 
            {
                type: 'loop',
                perPage: 1,
                pagination : false,
                autoHeight: true,
                padding: 0,
                gap:0,
            } 
            const splide = new Splide( splideElement, splideDefaultOptions ); 
            splide.mount();
        }
    }
});