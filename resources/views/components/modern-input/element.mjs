import getElements from "@helpers/get-elements.mjs";
import resetInput from "@helpers/reset-input.mjs";

(() => {
    const components = getElements("modern-input");
    components.forEach(component => {
        const attribute = component.getAttribute("data-attribute");
        const button = component.querySelector(`#js-${attribute}-button`);
        button.addEventListener("click", (e) => {
            resetInput(e);
        });
    });
})();