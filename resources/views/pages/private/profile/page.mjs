import verifyRecaptcha from "@api-deps/verifyRecaptcha.mjs";
import injectContentStylesAndScripts from "@helpers/injectContentStylesAndScripts.mjs";
import postRequest from "@apis/postRequest.mjs";
import renderBlockTime from "@helpers/renderBlockTime.mjs";
import renderValidationErrors from "@helpers/renderValidationErrors";

(() => {
    const updateImageForm = document.querySelector("#js-update-image-form");
    const xloader = updateImageForm.querySelector("xloader");
    const component = updateImageForm.querySelector("xsubmit-input");
    const submitButton = component.querySelector(".js-button[type='submit']");

    // Handle form submission
    updateImageForm.addEventListener("submit", async (event) => {
        event.preventDefault();

        // Activate loader
        xloader.classList.add("active");

        try {
            // Prepare form data and API details
            const formData = new FormData(updateImageForm);
            const url = `${window.location.origin}/post/profile/updateImage`;
            const contentType = "application/x-www-form-urlencoded";

            // reCAPTCHA verification
            const captchaResponse = await verifyRecaptcha();
            if (!captchaResponse?.success) {return injectContentStylesAndScripts(document.body, captchaResponse?.backend?.message);}

            // Send form data
            const response = await postRequest(url, contentType, formData);

            // Render any errors or handle response
            renderValidationErrors(updateImageForm, response?.backend?.errors);
            renderBlockTime(component, submitButton, response?.availableIn);
        } catch (error) {
            console.error("Form submission error:", error);
        } finally {
            xloader.classList.remove("active");
        }

    });

    const verifyEmailButton = document.querySelector("xbutton[data-attribute='emailVerify']");
    const verifyEmailXloader = verifyEmailButton.querySelector("xloader");

    // Handle form submission
    verifyEmailButton.addEventListener("click", async () => {

        // Activate loader
        verifyEmailXloader.classList.add("active");
        verifyEmailButton.classList.add("pointer-events-none");

        try {
            // Prepare form data and API details
            const url = `${window.location.origin}/post/profile/verifyEmail`;
            const contentType = "application/x-www-form-urlencoded";

            // reCAPTCHA verification
            const captchaResponse = await verifyRecaptcha();
            if (!captchaResponse?.success) {return injectContentStylesAndScripts(document.body, captchaResponse?.backend?.message);}

            // Send form data
            const response = await postRequest(url, contentType);
            if (response) {return injectContentStylesAndScripts(document.body, response?.backend?.message);}

        } catch (error) {
            console.error("Form submission error:", error);
        } finally {
            verifyEmailXloader.classList.remove("active");
            verifyEmailButton.classList.remove("pointer-events-none");
        }

    });    
})();
