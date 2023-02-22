import Splide from '@splidejs/splide';

document.addEventListener( 'DOMContentLoaded', function () {

    var splides = document.querySelectorAll('#splide');
    // 1. query slider elements: are there any splide elements?
    if(splides.length){
        // 2. process all instances
        for(var i=0; i<splides.length; i++){
            var splideElement = splides[i];
            //3.1 if no options are defined by 'data-splide' attribute: take these default options
            var splideDefaultOptions = 
            {
                type: 'loop',
                perPage: 1,
                pagination : false,
                // autoWidth: true,
                autoHeight: true,
                // speed:20000,
                padding: 0,
                gap:0,
            } 
            var splide = new Splide( splideElement, splideDefaultOptions ); 
            // 3. mount/initialize this slider
            splide.mount();
        }
    }
});

 // // debugger;
    // if (document.getElementById('splide')) { 
    // new Splide('#splide', {
    //     type: 'loop',
    //     perPage: 1,
    //     pagination : false,
    //     // autoWidth: true,
    //     autoHeight: true,
    //     // speed:20000,
    //     padding: 0,
    //     gap:0,
        
    // }).mount();