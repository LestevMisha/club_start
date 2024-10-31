import getElement from "@helpers/get-element.mjs";
import postRequest from "@apis/post-request.mjs";

(() => {
    // set default
    const components = document.querySelectorAll("modern-password-input");
    components.forEach((component) => {

        const name = component.getAttribute("data-name");
        const attribute = component.getAttribute("data-attribute");
        const eye = getElement(`#js-${attribute}-eye`);
        const closedEye = getElement(`#js-${attribute}-closed-eye`);
        const input = getElement(`#js-${attribute}-input`);
        const eyeButton = getElement(`#${name}`);

        eyeButton.addEventListener("click", async function (event) {
            event.preventDefault();
            // toggle
            setPasswordVisibility(input.type === "text", input, eye, closedEye);
            const url = `${window.location.origin}/post/redis/toggleState`;
            const contentType = "application/x-www-form-urlencoded";
            const data = {
                "name": name
            };
            await postRequest(url, contentType, data);
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