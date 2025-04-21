import verifyRecaptcha from "@api-deps/verifyRecaptcha.mjs";
import injectContentStylesAndScripts from "@helpers/injectContentStylesAndScripts.mjs";
import postRequest from "@apis/postRequest.mjs";
import renderBlockTime from "@helpers/renderBlockTime.mjs";
import renderValidationErrors from "@helpers/renderValidationErrors";

(() => {
    const form = document.querySelector("#js-authenticate-form");
    const xloader = document.querySelector("xloader#js-authenticate-loader");
    const component = form.querySelector("xinput[data-attribute='email']");
    const button = form.querySelector("#js-submit-button");

    // Handle form submission
    form.addEventListener("submit", async (event) => {
        event.preventDefault();

        // Activate loader
        xloader.classList.add("active");

        try {
            // Prepare form data and API details
            const formData = new FormData(form);
            const url = `${window.location.origin}/auth/login/authenticate`;
            const contentType = "application/x-www-form-urlencoded";

            // reCAPTCHA verification
            const captchaResponse = await verifyRecaptcha();
            if (!captchaResponse?.success) {return injectContentStylesAndScripts(document.body, captchaResponse?.backend?.message);}

            // Send form data
            const response = await postRequest(url, contentType, formData);

            // Render any errors or handle response
            renderValidationErrors(form, response?.backend?.errors);
            renderBlockTime(component, button, response?.backend?.availableIn);

        } catch (error) {
            console.error("Form submission error:", error);
        } finally {
            // Deactivate loader
            xloader.classList.remove("active");
        }
    });
})();
