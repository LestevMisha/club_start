(() => {
    // initialize
    const modernCreditCardInputs = document.querySelectorAll("modern-credit-card-input");

    modernCreditCardInputs.forEach(modernCreditCardInput => {

        // Run only for newly initialized elements
        if (modernCreditCardInput.getAttribute("data-js-initialized") !== "false") return;
        modernCreditCardInput.setAttribute("data-js-initialized", true);

        
        const attribute = modernCreditCardInput.getAttribute("data-attribute");
        const input = modernCreditCardInput.querySelector(`#js-${attribute}-input`);
        const button = modernCreditCardInput.querySelector(`#js-${attribute}-button`);
        const amountDisplay = modernCreditCardInput.querySelector(`#js-${attribute}-amount`);
        const maxLength = 16;

        input.addEventListener('input', e => {
            const target = e.target;
            const sanitizedValue = target.value.replace(/[^\d]/g, "").slice(0, 16);
            const formattedValue = sanitizedValue.replace(/(\d{4})(?=\d)/g, '$1 ');

            target.value = formattedValue;
            button.disabled = sanitizedValue.length < maxLength;
            updateLength(amountDisplay, sanitizedValue.length, maxLength);
        });
    });

    function updateLength(target, length, maxLength) {
        target.textContent = `${length}/${maxLength}`;

        if (length === 0) return target.removeAttribute("style");

        // Calculate color based on the input length
        const greenValue = Math.min(255, Math.floor((length / maxLength) * 255));
        target.setAttribute("style", `color: rgb(${255 - greenValue}, ${greenValue}, 0) !important`);
    }
})()