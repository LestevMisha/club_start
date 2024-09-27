(() => {
    const components = document.querySelectorAll("modern-copy-input");
    components.forEach((component) => {

        const attribute = component.getAttribute("data-attribute");
        const copyButton = getElement(`#js-${attribute}-button`);
        const input = getElement(`#js-${attribute}-input`);
        const modal = getElement("#modal");

        // Use async/await for clipboard operation
        copyButton.addEventListener("click", async () => {
            try {
                await navigator.clipboard.writeText(input.value);
                // Add animation
                modal.classList.add("animate");
                // Clear animation after 2 seconds
                setTimeout(() => {
                    modal.classList.remove("animate");
                }, 2000);
            } catch (error) {
                console.error("Clipboard write failed: ", error);
            }
        });
    });
})();