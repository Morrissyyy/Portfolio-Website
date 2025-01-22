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
        skillsSection.scrollIntoView({behavior: 'smooth'});

        skillsSection.classList.add('animate');

        document.querySelector('.form-container').addEventListener('submit', function (e) {
            e.preventDefault(); // Prevent the default form submission
            const name = document.querySelector('.name-input').value;
            const email = document.querySelector('.email-input').value;
            const message = document.querySelector('.message-input').value;

            console.log('Name:', name);
            console.log('Email:', email);
            console.log('Message:', message);

            alert('Form submitted successfully!');
        });
    }
)