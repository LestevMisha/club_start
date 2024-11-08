import postRequest from "@apis/postRequest.mjs";

(() => {
    // set default
    const passwordInputs = document.querySelectorAll("modern-password-input");
    passwordInputs.forEach((passwordInput) => {

        // Run only for newly initialized elements
        if (passwordInput.getAttribute("data-js-initialized") !== "false") return;
        passwordInput.setAttribute("data-js-initialized", true);


        const uid = passwordInput.getAttribute("data-uid");
        const globalName = passwordInput.getAttribute("data-name");
        const attribute = passwordInput.getAttribute("data-attribute");

        const eye = passwordInput.querySelector(`#js-${attribute}-eye`);
        const closedEye = passwordInput.querySelector(`#js-${attribute}-closed-eye`);
        const input = passwordInput.querySelector(`#js-${attribute}-input`);
        const eyeButton = passwordInput.querySelector(`#js-${attribute}-button`);
        const modernLoader = passwordInput.querySelector(`modern-loader[data-uid='${uid}']`);

        eyeButton.addEventListener("click", async function (event) {
            event.preventDefault();
            modernLoader.classList.add("active");
            // toggle
            const url = `${window.location.origin}/post/redis/toggleState`;
            const contentType = "application/x-www-form-urlencoded";
            const data = {
                "name": globalName
            };
            const response = await postRequest(url, contentType, data);
            setPasswordVisibility(response[globalName], input, eye, closedEye);
            modernLoader.classList.remove("active");
        });
    });

    // helper functions
    function setPasswordVisibility(isPasswordVisible, input, eye, closedEye) {
        const action = isPasswordVisible ? 'remove' : 'add';
        const reverseAction = isPasswordVisible ? 'add' : 'remove';

        eye.classList[action]("icon-inactive");
        closedEye.classList[reverseAction]("icon-inactive");

        input.type = isPasswordVisible ? "text" : "password";
    };

})();