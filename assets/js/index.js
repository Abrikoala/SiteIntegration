var i = 0;
var txt = 'HELLO WORLD'; /* The text */
var speed = 175; /* The speed/duration of the effect in milliseconds */
var dateStart = new Date("2023-09-19T10:00:00")

function typeWriter() {
    if (i < txt.length) {
        document.getElementById("logo").innerHTML += txt.charAt(i);
        i++;
        setTimeout(typeWriter, speed);
    }
}


function timer() {
    let date = new Date(new Date() - dateStart);
    var str = '';
    str += date.getUTCDate() - 1 + " jours, ";
    str += date.getUTCHours() + "h ";
    str += date.getUTCMinutes() + "m ";
    str += date.getUTCSeconds() + "s";
    document.getElementById("timer").innerHTML = str;
    setTimeout(timer, 1000)
}

function fadeIn(elem) {
    document.getElementById(elem).classList += " fadeIn"
}

// typeWriter()