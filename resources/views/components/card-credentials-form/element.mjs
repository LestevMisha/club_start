import postRequest from "@apis/post-request.mjs";
import reCAPTCHA from "@apis/reCAPTCHA.mjs";
import getElements from "@helpers/get-elements.mjs";
import getReCAPTCHASiteKey from "@helpers/get-reCAPTCHA-site-key.mjs";
import renderValidationErrors from "@helpers/render-validation-errors";
import renderBlockTime from "@helpers/render-block-time.mjs";
import renderComponentError from "@helpers/render-component-error.mjs";

(() => {
    const cardCredentialsForms = getElements("card-credentials-form");
    cardCredentialsForms.forEach(cardCredentialsForm => {
        const uid = cardCredentialsForm.getAttribute("data-uid");
        const form = cardCredentialsForm.querySelector(`card-credentials-form[data-uid='${uid}'] form`);
        const modernLoader = cardCredentialsForm.querySelector(`modern-loader[data-uid='${uid}']`);
        const modernCreditCardComponent = cardCredentialsForm.querySelector(`modern-credit-card-input[data-uid='${uid}']`)
        
        // Handle form submission
        form.addEventListener("submit", async (event) => {
            event.preventDefault();

            // Activate loader
            modernLoader.classList.add("active");

            try {
                // Prepare form data and API details
                const formData = new FormData(form);
                const url = `${window.location.origin}/post/components/card-credentials-form/saveCardCredentials`;
                const contentType = "application/x-www-form-urlencoded";

                // reCAPTCHA validation
                const recaptchaResponse = await reCAPTCHA(getReCAPTCHASiteKey(), contentType);
                if (!recaptchaResponse?.success) {
                    renderComponentError(modernCreditCardComponent, recaptchaResponse?.errors?.endpoint);
                    return;
                }

                // Send form data
                const response = await postRequest(url, contentType, formData);

                // Render any errors or handle response
                renderValidationErrors(form, response?.errors);
                renderBlockTime(form, modernCreditCardComponent, response?.availableIn);

            } catch (error) {
                console.error("Form submission error:", error);
            } finally {
                // Deactivate loader
                modernLoader.classList.remove("active");
            }
        });

    });
})();