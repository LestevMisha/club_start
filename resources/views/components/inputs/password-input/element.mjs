(() => {
    // set default
    const xpasswordInputs = document.querySelectorAll("xpassword-input");
    xpasswordInputs.forEach((xpasswordInput) => {

        // Run only for newly initialized elements
        if (xpasswordInput.getAttribute("data-js-initialized") !== "false") {return;}
        xpasswordInput.setAttribute("data-js-initialized", true);


        const attribute = xpasswordInput.getAttribute("data-attribute");

        const eye = xpasswordInput.querySelector(`#js-${attribute}-eye`);
        const closedEye = xpasswordInput.querySelector(`#js-${attribute}-closed-eye`);
        const input = xpasswordInput.querySelector(`#js-${attribute}-input`);
        const eyeButton = xpasswordInput.querySelector(`#js-${attribute}-button`);

        eyeButton.addEventListener("click", () => {
            setPasswordVisibility(eye.classList.contains("!hidden"), input, eye, closedEye);
        });
    });

    // helper functions
    function setPasswordVisibility(isPasswordVisible, input, eye, closedEye) {
        const action = isPasswordVisible ? "remove" : "add";
        const reverseAction = isPasswordVisible ? "add" : "remove";

        eye.classList[action]("!hidden");
        closedEye.classList[reverseAction]("!hidden");

        input.type = isPasswordVisible ? "text" : "password";
    };

})();