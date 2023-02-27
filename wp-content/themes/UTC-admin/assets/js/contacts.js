import menuActivator from "./lib/menu";
import { toggleDialogVisibility, setToggleMobilePlaceholderVisibilityEvent } from "./lib/modalWindowForm";
        
const mediaContainer = document.getElementById('scroll-media');
const openButton = document.getElementById('dialog-open-button');
const closeButton = document.getElementById('close-button');
const appDialog = document.getElementById('dialog');
const form = document.forms.data;

appDialog.hidden = true;

const scrollCenter = 989/2 - mediaContainer.clientWidth/2;
mediaContainer.scrollTo(scrollCenter, 0);

menuActivator('menu-button', 'header');

openButton.addEventListener('click', toggleDialogVisibility);
closeButton.addEventListener('click', toggleDialogVisibility);


setToggleMobilePlaceholderVisibilityEvent([form.fullname, form.email, form.phone, form.time]);

form.time.addEventListener('change', (e) => {
    const style = form.time.style;
    style.color = form.time.value == ''
     ? window.getComputedStyle(form.time, null).getPropertyValue("background-color")
     : window.getComputedStyle(form.fullname, null).getPropertyValue("color");
});



function returnCookieId(name) {
    let name_cookie = document.cookie.match('(^|;)\\s*' + name + '\\s*=\\s*([^;]+)')?.pop() || '';
    return name_cookie;
}
function loadNewWindow() {
    const id = returnCookieId('event_sended');
    if(id == "1") { 
         window.location.href = "https://calendar.google.com/calendar/u/5?cid=dXQ5bWVsMmUxNmNpOW1lcTJ1dWJoZTBsMmdAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ";
    }
}

document.getElementById('dialog-open-button').addEventListener('click', loadNewWindow);