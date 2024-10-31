import getElement from "./get-element.mjs";
import setHTML from "./set-html.mjs";

// displays errros
export default function handleFieldError(field, error) {
    const input = getElement(`#js-${field}-input`);
    if (!input) return;

    const label = getElement(`#js-${field}-label`);
    if (!label) return;

    if (error) {
        setHTML(`#js-${field}-error-label`, error);
        input.classList.add("input-field-error");
        label.classList.add("input-label-error");
    } else {
        setHTML(`#js-${field}-error-label`, "");
        input.classList.remove("input-field-error");
        label.classList.remove("input-label-error");
    }
}