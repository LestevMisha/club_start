
export default function renderInputError(component, error) {
    const componentAttr = component.getAttribute("data-attribute");

    const inputField = component.querySelector(`#js-${componentAttr}-input`);
    const inputLabel = component.querySelector(`#js-${componentAttr}-label`);
    const errorLabel = component.querySelector(`#js-${componentAttr}-error-label`);

    if (!inputField || !inputLabel || !errorLabel) return; // Ensure all elements are present

    // Update error label and toggle error classes
    errorLabel.innerHTML = error || "";
    inputField.classList.toggle("input-field-error", Boolean(error));
    inputLabel.classList.toggle("input-label-error", Boolean(error));

}
