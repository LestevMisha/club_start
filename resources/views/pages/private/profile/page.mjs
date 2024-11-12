import verifyRecaptcha from "@api-deps/verifyRecaptcha.mjs";
import injectContentStylesAndScripts from "@helpers/injectContentStylesAndScripts.mjs";
import postRequest from "@apis/postRequest.mjs";
import renderBlockTime from "@helpers/renderBlockTime.mjs";
import renderValidationErrors from "@helpers/renderValidationErrors";

(() => {
    const updateImageForm = document.querySelector("#js-update-image-form");
    const modernLoader = updateImageForm.querySelector("modern-loader");
    const component = updateImageForm.querySelector("modern-submit-input");
    const submitButton = component.querySelector("button[type='submit']");

    // Handle form submission
    updateImageForm.addEventListener("submit", async (event) => {
        event.preventDefault();

        // Activate loader
        modernLoader.classList.add("active");

        try {
            // Prepare form data and API details
            const formData = new FormData(updateImageForm);
            const url = `${window.location.origin}/post/profile/updateImage`;
            const contentType = "application/x-www-form-urlencoded";

            // reCAPTCHA verification
            const captchaResponse = await verifyRecaptcha();
            if (!captchaResponse?.success) return injectContentStylesAndScripts(document.body, captchaResponse?.backend?.message);

            // Send form data
            const response = await postRequest(url, contentType, formData);

            // Render any errors or handle response
            renderValidationErrors(updateImageForm, response?.backend?.errors);
            renderBlockTime(component, submitButton, response?.availableIn);
        } catch (error) {
            console.error("Form submission error:", error);
        } finally {
            modernLoader.classList.remove("active");
        }

    });
})();
