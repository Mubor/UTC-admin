import menuActivator from "./lib/menu";
import { toggleDialogVisibility } from "./lib/modalWindowForm";
// import { translatePage } from "./lib/translator";
        
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


const validateDate = (date) => {
    const inputedDate = new Date(date);
    
    if(inputedDate <= Date.now()){
        return false;
    }
    else return true;
}


// form.time.onchange = (e) => {
//     debugger;
//     const style = form.time.style;
//     style.color = form.time.value === '' ? 'black' :  '#b2b2b2';
//     console.log(form.time.value);
// }

function returnCookieId(name) {
    let name_cookie = document.cookie.match('(^|;)\\s*' + name + '\\s*=\\s*([^;]+)')?.pop() || '';
    return name_cookie;
}
function loadNewWindow() {
    const id = returnCookieId('event_sended');
    console.log("sended: " + id)
    if(id == "1") { 
         window.location.href = "https://calendar.google.com/calendar/u/0?cid=ODEwZmYzMTJiMjc2NDM2MjMyNmU3MzczNTRlMmY2MTNhZWFkODJkNDMzYWYzYzY5MzI5YzI3ZTFhNTc3Mzg0OEBncm91cC5jYWxlbmRhci5nb29nbGUuY29t";
    }
}

document.getElementById('dialog-open-button').addEventListener('click', loadNewWindow);

