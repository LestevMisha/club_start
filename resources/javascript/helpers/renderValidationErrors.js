import injectContentStylesAndScripts from "./injectContentStylesAndScripts.mjs";

export default function renderValidationErrors(target, errorsObj = {}) {
    const modernInputs = target.querySelectorAll(".modern-family");

    modernInputs.forEach(modernInput => {
        const key = modernInput.getAttribute("data-attribute");
        const error = errorsObj[key];

        const label = modernInput.querySelector(".js-input-label");
        const input = modernInput.querySelector(".js-input-field");
        const errorLabel = modernInput.querySelector(".js-error-label");

        if (error) {
            injectContentStylesAndScripts(errorLabel, error, true);
            input.classList.add("input-field-error");
            label.classList.add("input-label-error");
        } else {
            errorLabel.innerHTML = "";
            input.classList.remove("input-field-error");
            label.classList.remove("input-label-error");
        }
    });
}
