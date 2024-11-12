import verifyRecaptcha from "@api-deps/verifyRecaptcha.mjs";
import postRequest from "@apis/postRequest.mjs";
import injectContentStylesAndScripts from "@helpers/injectContentStylesAndScripts.mjs";
import renderValidationErrors from "@helpers/renderValidationErrors";

(() => {
    const form = document.querySelector("#js-store-form");
    const modernLoader = document.querySelector("modern-loader#js-store-loader");
    const injectionElement = document.querySelector("#js-next-step");

    // Handle form submission
    form.addEventListener("submit", async (event) => {
        event.preventDefault();

        // Activate loader
        modernLoader.classList.add("active");

        try {
            // reCAPTCHA verification
            const captchaResponse = await verifyRecaptcha();
            if (!captchaResponse?.success) return injectContentStylesAndScripts(document.body, captchaResponse?.backend?.message);

            // Prepare form data and API details
            const formData = new FormData(form);
            const url = `${window.location.origin}/post/register/store`;
            const contentType = "application/x-www-form-urlencoded";

            // Send form data
            const response = await postRequest(url, contentType, formData);
            if (response?.backend?.view) injectContentStylesAndScripts(injectionElement, response.backend.view);

            // Render any errors or handle response
            renderValidationErrors(form, response?.backend?.errors);

        } catch (error) {
            console.error("Form submission error:", error);
        } finally {
            // Deactivate loader
            modernLoader.classList.remove("active");
        }
    });

})();
