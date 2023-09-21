var i = 0;
var txt = 'HELLO WORLD'; /* The text */
var speed = 175; /* The speed/duration of the effect in milliseconds */
var dateStart = new Date("2019-09-19T10:00:00")

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
    str += date.getUTCDate() - 1 + 1460 + " jours, ";
    str += date.getUTCHours() + "h ";
    str += date.getUTCMinutes() + "m ";
    str += date.getUTCSeconds() + "s";
    document.getElementById("timer").innerHTML = str;
    setTimeout(timer, 1000)
}

function fadeIn(elem) {
    document.getElementById(elem).classList += " fadeIn"
}

// The debounce function receives our function as a parameter
const debounce = (fn) => {

    // This holds the requestAnimationFrame reference, so we can cancel it if we wish
    let frame;

    // The debounce function returns a new function that can receive a variable number of arguments
    return (...params) => {

        // If the frame variable has been defined, clear it now, and queue for next frame
        if (frame) {
            cancelAnimationFrame(frame);
        }

        // Queue our function call for the next frame
        frame = requestAnimationFrame(() => {

            // Call our function and pass any params we received
            fn(...params);
        });

    }
};


// Reads out the scroll position and stores it in the data attribute
// so we can use it in our stylesheets
const storeScroll = () => {
    document.documentElement.dataset.scroll = window.scrollY;
}

// Listen for new scroll events, here we debounce our `storeScroll` function
document.addEventListener('scroll', debounce(storeScroll), { passive: true });

// Update scroll position for first time
storeScroll();

// typeWriter()