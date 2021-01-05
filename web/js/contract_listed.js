$(function () {

    $('#show-all').on('click', function () {
        setCookie('showAll', true, 1);
        location.reload();
    });

    $('#show-my').on('change', function () {
        if ($('#show-my').is(':checked')) {
            setCookie('showMy', true, 30);
            location.reload();
        } else {
            setCookie('showMy', false, 30);
            location.reload();
        }
    });
});

function setCookie(cookieName, cookieValue, expireDays) {
    let date = new Date();
    date.setTime(date.getTime() + (expireDays * 24 * 60 * 60 * 1000));
    let expires = "expires=" + date.toUTCString();
    document.cookie = cookieName + "=" + cookieValue + ";" + expires + ";path=/";
}

function getCookie(cookieName) {
    let name = cookieName + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) === ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) === 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}