import verifyRecaptcha from "@api-deps/verifyRecaptcha.mjs";
import injectContentStylesAndScripts from "@helpers/injectContentStylesAndScripts.mjs";
import postRequest from "@apis/postRequest.mjs";
import renderBlockTime from "@helpers/renderBlockTime.mjs";
import renderValidationErrors from "@helpers/renderValidationErrors";

(() => {
    const updateImageForm = document.querySelector("#js-update-image-form");
    const modernLoader = updateImageForm.querySelector("modern-loader");
    //
    const component = updateImageForm.querySelector("modern-submit-button");
    const submitButton = component.querySelector("button[type='submit']");

    // Handle form submission
    updateImageForm.addEventListener("submit", async (event) => {
        event.preventDefault();

        // Activate loader
        modernLoader.classList.add("active");

        try {
            // Prepare form data and API details
            const url = `${window.location.origin}/post/profile/updateImage`;
            const contentType = "application/x-www-form-urlencoded";
            const formData = new FormData(updateImageForm);

            // reCAPTCHA verification
            const { success, errors } = await verifyRecaptcha();

            // Show error message if verification fails
            if (!success) {
                injectContentStylesAndScripts(document.body, errors.error);
                return;
            }

            // Request update
            const response = await postRequest(url, contentType, formData);

            // Render any errors or handle response
            renderValidationErrors(updateImageForm, response?.errors);
            renderBlockTime(component, submitButton, response?.availableIn);

        } catch (error) {
            console.error("Form submission error:", error);
        } finally {
            // Deactivate loader
            modernLoader.classList.remove("active");
        }
    });
})();