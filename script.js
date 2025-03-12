document.addEventListener("DOMContentLoaded", function () {
    const textElement = document.getElementById("animated-text");
    const text = textElement.innerText;
    textElement.innerText = ""; // Clear original text

    const colors = ["#ff5733", "#33ff57", "#3357ff"]; // Red, Green, Blue

    // Split text into individual letters
    text.split("").forEach((letter, index) => {
        let span = document.createElement("span");
        span.innerText = letter;
        span.classList.add("letter");
        textElement.appendChild(span);

        setTimeout(() => animateLetter(span, colors), index * 300);
    });
});

function animateLetter(letter, colors) {
    let i = 0;
    setInterval(() => {
        letter.style.color = colors[i];
        i = (i + 1) % colors.length; // Loop through colors
    }, 500);
}

    