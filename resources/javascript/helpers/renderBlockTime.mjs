// Function to update the countdown timer
export default function renderBlockTime(component, button, availableIn) {

    if (!availableIn) { return; }
    const seconds = parseInt(availableIn, 10);
    const input = component.querySelector(".js-input");
    const errorLabel = component.querySelector(".js-error-label");

    // Disable input and button initially
    button.disabled = true;

    // Store the start time
    const startTime = Date.now();

    // Function to update the countdown
    const updateCountdown = () => {
        const elapsedTime = Math.floor((Date.now() - startTime) / 1000);
        const remainingTime = seconds - elapsedTime;

        // Update the countdown text in error label
        updateNumericSpan(errorLabel.querySelector("#availableIn"), remainingTime);

        if (remainingTime <= 0) {
            errorLabel.textContent = ""; // Clear error message
            input.classList.remove("error");
            button.disabled = false;
        } else {
            // Call updateCountdown again after 1 second
            setTimeout(updateCountdown, 1000);
        }
    };

    // Start the countdown
    updateCountdown();
}

// Helper function to find and update the numeric span
function updateNumericSpan(node, seconds) {
    if (!node) { return; }
    node.childNodes.forEach(child => {
        if (child.nodeType === Node.TEXT_NODE && /\d+/.test(child.textContent)) {
            child.textContent = child.textContent.replace(/\d+/, seconds);
        } else if (child.nodeType === Node.ELEMENT_NODE) {
            updateNumericSpan(child, seconds); // Recursively check child nodes
        }
    });
}
