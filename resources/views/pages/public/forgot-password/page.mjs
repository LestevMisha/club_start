import renderBlockTime from "@helpers/renderBlockTime.mjs";
import verifyRecaptcha from "@api-deps/verifyRecaptcha.mjs";
import injectContentStylesAndScripts from "@helpers/injectContentStylesAndScripts.mjs";
import renderValidationErrors from "@helpers/renderValidationErrors";
import postRequest from "@apis/postRequest.mjs";

(() => {
    const form = document.querySelector("#js-forgot-password-form");
    const loader = document.querySelector("#js-forgot-password-loader");
    const component = form.querySelector("modern-input[data-attribute='email']");
    const button = form.querySelector("#js-submit-button");

    form.addEventListener("submit", async (event) => {
        event.preventDefault();
        loader.classList.add("active");

        try {
            // Prepare form data and API details
            const formData = new FormData(form);
            const url = `${window.location.origin}/post/forgot-password/sendResetLink`;
            const contentType = "application/x-www-form-urlencoded";

            // reCAPTCHA verification
            const { success, errors } = await verifyRecaptcha();
            if (!success) return injectContentStylesAndScripts(document.body, errors.error);

            // Send form data
            const response = await postRequest(url, contentType, formData);

            // Render any errors or handle response
            renderValidationErrors(form, response?.errors);
            renderBlockTime(component, button, response?.availableIn);
            injectContentStylesAndScripts(document.body, response?.errors?.error || response?.data?.message);
        } catch (error) {
            console.error("Form submission error:", error);
        } finally {
            loader.classList.remove("active");
        }
    });
})();