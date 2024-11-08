// Function to update the countdown timer
export default function renderBlockTime(component, button, availableIn) {

    if (!availableIn) return;
    let seconds = parseInt(availableIn, 10);
    const input = component.querySelector(".js-input-field");
    const errorLabel = component.querySelector(".js-error-label");

    // Disable input and button initially
    button.disabled = true;

    // Update countdown every second
    const intervalId = setInterval(() => {
        seconds--;

        // Update the countdown text in error label
        updateNumericSpan(errorLabel.querySelector(".b-text"), seconds);

        if (seconds <= 0) {
            clearInterval(intervalId);
            errorLabel.textContent = ''; // Clear error message
            input.classList.remove("input-field-error");
            button.disabled = false;
        }
    }, 1000);
}

// Helper function to find and update the numeric span
function updateNumericSpan(node, seconds) {
    if (!node) return;
    node.childNodes.forEach(child => {
        if (child.nodeType === Node.TEXT_NODE && /\d+/.test(child.textContent)) {
            child.textContent = child.textContent.replace(/\d+/, seconds);
        } else if (child.nodeType === Node.ELEMENT_NODE) {
            updateNumericSpan(child, seconds); // Recursively check child nodes
        }
    });
}
