// Function to update the countdown timer
export default function renderBlockTime(form, component, availableIn) {
    if (!availableIn) return;

    let seconds = parseInt(availableIn, 10);
    const componentAttr = component.getAttribute("data-attribute");

    const inputField = component.querySelector(`#js-${componentAttr}-input`);
    const errorLabel = component.querySelector(`#js-${componentAttr}-error-label`);
    const errorLabelText = errorLabel?.querySelector(".b-text");
    const submitButton = form.querySelector("button[type='submit']");

    // Ensure all elements are present
    if (!errorLabelText || !submitButton || !inputField) return;

    // Disable input and button initially
    submitButton.disabled = true;
    inputField.setAttribute("readonly", true);

    // Update countdown every second
    const intervalId = setInterval(() => {
        seconds--;
        
        // Update the countdown text in error label
        errorLabelText.textContent = errorLabelText.textContent.replace(/\d+/, seconds);

        if (seconds <= 0) {
            clearInterval(intervalId);
            errorLabel.textContent = ''; // Clear error message
            inputField.classList.remove("input-field-error");
            inputField.removeAttribute("readonly");
            submitButton.disabled = false;
        }
    }, 1000);
}
