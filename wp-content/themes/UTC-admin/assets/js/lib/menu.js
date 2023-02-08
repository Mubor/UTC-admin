
const menuActivator = (buttonSelector, moveDownElementSelector) => {
    const menuButton = document.getElementById(buttonSelector);
    const header = document.querySelector(moveDownElementSelector);

    const switchMenu = () => {
        const lang = localStorage.getItem('lang');
        header.classList.toggle('open');
        document.body.classList.toggle('overflow');



        if (header.classList[header.classList.length-1] === 'open') {
            menuButton.innerHTML = `<span>` + (lang === 'eng' ? 'close menu' : 'закрити меню') + `</span>`
        }
        else {
            menuButton.innerHTML = `<span>` + (lang === 'eng' ? 'menu' : 'меню') + `</span>`
        }
    }

    menuButton.addEventListener('click', switchMenu);
}

export default menuActivator;




