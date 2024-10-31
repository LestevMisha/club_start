import getElement from "./get-element.mjs";

// Function to update the countdown timer
export default function updateCountdown(seconds, target, form) {
    const errorElement = getElement(`#js-${form}-form #js-${target}-error-label`);
    const countdownElement = getElement(`#js-${form}-form #js-${target}-error-label .b-text`);
    const buttonElement = getElement(`#js-${form}-form button[type='submit']`);
    const inputElement = getElement(`#js-${form}-form #js-${target}-input`);

    if (!countdownElement) return;
    if (!buttonElement) return;
    if (!inputElement) return;

    buttonElement.disabled = true;
    inputElement.setAttribute("readonly", true);

    const interval = setInterval(() => {
        seconds--;
        countdownElement.textContent = countdownElement.textContent.replace(/\d+/g, seconds);
        buttonElement.disabled = true;
        inputElement.setAttribute("readonly", true);
        if (seconds <= 0) {
            clearInterval(interval);
            errorElement.textContent = ''; // Clear message when done
            inputElement.classList.remove("input-field-error");
            inputElement.removeAttribute("readonly");
            buttonElement.disabled = false;
        }
    }, 1000);
}