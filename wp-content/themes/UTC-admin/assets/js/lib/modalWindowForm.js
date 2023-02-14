
export const toggleDialogVisibility = (e) => {
    e.preventDefault();

    const appDialog = document.getElementById('dialog');
    const openButton = document.getElementById('dialog-open-button');
    
    const displayValue = appDialog.style.display === 'none' ? 'block' : 'none';
    appDialog.style.display = displayValue;
    
    // wrapper.hidden = !wrapper.hidden;
    document.body.style.overflow = appDialog.style.display === 'none' ? '' : 'hidden';
}



export const setToggleMobilePlaceholderVisibilityEvent = (data) => {
    for (const element of data) {
        element.onchange = (e) => {
            const label = element.closest('label');
            const placeholder = label.querySelector('.placeholder');
            console.log(element.value)
            if(e.target.value !== '') {
                placeholder.style.display = 'none';
            }
            else {
                placeholder.style.display = 'block';
            }
        }
    }
}

