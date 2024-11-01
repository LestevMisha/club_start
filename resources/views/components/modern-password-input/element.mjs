import postRequest from "@apis/post-request.mjs";
import getElements from "@helpers/get-elements.mjs";

(() => {
    // set default
    const passwordInputs = getElements("modern-password-input");
    passwordInputs.forEach((passwordInput) => {
        const uid = passwordInput.getAttribute("data-uid");
        const globalName = passwordInput.getAttribute("data-name");
        const attribute = component.getAttribute("data-attribute");

        const eye = passwordInput.querySelector(`modern-password-input[data-uid='${uid}'] #js-${attribute}-eye`);
        const closedEye = passwordInput.querySelector(`modern-password-input[data-uid='${uid}'] #js-${attribute}-closed-eye`);
        const input = passwordInput.querySelector(`modern-password-input[data-uid='${uid}'] #js-${attribute}-input`);
        const eyeButton = passwordInput.querySelector(`modern-password-input[data-uid='${uid}'] #${globalName}`);

        eyeButton.addEventListener("click", async function (event) {
            event.preventDefault();
            // toggle
            const url = `${window.location.origin}/post/redis/toggleState`;
            const contentType = "application/x-www-form-urlencoded";
            const data = {
                "name": globalName
            };
            const response = await postRequest(url, contentType, data);
            setPasswordVisibility(response[globalName], input, eye, closedEye);
        });
    });

    // helper functions
    function setPasswordVisibility(isPasswordVisible, input, eye, closedEye) {
        const action = isPasswordVisible ? 'add' : 'remove';
        const reverseAction = isPasswordVisible ? 'remove' : 'add';

        eye.classList[action]("icon-inactive");
        closedEye.classList[reverseAction]("icon-inactive");

        input.type = isPasswordVisible ? "password" : "text";
    };

})();