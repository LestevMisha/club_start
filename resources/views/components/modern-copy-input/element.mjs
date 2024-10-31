import getElement from "@helpers/get-element.mjs";
import showMessage from "@helpers/show-message.mjs";

(() => {
    const components = document.querySelectorAll("modern-copy-input");
    components.forEach((component) => {

        const attribute = component.getAttribute("data-attribute");
        const message = component.getAttribute("data-message");
        const copyButton = getElement(`#js-${attribute}-button`);
        const input = getElement(`#js-${attribute}-input`);

        // Use async/await for clipboard operation
        copyButton.addEventListener("click", async () => {
            try {
                await navigator.clipboard.writeText(input.value);
                showMessage(message);
            } catch (error) {
                console.error("Clipboard write failed: ", error);
            }
        });
    });
})();