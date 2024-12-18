function updateClock() {
    const now = new Date();
    let hours = now.getHours();
    let minutes = now.getMinutes();
    let seconds = now.getSeconds();

    // Ensure double digits
    hours = hours < 10 ? '0' + hours : hours;
    minutes = minutes < 10 ? '0' + minutes : minutes;
    seconds = seconds < 10 ? '0' + seconds : seconds;

    // Update each digit individually
    updateDigit(document.getElementById('hours'), hours);
    updateDigit(document.getElementById('minutes'), minutes);
    updateDigit(document.getElementById('seconds'), seconds);
}

function updateDigit(element, newValue) {
    const oldValue = element.textContent;

    if (oldValue !== newValue) {
        // Morph out the current value
        element.classList.add('morph-out');

        // Wait for the morph-out to complete, then update and morph in
        setTimeout(() => {
            element.textContent = newValue;
            element.classList.remove('morph-out');
            element.classList.add('morph-in');
        }, 300); // Matches the CSS transition time
    }
}

// Remove morph-in class after animation to reset state
document.querySelectorAll('.digit').forEach(digit => {
    digit.addEventListener('transitionend', () => {
        digit.classList.remove('morph-in');
    });
});

// Start the clock
setInterval(updateClock, 1000);
updateClock();


// Remove fade-in class after animation to reset state
document.querySelectorAll('.digit').forEach(digit => {
    digit.addEventListener('transitionend', () => {
        digit.classList.remove('fade-in');
    });
});

// Start the clock
setInterval(updateClock, 1000);
updateClock();


