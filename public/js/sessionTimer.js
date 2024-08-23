document.addEventListener("DOMContentLoaded", function() {
    function setCookie(name, value, days) {
        let expires = "";
        if (days) {
            let date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "") + expires + "; path=/";
    }

    function getCookie(name) {
        let nameEQ = name + "=";
        let ca = document.cookie.split(';');
        for (let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }

    if (!getCookie('sessionStartTime')) {
        setCookie('sessionStartTime', Date.now(), 1);
    }

    function pad(value) {
        return String(value).padStart(2, '0');
    }

    function updateTimer() {
        let sessionStartTime = parseInt(getCookie('sessionStartTime'));
        let currentTime = Date.now();
        let sessionDuration = Math.floor((currentTime - sessionStartTime) / 1000);

        let hours = pad(Math.floor(sessionDuration / 3600));
        let minutes = pad(Math.floor((sessionDuration % 3600) / 60));
        let seconds = pad(sessionDuration % 60);

        document.getElementById('session-timer').innerText = `Session Time: ${hours}:${minutes}:${seconds}`;
    }

    setInterval(updateTimer, 1000);
    updateTimer();
});