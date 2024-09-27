(() => {
    // initialize
    const component = getElement("modern-credit-card-input");
    const attribute = component.getAttribute("data-attribute");

    const input = getElement(`#js-${attribute}-input`);
    const button = getElement(`#js-${attribute}-button`);
    const amountDisplay = getElement('#js-amount');
    const maxLength = 16;

    input.addEventListener('input', e => {
        const target = e.target;
        const sanitizedValue = target.value.replace(/[^\d]/g, "").slice(0, 16); // Remove all whitespace
        const formattedValue = sanitizedValue.replace(/(\d{4})(?=\d)/g, '$1 '); // Add spaces after every four digits
        target.value = formattedValue;

        if (sanitizedValue.length === 16) {
            button.removeAttribute("disabled");
        } else {
            button.setAttribute("disabled", true);
        }
        updateLength(amountDisplay, sanitizedValue.length, maxLength);
    });

    function updateLength(target, length, maxLength) {
        target.textContent = `${length}/${maxLength}`;

        if (length === 0) return target.removeAttribute("style");

        // Calculate color based on the input length
        const greenValue = Math.min(255, Math.floor((length / maxLength) * 255));
        target.setAttribute("style", `color: rgb(${255 - greenValue}, ${greenValue}, 0) !important`);
    }
})()