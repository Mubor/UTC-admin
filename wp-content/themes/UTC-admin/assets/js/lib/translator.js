

export const translatePage = (dataset, lang) => {
    const eng = [...document.querySelectorAll('[data-lang="eng"]')];
    const ua = [...document.querySelectorAll('[data-lang="ua"]')];
    const texts = {
        eng, 
        ua
    }
    
    for (const key in texts) {
        const arr = texts[key];
        if(key === lang) {
            arr.forEach( e => {
                e.style.display = 'unset';
            });
        }
        else {
            arr.forEach( e => {
                e.style.display = 'none';
            });
        }
    }
   
}
