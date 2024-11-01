import showMessage from "@helpers/show-message.mjs";
import getElements from "@helpers/get-elements.mjs";

(() => {
    const copyInputs = getElements("modern-copy-input");
    copyInputs.forEach((copyInput) => {

        const uid = copyInput.getAttribute("data-uid");
        const attribute = copyInput.getAttribute("data-attribute");
        const message = copyInput.getAttribute("data-message");
        console.log(uid, attribute);

        const copyButton = copyInput.querySelector(`modern-copy-input[data-uid='${uid}'] #js-${attribute}-button`);
        const input = copyInput.querySelector(`modern-copy-input[data-uid='${uid}']  #js-${attribute}-input`);

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