import showMessage from "@helpers/showMessage.mjs";

(() => {
    const copyInputs = document.querySelectorAll("modern-copy-input");
    copyInputs.forEach((copyInput) => {

        // Run only for newly initialized elements
        if (copyInput.getAttribute("data-js-initialized") !== "false") return;
        copyInput.setAttribute("data-js-initialized", true);


        const attribute = copyInput.getAttribute("data-attribute");
        const message = copyInput.getAttribute("data-message");

        const copyButton = copyInput.querySelector(`#js-${attribute}-button`);
        const input = copyInput.querySelector(` #js-${attribute}-input`);

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