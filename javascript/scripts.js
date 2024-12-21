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

// Start the clock
setInterval(updateClock, 1000);
updateClock();

document.addEventListener("DOMContentLoaded", function () {
    const toggleButton = document.querySelector('.toggle');
    const menu = document.querySelector('.menu');

    toggleButton.addEventListener('click', () => {
        menu.classList.toggle('opened');
    });
});

document.getElementById('skills-button').addEventListener('click', function(event) {
    event.preventDefault();

    // Scroll to the skills section
    const skillsSection = document.getElementById('skills-selection');
    skillsSection.scrollIntoView({ behavior: 'smooth' });

    skillsSection.classList.add('animate');

    // setTimeout(function() {
    //     const skillBars = document.querySelectorAll('.skill-per');
    //     skillBars.forEach(bar => {
    //         bar.style.width = '0'; // Reset width to 0
    //         bar.offsetHeight; // Trigger reflow

    //         // Set the final width first
    //         bar.style.width = bar.getAttribute('data-per'); // Set width to the data-per value

    //         // Add the animation class
    //         bar.classList.add('fill-animation');
    //     });
    // }, 500); // Adjust this delay as needed
});