import injectContentStylesAndScripts from "./injectContentStylesAndScripts.mjs";

export default function renderValidationErrors(target, errorsObj = {}) {
    const modernInputs = target.querySelectorAll(".js-validation");

    modernInputs.forEach(modernInput => {
        const key = modernInput.getAttribute("data-attribute");
        const error = errorsObj[key];

        const label = modernInput.querySelector(".js-label");
        const input = modernInput.querySelector(".js-input");
        const errorLabel = modernInput.querySelector(".js-error-label");

        if (error) {
            injectContentStylesAndScripts(errorLabel, error, true);
            input.classList.add("error");
            label.classList.add("error");
        } else {
            errorLabel.innerHTML = "";
            input.classList.remove("error");
            label.classList.remove("error");
        }
    });
}
