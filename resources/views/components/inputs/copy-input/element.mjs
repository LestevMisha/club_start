import showMessage from "@helpers/showMessage.mjs";

(() => {
    const xcopyInputs = document.querySelectorAll("xcopy-input");
    xcopyInputs.forEach((xcopyInput) => {

        // Run only for newly initialized elements
        if (xcopyInput.getAttribute("data-js-initialized") !== "false") {return;}
        xcopyInput.setAttribute("data-js-initialized", true);


        const attribute = xcopyInput.getAttribute("data-attribute");
        const message = xcopyInput.getAttribute("data-message");

        const copyButton = xcopyInput.querySelector(`#js-${attribute}-button`);
        const input = xcopyInput.querySelector(` #js-${attribute}-input`);

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