import menuActivator from "./lib/menu";
import { toggleDialogVisibility } from "./lib/modalWindowForm";
// import { translatePage } from "./lib/translator";
        
const calendarURL = "https://calendar.google.com/calendar/u/4?cid=dXQ5bWVsMmUxNmNpOW1lcTJ1dWJoZTBsMmdAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ";
const mediaContainer = document.getElementById('scroll-media');
const openButton = document.getElementById('dialog-open-button');
const closeButton = document.getElementById('close-button');
const appDialog = document.getElementById('dialog');
const form = document.forms.data;
// const currentLang = localStorage.getItem('lang');
// document.cookie = 'lang=' + currentLang;
console.log(document.cookie);

appDialog.hidden = true;

const scrollCenter = 989/2 - mediaContainer.clientWidth/2;
mediaContainer.scrollTo(scrollCenter, 0);

menuActivator('menu-button', 'header');

openButton.addEventListener('click', toggleDialogVisibility);
closeButton.addEventListener('click', toggleDialogVisibility);


const validateDate = (date) => {
    const inputedDate = new Date(date);
    
    if(inputedDate <= Date.now()){
        return false;
    }
    else return true;
}


form.time.onchange = (e) => {
    const style = form.time.style;
    style.color = form.time.value === '' ? 'black' :  '#b2b2b2';
}

function returnCookieId(name) {
    let name_cookie = document.cookie.match('(^|;)\\s*' + name + '\\s*=\\s*([^;]+)')?.pop() || '';
    return name_cookie;
}
function loadNewWindow() {
    const id = returnCookieId('eventSended2');
    if(id == "1") {
         window.location.href = "https://calendar.google.com/calendar/u/0?cid=ODEwZmYzMTJiMjc2NDM2MjMyNmU3MzczNTRlMmY2MTNhZWFkODJkNDMzYWYzYzY5MzI5YzI3ZTFhNTc3Mzg0OEBncm91cC5jYWxlbmRhci5nb29nbGUuY29t";
    }
}

document.getElementById('dialog-open-button').addEventListener('click', loadNewWindow);

