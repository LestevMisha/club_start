import renderBlockTime from "@helpers/renderBlockTime.mjs";
import verifyRecaptcha from "@api-deps/verifyRecaptcha.mjs";
import injectContentStylesAndScripts from "@helpers/injectContentStylesAndScripts.mjs";
import renderValidationErrors from "@helpers/renderValidationErrors";
import postRequest from "@apis/postRequest.mjs";

(() => {
    const form = document.querySelector("#js-reset-password-form");
    const loader = document.querySelector("#js-reset-password-loader");
    const component = form.querySelector("xpassword-input[data-attribute='password']");
    const button = form.querySelector("#js-submit-button");
    console.log(component);
    console.log(button);

    form.addEventListener("submit", async (event) => {
        event.preventDefault();
        loader.classList.add("active");

        try {
            // Prepare form data and API details
            const formData = new FormData(form);
            const url = `${window.location.origin}/post/reset-password/resetPassword`;
            const contentType = "application/x-www-form-urlencoded";

            // reCAPTCHA verification
            const captchaResponse = await verifyRecaptcha();
            if (!captchaResponse?.success) { return injectContentStylesAndScripts(document.body, captchaResponse?.backend?.message); };

            // Send form data
            const response = await postRequest(url, contentType, formData);

            // Render any errors or handle response
            renderValidationErrors(form, response?.backend?.errors);
            console.log(component, button, response?.backend?.availableIn);
            renderBlockTime(component, button, response?.backend?.availableIn);
            injectContentStylesAndScripts(document.body, response?.backend?.message);
        } catch (error) {
            console.error("Form submission error:", error);
        } finally {
            loader.classList.remove("active");
        }
    });
})();