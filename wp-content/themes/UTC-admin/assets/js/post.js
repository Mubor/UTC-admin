import Splide from '@splidejs/splide';
import menuActivator from "./lib/menu";

menuActivator('menu-button', 'header');

document.addEventListener( 'DOMContentLoaded', function () {

    var splides = document.querySelectorAll('#splide');
    if(splides.length){
        for(var i=0; i<splides.length; i++){
            var splideElement = splides[i];
            var splideDefaultOptions = 
            {
                type: 'loop',
                perPage: 1,
                pagination : false,
                autoHeight: true,
                padding: 0,
                gap:0,
            } 
            var splide = new Splide( splideElement, splideDefaultOptions ); 
            splide.mount();
        }
    }
});