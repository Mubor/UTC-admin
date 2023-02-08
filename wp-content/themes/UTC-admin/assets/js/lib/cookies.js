export const getCookie =(key) => {
    const cookies = document.cookie.split(';');
    let _cookie = ''
    for (const cookie of cookies) {
        const temp = cookie.split('=');
        _cookie = temp[0] === key ? temp[1] : '';
    }
    return _cookie
}
