import verifyRecaptcha from "@api-deps/verifyRecaptcha.mjs";
import postRequest from "@apis/postRequest.mjs";
import injectContentStylesAndScripts from "@helpers/injectContentStylesAndScripts.mjs";
import renderValidationErrors from "@helpers/renderValidationErrors";
import renderBlockTime from "@helpers/renderBlockTime.mjs";

(() => {
    const cardCredentialsForms = document.querySelectorAll("card-credentials-form");
    cardCredentialsForms.forEach(cardCredentialsForm => {

        // Run only for newly initialized elements
        if (cardCredentialsForm.getAttribute("data-js-initialized") !== "false") return;
        cardCredentialsForm.setAttribute("data-js-initialized", true);


        const form = cardCredentialsForm.querySelector("form");
        const modernLoader = cardCredentialsForm.querySelector("modern-loader");
        const modernCreditCardComponent = cardCredentialsForm.querySelector("modern-credit-card-input")

        // Handle form submission
        form.addEventListener("submit", async (event) => {
            event.preventDefault();

            // Activate loader
            modernLoader.classList.add("active");

            try {
                // reCAPTCHA verification
                const { success, errors } = await verifyRecaptcha();

                // Show error message if verification fails
                if (!success) {
                    injectContentStylesAndScripts(document.body, errors.error);
                    return;
                }

                // Prepare form data and API details
                const formData = new FormData(form);
                const url = `${window.location.origin}/post/components/card-credentials-form/saveCardCredentials`;
                const contentType = "application/x-www-form-urlencoded";

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