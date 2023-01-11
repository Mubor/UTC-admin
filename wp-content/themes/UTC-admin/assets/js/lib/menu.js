
const menuActivator = (buttonSelector, moveDownElementSelector) => {
    const menuButton = document.getElementById(buttonSelector);
    const header = document.querySelector(moveDownElementSelector);

    const switchMenu = () => {
        header.classList.toggle('open');
        document.body.classList.toggle('overflow');
        
        if (header.classList[header.classList.length-1] === 'open') {
            menuButton.innerHTML = `<span data-lang="eng">close menu</span>
            <span data-lang="ua">закрити меню</span>`
        }
        else {
            menuButton.innerHTML = `<span data-lang="eng">menu</span>
            <span data-lang="ua">меню</span>`
        }
    }

    menuButton.addEventListener('click', switchMenu);
}

export default menuActivator;




