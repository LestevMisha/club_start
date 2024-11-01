
export default function renderValidationErrors(target, errorsObj) {

    for (const [key, error] of Object.entries(errorsObj)) {

        const input = target.querySelector(`#js-${key}-input`);
        const label = target.querySelector(`#js-${key}-label`);
        const errorLabel = target.querySelector(`#js-${key}-error-label`);

        if (error) {
            errorLabel.innerHTML = error;
            input.classList.add("input-field-error");
            label.classList.add("input-label-error");
        } else {
            errorLabel.innerHTML = "";
            input.classList.remove("input-field-error");
            label.classList.remove("input-label-error");
        }
    }
}