(() => {
    // initialize
    const xCreditCardInputs = document.querySelectorAll("xcredit-card-input");

    xCreditCardInputs.forEach(xCreditCardInput => {

        // Run only for newly initialized elements
        if (xCreditCardInput.getAttribute("data-js-initialized") !== "false") {return;}
        xCreditCardInput.setAttribute("data-js-initialized", true);

        
        const attribute = xCreditCardInput.getAttribute("data-attribute");
        const input = xCreditCardInput.querySelector(`#js-${attribute}-input`);
        const button = xCreditCardInput.querySelector(`#js-${attribute}-button`);
        const amountDisplay = xCreditCardInput.querySelector(`#js-${attribute}-amount`);
        const maxLength = 16;

        const handleInput = (e) => {
            const target = e.target;
            const sanitizedValue = target.value.replace(/[^\d]/g, "").slice(0, 16);
            const formattedValue = sanitizedValue.replace(/(\d{4})(?=\d)/g, "$1 ");

            target.value = formattedValue;
            button.disabled = sanitizedValue.length < maxLength;
            updateLength(amountDisplay, sanitizedValue.length, maxLength);
        };

        handleInput({target: input});
        input.addEventListener("input", handleInput);
    });

    function updateLength(target, length, maxLength) {
        target.textContent = `${length}/${maxLength}`;

        if (length === 0) {return target.removeAttribute("style");}

        // Calculate color based on the input length
        const greenValue = Math.min(255, Math.floor((length / maxLength) * 255));
        target.setAttribute("style", `color: rgb(${255 - greenValue}, ${greenValue}, 0) !important`);
    }
})();